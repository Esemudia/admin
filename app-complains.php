<?php
include "header.php";
?>
    <!-- BEGIN: Page Main-->
    <div id="main">
      <div class="row">
        <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
        <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
          <!-- Search for small screen-->
          <div class="container">
            <div class="row">
              <div class="col s10 m6 l6">
                <h5 class="breadcrumbs-title mt-0 mb-0"><span>Form Select2</span></h5>
                <ol class="breadcrumbs mb-0">
                  <li class="breadcrumb-item"><a href="index-2.html">Home</a>
                  </li>
                  <li class="breadcrumb-item"><a href="#">Form</a>
                  </li>
                  <li class="breadcrumb-item active">Form Select2
                  </li>
                </ol>
              </div>
              <div class="col s2 m6 l6"><a class="btn dropdown-settings waves-effect waves-light breadcrumbs-btn right" href="#!" data-target="dropdown1"><i class="material-icons hide-on-med-and-up">settings</i><span class="hide-on-small-onl">Settings</span><i class="material-icons right">arrow_drop_down</i></a>
                <ul class="dropdown-content" id="dropdown1" tabindex="0">
                  <li tabindex="0"><a class="grey-text text-darken-2" href="user-profile-page.html">Profile<span class="new badge red">2</span></a></li>
                  <li tabindex="0"><a class="grey-text text-darken-2" href="app-contacts.html">Contacts</a></li>
                  <li tabindex="0"><a class="grey-text text-darken-2" href="page-faq.html">FAQ</a></li>
                  <li class="divider" tabindex="-1"></li>
                  <li tabindex="0"><a class="grey-text text-darken-2" href="user-login.html">Logout</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col s12">
          <div class="container">
            <div class="section">
  <!-- select2 -->
  <div class="row">
    <div class="col s12">
      <div class="card-panel">
        <a href="https://select2.org/" target="_blank">Select2</a> gives you a customizable select box with
        support for searching, tagging, remote data sets,
        infinite scrolling, and many other highly used options.
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col s12">
      <div class="card card-tabs">
        <div class="card-content">
          <div class="row">
            <div class="col s12 m6 l10">
              <h4 class="card-title">Select2</h4>
            </div>
            <div class="col s12 m6 l2">
              <ul class="tabs">
                <li class="tab col s4 p-0"><a class="active p-0" href="#view-select2">View</a></li>
                <li class="tab col s4 p-0"><a class="p-0" href="#html-select2">Html</a></li>
                <li class="tab col s4 p-0"><a class="p-0" href="#js-select2">Js</a></li>
              </ul>
            </div>
          </div>
          <div class="card-content">
            <!-- select2 tab -->
            <div id="view-select2">
              <div class="row">
                <div class="col m6 s12">
                  <h6 class="card-title">Basic Select2</h6>
                  <p class="card-text">Use <code class="token function language-javascript">.select2</code>
                    class for basic select2 control.</p>
                  <div class="input-field">
                    <select class="select2 browser-default">
                      <option value="square">Square</option>
                      <option value="rectangle">Rectangle</option>
                      <option value="rombo">Rombo</option>
                      <option value="romboid">Romboid</option>
                      <option value="trapeze">Trapeze</option>
                      <option value="traible">Triangle</option>
                      <option value="polygon">Polygon</option>
                    </select>
                  </div>
                </div>
                <div class="col m6 s12">
                  <h6 class="card-title">Single Select with Label</h6>
                  <p class="card-text">Use <code class="token function language-javascript">optgroup</code>
                    attribute for basic select2 with Label control.</p>
                  <div class="input-field">
                    <select class="select2 browser-default">
                      <optgroup label="Figures">
                        <option value="romboid">Romboid</option>
                        <option value="trapeze">Trapeze</option>
                        <option value="triangle">Triangle</option>
                        <option value="polygon">Polygon</option>
                      </optgroup>
                      <optgroup label="Colors">
                        <option value="red">Red</option>
                        <option value="green">Green</option>
                        <option value="blue">Blue</option>
                        <option value="purple">Purple</option>
                      </optgroup>
                    </select>
                  </div>
                </div>
                <div class="col m6 s12">
                  <h6>Select With Icon</h6>
                  <p>Use data attribute <code class="token function language-javascript">data-icon</code> to
                    add icon name for each options. And use class <code
                      class="token function language-javascript">.select2-icons</code> to set icon with option.</p>
                  <div class="input-field">
                    <select data-placeholder="Select a state..." class="select2-icons browser-default"
                      id="select2-icons">
                      <option value="Ac unit" data-icon="ac_unit" selected>Ac unit</option>
                      <option value="widgets" data-icon="widgets">Widgets</option>
                      <option value="weekend" data-icon="weekend">Weekend</option>
                      <option value="web" data-icon="web">web</option>
                      <option value="warning" data-icon="warning">Warning</option>
                      <option value="apps" data-icon="apps">Apps</option>
                      <option value="airplay" data-icon="airplay">Airplay</option>
                      <option value="accessibility" data-icon="accessibility">Accessibility</option>
                      <option value="accessible" data-icon="accessible">Accessible</option>
                    </select>
                  </div>
                </div>
                <div class="col m6 s12">
                  <h6>Template support</h6>
                  <p>Select2 supports custom themes using the theme option so you can style Select2 to match
                    the rest of your application. These are using the <code
                      class="token function language-javascript">classic</code> theme, which matches the old look of
                    Select2.</p>
                  <div class="input-field">
                    <select class="select2-theme browser-default" id="select2-theme">
                      <optgroup label="Figures">
                        <option value="romboid">Romboid</option>
                        <option value="trapeze">Trapeze</option>
                        <option value="triangle">Triangle</option>
                        <option value="polygon">Polygon</option>
                      </optgroup>
                      <optgroup label="Colors">
                        <option value="red">Red</option>
                        <option value="green">Green</option>
                        <option value="blue">Blue</option>
                        <option value="purple">Purple</option>
                      </optgroup>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <!-- html code tab-->
            <div id="html-select2">
              <pre><code class="language-markup">
// Basic Select2 
&lt;div class="input-field"&gt;
  &lt;select class="select2 browser-default"&gt;
    &lt;option value="square"&gt;Square&lt;/option&gt;
    &lt;option value="rectangle"&gt;Rectangle&lt;/option&gt;
    &lt;option value="rombo"&gt;Rombo&lt;/option&gt;
    &lt;option value="romboid"&gt;Romboid&lt;/option&gt;
    &lt;option value="trapeze"&gt;Trapeze&lt;/option&gt;
    &lt;option value="traible"&gt;Triangle&lt;/option&gt;
    &lt;option value="polygon"&gt;Polygon&lt;/option&gt;
  &lt;/select&gt;
&lt;/div&gt;
// Select2 With Icon
&lt;div class="input-field"&gt;
  &lt;select data-placeholder="Select a state..." class="select2-icons browser-default" id="select2-icons"&gt;
    &lt;option value="Ac unit" data-icon="ac_unit" selected&gt;Ac unit&lt;/option&gt;
    &lt;option value="widgets" data-icon="widgets"&gt;Widgets&lt;/option&gt;
    &lt;option value="weekend" data-icon="weekend"&gt;Weekend&lt;/option&gt;
    &lt;option value="web" data-icon="web"&gt;web&lt;/option&gt;
    &lt;option value="warning" data-icon="warning"&gt;Warning&lt;/option&gt;
    &lt;option value="apps" data-icon="apps"&gt;Apps&lt;/option&gt;
    &lt;option value="airplay" data-icon="airplay"&gt;Airplay&lt;/option&gt;
    &lt;option value="accessibility" data-icon="accessibility"&gt;Accessibility&lt;/option&gt;
    &lt;option value="accessible" data-icon="accessible"&gt;Accessible&lt;/option&gt;
  &lt;/select&gt;
