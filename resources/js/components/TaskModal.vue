<template>
    <div id="modal-task-detail">
        <div>
            <ul style="display:flex;flex-direction:row;justify-content:start;list-style: none;padding-left:0;">
                <li>Design </li>
                <li style="padding-left:20px;">\</li>
                <li style="padding-left:20px;"> ACE Project</li>
            </ul>
            <h1>The Bear Collective Project</h1>
        </div>
        <div style="display:flex;flex-direction: column;">
            <div style="display:flex;flex-direction: row;padding:5px">
                <div style="width: 100px;">Status</div>
                <div id="label">In progress</div>
            </div>
            <div style="display:flex;flex-direction: row;padding:5px">
                <div style="width: 100px;">Timeline</div><div>Feb 17, 2022</div>
            </div>
            <div style="display:flex;flex-direction: row;padding:5px">
                <div style="width: 100px;">Assignee</div>
                <div>
                    <div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>+3 Member
                </div>
            </div>
            <div style="display:flex;flex-direction: row;padding:5px">
                <div style="width: 100px;">Label</div><div><div class="label blue">Style Guide</div></div><div><div class="label green">Design Guide</div></div><div><div class="label yellow">+Add Label</div></div>
            </div>
        </div>
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
</template>

<script>
export default {
    data() {
        return{
            status: false
        }
    },
    methods: {
        modal(status) {
            console.log(status, this);
            document.getElementById("side-bar").style.width = (status ? '250px' : '70px');
            return this.status = !(status);
        }
    },
    props: ['tasks']
}
</script>