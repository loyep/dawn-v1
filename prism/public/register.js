(window.webpackJsonp=window.webpackJsonp||[]).push([[8,27],{"0X1z":function(t,n,a){"use strict";var e=a("pgDu"),r=a("VfG/"),o={zh_CN:"简体中文"},i={zh_CN:"🇨🇳"},s=["zh_CN"],c={name:"SelectLang",components:{ADropdown:e.a,AMenu:r.a,AMenuItem:r.a.Item},data:function(){return{locales:s,languageIcons:i,languageLabels:o}},computed:{locale:function(){return this.$i18n.locale}},methods:{changeLang:function(t){var n=t.key;this.$store.dispatch("app/SetLocale",n),this.$i18n.locale=n}}},l=(a("mTYx"),a("KHd+")),d=Object(l.a)(c,function(){var t=this,n=t.$createElement,a=t._self._c||n;return a("a-dropdown",{attrs:{placement:"bottomRight"},scopedSlots:t._u([{key:"overlay",fn:function(){return[a("a-menu",{staticClass:"menu",attrs:{selectedKeys:[t.locale]},on:{click:t.changeLang}},t._l(t.locales,function(n){return a("a-menu-item",{key:n},[a("span",{attrs:{role:"img",title:t.languageLabels[n],"aria-label":t.languageLabels[n]}},[t._v(t._s(t.languageIcons[n]))]),t._v("\n        "+t._s(t.languageLabels[n])+"\n      ")])}),1)]},proxy:!0}])},[a("span",{staticClass:"dropDown"},[a("a-icon",{attrs:{type:"global"}})],1)])},[],!1,null,"904f9c00",null);n.a=d.exports},"7e7F":function(t,n,a){(t.exports=a("I1BE")(!1)).push([t.i,".menu[data-v-904f9c00] .anticon {\n  margin-right: 8px;\n}\n.menu[data-v-904f9c00] .ant-dropdown-menu-item {\n  min-width: 160px;\n}\n.dropDown[data-v-904f9c00] {\n  line-height: 64px;\n  vertical-align: top;\n  cursor: pointer;\n}\n.dropDown > i[data-v-904f9c00] {\n  font-size: 16px !important;\n  transform: none !important;\n}\n.dropDown > i svg[data-v-904f9c00] {\n  position: relative;\n  top: -1px;\n}",""])},A7xS:function(t,n,a){(t.exports=a("I1BE")(!1)).push([t.i,".container[data-v-67f9435d] {\n  display: flex;\n  flex-direction: column;\n  height: 100vh;\n  overflow: auto;\n  background: #f0f2f5;\n}\n.lang[data-v-67f9435d] {\n  text-align: right;\n  width: 100%;\n  height: 40px;\n  line-height: 44px;\n}\n.lang[data-v-67f9435d] .ant-dropdown-trigger {\n  margin-right: 24px;\n}\n.content[data-v-67f9435d] {\n  padding: 32px 0;\n  flex: 1;\n}\n@media (min-width: 768px) {\n.container[data-v-67f9435d] {\n    /*background-image: url(require('@/assets/images/loginBg.svg'));*/\n    background-repeat: no-repeat;\n    background-position: center 110px;\n    background-size: 100%;\n}\n.content[data-v-67f9435d] {\n    padding: 32px 0 24px 0;\n}\n}\n.top[data-v-67f9435d] {\n  text-align: center;\n}\n.header[data-v-67f9435d] {\n  height: 44px;\n  line-height: 44px;\n}\n.header a[data-v-67f9435d] {\n  text-decoration: none;\n}\n.logo[data-v-67f9435d] {\n  height: 44px;\n  vertical-align: top;\n  margin-right: 16px;\n}\n.title[data-v-67f9435d] {\n  font-size: 33px;\n  color: rgba(0, 0, 0, 0.85);\n  font-family: Avenir, \"Helvetica Neue\", Arial, Helvetica, sans-serif;\n  font-weight: 600;\n  position: relative;\n  top: 2px;\n}\n.desc[data-v-67f9435d] {\n  font-size: 14px;\n  color: rgba(0, 0, 0, 0.45);\n  margin-top: 12px;\n  margin-bottom: 40px;\n}",""])},Ajch:function(t,n,a){"use strict";a.d(n,"a",function(){return e});a("RW0V"),a("rGqo");function e(t,n){var a=Object.assign({},t.getFieldsValue()),e={};Object.keys(a).forEach(function(t){e[t]={value:a[t],errors:n.hasOwnProperty(t)?n[t].map(function(t){return new Error(t)}):void 0}}),t.setFields(e)}},Ce9L:function(t,n,a){(t.exports=a("I1BE")(!1)).push([t.i,".globalFooter[data-v-cd5a7d58] {\n  padding: 0 16px;\n  margin: 48px 0 24px 0;\n  text-align: center;\n}\n.globalFooter .links[data-v-cd5a7d58] {\n  margin-bottom: 8px;\n}\n.globalFooter .links a[data-v-cd5a7d58] {\n  color: rgba(0, 0, 0, 0.45);\n  transition: all 0.3s;\n}\n.globalFooter .links a[data-v-cd5a7d58]:not(:last-child) {\n  margin-right: 40px;\n}\n.globalFooter .links a[data-v-cd5a7d58]:hover {\n  color: rgba(0, 0, 0, 0.65);\n}\n.globalFooter .copyright[data-v-cd5a7d58] {\n  color: rgba(0, 0, 0, 0.45);\n  font-size: 14px;\n}",""])},"D/yB":function(t,n,a){var e=a("A7xS");"string"==typeof e&&(e=[[t.i,e,""]]);var r={hmr:!0,transform:void 0,insertInto:void 0};a("aET+")(e,r);e.locals&&(t.exports=e.locals)},IWac:function(t,n,a){"use strict";var e=a("D/yB");a.n(e).a},RW0V:function(t,n,a){var e=a("S/j/"),r=a("DVgA");a("Xtr8")("keys",function(){return function(t){return r(e(t))}})},S6AN:function(t,n,a){"use strict";var e=a("oOog");a.n(e).a},VjJt:function(t,n,a){"use strict";var e=a("oCkl");a.n(e).a},X78o:function(t,n,a){"use strict";a.r(n);var e=a("zya3"),r=a("Ajch"),o={name:"Register",components:{AuthLayout:e.a},data:function(){return{submitting:!1,form:this.$form.createForm(this)}},methods:{handleSubmit:function(t){var n=this;t.preventDefault(),this.form.validateFields(function(t,a){t||(n.submitting=!0,n.$store.dispatch("auth/Register",a).then(function(t){n.submitting=!1,n.$router.push({path:n.$route.query.redirect||"/"})}).catch(function(t){n.submitting=!1,Object(r.a)(n.form,t)}))})}}},i=(a("S6AN"),a("KHd+")),s=Object(i.a)(o,function(){var t=this,n=t.$createElement,a=t._self._c||n;return a("auth-layout",[a("div",{staticClass:"main"},[a("h3",[t._v("注册")]),t._v(" "),a("a-form",{attrs:{form:t.form},on:{submit:t.handleSubmit}},[a("a-form-item",[a("a-input",{directives:[{name:"decorator",rawName:"v-decorator",value:["name",{rules:[{required:!0,message:"用户名不能为空"}],validateTrigger:["change","blur"]}],expression:"[\n            'name',\n            {\n              rules: [\n                { required: true, message: '用户名不能为空' }\n              ],\n              validateTrigger: ['change', 'blur']\n            }\n          ]"}],attrs:{size:"large",placeholder:"用户名"},scopedSlots:t._u([{key:"prefix",fn:function(){return[a("a-icon",{staticStyle:{color:"rgba(0,0,0,.25)"},attrs:{type:"user"}})]},proxy:!0}])})],1),t._v(" "),a("a-form-item",[a("a-input",{directives:[{name:"decorator",rawName:"v-decorator",value:["email",{rules:[{required:!0,message:"邮箱不能为空"},{type:"email",message:"邮箱格式错误"}],validateTrigger:["change","blur"]}],expression:"[\n            'email',\n            {\n              rules: [\n                { required: true, message: '邮箱不能为空' },\n                { type: 'email', message: '邮箱格式错误' }\n              ],\n              validateTrigger: ['change', 'blur']\n            }\n          ]"}],attrs:{size:"large",placeholder:"邮箱"},scopedSlots:t._u([{key:"prefix",fn:function(){return[a("a-icon",{staticStyle:{color:"rgba(0,0,0,.25)"},attrs:{type:"mail"}})]},proxy:!0}])})],1),t._v(" "),a("a-form-item",[a("a-input",{directives:[{name:"decorator",rawName:"v-decorator",value:["password",{rules:[{required:!0,message:"密码不能为空"}],validateTrigger:["change","blur"]}],expression:"[\n            'password',\n            {\n              rules: [\n                { required: true, message: '密码不能为空' }\n              ],\n              validateTrigger: ['change', 'blur']\n            }\n          ]"}],attrs:{size:"large",placeholder:"密码",type:"password"},scopedSlots:t._u([{key:"prefix",fn:function(){return[a("a-icon",{staticStyle:{color:"rgba(0,0,0,.25)"},attrs:{type:"lock"}})]},proxy:!0}])})],1),t._v(" "),a("a-form-item",[a("a-input",{directives:[{name:"decorator",rawName:"v-decorator",value:["password_confirmation",{rules:[{required:!0,message:"确认密码不能为空"}],validateTrigger:["change","blur"]}],expression:"[\n            'password_confirmation',\n            {\n              rules: [\n                { required: true, message: '确认密码不能为空' }\n              ],\n              validateTrigger: ['change', 'blur']\n            }\n          ]"}],attrs:{size:"large",placeholder:"确认密码",type:"password"},scopedSlots:t._u([{key:"prefix",fn:function(){return[a("a-icon",{staticStyle:{color:"rgba(0,0,0,.25)"},attrs:{type:"lock"}})]},proxy:!0}])})],1),t._v(" "),a("a-form-item",[a("a-button",{staticClass:"submit",attrs:{loading:t.submitting,size:"large",type:"primary",htmlType:"submit"}},[t._v("\n          注册\n        ")]),t._v(" "),a("router-link",{staticClass:"login",attrs:{to:{name:"login"}}},[t._v("\n          使用已有账户登录\n        ")])],1)],1)],1)])},[],!1,null,"2aadbfbc",null);n.default=s.exports},Xtr8:function(t,n,a){var e=a("XKFU"),r=a("g3g5"),o=a("eeVq");t.exports=function(t,n){var a=(r.Object||{})[t]||Object[t],i={};i[t]=n(a),e(e.S+e.F*o(function(){a(1)}),"Object",i)}},cCkN:function(t,n){t.exports="/images/logo.png?c924155285cdba2f57cbd751674c1bb0"},ejD5:function(t,n){t.exports="/images/loginBg.svg?5825f033c6ff12cd1ed1f3c99dff5e4b"},fXPY:function(t,n,a){(t.exports=a("I1BE")(!1)).push([t.i,".main[data-v-2aadbfbc] {\n  width: 368px;\n  margin: 0 auto;\n}\n.main h3[data-v-2aadbfbc] {\n  font-size: 16px;\n  margin-bottom: 20px;\n}\n.main .getCaptcha[data-v-2aadbfbc] {\n  display: block;\n  width: 100%;\n}\n.main .submit[data-v-2aadbfbc] {\n  width: 50%;\n}\n.main .login[data-v-2aadbfbc] {\n  float: right;\n  line-height: 40px;\n}\n.success[data-v-2aadbfbc],\n.warning[data-v-2aadbfbc],\n.error[data-v-2aadbfbc] {\n  transition: color 0.3s;\n}\n.success[data-v-2aadbfbc] {\n  color: #52c41a;\n}\n.warning[data-v-2aadbfbc] {\n  color: #faad14;\n}\n.error[data-v-2aadbfbc] {\n  color: #f5222d;\n}\n.progress-pass > .progress .ant-progress-bg[data-v-2aadbfbc] {\n  background-color: #faad14;\n}",""])},gbNY:function(t,n,a){var e=a("7e7F");"string"==typeof e&&(e=[[t.i,e,""]]);var r={hmr:!0,transform:void 0,insertInto:void 0};a("aET+")(e,r);e.locals&&(t.exports=e.locals)},mTYx:function(t,n,a){"use strict";var e=a("gbNY");a.n(e).a},oCkl:function(t,n,a){var e=a("Ce9L");"string"==typeof e&&(e=[[t.i,e,""]]);var r={hmr:!0,transform:void 0,insertInto:void 0};a("aET+")(e,r);e.locals&&(t.exports=e.locals)},oOog:function(t,n,a){var e=a("fXPY");"string"==typeof e&&(e=[[t.i,e,""]]);var r={hmr:!0,transform:void 0,insertInto:void 0};a("aET+")(e,r);e.locals&&(t.exports=e.locals)},x9hn:function(t,n,a){"use strict";a.r(n);var e={name:"GlobalFooter",props:{links:{type:Array,default:function(){return[]}}},computed:{footerLinks:function(){var t=this;return this.links.map(function(n){return void 0!==n.path&&"http://"!==n.path.substr(0,7).toLowerCase()&&"https://"!==n.path.substr(0,8).toLowerCase()&&(n.path=t.$router.base+"/"+("hash"===t.$router.mode?"#/":"")+n.path),n.blankTarget?n.target="_blank":n.target="_self",n})}}},r=(a("VjJt"),a("KHd+")),o=Object(r.a)(e,function(){var t=this,n=t.$createElement,a=t._self._c||n;return a("footer",{staticClass:"globalFooter"},[a("div",{staticClass:"links"},t._l(t.footerLinks,function(n){return a("a",{key:n.key,attrs:{href:n.path,target:n.target||"_blank"}},[n.icon?a("a-icon",{attrs:{type:n.icon}}):t._e(),t._v("\n      "+t._s(n.title)+"\n    ")],1)}),0),t._v(" "),a("div",{staticClass:"copyright"},[t._t("copyright")],2)])},[],!1,null,"cd5a7d58",null);n.default=o.exports},zya3:function(t,n,a){"use strict";a("f3/d");var e=a("x9hn"),r=a("0X1z"),o={name:"AuthLayout",components:{GlobalFooter:e.default,SelectLang:r.a},data:function(){return{year:(new Date).getFullYear(),name:window.config.name,description:window.config.description}}},i=(a("IWac"),a("KHd+")),s=Object(i.a)(o,function(){var t=this,n=t.$createElement,e=t._self._c||n;return e("div",{staticClass:"container",style:{backgroundImage:"'url("+a("ejD5")+")'"}},[e("div",{staticClass:"lang"},[e("select-lang")],1),t._v(" "),e("div",{staticClass:"content"},[e("div",{staticClass:"top"},[e("div",{staticClass:"header"},[e("router-link",{attrs:{to:{path:"/"}}},[e("img",{staticClass:"logo",attrs:{alt:"logo",src:a("cCkN")}}),t._v(" "),e("span",{staticClass:"title"},[t._v(t._s(t.name))])])],1),t._v(" "),e("div",{staticClass:"desc"},[t._v("\n        "+t._s(t.description)+"\n      ")])]),t._v(" "),t._t("default")],2),t._v(" "),e("global-footer",{attrs:{links:[{key:"github",icon:"github",path:"https://github.com/loyep/prism",blankTarget:!0}]},scopedSlots:t._u([{key:"copyright",fn:function(){return[t._v("\n      Copyright\n      "),e("a-icon",{attrs:{type:"copyright"}}),t._v("\n      "+t._s(t.year)+" Power By\n      "),e("a",{attrs:{href:"https://github.com/loyep/prism"}},[t._v("Prism")])]},proxy:!0}])})],1)},[],!1,null,"67f9435d",null);n.a=s.exports}}]);