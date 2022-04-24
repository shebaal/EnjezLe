<!DOCTYPE html>
<html>

<head lang="ar" dir="rtl">
    <title>اعمالي</title>
    <meta charset="UTF-8">
    <meta name="keywords" content="وظائف,شركات, توظيف, عمل">
    <meta name="author" content="salman">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="http://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <style>
        body {
            margin-top: 20px;
            color: #1a202c;
            text-align: left;
            background-color: #023047;
        }

        .main-body {
            padding: 15px;
        }

        .card {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
        }

        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 0 solid rgba(0, 0, 0, .125);
            border-radius: .25rem;
        }

        .card-body {
            flex: 1 1 auto;
            min-height: 1px;
            padding: 1rem;
        }

        .gutters-sm {
            margin-right: -8px;
            margin-left: -8px;
        }

        .gutters-sm>.col,
        .gutters-sm>[class*=col-] {
            padding-right: 8px;
            padding-left: 8px;
        }

        .mb-3,
        .my-3 {
            margin-bottom: 1rem !important;
        }

        .bg-gray-300 {
            background-color: #e2e8f0;
        }

        .h-100 {
            height: 100% !important;
        }

        .shadow-none {
            box-shadow: none !important;
        }

        div.navi h4 {
            margin-bottom: 5px;
            font-size: 10px;
            color: #555;
            text-transform: uppercase;
        }

        a {
            text-decoration: none;
            color: #023047;
        }

        a:hover {
            text-decoration: none;
            color: #219EBC;
        }

        .down-arrow-btn2 {
            
            width: 159px;
            height: 33px;
            padding: -4px;
            border: solid 1px #219EBC;
            border-radius: 6px;
            -o-border-radius: 50%;
            /* background: #219EBC; */
            display: inline-block;
           
            color: #023047;
            font-size: 16px;
            line-height: 30px;
            text-align: center;
            text-decoration: none;
           
        }

        .down-arrow-btn2:hover {
            background: #023047;
            color: #ffffff;

        }
        @media (max-width: 600px){
            .down-div{
                width: 50%;
              
            
        }
        }
    </style>
</head>

<body>
    <div class="container" style="     border-radius: 6px;      background: aliceblue;
    direction: rtl;
    padding: 15px;
    margin-bottom: 100px;
    margin-top: 100px;
">
        <div class="main-body">

            <!-- Breadcrumb -->

            <!-- /Breadcrumb -->

            <div class="row gutters-sm">

                @include('providers.layout.aside')
                <div class="col-md-8">

                    <div class="row ">
                        <h3 style="    direction: rtl;
                    text-align: right;
                    padding: 16px; direction: rtl; color: #023047;" class=" col-6 card-title"> اعمالي </h3>
 <div class=" down-div col-sm-6 col-lg-6" style="  
              margin: auto;">
                        <a href="/works/create" class=" down-arrow-btn2 "> اضافة عمل </a>
                    </div></div>
                    <div class="row  row-cols-1 row-cols-md-2 g-4" style="text-align: right; direction: rtl;   ">
                    @forelse($data as $work)
                        <div class="col-sm-6 col-lg-4">
                            <div class="card  h-100">
                                <img src="{{asset('images/'.$work->image)}}" height=150px alt="">

                                <div class="card-body">
                               
                                    <h3 class="card-title" style=" color: #219EBC;">{{ $work->title }} </h3>


                                    <p class="card-text mb-auto">{{ $work->describe }} </p>
                                    <div style="width: 100%;
                                direction: ltr;">
                                        <div class="mb-1 text-muted">محمد سعيد</div>
                                    </div>
                                    <form class="list-inline m-0" action="/works/{{$work->id}}" method="POST">
                                    @csrf
                            @method('DELETE')
                                        <ul class="list-inline m-0" style="    display: flex;justify-content: flex-end;">

                                            <li class="list-inline-item">
                                                <a href="/works/{{$work->id }}/edit" style=" color: #023047;" class="btn  btn-sm rounded-0"><i class="fa fa-edit"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <button class="btn  text-danger btn-sm rounded-0" type="submit"><i class="fa fa-trash"></i></button>
                                            </li>
                                        </ul>
                                    </form>
                                </div>
                            </div>

                        </div>
                        @empty
                      <p>no data yet</p>
                      @endforelse


                    
                      
                    </div>
                </div>


            </div>
        </div>
    </div>

    </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

</body>

</html>