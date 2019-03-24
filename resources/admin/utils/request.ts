import axios from 'axios'
import store from '@/store/index'
import { getToken, removeToken } from './auth'
import { notification } from 'ant-design-vue'

// 创建axios实例
const service = axios.create({
  baseURL: 'api', // api 的 base_url
  timeout: 5000 // 请求超时时间
})

// request拦截器
service.interceptors.request.use(
  request => {
    const token = getToken()
    if (token) {
      request.headers.common['Authorization'] = token
    }
    return request
  },
  error => {
    return Promise.reject(error)
  })

service.interceptors.response.use(
  response => {
    const token = response.headers.authorization
    if (token) {
      store.dispatch('auth/RefreshToken', token)
    }
    return response.data
  },
  error => {
    switch (error.response.status) {
      case 401: {
        if (store.getters['auth/check'] === true) {
          store.commit('auth/LOGOUT')
          location.reload()
        }
        break
      }
      case 400:
        return notification.error({
          message: '错误',
          description: error.response.data.error
        })
      default:
        break
    }
    return Promise.reject(error)
  })

export default service
