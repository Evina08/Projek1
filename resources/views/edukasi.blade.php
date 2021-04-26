@extends('layouts.layout')
 @section('content')
<div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Edukasi</h2>
                        </div>
                        <div class="col-12">
                            <a href="">Home</a>
                            <a href="">Edukasi</a>
                        </div>
                    </div>
                </div>
            </div>
 <div class="portfolio">
                <div class="container">
                    <div class="section-header">
                        
                        <h2>Artikel Mengenai Cyber Bullying</h2>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <ul id="portfolio-flters">
                                <li data-filter="*" class="filter-active">All</li>
                                <li data-filter=".completed">New</li>
                                <li data-filter=".ongoing">Trending</li>
                                <li data-filter=".upcoming">Oldest</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row portfolio-container">
                        <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item completed">
                            <div class="portfolio-wrap">
                                <figure>
                                    <img src="img/edukasi.jpg" alt="Portfolio Image">
                                    <a href="img/edukasi.jpg" class="link-preview" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a href="/artikel" class="link-details"><i class="fa fa-link"></i></a>
                                    <a class="portfolio-title" href="/artikel">Apa itu Cyberbullying?</a>
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item ongoing">
                            <div class="portfolio-wrap">
                                <figure>
                                    <img src="img/efek.jpg" alt="Portfolio Image">
                                    <a href="img/efek.jpg" class="link-preview" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a href="/artikel2" class="link-details"><i class="fa fa-link"></i></a>
                                    <a class="portfolio-title" href="/artikel2">Efek Cyber Bullying</a>
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item upcoming">
                            <div class="portfolio-wrap">
                                <figure>
                                    <img src="img/kasus.jpg" alt="Portfolio Image">
                                    <a href="img/kasus.jpg" class="link-preview" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a href="/artikel3" class="link-details"><i class="fa fa-link"></i></a>
                                    <a class="portfolio-title" href="/artikel3">Kasus Cyber Bullying</a>
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item completed">
                            <div class="portfolio-wrap">
                                <figure>
                                    <img src="img/hukum.jpg" alt="Portfolio Image">
                                    <a href="img/hukum.jpg" class="link-preview" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a href="/artikel4" class="link-details"><i class="fa fa-link"></i></a>
                                    <a class="portfolio-title" href="/artikel4">Hukum Cyberbullying?</a>
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item ongoing">
                            <div class="portfolio-wrap">
                                <figure>
                                    <img src="img/besar.jpg" alt="Portfolio Image">
                                    <a href="img/besar.jpg" class="link-preview" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a href="/artikel5" class="link-details"><i class="fa fa-link"></i></a>
                                    <a class="portfolio-title" href="/artikel5">Negara dengan Kasus Cyber Bullying Tertinggi</a>
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item upcoming">
                            <div class="portfolio-wrap">
                                <figure>
                                    <img src="img/platform.jpg" alt="Portfolio Image">
                                    <a href="img/platform.jpg" class="link-preview" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a href="/artikel6" class="link-details"><i class="fa fa-link"></i></a>
                                    <a class="portfolio-title" href="/artikel6">Platform Cyber Bullying Tertinggi</a>
                                </figure>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-12 load-more">
                            <a class="btn" href="#">Load More</a>
                        </div>
                    </div>
                </div>
            </div>
 @endsection