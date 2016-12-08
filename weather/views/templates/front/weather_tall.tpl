{*
* Tall template. @todo, create wide template, and better templates
*}

<div class="col-xs-12 col-sm-4">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">{l s='Currently in' mod='weather'} {{$weather->locationName}} {l s='I See' mod='weather'} {{$weather->headline}}</h3>
        </div>
        <div class="panel-body">
            <div class="pull-left">
                <img src="{{$weather->iconUrl}}" alt="{{$weather->description}}" />
            </div>
            <div class="pull-left">
                <dl class="dl-horizontal">
                    <dt>{l s='Expect' mod='weather'}</dt>
                    <dd>{{$weather->description}}</dd>

                    <dt>{l s='Current Temperature' mod='weather'}</dt>
                    <dd>{{$weather->temp}}&deg;</dd>

                    <dt>{l s='Temperature Today' mod='weather'}</dt>
                    <dd>{{$weather->tempMin}}&deg; &dash; {{$weather->tempMax}}&deg;</dd>

                    <dt>{l s='Humidity' mod='weather'}</dt>
                    <dd>{{$weather->humidity}}</dd>
                </dl>
            </div>
        </div>
    </div>
</div>