&lt;/div>
//selects witn label
&lt;div class="input-field"&gt;
  &lt;select class="select2 browser-default"&gt;
    &lt;optgroup label="Figures"&gt;
      &lt;option value="romboid"&gt;Romboid&lt;/option&gt;
      &lt;option value="trapeze"&gt;Trapeze&lt;/option&gt;
      &lt;option value="triangle"&gt;Triangle&lt;/option&gt;
      &lt;option value="polygon"&gt;Polygon&lt;/option&gt;
    &lt;/optgroup&gt;
    &lt;optgroup label="Colors"&gt;
      &lt;option value="red"&gt;Red&lt;/option&gt;
      &lt;option value="green"&gt;Green&lt;/option&gt;
      &lt;option value="blue"&gt;Blue&lt;/option&gt;
      &lt;option value="purple"&gt;Purple&lt;/option&gt;
    &lt;/optgroup&gt;
  &lt;/select&gt;
&lt;/div&gt;
           </code></pre>
            </div>
            <!-- js code tab-->
            <div id="js-select2">
              <pre><code class="language-javascript">
// Basic Select2 select
$(".select2").select2({
    dropdownAutoWidth: true,
    width: '100%'
});
// Select With Icon
$(".select2-icons").select2({
    dropdownAutoWidth: true,
    width: '100%',
    minimumResultsForSearch: Infinity,
    templateResult: iconFormat,
    templateSelection: iconFormat,
    escapeMarkup: function (es) { return es; }
});

// Format icon
function iconFormat(icon) {
    var originalOption = icon.element;
    if (!icon.id) { return icon.text; }
    var $icon = "&lt;i class='material-icons'&gt;" + $(icon.element).data('icon') + "&lt;/i&gt;" + icon.text;
    return $icon;
}
// Theme support
$(".select2-theme").select2({
    dropdownAutoWidth: true,
    width: '100%',
    placeholder: "Classic Theme",
    theme: "classic"
});
  </code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- select2 multiple -->
  <div class="row">
    <div class="col s12">
      <div class="card card-tabs">
        <div class="card-content">
          <div class="row">
            <div class="col s12 m6 l10">
              <h4 class="card-title">Multiple Select2</h4>
            </div>
            <div class="col s12 m6 l2">
              <ul class="tabs">
                <li class="tab col s4 p-0"><a class="active p-0" href="#view-multiple">View</a></li>
                <li class="tab col s4 p-0"><a class="p-0" href="#html-multiple">Html</a></li>
                <li class="tab col s4 p-0"><a class="p-0" href="#js-multiple">Js</a></li>
              </ul>
            </div>
          </div>
          <div class="card-content">
            <!-- select2 tab -->
            <div id="view-multiple">
              <div class="row">
                <div class="col m6">
                  <h6>Multiple Select with Label</h6>
                  <p>Use <code class="token function language-javascript">optgroup</code> attribute for
                    multiple select box with Label control.</p>
                  <div class="input-field">
                    <select class="select2 browser-default" multiple="multiple">
                      <optgroup label="Figures">
                        <option value="romboid">Romboid</option>
                        <option value="trapeze" selected>Trapeze</option>
                        <option value="triangle">Triangle</option>
                        <option value="polygon">Polygon</option>
                      </optgroup>
                      <optgroup label="Colors">
                        <option value="red">Red</option>
                        <option value="green">Green</option>
                        <option value="blue" selected>Blue</option>
                        <option value="purple">Purple</option>
                      </optgroup>
                    </select>
                  </div>
                </div>
                <div class="col m6">
                  <h6>Maximum Select with Label</h6>
                  <p>Select2 multi-value select boxes can set restrictions regarding the maximum number of options
                    selected.
                    The select below is declared with the <code
                      class="token function language-javascript">multiple</code>
                    attribute with <code class="token function language-javascript">maximumSelectionLength</code> in the
                    select2 options.
                  </p>
                  <div class="input-field">
                    <select class="max-length browser-default" multiple="multiple" id="max_length">
                      <optgroup label="Figures">
                        <option value="romboid">Romboid</option>
                        <option value="trapeze" selected>Trapeze</option>
                        <option value="triangle">Triangle</option>
                        <option value="polygon">Polygon</option>
                      </optgroup>
                      <optgroup label="Colors">
                        <option value="red">Red</option>
                        <option value="green">Green</option>
                        <option value="blue">Blue</option>
                        <option value="purple">Purple</option>
                      </optgroup>
                    </select>
                  </div>
                </div>
                <div class="col m6">
                  <h6>Select With Icon</h6>
                  <p>Use data attribute <code class="token function language-javascript">data-icon</code> to
                    add icon name for each options. And use class <code
                      class="token function language-javascript">.select2-icons</code> to set icon with option.</p>
                  <div class="input-field">
                    <select data-placeholder="Select a state..." class="select2-icons browser-default"
                      id="multiple-select2-icons" multiple="multiple">
                      <option value="access_alarm" data-icon="access_alarm" selected>Access_alarm</option>
                      <option value="account_circle" data-icon="account_circle">Account_circle</option>
                      <option value="add_alarm" data-icon="add_alarm">Add_alarm</option>
                      <option value="add_alert" data-icon="add_alert">Add_alert</option>
                      <option value="airport_shuttle" data-icon="airport_shuttle">Airport_shuttle</option>
                      <option value="announcement" data-icon="announcement">Announcement</option>
                      <option value="archive" data-icon="archive">Archive</option>
                      <option value="android" data-icon="android">Android</option>
                      <option value="assessment" data-icon="assessment">Assessment</option>
                      <option value="assignment" data-icon="assignment">Assignment</option>
                      <option value="attach_file" data-icon="attach_file">Attach_file</option>
                      <option value="attachment" data-icon="attachment">Attachment</option>
                      <option value="audiotrack" data-icon="audiotrack">Audiotrack</option>
                    </select>
                  </div>
                </div>
                <div class="col m6">
                  <h6>Multiple Select2</h6>
                  <p>Use <code class="token function language-javascript">.select2</code> class for basic
                    select2 control. Use <code class="token function language-javascript">multiple="multiple"</code>
                    attribute for multiple select box.</p>
                  <div class="input-field">
                    <select class="select2 browser-default" multiple="multiple">
                      <option value="square">Square</option>
                      <option value="rectangle" selected>Rectangle</option>
                      <option value="rombo">Rombo</option>
                      <option value="romboid">Romboid</option>
                      <option value="trapeze">Trapeze</option>
                      <option value="traible" selected>Triangle</option>
                      <option value="polygon">Polygon</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <!-- html code tab-->
            <div id="html-multiple">
              <pre><code class="language-markup">
// Multiple Select with Label            
&lt;div class="input-field"&gt;
  &lt;select class="select2 browser-default" multiple="multiple"&gt;
    &lt;optgroup label="Figures"&gt;
      &lt;option value="romboid"&gt;Romboid&lt;/option&gt;
      &lt;option value="trapeze" selected&gt;Trapeze&lt;/option&gt;
      &lt;option value="triangle"&gt;Triangle&lt;/option&gt;
      &lt;option value="polygon"&gt;Polygon&lt;/option&gt;
    &lt;/optgroup&gt;
    &lt;optgroup label="Colors"&gt;
      &lt;option value="red"&gt;Red&lt;/option&gt;
      &lt;option value="green"&gt;Green&lt;/option&gt;
      &lt;option value="blue" selected&gt;Blue&lt;/option&gt;
      &lt;option value="purple"&gt;Purple&lt;/option&gt;
    &lt;/optgroup&gt;
  &lt;/select&gt;
&lt;/div&gt;
//Multiple select with label
&lt;div class="input-field"&gt;
  &lt;select class="max-length browser-default" multiple="multiple" id="max_length"&gt;
    &lt;optgroup label="Figures"&gt;
      &lt;option value="romboid"&gt;Romboid&lt;/option&gt;
      &lt;option value="trapeze" selected&gt;Trapeze&lt;/option&gt;
      &lt;option value="triangle"&gt;Triangle&lt;/option&gt;
      &lt;option value="polygon"&gt;Polygon&lt;/option&gt;
    &lt;/optgroup&gt;
    &lt;optgroup label="Colors"&gt;
      &lt;option value="red"&gt;Red&lt;/option&gt;
      &lt;option value="green"&gt;Green&lt;/option&gt;
      &lt;option value="blue"&gt;Blue&lt;/option&gt;
      &lt;option value="purple"&gt;Purple&lt;/option&gt;
    &lt;/optgroup&gt;
  &lt;/select&gt;
