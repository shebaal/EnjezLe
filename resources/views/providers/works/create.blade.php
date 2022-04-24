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

                    <div class="col-md-12 border-right" style=" text-align: right; padding: 16px; direction: rtl; color: #023047;">
                        <h3 style="    direction: rtl;text-align: right;padding: 16px; direction: rtl; color: #023047;" class="card-title"> اضافة عمل </h3>
                        @if ($errors->any())
          @foreach ($errors->all() as $err)
          <p class="alert alert-danger">{{ $err }}</p>
              
          @endforeach
              
          @endif
                        <form class="card-body" action="/works" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row ">
                                <div class="mb-3 col-md-6">
                                    <label for="exampleFormControlInput1" class=" form-label">العنوان </label>
                                    <input type="text" class="form-control" name="title" id="exampleFormControlInput1" placeholder="اكتب عنوان العمل">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="exampleFormControlInput1" class=" form-label">العنوان </label>
                                    <input type="date" class="form-control" name="date_end" id="exampleFormControlInput1" placeholder="اكتب عنوان العمل">
                                </div>
                               
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="multicol-email">الصورة</label>
                                <div class="input-group input-group-merge">
                                    <input name="image" type="file" class="form-control" aria-describedby="multicol-email2" />

                                </div>

                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label"> الوصف</label>
                                <textarea class="form-control" name="describe" id="exampleFormControlTextarea1" placeholder="اكتب وصف عن العمل" rows="3"></textarea>
                            </div>
                           
                            <div class="col-12 p-3" style="display: flex;  justify-content: flex-end;">
                                <a href="/works" style="width: 90px; margin-left: 4px;" class="btn btn-outline-danger">الغاء</a>
                                <button type="submit " style="width: 90px;" class="btn btn-primary">اضافة</button>


                            </div>
                           
                    </div>

                    </form>
                </div>


            </div>


        </div>
    </div>

    </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

</body>

</html>