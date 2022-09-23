<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
	<link href="\project_saffron\resources\sass\login.css" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

{{--     <div id="app">
        <login-form></login-form>
    </div> --}}
    <div id="modal-task-detail">
        <div>
            <ul style="display:flex;flex-direction:row;justify-content:start;list-style: none;padding-left:0;">
                <li>Design </li>
                <li style="padding-left:20px;">\</li>
                <li style="padding-left:20px;"> ACE Project</li>
            </ul>
            <h1>The Bear Collective Project</h1>
        </div>
        <table id="details-table">
            <tr>
                <td>Status</td>
                <td id="label">In progress</td>
            </tr>
            <tr>
                <td>Timeline</td><td>Feb 17, 2022</td>
            </tr>
            <tr>
                <td>Assignee</td>
                <td>
                    <div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>+3 Member
                </td>
            </tr>
            <tr>
                <td>Label</td><td><div class="label blue">Style Guide</div></td><td><div class="label green">Design Guide</div></td><td><div class="label yellow">+Add Label</div></td>
            </tr>
        </table>
        <div>
            <div id="chain-options">
                <div>Comments</div><div>Description</div><div>Settings</div>
            </div>
            <div style="padding:20px;">
                <div>
                    <textarea id='start-comment' placeholder="Write your comment here :)">content</textarea>
                    <div style="justify-content: end;display: flex;">
                        <span class="material-icons">key</span><span class="material-icons">keyboard_voice</span><button>Publish</button>
                    </div>
                </div>
                <div class="comment">
                    <div class="comment-header" style="display: flex;align-items:baseline">
                        <div>picture</div>
                        <h4 style="padding-left:15px">Nike Sequent</h4>
                        <div style="padding-left:5px" class="muted small">3 hours ago</div>
                    </div>
                    <div class="comment-content">
                        <div>Who dat dog <a>@MichaelJackson</a></div>
                        <div style="display:flex;align-items:baseline;"><span style="padding-right:5px;" class="material-icons">handshake</span><button>Reply</button></div>
                    </div>
                </div>
                <div class="comment">
                    <div class="comment-header" style="display: flex;align-items:baseline">
                        <div>picture</div>
                        <h4 style="padding-left:15px">Nike Sequent</h4>
                        <div style="padding-left:5px" class="muted small">3 hours ago</div>
                    </div>
                    <div class="comment-content">
                        <div>Who dat dog <a>@MichaelJackson</a></div>
                        <div style="display:flex;align-items:baseline;"><span style="padding-right:5px;" class="material-icons">handshake</span><button>Reply</button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>