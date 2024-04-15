<x-app-layout>

    <x-slot name="titles">
        Currency Settings
       </x-slot>
    <x-sidebar/>


    <main>
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="mb-2">
                        <h1>Currency List</h1>
                        <div class="top-right-button-container">
                            <button type="button" class="btn btn-primary btn-lg top-right-button mr-1" data-toggle="modal"
                            data-target="#addTax"> <i class="simple-icon-plus align-middle"></i> ADD NEW</button>

                        </div>


                        <div>
                                        <!-- Modal -->
                                        <div class="modal fade" id="addTax" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Add Currency</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">



                                                                <form>

                                                                        <div class="form-group col-md-12">
                                                                            <label for="inputEmail4">Currency Name</label>
                                                                            <input type="text" class="form-control" id="inputEmail4" placeholder="Eg. V.A.T">
                                                                        </div>
                                                                        <div class="form-group col-md-12">
                                                                            <label for="inputState">Currency Type</label>
                                                                            <select id="currency" class="form-control">
                                                                                <option value="USD" selected="selected" label="US dollar">USD</option>
                                                                                <option value="EUR" label="Euro">EUR</option>
                                                                                <option value="JPY" label="Japanese yen">JPY</option>
                                                                                <option value="GBP" label="Pound sterling">GBP</option>

                                                                                <option value="AED" label="United Arab Emirates dirham">AED</option>
                                                                                <option value="AFN" label="Afghan afghani">AFN</option>
                                                                                <option value="ALL" label="Albanian lek">ALL</option>
                                                                                <option value="AMD" label="Armenian dram">AMD</option>
                                                                                <option value="ANG" label="Netherlands Antillean guilder">ANG</option>
                                                                                <option value="AOA" label="Angolan kwanza">AOA</option>
                                                                                <option value="ARS" label="Argentine peso">ARS</option>
                                                                                <option value="AUD" label="Australian dollar">AUD</option>
                                                                                <option value="AWG" label="Aruban florin">AWG</option>
                                                                                <option value="AZN" label="Azerbaijani manat">AZN</option>
                                                                                <option value="BAM" label="Bosnia and Herzegovina convertible mark">BAM</option>
                                                                                <option value="BBD" label="Barbadian dollar">BBD</option>
                                                                                <option value="BDT" label="Bangladeshi taka">BDT</option>
                                                                                <option value="BGN" label="Bulgarian lev">BGN</option>
                                                                                <option value="BHD" label="Bahraini dinar">BHD</option>
                                                                                <option value="BIF" label="Burundian franc">BIF</option>
                                                                                <option value="BMD" label="Bermudian dollar">BMD</option>
                                                                                <option value="BND" label="Brunei dollar">BND</option>
                                                                                <option value="BOB" label="Bolivian boliviano">BOB</option>
                                                                                <option value="BRL" label="Brazilian real">BRL</option>
                                                                                <option value="BSD" label="Bahamian dollar">BSD</option>
                                                                                <option value="BTN" label="Bhutanese ngultrum">BTN</option>
                                                                                <option value="BWP" label="Botswana pula">BWP</option>
                                                                                <option value="BYN" label="Belarusian ruble">BYN</option>
                                                                                <option value="BZD" label="Belize dollar">BZD</option>
                                                                                <option value="CAD" label="Canadian dollar">CAD</option>
                                                                                <option value="CDF" label="Congolese franc">CDF</option>
                                                                                <option value="CHF" label="Swiss franc">CHF</option>
                                                                                <option value="CLP" label="Chilean peso">CLP</option>
                                                                                <option value="CNY" label="Chinese yuan">CNY</option>
                                                                                <option value="COP" label="Colombian peso">COP</option>
                                                                                <option value="CRC" label="Costa Rican colón">CRC</option>
                                                                                <option value="CUC" label="Cuban convertible peso">CUC</option>
                                                                                <option value="CUP" label="Cuban peso">CUP</option>
                                                                                <option value="CVE" label="Cape Verdean escudo">CVE</option>
                                                                                <option value="CZK" label="Czech koruna">CZK</option>
                                                                                <option value="DJF" label="Djiboutian franc">DJF</option>
                                                                                <option value="DKK" label="Danish krone">DKK</option>
                                                                                <option value="DOP" label="Dominican peso">DOP</option>
                                                                                <option value="DZD" label="Algerian dinar">DZD</option>
                                                                                <option value="EGP" label="Egyptian pound">EGP</option>
                                                                                <option value="ERN" label="Eritrean nakfa">ERN</option>
                                                                                <option value="ETB" label="Ethiopian birr">ETB</option>
                                                                                <option value="EUR" label="EURO">EUR</option>
                                                                                <option value="FJD" label="Fijian dollar">FJD</option>
                                                                                <option value="FKP" label="Falkland Islands pound">FKP</option>
                                                                                <option value="GBP" label="British pound">GBP</option>
                                                                                <option value="GEL" label="Georgian lari">GEL</option>
                                                                                <option value="GGP" label="Guernsey pound">GGP</option>
                                                                                <option value="GHS" label="Ghanaian cedi">GHS</option>
                                                                                <option value="GIP" label="Gibraltar pound">GIP</option>
                                                                                <option value="GMD" label="Gambian dalasi">GMD</option>
                                                                                <option value="GNF" label="Guinean franc">GNF</option>
                                                                                <option value="GTQ" label="Guatemalan quetzal">GTQ</option>
                                                                                <option value="GYD" label="Guyanese dollar">GYD</option>
                                                                                <option value="HKD" label="Hong Kong dollar">HKD</option>
                                                                                <option value="HNL" label="Honduran lempira">HNL</option>
                                                                                <option value="HRK" label="Croatian kuna">HRK</option>
                                                                                <option value="HTG" label="Haitian gourde">HTG</option>
                                                                                <option value="HUF" label="Hungarian forint">HUF</option>
                                                                                <option value="IDR" label="Indonesian rupiah">IDR</option>
                                                                                <option value="ILS" label="Israeli new shekel">ILS</option>
                                                                                <option value="IMP" label="Manx pound">IMP</option>
                                                                                <option value="INR" label="Indian rupee">INR</option>
                                                                                <option value="IQD" label="Iraqi dinar">IQD</option>
                                                                                <option value="IRR" label="Iranian rial">IRR</option>
                                                                                <option value="ISK" label="Icelandic króna">ISK</option>
                                                                                <option value="JEP" label="Jersey pound">JEP</option>
                                                                                <option value="JMD" label="Jamaican dollar">JMD</option>
                                                                                <option value="JOD" label="Jordanian dinar">JOD</option>
                                                                                <option value="JPY" label="Japanese yen">JPY</option>
                                                                                <option value="KES" label="Kenyan shilling">KES</option>
                                                                                <option value="KGS" label="Kyrgyzstani som">KGS</option>
                                                                                <option value="KHR" label="Cambodian riel">KHR</option>
                                                                                <option value="KID" label="Kiribati dollar">KID</option>
                                                                                <option value="KMF" label="Comorian franc">KMF</option>
                                                                                <option value="KPW" label="North Korean won">KPW</option>
                                                                                <option value="KRW" label="South Korean won">KRW</option>
                                                                                <option value="KWD" label="Kuwaiti dinar">KWD</option>
                                                                                <option value="KYD" label="Cayman Islands dollar">KYD</option>
                                                                                <option value="KZT" label="Kazakhstani tenge">KZT</option>
                                                                                <option value="LAK" label="Lao kip">LAK</option>
                                                                                <option value="LBP" label="Lebanese pound">LBP</option>
                                                                                <option value="LKR" label="Sri Lankan rupee">LKR</option>
                                                                                <option value="LRD" label="Liberian dollar">LRD</option>
                                                                                <option value="LSL" label="Lesotho loti">LSL</option>
                                                                                <option value="LYD" label="Libyan dinar">LYD</option>
                                                                                <option value="MAD" label="Moroccan dirham">MAD</option>
                                                                                <option value="MDL" label="Moldovan leu">MDL</option>
                                                                                <option value="MGA" label="Malagasy ariary">MGA</option>
                                                                                <option value="MKD" label="Macedonian denar">MKD</option>
                                                                                <option value="MMK" label="Burmese kyat">MMK</option>
                                                                                <option value="MNT" label="Mongolian tögrög">MNT</option>
                                                                                <option value="MOP" label="Macanese pataca">MOP</option>
                                                                                <option value="MRU" label="Mauritanian ouguiya">MRU</option>
                                                                                <option value="MUR" label="Mauritian rupee">MUR</option>
                                                                                <option value="MVR" label="Maldivian rufiyaa">MVR</option>
                                                                                <option value="MWK" label="Malawian kwacha">MWK</option>
                                                                                <option value="MXN" label="Mexican peso">MXN</option>
                                                                                <option value="MYR" label="Malaysian ringgit">MYR</option>
                                                                                <option value="MZN" label="Mozambican metical">MZN</option>
                                                                                <option value="NAD" label="Namibian dollar">NAD</option>
                                                                                <option value="NGN" label="Nigerian naira">NGN</option>
                                                                                <option value="NIO" label="Nicaraguan córdoba">NIO</option>
                                                                                <option value="NOK" label="Norwegian krone">NOK</option>
                                                                                <option value="NPR" label="Nepalese rupee">NPR</option>
                                                                                <option value="NZD" label="New Zealand dollar">NZD</option>
                                                                                <option value="OMR" label="Omani rial">OMR</option>
                                                                                <option value="PAB" label="Panamanian balboa">PAB</option>
                                                                                <option value="PEN" label="Peruvian sol">PEN</option>
                                                                                <option value="PGK" label="Papua New Guinean kina">PGK</option>
                                                                                <option value="PHP" label="Philippine peso">PHP</option>
                                                                                <option value="PKR" label="Pakistani rupee">PKR</option>
                                                                                <option value="PLN" label="Polish złoty">PLN</option>
                                                                                <option value="PRB" label="Transnistrian ruble">PRB</option>
                                                                                <option value="PYG" label="Paraguayan guaraní">PYG</option>
                                                                                <option value="QAR" label="Qatari riyal">QAR</option>
                                                                                <option value="RON" label="Romanian leu">RON</option>
                                                                                <option value="RSD" label="Serbian dinar">RSD</option>
                                                                                <option value="RUB" label="Russian ruble">RUB</option>
                                                                                <option value="RWF" label="Rwandan franc">RWF</option>
                                                                                <option value="SAR" label="Saudi riyal">SAR</option>
                                                                                <option value="SEK" label="Swedish krona">SEK</option>
                                                                                <option value="SGD" label="Singapore dollar">SGD</option>
                                                                                <option value="SHP" label="Saint Helena pound">SHP</option>
                                                                                <option value="SLL" label="Sierra Leonean leone">SLL</option>
                                                                                <option value="SLS" label="Somaliland shilling">SLS</option>
                                                                                <option value="SOS" label="Somali shilling">SOS</option>
                                                                                <option value="SRD" label="Surinamese dollar">SRD</option>
                                                                                <option value="SSP" label="South Sudanese pound">SSP</option>
                                                                                <option value="STN" label="São Tomé and Príncipe dobra">STN</option>
                                                                                <option value="SYP" label="Syrian pound">SYP</option>
                                                                                <option value="SZL" label="Swazi lilangeni">SZL</option>
                                                                                <option value="THB" label="Thai baht">THB</option>
                                                                                <option value="TJS" label="Tajikistani somoni">TJS</option>
                                                                                <option value="TMT" label="Turkmenistan manat">TMT</option>
                                                                                <option value="TND" label="Tunisian dinar">TND</option>
                                                                                <option value="TOP" label="Tongan paʻanga">TOP</option>
                                                                                <option value="TRY" label="Turkish lira">TRY</option>
                                                                                <option value="TTD" label="Trinidad and Tobago dollar">TTD</option>
                                                                                <option value="TVD" label="Tuvaluan dollar">TVD</option>
                                                                                <option value="TWD" label="New Taiwan dollar">TWD</option>
                                                                                <option value="TZS" label="Tanzanian shilling">TZS</option>
                                                                                <option value="UAH" label="Ukrainian hryvnia">UAH</option>
                                                                                <option value="UGX" label="Ugandan shilling">UGX</option>
                                                                                <option value="USD" label="United States dollar">USD</option>
                                                                                <option value="UYU" label="Uruguayan peso">UYU</option>
                                                                                <option value="UZS" label="Uzbekistani soʻm">UZS</option>
                                                                                <option value="VES" label="Venezuelan bolívar soberano">VES</option>
                                                                                <option value="VND" label="Vietnamese đồng">VND</option>
                                                                                <option value="VUV" label="Vanuatu vatu">VUV</option>
                                                                                <option value="WST" label="Samoan tālā">WST</option>
                                                                                <option value="XAF" label="Central African CFA franc">XAF</option>
                                                                                <option value="XCD" label="Eastern Caribbean dollar">XCD</option>
                                                                                <option value="XOF" label="West African CFA franc">XOF</option>
                                                                                <option value="XPF" label="CFP franc">XPF</option>
                                                                                <option value="ZAR" label="South African rand">ZAR</option>
                                                                                <option value="ZMW" label="Zambian kwacha">ZMW</option>
                                                                                <option value="ZWB" label="Zimbabwean bonds">ZWB</option>
                                                                            </select>
                                                                        </div>


                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Add Currency</button>
                                                     </form>
                                                    </div>
                                                </div>
                                            </div>





                                            <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                                                <ol class="breadcrumb pt-0">
                                                    <li class="breadcrumb-item">
                                                        <a href="#">Home</a>
                                                    </li>
                                                    <li class="breadcrumb-item">
                                                        <a href="#">Library</a>
                                                    </li>
                                                    <li class="breadcrumb-item active" aria-current="page">Data</li>
                                                </ol>
                                            </nav>
                                        </div>

                                        <div class="mb-2">
                                            <a class="btn pt-0 pl-0 d-inline-block d-md-none" data-toggle="collapse" href="#displayOptions"
                                                role="button" aria-expanded="true" aria-controls="displayOptions">
                                                Display Options
                                                <i class="simple-icon-arrow-down align-middle"></i>
                                            </a>
                                            <div class="collapse dont-collapse-sm" id="displayOptions">


                                                <div class="d-block d-md-inline-block">
                                                    <div class="btn-group float-md-left mr-1 mb-1">
                                                        <button class="btn btn-outline-dark btn-xs dropdown-toggle" type="button"
                                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Order By
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                        </div>
                                                    </div>
                                                    <div class="search-sm calendar-sm d-inline-block float-md-left mr-1 mb-1 align-top">
                                                        <input class="form-control datepicker" placeholder="Search by day">
                                                    </div>

                                                            <div class="search-sm d-inline-block float-md-left mr-1 mb-1 align-top">
                                                                <input class="form-control" placeholder="Search Table" id="searchDatatable">
                                                            </div>



                                                </div>

                                                <div class="float-md-right dropdown-as-select" id="pageCountDatatable">
                                                    <span class="text-muted text-small">Displaying 1-10 of 40 items </span>
                                                    <button class="btn btn-outline-dark btn-xs dropdown-toggle" type="button"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        10
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#">5</a>
                                                        <a class="dropdown-item active" href="#">10</a>
                                                        <a class="dropdown-item" href="#">20</a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="separator mb-5"></div>
                                    </div>
            </div>



            <div class="container-fluid">



                <div class="row mb-4 overflow-y-scroll">
                    <div class="col-12 data-tables-hide-filter">
                        <div class="card">
                            <div class="card-body">

                                <table class="data-table data-tables-pagination responsive nowrap"
                                    data-order="[[ 1, &quot;desc&quot; ]]">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Name</th>
                                            <th>Percentage(%)</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <p>1.</p>
                                            </td>
                                            <td>
                                                <p class="text-muted">VAT</p>
                                            </td>
                                            <td>
                                                <p class="text-muted">16</p>
                                            </td>
                                            <td>
                                                <div class="btn-group  mb-1">

                                                    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Action
                                                        <span class="sr-only">Toggle Dropdown</span>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="#">Delete </a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </div>


                                            </td>
                                        </tr>






                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</x-app-layout>
