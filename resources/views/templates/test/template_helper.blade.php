@extends('layouts.app')

{{-- Page title --}}
@section('title')
    Template Helper ::

@stop

{{-- Page content --}}
@section('content')

    <div class="page-header">
        <h3>Template Helper</h3>
    </div>

    <div class="row">
        <div class="panel panel-primary">
            <!-- Default panel contents -->
            <div class="panel-heading">General</div>
            <div class="panel-body">
                <p>Our templates utilize Laravel blade templating. <a href="http://laravel.com/docs/5.0/templates">View Documentation</a>
                </p>

                <p>
                    Every report template has the following php variables available: $results, $selects.
                </p>
            </div>

        </div>
    </div>

    <div class="row">
        <div class="panel panel-primary">
            <!-- Default panel contents -->
            <div class="panel-heading">This report contains the following selects.</div>
            <div class="panel-body">

                <!-- List group -->
                <?php $first_select = null?>
                <ul class="list-group">
                    @foreach ($selects as $select => $label)

                        @if($first_select == null)
                            <?php $first_select = $select ?>
                        @endif

                        <li class="list-group-item">{{ $select }}</li>
                    @endforeach
                </ul>

            </div>

        </div>
    </div>

    <div class="row">
        <div class="panel panel-primary">
            <!-- Default panel contents -->
            <div class="panel-heading">Accessing specific selects.</div>
            <div class="panel-body">

                <p>You can get a label from any specific select by knowing the name.
                    Let's get label from your first select ({{$first_select}}).
                </p>

                <h4>Code:</h4>
                <div class="well well-lg">
                    <?php echo 'Label: {{$selects["'.$first_select.'"]}}'?>
                </div>

                <h4>Result:</h4>
                <div class="well well-lg">
                    Label: {{$selects[$first_select]}}
                </div>

            </div>

        </div>
    </div>

    <div class="row">
        <div class="panel panel-primary">
            <!-- Default panel contents -->
            <div class="panel-heading">Accessing results for specific selects.</div>
            <div class="panel-body">

                <p>Results is an array, so we need to iterate over it. Let's get the list of result values for
                    the same select as above ({{$first_select}}).
                </p>

                <h4>Code:</h4>
                <div class="well well-lg">
                    <?php echo htmlspecialchars('@foreach ($results as $result)') ?><br/>
                        <?php echo htmlspecialchars('{{$result->{'.$first_select.'} }}') ?><br/>
                    <?php echo htmlspecialchars('@endforeach') ?><br/>
                </div>

                <h4>Result:</h4>
                <div class="well well-lg">
                    @foreach ($results as $result)
                        {{$result->{$first_select} }}
                    @endforeach
                </div>

            </div>

        </div>
    </div>

    <div class="row">
        <div class="panel panel-primary">
            <!-- Default panel contents -->
            <div class="panel-heading">Iterate over all selects</div>
            <div class="panel-body">
                <p>Let's iterate over all selects in this report and get their labels.</a>
                </p>

                <h4>Code:</h4>
                <div class="well well-lg">
                    <span><?php echo "@foreach (\$selects as \$select => \$label)" ?></span><br/>
                    <span style="margin-left: 25px"><?php echo "{{\$label}}" ?></span><br/>
                    <span><?php echo "@endforeach"?></span>
                </div>

                <h4>Result:</h4>
                <div class="well well-lg">
                    @foreach ($selects as $select => $label)
                        {{$label}}
                    @endforeach
                </div>

                <hr/>
                <p>And with a little bit of html those can be let's say a bullet list.</a>
                </p>

                <h4>Code:</h4>
                <div class="well well-lg">
                    <span><?php echo "<ul> @foreach (\$selects as \$select => \$label)" ?></span><br/>
                    <span style="margin-left: 25px"><?php echo "<li>{{\$label}}</li>" ?></span><br/>
                    <span><?php echo "@endforeach </ul>"?></span>
                </div>

                <h4>Result:</h4>
                <div class="well well-lg">
                    <ul> @foreach ($selects as $select => $label)
                            <li>{{$label}}</li>
                        @endforeach </ul>
                </div>

                <hr/>
                <p>Some more html creates a table header</a>
                </p>

                <h4>Code:</h4>
                <div class="well well-lg">
                    <?php echo htmlspecialchars('<table id="object_list" class="table table-striped">')?><br/>
                      <?php echo htmlspecialchars('<thead>')?><br/>
                        <?php echo htmlspecialchars('<tr>')?><br/>
                          <?php echo htmlspecialchars('@foreach ($selects as $select => $label)') ?><br/>
                           <?php echo htmlspecialchars('<th>{{$label}}</th>') ?><br/>
                         <?php echo htmlspecialchars('@endforeach') ?><br/>
                        <?php echo htmlspecialchars('</tr>')?><br/>
                      <?php echo htmlspecialchars('</thead>')?><br/>
                    <?php echo htmlspecialchars('</table>')?><br/>
                </div>

                <h4>Result:</h4>
                <div class="well well-lg">

                    <table id="object_list" class="table table-striped">
                        <thead>
                        <tr>
                            @foreach ($selects as $select => $label)
                                <th>{{$label}}</th>
                            @endforeach
                        </tr>
                        </thead>
                    </table>

                </div>

            </div>

        </div>
    </div>

    <div class="row">
        <div class="panel panel-primary">
            <!-- Default panel contents -->
            <div class="panel-heading">Iterate over all results.</div>
            <div class="panel-body">
                <p>Create a report table.
                </p>

                <h4>Code:</h4>
                <div class="well well-lg">

                    <?php echo htmlspecialchars('<table id="object_list" class="table table-striped">')?><br/>
                      <?php echo htmlspecialchars('<tbody>')?><br/>
                        <?php echo htmlspecialchars('@foreach ($records as $record)')?><br/>
                        <?php echo htmlspecialchars('<tr>')?><br/>
                          <?php echo htmlspecialchars('@foreach ($selects as $select => $label)') ?><br/>
                           <?php echo htmlspecialchars('<td>{{$record->{$select} }}</td>') ?><br/>
                         <?php echo htmlspecialchars('@endforeach') ?><br/>
                        <?php echo htmlspecialchars('</tr>')?><br/>
                         <?php echo htmlspecialchars('@endforeach') ?><br/>
                      <?php echo htmlspecialchars('</tbody>')?><br/>
                    <?php echo htmlspecialchars('</table>')?><br/>
                </div>

                <h4>Result:</h4>
                <div class="well well-lg">
                    <table id="object_list" class="table table-striped">
                        <tbody>
                        @foreach ($results as $result)
                            <tr>
                                @foreach ($selects as $select => $label)
                                    <td>{{$result->{$select} }}</td>
                                @endforeach
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

    <div class="row">
        <div class="panel panel-primary">
            <!-- Default panel contents -->
            <div class="panel-heading">Put it together.</div>
            <div class="panel-body">
                <p>You can display results for all available selects if you wish.
                </p>

                <h4>Code:</h4>
                <div class="well well-lg">

                    <?php echo htmlspecialchars('<table id="object_list" class="table table-striped">')?><br/>
                      <?php echo htmlspecialchars('<thead>')?><br/>
                        <?php echo htmlspecialchars('<tr>')?><br/>
                          <?php echo htmlspecialchars('@foreach ($selects as $select => $label)') ?><br/>
                           <?php echo htmlspecialchars('<th>{{$label }}</th>') ?><br/>
                         <?php echo htmlspecialchars('@endforeach') ?><br/>
                        <?php echo htmlspecialchars('</tr>')?><br/>
                      <?php echo htmlspecialchars('</thead>')?><br/><br/>

                      <?php echo htmlspecialchars('<tbody>')?><br/>
                        <?php echo htmlspecialchars('@foreach ($records as $record)')?><br/>
                        <?php echo htmlspecialchars('<tr>')?><br/>
                          <?php echo htmlspecialchars('@foreach ($selects as $select => $label)') ?><br/>
                           <?php echo htmlspecialchars('<td>{{$record->{$select} }}</td>') ?><br/>
                         <?php echo htmlspecialchars('@endforeach') ?><br/>
                        <?php echo htmlspecialchars('</tr>')?><br/>
                         <?php echo htmlspecialchars('@endforeach') ?><br/>
                      <?php echo htmlspecialchars('</tbody>')?><br/>
                    <?php echo htmlspecialchars('</table>')?><br/>
                </div>

                <h4>Result:</h4>
                <div class="well well-lg">
                    <table id="object_list" class="table table-striped">
                        <thead>
                        <tr>
                            @foreach ($selects as $select => $label)
                                <th>{{$label}}</th>
                            @endforeach
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($results as $result)
                            <tr>
                                @foreach ($selects as $select => $label)
                                    <td>{{$result->{$select} }}</td>
                                @endforeach
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
@stop