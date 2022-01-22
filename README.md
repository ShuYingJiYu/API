# 书樱寄语 - API

[书樱寄语 - API](https://api.sakurapuare.com) ***API主页建设中***

* 随机图片API
* 音乐API
* 证书API

## pic

获取一张固定尺寸的图片

### 用法

#### 随机大小

直接访问，会访问目前拥有的图片库中随机一张。（随机尺寸）

#### 固定大小

在访问时添加 `size` 参数，可以获取一张固定尺寸的图片

### TODO

* json返回

* 获取可用的参数列表

  ***

## music

获取各大音乐平台音乐信息，基于 [Meting API](https://github.com/metowolf/Meting)

项目仅供学习

### 用法

#### `site` 参数

支持以下参数

1. `netease` - [网易云音乐](https://muisic.163.com) 
2. `tencent ` - [QQ音乐](https://y.qq.com) 
3. `xiaomi` - [小米音乐](https://web.music.xiaomi.com/)
4. `kugou`- [酷狗音乐](https://www.kugou.com/)
5. `baidu` - [百度音乐](https://music.taihe.com/)
6. `kuwo` - [酷我音乐](https://mbox.kuwo.cn/)

#### `raw ` 参数

当 GET 请求中有此参数时，获取的是未经优化的原始json

#### `type` 参数

支持以下参数

1. `song` - 获取歌曲信息
2. `album` - 获取专辑信息
3. `playlist` - 获取歌单信息
4. `lyric ` - 获取歌词信息
5. `pic` - 获取封面信息
6. `url` - 获取直连信息
7. `serch` - 搜索

#### `arg` 参数

获取`type`参数功能的id

***

## cert

挺垃圾一东西 不写了 自己看源码悟吧

