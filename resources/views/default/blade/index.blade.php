@extends('default.layout.layout')

@section('title')
    KingsVille Index
@stop

@section('content')
 <div class="row">
               <h5><i class="mdi-action-account-circle"></i> Users</h5>
               <div class="input-field col s4 search-user--container">
                  <input id="search-user" type="text" class="validate" name="search-user">
                  <label for="last_name">Search</label>
                </div>
                
                <div class="input-field col s4 search-user--submit">
                    <button class="btn waves-effect waves-light blue darken-1" type="submit" name="action">Submit
    <i class="mdi-content-send right"></i>
  </button>
                </div>
                
                <div class="col s4 user--create-new right-align">
                    <a href="{{URL::route('HomeOwner.create')}}" class="btn waves-effect waves-light blue darken-1" type="submit" name="action">Create New User
    <i class="mdi-content-add left"></i>
  </a>
                </div>
        </div>
        
        <div class="row">
            <table class="striped">
                <thead>
                    <tr>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>User Type</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Lim</td>
                        <td>Patrick James</td>
                        <td>Guzman</td>
                        <td>166 A. Del Rosario St. Marulas, Valenzuela City</td>
                        <td>0936 9876 970</td>
                        <td>patrickjames_lim@yahoo.com</td>
                        <td>Administrator</td>
                    </tr>
                    <tr>
                        <td>Peralta</td>
                        <td>John Kevin</td>
                        <td>Lopez</td>
                        <td>123 Dela Fuente St. Sampaloc, Manila</td>
                        <td>0928 923 1111</td>
                        <td>jperalta@yahoo.com</td>
                        <td>Administrator</td>
                    </tr>
                    <tr>
                        <td>Turingan</td>
                        <td>Joshua</td>
                        <td>Baluyot</td>
                        <td>445 Bato-bato St. Manggahan, Batasan Hills, Quezon City</td>
                        <td>0933 8239 094</td>
                        <td>jturingan@gmail.com</td>
                        <td>Auditor</td>
                    </tr>
                    <tr>
                        <td>Lim</td>
                        <td>Patrick James</td>
                        <td>Guzman</td>
                        <td>166 A. Del Rosario St. Marulas, Valenzuela City</td>
                        <td>0936 9876 970</td>
                        <td>patrickjames_lim@yahoo.com</td>
                        <td>Administrator</td>
                    </tr>
                    <tr>
                        <td>Peralta</td>
                        <td>John Kevin</td>
                        <td>Lopez</td>
                        <td>123 Dela Fuente St. Sampaloc, Manila</td>
                        <td>0928 923 1111</td>
                        <td>jperalta@yahoo.com</td>
                        <td>Administrator</td>
                    </tr>
                    <tr>
                        <td>Turingan</td>
                        <td>Joshua</td>
                        <td>Baluyot</td>
                        <td>445 Bato-bato St. Manggahan, Batasan Hills, Quezon City</td>
                        <td>0933 8239 094</td>
                        <td>jturingan@gmail.com</td>
                        <td>Auditor</td>
                    </tr>
                    <tr>
                        <td>Lim</td>
                        <td>Patrick James</td>
                        <td>Guzman</td>
                        <td>166 A. Del Rosario St. Marulas, Valenzuela City</td>
                        <td>0936 9876 970</td>
                        <td>patrickjames_lim@yahoo.com</td>
                        <td>Administrator</td>
                    </tr>
                    <tr>
                        <td>Peralta</td>
                        <td>John Kevin</td>
                        <td>Lopez</td>
                        <td>123 Dela Fuente St. Sampaloc, Manila</td>
                        <td>0928 923 1111</td>
                        <td>jperalta@yahoo.com</td>
                        <td>Administrator</td>
                    </tr>
                    <tr>
                        <td>Turingan</td>
                        <td>Joshua</td>
                        <td>Baluyot</td>
                        <td>445 Bato-bato St. Manggahan, Batasan Hills, Quezon City</td>
                        <td>0933 8239 094</td>
                        <td>jturingan@gmail.com</td>
                        <td>Auditor</td>
                    </tr>
                    
                </tbody>
            </table>
        </div>

@stop