&lt;/div&gt;
// Mutliple select with icon
&lt;div class="input-field"&gt;
  &lt;select data-placeholder="Select a state..." class="select2-icons browser-default"
    id="multiple-select2-icons" multiple="multiple"&gt;
    &lt;option value="3d_rotation" data-icon="3d_rotation" selected&gt;3d_rotation&lt;/option&gt;
    &lt;option value="access_alarm" data-icon="access_alarm"&gt;Access_alarm&lt;/option&gt;
    &lt;option value="account_circle" data-icon="account_circle"&gt;Account_circle&lt;/option&gt;
    &lt;option value="add_alarm" data-icon="add_alarm"&gt;Add_alarm&lt;/option&gt;
    &lt;option value="add_alert" data-icon="add_alert"&gt;Add_alert&lt;/option&gt;
    &lt;option value="airport_shuttle" data-icon="airport_shuttle"&gt;Airport_shuttle&lt;/option&gt;
    &lt;option value="announcement" data-icon="announcement"&gt;Announcement&lt;/option&gt;
    &lt;option value="archive" data-icon="archive"&gt;Archive&lt;/option&gt;
    &lt;option value="android" data-icon="android"&gt;Android&lt;/option&gt;
    &lt;option value="assessment" data-icon="assessment"&gt;Assessment&lt;/option&gt;
    &lt;option value="assignment" data-icon="assignment"&gt;Assignment&lt;/option&gt;
    &lt;option value="attach_file" data-icon="attach_file"&gt;Attach_file&lt;/option&gt;
    &lt;option value="attachment" data-icon="attachment"&gt;Attachment&lt;/option&gt;
    &lt;option value="audiotrack" data-icon="audiotrack"&gt;Audiotrack&lt;/option&gt;
  &lt;/select&gt;
&lt;/div&gt;
//Multiple select2
&lt;div class="input-field"&gt;
    &lt;select class="select2 browser-default" multiple="multiple"&gt;
      &lt;option value="square"&gt;Square&lt;/option&gt;
      &lt;option value="rectangle" selected&gt;Rectangle&lt;/option&gt;
      &lt;option value="rombo"&gt;Rombo&lt;/option&gt;
      &lt;option value="romboid"&gt;Romboid&lt;/option&gt;
      &lt;option value="trapeze"&gt;Trapeze&lt;/option&gt;
      &lt;option value="traible" selected&gt;Triangle&lt;/option&gt;
      &lt;option value="polygon"&gt;Polygon&lt;/option&gt;
    &lt;/select&gt;
  &lt;/div&gt;
          </code></pre>
            </div>
            <!-- js code tab-->
            <div id="js-multiple">
              <pre><code class="language-javascript">
// Select With Icon 
$(".select2-icons").select2({
    dropdownAutoWidth: true,
    width: '100%',
    minimumResultsForSearch: Infinity,
    templateResult: iconFormat,
    templateSelection: iconFormat,
    escapeMarkup: function (es) { return es; }
});

// Format icon 
function iconFormat(icon) {
    var originalOption = icon.element;
    if (!icon.id) { return icon.text; }
    var $icon = "<i class='material-icons'>" + $(icon.element).data('icon') + "</i>" + icon.text;

    return $icon;
}

    
// Limiting the number of selections
$(".max-length").select2({
    dropdownAutoWidth: true,
    width: '100%',
    maximumSelectionLength: 2,
    placeholder: "Select maximum 2 items"
});
    </code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- select2 advance -->
  <div class="row">
    <div class="col s12">
      <div class="card card-tabs">
        <div class="card-content">
          <div class="row">
            <div class="col s12 m6 l10">
              <h4 class="card-title">Advance Options</h4>
            </div>
            <div class="col s12 m6 l2">
              <ul class="tabs">
                <li class="tab col s4 p-0"><a class="active p-0" href="#view-advance">View</a></li>
                <li class="tab col s4 p-0"><a class="p-0" href="#html-advance">Html</a></li>
                <li class="tab col s4 p-0"><a class="p-0" href="#js-advance">Js</a></li>
              </ul>
            </div>
          </div>
          <div class="card-content">
            <!-- select2 tab -->
            <div id="view-advance">
              <div class="row">
                <div class="col m6">
                  <h6>Loading Remote Data</h6>
                  <p>Select2 comes with AJAX support built in, using jQuery's AJAX methods. In this example,
                    we can search for repositories using GitHub's API.</p>
                  <div class="input-field">
                    <select class="select2-data-ajax browser-default" id="select2-ajax"></select>
                  </div>
                </div>

                <div class="col m6">
                  <h6>Customizing How Results Are Matched</h6>
                  <p>Unlike other dropdowns on this page, this one matches options only if the term appears in
                    the beginning of the string as opposed to anywhere: This custom matcher uses a compatibility
                    module that is only bundled in the full version of Select2. You also have the option of using a more
                    complex matcher.</p>
                  <div class="input-field">
                    <select class="select2-customize-result browser-default" multiple="multiple"
                      id="select2-customize-result">
                      <optgroup label="Figures">
                        <option value="romboid">Romboid</option>
                        <option value="trapeze">Trapeze</option>
                        <option value="triangle">Triangle</option>
                        <option value="polygon">Polygon</option>
                      </optgroup>
                      <optgroup label="Colors">
                        <option value="red">Red</option>
                        <option value="green">Green</option>
                        <option value="blue">Blue</option>
                        <option value="purple">Purple</option>
                      </optgroup>
                    </select>
                  </div>
                </div>

                <div class="col m6">
                  <h6>Programmatic access</h6>
                  <p>Select2 supports methods that allow programmatic control of the component.</p>
                  <div class="input-field">
                    <select class="select2 js-example-programmatic browser-default" id="programmatic-single">
                      <optgroup label="Alaskan/Hawaiian Time Zone">
                        <option value="AK">Alaska</option>
                        <option value="HI">Hawaii</option>
                      </optgroup>
                      <optgroup label="Pacific Time Zone">
                        <option value="CA">California</option>
                        <option value="NV">Nevada</option>
                        <option value="OR">Oregon</option>
                        <option value="WA">Washington</option>
                      </optgroup>
                      <optgroup label="Mountain Time Zone">
                        <option value="AZ">Arizona</option>
                        <option value="CO">Colorado</option>
                        <option value="ID">Idaho</option>
                        <option value="MT">Montana</option>
                        <option value="NE">Nebraska</option>
                        <option value="NM">New Mexico</option>
                        <option value="ND">North Dakota</option>
                        <option value="UT">Utah</option>
                        <option value="WY">Wyoming</option>
                      </optgroup>
                      <optgroup label="Central Time Zone">
                        <option value="AL">Alabama</option>
                        <option value="AR">Arkansas</option>
                        <option value="IL">Illinois</option>
                        <option value="IA">Iowa</option>
                        <option value="KS">Kansas</option>
                        <option value="KY">Kentucky</option>
                        <option value="LA">Louisiana</option>
                        <option value="MN">Minnesota</option>
                        <option value="MS">Mississippi</option>
                        <option value="MO">Missouri</option>
                        <option value="OK">Oklahoma</option>
                        <option value="SD">South Dakota</option>
                        <option value="TX">Texas</option>
                        <option value="TN">Tennessee</option>
                        <option value="WI">Wisconsin</option>
                      </optgroup>
                      <optgroup label="Eastern Time Zone">
                        <option value="CT">Connecticut</option>
                        <option value="DE">Delaware</option>
                        <option value="FL">Florida</option>
                        <option value="GA">Georgia</option>
                        <option value="IN">Indiana</option>
                        <option value="ME">Maine</option>
                        <option value="MD">Maryland</option>
                        <option value="MA">Massachusetts</option>
                        <option value="MI">Michigan</option>
                        <option value="NH">New Hampshire</option>
                        <option value="NJ">New Jersey</option>
                        <option value="NY">New York</option>
                        <option value="NC">North Carolina</option>
                        <option value="OH">Ohio</option>
                        <option value="PA">Pennsylvania</option>
                        <option value="RI">Rhode Island</option>
                        <option value="SC">South Carolina</option>
                        <option value="VT">Vermont</option>
                        <option value="VA">Virginia</option>
                        <option value="WV">West Virginia</option>
                      </optgroup>
                    </select>
                  </div>
                  <div class="btn-toolbar" role="toolbar" aria-label="Programmatic control">
                    <div class="btn-group-sm" aria-label="Set Select2 option">
                      <button class="js-programmatic-set-val btn">
                        Set"California"
                      </button>
                    </div>
                    <div class="btn-group-sm" role="group" aria-label="Open and close">
                      <button class="js-programmatic-open btn">
                        Open
                      </button>
                      <button class="js-programmatic-close btn">
                        Close
                      </button>
                    </div>
                    <div class="btn-group-sm" role="group" aria-label="Initialize and destroy">
                      <button class="js-programmatic-init btn">
                        Init
                      </button>
                      <button class="js-programmatic-destroy btn">
                        Destroy
                      </button>
                    </div>
                  </div>
                </div>

                <div class="col m6">
                  <h6>Loading Array Data</h6>
                  <p>Select2 provides a way to load the data from a local array. You can provide initial
                    selections with array data by providing the option tag for the selected values, similar to how it
                    would
                    be done for a standard select.</p>
                  <div class="input-field">
                    <select class="select2-data-array browser-default" id="select2-array"></select>
                  </div>
                </div>

              </div>
            </div>
            <!-- html code tab-->
            <div id="html-advance">
              <pre><code class="language-markup">
