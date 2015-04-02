<?php
return [
    //add homeUrl
    'homeUrl' => getBaseUrl(),
    'components' => [
        //add request
        'request' => [
            'baseUrl' => getBaseUrl(),
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        ],
    ],
];

/**
 * 动态生成BaseUrl
 * @author Rod
 * @author josephLin
 */
function getBaseUrl() {
    //match the url xue.cn
    if ($_SERVER['HTTP_HOST'] === 'xue.cn') {
        //match xue.cn/school/a/
        if (preg_match('/school\/(.*?)\//', $_SERVER['REQUEST_URI'], $appName)) {
            //remove the '/' of xue.cn/school/a/
            return '/' . substr($appName[0], 0, -1);
        //match xue.cn/a
        } elseif (preg_match('/school\/([a-z0-9])*/', $_SERVER['REQUEST_URI'], $appName)) {
            return '/' . $appName[0];
        }
    //match the url a.jiao.cn
    } else {
        return '';
    }
}