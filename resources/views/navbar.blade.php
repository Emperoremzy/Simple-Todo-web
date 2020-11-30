
<nav class="navbar navbar-expand navbar-dark flex-column flex-md-row bd-navbar">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample10" aria-controls="navbarsExample10" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse left-content-md-center" id="navbarsExample10">
          <ul class="navbar-nav">
            <li class="nav-item {{Request::is('/') ? 'active' : ''}}">
              <a class="nav-link" href="/">Todo <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item {{Request::is('todo/create') ? 'active' : ''}}">
              <a class="nav-link" href="todo/create">Create</a>
            </li>
             
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
              <div class="dropdown-menu" aria-labelledby="dropdown10">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    