// Loading Remote Data
&lt;select class="select2-data-ajax browser-default" id="select2-ajax"&gt;&lt;/select&gt;
// Customizing How Results Are Matched
&lt;div class="input-field"&gt;
  &lt;select class="select2-customize-result browser-default" multiple="multiple"
    id="select2-customize-result"&gt;
    &lt;optgroup label="Figures"&gt;
      &lt;option value="romboid"&gt;Romboid&lt;/option&gt;
      &lt;option value="trapeze"&gt;Trapeze&lt;/option&gt;
      &lt;option value="triangle"&gt;Triangle&lt;/option&gt;
      &lt;option value="polygon"&gt;Polygon&lt;/option&gt;
    &lt;/optgroup&gt;
    &lt;optgroup label="Colors"&gt;
      &lt;option value="red"&gt;Red&lt;/option&gt;
      &lt;option value="green"&gt;Green&lt;/option&gt;
      &lt;option value="blue"&gt;Blue&lt;/option&gt;
      &lt;option value="purple"&gt;Purple&lt;/option&gt;
    &lt;/optgroup&gt;
  &lt;/select&gt;
&lt;/div&gt;
// Programmatic access
&lt;div class="input-field"&gt;
    &lt;select class="select2 js-example-programmatic browser-default" id="programmatic-single"&gt;
      &lt;optgroup label="Alaskan/Hawaiian Time Zone"&gt;
        &lt;option value="AK"&gt;Alaska&lt;/option&gt;
        &lt;option value="HI"&gt;Hawaii&lt;/option&gt;
      &lt;/optgroup&gt;
      &lt;optgroup label="Pacific Time Zone"&gt;
        &lt;option value="CA"&gt;California&lt;/option&gt;
        &lt;option value="NV"&gt;Nevada&lt;/option&gt;
        &lt;option value="OR"&gt;Oregon&lt;/option&gt;
        &lt;option value="WA"&gt;Washington&lt;/option&gt;
      &lt;/optgroup&gt;
      &lt;optgroup label="Eastern Time Zone"&gt;
        &lt;option value="CT"&gt;Connecticut&lt;/option&gt;
        &lt;option value="DE"&gt;Delaware&lt;/option&gt;
        &lt;option value="FL"&gt;Florida&lt;/option&gt;
        &lt;option value="GA"&gt;Georgia&lt;/option&gt;
        &lt;option value="IN"&gt;Indiana&lt;/option&gt;
        &lt;option value="ME"&gt;Maine&lt;/option&gt;
        &lt;option value="MD"&gt;Maryland&lt;/option&gt;
        &lt;option value="MA"&gt;Massachusetts&lt;/option&gt;
        &lt;option value="MI"&gt;Michigan&lt;/option&gt;
        &lt;option value="NH"&gt;New Hampshire&lt;/option&gt;
        &lt;option value="NJ"&gt;New Jersey&lt;/option&gt;
        &lt;option value="NY"&gt;New York&lt;/option&gt;
        &lt;option value="NC"&gt;North Carolina&lt;/option&gt;
        &lt;option value="OH"&gt;Ohio&lt;/option&gt;
        &lt;option value="PA"&gt;Pennsylvania&lt;/option&gt;
        &lt;option value="RI"&gt;Rhode Island&lt;/option&gt;
        &lt;option value="SC"&gt;South Carolina&lt;/option&gt;
        &lt;option value="VT"&gt;Vermont&lt;/option&gt;
        &lt;option value="VA"&gt;Virginia&lt;/option&gt;
        &lt;option value="WV"&gt;West Virginia&lt;/option&gt;
      &lt;/optgroup&gt;
    &lt;/select&gt;
  &lt;/div&gt;
  &lt;div class="btn-toolbar" role="toolbar" aria-label="Programmatic control"&gt;
    &lt;div class="btn-group-sm" aria-label="Set Select2 option"&gt;
      &lt;button class="js-programmatic-set-val btn"&gt;
        Set"California"
      &lt;/button&gt;
    &lt;/div&gt;
    &lt;div class="btn-group-sm" role="group" aria-label="Open and close"&gt;
      &lt;button class="js-programmatic-open btn"&gt;
        Open
      &lt;/button&gt;
      &lt;button class="js-programmatic-close btn"&gt;
        Close
      &lt;/button&gt;
    &lt;/div&gt;
    &lt;div class="btn-group-sm" role="group" aria-label="Initialize and destroy"&gt;
      &lt;button class="js-programmatic-init btn"&gt;
        Init
      &lt;/button&gt;
      &lt;button class="js-programmatic-destroy btn"&gt;
        Destroy
      &lt;/button&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  // Loading array data
  &lt;div class="input-field"&gt;
      &lt;select class="select2-data-array browser-default" id="select2-array"&gt;&lt;/select&gt;
    &lt;/div&gt;
          </code></pre>
            </div>
            <!-- js code tab-->
            <div id="js-advance">
              <pre><code class="language-javascript">
  // Loading remote data
  $(".select2-data-ajax").select2({
      dropdownAutoWidth: true,
      width: '100%',
      ajax: {
          url: "https://api.github.com/search/repositories",
          dataType: 'json',
          delay: 250,
          data: function (params) {
              return {
                  q: params.term, // search term
                  page: params.page
              };
          },
          processResults: function (data, params) {
              // parse the results into the format expected by Select2
              // since we are using custom formatting functions we do not need to
              // alter the remote JSON data, except to indicate that infinite
              // scrolling can be used
              params.page = params.page || 1;

              return {
                  results: data.items,
                  pagination: {
                      more: (params.page * 30) &lt; data.total_count
                  }
              };
          },
          cache: true
      },
      placeholder: 'Search for a repository',
      escapeMarkup: function (markup) { return markup; }, // let our custom formatter work
      minimumInputLength: 1,
      templateResult: formatRepo,
      templateSelection: formatRepoSelection
  });

