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
    create a router class that accepts crud HTTP_METHODS.
    Update: done, To follow card @profile. #need a way to group profile img and name
    status - 200
#### TODO 07/28/2023:
    create a profile wherein i can view my questions.
     @profile need to create a way to handle get, post, put, delete to questions.
    
    Update: 
    1. created a helper functions
        - json_decode [comment]
        - date formatter
        - twoDimentional to oneDimential arr
    2. dynamic rendering @profile base on the data.
    3. add column @users table joined_date

    07/29/2023 - still working on how to show 1 question
    Update - comments are showing, working on when user post a comment. NOTE:links tbf

#### TODO 07/31/2023
    create a logic when the user comment to a question it will append to the comment section of the post
    Update - successfuly created a logic that append a newly comment to a comment section.

#### TODO 08/01/2023
    create a way that the newest comment will be on the top of the post.
    Update - 5:02 pm: done, try to create a service container.

    Update - 6:38pm: Done creating service container.
    
    future update of comments:
        * Users can reply to a comment or like a comment
        * create a logic that does not show all comments at once i can do like a btn that load another 5 comments or something.
        * create a level of privacy, public - anyone, protected - friends, private - me or strictly to any of my friends. 

#### TODO 08/02/2023
    create a way for the user to create a question.
        1. Comments should have a dedicated folder to perform crud
        2. Comments should have an ID to easily perform crud
        3. Performing question CRUD @profile>questions. 
        NOTE: seperating crud for question and comment to increase readability.

    Update 4:50pm : 
        Created a folder for comment that can perform crud
        User can now add question from profile and index
        Created a fn that get all the questions of the user to display @profile>index.
        
    future update to question 
        * If the user owned the post he/she can delete any comment or the post itself.
        * need to have update and delete the question.

#### TODO: 08/03/2023
    create a authentication for where user can register or login an account.
    perform hashing to password
    form validation
    prg design
    middleware

    Update: created a register and login ui, logic tbf
#### TODO: 08/04/2023
    creating form validation and logic for register and login
    updated the post max size.

    to be continue create a dir+id of the user and rename the picture to profile_pic

#### TODO: 08/05/2023
    Honestly i created so much that i forgot all about them XD
    I kinda clean my code a bit, but still a lot of works to do.
    user can now sign in sign out and create account

    next todo - create a update profile picture, cause by default it is a the dafault fb profile.

#### TODO: 08/07/2023
    create a update profile picture, cause by default it is a the dafault fb profile.
    
    update: done, 2:12pm;

# To be continue....
