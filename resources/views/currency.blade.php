<x-app-layout>

    <x-sidebar/>
    <x-sub-menu/>

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

                            </span>
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
                            </div>

                        </div>
                    </div>
                    <div class="separator mb-5"></div>
                </div>
            </div>



            <div class="row mb-4">
                <div class="col-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <table class="data-table data-table-feature">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                        <th> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
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
                                    <tr>
                                        <td>Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>63</td>
                                        <td>2011/07/25</td>
                                        <td>$170,750</td>
                                    </tr>
                                    <tr>
                                        <td>Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>66</td>
                                        <td>2009/01/12</td>
                                        <td>$86,000</td>
                                    </tr>
                                    <tr>
                                        <td>Cedric Kelly</td>
                                        <td>Senior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2012/03/29</td>
                                        <td>$433,060</td>
                                    </tr>
                                    <tr>
                                        <td>Airi Satou</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>33</td>
                                        <td>2008/11/28</td>
                                        <td>$162,700</td>
                                    </tr>
                                    <tr>
                                        <td>Brielle Williamson</td>
                                        <td>Integration Specialist</td>
                                        <td>New York</td>
                                        <td>61</td>
                                        <td>2012/12/02</td>
                                        <td>$372,000</td>
                                    </tr>
                                    <tr>
                                        <td>Herrod Chandler</td>
                                        <td>Sales Assistant</td>
                                        <td>San Francisco</td>
                                        <td>59</td>
                                        <td>2012/08/06</td>
                                        <td>$137,500</td>
                                    </tr>
                                    <tr>
                                        <td>Rhona Davidson</td>
                                        <td>Integration Specialist</td>
                                        <td>Tokyo</td>
                                        <td>55</td>
                                        <td>2010/10/14</td>
                                        <td>$327,900</td>
                                    </tr>
                                    <tr>
                                        <td>Colleen Hurst</td>
                                        <td>Javascript Developer</td>
                                        <td>San Francisco</td>
                                        <td>39</td>
                                        <td>2009/09/15</td>
                                        <td>$205,500</td>
                                    </tr>
                                    <tr>
                                        <td>Sonya Frost</td>
                                        <td>Software Engineer</td>
                                        <td>Edinburgh</td>
                                        <td>23</td>
                                        <td>2008/12/13</td>
                                        <td>$103,600</td>
                                    </tr>
                                    <tr>
                                        <td>Jena Gaines</td>
                                        <td>Office Manager</td>
                                        <td>London</td>
                                        <td>30</td>
                                        <td>2008/12/19</td>
                                        <td>$90,560</td>
                                    </tr>
                                    <tr>
                                        <td>Quinn Flynn</td>
                                        <td>Support Lead</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2013/03/03</td>
                                        <td>$342,000</td>
                                    </tr>
                                    <tr>
                                        <td>Charde Marshall</td>
                                        <td>Regional Director</td>
                                        <td>San Francisco</td>
                                        <td>36</td>
                                        <td>2008/10/16</td>
                                        <td>$470,600</td>
                                    </tr>
                                    <tr>
                                        <td>Haley Kennedy</td>
                                        <td>Senior Marketing Designer</td>
                                        <td>London</td>
                                        <td>43</td>
                                        <td>2012/12/18</td>
                                        <td>$313,500</td>
                                    </tr>
                                    <tr>
                                        <td>Tatyana Fitzpatrick</td>
                                        <td>Regional Director</td>
                                        <td>London</td>
                                        <td>19</td>
                                        <td>2010/03/17</td>
                                        <td>$385,750</td>
                                    </tr>
                                    <tr>
                                        <td>Michael Silva</td>
                                        <td>Marketing Designer</td>
                                        <td>London</td>
                                        <td>66</td>
                                        <td>2012/11/27</td>
                                        <td>$198,500</td>
                                    </tr>
                                    <tr>
                                        <td>Paul Byrd</td>
                                        <td>Chief Financial Officer (CFO)</td>
                                        <td>New York</td>
                                        <td>64</td>
                                        <td>2010/06/09</td>
                                        <td>$725,000</td>
                                    </tr>
                                    <tr>
                                        <td>Gloria Little</td>
                                        <td>Systems Administrator</td>
                                        <td>New York</td>
                                        <td>59</td>
                                        <td>2009/04/10</td>
                                        <td>$237,500</td>
                                    </tr>
                                    <tr>
                                        <td>Bradley Greer</td>
                                        <td>Software Engineer</td>
                                        <td>London</td>
                                        <td>41</td>
                                        <td>2012/10/13</td>
                                        <td>$132,000</td>
                                    </tr>
                                    <tr>
                                        <td>Dai Rios</td>
                                        <td>Personnel Lead</td>
                                        <td>Edinburgh</td>
                                        <td>35</td>
                                        <td>2012/09/26</td>
                                        <td>$217,500</td>
                                    </tr>
                                    <tr>
                                        <td>Jenette Caldwell</td>
                                        <td>Development Lead</td>
                                        <td>New York</td>
                                        <td>30</td>
                                        <td>2011/09/03</td>
                                        <td>$345,000</td>
                                    </tr>
                                    <tr>
                                        <td>Yuri Berry</td>
                                        <td>Chief Marketing Officer (CMO)</td>
                                        <td>New York</td>
                                        <td>40</td>
                                        <td>2009/06/25</td>
                                        <td>$675,000</td>
                                    </tr>
                                    <tr>
                                        <td>Caesar Vance</td>
                                        <td>Pre-Sales Support</td>
                                        <td>New York</td>
                                        <td>21</td>
                                        <td>2011/12/12</td>
                                        <td>$106,450</td>
                                    </tr>
                                    <tr>
                                        <td>Doris Wilder</td>
                                        <td>Sales Assistant</td>
                                        <td>Sidney</td>
                                        <td>23</td>
                                        <td>2010/09/20</td>
                                        <td>$85,600</td>
                                    </tr>
                                    <tr>
                                        <td>Angelica Ramos</td>
                                        <td>Chief Executive Officer (CEO)</td>
                                        <td>London</td>
                                        <td>47</td>
                                        <td>2009/10/09</td>
                                        <td>$1,200,000</td>
                                    </tr>
                                    <tr>
                                        <td>Gavin Joyce</td>
                                        <td>Developer</td>
                                        <td>Edinburgh</td>
                                        <td>42</td>
                                        <td>2010/12/22</td>
                                        <td>$92,575</td>
                                    </tr>
                                    <tr>
                                        <td>Jennifer Chang</td>
                                        <td>Regional Director</td>
                                        <td>Singapore</td>
                                        <td>28</td>
                                        <td>2010/11/14</td>
                                        <td>$357,650</td>
                                    </tr>
                                    <tr>
                                        <td>Brenden Wagner</td>
                                        <td>Software Engineer</td>
                                        <td>San Francisco</td>
                                        <td>28</td>
                                        <td>2011/06/07</td>
                                        <td>$206,850</td>
                                    </tr>
                                    <tr>
                                        <td>Fiona Green</td>
                                        <td>Chief Operating Officer (COO)</td>
                                        <td>San Francisco</td>
                                        <td>48</td>
                                        <td>2010/03/11</td>
                                        <td>$850,000</td>
                                    </tr>
                                    <tr>
                                        <td>Shou Itou</td>
                                        <td>Regional Marketing</td>
                                        <td>Tokyo</td>
                                        <td>20</td>
                                        <td>2011/08/14</td>
                                        <td>$163,000</td>
                                    </tr>
                                    <tr>
                                        <td>Michelle House</td>
                                        <td>Integration Specialist</td>
                                        <td>Sidney</td>
                                        <td>37</td>
                                        <td>2011/06/02</td>
                                        <td>$95,400</td>
                                    </tr>
                                    <tr>
                                        <td>Suki Burks</td>
                                        <td>Developer</td>
                                        <td>London</td>
                                        <td>53</td>
                                        <td>2009/10/22</td>
                                        <td>$114,500</td>
                                    </tr>
                                    <tr>
                                        <td>Prescott Bartlett</td>
                                        <td>Technical Author</td>
                                        <td>London</td>
                                        <td>27</td>
                                        <td>2011/05/07</td>
                                        <td>$145,000</td>
                                    </tr>
                                    <tr>
                                        <td>Gavin Cortez</td>
                                        <td>Team Leader</td>
                                        <td>San Francisco</td>
                                        <td>22</td>
                                        <td>2008/10/26</td>
                                        <td>$235,500</td>
                                    </tr>
                                    <tr>
                                        <td>Martena Mccray</td>
                                        <td>Post-Sales support</td>
                                        <td>Edinburgh</td>
                                        <td>46</td>
                                        <td>2011/03/09</td>
                                        <td>$324,050</td>
                                    </tr>
                                    <tr>
                                        <td>Unity Butler</td>
                                        <td>Marketing Designer</td>
                                        <td>San Francisco</td>
                                        <td>47</td>
                                        <td>2009/12/09</td>
                                        <td>$85,675</td>
                                    </tr>
                                    <tr>
                                        <td>Howard Hatfield</td>
                                        <td>Office Manager</td>
                                        <td>San Francisco</td>
                                        <td>51</td>
                                        <td>2008/12/16</td>
                                        <td>$164,500</td>
                                    </tr>
                                    <tr>
                                        <td>Hope Fuentes</td>
                                        <td>Secretary</td>
                                        <td>San Francisco</td>
                                        <td>41</td>
                                        <td>2010/02/12</td>
                                        <td>$109,850</td>
                                    </tr>
                                    <tr>
                                        <td>Vivian Harrell</td>
                                        <td>Financial Controller</td>
                                        <td>San Francisco</td>
                                        <td>62</td>
                                        <td>2009/02/14</td>
                                        <td>$452,500</td>
                                    </tr>
                                    <tr>
                                        <td>Timothy Mooney</td>
                                        <td>Office Manager</td>
                                        <td>London</td>
                                        <td>37</td>
                                        <td>2008/12/11</td>
                                        <td>$136,200</td>
                                    </tr>
                                    <tr>
                                        <td>Jackson Bradshaw</td>
                                        <td>Director</td>
                                        <td>New York</td>
                                        <td>65</td>
                                        <td>2008/09/26</td>
                                        <td>$645,750</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</x-app-layout>