function formatRepo(repo) {
    if (repo.loading) return repo.text;

    var markup = "&lt;div class='select2-result-repository clearfix'&gt;" +
        "&lt;div class='select2-result-repository__avatar'&gt;&lt;img src='" + repo.owner.avatar_url + "' /&gt;&lt;/div&gt;" +
        "&lt;div class='select2-result-repository__meta'&gt;" +
        "&lt;div class='select2-result-repository__title'&gt;" + repo.full_name + "&lt;/div&gt;";

    if (repo.description) {
        markup += "&lt;div class='select2-result-repository__description'&gt;" + repo.description + "&lt;/div&gt;";
    }

    markup += "&lt;div class='select2-result-repository__statistics'&gt;" +
        "&lt;div class='select2-result-repository__forks'&gt;&lt;i class='icon-code-fork mr-0'&gt;&lt;/i&gt; " + repo.forks_count + " Forks&lt;/div&gt;" +
        "&lt;div class='select2-result-repository__stargazers'&gt;&lt;i class='icon-star5 mr-0'&gt;&lt;/i&gt; " + repo.stargazers_count + " Stars&lt;/div&gt;" +
        "&lt;div class='select2-result-repository__watchers'&gt;&lt;i class='icon-eye mr-0'&gt;&lt;/i&gt; " + repo.watchers_count + " Watchers&lt;/div&gt;" +
        "&lt;/div&gt;" +
        "&lt;/div&gt;&lt;/div&gt;";

    return markup;
}

function formatRepoSelection(repo) {
    return repo.full_name || repo.text;
}
// Customizing how result are matched
// Customizing how results are matched
function matchStart(term, text) {
    if (text.toUpperCase().indexOf(term.toUpperCase()) === 0) {
        return true;
    }

    return false;
}

$.fn.select2.amd.require(['select2/compat/matcher'], function (oldMatcher) {
    $(".select2-customize-result").select2({
        dropdownAutoWidth: true,
        width: '100%',
        placeholder: "Search by 'r'",
        matcher: oldMatcher(matchStart)
    });
});

// Programmatic access
var $select = $(".js-example-programmatic").select2({
    dropdownAutoWidth: true,
    width: '100%'
});
var $selectMulti = $(".js-example-programmatic-multi").select2();
$selectMulti.select2({
    dropdownAutoWidth: true,
    width: '100%',
    placeholder: "Programmatic Events"
});
$(".js-programmatic-set-val").on("click", function () { $select.val("CA").trigger("change"); });

$(".js-programmatic-open").on("click", function () { $select.select2("open"); });
$(".js-programmatic-close").on("click", function () { $select.select2("close"); });

$(".js-programmatic-init").on("click", function () { $select.select2(); });
$(".js-programmatic-destroy").on("click", function () { $select.select2("destroy"); });

$(".js-programmatic-multi-set-val").on("click", function () { $selectMulti.val(["CA", "AL"]).trigger("change"); });
$(".js-programmatic-multi-clear").on("click", function () { $selectMulti.val(null).trigger("change"); });

// Loading array data
var data = [
    { id: 0, text: 'enhancement' },
    { id: 1, text: 'bug' },
    { id: 2, text: 'duplicate' },
    { id: 3, text: 'invalid' },
    { id: 4, text: 'wontfix' }
];

$(".select2-data-array").select2({
    dropdownAutoWidth: true,
    width: '100%',
    data: data
});
    </code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- select2 size -->
  <div class="row">
    <div class="col s12">
      <div class="card card-tabs">
        <div class="card-content">
          <div class="row">
            <div class="col s12 m6 l10">
              <h4 class="card-title">Size</h4>
            </div>
            <div class="col s12 m6 l2">
              <ul class="tabs">
                <li class="tab col s4 p-0"><a class="active p-0" href="#view-size">View</a></li>
                <li class="tab col s4 p-0"><a class="p-0" href="#html-size">Html</a></li>
                <li class="tab col s4 p-0"><a class="p-0" href="#js-size">Js</a></li>
              </ul>
            </div>
          </div>
          <div class="card-content">
            <!-- select2 tab -->
            <div id="view-size">
              <div class="row">
                <div class="col s12">
                  <p>For different sizes of select2, Use classes like <code class="token function
                    language-javascript">.select2-size-sm</code> &amp;
                    <code class="token function
                  language-javascript">.select2-size-lg</code> for Large, small &amp; Extra Small Select respectively.
                  </p>
                </div>
                <div class="col s12">
                  <h6>Large</h6>
                  <div class="input-field">
                    <select class="select2-size-lg browser-default" id="large-select">
                      <option value="square">Square</option>
                      <option value="rectangle">Rectangle</option>
                      <option value="rombo">Rombo</option>
                      <option value="romboid">Romboid</option>
                      <option value="trapeze">Trapeze</option>
                      <option value="traible">Triangle</option>
                      <option value="polygon">Polygon</option>
                    </select>
                  </div>
                </div>
                <div class="col s12">
                  <h6>Default</h6>
                  <div class="input-field">
                    <select class="select2 browser-default" id="default-select">
                      <option value="square">Square</option>
                      <option value="rectangle">Rectangle</option>
                      <option value="rombo">Rombo</option>
                      <option value="romboid">Romboid</option>
                      <option value="trapeze">Trapeze</option>
                      <option value="traible">Triangle</option>
                      <option value="polygon">Polygon</option>
                    </select>
                  </div>
                </div>
                <div class="col s12">
                  <h6>Small</h6>
                  <div class="input-field">
                    <select class="select2-size-sm browser-default" id="small-select">
                      <option value="square">Square</option>
                      <option value="rectangle">Rectangle</option>
                      <option value="rombo">Rombo</option>
                      <option value="romboid">Romboid</option>
                      <option value="trapeze">Trapeze</option>
                      <option value="traible">Triangle</option>
                      <option value="polygon">Polygon</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <!-- html code tab-->
            <div id="html-size">
              <pre><code class="language-markup">
// Large            
&lt;div class="input-field"&gt;
    &lt;select class="select2-size-lg browser-default" id="large-select"&gt;
      &lt;option value="square"&gt;Square&lt;/option&gt;
      &lt;option value="rectangle"&gt;Rectangle&lt;/option&gt;
      &lt;option value="rombo"&gt;Rombo&lt;/option&gt;
      &lt;option value="romboid"&gt;Romboid&lt;/option&gt;
      &lt;option value="trapeze"&gt;Trapeze&lt;/option&gt;
      &lt;option value="traible"&gt;Triangle&lt;/option&gt;
      &lt;option value="polygon"&gt;Polygon&lt;/option&gt;
    &lt;/select&gt;
  &lt;/div&gt;
  // Small
  &lt;div class="input-field"&gt;
      &lt;select class="select2-size-sm browser-default" id="small-select"&gt;
        &lt;option value="square"&gt;Square&lt;/option&gt;
        &lt;option value="rectangle"&gt;Rectangle&lt;/option&gt;
        &lt;option value="rombo"&gt;Rombo&lt;/option&gt;
        &lt;option value="romboid"&gt;Romboid&lt;/option&gt;
        &lt;option value="trapeze"&gt;Trapeze&lt;/option&gt;
        &lt;option value="traible"&gt;Triangle&lt;/option&gt;
        &lt;option value="polygon"&gt;Polygon&lt;/option&gt;
      &lt;/select&gt;
    &lt;/div&gt;
</code></pre>
            </div>
            <!-- js code tab-->
            <div id="js-size">
              <pre><code class="language-javascript">
// Large
$('.select2-size-lg').select2({
    dropdownAutoWidth: true,
    width: '100%',
    containerCssClass: 'select-lg'
});

