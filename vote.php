<!DOCTYPE html>
<head>
    <title>Voting Website - Voting Page</title>
    <link rel="stylesheet" type="text/css" href="vote.css">
</head>
<body>

    <div id="top-nav">
        <p>Navigation Bar</p>
        <div id="login">
            <p>Login goes here</p>
            <form onsubmit="alert('success!')" method="post">
            <input type="text" name="username"/>
            <button type="submit" id="submit-button">Submit</button>
        </form>
        </div>
    </div>

    <div id="page-title">
        <h1>VOTE NOW PLEASE</h1>
    </div>

    <div id="voting-body">
        <h1>2019 Presidential Candidates</h1>

        <br/>

        <div class="candidate" onclick="alert('Selected Steve')">
            <h2>A Person</h2>
            <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Flh3.googleusercontent.com%2FPgfJZomAD_4Q1BM9e9yxrvo6BXPX4BnYTCV23GIHGLGjFTEQS1UFR2-SF63r7llMAsq7t6Z-s2VBIH3hmr5zoA%3Ds400&f=1&nofb=1" alt="steve" height=100px>
            <p>I like being controlled by other people.</p>
        </div>

    </div>
</body>
