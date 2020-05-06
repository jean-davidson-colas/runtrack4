<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
  <title>Material 2</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js">
  </script> 
</head>
<body>
  <header>
    <nav>
      <div class="nav-wrapper teal" >
        <a href="" class="brand-logo">Logo</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="">sass</a></li>
          <li><a href="">sass <span class="new badge">4</span></a></li>
          <li><a href="">sass</a></li>
        </ul>
      </div>
    </nav>
  </header>
  
  
  <br/>
  <div class="row">
    <div class="input-field col s1">
      <select>
        
        <option value="1">Mme</option>
        <option value="2">Mr</option>
        
      </select>
      <label>Civilité</label>
    </div>
    <div class="row">
      <form class="col s11">
        <div class="row">
          <div class="input-field col s6">
            <input placeholder="Placeholder" id="first_name" type="text" class="validate">
            <label for="first_name">First Name</label>
          </div>
          <div class="input-field col s6">
            <input id="last_name" type="text" class="validate">
            <label for="last_name">Last Name</label>
          </div>
        </div>
      
        <div class="row">
          <div class="input-field col s12">
            <input id="password" type="password" class="validate">
            <label for="password">Password</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="email" type="email" class="validate">
            <label for="email">Email</label>
          </div>
        </div>
        <div class="row">
          <div class="col s12">
            This is an inline input field:
            <div class="input-field inline">
              <input id="email_inline" type="email" class="validate">
              <label for="email_inline">Email</label>
              <span class="helper-text" data-error="wrong" data-success="right">Helper text</span>
            </div>
          </div>
        </div>
           <h1>Passions</h1>
          <p>
            <label>
              <input type="checkbox" />
              <span>informatique</span>
            </label>
          </p>
          <p>
            <label>
              <input type="checkbox" />
              <span>voyages</span>
            </label>
          </p>
          <p>
            <label>
              <input type="checkbox" />
              <span>sport</span>
            </label>
          </p>
          <p>
            <label>
              <input type="checkbox" />
              <span>lecture</span>
            </label>
          </p>
          <div class="row">
            
              <div class="row">
                <div class="input-field col s6">
                  <input id="input_text" type="text" data-length="10">
                  <label for="input_text">Autres</label>
                </div>
              </div>
              
            
          </div>
          
  
        <button class="btn waves-effect waves-light" type="submit" name="action">Submit
          <i class="material-icons right">send</i>
        </button>
      </form>
    </div>
  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>