// Small
$('.select2-size-sm').select2({
    dropdownAutoWidth: true,
    width: '100%',
    containerCssClass: 'select-sm'
});
  </code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col s12">
      <div class="card card-tabs">
        <div class="card-content">
          <div class="row">
            <div class="col s12 m6 l10">
              <h4 class="card-title">Multi Select Size</h4>
            </div>
            <div class="col s12 m6 l2">
              <ul class="tabs">
                <li class="tab col s4 p-0"><a class="active p-0" href="#view-multi-size">View</a></li>
                <li class="tab col s4 p-0"><a class="p-0" href="#html-multi-size">Html</a></li>
                <li class="tab col s4 p-0"><a class="p-0" href="#js-multi-size">Js</a></li>
              </ul>
            </div>
          </div>
          <div class="card-content">
            <!-- select2 tab -->
            <div id="view-multi-size">
              <div class="row">
                <div class="col s12">
                  <p>For different sizes of select2, Use classes like <code class="token function
                  language-javascript">.select2-size-sm</code> &amp;
                    <code class="token function
                  language-javascript">.select2-size-lg</code> for Large, small &amp; Extra Small Select respectively.
                  </p>
                </div>
                <div class="col s12">
                  <h6>Large</h6>
                  <div class="input-field">
                    <select class="select2-size-lg browser-default" multiple="multiple" id="large-select-multi">
                      <option value="square" selected>Square</option>
                      <option value="rectangle">Rectangle</option>
                      <option value="rombo">Rombo</option>
                      <option value="romboid">Romboid</option>
                      <option value="trapeze">Trapeze</option>
                      <option value="traible">Triangle</option>
                      <option value="polygon">Polygon</option>
                    </select>
                  </div>
                </div>
                <div class="col s12">
                  <h6>Default</h6>
                  <div class="input-field">
                    <select class="select2 browser-default" multiple="multiple" id="default-select-multi">
                      <option value="square">Square</option>
                      <option value="rectangle">Rectangle</option>
                      <option value="rombo">Rombo</option>
                      <option value="romboid">Romboid</option>
                      <option value="trapeze">Trapeze</option>
                      <option value="traible">Triangle</option>
                      <option value="polygon" selected>Polygon</option>
                    </select>
                  </div>
                </div>
                <div class="col s12">
                  <h6>Small</h6>
                  <div class="input-field">
                    <select class="select2-size-sm browser-default" multiple="multiple" id="small-select-multi">
                      <option value="square">Square</option>
                      <option value="rectangle">Rectangle</option>
                      <option value="rombo" selected>Rombo</option>
                      <option value="romboid">Romboid</option>
                      <option value="trapeze">Trapeze</option>
                      <option value="traible">Triangle</option>
                      <option value="polygon">Polygon</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <!-- html code tab-->
            <div id="html-multi-size">
              <pre><code class="language-markup">
//large
&lt;div class="input-field"&gt;
    &lt;select class="select2-size-lg browser-default" multiple="multiple" id="large-select-multi"&gt;
      &lt;option value="square" selected&gt;Square&lt;/option&gt;
      &lt;option value="rectangle"&gt;Rectangle&lt;/option&gt;
      &lt;option value="rombo"&gt;Rombo&lt;/option&gt;
      &lt;option value="romboid"&gt;Romboid&lt;/option&gt;
      &lt;option value="trapeze"&gt;Trapeze&lt;/option&gt;
      &lt;option value="traible"&gt;Triangle&lt;/option&gt;
      &lt;option value="polygon"&gt;Polygon&lt;/option&gt;
    &lt;/select&gt;
  &lt;/div&gt;
  //small
&lt;div class="input-field"&gt;
  &lt;select class="select2-size-sm browser-default" multiple="multiple" id="small-select-multi"&gt;
    &lt;option value="square"&gt;Square&lt;/option&gt;
    &lt;option value="rectangle"&gt;Rectangle&lt;/option&gt;
    &lt;option value="rombo" selected&gt;Rombo&lt;/option&gt;
    &lt;option value="romboid"&gt;Romboid&lt;/option&gt;
    &lt;option value="trapeze"&gt;Trapeze&lt;/option&gt;
    &lt;option value="traible"&gt;Triangle&lt;/option&gt;
    &lt;option value="polygon"&gt;Polygon&lt;/option&gt;
  &lt;/select&gt;
&lt;/div&gt;
  </code></pre>
            </div>
            <!-- js code tab-->
            <div id="js-multi-size">
              <pre><code class="language-javascript">
// Large
$('.select2-size-lg').select2({
    dropdownAutoWidth: true,
    width: '100%',
    containerCssClass: 'select-lg'
});

