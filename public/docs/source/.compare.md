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
            "name": "Device 47",
            "desc": "qschmitt@example.com",
            "slug": 6,
            "positions_id": 2,
            "users_id": 6,
            "groups_id": 2,
            "status": "good"
        },
        {
            "id": 2,
            "name": "Device 19",
            "desc": "jasen01@example.org",
            "slug": 5,
            "positions_id": 1,
            "users_id": 5,
            "groups_id": 1,
            "status": "good"
        },
        {
            "id": 3,
            "name": "Device 98",
            "desc": "uerdman@example.com",
            "slug": 10,
            "positions_id": 5,
            "users_id": 10,
            "groups_id": 5,
            "status": "good"
        },
        {
            "id": 4,
            "name": "Device 67",
            "desc": "casper.spencer@example.net",
            "slug": 9,
            "positions_id": 4,
            "users_id": 9,
            "groups_id": 4,
            "status": "good"
        },
        {
            "id": 5,
            "name": "Device 60",
            "desc": "eve.windler@example.org",
            "slug": 3,
            "positions_id": 2,
            "users_id": 3,
            "groups_id": 2,
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
        "name": "Device 47",
        "desc": "qschmitt@example.com",
        "slug": 6,
        "positions_id": 2,
        "users_id": 6,
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
    -d '{"name":"enim","desc":"et","positions_id":2,"users_id":18,"groups_id":4}'

```

```javascript
const url = new URL("http://localhost:8000/api/devices");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "enim",
    "desc": "et",
    "positions_id": 2,
    "users_id": 18,
    "groups_id": 4
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
    -d '{"parent_id":"pariatur","name":"et","desc":"ducimus","groups_id":13}'

```

```javascript
const url = new URL("http://localhost:8000/api/devices/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "parent_id": "pariatur",
    "name": "et",
    "desc": "ducimus",
    "groups_id": 13
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


> Example response (401):

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
            "name": "Group 40",
            "desc": "Itaque tempore qui qui nisi totam.",
            "slug": null,
            "type": "vip"
        },
        {
            "id": 2,
            "name": "Group 30",
            "desc": "Sequi vero et quos quos ipsam provident.",
            "slug": null,
            "type": "vip"
        },
        {
            "id": 3,
            "name": "Group 20",
            "desc": "Enim amet et quis dolor.",
            "slug": null,
            "type": "vip"
        },
        {
            "id": 4,
            "name": "Group 95",
            "desc": "Et possimus praesentium est sunt nisi quia.",
            "slug": null,
            "type": "vip"
        },
        {
            "id": 5,
            "name": "Group 21",
            "desc": "Similique incidunt dolorum quaerat nam harum.",
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
        "name": "Group 40",
        "desc": "Itaque tempore qui qui nisi totam.",
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
    -d '{"name":"a","desc":"aspernatur","type":"alias"}'

```

```javascript
const url = new URL("http://localhost:8000/api/groups");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "a",
    "desc": "aspernatur",
    "type": "alias"
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
    -d '{"name":"impedit","desc":"sequi","type":"reiciendis"}'

```

```javascript
const url = new URL("http://localhost:8000/api/groups/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "impedit",
    "desc": "sequi",
    "type": "reiciendis"
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
    "code": 200,
    "data": [
        {
            "id": 9,
            "name": "quo",
            "desc": "sed",
            "users_id": 1,
            "groups_id": 8
        },
        {
            "id": 8,
            "name": "quo",
            "desc": "sed",
            "users_id": 1,
            "groups_id": 8
        },
        {
            "id": 7,
            "name": "quo",
            "desc": "sed",
            "users_id": 1,
            "groups_id": 8
        },
        {
            "id": 6,
            "name": "quo",
            "desc": "sed",
            "users_id": 1,
            "groups_id": 8
        },
        {
            "id": 2,
            "name": "Position 27",
            "desc": "Magnam enim quia et perferendis omnis aut at.",
            "users_id": 9,
            "groups_id": 2
        },
        {
            "id": 3,
            "name": "Position 73",
            "desc": "Vel eos error vel voluptates.",
            "users_id": 6,
            "groups_id": 2
        },
        {
            "id": 4,
            "name": "Position 72",
            "desc": "Aut explicabo ipsa cupiditate corrupti.",
            "users_id": 2,
            "groups_id": 4
        },
        {
            "id": 5,
            "name": "Position 2",
            "desc": "Occaecati perspiciatis dignissimos eligendi placeat quidem.",
            "users_id": 8,
            "groups_id": 5
        }
    ]
}
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
    "code": 706,
    "message": "messages.position.position_not_found"
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
    -d '{"parent_id":"aut","name":"expedita","desc":"libero","groups_id":13}'

```

```javascript
const url = new URL("http://localhost:8000/api/positions");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "parent_id": "aut",
    "name": "expedita",
    "desc": "libero",
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
    -d '{"parent_id":"quae","name":"dolore","desc":"tenetur","groups_id":3}'

```

```javascript
const url = new URL("http://localhost:8000/api/positions/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "parent_id": "quae",
    "name": "dolore",
    "desc": "tenetur",
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
            "name": "Trouble 80",
            "desc": "forest06@example.net",
            "devices_id": 1
        },
        {
            "id": 2,
            "name": "Trouble 64",
            "desc": "iva04@example.net",
            "devices_id": 4
        },
        {
            "id": 3,
            "name": "Trouble 16",
            "desc": "tbogisich@example.com",
            "devices_id": 4
        },
        {
            "id": 4,
            "name": "Trouble 49",
            "desc": "ansel.pfeffer@example.org",
            "devices_id": 3
        },
        {
            "id": 5,
            "name": "Trouble 7",
            "desc": "allie90@example.org",
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
        "name": "Trouble 80",
        "desc": "forest06@example.net",
        "devices_id": 1
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
    -d '{"name":"vitae","desc":"fugit","devices_id":3}'

```

```javascript
const url = new URL("http://localhost:8000/api/troubles");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "vitae",
    "desc": "fugit",
    "devices_id": 3
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
    -d '{"name":"dicta","desc":"nobis","devices_id":19}'

```

```javascript
const url = new URL("http://localhost:8000/api/troubles/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "dicta",
    "desc": "nobis",
    "devices_id": 19
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
    -d '{"name":"consequatur","email":"omnis","password":"rerum"}'

```

```javascript
const url = new URL("http://localhost:8000/api/user/register");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "consequatur",
    "email": "omnis",
    "password": "rerum"
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
    -d '{"name":"eaque","birthday":"et","job":"sed"}'

```

```javascript
const url = new URL("http://localhost:8000/api/user/me");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "eaque",
    "birthday": "et",
    "job": "sed"
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


