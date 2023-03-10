<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dashboard.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}" >
</head>

<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="dropdown">
            <span><a href="#"><img class="icons" src="static/envelope.png" />Mailbox<div class="menu-alert">v
                    </div></a></span>
            <div class="dropdown-content">
                <a href="#">Compose</a>
                <a href="#">Inbox</a>
            </div>
        </div>
        <a href="#"><img class="icons" src="static/mobile-app.png" />App views<div class="sticker">SPECIAL</div></a>
        <a href="#"><img class="icons" src="static/widget.png" />Widgets</a>
        <div class="dropdown">
            <span><a href="#"><img class="icons" src="static/misc.png" />Misc.<div class="menu-alert">v
                    </div></a></span>
            <div class="dropdown-content">
                <a href="#">Placeholder</a>
                <a href="#">Placeholder</a>
                <a href="#">Placeholder</a>
                <a href="#">Placeholder</a>
            </div>
        </div>
    </div>

    <div class="content">
        <!-- Top Cards -->
        <div class="row">
            <div class="col-3 col-s-3">
                <div class="card">
                    <div class="card-title">Income<div class="sticker sticker-blue">Monthly</div>
                    </div>
                    <hr />
                    <div class="card-body">40 886,200
                        <p>Total income</p>
                    </div>
                </div>
            </div>
            <div class="col-3 col-s-3">
                <div class="card">
                    <div class="card-title">Orders<div class="sticker sticker-cyan">Annual</div>
                    </div>
                    <hr />
                    <div class="card-body">257,800
                        <p>New orders</p>
                    </div>
                </div>
            </div>
            <div class="col-3 col-s-3">
                <div class="card">
                    <div class="card-title">Visits<div class="sticker">Today</div>
                    </div>
                    <hr />
                    <div class="card-body">106,120
                        <p>New visits</p>
                    </div>
                </div>
            </div>
            <div class="col-3 col-s-3">
                <div class="card">
                    <div class="card-title">User activity<div class="sticker sticker-red">Low value</div>
                    </div>
                    <hr />
                    <div class="card-body">80,600
                        <p>In first month</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Graph Card -->
        <div class="row">
            <div class="col-12 col-s-12">
                <div class="card col-12 col-s-12">
                    <div class="card-title">Orders</div>
                    <hr />
                    <div class="col-8 col-s-8"><img src="/static/graph.png" /></div>
                    <div class="col-4 col-s-4">
                        <div class="card-body">
                            2,346
                            <p>Total orders in period</p>
                            <div class="bar">
                                <div class="overlay" id="bar1"></div>
                            </div>
                            4,422
                            <p>Orders in last month</p>
                            <div class="bar">
                                <div class="overlay" id="bar2"></div>
                            </div>
                            9,180
                            <p>Monthly income from orders</p>
                            <div class="bar">
                                <div class="overlay" id="bar3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Messages -->
            <div class="row">
                <div class="col-4 col-s-4">
                    <div class="message-card" id="messages">
                        <div class="card-title">Messages</div><br />
                        <div id="new-messages-container">
                            <div id="new-messages">
                                New
                                messages</div>
                        </div>
                        <!-- sample messages -->
                        @foreach ($messages as $msg)
                        <div class="message">
                            <div class="message-title">
                            {{ $msg->message_title }}
                            </div>
                            <div class="message-body">
                            {{ $msg->message_body }}
                                <hr />
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!-- User project list -->
                <div class="col-4 col-s-4">
                    <div class="card" id="project-list">
                        <div class="card-title">User project list</div>
                        <hr />
                        <div class="responsive-table">
                        <table>
                            <tr>
                                <th>Status</th>
                                <th>Date</th>
                                <th>User</th>
                                <th>Value</th>
                            </tr>
                            <tr>
                                <td>pending...</td>
                                <td>10:41PM</td>
                                <td>Jessie</td>
                                <td>25%</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="sticker float-lft">Completed</div>
                                </td>
                                <td>8:21PM</td>
                                <td>Skyler</td>
                                <td>32%</td>
                            </tr>
                            <tr>
                                <td>pending...</td>
                                <td>2:15PM</td>
                                <td>Walter</td>
                                <td>78%</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="sticker sticker-orange float-lft">Canceled</div>
                                </td>
                                <td>7:30AM</td>
                                <td>Marie</td>
                                <td>42%</td>
                            </tr>
                        </table>
                    </div>
                    </div>
                </div>
                <!-- Todo list -->
                <div class="col-4 col-s-4">
                    <div class="card" id="todos">
                        <div class="card-title">Small todo list</div>
                        <hr />
                        <div class="chore">
                            <label><input type="checkbox" /> Buy some milk</label>
                        </div>
                        <div class="chore">
                            <label><input type="checkbox" /> Attend a meeting</label>
                        </div>
                        <div class="chore">
                            <label><input type="checkbox" /> git commit a version</label>
                        </div>
                        <div class="chore">
                            <label><input type="checkbox" /> Code review</label>
                        </div>
                        <div class="chore">
                            <label><input type="checkbox" /> Refactor code</label>
                        </div>
                    </div>
                </div>
                <!-- Transactions worldwide -->
                <div class="col-8 col-s-8">
                    <div class="card col-12 col-s-12">
                        <div class="card-title">Transactions worldwide</div>
                        <hr />
                        <div class="col-6 col-s-6">
                            <div class="responsive-table">
                            <table>
                                <tr>
                                    <th>No.</th>
                                    <th>Transaction</th>
                                    <th>Date</th>
                                    <th>Ammount</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Cpu's</td>
                                    <td>30 Jun 2020</td>
                                    <td>
                                        <div class="sticker">400$</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Video games</td>
                                    <td>16 Jan 2021</td>
                                    <td>
                                        <div class="sticker">400$</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>External SSD</td>
                                    <td>26 Apr 2020</td>
                                    <td>
                                        <div class="sticker">400$</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Raspberry pie</td>
                                    <td>5 May 2022</td>
                                    <td>
                                        <div class="sticker">400$</div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        </div>
                        <img class="col-6 col-s-6" src="/static/map.png" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>