// Small
$('.select2-size-sm').select2({
    dropdownAutoWidth: true,
    width: '100%',
    containerCssClass: 'select-sm'
}); 
</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div><!-- START RIGHT SIDEBAR NAV -->
<aside id="right-sidebar-nav">
  <div id="slide-out-right" class="slide-out-right-sidenav sidenav rightside-navigation">
    <div class="row">
      <div class="slide-out-right-title">
        <div class="col s12 border-bottom-1 pb-0 pt-1">
          <div class="row">
            <div class="col s2 pr-0 center">
              <i class="material-icons vertical-text-middle"><a href="#" class="sidenav-close">clear</a></i>
            </div>
            <div class="col s10 pl-0">
              <ul class="tabs">
                <li class="tab col s4 p-0">
                  <a href="#messages" class="active">
                    <span>Messages</span>
                  </a>
                </li>
                <li class="tab col s4 p-0">
                  <a href="#settings">
                    <span>Settings</span>
                  </a>
                </li>
                <li class="tab col s4 p-0">
                  <a href="#activity">
                    <span>Activity</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="slide-out-right-body row pl-3">
        <div id="messages" class="col s12 pb-0">
          <div class="collection border-none mb-0">
            <input class="header-search-input mt-4 mb-2" type="text" name="Search" placeholder="Search Messages" />
            <ul class="collection right-sidebar-chat p-0 mb-0">
              <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                data-target="slide-out-chat">
                <span class="avatar-status avatar-online avatar-50"><img
                    src="app-assets/images/avatar/avatar-7.png" alt="avatar" />
                  <i></i>
                </span>
                <div class="user-content">
                  <h6 class="line-height-0">Elizabeth Elliott</h6>
                  <p class="medium-small blue-grey-text text-lighten-3 pt-3">Thank you</p>
                </div>
                <span class="secondary-content medium-small">5.00 AM</span>
              </li>
              <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                data-target="slide-out-chat">
                <span class="avatar-status avatar-online avatar-50"><img
                    src="app-assets/images/avatar/avatar-1.png" alt="avatar" />
                  <i></i>
                </span>
                <div class="user-content">
                  <h6 class="line-height-0">Mary Adams</h6>
                  <p class="medium-small blue-grey-text text-lighten-3 pt-3">Hello Boo</p>
                </div>
                <span class="secondary-content medium-small">4.14 AM</span>
              </li>
              <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                data-target="slide-out-chat">
                <span class="avatar-status avatar-off avatar-50"><img
                    src="app-assets/images/avatar/avatar-2.png" alt="avatar" />
                  <i></i>
                </span>
                <div class="user-content">
                  <h6 class="line-height-0">Caleb Richards</h6>
                  <p class="medium-small blue-grey-text text-lighten-3 pt-3">Hello Boo</p>
                </div>
                <span class="secondary-content medium-small">4.14 AM</span>
              </li>
              <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                data-target="slide-out-chat">
                <span class="avatar-status avatar-online avatar-50"><img
                    src="app-assets/images/avatar/avatar-3.png" alt="avatar" />
                  <i></i>
                </span>
                <div class="user-content">
                  <h6 class="line-height-0">Caleb Richards</h6>
                  <p class="medium-small blue-grey-text text-lighten-3 pt-3">Keny !</p>
                </div>
                <span class="secondary-content medium-small">9.00 PM</span>
              </li>
              <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                data-target="slide-out-chat">
                <span class="avatar-status avatar-online avatar-50"><img
                    src="app-assets/images/avatar/avatar-4.png" alt="avatar" />
                  <i></i>
                </span>
                <div class="user-content">
                  <h6 class="line-height-0">June Lane</h6>
                  <p class="medium-small blue-grey-text text-lighten-3 pt-3">Ohh God</p>
                </div>
                <span class="secondary-content medium-small">4.14 AM</span>
              </li>
              <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                data-target="slide-out-chat">
                <span class="avatar-status avatar-off avatar-50"><img
                    src="app-assets/images/avatar/avatar-5.png" alt="avatar" />
                  <i></i>
                </span>
                <div class="user-content">
                  <h6 class="line-height-0">Edward Fletcher</h6>
                  <p class="medium-small blue-grey-text text-lighten-3 pt-3">Love you</p>
                </div>
                <span class="secondary-content medium-small">5.15 PM</span>
              </li>
              <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                data-target="slide-out-chat">
                <span class="avatar-status avatar-online avatar-50"><img
                    src="app-assets/images/avatar/avatar-6.png" alt="avatar" />
                  <i></i>
                </span>
                <div class="user-content">
                  <h6 class="line-height-0">Crystal Bates</h6>
                  <p class="medium-small blue-grey-text text-lighten-3 pt-3">Can we</p>
                </div>
                <span class="secondary-content medium-small">8.00 AM</span>
              </li>
              <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                data-target="slide-out-chat">
                <span class="avatar-status avatar-off avatar-50"><img
                    src="app-assets/images/avatar/avatar-7.png" alt="avatar" />
                  <i></i>
                </span>
                <div class="user-content">
                  <h6 class="line-height-0">Nathan Watts</h6>
                  <p class="medium-small blue-grey-text text-lighten-3 pt-3">Great!</p>
                </div>
                <span class="secondary-content medium-small">9.53 PM</span>
              </li>
              <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                data-target="slide-out-chat">
                <span class="avatar-status avatar-off avatar-50"><img
                    src="app-assets/images/avatar/avatar-8.png" alt="avatar" />
                  <i></i>
                </span>
                <div class="user-content">
                  <h6 class="line-height-0">Willard Wood</h6>
                  <p class="medium-small blue-grey-text text-lighten-3 pt-3">Do it</p>
                </div>
                <span class="secondary-content medium-small">4.20 AM</span>
              </li>
              <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                data-target="slide-out-chat">
                <span class="avatar-status avatar-online avatar-50"><img
                    src="app-assets/images/avatar/avatar-1.png" alt="avatar" />
                  <i></i>
                </span>
                <div class="user-content">
                  <h6 class="line-height-0">Ronnie Ellis</h6>
                  <p class="medium-small blue-grey-text text-lighten-3 pt-3">Got that</p>
                </div>
                <span class="secondary-content medium-small">5.20 AM</span>
              </li>
              <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                data-target="slide-out-chat">
                <span class="avatar-status avatar-online avatar-50"><img
                    src="app-assets/images/avatar/avatar-9.png" alt="avatar" />
                  <i></i>
                </span>
                <div class="user-content">
                  <h6 class="line-height-0">Daniel Russell</h6>
                  <p class="medium-small blue-grey-text text-lighten-3 pt-3">Thank you</p>
                </div>
                <span class="secondary-content medium-small">12.00 AM</span>
              </li>
              <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                data-target="slide-out-chat">
                <span class="avatar-status avatar-off avatar-50"><img
                    src="app-assets/images/avatar/avatar-10.png" alt="avatar" />
                  <i></i>
                </span>
                <div class="user-content">
                  <h6 class="line-height-0">Sarah Graves</h6>
                  <p class="medium-small blue-grey-text text-lighten-3 pt-3">Okay you</p>
                </div>
                <span class="secondary-content medium-small">11.14 PM</span>
              </li>
              <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                data-target="slide-out-chat">
                <span class="avatar-status avatar-off avatar-50"><img
                    src="app-assets/images/avatar/avatar-11.png" alt="avatar" />
                  <i></i>
                </span>
                <div class="user-content">
                  <h6 class="line-height-0">Andrew Hoffman</h6>
                  <p class="medium-small blue-grey-text text-lighten-3 pt-3">Can do</p>
                </div>
                <span class="secondary-content medium-small">7.30 PM</span>
              </li>
              <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                data-target="slide-out-chat">
                <span class="avatar-status avatar-online avatar-50"><img
                    src="app-assets/images/avatar/avatar-12.png" alt="avatar" />
                  <i></i>
                </span>
                <div class="user-content">
                  <h6 class="line-height-0">Camila Lynch</h6>
                  <p class="medium-small blue-grey-text text-lighten-3 pt-3">Leave it</p>
                </div>
                <span class="secondary-content medium-small">2.00 PM</span>
              </li>
            </ul>
          </div>
        </div>
        <div id="settings" class="col s12">
          <p class="setting-header mt-8 mb-3 ml-5 font-weight-900">GENERAL SETTINGS</p>
          <ul class="collection border-none">
            <li class="collection-item border-none">
              <div class="m-0">
                <span>Notifications</span>
                <div class="switch right">
                  <label>
                    <input checked type="checkbox" />
                    <span class="lever"></span>
                  </label>
                </div>
              </div>
            </li>
            <li class="collection-item border-none">
              <div class="m-0">
                <span>Show recent activity</span>
                <div class="switch right">
                  <label>
                    <input type="checkbox" />
                    <span class="lever"></span>
                  </label>
                </div>
              </div>
            </li>
            <li class="collection-item border-none">
              <div class="m-0">
                <span>Show recent activity</span>
                <div class="switch right">
                  <label>
                    <input type="checkbox" />
                    <span class="lever"></span>
                  </label>
                </div>
              </div>
            </li>
            <li class="collection-item border-none">
              <div class="m-0">
                <span>Show Task statistics</span>
                <div class="switch right">
                  <label>
                    <input type="checkbox" />
                    <span class="lever"></span>
                  </label>
                </div>
              </div>
            </li>
            <li class="collection-item border-none">
              <div class="m-0">
                <span>Show your emails</span>
                <div class="switch right">
                  <label>
                    <input type="checkbox" />
                    <span class="lever"></span>
                  </label>
                </div>
              </div>
            </li>
            <li class="collection-item border-none">
              <div class="m-0">
                <span>Email Notifications</span>
                <div class="switch right">
                  <label>
                    <input checked type="checkbox" />
                    <span class="lever"></span>
                  </label>
                </div>
              </div>
            </li>
          </ul>
          <p class="setting-header mt-7 mb-3 ml-5 font-weight-900">SYSTEM SETTINGS</p>
          <ul class="collection border-none">
            <li class="collection-item border-none">
              <div class="m-0">
                <span>System Logs</span>
                <div class="switch right">
                  <label>
                    <input type="checkbox" />
                    <span class="lever"></span>
                  </label>
                </div>
              </div>
            </li>
            <li class="collection-item border-none">
              <div class="m-0">
                <span>Error Reporting</span>
                <div class="switch right">
                  <label>
                    <input type="checkbox" />
                    <span class="lever"></span>
                  </label>
                </div>
              </div>
            </li>
            <li class="collection-item border-none">
              <div class="m-0">
                <span>Applications Logs</span>
                <div class="switch right">
                  <label>
                    <input checked type="checkbox" />
                    <span class="lever"></span>
                  </label>
                </div>
              </div>
            </li>
            <li class="collection-item border-none">
              <div class="m-0">
                <span>Backup Servers</span>
                <div class="switch right">
                  <label>
                    <input type="checkbox" />
                    <span class="lever"></span>
                  </label>
                </div>
              </div>
            </li>
            <li class="collection-item border-none">
              <div class="m-0">
                <span>Audit Logs</span>
                <div class="switch right">
                  <label>
                    <input type="checkbox" />
                    <span class="lever"></span>
                  </label>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div id="activity" class="col s12">
          <div class="activity">
            <p class="mt-5 mb-0 ml-5 font-weight-900">SYSTEM LOGS</p>
            <ul class="widget-timeline mb-0">
              <li class="timeline-items timeline-icon-green active">
                <div class="timeline-time">Today</div>
                <h6 class="timeline-title">Homepage mockup design</h6>
                <p class="timeline-text">Melissa liked your activity.</p>
                <div class="timeline-content orange-text">Important</div>
              </li>
              <li class="timeline-items timeline-icon-cyan active">
                <div class="timeline-time">10 min</div>
                <h6 class="timeline-title">Melissa liked your activity Drinks.</h6>
                <p class="timeline-text">Here are some news feed interactions concepts.</p>
                <div class="timeline-content green-text">Resolved</div>
              </li>
              <li class="timeline-items timeline-icon-red active">
                <div class="timeline-time">30 mins</div>
                <h6 class="timeline-title">12 new users registered</h6>
                <p class="timeline-text">Here are some news feed interactions concepts.</p>
                <div class="timeline-content">
                  <img src="app-assets/images/icon/pdf.png" alt="document" height="30" width="25"
                    class="mr-1">Registration.doc
                </div>
              </li>
              <li class="timeline-items timeline-icon-indigo active">
                <div class="timeline-time">2 Hrs</div>
                <h6 class="timeline-title">Tina is attending your activity</h6>
                <p class="timeline-text">Here are some news feed interactions concepts.</p>
                <div class="timeline-content">
                  <img src="app-assets/images/icon/pdf.png" alt="document" height="30" width="25"
                    class="mr-1">Activity.doc
                </div>
              </li>
              <li class="timeline-items timeline-icon-orange">
                <div class="timeline-time">5 hrs</div>
                <h6 class="timeline-title">Josh is now following you</h6>
                <p class="timeline-text">Here are some news feed interactions concepts.</p>
                <div class="timeline-content red-text">Pending</div>
              </li>
            </ul>
            <p class="mt-5 mb-0 ml-5 font-weight-900">APPLICATIONS LOGS</p>
            <ul class="widget-timeline mb-0">
              <li class="timeline-items timeline-icon-green active">
                <div class="timeline-time">Just now</div>
                <h6 class="timeline-title">New order received urgent</h6>
                <p class="timeline-text">Melissa liked your activity.</p>
                <div class="timeline-content orange-text">Important</div>
              </li>
              <li class="timeline-items timeline-icon-cyan active">
                <div class="timeline-time">05 min</div>
                <h6 class="timeline-title">System shutdown.</h6>
                <p class="timeline-text">Here are some news feed interactions concepts.</p>
                <div class="timeline-content blue-text">Urgent</div>
              </li>
              <li class="timeline-items timeline-icon-red">
                <div class="timeline-time">20 mins</div>
                <h6 class="timeline-title">Database overloaded 89%</h6>
                <p class="timeline-text">Here are some news feed interactions concepts.</p>
                <div class="timeline-content">
                  <img src="app-assets/images/icon/pdf.png" alt="document" height="30" width="25"
                    class="mr-1">Database-log.doc
                </div>
              </li>
            </ul>
            <p class="mt-5 mb-0 ml-5 font-weight-900">SERVER LOGS</p>
            <ul class="widget-timeline mb-0">
              <li class="timeline-items timeline-icon-green active">
                <div class="timeline-time">10 min</div>
                <h6 class="timeline-title">System error</h6>
                <p class="timeline-text">Melissa liked your activity.</p>
                <div class="timeline-content red-text">Error</div>
              </li>
              <li class="timeline-items timeline-icon-cyan">
                <div class="timeline-time">1 min</div>
                <h6 class="timeline-title">Production server down.</h6>
                <p class="timeline-text">Here are some news feed interactions concepts.</p>
                <div class="timeline-content blue-text">Urgent</div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Slide Out Chat -->
  <ul id="slide-out-chat" class="sidenav slide-out-right-sidenav-chat">
    <li class="center-align pt-2 pb-2 sidenav-close chat-head">
      <a href="#!"><i class="material-icons mr-0">chevron_left</i>Elizabeth Elliott</a>
    </li>
    <li class="chat-body">
      <ul class="collection">
        <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
          <span class="avatar-status avatar-online avatar-50"><img src="app-assets/images/avatar/avatar-7.png"
              alt="avatar" />
          </span>
          <div class="user-content speech-bubble">
            <p class="medium-small">hello!</p>
          </div>
        </li>
        <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
          <div class="user-content speech-bubble-right">
            <p class="medium-small">How can we help? We're here for you!</p>
          </div>
        </li>
        <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
          <span class="avatar-status avatar-online avatar-50"><img src="app-assets/images/avatar/avatar-7.png"
              alt="avatar" />
          </span>
          <div class="user-content speech-bubble">
            <p class="medium-small">I am looking for the best admin template.?</p>
          </div>
        </li>
        <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
          <div class="user-content speech-bubble-right">
            <p class="medium-small">Materialize admin is the responsive materializecss admin template.</p>
          </div>
        </li>

        <li class="collection-item display-grid width-100 center-align">
          <p>8:20 a.m.</p>
        </li>

        <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
          <span class="avatar-status avatar-online avatar-50"><img src="app-assets/images/avatar/avatar-7.png"
              alt="avatar" />
          </span>
          <div class="user-content speech-bubble">
            <p class="medium-small">Ohh! very nice</p>
          </div>
        </li>
        <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
          <div class="user-content speech-bubble-right">
            <p class="medium-small">Thank you.</p>
          </div>
        </li>
        <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
          <span class="avatar-status avatar-online avatar-50"><img src="app-assets/images/avatar/avatar-7.png"
              alt="avatar" />
          </span>
          <div class="user-content speech-bubble">
            <p class="medium-small">How can I purchase it?</p>
          </div>
        </li>

        <li class="collection-item display-grid width-100 center-align">
          <p>9:00 a.m.</p>
        </li>

        <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
          <div class="user-content speech-bubble-right">
            <p class="medium-small">From ThemeForest.</p>
          </div>
        </li>
        <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
          <div class="user-content speech-bubble-right">
            <p class="medium-small">Only $24</p>
          </div>
        </li>
        <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
          <span class="avatar-status avatar-online avatar-50"><img src="app-assets/images/avatar/avatar-7.png"
              alt="avatar" />
          </span>
          <div class="user-content speech-bubble">
            <p class="medium-small">Ohh! Thank you.</p>
          </div>
        </li>
        <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
          <span class="avatar-status avatar-online avatar-50"><img src="app-assets/images/avatar/avatar-7.png"
              alt="avatar" />
          </span>
          <div class="user-content speech-bubble">
            <p class="medium-small">I will purchase it for sure.</p>
          </div>
        </li>
        <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
          <div class="user-content speech-bubble-right">
            <p class="medium-small">Great, Feel free to get in touch on</p>
          </div>
        </li>
        <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
          <div class="user-content speech-bubble-right">
            <p class="medium-small">https://pixinvent.ticksy.com/</p>
          </div>
        </li>
      </ul>
    </li>
    <li class="center-align chat-footer">
      <form class="col s12" onsubmit="slideOutChat()" action="javascript:void(0);">
        <div class="input-field">
          <input id="icon_prefix" type="text" class="search" />
          <label for="icon_prefix">Type here..</label>
          <a onclick="slideOutChat()"><i class="material-icons prefix">send</i></a>
        </div>
      </form>
    </li>
  </ul>
