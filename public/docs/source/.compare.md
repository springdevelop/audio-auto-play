---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost:8000/docs/collection.json)

<!-- END_INFO -->

#Azuracast : Nowplaying


<!-- START_365cf185d94517578df143c1ce14f245 -->
## nowplayings

> Example request:

```bash
curl -X GET -G "http://localhost:8000/api/nowplayings" 
```

```javascript
const url = new URL("http://localhost:8000/api/nowplayings");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "code": 200,
    "data": [
        {
            "station": {
                "id": 1,
                "name": "Kenh 1",
                "shortcode": "kenh 1",
                "description": "Kênh phát 1",
                "frontend": "icecast",
                "backend": "liquidsoap",
                "listen_url": "http:\/\/35.240.185.246\/radio\/8000\/radio.mp3?1576062843",
                "is_public": true,
                "mounts": [
                    {
                        "path": "\/radio.mp3",
                        "is_default": true,
                        "id": 1,
                        "name": "128kbps MP3",
                        "url": "http:\/\/35.240.185.246\/radio\/8000\/radio.mp3?1576062843",
                        "bitrate": 128,
                        "format": "mp3",
                        "listeners": {
                            "current": 0,
                            "unique": 0,
                            "total": 0
                        }
                    }
                ],
                "remotes": []
            },
            "listeners": {
                "current": 0,
                "unique": 0,
                "total": 0
            },
            "live": {
                "is_live": false,
                "streamer_name": ""
            },
            "now_playing": {
                "elapsed": 2247,
                "remaining": 0,
                "sh_id": 322,
                "played_at": 1576054225,
                "duration": 2247,
                "playlist": "playlist kenh 1",
                "is_request": false,
                "song": {
                    "id": "eb4fd5e95f4f54300395cd58d3d65ae3",
                    "text": "V.A - 10 Bản Nhạc Không Lời Tuyển Chọn",
                    "artist": "V.A",
                    "title": "10 Bản Nhạc Không Lời Tuyển Chọn",
                    "album": "nhaccuatui.com",
                    "lyrics": "",
                    "art": "http:\/\/35.240.185.246\/static\/img\/generic_song.jpg",
                    "custom_fields": []
                }
            },
            "playing_next": null,
            "song_history": [
                {
                    "sh_id": 323,
                    "played_at": 1576054222,
                    "duration": 0,
                    "playlist": "",
                    "is_request": false,
                    "song": {
                        "id": "ab574fe34f592faf5c3f27dbc52088a4",
                        "text": "AzuraCast.com - AzuraCast is Live!",
                        "artist": "AzuraCast.com",
                        "title": "AzuraCast is Live!",
                        "album": "",
                        "lyrics": "",
                        "art": "http:\/\/35.240.185.246\/static\/img\/generic_song.jpg",
                        "custom_fields": []
                    }
                },
                {
                    "sh_id": 321,
                    "played_at": 1576042988,
                    "duration": 0,
                    "playlist": "",
                    "is_request": false,
                    "song": {
                        "id": "ab574fe34f592faf5c3f27dbc52088a4",
                        "text": "AzuraCast.com - AzuraCast is Live!",
                        "artist": "AzuraCast.com",
                        "title": "AzuraCast is Live!",
                        "album": "",
                        "lyrics": "",
                        "art": "http:\/\/35.240.185.246\/static\/img\/generic_song.jpg",
                        "custom_fields": []
                    }
                },
                {
                    "sh_id": 320,
                    "played_at": 1576042992,
                    "duration": 2247,
                    "playlist": "playlist kenh 1",
                    "is_request": false,
                    "song": {
                        "id": "eb4fd5e95f4f54300395cd58d3d65ae3",
                        "text": "V.A - 10 Bản Nhạc Không Lời Tuyển Chọn",
                        "artist": "V.A",
                        "title": "10 Bản Nhạc Không Lời Tuyển Chọn",
                        "album": "nhaccuatui.com",
                        "lyrics": "",
                        "art": "http:\/\/35.240.185.246\/static\/img\/generic_song.jpg",
                        "custom_fields": []
                    }
                },
                {
                    "sh_id": 319,
                    "played_at": 1576034002,
                    "duration": 0,
                    "playlist": "",
                    "is_request": false,
                    "song": {
                        "id": "ab574fe34f592faf5c3f27dbc52088a4",
                        "text": "AzuraCast.com - AzuraCast is Live!",
                        "artist": "AzuraCast.com",
                        "title": "AzuraCast is Live!",
                        "album": "",
                        "lyrics": "",
                        "art": "http:\/\/35.240.185.246\/static\/img\/generic_song.jpg",
                        "custom_fields": []
                    }
                },
                {
                    "sh_id": 318,
                    "played_at": 1576034005,
                    "duration": 2247,
                    "playlist": "playlist kenh 1",
                    "is_request": false,
                    "song": {
                        "id": "eb4fd5e95f4f54300395cd58d3d65ae3",
                        "text": "V.A - 10 Bản Nhạc Không Lời Tuyển Chọn",
                        "artist": "V.A",
                        "title": "10 Bản Nhạc Không Lời Tuyển Chọn",
                        "album": "nhaccuatui.com",
                        "lyrics": "",
                        "art": "http:\/\/35.240.185.246\/static\/img\/generic_song.jpg",
                        "custom_fields": []
                    }
                },
                {
                    "sh_id": 317,
                    "played_at": 1576025019,
                    "duration": 2247,
                    "playlist": "playlist kenh 1",
                    "is_request": false,
                    "song": {
                        "id": "eb4fd5e95f4f54300395cd58d3d65ae3",
                        "text": "V.A - 10 Bản Nhạc Không Lời Tuyển Chọn",
                        "artist": "V.A",
                        "title": "10 Bản Nhạc Không Lời Tuyển Chọn",
                        "album": "nhaccuatui.com",
                        "lyrics": "",
                        "art": "http:\/\/35.240.185.246\/static\/img\/generic_song.jpg",
                        "custom_fields": []
                    }
                },
                {
                    "sh_id": 316,
                    "played_at": 1576025016,
                    "duration": 0,
                    "playlist": "",
                    "is_request": false,
                    "song": {
                        "id": "ab574fe34f592faf5c3f27dbc52088a4",
                        "text": "AzuraCast.com - AzuraCast is Live!",
                        "artist": "AzuraCast.com",
                        "title": "AzuraCast is Live!",
                        "album": "",
                        "lyrics": "",
                        "art": "http:\/\/35.240.185.246\/static\/img\/generic_song.jpg",
                        "custom_fields": []
                    }
                },
                {
                    "sh_id": 315,
                    "played_at": 1576022768,
                    "duration": 0,
                    "playlist": "",
                    "is_request": false,
                    "song": {
                        "id": "ab574fe34f592faf5c3f27dbc52088a4",
                        "text": "AzuraCast.com - AzuraCast is Live!",
                        "artist": "AzuraCast.com",
                        "title": "AzuraCast is Live!",
                        "album": "",
                        "lyrics": "",
                        "art": "http:\/\/35.240.185.246\/static\/img\/generic_song.jpg",
                        "custom_fields": []
                    }
                },
                {
                    "sh_id": 314,
                    "played_at": 1576022773,
                    "duration": 2247,
                    "playlist": "playlist kenh 1",
                    "is_request": false,
                    "song": {
                        "id": "eb4fd5e95f4f54300395cd58d3d65ae3",
                        "text": "V.A - 10 Bản Nhạc Không Lời Tuyển Chọn",
                        "artist": "V.A",
                        "title": "10 Bản Nhạc Không Lời Tuyển Chọn",
                        "album": "nhaccuatui.com",
                        "lyrics": "",
                        "art": "http:\/\/35.240.185.246\/static\/img\/generic_song.jpg",
                        "custom_fields": []
                    }
                },
                {
                    "sh_id": 313,
                    "played_at": 1576013782,
                    "duration": 0,
                    "playlist": "",
                    "is_request": false,
                    "song": {
                        "id": "ab574fe34f592faf5c3f27dbc52088a4",
                        "text": "AzuraCast.com - AzuraCast is Live!",
                        "artist": "AzuraCast.com",
                        "title": "AzuraCast is Live!",
                        "album": "",
                        "lyrics": "",
                        "art": "http:\/\/35.240.185.246\/static\/img\/generic_song.jpg",
                        "custom_fields": []
                    }
                },
                {
                    "sh_id": 312,
                    "played_at": 1576013786,
                    "duration": 2247,
                    "playlist": "playlist kenh 1",
                    "is_request": false,
                    "song": {
                        "id": "eb4fd5e95f4f54300395cd58d3d65ae3",
                        "text": "V.A - 10 Bản Nhạc Không Lời Tuyển Chọn",
                        "artist": "V.A",
                        "title": "10 Bản Nhạc Không Lời Tuyển Chọn",
                        "album": "nhaccuatui.com",
                        "lyrics": "",
                        "art": "http:\/\/35.240.185.246\/static\/img\/generic_song.jpg",
                        "custom_fields": []
                    }
                },
                {
                    "sh_id": 311,
                    "played_at": 1576004797,
                    "duration": 0,
                    "playlist": "",
                    "is_request": false,
                    "song": {
                        "id": "ab574fe34f592faf5c3f27dbc52088a4",
                        "text": "AzuraCast.com - AzuraCast is Live!",
                        "artist": "AzuraCast.com",
                        "title": "AzuraCast is Live!",
                        "album": "",
                        "lyrics": "",
                        "art": "http:\/\/35.240.185.246\/static\/img\/generic_song.jpg",
                        "custom_fields": []
                    }
                },
                {
                    "sh_id": 310,
                    "played_at": 1576004800,
                    "duration": 2247,
                    "playlist": "playlist kenh 1",
                    "is_request": false,
                    "song": {
                        "id": "eb4fd5e95f4f54300395cd58d3d65ae3",
                        "text": "V.A - 10 Bản Nhạc Không Lời Tuyển Chọn",
                        "artist": "V.A",
                        "title": "10 Bản Nhạc Không Lời Tuyển Chọn",
                        "album": "nhaccuatui.com",
                        "lyrics": "",
                        "art": "http:\/\/35.240.185.246\/static\/img\/generic_song.jpg",
                        "custom_fields": []
                    }
                },
                {
                    "sh_id": 309,
                    "played_at": 1575993562,
                    "duration": 0,
                    "playlist": "",
                    "is_request": false,
                    "song": {
                        "id": "ab574fe34f592faf5c3f27dbc52088a4",
                        "text": "AzuraCast.com - AzuraCast is Live!",
                        "artist": "AzuraCast.com",
                        "title": "AzuraCast is Live!",
                        "album": "",
                        "lyrics": "",
                        "art": "http:\/\/35.240.185.246\/static\/img\/generic_song.jpg",
                        "custom_fields": []
                    }
                },
                {
                    "sh_id": 308,
                    "played_at": 1575993567,
                    "duration": 2247,
                    "playlist": "playlist kenh 1",
                    "is_request": false,
                    "song": {
                        "id": "eb4fd5e95f4f54300395cd58d3d65ae3",
                        "text": "V.A - 10 Bản Nhạc Không Lời Tuyển Chọn",
                        "artist": "V.A",
                        "title": "10 Bản Nhạc Không Lời Tuyển Chọn",
                        "album": "nhaccuatui.com",
                        "lyrics": "",
                        "art": "http:\/\/35.240.185.246\/static\/img\/generic_song.jpg",
                        "custom_fields": []
                    }
                }
            ],
            "cache": "station"
        },
        {
            "station": {
                "id": 2,
                "name": "Kenh 2",
                "shortcode": "kenh_2",
                "description": "Kenh 2",
                "frontend": "icecast",
                "backend": "liquidsoap",
                "listen_url": "http:\/\/35.240.185.246\/radio\/8010\/radio.mp3?1576062843",
                "is_public": true,
                "mounts": [
                    {
                        "path": "\/radio.mp3",
                        "is_default": true,
                        "id": 2,
                        "name": "128kbps MP3",
                        "url": "http:\/\/35.240.185.246\/radio\/8010\/radio.mp3?1576062843",
                        "bitrate": 128,
                        "format": "mp3",
                        "listeners": {
                            "current": 0,
                            "unique": 0,
                            "total": 0
                        }
                    }
                ],
                "remotes": []
            },
            "listeners": {
                "current": 0,
                "unique": 0,
                "total": 0
            },
            "live": {
                "is_live": false,
                "streamer_name": ""
            },
            "now_playing": {
                "elapsed": 104206,
                "remaining": 0,
                "sh_id": 302,
                "played_at": 1575958656,
                "duration": 0,
                "playlist": "",
                "is_request": false,
                "song": {
                    "id": "ab574fe34f592faf5c3f27dbc52088a4",
                    "text": "AzuraCast.com - AzuraCast is Live!",
                    "artist": "AzuraCast.com",
                    "title": "AzuraCast is Live!",
                    "album": "",
                    "lyrics": "",
                    "art": "http:\/\/35.240.185.246\/static\/img\/generic_song.jpg",
                    "custom_fields": []
                }
            },
            "playing_next": null,
            "song_history": [
                {
                    "sh_id": 301,
                    "played_at": 1575958630,
                    "duration": 0,
                    "playlist": "",
                    "is_request": false,
                    "song": {
                        "id": "7a1230502efebe8990578f71285bcf46",
                        "text": "Stream Offline",
                        "artist": "",
                        "title": "",
                        "album": "",
                        "lyrics": "",
                        "art": "http:\/\/35.240.185.246\/static\/img\/generic_song.jpg",
                        "custom_fields": []
                    }
                },
                {
                    "sh_id": 277,
                    "played_at": 1575890528,
                    "duration": 0,
                    "playlist": "",
                    "is_request": false,
                    "song": {
                        "id": "ab574fe34f592faf5c3f27dbc52088a4",
                        "text": "AzuraCast.com - AzuraCast is Live!",
                        "artist": "AzuraCast.com",
                        "title": "AzuraCast is Live!",
                        "album": "",
                        "lyrics": "",
                        "art": "http:\/\/35.240.185.246\/static\/img\/generic_song.jpg",
                        "custom_fields": []
                    }
                },
                {
                    "sh_id": 276,
                    "played_at": 1575890499,
                    "duration": 0,
                    "playlist": "",
                    "is_request": false,
                    "song": {
                        "id": "7a1230502efebe8990578f71285bcf46",
                        "text": "Stream Offline",
                        "artist": "",
                        "title": "",
                        "album": "",
                        "lyrics": "",
                        "art": "http:\/\/35.240.185.246\/static\/img\/generic_song.jpg",
                        "custom_fields": []
                    }
                },
                {
                    "sh_id": 262,
                    "played_at": 1575806572,
                    "duration": 0,
                    "playlist": "",
                    "is_request": false,
                    "song": {
                        "id": "ab574fe34f592faf5c3f27dbc52088a4",
                        "text": "AzuraCast.com - AzuraCast is Live!",
                        "artist": "AzuraCast.com",
                        "title": "AzuraCast is Live!",
                        "album": "",
                        "lyrics": "",
                        "art": "http:\/\/35.240.185.246\/static\/img\/generic_song.jpg",
                        "custom_fields": []
                    }
                },
                {
                    "sh_id": 261,
                    "played_at": 1575806558,
                    "duration": 0,
                    "playlist": "",
                    "is_request": false,
                    "song": {
                        "id": "7a1230502efebe8990578f71285bcf46",
                        "text": "Stream Offline",
                        "artist": "",
                        "title": "",
                        "album": "",
                        "lyrics": "",
                        "art": "http:\/\/35.240.185.246\/static\/img\/generic_song.jpg",
                        "custom_fields": []
                    }
                }
            ],
            "cache": "station"
        }
    ]
}
```

