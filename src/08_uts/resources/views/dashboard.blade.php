@extends('layouts/master')

@section('title','COMPANY')

@section('header')

    <!-- Page Header -->
    <div class="container-fluid">
        <div class="tm-site-header">
            <div class="row">
                <div class="col-12 tm-site-header-col">
                    <div class="tm-site-header-left">
                        <i class="far fa-2x fa-eye tm-site-icon"></i>
                        <h1 class="tm-site-name">New Vision</h1>
                        
                    </div>
                    <div class="tm-site-header-right tm-menu-container-outer">
@section('container')
                        <!--Navbar-->
                        <nav class="navbar navbar-expand-lg">
                        
                          <!-- Collapse button -->
                          <button class="navbar-toggler toggler-example" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1"
                            aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"><span class="dark-blue-text"><i
                                class="fas fa-bars fa-1x"></i></span></button>
                        
                          <!-- Collapsible content -->
                          <div class="collapse navbar-collapse tm-nav" id="navbarSupportedContent1">
                        
                            <!-- Links -->
                            <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link tm-nav-link" href="dashboard">Dashboard <span class="sr-only">(current)</span></a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link tm-nav-link" href="home">Home <span class="sr-only">(current)</span></a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link tm-nav-link" href="product">Product</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link tm-nav-link" href="program">Program</a>
                              </li>
                              <li class="nav-item ">
                                <a class="nav-link tm-nav-link" href="about-us">About us</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link tm-nav-link" href="contact">contact</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link tm-nav-link" href="news">News</a>
                              </li>
                            </ul>
                            <!-- Links -->
                        
                          </div>
                          <!-- Collapsible content -->
                        
                        </nav>
                        <!--/.Navbar-->
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    <h3>Dashboard</h3>
                </div>
                <div class="card-body">
                
                    <h1 align="center">Ini Adalah Identitas-mu</h1> 
                    <br>
                    <table class="table table-responsive"> 
                    
                    <tr><th>Name</th><th>:</th><td>{{ Auth::user()->name }}</td></tr>
                    <tr><th>Email</th><th>:</th><td>{{ Auth::user()->email }}</td></tr>
                    <tr><th>Created At</th><th>:</th><td>{{ Auth::user()->created_at }}</td></tr>
                    </table>
                    
                    <br>
                    <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
                </div>
            </div>
        </div>
    </div>

    
