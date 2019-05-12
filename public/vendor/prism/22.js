(window.webpackJsonp=window.webpackJsonp||[]).push([[22],{"1pTT":function(e,r,t){"use strict";t.d(r,"b",function(){return n}),t.d(r,"c",function(){return o}),t.d(r,"d",function(){return s}),t.d(r,"e",function(){return i}),t.d(r,"a",function(){return u});var a=t("rywy");function n(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{};return Object(a.a)({url:"/user",method:"get",params:e})}function o(e){return Object(a.a)({url:"/user/"+e,method:"get"})}function s(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{};return Object(a.a)({url:"/user",method:"post",data:e})}function i(e,r){return Object(a.a)({url:"/user/"+e,method:"put",data:r})}function u(e){return Object(a.a)({url:"/user/"+e,method:"delete"})}},Ajch:function(e,r,t){"use strict";t.d(r,"a",function(){return a});t("RW0V"),t("rGqo");function a(e,r){var t=Object.assign({},e.getFieldsValue()),a={};Object.keys(t).forEach(function(e){a[e]={value:t[e],errors:r.hasOwnProperty(e)?r[e].map(function(e){return new Error(e)}):void 0}}),e.setFields(a)}},QIyF:function(e,r,t){var a=t("Kz5y");e.exports=function(){return a.Date.now()}},RChu:function(e,r,t){"use strict";t.r(r);var a=t("zeu2"),n=t("4yzM"),o=t("mmMr"),s=t("1pTT"),i=t("Ajch"),u={name:"UserUpdate",components:{ACard:a.a,ACol:n.a,ARow:o.a},data:function(){return{form:this.$form.createForm(this)}},methods:{handleSubmit:function(e){var r=this;e.preventDefault(),this.form.validateFields(function(e,t){e||Object(s.d)(t).then(function(e){var t=e.data;t.errors?Object(i.a)(r.form,t.errors):r.$confirm({title:t.message,okText:"确认",cancelText:"取消",onOk:function(){r.$router.push({name:"user.index"})}})})})}}},l=t("KHd+"),c=Object(l.a)(u,function(){var e=this,r=e.$createElement,t=e._self._c||r;return t("div",[t("a-row",{attrs:{gutter:{md:24}}},[t("a-col",{attrs:{md:16,sm:24}},[t("a-card",[t("a-form",{attrs:{form:e.form},on:{submit:e.handleSubmit}},[t("a-form-item",{attrs:{labelCol:{span:4},wrapperCol:{span:12},label:"用户名",extra:"此用户名将作为用户登录时所用的名称. 请不要与系统中现有的用户名重复."}},[t("a-input",{directives:[{name:"decorator",rawName:"v-decorator",value:["name",{rules:[{required:!0,message:"请输入用户名"}]}],expression:"[\n                'name',\n                {rules: [{ required: true, message: '请输入用户名' }]}\n              ]"}],attrs:{placeholder:"请输入用户名"}})],1),e._v(" "),t("a-form-item",{attrs:{labelCol:{span:4},wrapperCol:{span:12},label:"邮箱",extra:"电子邮箱地址将作为此用户的主要联系方式.请不要与系统中现有的电子邮箱地址重复."}},[t("a-input",{directives:[{name:"decorator",rawName:"v-decorator",value:["email",{rules:[{required:!0,message:"请输入邮箱"},{type:"email",message:"邮箱格式错误"}]}],expression:"[\n                'email',\n                {\n                  rules: [\n                    { required: true, message: '请输入邮箱' },\n                    { type: 'email', message: '邮箱格式错误' }\n                  ]}\n              ]"}],attrs:{placeholder:"请输入邮箱"}})],1),e._v(" "),t("a-form-item",{attrs:{labelCol:{span:4},wrapperCol:{span:12},label:"昵称",extra:"用户昵称可以与用户名不同, 用于前台显示.如果你将此项留空, 将默认使用用户名."}},[t("a-input",{directives:[{name:"decorator",rawName:"v-decorator",value:["display_name"],expression:"[\n                'display_name',\n              ]"}],attrs:{placeholder:"请输入昵称"}})],1),e._v(" "),t("a-form-item",{attrs:{labelCol:{span:4},wrapperCol:{span:12},label:"个人网址",extra:"此用户的个人主页地址, 请用 http:// 开头."}},[t("a-input",{directives:[{name:"decorator",rawName:"v-decorator",value:["url",{rules:[{type:"url",message:"个人网址格式错误"}]}],expression:"[\n                'url',\n                {\n                  rules: [\n                    { type: 'url', message: '个人网址格式错误' }\n                  ]\n                }\n              ]"}],attrs:{placeholder:"请输入个人网址"}})],1),e._v(" "),t("a-form-item",{attrs:{labelCol:{span:4},wrapperCol:{span:12},label:"密码",extra:"为此用户分配一个密码.建议使用特殊字符与字母、数字的混编样式,以增加系统安全性."}},[t("a-input",{directives:[{name:"decorator",rawName:"v-decorator",value:["password",{rules:[{required:!0,message:"请输入密码"}]}],expression:"[\n                'password',\n                {rules: [{ required: true, message: '请输入密码' }]}\n              ]"}],attrs:{type:"password",placeholder:"请输入密码"}})],1),e._v(" "),t("a-form-item",{attrs:{labelCol:{span:4},wrapperCol:{span:12},label:"确认密码",extra:"请确认你的密码, 与上面输入的密码保持一致."}},[t("a-input",{directives:[{name:"decorator",rawName:"v-decorator",value:["password_confirmation",{rules:[{required:!0,message:"请输入确认密码"}]}],expression:"[\n                'password_confirmation',\n                {rules: [{ required: true, message: '请输入确认密码' }]}\n              ]"}],attrs:{type:"password",placeholder:"请输入确认密码"}})],1),e._v(" "),t("a-form-item",{attrs:{labelCol:{span:4},wrapperCol:{span:12},label:"用户角色",extra:"不同的用户组拥有不同的权限."}},[t("a-select",{directives:[{name:"decorator",rawName:"v-decorator",value:["role",{initialValue:"admin"}],expression:"[\n                'role',\n                {\n                  initialValue: 'admin'\n                }\n              ]"}]},[t("a-select-option",{attrs:{value:"visitor"}},[e._v("\n                访问者\n              ")]),e._v(" "),t("a-select-option",{attrs:{value:"editor"}},[e._v("\n                编辑\n              ")]),e._v(" "),t("a-select-option",{attrs:{value:"admin"}},[e._v("\n                管理员\n              ")])],1)],1),e._v(" "),t("a-form-item",{attrs:{wrapperCol:{xs:{span:24,offset:0},sm:{span:12,offset:4}}}},[t("a-button",{attrs:{type:"primary",htmlType:"submit"}},[e._v("\n              创建\n            ")])],1)],1)],1)],1),e._v(" "),t("a-col",{attrs:{md:8,sm:12}},[t("a-card",[t("br"),e._v(" "),t("br"),e._v(" "),t("br"),e._v(" "),t("br"),e._v(" "),t("br"),e._v(" "),t("br"),e._v(" "),t("br"),e._v(" "),t("br"),e._v(" "),t("br"),e._v(" "),t("br"),e._v(" "),t("br"),e._v(" "),t("br"),e._v(" "),t("br"),e._v(" "),t("br"),e._v(" "),t("br"),e._v(" "),t("br"),e._v(" "),t("br"),e._v(" "),t("br"),e._v(" "),t("br")])],1)],1)],1)},[],!1,null,null,null);r.default=c.exports},RW0V:function(e,r,t){var a=t("S/j/"),n=t("DVgA");t("Xtr8")("keys",function(){return function(e){return n(a(e))}})},Xtr8:function(e,r,t){var a=t("XKFU"),n=t("g3g5"),o=t("eeVq");e.exports=function(e,r){var t=(n.Object||{})[e]||Object[e],s={};s[e]=r(t),a(a.S+a.F*o(function(){t(1)}),"Object",s)}},sEfC:function(e,r,t){var a=t("GoyQ"),n=t("QIyF"),o=t("tLB3"),s="Expected a function",i=Math.max,u=Math.min;e.exports=function(e,r,t){var l,c,m,d,p,v,f=0,b=!1,_=!1,h=!0;if("function"!=typeof e)throw new TypeError(s);function w(r){var t=l,a=c;return l=c=void 0,f=r,d=e.apply(a,t)}function g(e){var t=e-v;return void 0===v||t>=r||t<0||_&&e-f>=m}function x(){var e=n();if(g(e))return y(e);p=setTimeout(x,function(e){var t=r-(e-v);return _?u(t,m-(e-f)):t}(e))}function y(e){return p=void 0,h&&l?w(e):(l=c=void 0,d)}function C(){var e=n(),t=g(e);if(l=arguments,c=this,v=e,t){if(void 0===p)return function(e){return f=e,p=setTimeout(x,r),b?w(e):d}(v);if(_)return p=setTimeout(x,r),w(v)}return void 0===p&&(p=setTimeout(x,r)),d}return r=o(r)||0,a(t)&&(b=!!t.leading,m=(_="maxWait"in t)?i(o(t.maxWait)||0,r):m,h="trailing"in t?!!t.trailing:h),C.cancel=function(){void 0!==p&&clearTimeout(p),f=0,l=v=c=p=void 0},C.flush=function(){return void 0===p?d:y(n())},C}}}]);