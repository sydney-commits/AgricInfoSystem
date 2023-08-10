@extends('client.base')

@section('content')
    <div class="my-account-box-main">

        <div class="container pt-2">
            <div class="my-account-page">

                <div class="row pt-3 pb-3 pl-1 pl-1">
                    <div class="col-md-12">
                        <form action="{{ route('create-post') }}" method="POST">

                            @csrf
                            <div class="input-group mb-3">
                                <input type="hidden" value="{{ Auth::user()->name }}" name="username">
                                <input type="text" class="form-control" placeholder="A s k  Q u e s t i o n"
                                    aria-label="Question" name="post" aria-describedby="button-addon2"
                                    style="height: 50px">
                                <button class="btn btn-outline-secondary hvr-hover" type="submit" id="button-addon2"
                                    style="color: white; background-color:#000000"><b>Submit</b></button>
                            </div>

                        </form>
                    </div>

                    <div class="col-md-9">
                        <div class="card pt-2 pb-3">
                            <div class="card-header text-center">
                                <h3>Forum Questions</h3>
                            </div>



                            <div class="accordion accordion-flush" id="accordionFlushExample">

                                @foreach ($forum_posts as $post)
                                    <div class="accordion-item">
                                        <h3 class="accordion-header" id="{{ $post->id }}">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#flush-collapseOne{{ $post->id }}" aria-expanded="false"
                                                aria-controls="flush-collapseOne">
                                                <b class="pr-2">Qn. </b> {{ $post->post }}
                                            </button>
                                        </h3>

                                        <div class="title">
                                            <p style="padding-left:20px;font-size:14px">User :{{ $post->username }}
                                                <span class="font-weight-light"
                                                    style="padding-left:30px;padding-right:30px;font-size:14px">Posted:
                                                    {{ date('d-m-Y', strtotime($post->created_at)) }}</span>

                                                {{-- <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                    style="background-color: #000000" data-bs-target="#staticBackdrop">
                                                    + Reply To Question 
                                                </button> --}}


                                            </p>

                                            <!-- Button trigger modal -->


                                            {{-- <!-- Modal -->
                                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                                data-bs-keyboard="false" tabindex="-1"
                                                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="staticBackdropLabel">Modal title
                                                            </h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">

                                                            <form action="{{ route('create-comment') }}" method="POST">

                                                                @csrf
                                                                <div class="input-group mb-3">
                                                                    <input type="text" value="{{ $post->id }}"
                                                                        name="username">
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Enter Question" aria-label="Question"
                                                                        name="comment" aria-describedby="button-addon2"
                                                                        style="height: 30px">
                                                                    <button class="btn btn-outline-secondary hvr-hover"
                                                                        type="submit" id="button-addon2"
                                                                        style="color: white"><b>Submit</b></button>
                                                                </div>

                                                            </form>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="button"
                                                                class="btn btn-primary">Understood</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> --}}

                                            {{-- <span class="font-weight-light" style="text-align:center; padding-left:20px ;font-size:11px">User :{{$post->username}}</span> --}}

                                            {{-- <span class="font-weight-light" style="float:right; padding-right:20px;font-size:11px">Posted: {{ date('d-m-Y', strtotime($post->created_at)) }}</span> --}}
                                        </div>

                                        <div id="flush-collapseOne{{ $post->id }}" class="accordion-collapse collapse"
                                            aria-labelledby="{{ $post->id }}" data-bs-parent="#accordionFlushExample">
                                          
                                         
                                           
                                                  <div class="container">


                                            <form action="{{ route('create-comment') }}" method="POST">

                                              @csrf
                                              <div class="input-group mb-3">
                                                  <input type="hidden" value="{{ $post->id }}"
                                                      name="cid">
                                <input type="hidden" value="{{ Auth::user()->name }}" name="username">

                                                  <input type="text" class="form-control"
                                                      placeholder="R e p l y  t o  Q u e s t i o n" aria-label="Question"
                                                      name="comment" aria-describedby="button-addon2"
                                                 >
                                                  <button class="btn btn-outline-secondary hvr-hover"
                                                      type="submit" id="button-addon2"
                                                      style="color: white; background-color:#000000"><b>+ Submit Reply</b></button>
                                              </div>

                                          </form>
                                                

                                        </div>

                                          <h5 class="text-center text-primary">Replies</h5>
                                            <ol>
                                            @foreach ($post->comments as $item)
                                          

                                          <div class="card">
                                            <li class="accordion-body  pl-3 m-0"><b>Ans.</b> {{ $item->comment }} - 
                                             <span class="font-weight-light" style="font-size:14"
                                             >{{ date('d-m-Y', strtotime($item->created_at)) }}</span> 
                                            </li>
                                          </div>
                                                
                                             {{-- <hr color="grey" >  --}}
                                         
                                            @endforeach
                                          </ol>

                                        </div>
                                    </div>
                                @endforeach




                            </div>

                        </div>

                    </div>

                    <div class="col-md-3">

                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
@endsection
