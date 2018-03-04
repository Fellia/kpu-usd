<!doctype html>
<html lang="en">
    @include('templates.partials._header')
    <body>
        @include('templates.partials._nav-section')
        <!--        <div class="section">
                    <div class="container tim-container">
                        <div class="row">
                            <div class="col-md-12 ml-auto mr-auto">
                                <h4 class="title">Daftar Kandidat</h4>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th>Name</th>
                                                <th>Job Position</th>
                                                <th>Since</th>
                                                <th class="text-right">Salary</th>
                                                <th class="text-right">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">1</td>
                                                <td>Andrew Mike</td>
                                                <td>Develop</td>
                                                <td>2013</td>
                                                <td class="text-right">&euro; 99,225</td>
                                                <td class="td-actions text-right">
                                                    <button type="button" data-toggle="tooltip" data-placement="top" title data-original-title="View Profile" class="btn btn-info btn-link btn-sm">
                                                        <i class="fa fa-user"></i>
                                                    </button>
                                                    <button type="button" data-toggle="tooltip" data-placement="top" title data-original-title="Edit Profile" class="btn btn-success btn-link btn-sm">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <button type="button" data-toggle="tooltip" data-placement="top" title data-original-title="Remove" class="btn btn-danger btn-link btn-sm">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
        
                                                <td class="text-center">2</td>
                                                <td>John Doe</td>
                                                <td>Design</td>
                                                <td>2012</td>
                                                <td class="text-right">&euro; 89,241</td>
                                                <td class="td-actions text-right">
                                                    <button type="button" data-toggle="tooltip" data-placement="top" title data-original-title="View Profile" class="btn btn-info btn-link btn-sm">
                                                        <i class="fa fa-user"></i>
                                                    </button>
                                                    <button type="button" data-toggle="tooltip" data-placement="top" title data-original-title="Edit Profile" class="btn btn-success btn-link btn-sm">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <button type="button" data-toggle="tooltip" data-placement="top" title data-original-title="Remove" class="btn btn-danger btn-link btn-sm">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">3</td>
                                                <td>Alex Mike</td>
                                                <td>Design</td>
                                                <td>2010</td>
                                                <td class="text-right">&euro; 92,144</td>
                                                <td class="td-actions text-right">
                                                    <button type="button" data-toggle="tooltip" data-placement="top" title data-original-title="View Profile" class="btn btn-info btn-link btn-sm">
                                                        <i class="fa fa-user"></i>
                                                    </button>
                                                    <button type="button" data-toggle="tooltip" data-placement="top" title data-original-title="Edit Profile" class="btn btn-success btn-link btn-sm">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <button type="button" data-toggle="tooltip" data-placement="top" title data-original-title="Remove" class="btn btn-danger btn-link btn-sm">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">4</td>
                                                <td>Mike Monday</td>
                                                <td>Marketing</td>
                                                <td>2013</td>
                                                <td class="text-right">&euro; 49,990</td>
                                                <td class="td-actions text-right">
                                                    <button type="button" data-toggle="tooltip" data-placement="top" title data-original-title="View Profile" class="btn btn-info btn-link btn-sm">
                                                        <i class="fa fa-user"></i>
                                                    </button>
                                                    <button type="button" data-toggle="tooltip" data-placement="top" title data-original-title="Edit Profile" class="btn btn-success btn-link btn-sm">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <button type="button" data-toggle="tooltip" data-placement="top" title data-original-title="Remove" class="btn btn-danger btn-link btn-sm">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">5</td>
                                                <td>Paul Dickens</td>
                                                <td>Communication</td>
                                                <td>2016</td>
                                                <td class="text-right">&euro; 69,201</td>
                                                <td class="td-actions text-right">
                                                    <button type="button" data-toggle="tooltip" data-placement="top" title data-original-title="View Profile" class="btn btn-info btn-link btn-sm">
                                                        <i class="fa fa-user"></i>
                                                    </button>
                                                    <button type="button" data-toggle="tooltip" data-placement="top" title data-original-title="Edit Profile" class="btn btn-success btn-link btn-sm">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <button type="button" data-toggle="tooltip" data-placement="top" title data-original-title="Remove" class="btn btn-danger btn-link btn-sm">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->
        <div class="section section-white">
            <div class="container tim-container">
                <div class="row">
                    <div class="col-md-3">
                        <h4 class="title">Filter</h4>
                        <div class="card card-refine">
                            <div class="panel-group" id="accordion" aria-multiselectable="true" aria-expanded="true">
                                <div class="card-header card-collapse" role="tab" id="priceRanger">
                                    <h5 class="mb-0 panel-title">
                                        <a class="" data-toggle="collapse" data-parent="#accordion" href="#priceRange" aria-expanded="true" aria-controls="collapseOne">
                                            Price Range
                                            <i class="nc-icon nc-minimal-down"></i>
                                        </a>
                                    </h5>
                                </div>
                                <div id="priceRange" class="collapse show" role="tabpanel" aria-labelledby="headingOne" aria-expanded="true">
                                    <div class="card-body">
                                        <div id="sliderDouble" class="slider slider-info noUi-target noUi-ltr noUi-horizontal noUi-background"></div>
                                    </div>
                                </div>
                                <div class="card-header card-collapse" role="tab" id="clothingGear">
                                    <h5 class="mb-0 panel-title">
                                        <a class="" data-toggle="collapse" data-parent="#accordion" href="#clothing" aria-expanded="true" aria-controls="collapseSecond">
                                            Clothing
                                            <i class="nc-icon nc-minimal-down"></i>
                                        </a>
                                    </h5>
                                </div>
                                <div id="clothing" class="collapse" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="card-body">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="" checked>
                                                Blazers
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                Casual Shirts
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                Formal Shirts
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                Jeans
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                Polos
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                Pyjamas
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                Shorts
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                Trousers
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-header card-collapse" role="tab" id="designer">
                                    <h5 class="mb-0 panel-title">
                                        <a class="" data-toggle="collapse" data-parent="#accordion" href="#refineDesigner" aria-expanded="true" aria-controls="collapseThree">
                                            Designer
                                            <i class="nc-icon nc-minimal-down"></i>
                                        </a>
                                    </h5>
                                </div>
                                <div id="refineDesigner" class="collapse" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="card-body">

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="" checked>
                                                All
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                Acne Studio
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                Alex Mill
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                Alexander McQueen
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                Alfred Dunhill
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                AMI
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                Berena
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                Berluti
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                Burberry Prorsum
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                Berluti
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                Calvin Klein
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                Club Monaco
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                Dolce & Gabbana
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                Gucci
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                Kolor
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                Lanvin
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                Loro Piana
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                Massimo Alba
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-header card-collapse" role="tab" id="color">
                                    <h5 class="mb-0 panel-title">
                                        <a class="" data-toggle="collapse" data-parent="#accordion" href="#colorMaker" aria-expanded="true" aria-controls="collapseTree">
                                            Colour
                                            <i class="nc-icon nc-minimal-down"></i>
                                        </a>
                                    </h5>
                                </div>
                                <div id="colorMaker" class="collapse" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="card-body">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="" checked>
                                                All
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                Blue
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                Brown
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                Gray
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                Green
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                Neutrals
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                Purple
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end card -->
                    </div>
                    <div class="col-md-9">
                        <form class="form-inline">
                            <h4 class="title col-md-7">Daftar Kandidat</h4>
                            <input class="form-control mr-sm-2" type="text" placeholder="Search">
                            <button type="submit" class="btn btn-primary btn-just-icon btn-round"><i class="nc-icon nc-zoom-split" aria-hidden="true"></i></button>
                        </form>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Name</th>
                                        <th>Job Position</th>
                                        <th>Since</th>
                                        <th class="text-right">Salary</th>
                                        <th class="text-right">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>Andrew Mike</td>
                                        <td>Develop</td>
                                        <td>2013</td>
                                        <td class="text-right">&euro; 99,225</td>
                                        <td class="td-actions text-right">
                                            <button type="button" data-toggle="tooltip" data-placement="top" title data-original-title="View Profile" class="btn btn-info btn-link btn-sm">
                                                <i class="fa fa-user"></i>
                                            </button>
                                            <button type="button" data-toggle="tooltip" data-placement="top" title data-original-title="Edit Profile" class="btn btn-success btn-link btn-sm">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <button type="button" data-toggle="tooltip" data-placement="top" title data-original-title="Remove" class="btn btn-danger btn-link btn-sm">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>

                                        <td class="text-center">2</td>
                                        <td>John Doe</td>
                                        <td>Design</td>
                                        <td>2012</td>
                                        <td class="text-right">&euro; 89,241</td>
                                        <td class="td-actions text-right">
                                            <button type="button" data-toggle="tooltip" data-placement="top" title data-original-title="View Profile" class="btn btn-info btn-link btn-sm">
                                                <i class="fa fa-user"></i>
                                            </button>
                                            <button type="button" data-toggle="tooltip" data-placement="top" title data-original-title="Edit Profile" class="btn btn-success btn-link btn-sm">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <button type="button" data-toggle="tooltip" data-placement="top" title data-original-title="Remove" class="btn btn-danger btn-link btn-sm">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">3</td>
                                        <td>Alex Mike</td>
                                        <td>Design</td>
                                        <td>2010</td>
                                        <td class="text-right">&euro; 92,144</td>
                                        <td class="td-actions text-right">
                                            <button type="button" data-toggle="tooltip" data-placement="top" title data-original-title="View Profile" class="btn btn-info btn-link btn-sm">
                                                <i class="fa fa-user"></i>
                                            </button>
                                            <button type="button" data-toggle="tooltip" data-placement="top" title data-original-title="Edit Profile" class="btn btn-success btn-link btn-sm">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <button type="button" data-toggle="tooltip" data-placement="top" title data-original-title="Remove" class="btn btn-danger btn-link btn-sm">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">4</td>
                                        <td>Mike Monday</td>
                                        <td>Marketing</td>
                                        <td>2013</td>
                                        <td class="text-right">&euro; 49,990</td>
                                        <td class="td-actions text-right">
                                            <button type="button" data-toggle="tooltip" data-placement="top" title data-original-title="View Profile" class="btn btn-info btn-link btn-sm">
                                                <i class="fa fa-user"></i>
                                            </button>
                                            <button type="button" data-toggle="tooltip" data-placement="top" title data-original-title="Edit Profile" class="btn btn-success btn-link btn-sm">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <button type="button" data-toggle="tooltip" data-placement="top" title data-original-title="Remove" class="btn btn-danger btn-link btn-sm">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">5</td>
                                        <td>Paul Dickens</td>
                                        <td>Communication</td>
                                        <td>2016</td>
                                        <td class="text-right">&euro; 69,201</td>
                                        <td class="td-actions text-right">
                                            <button type="button" data-toggle="tooltip" data-placement="top" title data-original-title="View Profile" class="btn btn-info btn-link btn-sm">
                                                <i class="fa fa-user"></i>
                                            </button>
                                            <button type="button" data-toggle="tooltip" data-placement="top" title data-original-title="Edit Profile" class="btn btn-success btn-link btn-sm">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <button type="button" data-toggle="tooltip" data-placement="top" title data-original-title="Remove" class="btn btn-danger btn-link btn-sm">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('templates.partials._footer')
    </body>
    @include('templates.partials._script')
</html>
