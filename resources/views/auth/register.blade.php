@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required>

                                @if ($errors->has('username'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="us-autocomplete-pro-address-input" class="col-md-4 col-form-label text-md-right">{{ __('Street Address') }}</label>

                            <div class="col-md-6">
                                <input id="us-autocomplete-pro-address-input" autocomplete="smartystreets" type="text" class="form-control{{ $errors->has('street_address') ? ' is-invalid' : '' }}" name="street_address" value="{{ old('street_address') }}" required autofocus>
                                <ul class="us-autocomplete-pro-menu" style="display:none;"></ul>
                                @if ($errors->has('street_address'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('street_address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                      

                        <div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{ old('city') }}" required autofocus>

                                @if ($errors->has('city'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="state" class="col-md-4 col-form-label text-md-right">{{ __('State') }}</label>

                            <div class="col-md-6">
                                <input id="state" type="text" class="form-control{{ $errors->has('state') ? ' is-invalid' : '' }}" name="state" value="{{ old('state') }}" required autofocus>

                                @if ($errors->has('state'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('state') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="zip" class="col-md-4 col-form-label text-md-right">{{ __('zip') }}</label>

                            <div class="col-md-6">
                                <input id="zip" type="zip" class="form-control{{ $errors->has('zip') ? ' is-invalid' : '' }}" name="zip" value="{{ old('zip') }}" required autofocus>

                                @if ($errors->has('zip'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('zip') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="phone" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required autofocus>

                                @if ($errors->has('phone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.js"></script>
		
		<script>
		$(function() {

  var menu = $(".us-autocomplete-pro-menu");
  var input = $("#us-autocomplete-pro-address-input");

  function getSuggestions(search, selected) {
    $.ajax({
      url: "https://us-autocomplete-pro.api.smartystreets.com/lookup?",
      data: {
        // Don't forget to replace the auth-id value with your own Website Key
        "auth-id": "92901638620966155",
        "search": search,
        "selected": (selected ? selected : "")
      },
      dataType: "jsonp",
      success: function(data) {
        if (data.suggestions) {
          buildMenu(data.suggestions);
        } else {
          noSuggestions();
        }
      },
      error: function(error) {
        return error;
      }
    });
  }

  function getSingleAddressData(address) {
    $.ajax({
      url: "https://us-street.api.smartystreets.com/street-address?",
      data: {
        // Don't forget to replace the auth-id value with your own Website Key
        "auth-id": "92901638620966155",
        "street": address[0],
        "city": address[1],
        "state": address[2]
      },
      dataType: "jsonp",
      success: function(data) {
        $("#zip").val(data[0].components.zipcode);
        $("#data-lat").html(data[0].metadata.latitude);
        $("#data-lon").html(data[0].metadata.longitude);
        $("#data-county").html(data[0].metadata.county_name);
        $("#data-time-zone").html(data[0].metadata.time_zone);
      },
      error: function(error) {
        return error;
      }
    });
  }

  function clearAddressData() {
    $("#city").val("");
    $("#state").val("");
    $("#zip").val("");
    $("#data-lat").empty();
    $("#data-lon").empty();
    $("#data-county").empty();
    $("#data-time-zone").empty();
  }

  function noSuggestions() {
    var menu = $(".us-autocomplete-pro-menu");
    menu.empty();
    menu.append("<li class='ui-state-disabled'><div>No Suggestions Found</div></li>");
    menu.menu("refresh");
  }

  function buildAddress(suggestion) {
    var whiteSpace = "";
    if (suggestion.secondary || suggestion.entries > 1) {
      if (suggestion.entries > 1) {
        suggestion.secondary += " (" + suggestion.entries + " more entries)";
      }
      whiteSpace = " ";
    }
    var address = suggestion.street_line + whiteSpace + suggestion.secondary + " " + suggestion.city + ", " + suggestion.state;
    var inputAddress = $("#us-autocomplete-pro-address-input").val();
    for (var i = 0; i < address.length; i++) {
      var theLettersMatch = typeof inputAddress[i] == "undefined" || address[i].toLowerCase() !== inputAddress[i].toLowerCase();
      if (theLettersMatch) {
        address = [address.slice(0, i), "<b>", address.slice(i)].join("");
        break;
      }
    }
    return address;
  }

  function buildMenu(suggestions) {
    var menu = $(".us-autocomplete-pro-menu");
    menu.empty();
    suggestions.map(function(suggestion) {
      var caret = (suggestion.entries > 1 ? "<span class=\"ui-menu-icon ui-icon ui-icon-caret-1-e\"></span>" : "");
      menu.append("<li><div data-address='" +
        suggestion.street_line + (suggestion.secondary ? " " + suggestion.secondary : "") + ";" +
        suggestion.city + ";" +
        suggestion.state + "'>" +
        caret +
        buildAddress(suggestion) + "</b></div></li>");
    });
    menu.menu("refresh");
  }

  $(".us-autocomplete-pro-menu").menu({
    select: function(event, ui) {
      var text = ui.item[0].innerText;
      var address = ui.item[0].childNodes[0].dataset.address.split(";");
      var searchForMoreEntriesText = new RegExp(/(?:\ more\ entries\))/);
      input.val(address[0]);
      $("#city").val(address[1]);
      $("#state").val(address[2]);

      if (text.search(searchForMoreEntriesText) == "-1") {
        $(".us-autocomplete-pro-menu").hide();
        getSingleAddressData(address);
      } else {
        $("#us-autocomplete-pro-address-input").val(address[0] + " ");
        var selected = text.replace(" more entries", "");
        selected = selected.replace(",", "");
        getSuggestions(address[0], selected);
      }
    }
  });

  $("#us-autocomplete-pro-address-input").keyup(function(event) {
    if (input.val().length > 0 || input.val() === "") clearAddressData();
    if (event.key === "ArrowDown") {
      menu.focus();
      menu.menu("focus", null, menu.menu().find(".ui-menu-item"));
    } else {
      var textInput = input.val();
      if (textInput) {
        menu.show();
        getSuggestions(textInput);
      } else {
        menu.hide();
      }
    }
  });

  $(".us-autocomplete-pro-menu").css("width", ($("#us-autocomplete-pro-address-input").width() + 24) + "px")

});

		</script>