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


> Example response (500):

```json
{
    "message": "Server Error"
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
    -d '{"stationId":1}'

```

```javascript
const url = new URL("http://localhost:8000/api/nowplaying/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "stationId": 1
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


> Example response (500):

```json
{
    "message": "Server Error"
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
    -d '{"$stationId":6}'

```

```javascript
const url = new URL("http://localhost:8000/api/station/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$stationId": 6
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
    -d '{"stationId":1}'

```

```javascript
const url = new URL("http://localhost:8000/api/station/1/history");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "stationId": 1
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
    -d '{"stationId":2}'

```

```javascript
const url = new URL("http://localhost:8000/api/station/1/listeners");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "stationId": 2
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
    -d '{"stationId":9}'

```

```javascript
const url = new URL("http://localhost:8000/api/station/1/playlists");

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


> Example response (500):

```json
{
    "message": "Server Error"
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
    -d '{"stationId":4}'

```

```javascript
const url = new URL("http://localhost:8000/api/station/1/playlist/1");

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
    -d '{"stationId":14}'

```

```javascript
const url = new URL("http://localhost:8000/api/station/1/status");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "stationId": 14
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
    -d '{"stationId":2}'

```

```javascript
const url = new URL("http://localhost:8000/api/station/1/restart");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "stationId": 2
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
    -d '{"stationId":18,"action":"tempore"}'

```

```javascript
const url = new URL("http://localhost:8000/api/station/1/frontend/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "stationId": 18,
    "action": "tempore"
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
    -d '{"stationId":17,"action":"nulla"}'

```

```javascript
const url = new URL("http://localhost:8000/api/station/1/backend/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "stationId": 17,
    "action": "nulla"
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
    -d '{"stationId":1,"requestId":19}'

```

```javascript
const url = new URL("http://localhost:8000/api/station/1/requests");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "stationId": 1,
    "requestId": 19
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
    -d '{"stationId":11,"requestId":20}'

```

```javascript
const url = new URL("http://localhost:8000/api/station/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "stationId": 11,
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
    -d '{"email":"eos","password":"quos"}'

```

```javascript
const url = new URL("http://localhost:8000/api/auth/login");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "email": "eos",
    "password": "quos"
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
            "name": "Calendar 96",
            "desc": "Quis aliquid veniam eos voluptas autem possimus.",
            "audio": null,
            "time_from": "2019-10-21 01:14:11",
            "time_to": "2019-10-21 01:14:11",
            "positions_id": 2,
            "users_id": 4,
            "status": "pending"
        },
        {
            "id": 2,
            "name": "Calendar 38",
            "desc": "Quam repudiandae fugiat similique excepturi sed.",
            "audio": null,
            "time_from": "2019-10-21 01:14:11",
            "time_to": "2019-10-21 01:14:11",
            "positions_id": 1,
            "users_id": 5,
            "status": "pending"
        },
        {
            "id": 3,
            "name": "Calendar 90",
            "desc": "Iure recusandae tempora hic repellat.",
            "audio": null,
            "time_from": "2019-10-21 01:14:11",
            "time_to": "2019-10-21 01:14:11",
            "positions_id": 2,
            "users_id": 3,
            "status": "pending"
        },
        {
            "id": 4,
            "name": "Calendar 87",
            "desc": "Soluta qui eum in consequuntur ut eius.",
            "audio": null,
            "time_from": "2019-10-21 01:14:11",
            "time_to": "2019-10-21 01:14:11",
            "positions_id": 5,
            "users_id": 5,
            "status": "pending"
        },
        {
            "id": 5,
            "name": "Calendar 27",
            "desc": "Maiores accusantium ut voluptas sit maxime.",
            "audio": null,
            "time_from": "2019-10-21 01:14:11",
            "time_to": "2019-10-21 01:14:11",
            "positions_id": 1,
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
    -d '{"name":"cumque","desc":"vero","audio":"ab","time_from":"distinctio","time_to":"qui","positions_id":"quia","status":"magni"}'

```

```javascript
const url = new URL("http://localhost:8000/api/calendars");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "cumque",
    "desc": "vero",
    "audio": "ab",
    "time_from": "distinctio",
    "time_to": "qui",
    "positions_id": "quia",
    "status": "magni"
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
    -d '{"name":"officia","desc":"atque","audio":"iste","time_from":"ad","time_to":"est","positions_id":"consectetur","status":"voluptas"}'

```

```javascript
const url = new URL("http://localhost:8000/api/calendars/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "officia",
    "desc": "atque",
    "audio": "iste",
    "time_from": "ad",
    "time_to": "est",
    "positions_id": "consectetur",
    "status": "voluptas"
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
            "name": "Device 21",
            "desc": "ferry.stevie@example.org",
            "slug": 4,
            "positions_id": 2,
            "users_id": 4,
            "groups_id": 2,
            "status": "good"
        },
        {
            "id": 2,
            "name": "Device 92",
            "desc": "earnest30@example.org",
            "slug": 3,
            "positions_id": 1,
            "users_id": 3,
            "groups_id": 1,
            "status": "good"
        },
        {
            "id": 3,
            "name": "Device 69",
            "desc": "loyce.heaney@example.com",
            "slug": 3,
            "positions_id": 4,
            "users_id": 3,
            "groups_id": 4,
            "status": "good"
        },
        {
            "id": 4,
            "name": "Device 97",
            "desc": "tpadberg@example.com",
            "slug": 3,
            "positions_id": 1,
            "users_id": 3,
            "groups_id": 1,
            "status": "good"
        },
        {
            "id": 5,
            "name": "Device 51",
            "desc": "ahintz@example.com",
            "slug": 2,
            "positions_id": 4,
            "users_id": 2,
            "groups_id": 4,
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
        "name": "Device 21",
        "desc": "ferry.stevie@example.org",
        "slug": 4,
        "positions_id": 2,
        "users_id": 4,
        "groups_id": 2,
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
    -d '{"name":"architecto","desc":"eaque","positions_id":14,"users_id":9,"groups_id":11}'

```

```javascript
const url = new URL("http://localhost:8000/api/devices");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "architecto",
    "desc": "eaque",
    "positions_id": 14,
    "users_id": 9,
    "groups_id": 11
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
    -d '{"parent_id":"nam","name":"eveniet","desc":"doloremque","groups_id":20}'

```

```javascript
const url = new URL("http://localhost:8000/api/devices/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "parent_id": "nam",
    "name": "eveniet",
    "desc": "doloremque",
    "groups_id": 20
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
            "name": "Group 71",
            "desc": "Deserunt commodi aliquam officia commodi soluta error libero ex.",
            "slug": null,
            "type": "vip"
        },
        {
            "id": 2,
            "name": "Group 24",
            "desc": "Enim itaque rem quia dolorum non.",
            "slug": null,
            "type": "vip"
        },
        {
            "id": 3,
            "name": "Group 89",
            "desc": "Unde sapiente voluptatum est beatae doloribus incidunt tenetur vero.",
            "slug": null,
            "type": "vip"
        },
        {
            "id": 4,
            "name": "Group 77",
            "desc": "Iste animi quae blanditiis qui possimus.",
            "slug": null,
            "type": "vip"
        },
        {
            "id": 5,
            "name": "Group 95",
            "desc": "Sequi ullam culpa dolor.",
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
        "name": "Group 71",
        "desc": "Deserunt commodi aliquam officia commodi soluta error libero ex.",
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
    -d '{"name":"hic","desc":"quia","type":"omnis"}'

```

```javascript
const url = new URL("http://localhost:8000/api/groups");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "hic",
    "desc": "quia",
    "type": "omnis"
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
    -d '{"name":"omnis","desc":"sunt","type":"numquam"}'

```

```javascript
const url = new URL("http://localhost:8000/api/groups/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "omnis",
    "desc": "sunt",
    "type": "numquam"
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
                "parent_id": 1,
                "name": "Position 2",
                "desc": "Ut aspernatur cum velit magnam ut quo ut.",
                "users_id": 1,
                "groups_id": 2,
                "station_id": 0
            },
            {
                "id": 2,
                "parent_id": 1,
                "name": "Position 24",
                "desc": "Sit ut sapiente optio aliquid eos.",
                "users_id": 2,
                "groups_id": 3,
                "station_id": 0
            },
            {
                "id": 3,
                "parent_id": 1,
                "name": "Position 3",
                "desc": "Velit est et debitis exercitationem cum tempore.",
                "users_id": 4,
                "groups_id": 4,
                "station_id": 0
            },
            {
                "id": 4,
                "parent_id": 1,
                "name": "Position 77",
                "desc": "Alias voluptatibus enim nemo eaque totam itaque consequatur.",
                "users_id": 2,
                "groups_id": 2,
                "station_id": 0
            },
            {
                "id": 5,
                "parent_id": 1,
                "name": "Position 44",
                "desc": "Eveniet id non animi et non.",
                "users_id": 3,
                "groups_id": 4,
                "station_id": 0
            }
        ],
        "count": 5,
        "next": null,
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
[
    {
        "id": 1,
        "parent_id": 1,
        "name": "Position 2",
        "desc": "Ut aspernatur cum velit magnam ut quo ut.",
        "users_id": 1,
        "groups_id": 2,
        "station_id": 0
    },
    {
        "id": 2,
        "parent_id": 1,
        "name": "Position 24",
        "desc": "Sit ut sapiente optio aliquid eos.",
        "users_id": 2,
        "groups_id": 3,
        "station_id": 0
    },
    {
        "id": 3,
        "parent_id": 1,
        "name": "Position 3",
        "desc": "Velit est et debitis exercitationem cum tempore.",
        "users_id": 4,
        "groups_id": 4,
        "station_id": 0
    },
    {
        "id": 4,
        "parent_id": 1,
        "name": "Position 77",
        "desc": "Alias voluptatibus enim nemo eaque totam itaque consequatur.",
        "users_id": 2,
        "groups_id": 2,
        "station_id": 0
    },
    {
        "id": 5,
        "parent_id": 1,
        "name": "Position 44",
        "desc": "Eveniet id non animi et non.",
        "users_id": 3,
        "groups_id": 4,
        "station_id": 0
    }
]
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
        "parent_id": 1,
        "name": "Position 2",
        "desc": "Ut aspernatur cum velit magnam ut quo ut.",
        "users_id": 1,
        "groups_id": 2,
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
    -d '{"parent_id":"aut","name":"ad","desc":"aperiam","groups_id":5}'

```

```javascript
const url = new URL("http://localhost:8000/api/positions");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "parent_id": "aut",
    "name": "ad",
    "desc": "aperiam",
    "groups_id": 5
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
    -d '{"parent_id":"soluta","name":"dolorum","desc":"est","groups_id":20}'

```

```javascript
const url = new URL("http://localhost:8000/api/positions/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "parent_id": "soluta",
    "name": "dolorum",
    "desc": "est",
    "groups_id": 20
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
            "id": 2,
            "name": "Device 92",
            "desc": "earnest30@example.org",
            "positions_id": 1,
            "users_id": 3,
            "groups_id": 1,
            "status": "good"
        },
        {
            "id": 4,
            "name": "Device 97",
            "desc": "tpadberg@example.com",
            "positions_id": 1,
            "users_id": 3,
            "groups_id": 1,
            "status": "good"
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
    -d '{"name":"sunt","desc":"deserunt","url":"qui"}'

```

```javascript
const url = new URL("http://localhost:8000/api/siteinfos");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "sunt",
    "desc": "deserunt",
    "url": "qui"
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
    -d '{"name":"molestiae","desc":"id","url":"non"}'

```

```javascript
const url = new URL("http://localhost:8000/api/siteinfos/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "molestiae",
    "desc": "id",
    "url": "non"
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
            "name": "Task 50",
            "desc": "In pariatur dicta id voluptate aliquam soluta.",
            "time_from": "2019-10-21 01:14:11",
            "time_to": "2019-10-21 01:14:11",
            "status": 2,
            "users_id": 2,
            "troubles_id": 1
        },
        {
            "id": 2,
            "name": "Task 41",
            "desc": "Ut minima aliquam corporis placeat eos.",
            "time_from": "2019-10-21 01:14:11",
            "time_to": "2019-10-21 01:14:11",
            "status": 1,
            "users_id": 1,
            "troubles_id": 1
        },
        {
            "id": 3,
            "name": "Task 64",
            "desc": "Ad quia autem repellat qui.",
            "time_from": "2019-10-21 01:14:11",
            "time_to": "2019-10-21 01:14:11",
            "status": 2,
            "users_id": 2,
            "troubles_id": 5
        },
        {
            "id": 4,
            "name": "Task 57",
            "desc": "Harum explicabo delectus ad adipisci.",
            "time_from": "2019-10-21 01:14:11",
            "time_to": "2019-10-21 01:14:11",
            "status": 5,
            "users_id": 5,
            "troubles_id": 3
        },
        {
            "id": 5,
            "name": "Task 94",
            "desc": "Ducimus occaecati atque aut doloribus officiis omnis.",
            "time_from": "2019-10-21 01:14:11",
            "time_to": "2019-10-21 01:14:11",
            "status": 1,
            "users_id": 1,
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
        "name": "Task 50",
        "desc": "In pariatur dicta id voluptate aliquam soluta.",
        "time_from": "2019-10-21 01:14:11",
        "time_to": "2019-10-21 01:14:11",
        "status": 2,
        "users_id": 2,
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
    -d '{"name":"ut","desc":"suscipit","time_from":"qui","time_to":19,"status":"nihil","users_id":11,"troubles_id":9}'

```

```javascript
const url = new URL("http://localhost:8000/api/tasks");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "ut",
    "desc": "suscipit",
    "time_from": "qui",
    "time_to": 19,
    "status": "nihil",
    "users_id": 11,
    "troubles_id": 9
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
    -d '{"name":"quidem","desc":"suscipit","time_from":"architecto","time_to":12,"status":"ut","users_id":16,"troubles_id":19}'

```

```javascript
const url = new URL("http://localhost:8000/api/tasks/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "quidem",
    "desc": "suscipit",
    "time_from": "architecto",
    "time_to": 12,
    "status": "ut",
    "users_id": 16,
    "troubles_id": 19
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
            "name": "Trouble 25",
            "desc": "ddaniel@example.org",
            "devices_id": 4
        },
        {
            "id": 2,
            "name": "Trouble 65",
            "desc": "torey.gislason@example.net",
            "devices_id": 4
        },
        {
            "id": 3,
            "name": "Trouble 6",
            "desc": "pnikolaus@example.net",
            "devices_id": 2
        },
        {
            "id": 4,
            "name": "Trouble 10",
            "desc": "nkuphal@example.com",
            "devices_id": 3
        },
        {
            "id": 5,
            "name": "Trouble 50",
            "desc": "germaine09@example.org",
            "devices_id": 2
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
        "name": "Trouble 25",
        "desc": "ddaniel@example.org",
        "devices_id": 4
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
    -d '{"name":"aut","desc":"aliquid","devices_id":1}'

```

```javascript
const url = new URL("http://localhost:8000/api/troubles");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "aut",
    "desc": "aliquid",
    "devices_id": 1
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
    -d '{"name":"omnis","desc":"aperiam","devices_id":7}'

```

```javascript
const url = new URL("http://localhost:8000/api/troubles/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "omnis",
    "desc": "aperiam",
    "devices_id": 7
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
    -d '{"name":"sapiente","email":"qui","password":"ut"}'

```

```javascript
const url = new URL("http://localhost:8000/api/user/register");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "sapiente",
    "email": "qui",
    "password": "ut"
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
    -d '{"name":"illo","birthday":"esse","job":"itaque"}'

```

```javascript
const url = new URL("http://localhost:8000/api/user/me");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "illo",
    "birthday": "esse",
    "job": "itaque"
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


