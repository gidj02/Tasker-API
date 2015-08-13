<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
            table, th, td {
               border: 1px solid;
               border-color: #3498db;
               bor
               padding: 15px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <b>
                    <table>
                        <thead>
                            <tr>
                                <td>Method</td>
                                <td>URI</td>
                                <td>Description</td>
                                <td>Data Requirement</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>POST</td>
                                <td>api/v1/authenticate</td>
                                <td>Returning Users list</td>
                                <td>Credentials: email, password</td>
                            </tr>
                            <tr>
                                <td>GET</td>
                                <td>api/v1/authenticate</td>
                                <td>Authenticate user.</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>GET</td>
                                <td>api/v1/task</td>
                                <td>Returning Task list.</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>api/v1/task</td>
                                <td>Storing new Task</td>
                                <td>Credentials: name, description, status, deadline</td>
                            </tr>
                            <tr>
                                <td>PATCH</td>
                                <td>api/v1/task/{task_id}</td>
                                <td>Updating Task</td>
                                <td>name, description, status, deadline</td>
                            </tr>
                            <tr>
                                <td>DELETE</td>
                                <td>api/v1/task/{task_id}</td>
                                <td>Deleting Task</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>GET</td>
                                <td>api/v1/user</td>
                                <td>Returning Users list.</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>api/v1/user</td>
                                <td>Storing new User</td>
                                <td>Credentials: name, email, password</td>
                            </tr>
                            <tr>
                                <td>PATCH</td>
                                <td>api/v1/user/{user_id}</td>
                                <td>Updating User</td>
                                <td>name, email</td>
                            </tr>
                            <tr>
                                <td>DELETE</td>
                                <td>api/v1/user/{user_id}</td>
                                <td>Deleting User</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </b>
            </div>
        </div>
    </body>
</html>
