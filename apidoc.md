# API Doc

## Film

| URI        | Method           | Params  | Response |
| ---------- |:-------------:| -----:| --- |
| /film   | GET |  | 200: ``` [ { "id" : ""id, "annee" : "annee",  "nomfilm": "nomfilm", "poster" : "poster","synopsis" : "synopsis", "acteur": "acteur"}, {..} ] ``` |
| /film   | POST      |   *required* body ``` {"name": "John", "email": "email@domain.net" } ``` | 201: ``` { "id": 42, "name": "John", "email": "email@domain.net", "articles": [ {"id": 1, "title": "Titre de l'article"}]} ``` |
/film   | PUT      |  *required* body ``` {"title": "Titre", "description": "description", "author": 42, "category": 1  } ```   | 200: ``` { "id": 42, "title": "Titre", "description": "Description de l'article...", "author": 42 }``` |
| /film/{id}   | GET      |     | 200: ``` { "id": 42, "name": "John", "email": "email@domain.net", "articles": [ {"id": 1, "title": "Titre de l'article"}]} ``` |
| /film/{Titre}   | GET      |     | 200: ``` { "id": 42, "name": "John", "email": "email@domain.net", "articles": [ {"id": 1, "title": "Titre de l'article"}]} ``` |
| /film/{id}   | DELETE      |     | 200 ``` {} ``` |

## Acteur

| URI        | Method           | Params  | Response |
| ---------- |:-------------:| -----:| --- |
| /acteur   | GET |  | 200: ``` [ { "id": 42, "title": "Titre", "description": "Description de l'article...", author: { "id": 42, "name": "John", email: "email@domain.net"}, {..} ] ``` |
| /acteur   | POST      |   *required* body ``` {"title": "Titre", "description": "description", "author": 42, "category": 1  } ``` | 201: ``` { "id": 42, "title": "Titre", "description": "Description de l'article...", author: { "id": 42, "name": "John", email: "email@domain.net"} }``` | 200: ``` { "id": 42, "title": "Titre", "description": "Description de l'article...", author: { "id": 42, "name": "John", email: "email@domain.net"} }``` |
| /acteur   | PUT      |  *required* body ``` {"title": "Titre", "description": "description", "author": 42, "category": 1  } ```   | 200: ``` { "id": 42, "title": "Titre", "description": "Description de l'article...", "author": 42 }``` |
| /acteur/{id}   | GET      |     | 200: ``` { "id": 42, "title": "Titre", "description": "Description de l'article...", author: { "id": 42, "name": "John", email: "email@domain.net"} }``` |
| /acteur/{nom}   | GET      |     | 200: ``` { "id": 42, "title": "Titre", "description": "Description de l'article...", author: { "id": 42, "name": "John", email: "email@domain.net"} }``` |
| /acteur/{id}   | DELETE      |     | 200 ``` {} ``` |



## Category

| URI        | Method           | Params  | Response |
| ---------- |:-------------:| -----:| --- |
| /categories   | GET |  | 200: ``` [ { "id": 42, "title": "Titre", "description": "Description de l'article...", author: { "id": 42, "name": "John", email: "email@domain.net"}, {..} ] ``` |
| /categories   | GET | *required* get ``` token=IsJohn ``` | 200: ``` [ { "id": 42, "name": "Nom"}, {..} ] ``` <br> 401: ``` {"error": "Unauthorized"} ```  |
| /categories   | POST      |   *required* body ``` {"name": "Titre"} ``` | 201: ``` { "id": 42, "name": "Nom"}``` |
| /categories  | PUT      |  *required* body ``` {"name": "Titre"} ```   | 200: ``` { "id": 42, "name": "Nom"}``` |
| /categories/{id}  | DELETE      |     | 200 ``` {} ``` |
| /categories/{id}   | GET      |     | 200: ``` { "id": 42, "name": "Nom"}``` |
| /categories/{nom}   | GET      |     | 200: ``` { "id": 42, "name": "Nom"}``` |
 