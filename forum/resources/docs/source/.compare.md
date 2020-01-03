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
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#Admin management


APIs for managing admins
<!-- START_e9aa8e9cecac4d07efa45f1b2d470efb -->
## login an admin

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://localhost/api/admin/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"Email":"admin@esi.dz","Password":"admin"}'

```

```javascript
const url = new URL(
    "http://localhost/api/admin/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "Email": "admin@esi.dz",
    "Password": "admin"
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
`POST api/admin/login`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `Email` | String |  required  | The email of the admin.
        `Password` | String |  required  | The password of the admin to login.
    
<!-- END_e9aa8e9cecac4d07efa45f1b2d470efb -->

#Student management


APIs for managing students
<!-- START_05869dc0fe651caca22936fcfc4f9c91 -->
## Store a student

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://localhost/api/etudiant/add" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"Merbouh","lastname":"Ismail","UID":"17\/266","degree":"1CS"}'

```

```javascript
const url = new URL(
    "http://localhost/api/etudiant/add"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "Merbouh",
    "lastname": "Ismail",
    "UID": "17\/266",
    "degree": "1CS"
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
`POST api/etudiant/add`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name` | String |  required  | The name of the student.
        `lastname` | String |  required  | The lastname of the student.
        `UID` | String |  required  | The Unique identifiant of the student.
        `degree` | String |  required  | The university year of the student.
    
<!-- END_05869dc0fe651caca22936fcfc4f9c91 -->

<!-- START_4a3125d26e7ae599a890233f6ebe0376 -->
## Destroy a student

[Insert optional longer description of the API endpoint here.]

> Example request:

```bash
curl -X POST \
    "http://localhost/api/etudiant/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/etudiant/destroy"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/etudiant/destroy`


<!-- END_4a3125d26e7ae599a890233f6ebe0376 -->

<!-- START_b0819b0c9f19a58c9d188fca18e1021c -->
## Display a list of students

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/etudiant/list" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/etudiant/list"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

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
    "status": "success",
    "data": [
        {
            "id": 1,
            "name": "kechaoui",
            "lastname": "ali",
            "UID": "099",
            "degree": "2CS"
        },
        {
            "id": 2,
            "name": "aissa",
            "lastname": "belk",
            "UID": "090",
            "degree": "2CS"
        },
        {
            "id": 6,
            "name": "hlm",
            "lastname": "moussa",
            "UID": "100",
            "degree": "3CS"
        }
    ]
}
```

### HTTP Request
`GET api/etudiant/list`


<!-- END_b0819b0c9f19a58c9d188fca18e1021c -->

<!-- START_802ead62e4a6d2fb15513fe84884efd8 -->
## Store a student

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://localhost/students" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"Merbouh","lastname":"Ismail","UID":"17\/266","degree":"1CS"}'

```

```javascript
const url = new URL(
    "http://localhost/students"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "Merbouh",
    "lastname": "Ismail",
    "UID": "17\/266",
    "degree": "1CS"
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
`POST students`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name` | String |  required  | The name of the student.
        `lastname` | String |  required  | The lastname of the student.
        `UID` | String |  required  | The Unique identifiant of the student.
        `degree` | String |  required  | The university year of the student.
    
<!-- END_802ead62e4a6d2fb15513fe84884efd8 -->

<!-- START_443b3d91cd0ba9d1e9146ac1d4b551ad -->
## Destroy a student

[Insert optional longer description of the API endpoint here.]

> Example request:

```bash
curl -X DELETE \
    "http://localhost/students/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/students/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE students/{student}`


<!-- END_443b3d91cd0ba9d1e9146ac1d4b551ad -->

#Teacher management


APIs for managing teachers
<!-- START_e96ef266c1e8629cf62ff3396e224665 -->
## Store a teacher

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://localhost/api/teacher/add" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"fullname":"Mostefai Med.amin","Profession":"Introduction \u00e0 g\u00e9nie logiciel","UID":"Ens43","degree":"Docteur"}'

```

```javascript
const url = new URL(
    "http://localhost/api/teacher/add"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "fullname": "Mostefai Med.amin",
    "Profession": "Introduction \u00e0 g\u00e9nie logiciel",
    "UID": "Ens43",
    "degree": "Docteur"
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
`POST api/teacher/add`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `fullname` | String |  required  | The fullname of the teacher.
        `Profession` | String |  required  | The Module taught by the teacher.
        `UID` | String |  required  | The Unique identifiant of the teacher.
        `degree` | String |  required  | The grade of the teacher.
    
<!-- END_e96ef266c1e8629cf62ff3396e224665 -->

<!-- START_88742646c18e2960f408a4dc0e9c39e5 -->
## Destroy a teacher

[Insert optional longer description of the API endpoint here.]

> Example request:

```bash
curl -X POST \
    "http://localhost/api/teacher/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/teacher/destroy"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/teacher/destroy`


<!-- END_88742646c18e2960f408a4dc0e9c39e5 -->

<!-- START_2b9230f9c56f2816b7571f61bb69e794 -->
## Display a list of teachers

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/teacher/list" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/teacher/list"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

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
    "status": "success",
    "data": [
        {
            "id": 1,
            "name": "kechaoui haroun",
            "lastname": "app mobile",
            "UID": "Ens32",
            "degree": "docteur"
        },
        {
            "id": 4,
            "name": "Sami Benali",
            "lastname": "Sfd",
            "UID": "Ens33",
            "degree": "Professeur"
        }
    ]
}
```

### HTTP Request
`GET api/teacher/list`


<!-- END_2b9230f9c56f2816b7571f61bb69e794 -->

<!-- START_ac4ef7df4a547992150f87b8d8019a3a -->
## Store a teacher

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://localhost/teachers" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"fullname":"Mostefai Med.amin","Profession":"Introduction \u00e0 g\u00e9nie logiciel","UID":"Ens43","degree":"Docteur"}'

```

```javascript
const url = new URL(
    "http://localhost/teachers"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "fullname": "Mostefai Med.amin",
    "Profession": "Introduction \u00e0 g\u00e9nie logiciel",
    "UID": "Ens43",
    "degree": "Docteur"
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
`POST teachers`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `fullname` | String |  required  | The fullname of the teacher.
        `Profession` | String |  required  | The Module taught by the teacher.
        `UID` | String |  required  | The Unique identifiant of the teacher.
        `degree` | String |  required  | The grade of the teacher.
    
<!-- END_ac4ef7df4a547992150f87b8d8019a3a -->

<!-- START_b7a352c5fdd21f8bc7318b82e1dabd6e -->
## Destroy a teacher

[Insert optional longer description of the API endpoint here.]

> Example request:

```bash
curl -X DELETE \
    "http://localhost/teachers/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/teachers/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE teachers/{teacher}`


<!-- END_b7a352c5fdd21f8bc7318b82e1dabd6e -->


