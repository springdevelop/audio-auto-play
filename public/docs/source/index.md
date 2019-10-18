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

nowplayings
<!-- START_365cf185d94517578df143c1ce14f245 -->
## api/nowplayings
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
## api/nowplaying/{station_id}
> Example request:

```bash
curl -X GET -G "http://localhost:8000/api/nowplaying/1" \
    -H "Content-Type: application/json" \
    -d '{"stationId":15}'

```

```javascript
const url = new URL("http://localhost:8000/api/nowplaying/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "stationId": 15
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

stations
<!-- START_33b3612600feaada1500dc120fac39a0 -->
## api/stations
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
## api/station/{station_id}
> Example request:

```bash
curl -X GET -G "http://localhost:8000/api/station/1" \
    -H "Content-Type: application/json" \
    -d '{"$stationId":8}'

```

```javascript
const url = new URL("http://localhost:8000/api/station/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$stationId": 8
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

history
<!-- START_bfa982c383cea3ff78ca5291d5f70fb6 -->
## api/station/{station_id}/history
> Example request:

```bash
curl -X GET -G "http://localhost:8000/api/station/1/history" \
    -H "Content-Type: application/json" \
    -d '{"stationId":19}'

```

```javascript
const url = new URL("http://localhost:8000/api/station/1/history");

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

listeners
<!-- START_1e517aa40ddfad3804e7ca311cf8858f -->
## api/station/{station_id}/listeners
> Example request:

```bash
curl -X GET -G "http://localhost:8000/api/station/1/listeners" \
    -H "Content-Type: application/json" \
    -d '{"stationId":10}'

```

```javascript
const url = new URL("http://localhost:8000/api/station/1/listeners");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "stationId": 10
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

listeners
<!-- START_96b9c99b88c999fcc6256f07e9af2a9e -->
## api/station/{station_id}/playlists
> Example request:

```bash
curl -X GET -G "http://localhost:8000/api/station/1/playlists" \
    -H "Content-Type: application/json" \
    -d '{"stationId":6}'

```

```javascript
const url = new URL("http://localhost:8000/api/station/1/playlists");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "stationId": 6
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
## api/station/{station_id}/playlist/{playlist_id}
> Example request:

```bash
curl -X GET -G "http://localhost:8000/api/station/1/playlist/1" \
    -H "Content-Type: application/json" \
    -d '{"stationId":16}'

```

```javascript
const url = new URL("http://localhost:8000/api/station/1/playlist/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "stationId": 16
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

status
<!-- START_d5b874339b941e240bd82315c2c04afa -->
## api/station/{station_id}/status
> Example request:

```bash
curl -X GET -G "http://localhost:8000/api/station/1/status" \
    -H "Content-Type: application/json" \
    -d '{"stationId":8}'

```

```javascript
const url = new URL("http://localhost:8000/api/station/1/status");

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
`GET api/station/{station_id}/status`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    stationId | integer |  required  | Retrieve the current status of all serivces associated with the radio broadcast

<!-- END_d5b874339b941e240bd82315c2c04afa -->

<!-- START_f7b01f22b958053198f6f744efeccc6b -->
## api/station/{station_id}/restart
> Example request:

```bash
curl -X GET -G "http://localhost:8000/api/station/1/restart" \
    -H "Content-Type: application/json" \
    -d '{"stationId":15}'

```

```javascript
const url = new URL("http://localhost:8000/api/station/1/restart");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "stationId": 15
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
## api/station/{station_id}/frontend/{action}
> Example request:

```bash
curl -X GET -G "http://localhost:8000/api/station/1/frontend/1" \
    -H "Content-Type: application/json" \
    -d '{"stationId":2,"action":"adipisci"}'

```

```javascript
const url = new URL("http://localhost:8000/api/station/1/frontend/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "stationId": 2,
    "action": "adipisci"
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
## api/station/{station_id}/backend/{action}
> Example request:

```bash
curl -X GET -G "http://localhost:8000/api/station/1/backend/1" \
    -H "Content-Type: application/json" \
    -d '{"stationId":8,"action":"blanditiis"}'

```

```javascript
const url = new URL("http://localhost:8000/api/station/1/backend/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "stationId": 8,
    "action": "blanditiis"
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

songs-request
<!-- START_9e7bd4f8b35c832ac0a17dee9fa669e4 -->
## api/station/{station_id}/requests
> Example request:

```bash
curl -X GET -G "http://localhost:8000/api/station/1/requests" \
    -H "Content-Type: application/json" \
    -d '{"stationId":7,"requestId":10}'

```

```javascript
const url = new URL("http://localhost:8000/api/station/1/requests");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "stationId": 7,
    "requestId": 10
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
## api/station/{station_id/request/{request_id}
> Example request:

```bash
curl -X POST "http://localhost:8000/api/station/1" \
    -H "Content-Type: application/json" \
    -d '{"stationId":15,"requestId":18}'

```

```javascript
const url = new URL("http://localhost:8000/api/station/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "stationId": 15,
    "requestId": 18
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
            "name": "Calendar 9",
            "desc": "Ipsum qui labore quis quam dignissimos id libero.",
            "audio": null,
            "time_from": "2019-10-18 15:02:19",
            "time_to": "2019-10-18 15:02:19",
            "positions_id": 2,
            "users_id": 4,
            "status": "pending"
        },
        {
            "id": 2,
            "name": "Calendar 69",
            "desc": "Quia accusantium tempore architecto asperiores atque fuga laborum.",
            "audio": null,
            "time_from": "2019-10-18 15:02:19",
            "time_to": "2019-10-18 15:02:19",
            "positions_id": 4,
            "users_id": 4,
            "status": "pending"
        },
        {
            "id": 3,
            "name": "Calendar 51",
            "desc": "Et quo dicta nulla.",
            "audio": null,
            "time_from": "2019-10-18 15:02:19",
            "time_to": "2019-10-18 15:02:19",
            "positions_id": 5,
            "users_id": 2,
            "status": "pending"
        },
        {
            "id": 4,
            "name": "Calendar 79",
            "desc": "Corrupti iste aut soluta ipsum excepturi quia vitae.",
            "audio": null,
            "time_from": "2019-10-18 15:02:19",
            "time_to": "2019-10-18 15:02:19",
            "positions_id": 3,
            "users_id": 5,
            "status": "pending"
        },
        {
            "id": 5,
            "name": "Calendar 1",
            "desc": "Distinctio et aliquam excepturi tenetur.",
            "audio": null,
            "time_from": "2019-10-18 15:02:19",
            "time_to": "2019-10-18 15:02:19",
            "positions_id": 3,
            "users_id": 5,
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
    -d '{"name":"cum","desc":"sint","audio":"dolores","time_from":"eos","time_to":"ratione","positions_id":"sequi","status":"totam"}'

```

```javascript
const url = new URL("http://localhost:8000/api/calendars");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "cum",
    "desc": "sint",
    "audio": "dolores",
    "time_from": "eos",
    "time_to": "ratione",
    "positions_id": "sequi",
    "status": "totam"
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
    -d '{"name":"quia","desc":"cumque","audio":"ut","time_from":"et","time_to":"eum","positions_id":"temporibus","status":"provident"}'

```

```javascript
const url = new URL("http://localhost:8000/api/calendars/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "quia",
    "desc": "cumque",
    "audio": "ut",
    "time_from": "et",
    "time_to": "eum",
    "positions_id": "temporibus",
    "status": "provident"
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
            "name": "Device 53",
            "desc": "vjacobs@example.net",
            "slug": 4,
            "positions_id": 1,
            "users_id": 4,
            "groups_id": 1,
            "status": "good"
        },
        {
            "id": 2,
            "name": "Device 28",
            "desc": "velda.jaskolski@example.net",
            "slug": 2,
            "positions_id": 3,
            "users_id": 2,
            "groups_id": 3,
            "status": "good"
        },
        {
            "id": 3,
            "name": "Device 73",
            "desc": "noelia.mcdermott@example.net",
            "slug": 5,
            "positions_id": 1,
            "users_id": 5,
            "groups_id": 1,
            "status": "good"
        },
        {
            "id": 4,
            "name": "Device 61",
            "desc": "annabel.ohara@example.org",
            "slug": 1,
            "positions_id": 4,
            "users_id": 1,
            "groups_id": 4,
            "status": "good"
        },
        {
            "id": 5,
            "name": "Device 98",
            "desc": "terry42@example.net",
            "slug": 4,
            "positions_id": 4,
            "users_id": 4,
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
        "name": "Device 53",
        "desc": "vjacobs@example.net",
        "slug": 4,
        "positions_id": 1,
        "users_id": 4,
        "groups_id": 1,
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
    -d '{"name":"ut","desc":"accusantium","positions_id":18,"users_id":20,"groups_id":8}'

```

```javascript
const url = new URL("http://localhost:8000/api/devices");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "ut",
    "desc": "accusantium",
    "positions_id": 18,
    "users_id": 20,
    "groups_id": 8
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
    -d '{"parent_id":"itaque","name":"voluptatem","desc":"dolore","groups_id":18}'

```

```javascript
const url = new URL("http://localhost:8000/api/devices/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "parent_id": "itaque",
    "name": "voluptatem",
    "desc": "dolore",
    "groups_id": 18
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
            "name": "Group 22",
            "desc": "Alias libero possimus minus eum voluptatem.",
            "slug": null,
            "type": "vip"
        },
        {
            "id": 2,
            "name": "Group 68",
            "desc": "Totam aut aut consectetur laborum reprehenderit ut eos.",
            "slug": null,
            "type": "vip"
        },
        {
            "id": 3,
            "name": "Group 31",
            "desc": "Sint eligendi occaecati quam.",
            "slug": null,
            "type": "vip"
        },
        {
            "id": 4,
            "name": "Group 65",
            "desc": "Sed facilis officiis eius eos.",
            "slug": null,
            "type": "vip"
        },
        {
            "id": 5,
            "name": "Group 55",
            "desc": "Hic illo ab cumque et illum et eum.",
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
        "name": "Group 22",
        "desc": "Alias libero possimus minus eum voluptatem.",
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
    -d '{"name":"provident","desc":"et","type":"iste"}'

```

```javascript
const url = new URL("http://localhost:8000/api/groups");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "provident",
    "desc": "et",
    "type": "iste"
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
    -d '{"name":"beatae","desc":"aut","type":"iure"}'

```

```javascript
const url = new URL("http://localhost:8000/api/groups/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "beatae",
    "desc": "aut",
    "type": "iure"
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
[
    {
        "id": 1,
        "parent_id": 1,
        "name": "Position 91",
        "desc": "Tempore dolorem quas repellendus dolor.",
        "users_id": 2,
        "groups_id": 5,
        "created_at": "2019-10-18 15:02:19",
        "updated_at": "2019-10-18 15:02:19",
        "station_id": 0
    },
    {
        "id": 2,
        "parent_id": 1,
        "name": "Position 12",
        "desc": "Blanditiis similique non sunt quos sequi quae nihil.",
        "users_id": 5,
        "groups_id": 2,
        "created_at": "2019-10-18 15:02:19",
        "updated_at": "2019-10-18 15:02:19",
        "station_id": 0
    },
    {
        "id": 3,
        "parent_id": 1,
        "name": "Position 27",
        "desc": "Tenetur repudiandae consequatur harum facere neque.",
        "users_id": 4,
        "groups_id": 4,
        "created_at": "2019-10-18 15:02:19",
        "updated_at": "2019-10-18 15:02:19",
        "station_id": 0
    },
    {
        "id": 4,
        "parent_id": 1,
        "name": "Position 30",
        "desc": "Rerum et soluta facere velit ad porro.",
        "users_id": 3,
        "groups_id": 2,
        "created_at": "2019-10-18 15:02:19",
        "updated_at": "2019-10-18 15:02:19",
        "station_id": 0
    },
    {
        "id": 5,
        "parent_id": 1,
        "name": "Position 25",
        "desc": "Hic tenetur fugiat sunt non odio incidunt voluptatem.",
        "users_id": 4,
        "groups_id": 2,
        "created_at": "2019-10-18 15:02:19",
        "updated_at": "2019-10-18 15:02:19",
        "station_id": 0
    }
]
```

### HTTP Request
`GET api/positions`


<!-- END_ee1d1766a73d2f5c17cc2e47c84bd12b -->

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
    "code": 200,
    "data": {
        "id": 1,
        "parent_id": 1,
        "name": "Position 91",
        "desc": "Tempore dolorem quas repellendus dolor.",
        "users_id": 2,
        "groups_id": 5
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
    -d '{"parent_id":"odio","name":"nemo","desc":"optio","groups_id":1}'

```

```javascript
const url = new URL("http://localhost:8000/api/positions");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "parent_id": "odio",
    "name": "nemo",
    "desc": "optio",
    "groups_id": 1
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
    -d '{"parent_id":"eveniet","name":"ut","desc":"sunt","groups_id":12}'

```

```javascript
const url = new URL("http://localhost:8000/api/positions/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "parent_id": "eveniet",
    "name": "ut",
    "desc": "sunt",
    "groups_id": 12
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
## show

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


> Example response (500):

```json
{
    "message": "Server Error"
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
    -d '{"name":"aut","desc":"vitae","url":"et"}'

```

```javascript
const url = new URL("http://localhost:8000/api/siteinfos");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "aut",
    "desc": "vitae",
    "url": "et"
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
    -d '{"name":"sit","desc":"totam","url":"et"}'

```

```javascript
const url = new URL("http://localhost:8000/api/siteinfos/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "sit",
    "desc": "totam",
    "url": "et"
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
            "name": "Task 77",
            "desc": "Ut quidem laboriosam molestiae aut quod explicabo aut.",
            "time_from": "2019-10-18 15:02:19",
            "time_to": "2019-10-18 15:02:19",
            "status": 4,
            "users_id": 4,
            "troubles_id": 2
        },
        {
            "id": 2,
            "name": "Task 36",
            "desc": "Recusandae eos harum inventore dolor dolores ratione alias.",
            "time_from": "2019-10-18 15:02:19",
            "time_to": "2019-10-18 15:02:19",
            "status": 3,
            "users_id": 3,
            "troubles_id": 2
        },
        {
            "id": 3,
            "name": "Task 32",
            "desc": "Dolor minus ut est iure occaecati.",
            "time_from": "2019-10-18 15:02:19",
            "time_to": "2019-10-18 15:02:19",
            "status": 2,
            "users_id": 2,
            "troubles_id": 1
        },
        {
            "id": 4,
            "name": "Task 10",
            "desc": "Neque optio distinctio delectus enim tempore dolores ducimus.",
            "time_from": "2019-10-18 15:02:19",
            "time_to": "2019-10-18 15:02:19",
            "status": 1,
            "users_id": 1,
            "troubles_id": 1
        },
        {
            "id": 5,
            "name": "Task 71",
            "desc": "Accusantium et voluptatem eos dolor recusandae voluptas.",
            "time_from": "2019-10-18 15:02:19",
            "time_to": "2019-10-18 15:02:19",
            "status": 3,
            "users_id": 3,
            "troubles_id": 4
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
        "name": "Task 77",
        "desc": "Ut quidem laboriosam molestiae aut quod explicabo aut.",
        "time_from": "2019-10-18 15:02:19",
        "time_to": "2019-10-18 15:02:19",
        "status": 4,
        "users_id": 4,
        "troubles_id": 2
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
    -d '{"name":"consequatur","desc":"provident","time_from":"hic","time_to":20,"status":"tempore","users_id":4,"troubles_id":5}'

```

```javascript
const url = new URL("http://localhost:8000/api/tasks");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "consequatur",
    "desc": "provident",
    "time_from": "hic",
    "time_to": 20,
    "status": "tempore",
    "users_id": 4,
    "troubles_id": 5
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
    -d '{"name":"quia","desc":"voluptas","time_from":"autem","time_to":17,"status":"accusamus","users_id":12,"troubles_id":11}'

```

```javascript
const url = new URL("http://localhost:8000/api/tasks/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "quia",
    "desc": "voluptas",
    "time_from": "autem",
    "time_to": 17,
    "status": "accusamus",
    "users_id": 12,
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
            "name": "Trouble 32",
            "desc": "cmertz@example.com",
            "devices_id": 5
        },
        {
            "id": 2,
            "name": "Trouble 3",
            "desc": "paucek.laurence@example.org",
            "devices_id": 2
        },
        {
            "id": 3,
            "name": "Trouble 73",
            "desc": "baby.osinski@example.org",
            "devices_id": 2
        },
        {
            "id": 4,
            "name": "Trouble 49",
            "desc": "payton11@example.net",
            "devices_id": 4
        },
        {
            "id": 5,
            "name": "Trouble 80",
            "desc": "borer.vivian@example.com",
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
        "name": "Trouble 32",
        "desc": "cmertz@example.com",
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
    -d '{"name":"consectetur","desc":"pariatur","devices_id":7}'

```

```javascript
const url = new URL("http://localhost:8000/api/troubles");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "consectetur",
    "desc": "pariatur",
    "devices_id": 7
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
    -d '{"name":"officia","desc":"ut","devices_id":5}'

```

```javascript
const url = new URL("http://localhost:8000/api/troubles/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "officia",
    "desc": "ut",
    "devices_id": 5
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
    -d '{"name":"aut","email":"quae","password":"ratione"}'

```

```javascript
const url = new URL("http://localhost:8000/api/user/register");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "aut",
    "email": "quae",
    "password": "ratione"
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
    -d '{"name":"vero","birthday":"debitis","job":"aut"}'

```

```javascript
const url = new URL("http://localhost:8000/api/user/me");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "vero",
    "birthday": "debitis",
    "job": "aut"
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

### HTTP Request
`GET api/user/me`


<!-- END_0b975e87a66d92fbc5e8df29cdaf518b -->