### HTTP Request
`GET api/nowplayings`


<!-- END_365cf185d94517578df143c1ce14f245 -->

<!-- START_556be71436df35e17d263ad6d41066fe -->
## nowplaying

> Example request:

```bash
curl -X GET -G "http://localhost:8000/api/nowplaying/1" \
    -H "Content-Type: application/json" \
    -d '{"stationId":12}'

```

```javascript
const url = new URL("http://localhost:8000/api/nowplaying/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "stationId": 12
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "code": 200,
    "data": {
        "station": {
            "id": 1,
            "name": "Kenh 1",
            "shortcode": "kenh 1",
            "description": "Kênh phát 1",
            "frontend": "icecast",
            "backend": "liquidsoap",
            "listen_url": "http:\/\/35.240.185.246\/radio\/8000\/radio.mp3?1576062843",
            "is_public": true,
            "mounts": [
                {
                    "path": "\/radio.mp3",
                    "is_default": true,
                    "id": 1,
                    "name": "128kbps MP3",
                    "url": "http:\/\/35.240.185.246\/radio\/8000\/radio.mp3?1576062843",
                    "bitrate": 128,
                    "format": "mp3",
                    "listeners": {
                        "current": 0,
                        "unique": 0,
                        "total": 0
                    }
                }
            ],
            "remotes": []
        },
        "listeners": {
            "current": 0,
            "unique": 0,
            "total": 0
        },
        "live": {
            "is_live": false,
            "streamer_name": ""
        },
        "now_playing": {
            "elapsed": 2247,
            "remaining": 0,
            "sh_id": 322,
            "played_at": 1576054225,
            "duration": 2247,
            "playlist": "playlist kenh 1",
            "is_request": false,
            "song": {
                "id": "eb4fd5e95f4f54300395cd58d3d65ae3",
                "text": "V.A - 10 Bản Nhạc Không Lời Tuyển Chọn",
                "artist": "V.A",
                "title": "10 Bản Nhạc Không Lời Tuyển Chọn",
                "album": "nhaccuatui.com",
                "lyrics": "",
                "art": "http:\/\/35.240.185.246\/static\/img\/generic_song.jpg",
                "custom_fields": []
            }
        },
        "playing_next": null,
        "song_history": [
            {
                "sh_id": 323,
                "played_at": 1576054222,
                "duration": 0,
                "playlist": "",
                "is_request": false,
                "song": {
                    "id": "ab574fe34f592faf5c3f27dbc52088a4",
                    "text": "AzuraCast.com - AzuraCast is Live!",
                    "artist": "AzuraCast.com",
                    "title": "AzuraCast is Live!",
                    "album": "",
                    "lyrics": "",
                    "art": "http:\/\/35.240.185.246\/static\/img\/generic_song.jpg",
                    "custom_fields": []
                }
            },
            {
                "sh_id": 321,
                "played_at": 1576042988,
                "duration": 0,
                "playlist": "",
                "is_request": false,
                "song": {
                    "id": "ab574fe34f592faf5c3f27dbc52088a4",
                    "text": "AzuraCast.com - AzuraCast is Live!",
                    "artist": "AzuraCast.com",
                    "title": "AzuraCast is Live!",
                    "album": "",
                    "lyrics": "",
                    "art": "http:\/\/35.240.185.246\/static\/img\/generic_song.jpg",
                    "custom_fields": []
                }
            },
            {
                "sh_id": 320,
                "played_at": 1576042992,
                "duration": 2247,
                "playlist": "playlist kenh 1",
                "is_request": false,
                "song": {
                    "id": "eb4fd5e95f4f54300395cd58d3d65ae3",
                    "text": "V.A - 10 Bản Nhạc Không Lời Tuyển Chọn",
                    "artist": "V.A",
                    "title": "10 Bản Nhạc Không Lời Tuyển Chọn",
                    "album": "nhaccuatui.com",
                    "lyrics": "",
                    "art": "http:\/\/35.240.185.246\/static\/img\/generic_song.jpg",
                    "custom_fields": []
                }
            },
            {
                "sh_id": 319,
                "played_at": 1576034002,
                "duration": 0,
                "playlist": "",
                "is_request": false,
                "song": {
                    "id": "ab574fe34f592faf5c3f27dbc52088a4",
                    "text": "AzuraCast.com - AzuraCast is Live!",
                    "artist": "AzuraCast.com",
                    "title": "AzuraCast is Live!",
                    "album": "",
                    "lyrics": "",
                    "art": "http:\/\/35.240.185.246\/static\/img\/generic_song.jpg",
                    "custom_fields": []
                }
            },
            {
                "sh_id": 318,
                "played_at": 1576034005,
                "duration": 2247,
                "playlist": "playlist kenh 1",
                "is_request": false,
                "song": {
                    "id": "eb4fd5e95f4f54300395cd58d3d65ae3",
                    "text": "V.A - 10 Bản Nhạc Không Lời Tuyển Chọn",
                    "artist": "V.A",
                    "title": "10 Bản Nhạc Không Lời Tuyển Chọn",
                    "album": "nhaccuatui.com",
                    "lyrics": "",
                    "art": "http:\/\/35.240.185.246\/static\/img\/generic_song.jpg",
                    "custom_fields": []
                }
            },
            {
                "sh_id": 317,
                "played_at": 1576025019,
                "duration": 2247,
                "playlist": "playlist kenh 1",
                "is_request": false,
                "song": {
                    "id": "eb4fd5e95f4f54300395cd58d3d65ae3",
                    "text": "V.A - 10 Bản Nhạc Không Lời Tuyển Chọn",
                    "artist": "V.A",
                    "title": "10 Bản Nhạc Không Lời Tuyển Chọn",
                    "album": "nhaccuatui.com",
                    "lyrics": "",
                    "art": "http:\/\/35.240.185.246\/static\/img\/generic_song.jpg",
                    "custom_fields": []
                }
            },
            {
                "sh_id": 316,
                "played_at": 1576025016,
                "duration": 0,
                "playlist": "",
                "is_request": false,
                "song": {
                    "id": "ab574fe34f592faf5c3f27dbc52088a4",
                    "text": "AzuraCast.com - AzuraCast is Live!",
                    "artist": "AzuraCast.com",
                    "title": "AzuraCast is Live!",
                    "album": "",
                    "lyrics": "",
                    "art": "http:\/\/35.240.185.246\/static\/img\/generic_song.jpg",
                    "custom_fields": []
                }
            },
            {
                "sh_id": 315,
                "played_at": 1576022768,
                "duration": 0,
                "playlist": "",
                "is_request": false,
                "song": {
                    "id": "ab574fe34f592faf5c3f27dbc52088a4",
                    "text": "AzuraCast.com - AzuraCast is Live!",
                    "artist": "AzuraCast.com",
                    "title": "AzuraCast is Live!",
                    "album": "",
                    "lyrics": "",
                    "art": "http:\/\/35.240.185.246\/static\/img\/generic_song.jpg",
                    "custom_fields": []
                }
            },
            {
                "sh_id": 314,
                "played_at": 1576022773,
                "duration": 2247,
                "playlist": "playlist kenh 1",
                "is_request": false,
                "song": {
                    "id": "eb4fd5e95f4f54300395cd58d3d65ae3",
                    "text": "V.A - 10 Bản Nhạc Không Lời Tuyển Chọn",
                    "artist": "V.A",
                    "title": "10 Bản Nhạc Không Lời Tuyển Chọn",
                    "album": "nhaccuatui.com",
                    "lyrics": "",
                    "art": "http:\/\/35.240.185.246\/static\/img\/generic_song.jpg",
                    "custom_fields": []
                }
            },
            {
                "sh_id": 313,
                "played_at": 1576013782,
                "duration": 0,
                "playlist": "",
                "is_request": false,
                "song": {
                    "id": "ab574fe34f592faf5c3f27dbc52088a4",
                    "text": "AzuraCast.com - AzuraCast is Live!",
                    "artist": "AzuraCast.com",
                    "title": "AzuraCast is Live!",
                    "album": "",
                    "lyrics": "",
                    "art": "http:\/\/35.240.185.246\/static\/img\/generic_song.jpg",
                    "custom_fields": []
                }
            },
            {
                "sh_id": 312,
                "played_at": 1576013786,
                "duration": 2247,
                "playlist": "playlist kenh 1",
                "is_request": false,
                "song": {
                    "id": "eb4fd5e95f4f54300395cd58d3d65ae3",
                    "text": "V.A - 10 Bản Nhạc Không Lời Tuyển Chọn",
                    "artist": "V.A",
                    "title": "10 Bản Nhạc Không Lời Tuyển Chọn",
                    "album": "nhaccuatui.com",
                    "lyrics": "",
                    "art": "http:\/\/35.240.185.246\/static\/img\/generic_song.jpg",
                    "custom_fields": []
                }
            },
            {
                "sh_id": 311,
                "played_at": 1576004797,
                "duration": 0,
                "playlist": "",
                "is_request": false,
                "song": {
                    "id": "ab574fe34f592faf5c3f27dbc52088a4",
                    "text": "AzuraCast.com - AzuraCast is Live!",
                    "artist": "AzuraCast.com",
                    "title": "AzuraCast is Live!",
                    "album": "",
                    "lyrics": "",
                    "art": "http:\/\/35.240.185.246\/static\/img\/generic_song.jpg",
                    "custom_fields": []
                }
            },
            {
                "sh_id": 310,
                "played_at": 1576004800,
                "duration": 2247,
                "playlist": "playlist kenh 1",
                "is_request": false,
                "song": {
                    "id": "eb4fd5e95f4f54300395cd58d3d65ae3",
                    "text": "V.A - 10 Bản Nhạc Không Lời Tuyển Chọn",
                    "artist": "V.A",
                    "title": "10 Bản Nhạc Không Lời Tuyển Chọn",
                    "album": "nhaccuatui.com",
                    "lyrics": "",
                    "art": "http:\/\/35.240.185.246\/static\/img\/generic_song.jpg",
                    "custom_fields": []
                }
            },
            {
                "sh_id": 309,
                "played_at": 1575993562,
                "duration": 0,
                "playlist": "",
                "is_request": false,
                "song": {
                    "id": "ab574fe34f592faf5c3f27dbc52088a4",
                    "text": "AzuraCast.com - AzuraCast is Live!",
                    "artist": "AzuraCast.com",
                    "title": "AzuraCast is Live!",
                    "album": "",
                    "lyrics": "",
                    "art": "http:\/\/35.240.185.246\/static\/img\/generic_song.jpg",
                    "custom_fields": []
                }
            },
            {
                "sh_id": 308,
                "played_at": 1575993567,
                "duration": 2247,
                "playlist": "playlist kenh 1",
                "is_request": false,
                "song": {
                    "id": "eb4fd5e95f4f54300395cd58d3d65ae3",
                    "text": "V.A - 10 Bản Nhạc Không Lời Tuyển Chọn",
                    "artist": "V.A",
                    "title": "10 Bản Nhạc Không Lời Tuyển Chọn",
                    "album": "nhaccuatui.com",
                    "lyrics": "",
                    "art": "http:\/\/35.240.185.246\/static\/img\/generic_song.jpg",
                    "custom_fields": []
                }
            }
        ],
        "cache": "station"
    }
}
```

