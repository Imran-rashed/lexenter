@extends("layouts.app")

@section("title", "Lexenter")

@section("content")

    @include("partials.sidebar")
    @include("partials.header")
    <main class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                    	<div class="page-title">
                    		<h1>add new article</h1>
                    	</div>
                        <div class="main-content create-article">
                            <div class="english-article">
                                <h5>English</h5>
                                <div class="first-row">
                                    <input type="text" value="100000019" readonly="">
                                    <input type="text" placeholder="Article title">
                                    <input type="text" placeholder="Source">
                                </div>
                                <textarea id="eng-article-area">  
                                </textarea>
                                <input type="text" placeholder="Note" class="note">
                            </div>
                            <div class="chinese-article">
                                <h5>China</h5>
                                <div class="first-row">
                                    <input type="text" value="100000019" readonly="">
                                    <input type="text" placeholder="Article title">
                                    <input type="text" placeholder="Source">
                                </div>
                                <textarea id="chi-article-area"> 
                                </textarea>
                                <input type="text" placeholder="Note" class="note">
                            </div>
                            <hr>
                            <div style="width:100%; text-align: center;">
                                <button type="submit">submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
      <!-- page-content" -->
      
@endsection