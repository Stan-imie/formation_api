# API Doc

## Film

| URI        | Method           | Params  | Response |
| ---------- |:-------------:| -----:| --- |
| /film   | GET |  | 200: ``` [ { "id" : "id", "annee" : "annee",  "nomfilm": "nomfilm", "poster" : "poster","synopsis" : "synopsis", "acteur": "acteurs"}, {..} ] ``` |
| /film   | POST      |   *required* body ``` {"nomfilm": "nomfilm"} ``` | 201: ``` { "id" : ""id, "annee" : "annee",  "nomfilm": "nomfilm", "poster" : "poster","synopsis" : "synopsis", "acteur": "acteurs"} ``` |
/film   | PUT      |  *required* body ``` { "id" : ""id, "annee" : "annee",  "nomfilm": "nomfilm", "poster" : "poster","synopsis" : "synopsis", "acteur": "acteurs", "categorie" = "categorie"} ```   | 200: ``` { "id" : ""id, "annee" : "annee",  "nomfilm": "nomfilm", "poster" : "poster","synopsis" : "synopsis", "acteur": "acteurs"}``` |
| /film/{id}   | GET      |     | 200: ``` { "id" : ""id, "annee" : "annee",  "nomfilm": "nomfilm", "poster" : "poster","synopsis" : "synopsis", "acteur": "acteurs"} ``` |
| /film/{Titre}   | GET      |     | 200: ``` { "id" : ""id, "annee" : "annee",  "nomfilm": "nomfilm", "poster" : "poster","synopsis" : "synopsis", "acteur": "acteurs"} ``` |
| /film/{id}   | DELETE      |     | 200 ``` {} ``` |

## Acteur

| URI        | Method           | Params  | Response |
| ---------- |:-------------:| -----:| --- |
| /acteur   | GET |  | 200: ``` [ { "id" : ""id, "annee" : "annee",  "nomfilm": "nomfilm", "poster" : "poster","synopsis" : "synopsis", "acteur": "id" : "id", "nom" : "id", "prenom" : "prenom"} ] ``` |
| /acteur   | POST      |   *required* body ``` { "id" : ""id, "annee" : "annee",  "nomfilm": "nomfilm", "poster" : "poster","synopsis" : "synopsis", "acteur": "acteurs"} ``` | 201: ``` { "id" : ""id, "annee" : "annee",  "nomfilm": "nomfilm", "poster" : "poster","synopsis" : "synopsis", "acteur": "id" : "id", "nom" : "id", "prenom" : "prenom}``` | 200: ``` { "id" : ""id, "annee" : "annee",  "nomfilm": "nomfilm", "poster" : "poster","synopsis" : "synopsis", "acteur": "id" : "id", "nom" : "id", "prenom" : "prenom}``` |
| /acteur   | PUT      |  *required* body ``` { "id" : "id", "annee" : "annee",  "nomfilm": "nomfilm", "poster" : "poster","synopsis" : "synopsis", "acteur": "acteurs"} ```   | 200: ``` { "id" : "id", "annee" : "annee",  "nomfilm": "nomfilm", "poster" : "poster","synopsis" : "synopsis", "acteur": "acteurs"}``` |
| /acteur/{id}   | GET      |     | 200: ``` { "id" : "id", "annee" : "annee",  "nomfilm": "nomfilm", "poster" : "poster","synopsis" : "synopsis", "acteur": {"id" : "id", "nom" : "id", "prenom" : "prenom"}} ``` |
| /acteur/{nom}   | GET      |     | 200: ``` { "id" : "id", "annee" : "annee",  "nomfilm": "nomfilm", "poster" : "poster","synopsis" : "synopsis", "acteur": {"id" : "id", "nom" : "id", "prenom" : "prenom"}}``` |
| /acteur/{id}   | DELETE      |     | 200 ``` {} ``` |



## Category

| URI        | Method           | Params  | Response |
| ---------- |:-------------:| -----:| --- |
| /categories   | GET |  | 200: ``` [ { "id" : "id", "annee" : "annee",  "nomfilm": "nomfilm", "poster" : "poster","synopsis" : "synopsis", "acteur": {"id" : "id", "nom" : "id", "prenom" : "prenom"}, {..}} ] ``` |
| /categories   | GET | *required* get | 200: ``` [ { "id" : "id", "annee" : "annee",  "nomfilm": "nomfilm", "poster" : "poster","synopsis" : "synopsis", "acteur": {"id" : "id", "nom" : "id", "prenom" : "prenom"} {..}} ] ``` |
| /categories   | POST      |   | 201: ``` { "id": 42, "name": "Nom"}``` |
| /categories  | PUT      |  *required* body ``` {} ```   | 200: ``` { }``` |
| /categories/{id}  | DELETE      |     | 200 ``` {} ``` |
| /categories/{id}   | GET      |     | 200: ``` { }``` |
| /categories/{nom}   | GET      |     | 200: ``` { }``` |
 