### HTTP Request
`GET api/nowplaying/{station_id}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    stationId | integer |  required  | 

<!-- END_556be71436df35e17d263ad6d41066fe -->

#Stations : General


<!-- START_33b3612600feaada1500dc120fac39a0 -->
## stations

> Example request:

```bash
curl -X GET -G "http://localhost:8000/api/stations" 
```

```javascript
const url = new URL("http://localhost:8000/api/stations");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "code": 200,
    "data": [
        {
            "id": 1,
            "name": "Kenh 1",
            "shortcode": "kenh 1",
            "description": "Kênh phát 1",
            "frontend": "icecast",
            "backend": "liquidsoap",
            "listen_url": "http:\/\/35.240.185.246\/radio\/8000\/radio.mp3?1576062857",
            "is_public": true,
            "mounts": [
                {
                    "path": "\/radio.mp3",
                    "is_default": true,
                    "id": 1,
                    "name": "128kbps MP3",
                    "url": "http:\/\/35.240.185.246\/radio\/8000\/radio.mp3?1576062857",
                    "bitrate": 128,
                    "format": "mp3",
                    "listeners": {
                        "current": 0,
                        "unique": 0,
                        "total": 0
                    }
                }
            ],
            "remotes": []
        },
        {
            "id": 2,
            "name": "Kenh 2",
            "shortcode": "kenh_2",
            "description": "Kenh 2",
            "frontend": "icecast",
            "backend": "liquidsoap",
            "listen_url": "http:\/\/35.240.185.246\/radio\/8010\/radio.mp3?1576062857",
            "is_public": true,
            "mounts": [
                {
                    "path": "\/radio.mp3",
                    "is_default": true,
                    "id": 2,
                    "name": "128kbps MP3",
                    "url": "http:\/\/35.240.185.246\/radio\/8010\/radio.mp3?1576062857",
                    "bitrate": 128,
                    "format": "mp3",
                    "listeners": {
                        "current": 0,
                        "unique": 0,
                        "total": 0
                    }
                }
            ],
            "remotes": []
        }
    ]
}
```

### HTTP Request
`GET api/stations`


<!-- END_33b3612600feaada1500dc120fac39a0 -->

<!-- START_081332e7c4666b381ad9427a29f1215e -->
## station

> Example request:

```bash
curl -X GET -G "http://localhost:8000/api/station/1" \
    -H "Content-Type: application/json" \
    -d '{"$stationId":7}'

