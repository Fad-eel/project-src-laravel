@extends('layouts.app')

@section('content')

<div class="bg-dark container">

            <nav>
                <ul class="pagination justify-content-center m-5">
                    <li class="page-item disabled"><a class="page-link" href="#">&laquo;</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
            </nav>
        
             <ul class="list-group-flush col-md-3 mr-auto">
                    <li class="list-group-item list-group-item-action active">Niveau 1</li>
                    <li class="list-group-item list-group-item-action">Niveau 2</li>
                    <li class="list-group-item list-group-item-action disabled">Niveau 3</li>
                    <li class="list-group-item list-group-item-action">Niveau 4</li>
                    <li class="list-group-item list-group-item-action">Niveau 5</li>
            </ul>
        
            <ul class="list-group list-group-flush col-md-3 offset-9">
                    <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"><a href="#">Niveau 1</a><span class="badge badge-danger badge-pill">1</span></li>
                    <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"><a href="#">Niveau 2</a><span class="badge badge-danger badge-pill">7</span></li>
                    <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"><a href="#">Niveau 3</a><span class="badge badge-danger badge-pill">18</span></li>
                    <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"><a href="#">Niveau 4</a><span class="badge badge-danger badge-pill">9</span></li>
                    <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"><a href="#">Niveau 5</a><span class="badge badge-danger badge-pill">20</span></li>
            </ul>
        
            <div class="m-5">
                <a href="#" class="btn btn-outline-success btn-lg">Bouton 1</a>
                <button type="button" class="btn btn-warning btn-sm">Bouton 2</button>
                <input type="button" class="btn btn-danger" value="Bouton 3"/>
            </div>
        
            <div class="btn-group m-5">
                <a href="#" class="btn btn-outline-success">Bouton 1</a>
                <button type="button" class="btn btn-warning">Bouton 2</button>
                <input type="button" class="btn btn-danger" value="Bouton 3"/>
            </div>
        
        <section class="row">
        
            <div class="col-12 col-md-6 col-lg-3">
                <section class="card">
                <img src="images/gaming.jpg" alt="gaming" class="card-img-top"/>
                <div class="card-body">
                    <h1 class="h3 card-title">Lorem ipsum sit</h1>
                    <p class="card-text">Lorem ipsum sit dolor amet, consectetur adipisicing elit. Assumenda incidunt numquam ut, ducimus autem quam ?</p>
                    <a href="#" class="btn btn-primary">Lire la suite</a>
                </div>
                </section>
            </div>
        
            <div class="col-12 col-md-6 col-lg-3">
                <section class="card">
                <img src="images/gaming.jpg" alt="gaming" class="card-img-top"/>
                <div class="card-body">
                    <h1 class="h3 card-title">Lorem ipsum sit</h1>
                    <p class="card-text">Lorem ipsum sit dolor amet, consectetur adipisicing elit. Assumenda incidunt numquam ut, ducimus autem quam ?</p>
                    <a href="#" class="btn btn-danger">Lire la suite</a>
                </div>
                </section>
            </div>
        
            <div class="col-12 col-md-6 col-lg-3">
                <section class="card">
                <img src="images/gaming.jpg" alt="gaming" class="card-img-top"/>
                <div class="card-body">
                    <h1 class="h3 card-title">Lorem ipsum sit</h1>
                    <p class="card-text">Lorem ipsum sit dolor amet, consectetur adipisicing elit. Assumenda incidunt numquam ut, ducimus autem quam ?</p>
                    <a href="#" class="btn btn-danger">Lire la suite</a>
                </div>
                </section>
            </div>
        
            <div class="col-12 col-md-6 col-lg-3">
                <section class="card">
                <img src="images/gaming.jpg" alt="gaming" class="card-img-top"/>
                <div class="card-body">
                    <h1 class="h3 card-title">Lorem ipsum sit</h1>
                    <p class="card-text">Lorem ipsum sit dolor amet, consectetur adipisicing elit. Assumenda incidunt numquam ut, ducimus autem quam ?</p>
                    <a href="#" class="btn btn-danger">Lire la suite</a>
                </div>
                </section>
            </div>
            
            </section>
        
            <div class="jumbotron col-3  offset-8 mt-5">
                <h1>Lorem ipsum sit</h1>
                <p>Lorem ipsum sit dolor amet, consectetur adipisicing elit. Assumenda incidunt numquam ut</p>
                <a href="#" class="btn btn-primary">Lire la suite</a>
            </div>

</div>

@endsection()
            