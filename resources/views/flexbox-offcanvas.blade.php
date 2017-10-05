<html>
<head>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat:400,700');
        @import url('https://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.css');

        * {
          margin: 0;
          padding: 0;
        }

        *, *:before, *:after {
          box-sizing: border-box;
        }

        html, body {
          height: 100%;
        }

        body {
          font: 12px/1 'Montserrat', sans-serif;
          color: #333;
          background: #333;
          overflow-x: hidden;
        }

        .wrapper {
          display: flex;
          min-height: 100%;
        }

        .sidebar {
          position: absolute;
          width: 220px;
        }

        .content {
          flex: 1;
          padding: 30px;
          background: #eee;
          box-shadow: 0 0 5px rgba(0,0,0,1);
          transform: translate3d(0,0,0);
          transition: transform .3s;
        }

        .content.isOpen {
          transform: translate3d(220px,0,0);
        }

        .button {
          cursor: pointer;
        }

        .button:before {
          content: '\f0c9';
          font: 42px fontawesome;
        }

        /* Demo Navigation */

        .title {
          font-size: 16px;
          line-height: 50px;
          text-align: center;
          text-transform: uppercase;
          letter-spacing: 7px;
          color: #eee;
          border-bottom: 1px solid #222;
          background: #2a2a2a;
        }

        .nav li a {
          position: relative;
          display: block;
          padding: 15px 15px 15px 50px;
          font-size: 12px;
          color: #eee;
          border-bottom: 1px solid #222;
        }

        .nav li a:before {
          font: 14px fontawesome;
          position: absolute;
          top: 14px;
          left: 20px;
        }

        .nav li:nth-child(1) a:before { content: '\f00a'; }
        .nav li:nth-child(2) a:before { content: '\f012'; }
        .nav li:nth-child(3) a:before { content: '\f0e8'; }
        .nav li:nth-child(4) a:before { content: '\f0c3'; }
        .nav li:nth-child(5) a:before { content: '\f022'; }
        .nav li:nth-child(6) a:before { content: '\f115'; }
        .nav li:nth-child(7) a:before { content: '\f085'; }
        .nav li:nth-child(8) a:before { content: '\f023'; left: 23px; }

        .nav li a:hover {
          background: #444;
        }

        .nav li a.active {
          box-shadow: inset 5px 0 0 #5b5, inset 6px 0 0 #222;
          background: #444;
        }

        /* Demo Description */

        h1 {
          margin: 25px 0 15px;
          font-size: 28px;
          font-weight: 400;
        }

        h2 {
          font-size: 18px;
          font-weight: 400;
          color: #999;
        }
    </style>
</head>
<body>
    <div class='wrapper'>
        <div class='sidebar'>
            <div class='title'>
                Sidebar
            </div>
            <ul class='nav'>
                <li>
                    <a>Dashboard</a>
                </li>
                <li>
                    <a>Statistics</a>
                </li>
                <li>
                    <a class='active'>Milestones</a>
                </li>
                <li>
                    <a>Experiments</a>
                </li>
                <li>
                    <a>Previews</a>
                </li>
                <li>
                    <a>Assets</a>
                </li>
                <li>
                    <a>Settings</a>
                </li>
                <li>
                    <a>Logout</a>
                </li>
            </ul>
        </div>
        <div class='content isOpen'>
            <a class='button'></a>
            <h1>Flexbox Off Canvas Menu</h1>
            <h2>Lightweight, simple, easy to use</h2>
        </div>
    </div>
    <script src="/js/app.js"></script>
    <script>
        $(document).ready(function() {
            $('.button').on('click', function() {
                $('.content').toggleClass('isOpen');
            });
        });
    </script>
</body>
</html>


