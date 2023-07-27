## Documentation for ASKIT

### TODO 07/25/2023: create a nav, card for question, structure, and simple router that redirect all request to index
    Update: Successfuly created a card, nav, simple mvc and router. 
#### TODO: 07/26/2023 Create a database that has two tables. users, question 
    Update: Created the two tables
    TODO: create a database connection using PDO and Fetch Data to render in the view.
    Update: Created a database class that uses PDO to interact with the db
        methods: 
            __construct($config) - accept a config array that is used to create a dsn
                @construct - instantiated PDO object
                @construct - set the attribute for fetch to assoc.
            query($q, []) - accept query that is used to prepare a stmt, array that is used in stmt->execute
                return: $this (the current object).
#### TODO 07/27/2023: : 
        1. create a router class that accepts crud HTTP_METHODS.
        1. create a profile uri wherein i can view my questions.
        1.1 @profile handle get method, post, put, delete