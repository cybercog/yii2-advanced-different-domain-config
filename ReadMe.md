## 关于处理多域名路由问题

#### Preparation

		diandian-|
				-|--xue-frontend/
				-|--xue-backend/
				-|--jiao-frontend/
				-|--jiao-backend/
				-|--school-frontend/
				-|--school-backend/

#### route target

1. `jiao.cn => jiao-frontend/web`
2. `jiao.cn/manage =>jiao-backend/web`
3. `a.jiao.cn => school-backend/web`
4. `a.jiao.cn/manage => school-backend/web`
5. `xue.cn => xue-frontend/web`
6. `xue.cn/manage => xue-backend/web`
7. `xue.cn/school/a => school/frontend/web`

ps: 需要打开`apache`的`mod_rewrite`功能

