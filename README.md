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
#### TODO 07/27/2023:
    1. create a router class that accepts crud HTTP_METHODS.
    Update: done, To follow card @profile. #need a way to group profile img and name
    status - 200
#### TODO 07/28/2023:
    2. create a profile wherein i can view my questions.
    2.1 @profile need to create a way to handle get, post, put, delete to questions.
    
    Update: 
    1. created a helper functions
        - json_decode [comment]
        - date formatter
        - twoDimentional to oneDimential arr
    2. dynamic rendering @profile base on the data.
    3. add column @users table joined_date

    07/29/2023 - still working on how to show 1 question
    Update - comments are showing, working on when user post a comment. NOTE:links tbf