```

```javascript
const url = new URL("http://localhost:8000/api/station/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$stationId": 7
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "code": 200,
    "data": {
        "id": 1,
        "name": "Kenh 1",
        "shortcode": "kenh 1",
        "description": "Kênh phát 1",
        "frontend": "icecast",
        "backend": "liquidsoap",
        "listen_url": "http:\/\/35.240.185.246\/radio\/8000\/radio.mp3?1576062857",
        "is_public": true,
        "mounts": [
            {
                "path": "\/radio.mp3",
                "is_default": true,
                "id": 1,
                "name": "128kbps MP3",
                "url": "http:\/\/35.240.185.246\/radio\/8000\/radio.mp3?1576062857",
                "bitrate": 128,
                "format": "mp3",
                "listeners": {
                    "current": 0,
                    "unique": 0,
                    "total": 0
                }
            }
        ],
        "remotes": []
    }
}
```

### HTTP Request
`GET api/station/{station_id}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    $stationId | integer |  required  | Return information about a single station

<!-- END_081332e7c4666b381ad9427a29f1215e -->

#Stations : History


<!-- START_bfa982c383cea3ff78ca5291d5f70fb6 -->
## history

> Example request:

```bash
curl -X GET -G "http://localhost:8000/api/station/1/history" \
    -H "Content-Type: application/json" \
    -d '{"stationId":4}'

```

```javascript
const url = new URL("http://localhost:8000/api/station/1/history");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "stationId": 4
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/station/{station_id}/history`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    stationId | integer |  required  | Return song playback history items for a given station

<!-- END_bfa982c383cea3ff78ca5291d5f70fb6 -->

#Stations : Listeners


<!-- START_1e517aa40ddfad3804e7ca311cf8858f -->
## listeners

> Example request:

```bash
curl -X GET -G "http://localhost:8000/api/station/1/listeners" \
    -H "Content-Type: application/json" \
    -d '{"stationId":19}'

```

```javascript
const url = new URL("http://localhost:8000/api/station/1/listeners");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "stationId": 19
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
[]
```

### HTTP Request
`GET api/station/{station_id}/listeners`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    stationId | integer |  required  | Return detailed information about current listeners

<!-- END_1e517aa40ddfad3804e7ca311cf8858f -->

#Stations : Playlist


<!-- START_96b9c99b88c999fcc6256f07e9af2a9e -->
## listeners

> Example request:

```bash
curl -X GET -G "http://localhost:8000/api/station/1/playlists" \
    -H "Content-Type: application/json" \
    -d '{"stationId":18}'

```

```javascript
const url = new URL("http://localhost:8000/api/station/1/playlists");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "stationId": 18
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "code": 200,
    "data": [
        {
            "id": 2,
            "name": "playlist kenh 1",
            "type": "default",
            "source": "songs",
            "order": "shuffle",
            "remote_url": null,
            "remote_type": "stream",
            "remote_buffer": 0,
            "is_enabled": true,
            "is_jingle": false,
            "play_per_songs": 0,
            "play_per_minutes": 0,
            "play_per_hour_minute": 0,
            "weight": 3,
            "include_in_requests": true,
            "include_in_automation": true,
            "backend_options": [
                "",
                "merge"
            ],
            "played_at": 0,
            "schedule_items": [],
            "num_songs": 1,
            "total_length": 2247,
            "links": {
                "toggle": "http:\/\/35.240.185.246\/api\/station\/1\/playlist\/2\/toggle",
                "order": "http:\/\/35.240.185.246\/api\/station\/1\/playlist\/2\/order",
                "self": "http:\/\/35.240.185.246\/api\/station\/1\/playlist\/2",
                "export": {
                    "pls": "http:\/\/35.240.185.246\/api\/station\/1\/playlist\/2\/export\/pls",
                    "m3u": "http:\/\/35.240.185.246\/api\/station\/1\/playlist\/2\/export\/m3u"
                }
            }
        }
    ]
}
```

### HTTP Request
`GET api/station/{station_id}/playlists`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    stationId | integer |  required  | Return detailed information about current listeners

<!-- END_96b9c99b88c999fcc6256f07e9af2a9e -->

<!-- START_469fb7452ae8840ac8a59c05baf80d76 -->
## listeners

> Example request:

```bash
curl -X GET -G "http://localhost:8000/api/station/1/playlist/1" \
    -H "Content-Type: application/json" \
    -d '{"stationId":8}'

```

```javascript
const url = new URL("http://localhost:8000/api/station/1/playlist/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "stationId": 8
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/station/{station_id}/playlist/{playlist_id}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    stationId | integer |  required  | Return detailed information about current listeners

<!-- END_469fb7452ae8840ac8a59c05baf80d76 -->

#Stations : Service Control


<!-- START_d5b874339b941e240bd82315c2c04afa -->
## status

> Example request:

```bash
curl -X GET -G "http://localhost:8000/api/station/1/status" \
    -H "Content-Type: application/json" \
    -d '{"stationId":3}'

```

```javascript
const url = new URL("http://localhost:8000/api/station/1/status");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "stationId": 3
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "backend_running": true,
    "frontend_running": true
}
```

### HTTP Request
`GET api/station/{station_id}/status`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    stationId | integer |  required  | Retrieve the current status of all serivces associated with the radio broadcast

<!-- END_d5b874339b941e240bd82315c2c04afa -->

<!-- START_f7b01f22b958053198f6f744efeccc6b -->
## restart

> Example request:

```bash
curl -X GET -G "http://localhost:8000/api/station/1/restart" \
    -H "Content-Type: application/json" \
    -d '{"stationId":9}'

```

```javascript
const url = new URL("http://localhost:8000/api/station/1/restart");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "stationId": 9
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response:

```json
null
```

### HTTP Request
`GET api/station/{station_id}/restart`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    stationId | integer |  required  | Restart all services associated with the radio broadcast

<!-- END_f7b01f22b958053198f6f744efeccc6b -->

<!-- START_74413ee64ef2c849cde09c93681ae41c -->
## frontend

> Example request:

```bash
curl -X GET -G "http://localhost:8000/api/station/1/frontend/1" \
    -H "Content-Type: application/json" \
    -d '{"stationId":20,"action":"atque"}'

```

```javascript
const url = new URL("http://localhost:8000/api/station/1/frontend/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "stationId": 20,
    "action": "atque"
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/station/{station_id}/frontend/{action}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    stationId | integer |  required  | 
    action | string |  required  | (start, stop, restart)

<!-- END_74413ee64ef2c849cde09c93681ae41c -->

<!-- START_ce7daccdc7ce9750c7e87833a9b26fa1 -->
## backend

> Example request:

```bash
curl -X GET -G "http://localhost:8000/api/station/1/backend/1" \
    -H "Content-Type: application/json" \
    -d '{"stationId":1,"action":"in"}'

