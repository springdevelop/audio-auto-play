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

#position


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
            "id": 4,
            "name": "Position 36",
            "desc": "Quos debitis amet est.",
            "users_id": 3,
            "groups_id": 3
        },
        {
            "id": 5,
            "name": "Position 94",
            "desc": "Deleniti nemo facilis in non reiciendis officiis.",
            "users_id": 2,
            "groups_id": 2
        },
        {
            "id": 1,
            "name": "Position 29",
            "desc": "Cum similique aut dolor omnis ea.",
            "users_id": 5,
            "groups_id": 3
        },
        {
            "id": 2,
            "name": "Position 66",
            "desc": "Quos ipsa velit consequatur doloribus excepturi ea ut.",
            "users_id": 1,
            "groups_id": 5
        },
        {
            "id": 3,
            "name": "Position 98",
            "desc": "Qui animi harum amet consequatur.",
            "users_id": 1,
            "groups_id": 4
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
    "code": 200,
    "data": {
        "id": 1,
        "name": "Position 29",
        "desc": "Cum similique aut dolor omnis ea.",
        "users_id": 5,
        "groups_id": 3
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
    -d '{"{name}":"quo","{desc}":"sed","{groups_id}":8}'

```

```javascript
const url = new URL("http://localhost:8000/api/positions");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "{name}": "quo",
    "{desc}": "sed",
    "{groups_id}": 8
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
    {name} | string |  required  | Name of position
    {desc} | string |  required  | Description of position
    {groups_id} | integer |  required  | groups_id of position

<!-- END_bfc810e5798f902865479c74d95c4f54 -->

<!-- START_0a2857bf8752d14e9e4bb3613fd7f3d0 -->
## update

> Example request:

```bash
curl -X PUT "http://localhost:8000/api/positions/1" 
```

```javascript
const url = new URL("http://localhost:8000/api/positions/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/positions/{id}`


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

#user


APIs for managing users
<!-- START_638687f1aca2f1e69b360d1516c7c1f9 -->
## register

> Example request:

```bash
curl -X POST "http://localhost:8000/api/user/register" \
    -H "Content-Type: application/json" \
    -d '{"name":"aut","email":"sunt","password":"quidem"}'

```

```javascript
const url = new URL("http://localhost:8000/api/user/register");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "aut",
    "email": "sunt",
    "password": "quidem"
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
    -d '{"name":"incidunt","birthday":"illum","job":"repudiandae"}'

```

```javascript
const url = new URL("http://localhost:8000/api/user/me");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "incidunt",
    "birthday": "illum",
    "job": "repudiandae"
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