</aside>
<!-- END RIGHT SIDEBAR NAV --><div style="bottom: 50px; right: 19px;" class="fixed-action-btn direction-top"><a class="btn-floating btn-large gradient-45deg-light-blue-cyan gradient-shadow"><i class="material-icons">add</i></a>
    <ul>
        <li><a href="css-helpers.html" class="btn-floating blue"><i class="material-icons">help_outline</i></a></li>
        <li><a href="cards-extended.html" class="btn-floating green"><i class="material-icons">widgets</i></a></li>
        <li><a href="app-calendar.html" class="btn-floating amber"><i class="material-icons">today</i></a></li>
        <li><a href="app-email.html" class="btn-floating red"><i class="material-icons">mail_outline</i></a></li>
    </ul>
</div>
          </div>
          <div class="content-overlay"></div>
        </div>
      </div>
    </div>
    <!-- END: Page Main-->
    <!-- BEGIN: Footer-->

    <footer class="page-footer footer footer-static footer-dark gradient-45deg-indigo-purple gradient-shadow navbar-border navbar-shadow">
      <div class="footer-copyright">
        <div class="container"><span>&copy; 2020          <a href="http://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank">PIXINVENT</a> All rights reserved.</span><span class="right hide-on-small-only">Design and Developed by <a href="https://pixinvent.com/">PIXINVENT</a></span></div>
      </div>
    </footer>

    <!-- END: Footer-->
    <!-- BEGIN VENDOR JS-->
    <script src="app-assets/js/vendors.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="app-assets/vendors/select2/select2.full.min.js"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="app-assets/js/plugins.min.js"></script>
    <script src="app-assets/js/search.min.js"></script>
    <script src="app-assets/js/custom/custom-script.min.js"></script>
    <script src="app-assets/js/scripts/customizer.min.js"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="app-assets/js/scripts/form-select2.min.js"></script>
    <!-- END PAGE LEVEL JS-->
  </body>

<!-- Mirrored from pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-modern-menu-template/form-select2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Sep 2021 11:29:27 GMT -->
</html>