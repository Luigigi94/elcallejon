<div uk-filter="target: .js-filter">
    <h1>Categorias</h1>
    <ul class="uk-subnav uk-subnav-pill">
        <li class="uk-active" uk-filter-control><a href="#">Todas</a></li>
        @foreach($categories as $category)
            <li uk-filter-control="[data-color='{{ $category->name }}']"><a href="#"> {{ $category->name }}</a></li>
        @endforeach
        <li uk-filter-control="[data-color ='General']"><a href="#"> General </a></li>
    </ul>
    <h1>Productos</h1>
    <ul class="js-filter uk-child-width-1-2 uk-child-width-1-3@m uk-text-center" uk-grid id="ulmamalon">
        @foreach($products as $product)
            <li data-color="{{ $product->category ? $product->category->name : 'General' }}">
                <div class="uk-card uk-card-hover uk-card-large uk">
                    <div class="uk-card-header">
                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                            <div class="uk-width-auto">
                                <img class="uk-border-circle" width="40" height="40" src="{{ $product->featured_image_url }}">
                            </div>
                            <div class="uk-width-expand">
                                <h3 class="uk-card-title uk-margin-remove-bottom">{{ $product->name }}</h3>
                                <p class="uk-text-meta uk-margin-remove-top">{{ $product->category ? $product->category->name : 'General' }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="uk-card-body">
                        <p>{{ $product->description }}</p>
                    </div>
                    <div class="uk-card-footer">
{{--                        <button class="btn btn-default btn-raised btn-round btn-block" data-toggle="modal" data-target="#ModalAddtoCommand">--}}
{{--                            <i class="material-icons">library_books</i>--}}
{{--                            Classic--}}
                        <input type="submit" name="action_button" id="action_button" class="action_button" data-id="{{ $valor = $product->id }}" data-toggle="modal" data-target="#ModalAddtoCommand" class="btn btn-primary btn-round" value="Add" />
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
</div>

{{--<div uk-filter="target: .js-filter">--}}
{{--    <h1 class="title">Categorias</h1>--}}
{{--    <ul class="uk-subnav uk-subnav-pill">--}}
{{--        <li class="uk-active" uk-filter-control>--}}
{{--            <a href="#">Todas</a>--}}
{{--        </li>--}}
{{--        <li uk-filter-control="[data-color='']" id="llena">--}}
{{--            <a href="#"></a>--}}
{{--        </li>--}}
{{--        <li uk-filter-control="[data-color ='General']">--}}
{{--            <a href="#"> General </a>--}}
{{--        </li>--}}
{{--    </ul>--}}
{{--</div>--}}


