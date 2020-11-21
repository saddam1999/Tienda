  <!-- Marketing messaging and featurettes
================================================== -->
                            <!-- Wrap the rest of the page in another container to center all the content. -->
                            <div class="container marketing">
                                <div class="row">
                                    <!-- BEGIN PRODUCTS -->
                                    @foreach ($Articulo as $producto)
                                    @if($producto->descuento!=0)
                                    <div class="col-md-4" style="border-radius:10px;">
                                        <div class="alert alert-warning" role="alert">
                                            <h4 class="alert-heading"> @if($Promocion->isEmpty()) @else
                                                {{$promocion->titulo}} @endif</h4>

                                        </div>
                                        <!-- bbb_deals -->
                                        <div class="bbb_deals sc-product-item" style="border-radius:40px;">
                                            @if($producto->descuento!=0)
                                            <div class="ribbon ribbon-top-right"><span>Oferta
                                                    -{{$producto->descuento}}%</span></div>
                                            @endif
                                            <div class="bbb_deals_title" data-name="product_name">
                                                {{$producto->nombre}}</div>
                                            <div class="bbb_deals_slider_container">
                                                <div class=" bbb_deals_item">
                                                    <div class="bbb_deals_image thumbnail zoom"><img
                                                            data-name="product_image"
                                                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTBFTrn1ikivYdtSkXv0JVfPSAb8944mWxN7J79cZTPMAJrzyFAW33PipVdSLICzm7By7oZSlA&usqp=CAc"
                                                            alt=""></div>
                                                    <div class="bbb_deals_content">
                                                        <div
                                                            class="bbb_deals_info_line d-flex flex-row justify-content-start">
                                                            @foreach ($Marca as $marca)
                                                            @if($marca->id===$producto->id_marca)
                                                            <div class="bbb_deals_item_category"><a
                                                                    href="#">{{$marca->nombre}}</a></div>
                                                            @endif
                                                            @endforeach
                                                            <small class="text-muted">{{$producto->categoria}}</small>
                                                            <div class="bbb_deals_item_price_a ml-auto">
                                                                @if($producto->descuento!=0)
                                                                <del>${{$producto->precioOriginal}}</del>
                                                                @else
                                                                ${{$producto->precioOriginal}}
                                                                @endif
                                                                @if($Settings->isEmpty()) @else
                                                                {{$setting->setting_moneda}} @endif</div>
                                                        </div>
                                                        <div
                                                            class="bbb_deals_info_line d-flex flex-row justify-content-start">
                                                            <div class="form-group">
                                                                <textarea class="form-control bbb_deals_item_name"
                                                                    disabled data-name="product_desc"
                                                                    rows="8">{{$producto->descripcion}}</textarea>
                                                            </div>

                                                            <div class="bbb_deals_item_price ml-auto">
                                                                ${{$producto->precio}} @if($Settings->isEmpty())
                                                                @else {{$setting->setting_moneda}} @endif</div>
                                                            <input name="product_price" value="{{$producto->precio}}"
                                                                type="hidden" />
                                                            <input name="product_id" value="{{$producto->id}}"
                                                                type="hidden" />
                                                        </div>
                                                        <div class="available">
                                                            <div
                                                                class="available_line d-flex flex-row justify-content-start">
                                                                <div class="available_title">Disponible:
                                                                    <span>{{$producto->existencia}}</span></div>
                                                                <div class="sold_title ml-auto">Already sold:
                                                                    <span>28</span></div>
                                                            </div>
                                                            <button
                                                                class="sc-add-to-cart btn btn-success btn btn-success btn-animate">Agregar
                                                                Carrito</button>
                                                            <div class="available_bar"><span style="width:17%"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach
