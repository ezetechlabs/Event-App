 <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
      <a class="navbar-brand" href="{{ route('home') }}">Evenbrote</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
         
        </ul>
        
      </div>
    <ul class="navbar-nav mr-auto navbar-right">
      <form class="form-inline my-2 my-lg-0">
          <a href="{{ route('events.create') }}" class="btn btn-outline-primary my-2 my-sm-0"><i class="fa fa-plus"></i> Creer un Evenement</a>
        </form>
    </ul>
    </nav>