```

```javascript
const url = new URL("http://localhost:8000/api/station/1/backend/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "stationId": 1,
    "action": "in"
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/station/{station_id}/backend/{action}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    stationId | integer |  required  | 
    action | string |  required  | (start, stop, restart)

<!-- END_ce7daccdc7ce9750c7e87833a9b26fa1 -->

#Stations : Song Request


<!-- START_9e7bd4f8b35c832ac0a17dee9fa669e4 -->
## songs-request

> Example request:

```bash
curl -X GET -G "http://localhost:8000/api/station/1/requests" \
    -H "Content-Type: application/json" \
    -d '{"stationId":2,"requestId":18}'

```

```javascript
const url = new URL("http://localhost:8000/api/station/1/requests");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "stationId": 2,
    "requestId": 18
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/station/{station_id}/requests`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    stationId | integer |  required  | 
    requestId | integer |  required  | Return information about a single station

<!-- END_9e7bd4f8b35c832ac0a17dee9fa669e4 -->

<!-- START_f6194339a825edc35fc10aef3f8d6851 -->
## song-request

> Example request:

```bash
curl -X POST "http://localhost:8000/api/station/1" \
    -H "Content-Type: application/json" \
    -d '{"stationId":17,"requestId":20}'

```

```javascript
const url = new URL("http://localhost:8000/api/station/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "stationId": 17,
    "requestId": 20
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/station/{station_id/request/{request_id}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    stationId | integer |  required  | 
    requestId | integer |  required  | Return information about a single station

<!-- END_f6194339a825edc35fc10aef3f8d6851 -->

#auth


<!-- START_a925a8d22b3615f12fca79456d286859 -->
## login

> Example request:

```bash
curl -X POST "http://localhost:8000/api/auth/login" \
    -H "Content-Type: application/json" \
    -d '{"email":"aut","password":"corrupti"}'

```

```javascript
const url = new URL("http://localhost:8000/api/auth/login");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "email": "aut",
    "password": "corrupti"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/auth/login`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    email | string |  required  | 
    password | string |  required  | Get a JWT via given credentials.

<!-- END_a925a8d22b3615f12fca79456d286859 -->

#calendars


<!-- START_222b40d710868bb5dfdda0f4c99eacac -->
## index

> Example request:

```bash
curl -X GET -G "http://localhost:8000/api/calendars" 
```

```javascript
const url = new URL("http://localhost:8000/api/calendars");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "code": 200,
    "data": [
        {
            "id": 1,
            "name": "Calendar 68",
            "desc": "Quidem quas voluptas unde impedit iste corporis mollitia.",
            "audio": null,
            "time_from": "2019-10-25 06:10:03",
            "time_to": "2019-10-25 06:10:03",
            "positions_id": 5,
            "users_id": 1,
            "status": "pending"
        },
        {
            "id": 2,
            "name": "Calendar 20",
            "desc": "Possimus doloribus et nesciunt commodi et optio mollitia.",
            "audio": null,
            "time_from": "2019-10-25 06:10:03",
            "time_to": "2019-10-25 06:10:03",
            "positions_id": 2,
            "users_id": 3,
            "status": "pending"
        },
        {
            "id": 3,
            "name": "Calendar 53",
            "desc": "Cum rerum et omnis rem et placeat.",
            "audio": null,
            "time_from": "2019-10-25 06:10:03",
            "time_to": "2019-10-25 06:10:03",
            "positions_id": 5,
            "users_id": 4,
            "status": "pending"
        },
        {
            "id": 4,
            "name": "Calendar 3",
            "desc": "Aspernatur et sit a et modi modi.",
            "audio": null,
            "time_from": "2019-10-25 06:10:03",
            "time_to": "2019-10-25 06:10:03",
            "positions_id": 4,
            "users_id": 4,
            "status": "pending"
        },
        {
            "id": 5,
            "name": "Calendar 99",
            "desc": "Nesciunt corrupti quo perspiciatis impedit nam ipsum.",
            "audio": null,
            "time_from": "2019-10-25 06:10:03",
            "time_to": "2019-10-25 06:10:03",
            "positions_id": 5,
            "users_id": 4,
            "status": "pending"
        }
    ]
}
```

### HTTP Request
`GET api/calendars`


<!-- END_222b40d710868bb5dfdda0f4c99eacac -->

<!-- START_9c9bf3df5550c0270bfca598c23a0163 -->
## show

> Example request:

```bash
curl -X GET -G "http://localhost:8000/api/calendars/1" 
```

```javascript
const url = new URL("http://localhost:8000/api/calendars/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/calendars/{id}`


<!-- END_9c9bf3df5550c0270bfca598c23a0163 -->

<!-- START_f6ddbc3235eeec4eebe4052fe7277b08 -->
## store

> Example request:

```bash
curl -X POST "http://localhost:8000/api/calendars" \
    -H "Content-Type: application/json" \
    -d '{"name":"corporis","desc":"exercitationem","audio":"fugit","time_from":"eveniet","time_to":"voluptatem","positions_id":"molestiae","status":"laborum"}'

```

```javascript
const url = new URL("http://localhost:8000/api/calendars");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "corporis",
    "desc": "exercitationem",
    "audio": "fugit",
    "time_from": "eveniet",
    "time_to": "voluptatem",
    "positions_id": "molestiae",
    "status": "laborum"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/calendars`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | Name of calendar
    desc | string |  required  | Description of calendar
    audio | string |  required  | audio of calendar
    time_from | string |  required  | time from of calendar
    time_to | string |  required  | time to of calendar
    positions_id | string |  required  | positions_id of calendar
    status | string |  required  | status of calendar

<!-- END_f6ddbc3235eeec4eebe4052fe7277b08 -->

<!-- START_44f2973231f552ef5aab7107d00cab95 -->
## update

> Example request:

```bash
curl -X PUT "http://localhost:8000/api/calendars/1" \
    -H "Content-Type: application/json" \
    -d '{"name":"corporis","desc":"aut","audio":"veniam","time_from":"non","time_to":"voluptatem","positions_id":"vel","status":"est"}'

```

```javascript
const url = new URL("http://localhost:8000/api/calendars/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "corporis",
    "desc": "aut",
    "audio": "veniam",
    "time_from": "non",
    "time_to": "voluptatem",
    "positions_id": "vel",
    "status": "est"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/calendars/{id}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | Name of calendar
    desc | string |  required  | Description of calendar
    audio | string |  required  | audio of calendar
    time_from | string |  required  | time from of calendar
    time_to | string |  required  | time to of calendar
    positions_id | string |  required  | positions_id of calendar
    status | string |  required  | status of calendar

<!-- END_44f2973231f552ef5aab7107d00cab95 -->

<!-- START_fdbe6b7a84b7d40ab7792fc9ec5da3b0 -->
## delete

> Example request:

```bash
curl -X DELETE "http://localhost:8000/api/calendars/1" 
```

```javascript
const url = new URL("http://localhost:8000/api/calendars/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/calendars/{id}`


<!-- END_fdbe6b7a84b7d40ab7792fc9ec5da3b0 -->

#devices


<!-- START_8f41217bf023ddef5d8995d7c7c7e2e2 -->
## index

> Example request:

```bash
curl -X GET -G "http://localhost:8000/api/devices" 
```

```javascript
const url = new URL("http://localhost:8000/api/devices");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "code": 200,
    "data": [
        {
            "id": 1,
            "code": "",
            "name": "Device 29",
            "desc": "lwisoky@example.net",
            "slug": 2,
            "positions_id": 5,
            "users_id": 2,
            "groups_id": 5,
            "status": "good"
        },
        {
            "id": 2,
            "code": "",
            "name": "Device 71",
            "desc": "streich.moriah@example.com",
            "slug": 3,
            "positions_id": 4,
            "users_id": 3,
            "groups_id": 4,
            "status": "good"
        },
        {
            "id": 3,
            "code": "",
            "name": "Device 74",
            "desc": "ibosco@example.net",
            "slug": 4,
            "positions_id": 5,
            "users_id": 4,
            "groups_id": 5,
            "status": "good"
        },
        {
            "id": 4,
            "code": "",
            "name": "Device 91",
            "desc": "thea21@example.net",
            "slug": 1,
            "positions_id": 1,
            "users_id": 1,
            "groups_id": 1,
            "status": "good"
        },
        {
            "id": 5,
            "code": "",
            "name": "Device 73",
            "desc": "elda93@example.net",
            "slug": 5,
            "positions_id": 1,
            "users_id": 5,
            "groups_id": 1,
            "status": "good"
        }
    ]
}
```

### HTTP Request
`GET api/devices`


<!-- END_8f41217bf023ddef5d8995d7c7c7e2e2 -->

<!-- START_35518d88ab5833207b674a947d6f081e -->
## show

> Example request:

```bash
curl -X GET -G "http://localhost:8000/api/devices/1" 
```

```javascript
const url = new URL("http://localhost:8000/api/devices/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "code": 200,
    "data": {
        "id": 1,
        "code": "",
        "name": "Device 29",
        "desc": "lwisoky@example.net",
        "slug": 2,
        "positions_id": 5,
        "users_id": 2,
        "groups_id": 5,
        "status": "good"
    }
}
```

### HTTP Request
`GET api/devices/{id}`


<!-- END_35518d88ab5833207b674a947d6f081e -->

<!-- START_dbb21adf8d2a4b13a3c3113b57e8d329 -->
## store

> Example request:

```bash
curl -X POST "http://localhost:8000/api/devices" \
    -H "Content-Type: application/json" \
    -d '{"code":"omnis","name":"omnis","desc":"non","positions_id":13,"users_id":12,"groups_id":19}'

```

```javascript
const url = new URL("http://localhost:8000/api/devices");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "code": "omnis",
    "name": "omnis",
    "desc": "non",
    "positions_id": 13,
    "users_id": 12,
    "groups_id": 19
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/devices`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    code | string |  required  | Code of device
    name | string |  required  | Name of device
    desc | string |  required  | Description of device
    positions_id | integer |  required  | positions_id of device
    users_id | integer |  required  | users_id of device
    groups_id | integer |  required  | groups_id of device

<!-- END_dbb21adf8d2a4b13a3c3113b57e8d329 -->

<!-- START_9ba4e8a6f45956843d28279ce168ee5a -->
## update

> Example request:

```bash
curl -X PUT "http://localhost:8000/api/devices/1" \
    -H "Content-Type: application/json" \
    -d '{"parent_id":"iste","code":"officia","name":"debitis","desc":"occaecati","groups_id":10}'

```

```javascript
const url = new URL("http://localhost:8000/api/devices/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "parent_id": "iste",
    "code": "officia",
    "name": "debitis",
    "desc": "occaecati",
    "groups_id": 10
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/devices/{id}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    parent_id | string |  required  | id of parent's device
    code | string |  required  | Code of device
    name | string |  required  | Name of device
    desc | string |  required  | Description of device
    groups_id | integer |  required  | groups_id of deivce

<!-- END_9ba4e8a6f45956843d28279ce168ee5a -->

<!-- START_a4154b0d5af10d6c8e1041a02fe34ba6 -->
## delete

> Example request:

```bash
curl -X DELETE "http://localhost:8000/api/devices/1" 
```

```javascript
const url = new URL("http://localhost:8000/api/devices/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/devices/{id}`


<!-- END_a4154b0d5af10d6c8e1041a02fe34ba6 -->

#general


<!-- START_e40bc60a458a9740730202aaec04f818 -->
## admin
> Example request:

```bash
curl -X GET -G "http://localhost:8000/admin" 
```

```javascript
const url = new URL("http://localhost:8000/admin");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET admin`


<!-- END_e40bc60a458a9740730202aaec04f818 -->

#groups


<!-- START_007018a8a9f15c2d47fcb105431ffeee -->
## index

> Example request:

```bash
curl -X GET -G "http://localhost:8000/api/groups" 
```

```javascript
const url = new URL("http://localhost:8000/api/groups");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "code": 200,
    "data": [
        {
            "id": 1,
            "name": "Group 58",
            "desc": "Magnam illum aut harum earum totam sit.",
            "slug": null,
            "type": "vip"
        },
        {
            "id": 2,
            "name": "Group 54",
            "desc": "Qui enim sunt tempora molestiae at vero.",
            "slug": null,
            "type": "vip"
        },
        {
            "id": 3,
            "name": "Group 19",
            "desc": "Corrupti in voluptatem facilis nesciunt.",
            "slug": null,
            "type": "vip"
        },
        {
            "id": 4,
            "name": "Group 51",
            "desc": "Qui sit expedita quam aut facilis ut.",
            "slug": null,
            "type": "vip"
        },
        {
            "id": 5,
            "name": "Group 20",
            "desc": "Esse culpa ut aspernatur consequatur.",
            "slug": null,
            "type": "vip"
        }
    ]
}
```

### HTTP Request
`GET api/groups`


<!-- END_007018a8a9f15c2d47fcb105431ffeee -->

<!-- START_8ab1516beb4ee4a6d65e907114740b5f -->
## show

> Example request:

```bash
curl -X GET -G "http://localhost:8000/api/groups/1" 
```

```javascript
const url = new URL("http://localhost:8000/api/groups/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "code": 200,
    "data": {
        "id": 1,
        "name": "Group 58",
        "desc": "Magnam illum aut harum earum totam sit.",
        "slug": null,
        "type": "vip"
    }
}
```

### HTTP Request
`GET api/groups/{id}`


<!-- END_8ab1516beb4ee4a6d65e907114740b5f -->

<!-- START_15c22564ad248f952405021410fd1d25 -->
## store

> Example request:

```bash
curl -X POST "http://localhost:8000/api/groups" \
    -H "Content-Type: application/json" \
    -d '{"name":"et","desc":"optio","type":"possimus"}'

```

```javascript
const url = new URL("http://localhost:8000/api/groups");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "et",
    "desc": "optio",
    "type": "possimus"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/groups`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | Name of group
    desc | string |  required  | Description of group
    type | string |  required  | type of group

<!-- END_15c22564ad248f952405021410fd1d25 -->

<!-- START_698e46ffc5cce5bf1942909d27080afc -->
## update

> Example request:

```bash
curl -X PUT "http://localhost:8000/api/groups/1" \
    -H "Content-Type: application/json" \
    -d '{"name":"accusantium","desc":"praesentium","type":"quam"}'

```

```javascript
const url = new URL("http://localhost:8000/api/groups/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "accusantium",
    "desc": "praesentium",
    "type": "quam"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/groups/{id}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | Name of group
    desc | string |  required  | Description of group
    type | string |  required  | type of group

<!-- END_698e46ffc5cce5bf1942909d27080afc -->

<!-- START_1047682f8958a6c8574e111e83f9cc17 -->
## delete

> Example request:

```bash
curl -X DELETE "http://localhost:8000/api/groups/1" 
```

```javascript
const url = new URL("http://localhost:8000/api/groups/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/groups/{id}`


<!-- END_1047682f8958a6c8574e111e83f9cc17 -->

#home


<!-- START_ef0a4fcc5d5d2e999b7cb6b573280cb0 -->
## audio

> Example request:

```bash
curl -X GET -G "http://localhost:8000/api/audio/1" 
```

```javascript
const url = new URL("http://localhost:8000/api/audio/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "code": 404,
    "message": "messages.validate.not_found"
}
```

### HTTP Request
`GET api/audio/{code}`


<!-- END_ef0a4fcc5d5d2e999b7cb6b573280cb0 -->

#positions


<!-- START_ee1d1766a73d2f5c17cc2e47c84bd12b -->
## index

> Example request:

```bash
curl -X GET -G "http://localhost:8000/api/positions" 
```

```javascript
const url = new URL("http://localhost:8000/api/positions");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "status_code": 200,
    "is_error": false,
    "message": "",
    "data": {
        "results": [
            {
                "id": 1,
                "parent_id": 0,
                "name": "Nhà D2",
                "desc": "Nhà D2 - Cơ sở 1",
                "users_id": 1,
                "groups_id": 5,
                "station_id": 0
            },
            {
                "id": 2,
                "parent_id": 1,
                "name": "Tầng 4",
                "desc": "Quia cupiditate non nihil vitae illum natus quia.",
                "users_id": 5,
                "groups_id": 3,
                "station_id": 0
            },
            {
                "id": 3,
                "parent_id": 1,
                "name": "Position 100",
                "desc": "Et pariatur dolores eaque non et sit adipisci.",
                "users_id": 2,
                "groups_id": 3,
                "station_id": 0
            },
            {
                "id": 4,
                "parent_id": 1,
                "name": "Position 39",
                "desc": "Cum ut dolorem architecto odio sint.",
                "users_id": 4,
                "groups_id": 2,
                "station_id": 0
            },
            {
                "id": 5,
                "parent_id": 1,
                "name": "Position 15",
                "desc": "Laudantium necessitatibus aperiam nobis molestiae harum.",
                "users_id": 4,
                "groups_id": 2,
                "station_id": 0
            }
        ],
        "count": 11,
        "next": "http:\/\/localhost\/api\/positions?page=2",
        "previous": null
    }
}
```

### HTTP Request
`GET api/positions`


<!-- END_ee1d1766a73d2f5c17cc2e47c84bd12b -->

<!-- START_5627f1eb151303b7e65e36cce5efec09 -->
## tree

> Example request:

```bash
curl -X GET -G "http://localhost:8000/api/positions/all" 
```

```javascript
const url = new URL("http://localhost:8000/api/positions/all");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "code": 200,
    "data": [
        {
            "id": 11,
            "parent_id": 6,
            "name": "Phòng D301",
            "desc": "Phòng D301 - T3 - Cơ sở 1",
            "users_id": 1,
            "groups_id": 1,
            "station_id": 0
        },
        {
            "id": 10,
            "parent_id": 1,
            "name": "Phòng D201",
            "desc": "Phòng D201",
            "users_id": 1,
            "groups_id": 1,
            "station_id": 0
        },
        {
            "id": 9,
            "parent_id": 0,
            "name": "Nhà D1",
            "desc": "Nhà D1 - Cơ sở 1",
            "users_id": 1,
            "groups_id": 1,
            "station_id": 0
        },
        {
            "id": 8,
            "parent_id": 7,
            "name": "Nhập tên 1",
            "desc": "Nhập mô tả ngắn",
            "users_id": 1,
            "groups_id": 1,
            "station_id": 0
        },
        {
            "id": 7,
            "parent_id": 6,
            "name": "Hành Lang",
            "desc": "Nhập mô tả ngắn",
            "users_id": 1,
            "groups_id": 1,
            "station_id": 0
        },
        {
            "id": 6,
            "parent_id": 1,
            "name": "Phòng D202",
            "desc": "Phòng D202",
            "users_id": 1,
            "groups_id": 1,
            "station_id": 0
        },
        {
            "id": 1,
            "parent_id": 0,
            "name": "Nhà D2",
            "desc": "Nhà D2 - Cơ sở 1",
            "users_id": 1,
            "groups_id": 5,
            "station_id": 0
        },
        {
            "id": 2,
            "parent_id": 1,
            "name": "Tầng 4",
            "desc": "Quia cupiditate non nihil vitae illum natus quia.",
            "users_id": 5,
            "groups_id": 3,
            "station_id": 0
        },
        {
            "id": 3,
            "parent_id": 1,
            "name": "Position 100",
            "desc": "Et pariatur dolores eaque non et sit adipisci.",
            "users_id": 2,
            "groups_id": 3,
            "station_id": 0
        },
        {
            "id": 4,
            "parent_id": 1,
            "name": "Position 39",
            "desc": "Cum ut dolorem architecto odio sint.",
            "users_id": 4,
            "groups_id": 2,
            "station_id": 0
        },
        {
            "id": 5,
            "parent_id": 1,
            "name": "Position 15",
            "desc": "Laudantium necessitatibus aperiam nobis molestiae harum.",
            "users_id": 4,
            "groups_id": 2,
            "station_id": 0
        }
    ]
}
```

### HTTP Request
`GET api/positions/all`


<!-- END_5627f1eb151303b7e65e36cce5efec09 -->

<!-- START_e81ba66b65818f4ba3d9daee3dfd84e3 -->
## show

> Example request:

```bash
curl -X GET -G "http://localhost:8000/api/positions/1" 
```

```javascript
const url = new URL("http://localhost:8000/api/positions/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "status_code": 200,
    "is_error": false,
    "message": "",
    "data": {
        "id": 1,
        "parent_id": 0,
        "name": "Nhà D2",
        "desc": "Nhà D2 - Cơ sở 1",
        "users_id": 1,
        "groups_id": 5,
        "station_id": 0
    }
}
```

### HTTP Request
`GET api/positions/{id}`


<!-- END_e81ba66b65818f4ba3d9daee3dfd84e3 -->

<!-- START_bfc810e5798f902865479c74d95c4f54 -->
## store

> Example request:

```bash
curl -X POST "http://localhost:8000/api/positions" \
    -H "Content-Type: application/json" \
    -d '{"parent_id":"culpa","name":"quaerat","desc":"et","groups_id":13}'

```

```javascript
const url = new URL("http://localhost:8000/api/positions");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "parent_id": "culpa",
    "name": "quaerat",
    "desc": "et",
    "groups_id": 13
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/positions`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    parent_id | string |  required  | id of parent's position
    name | string |  required  | Name of position
    desc | string |  required  | Description of position
    groups_id | integer |  required  | groups_id of position

<!-- END_bfc810e5798f902865479c74d95c4f54 -->

<!-- START_0a2857bf8752d14e9e4bb3613fd7f3d0 -->
## update

> Example request:

```bash
curl -X PUT "http://localhost:8000/api/positions/1" \
    -H "Content-Type: application/json" \
    -d '{"parent_id":"omnis","name":"qui","desc":"quos","groups_id":3}'

```

```javascript
const url = new URL("http://localhost:8000/api/positions/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "parent_id": "omnis",
    "name": "qui",
    "desc": "quos",
    "groups_id": 3
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/positions/{id}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    parent_id | string |  required  | id of parent's position
    name | string |  required  | Name of position
    desc | string |  required  | Description of position
    groups_id | integer |  required  | groups_id of position

<!-- END_0a2857bf8752d14e9e4bb3613fd7f3d0 -->

<!-- START_e6bf7734043f180ab3c35f8face9a212 -->
## delete

> Example request:

```bash
curl -X DELETE "http://localhost:8000/api/positions/1" 
```

```javascript
const url = new URL("http://localhost:8000/api/positions/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/positions/{id}`


<!-- END_e6bf7734043f180ab3c35f8face9a212 -->

<!-- START_9624413aa537849ce33d1e999bc330c7 -->
## devices

> Example request:

```bash
curl -X GET -G "http://localhost:8000/api/positions/1/devices" 
```

```javascript
const url = new URL("http://localhost:8000/api/positions/1/devices");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "code": 200,
    "data": [
        {
            "id": 4,
            "name": "Device 91",
            "desc": "thea21@example.net",
            "positions_id": 1,
            "users_id": 1,
            "groups_id": 1,
            "status": "good",
            "code": ""
        },
        {
            "id": 5,
            "name": "Device 73",
            "desc": "elda93@example.net",
            "positions_id": 1,
            "users_id": 5,
            "groups_id": 1,
            "status": "good",
            "code": ""
        }
    ]
}
```

### HTTP Request
`GET api/positions/{id}/devices`


<!-- END_9624413aa537849ce33d1e999bc330c7 -->

#siteinfos


<!-- START_092645ab935709b86a57a5a645aa6351 -->
## index

> Example request:

```bash
curl -X GET -G "http://localhost:8000/api/siteinfos" 
```

```javascript
const url = new URL("http://localhost:8000/api/siteinfos");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/siteinfos`


<!-- END_092645ab935709b86a57a5a645aa6351 -->

<!-- START_6ffa31ce832365bb8bc19d2a3b08d96e -->
## show

> Example request:

```bash
curl -X GET -G "http://localhost:8000/api/siteinfos/1" 
```

```javascript
const url = new URL("http://localhost:8000/api/siteinfos/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/siteinfos/{id}`


<!-- END_6ffa31ce832365bb8bc19d2a3b08d96e -->

<!-- START_c5b0fe351abd202b67487d3288e640a0 -->
## store

> Example request:

```bash
curl -X POST "http://localhost:8000/api/siteinfos" \
    -H "Content-Type: application/json" \
    -d '{"name":"expedita","desc":"quos","url":"enim"}'

```

```javascript
const url = new URL("http://localhost:8000/api/siteinfos");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "expedita",
    "desc": "quos",
    "url": "enim"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/siteinfos`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | Name of siteinfo
    desc | string |  required  | Description of siteinfo
    url | string |  required  | url of siteinfo

<!-- END_c5b0fe351abd202b67487d3288e640a0 -->

<!-- START_2cbc1602826d364dd2f17c05f29319c8 -->
## update

> Example request:

```bash
curl -X PUT "http://localhost:8000/api/siteinfos/1" \
    -H "Content-Type: application/json" \
    -d '{"name":"sequi","desc":"et","url":"qui"}'

```

```javascript
const url = new URL("http://localhost:8000/api/siteinfos/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "sequi",
    "desc": "et",
    "url": "qui"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/siteinfos/{id}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | Name of siteinfo
    desc | string |  required  | Description of siteinfo
    url | string |  required  | url of siteinfo

<!-- END_2cbc1602826d364dd2f17c05f29319c8 -->

<!-- START_346107d00dfde40d615ff73a9b8a9da4 -->
## delete

> Example request:

```bash
curl -X DELETE "http://localhost:8000/api/siteinfos/1" 
```

```javascript
const url = new URL("http://localhost:8000/api/siteinfos/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/siteinfos/{id}`


<!-- END_346107d00dfde40d615ff73a9b8a9da4 -->

#tasks


<!-- START_4227b9e5e54912af051e8dd5472afbce -->
## index

> Example request:

```bash
curl -X GET -G "http://localhost:8000/api/tasks" 
```

```javascript
const url = new URL("http://localhost:8000/api/tasks");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "code": 200,
    "data": [
        {
            "id": 1,
            "name": "Task 54",
            "desc": "Laudantium qui et repellendus est.",
            "time_from": "2019-10-25 06:10:03",
            "time_to": "2019-10-25 06:10:03",
            "status": 4,
            "users_id": 4,
            "troubles_id": 1
        },
        {
            "id": 2,
            "name": "Task 97",
            "desc": "Aut laborum ut officia et.",
            "time_from": "2019-10-25 06:10:03",
            "time_to": "2019-10-25 06:10:03",
            "status": 5,
            "users_id": 5,
            "troubles_id": 4
        },
        {
            "id": 3,
            "name": "Task 80",
            "desc": "Debitis facere officia porro ex nobis vel sunt.",
            "time_from": "2019-10-25 06:10:03",
            "time_to": "2019-10-25 06:10:03",
            "status": 4,
            "users_id": 4,
            "troubles_id": 1
        },
        {
            "id": 4,
            "name": "Task 30",
            "desc": "Exercitationem eum minus qui possimus maxime eligendi error.",
            "time_from": "2019-10-25 06:10:03",
            "time_to": "2019-10-25 06:10:03",
            "status": 3,
            "users_id": 3,
            "troubles_id": 3
        },
        {
            "id": 5,
            "name": "Task 6",
            "desc": "Asperiores culpa distinctio nesciunt odio eveniet voluptatem ut.",
            "time_from": "2019-10-25 06:10:03",
            "time_to": "2019-10-25 06:10:03",
            "status": 4,
            "users_id": 4,
            "troubles_id": 5
        }
    ]
}
```

### HTTP Request
`GET api/tasks`


<!-- END_4227b9e5e54912af051e8dd5472afbce -->

<!-- START_7de0405fed5cd5226f5960f19b6ca3cd -->
## show

> Example request:

```bash
curl -X GET -G "http://localhost:8000/api/tasks/1" 
```

```javascript
const url = new URL("http://localhost:8000/api/tasks/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "code": 200,
    "data": {
        "id": 1,
        "name": "Task 54",
        "desc": "Laudantium qui et repellendus est.",
        "time_from": "2019-10-25 06:10:03",
        "time_to": "2019-10-25 06:10:03",
        "status": 4,
        "users_id": 4,
        "troubles_id": 1
    }
}
```

### HTTP Request
`GET api/tasks/{id}`


<!-- END_7de0405fed5cd5226f5960f19b6ca3cd -->

<!-- START_4da0d9b378428dcc89ced395d4a806e7 -->
## store

> Example request:

```bash
curl -X POST "http://localhost:8000/api/tasks" \
    -H "Content-Type: application/json" \
    -d '{"name":"provident","desc":"consectetur","time_from":"ipsa","time_to":18,"status":"omnis","users_id":18,"troubles_id":19}'

```

```javascript
const url = new URL("http://localhost:8000/api/tasks");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "provident",
    "desc": "consectetur",
    "time_from": "ipsa",
    "time_to": 18,
    "status": "omnis",
    "users_id": 18,
    "troubles_id": 19
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/tasks`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | Name of task
    desc | string |  required  | Description of task
    time_from | string |  required  | time from of task
    time_to | integer |  required  | time to of task
    status | string |  required  | status of task
    users_id | integer |  required  | users_id of task
    troubles_id | integer |  required  | troubles_id of task

<!-- END_4da0d9b378428dcc89ced395d4a806e7 -->

<!-- START_69075358732d924d06bc0709e0be43f6 -->
## update

> Example request:

```bash
curl -X PUT "http://localhost:8000/api/tasks/1" \
    -H "Content-Type: application/json" \
    -d '{"name":"quod","desc":"odio","time_from":"enim","time_to":10,"status":"optio","users_id":8,"troubles_id":11}'

```

```javascript
const url = new URL("http://localhost:8000/api/tasks/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "quod",
    "desc": "odio",
    "time_from": "enim",
    "time_to": 10,
    "status": "optio",
    "users_id": 8,
    "troubles_id": 11
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/tasks/{id}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | Name of task
    desc | string |  required  | Description of task
    time_from | string |  required  | time from of task
    time_to | integer |  required  | time to of task
    status | string |  required  | status of task
    users_id | integer |  required  | users_id of task
    troubles_id | integer |  required  | troubles_id of task

<!-- END_69075358732d924d06bc0709e0be43f6 -->

<!-- START_64a33c367c5cefce2d1f64abcd08d2e9 -->
## delete

> Example request:

```bash
curl -X DELETE "http://localhost:8000/api/tasks/1" 
```

```javascript
const url = new URL("http://localhost:8000/api/tasks/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/tasks/{id}`


<!-- END_64a33c367c5cefce2d1f64abcd08d2e9 -->

#troubles


<!-- START_38f3fbc47413c9ae16e2b430c60b659e -->
## index

> Example request:

```bash
curl -X GET -G "http://localhost:8000/api/troubles" 
```

```javascript
const url = new URL("http://localhost:8000/api/troubles");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "code": 200,
    "data": [
        {
            "id": 1,
            "name": "Trouble 67",
            "desc": "connie.luettgen@example.net",
            "devices_id": 5
        },
        {
            "id": 2,
            "name": "Trouble 29",
            "desc": "paula75@example.com",
            "devices_id": 2
        },
        {
            "id": 3,
            "name": "Trouble 78",
            "desc": "wpouros@example.org",
            "devices_id": 2
        },
        {
            "id": 4,
            "name": "Trouble 81",
            "desc": "gfeest@example.com",
            "devices_id": 5
        },
        {
            "id": 5,
            "name": "Trouble 35",
            "desc": "barton.colten@example.net",
            "devices_id": 3
        }
    ]
}
```

### HTTP Request
`GET api/troubles`


<!-- END_38f3fbc47413c9ae16e2b430c60b659e -->

<!-- START_01032dc854ff032ad3305e565daa6ad2 -->
## show

> Example request:

```bash
curl -X GET -G "http://localhost:8000/api/troubles/1" 
```

```javascript
const url = new URL("http://localhost:8000/api/troubles/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "code": 200,
    "data": {
        "id": 1,
        "name": "Trouble 67",
        "desc": "connie.luettgen@example.net",
        "devices_id": 5
    }
}
```

### HTTP Request
`GET api/troubles/{id}`


<!-- END_01032dc854ff032ad3305e565daa6ad2 -->

<!-- START_f2d9eaa096a6038d13aa9d8f9185f9d7 -->
## store

> Example request:

```bash
curl -X POST "http://localhost:8000/api/troubles" \
    -H "Content-Type: application/json" \
    -d '{"name":"est","desc":"et","devices_id":19}'

```

```javascript
const url = new URL("http://localhost:8000/api/troubles");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "est",
    "desc": "et",
    "devices_id": 19
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/troubles`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | Name of trouble
    desc | string |  required  | Description of trouble
    devices_id | integer |  required  | devices_id of trouble

<!-- END_f2d9eaa096a6038d13aa9d8f9185f9d7 -->

<!-- START_40fa1be4539611dd5901f9e7b4437e98 -->
## update

> Example request:

```bash
curl -X PUT "http://localhost:8000/api/troubles/1" \
    -H "Content-Type: application/json" \
    -d '{"name":"temporibus","desc":"ut","devices_id":2}'

```

```javascript
const url = new URL("http://localhost:8000/api/troubles/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "temporibus",
    "desc": "ut",
    "devices_id": 2
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/troubles/{id}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | Name of trouble
    desc | string |  required  | Description of trouble
    devices_id | integer |  required  | devices_id of trouble

<!-- END_40fa1be4539611dd5901f9e7b4437e98 -->

<!-- START_9635f4ddc3e1ed64ca45dcb4b97d771a -->
## delete

> Example request:

```bash
curl -X DELETE "http://localhost:8000/api/troubles/1" 
```

```javascript
const url = new URL("http://localhost:8000/api/troubles/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/troubles/{id}`


<!-- END_9635f4ddc3e1ed64ca45dcb4b97d771a -->

#user


APIs for managing users
<!-- START_638687f1aca2f1e69b360d1516c7c1f9 -->
## register

> Example request:

```bash
curl -X POST "http://localhost:8000/api/user/register" \
    -H "Content-Type: application/json" \
    -d '{"name":"sapiente","email":"quis","password":"cupiditate"}'

```

```javascript
const url = new URL("http://localhost:8000/api/user/register");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "sapiente",
    "email": "quis",
    "password": "cupiditate"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/user/register`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | name, max 20 character
    email | string |  required  | Unique email
    password | string |  required  | Password: min 6 chararacter

<!-- END_638687f1aca2f1e69b360d1516c7c1f9 -->

<!-- START_81e938f4b9f94a613e5ea8d326cca0b1 -->
## updateProfile

> Example request:

```bash
curl -X PUT "http://localhost:8000/api/user/me" \
    -H "Content-Type: application/json" \
    -d '{"name":"dicta","birthday":"corrupti","job":"cumque"}'

```

```javascript
const url = new URL("http://localhost:8000/api/user/me");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "dicta",
    "birthday": "corrupti",
    "job": "cumque"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/user/me`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | name, max 20 character
    birthday | string |  required  | birthday, format: Y-m-
    job | string |  required  | job, max 255 character

<!-- END_81e938f4b9f94a613e5ea8d326cca0b1 -->

<!-- START_0b975e87a66d92fbc5e8df29cdaf518b -->
## me

> Example request:

```bash
curl -X GET -G "http://localhost:8000/api/user/me" 
```

```javascript
const url = new URL("http://localhost:8000/api/user/me");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "code": "404",
    "message": "User not found"
}
```
> Example response (200):

```json
{
    "code": 706,
    "message": "messages.user.user_not_found"
}
```

### HTTP Request
`GET api/user/me`


<!-- END_0b975e87a66d92fbc5e8df29cdaf518b -->


