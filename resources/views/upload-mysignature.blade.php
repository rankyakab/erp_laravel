@include("layouts.app-title")
<body>
<style>
	/*!

 =========================================================
 * Now UI Dashboard Pro - v1.4.1
 =========================================================

 * Product Page: https://www.creative-tim.com/product/now-ui-dashboard-pro
 * Copyright 2019 Creative Tim (http://www.creative-tim.com)

 * Designed by www.invisionapp.com Coded by www.creative-tim.com

 =========================================================

 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

 */

/*     brand Colors              */

/*      light colors         */

.btn,
.navbar .navbar-nav>a.btn {
  border-width: 2px;
  font-weight: 400;
  font-size: 0.8571em;
  line-height: 1.35em;
  border: none;
  margin: 10px 1px;
  border-radius: 0.1875rem;
  padding: 11px 22px;
  cursor: pointer;
  background-color: #888;
  color: #FFFFFF;
}

.btn:hover,
.btn:focus,
.btn:not(:disabled):not(.disabled):active,
.btn:not(:disabled):not(.disabled).active,
.btn:not(:disabled):not(.disabled):active:focus,
.btn:not(:disabled):not(.disabled).active:focus,
.btn:active:hover,
.btn.active:hover,
.show>.btn.dropdown-toggle,
.show>.btn.dropdown-toggle:focus,
.show>.btn.dropdown-toggle:hover,
.navbar .navbar-nav>a.btn:hover,
.navbar .navbar-nav>a.btn:focus,
.navbar .navbar-nav>a.btn:not(:disabled):not(.disabled):active,
.navbar .navbar-nav>a.btn:not(:disabled):not(.disabled).active,
.navbar .navbar-nav>a.btn:not(:disabled):not(.disabled):active:focus,
.navbar .navbar-nav>a.btn:not(:disabled):not(.disabled).active:focus,
.navbar .navbar-nav>a.btn:active:hover,
.navbar .navbar-nav>a.btn.active:hover,
.show>.navbar .navbar-nav>a.btn.dropdown-toggle,
.show>.navbar .navbar-nav>a.btn.dropdown-toggle:focus,
.show>.navbar .navbar-nav>a.btn.dropdown-toggle:hover {
  background-color: #979797;
  color: #FFFFFF;
  box-shadow: none;
  border-color: #979797;
}

.btn:not([data-action]):not([class*="btn-outline-"]):hover,
.navbar .navbar-nav>a.btn:not([data-action]):not([class*="btn-outline-"]):hover {
  box-shadow: 0 3px 8px 0 rgba(0, 0, 0, 0.17);
}

.btn.disabled,
.btn.disabled:hover,
.btn.disabled:focus,
.btn.disabled.focus,
.btn.disabled:active,
.btn.disabled.active,
.btn:disabled,
.btn:disabled:hover,
.btn:disabled:focus,
.btn:disabled.focus,
.btn:disabled:active,
.btn:disabled.active,
.btn[disabled],
.btn[disabled]:hover,
.btn[disabled]:focus,
.btn[disabled].focus,
.btn[disabled]:active,
.btn[disabled].active,
fieldset[disabled] .btn,
fieldset[disabled] .btn:hover,
fieldset[disabled] .btn:focus,
fieldset[disabled] .btn.focus,
fieldset[disabled] .btn:active,
fieldset[disabled] .btn.active,
.navbar .navbar-nav>a.btn.disabled,
.navbar .navbar-nav>a.btn.disabled:hover,
.navbar .navbar-nav>a.btn.disabled:focus,
.navbar .navbar-nav>a.btn.disabled.focus,
.navbar .navbar-nav>a.btn.disabled:active,
.navbar .navbar-nav>a.btn.disabled.active,
.navbar .navbar-nav>a.btn:disabled,
.navbar .navbar-nav>a.btn:disabled:hover,
.navbar .navbar-nav>a.btn:disabled:focus,
.navbar .navbar-nav>a.btn:disabled.focus,
.navbar .navbar-nav>a.btn:disabled:active,
.navbar .navbar-nav>a.btn:disabled.active,
.navbar .navbar-nav>a.btn[disabled],
.navbar .navbar-nav>a.btn[disabled]:hover,
.navbar .navbar-nav>a.btn[disabled]:focus,
.navbar .navbar-nav>a.btn[disabled].focus,
.navbar .navbar-nav>a.btn[disabled]:active,
.navbar .navbar-nav>a.btn[disabled].active,
fieldset[disabled] .navbar .navbar-nav>a.btn,
fieldset[disabled] .navbar .navbar-nav>a.btn:hover,
fieldset[disabled] .navbar .navbar-nav>a.btn:focus,
fieldset[disabled] .navbar .navbar-nav>a.btn.focus,
fieldset[disabled] .navbar .navbar-nav>a.btn:active,
fieldset[disabled] .navbar .navbar-nav>a.btn.active {
  background-color: #888;
  border-color: #888;
}

.btn.btn-link,
.navbar .navbar-nav>a.btn.btn-link {
  color: #888;
}

.btn.btn-link:hover,
.btn.btn-link:focus,
.btn.btn-link:active,
.navbar .navbar-nav>a.btn.btn-link:hover,
.navbar .navbar-nav>a.btn.btn-link:focus,
.navbar .navbar-nav>a.btn.btn-link:active {
  background-color: transparent;
  color: #979797;
  text-decoration: none;
  box-shadow: none;
}

.btn:hover,
.btn:focus,
.navbar .navbar-nav>a.btn:hover,
.navbar .navbar-nav>a.btn:focus {
  opacity: 1;
  filter: alpha(opacity=100);
  outline: 0 !important;
}

.btn:active,
.btn.active,
.open>.btn.dropdown-toggle,
.navbar .navbar-nav>a.btn:active,
.navbar .navbar-nav>a.btn.active,
.open>.navbar .navbar-nav>a.btn.dropdown-toggle {
  -webkit-box-shadow: none;
  box-shadow: none;
  outline: 0 !important;
}

.btn .badge,
.navbar .navbar-nav>a.btn .badge {
  margin: 0;
}

.btn.btn-icon,
.navbar .navbar-nav>a.btn.btn-icon {
  height: 2.375rem;
  min-width: 2.375rem;
  width: 2.375rem;
  padding: 0;
  font-size: 0.9375rem;
  overflow: hidden;
  position: relative;
  line-height: normal;
}

.btn.btn-icon[class*="btn-outline-"],
.navbar .navbar-nav>a.btn.btn-icon[class*="btn-outline-"] {
  padding: 0 !important;
}

.btn.btn-icon.btn-sm,
.navbar .navbar-nav>a.btn.btn-icon.btn-sm {
  height: 1.875rem;
  min-width: 1.875rem;
  width: 1.875rem;
}

.btn.btn-icon.btn-sm .fa,
.btn.btn-icon.btn-sm .far,
.btn.btn-icon.btn-sm .fas,
.btn.btn-icon.btn-sm .now-ui-icons,
.navbar .navbar-nav>a.btn.btn-icon.btn-sm .fa,
.navbar .navbar-nav>a.btn.btn-icon.btn-sm .far,
.navbar .navbar-nav>a.btn.btn-icon.btn-sm .fas,
.navbar .navbar-nav>a.btn.btn-icon.btn-sm .now-ui-icons {
  font-size: 0.6875rem;
}

.btn.btn-icon.btn-lg,
.navbar .navbar-nav>a.btn.btn-icon.btn-lg {
  height: 3.6rem;
  min-width: 3.6rem;
  width: 3.6rem;
}

.btn.btn-icon.btn-lg .fa,
.btn.btn-icon.btn-lg .far,
.btn.btn-icon.btn-lg .fas,
.btn.btn-icon.btn-lg .now-ui-icons,
.navbar .navbar-nav>a.btn.btn-icon.btn-lg .fa,
.navbar .navbar-nav>a.btn.btn-icon.btn-lg .far,
.navbar .navbar-nav>a.btn.btn-icon.btn-lg .fas,
.navbar .navbar-nav>a.btn.btn-icon.btn-lg .now-ui-icons {
  font-size: 1.325rem;
}

.btn.btn-icon:not(.btn-footer) .now-ui-icons,
.btn.btn-icon:not(.btn-footer) .fa,
.btn.btn-icon:not(.btn-footer) .far,
.btn.btn-icon:not(.btn-footer) .fas,
.navbar .navbar-nav>a.btn.btn-icon:not(.btn-footer) .now-ui-icons,
.navbar .navbar-nav>a.btn.btn-icon:not(.btn-footer) .fa,
.navbar .navbar-nav>a.btn.btn-icon:not(.btn-footer) .far,
.navbar .navbar-nav>a.btn.btn-icon:not(.btn-footer) .fas {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-12px, -12px);
  line-height: 1.5626rem;
  width: 24px;
}

.btn:not(.btn-icon) .now-ui-icons,
.navbar .navbar-nav>a.btn:not(.btn-icon) .now-ui-icons {
  position: relative;
  top: 1px;
}

.btn-primary {
  background-color: #f96332;
  color: #FFFFFF;
}

.btn-primary:hover,
.btn-primary:focus,
.btn-primary:not(:disabled):not(.disabled):active,
.btn-primary:not(:disabled):not(.disabled).active,
.btn-primary:not(:disabled):not(.disabled):active:focus,
.btn-primary:not(:disabled):not(.disabled).active:focus,
.btn-primary:active:hover,
.btn-primary.active:hover,
.show>.btn-primary.dropdown-toggle,
.show>.btn-primary.dropdown-toggle:focus,
.show>.btn-primary.dropdown-toggle:hover {
  background-color: #fa7a50;
  color: #FFFFFF;
  box-shadow: none;
  border-color: #fa7a50;
}

.btn-primary:not([data-action]):not([class*="btn-outline-"]):hover {
  box-shadow: 0 3px 8px 0 rgba(0, 0, 0, 0.17);
}

.btn-primary.disabled,
.btn-primary.disabled:hover,
.btn-primary.disabled:focus,
.btn-primary.disabled.focus,
.btn-primary.disabled:active,
.btn-primary.disabled.active,
.btn-primary:disabled,
.btn-primary:disabled:hover,
.btn-primary:disabled:focus,
.btn-primary:disabled.focus,
.btn-primary:disabled:active,
.btn-primary:disabled.active,
.btn-primary[disabled],
.btn-primary[disabled]:hover,
.btn-primary[disabled]:focus,
.btn-primary[disabled].focus,
.btn-primary[disabled]:active,
.btn-primary[disabled].active,
fieldset[disabled] .btn-primary,
fieldset[disabled] .btn-primary:hover,
fieldset[disabled] .btn-primary:focus,
fieldset[disabled] .btn-primary.focus,
fieldset[disabled] .btn-primary:active,
fieldset[disabled] .btn-primary.active {
  background-color: #f96332;
  border-color: #f96332;
}

.btn-primary.btn-link {
  color: #f96332;
}

.btn-primary.btn-link:hover,
.btn-primary.btn-link:focus,
.btn-primary.btn-link:active {
  background-color: transparent;
  color: #fa7a50;
  text-decoration: none;
  box-shadow: none;
}

.btn-success {
  background-color: #18ce0f;
  color: #FFFFFF;
}

.btn-success:hover,
.btn-success:focus,
.btn-success:not(:disabled):not(.disabled):active,
.btn-success:not(:disabled):not(.disabled).active,
.btn-success:not(:disabled):not(.disabled):active:focus,
.btn-success:not(:disabled):not(.disabled).active:focus,
.btn-success:active:hover,
.btn-success.active:hover,
.show>.btn-success.dropdown-toggle,
.show>.btn-success.dropdown-toggle:focus,
.show>.btn-success.dropdown-toggle:hover {
  background-color: #1beb11;
  color: #FFFFFF;
  box-shadow: none;
  border-color: #1beb11;
}

.btn-success:not([data-action]):not([class*="btn-outline-"]):hover {
  box-shadow: 0 3px 8px 0 rgba(0, 0, 0, 0.17);
}

.btn-success.disabled,
.btn-success.disabled:hover,
.btn-success.disabled:focus,
.btn-success.disabled.focus,
.btn-success.disabled:active,
.btn-success.disabled.active,
.btn-success:disabled,
.btn-success:disabled:hover,
.btn-success:disabled:focus,
.btn-success:disabled.focus,
.btn-success:disabled:active,
.btn-success:disabled.active,
.btn-success[disabled],
.btn-success[disabled]:hover,
.btn-success[disabled]:focus,
.btn-success[disabled].focus,
.btn-success[disabled]:active,
.btn-success[disabled].active,
fieldset[disabled] .btn-success,
fieldset[disabled] .btn-success:hover,
fieldset[disabled] .btn-success:focus,
fieldset[disabled] .btn-success.focus,
fieldset[disabled] .btn-success:active,
fieldset[disabled] .btn-success.active {
  background-color: #18ce0f;
  border-color: #18ce0f;
}

.btn-success.btn-link {
  color: #18ce0f;
}

.btn-success.btn-link:hover,
.btn-success.btn-link:focus,
.btn-success.btn-link:active {
  background-color: transparent;
  color: #1beb11;
  text-decoration: none;
  box-shadow: none;
}

.btn-info {
  background-color: #2CA8FF;
  color: #FFFFFF;
}

.btn-info:hover,
.btn-info:focus,
.btn-info:not(:disabled):not(.disabled):active,
.btn-info:not(:disabled):not(.disabled).active,
.btn-info:not(:disabled):not(.disabled):active:focus,
.btn-info:not(:disabled):not(.disabled).active:focus,
.btn-info:active:hover,
.btn-info.active:hover,
.show>.btn-info.dropdown-toggle,
.show>.btn-info.dropdown-toggle:focus,
.show>.btn-info.dropdown-toggle:hover {
  background-color: #4bb5ff;
  color: #FFFFFF;
  box-shadow: none;
  border-color: #4bb5ff;
}

.btn-info:not([data-action]):not([class*="btn-outline-"]):hover {
  box-shadow: 0 3px 8px 0 rgba(0, 0, 0, 0.17);
}

.btn-info.disabled,
.btn-info.disabled:hover,
.btn-info.disabled:focus,
.btn-info.disabled.focus,
.btn-info.disabled:active,
.btn-info.disabled.active,
.btn-info:disabled,
.btn-info:disabled:hover,
.btn-info:disabled:focus,
.btn-info:disabled.focus,
.btn-info:disabled:active,
.btn-info:disabled.active,
.btn-info[disabled],
.btn-info[disabled]:hover,
.btn-info[disabled]:focus,
.btn-info[disabled].focus,
.btn-info[disabled]:active,
.btn-info[disabled].active,
fieldset[disabled] .btn-info,
fieldset[disabled] .btn-info:hover,
fieldset[disabled] .btn-info:focus,
fieldset[disabled] .btn-info.focus,
fieldset[disabled] .btn-info:active,
fieldset[disabled] .btn-info.active {
  background-color: #2CA8FF;
  border-color: #2CA8FF;
}

.btn-info.btn-link {
  color: #2CA8FF;
}

.btn-info.btn-link:hover,
.btn-info.btn-link:focus,
.btn-info.btn-link:active {
  background-color: transparent;
  color: #4bb5ff;
  text-decoration: none;
  box-shadow: none;
}

.btn-warning {
  background-color: #FFB236;
  color: #FFFFFF;
}

.btn-warning:hover,
.btn-warning:focus,
.btn-warning:not(:disabled):not(.disabled):active,
.btn-warning:not(:disabled):not(.disabled).active,
.btn-warning:not(:disabled):not(.disabled):active:focus,
.btn-warning:not(:disabled):not(.disabled).active:focus,
.btn-warning:active:hover,
.btn-warning.active:hover,
.show>.btn-warning.dropdown-toggle,
.show>.btn-warning.dropdown-toggle:focus,
.show>.btn-warning.dropdown-toggle:hover {
  background-color: #ffbe55;
  color: #FFFFFF;
  box-shadow: none;
  border-color: #ffbe55;
}

.btn-warning:not([data-action]):not([class*="btn-outline-"]):hover {
  box-shadow: 0 3px 8px 0 rgba(0, 0, 0, 0.17);
}

.btn-warning.disabled,
.btn-warning.disabled:hover,
.btn-warning.disabled:focus,
.btn-warning.disabled.focus,
.btn-warning.disabled:active,
.btn-warning.disabled.active,
.btn-warning:disabled,
.btn-warning:disabled:hover,
.btn-warning:disabled:focus,
.btn-warning:disabled.focus,
.btn-warning:disabled:active,
.btn-warning:disabled.active,
.btn-warning[disabled],
.btn-warning[disabled]:hover,
.btn-warning[disabled]:focus,
.btn-warning[disabled].focus,
.btn-warning[disabled]:active,
.btn-warning[disabled].active,
fieldset[disabled] .btn-warning,
fieldset[disabled] .btn-warning:hover,
fieldset[disabled] .btn-warning:focus,
fieldset[disabled] .btn-warning.focus,
fieldset[disabled] .btn-warning:active,
fieldset[disabled] .btn-warning.active {
  background-color: #FFB236;
  border-color: #FFB236;
}

.btn-warning.btn-link {
  color: #FFB236;
}

.btn-warning.btn-link:hover,
.btn-warning.btn-link:focus,
.btn-warning.btn-link:active {
  background-color: transparent;
  color: #ffbe55;
  text-decoration: none;
  box-shadow: none;
}

.btn-danger {
  background-color: #FF3636;
  color: #FFFFFF;
}

.btn-danger:hover,
.btn-danger:focus,
.btn-danger:not(:disabled):not(.disabled):active,
.btn-danger:not(:disabled):not(.disabled).active,
.btn-danger:not(:disabled):not(.disabled):active:focus,
.btn-danger:not(:disabled):not(.disabled).active:focus,
.btn-danger:active:hover,
.btn-danger.active:hover,
.show>.btn-danger.dropdown-toggle,
.show>.btn-danger.dropdown-toggle:focus,
.show>.btn-danger.dropdown-toggle:hover {
  background-color: #ff5555;
  color: #FFFFFF;
  box-shadow: none;
  border-color: #ff5555;
}

.btn-danger:not([data-action]):not([class*="btn-outline-"]):hover {
  box-shadow: 0 3px 8px 0 rgba(0, 0, 0, 0.17);
}

.btn-danger.disabled,
.btn-danger.disabled:hover,
.btn-danger.disabled:focus,
.btn-danger.disabled.focus,
.btn-danger.disabled:active,
.btn-danger.disabled.active,
.btn-danger:disabled,
.btn-danger:disabled:hover,
.btn-danger:disabled:focus,
.btn-danger:disabled.focus,
.btn-danger:disabled:active,
.btn-danger:disabled.active,
.btn-danger[disabled],
.btn-danger[disabled]:hover,
.btn-danger[disabled]:focus,
.btn-danger[disabled].focus,
.btn-danger[disabled]:active,
.btn-danger[disabled].active,
fieldset[disabled] .btn-danger,
fieldset[disabled] .btn-danger:hover,
fieldset[disabled] .btn-danger:focus,
fieldset[disabled] .btn-danger.focus,
fieldset[disabled] .btn-danger:active,
fieldset[disabled] .btn-danger.active {
  background-color: #FF3636;
  border-color: #FF3636;
}

.btn-danger.btn-link {
  color: #FF3636;
}

.btn-danger.btn-link:hover,
.btn-danger.btn-link:focus,
.btn-danger.btn-link:active {
  background-color: transparent;
  color: #ff5555;
  text-decoration: none;
  box-shadow: none;
}

.btn-neutral {
  background-color: #FFFFFF;
  color: #f96332;
}

.btn-neutral:hover,
.btn-neutral:focus,
.btn-neutral:not(:disabled):not(.disabled):active,
.btn-neutral:not(:disabled):not(.disabled).active,
.btn-neutral:not(:disabled):not(.disabled):active:focus,
.btn-neutral:not(:disabled):not(.disabled).active:focus,
.btn-neutral:active:hover,
.btn-neutral.active:hover,
.show>.btn-neutral.dropdown-toggle,
.show>.btn-neutral.dropdown-toggle:focus,
.show>.btn-neutral.dropdown-toggle:hover {
  background-color: #FFFFFF;
  color: #FFFFFF;
  box-shadow: none;
  border-color: #FFFFFF;
}

.btn-neutral:not([data-action]):not([class*="btn-outline-"]):hover {
  box-shadow: 0 3px 8px 0 rgba(0, 0, 0, 0.17);
}

.btn-neutral.disabled,
.btn-neutral.disabled:hover,
.btn-neutral.disabled:focus,
.btn-neutral.disabled.focus,
.btn-neutral.disabled:active,
.btn-neutral.disabled.active,
.btn-neutral:disabled,
.btn-neutral:disabled:hover,
.btn-neutral:disabled:focus,
.btn-neutral:disabled.focus,
.btn-neutral:disabled:active,
.btn-neutral:disabled.active,
.btn-neutral[disabled],
.btn-neutral[disabled]:hover,
.btn-neutral[disabled]:focus,
.btn-neutral[disabled].focus,
.btn-neutral[disabled]:active,
.btn-neutral[disabled].active,
fieldset[disabled] .btn-neutral,
fieldset[disabled] .btn-neutral:hover,
fieldset[disabled] .btn-neutral:focus,
fieldset[disabled] .btn-neutral.focus,
fieldset[disabled] .btn-neutral:active,
fieldset[disabled] .btn-neutral.active {
  background-color: #FFFFFF;
  border-color: #FFFFFF;
}

.btn-neutral.btn-danger {
  color: #FF3636;
}

.btn-neutral.btn-danger:hover,
.btn-neutral.btn-danger:focus,
.btn-neutral.btn-danger:active,
.btn-neutral.btn-danger:active:focus {
  color: #ff5555 !important;
}

.btn-neutral.btn-info {
  color: #2CA8FF;
}

.btn-neutral.btn-info:hover,
.btn-neutral.btn-info:focus,
.btn-neutral.btn-info:active,
.btn-neutral.btn-info:active:focus {
  color: #4bb5ff !important;
}

.btn-neutral.btn-warning {
  color: #FFB236;
}

.btn-neutral.btn-warning:hover,
.btn-neutral.btn-warning:focus,
.btn-neutral.btn-warning:active,
.btn-neutral.btn-warning:active:focus {
  color: #ffbe55 !important;
}

.btn-neutral.btn-success {
  color: #18ce0f;
}

.btn-neutral.btn-success:hover,
.btn-neutral.btn-success:focus,
.btn-neutral.btn-success:active,
.btn-neutral.btn-success:active:focus {
  color: #1beb11 !important;
}

.btn-neutral.btn-default {
  color: #888;
}

.btn-neutral.btn-default:hover,
.btn-neutral.btn-default:focus,
.btn-neutral.btn-default:active,
.btn-neutral.btn-default:active:focus {
  color: #979797 !important;
}

.btn-neutral.active,
.btn-neutral:active,
.btn-neutral:active:focus,
.btn-neutral:active:hover,
.btn-neutral.active:focus,
.btn-neutral.active:hover,
.show>.btn-neutral.dropdown-toggle,
.show>.btn-neutral.dropdown-toggle:focus,
.show>.btn-neutral.dropdown-toggle:hover {
  background-color: #FFFFFF;
  color: #fa7a50 !important;
  box-shadow: none;
}

.btn-neutral:hover,
.btn-neutral:focus {
  color: #fa7a50;
}

.btn-neutral:hover:not(.nav-link),
.btn-neutral:focus:not(.nav-link) {
  box-shadow: none !important;
}

.btn-neutral.btn-link {
  color: #FFFFFF;
}

.btn-neutral.btn-link:hover,
.btn-neutral.btn-link:focus,
.btn-neutral.btn-link:active {
  background-color: transparent;
  color: #FFFFFF;
  text-decoration: none;
  box-shadow: none;
}

.btn-outline-primary {
  color: #f96332;
  border-color: #f96332;
}

.btn-outline-primary:hover,
.btn-outline-primary:focus,
.btn-outline-primary:not(:disabled):not(.disabled):active,
.btn-outline-primary:not(:disabled):not(.disabled).active,
.btn-outline-primary:not(:disabled):not(.disabled):active:focus,
.btn-outline-primary:not(:disabled):not(.disabled).active:focus,
.btn-outline-primary:active:hover,
.btn-outline-primary.active:hover,
.show>.btn-outline-primary.dropdown-toggle,
.show>.btn-outline-primary.dropdown-toggle:focus,
.show>.btn-outline-primary.dropdown-toggle:hover {
  background-color: transparent;
  color: #fa7a50;
  border-color: #fa7a50;
  box-shadow: none;
}

.btn-outline-success {
  color: #18ce0f;
  border-color: #18ce0f;
}

.btn-outline-success:hover,
.btn-outline-success:focus,
.btn-outline-success:not(:disabled):not(.disabled):active,
.btn-outline-success:not(:disabled):not(.disabled).active,
.btn-outline-success:not(:disabled):not(.disabled):active:focus,
.btn-outline-success:not(:disabled):not(.disabled).active:focus,
.btn-outline-success:active:hover,
.btn-outline-success.active:hover,
.show>.btn-outline-success.dropdown-toggle,
.show>.btn-outline-success.dropdown-toggle:focus,
.show>.btn-outline-success.dropdown-toggle:hover {
  background-color: transparent;
  color: #1beb11;
  border-color: #1beb11;
  box-shadow: none;
}

.btn-outline-info {
  color: #2CA8FF;
  border-color: #2CA8FF;
}

.btn-outline-info:hover,
.btn-outline-info:focus,
.btn-outline-info:not(:disabled):not(.disabled):active,
.btn-outline-info:not(:disabled):not(.disabled).active,
.btn-outline-info:not(:disabled):not(.disabled):active:focus,
.btn-outline-info:not(:disabled):not(.disabled).active:focus,
.btn-outline-info:active:hover,
.btn-outline-info.active:hover,
.show>.btn-outline-info.dropdown-toggle,
.show>.btn-outline-info.dropdown-toggle:focus,
.show>.btn-outline-info.dropdown-toggle:hover {
  background-color: transparent;
  color: #4bb5ff;
  border-color: #4bb5ff;
  box-shadow: none;
}

.btn-outline-warning {
  color: #FFB236;
  border-color: #FFB236;
}

.btn-outline-warning:hover,
.btn-outline-warning:focus,
.btn-outline-warning:not(:disabled):not(.disabled):active,
.btn-outline-warning:not(:disabled):not(.disabled).active,
.btn-outline-warning:not(:disabled):not(.disabled):active:focus,
.btn-outline-warning:not(:disabled):not(.disabled).active:focus,
.btn-outline-warning:active:hover,
.btn-outline-warning.active:hover,
.show>.btn-outline-warning.dropdown-toggle,
.show>.btn-outline-warning.dropdown-toggle:focus,
.show>.btn-outline-warning.dropdown-toggle:hover {
  background-color: transparent;
  color: #ffbe55;
  border-color: #ffbe55;
  box-shadow: none;
}

.btn-outline-danger {
  color: #FF3636;
  border-color: #FF3636;
}

.btn-outline-danger:hover,
.btn-outline-danger:focus,
.btn-outline-danger:not(:disabled):not(.disabled):active,
.btn-outline-danger:not(:disabled):not(.disabled).active,
.btn-outline-danger:not(:disabled):not(.disabled):active:focus,
.btn-outline-danger:not(:disabled):not(.disabled).active:focus,
.btn-outline-danger:active:hover,
.btn-outline-danger.active:hover,
.show>.btn-outline-danger.dropdown-toggle,
.show>.btn-outline-danger.dropdown-toggle:focus,
.show>.btn-outline-danger.dropdown-toggle:hover {
  background-color: transparent;
  color: #ff5555;
  border-color: #ff5555;
  box-shadow: none;
}

.btn-outline-default {
  color: #888;
  border-color: #888;
}

.btn-outline-default:hover,
.btn-outline-default:focus,
.btn-outline-default:not(:disabled):not(.disabled):active,
.btn-outline-default:not(:disabled):not(.disabled).active,
.btn-outline-default:not(:disabled):not(.disabled):active:focus,
.btn-outline-default:not(:disabled):not(.disabled).active:focus,
.btn-outline-default:active:hover,
.btn-outline-default.active:hover,
.show>.btn-outline-default.dropdown-toggle,
.show>.btn-outline-default.dropdown-toggle:focus,
.show>.btn-outline-default.dropdown-toggle:hover {
  background-color: transparent;
  color: #979797;
  border-color: #979797;
  box-shadow: none;
}

.btn:disabled,
.btn[disabled],
.btn.disabled {
  opacity: 0.5;
  filter: alpha(opacity=50);
  pointer-events: none;
}

[class*="btn-outline-"] {
  border: 1px solid;
  padding: 10px 22px;
  background-color: transparent;
}

[class*="btn-outline-"].disabled,
[class*="btn-outline-"].disabled:hover,
[class*="btn-outline-"].disabled:focus,
[class*="btn-outline-"].disabled.focus,
[class*="btn-outline-"].disabled:active,
[class*="btn-outline-"].disabled.active,
[class*="btn-outline-"]:disabled,
[class*="btn-outline-"]:disabled:hover,
[class*="btn-outline-"]:disabled:focus,
[class*="btn-outline-"]:disabled.focus,
[class*="btn-outline-"]:disabled:active,
[class*="btn-outline-"]:disabled.active,
[class*="btn-outline-"][disabled],
[class*="btn-outline-"][disabled]:hover,
[class*="btn-outline-"][disabled]:focus,
[class*="btn-outline-"][disabled].focus,
[class*="btn-outline-"][disabled]:active,
[class*="btn-outline-"][disabled].active,
fieldset[disabled] [class*="btn-outline-"],
fieldset[disabled] [class*="btn-outline-"]:hover,
fieldset[disabled] [class*="btn-outline-"]:focus,
fieldset[disabled] [class*="btn-outline-"].focus,
fieldset[disabled] [class*="btn-outline-"]:active,
fieldset[disabled] [class*="btn-outline-"].active,
.btn-link.disabled,
.btn-link.disabled:hover,
.btn-link.disabled:focus,
.btn-link.disabled.focus,
.btn-link.disabled:active,
.btn-link.disabled.active,
.btn-link:disabled,
.btn-link:disabled:hover,
.btn-link:disabled:focus,
.btn-link:disabled.focus,
.btn-link:disabled:active,
.btn-link:disabled.active,
.btn-link[disabled],
.btn-link[disabled]:hover,
.btn-link[disabled]:focus,
.btn-link[disabled].focus,
.btn-link[disabled]:active,
.btn-link[disabled].active,
fieldset[disabled] .btn-link,
fieldset[disabled] .btn-link:hover,
fieldset[disabled] .btn-link:focus,
fieldset[disabled] .btn-link.focus,
fieldset[disabled] .btn-link:active,
fieldset[disabled] .btn-link.active {
  background-color: transparent;
}

.btn-link {
  border: 0;
  padding: 0.5rem 0.7rem;
  background-color: transparent;
}

.btn-lg {
  font-size: 1em;
  border-radius: 0.25rem;
  padding: 15px 48px;
}

.btn-lg[class*="btn-outline-"] {
  padding: 14px 47px;
}

.btn-sm {
  font-size: 14px;
  border-radius: 0.1875rem;
  padding: 5px 15px;
}

.btn-sm[class*="btn-outline-"] {
  padding: 4px 14px;
}

.btn-wd {
  min-width: 140px;
}

.btn-group.select {
  width: 100%;
}

.btn-group.select .btn {
  text-align: left;
}

.btn-group.select .caret {
  position: absolute;
  top: 50%;
  margin-top: -1px;
  right: 8px;
}

.btn-round {
  border-width: 1px;
  border-radius: 30px;
  padding-right: 23px;
  padding-left: 23px;
}

.btn-round.btn-simple:not(.btn-sm):not(.btn-lg) {
  padding: 10px 22px;
}

.no-caret.dropdown-toggle::after {
  display: none;
}

.btn.btn-facebook {
  background-color: #3b5998;
  color: #fff;
}

.btn.btn-facebook:focus,
.btn.btn-facebook:active,
.btn.btn-facebook:hover {
  background-color: #344e86 !important;
  color: #fff;
}

.btn.btn-facebook.btn-simple {
  color: #3b5998;
  background-color: transparent;
  box-shadow: none;
  border-color: #3b5998;
}

.btn.btn-facebook.btn-simple:hover,
.btn.btn-facebook.btn-simple:focus,
.btn.btn-facebook.btn-simple:active {
  color: #344e86;
  border-color: #344e86;
}

.btn.btn-facebook.btn-neutral {
  color: #3b5998;
  background-color: #FFFFFF !important;
}

.btn.btn-facebook.btn-neutral:hover,
.btn.btn-facebook.btn-neutral:focus,
.btn.btn-facebook.btn-neutral:active {
  color: #344e86 !important;
}

.btn.btn-twitter {
  background-color: #55acee;
  color: #fff;
}

.btn.btn-twitter:focus,
.btn.btn-twitter:active,
.btn.btn-twitter:hover {
  background-color: #3ea1ec !important;
  color: #fff;
}

.btn.btn-twitter.btn-simple {
  color: #55acee;
  background-color: transparent;
  box-shadow: none;
  border-color: #55acee;
}

.btn.btn-twitter.btn-simple:hover,
.btn.btn-twitter.btn-simple:focus,
.btn.btn-twitter.btn-simple:active {
  color: #3ea1ec;
  border-color: #3ea1ec;
}

.btn.btn-twitter.btn-neutral {
  color: #55acee;
  background-color: #FFFFFF !important;
}

.btn.btn-twitter.btn-neutral:hover,
.btn.btn-twitter.btn-neutral:focus,
.btn.btn-twitter.btn-neutral:active {
  color: #3ea1ec !important;
}

.btn.btn-pinterest {
  background-color: #cc2127;
  color: #fff;
}

.btn.btn-pinterest:focus,
.btn.btn-pinterest:active,
.btn.btn-pinterest:hover {
  background-color: #dd2e34 !important;
  color: #fff;
}

.btn.btn-pinterest.btn-simple {
  color: #cc2127;
  background-color: transparent;
  box-shadow: none;
  border-color: #cc2127;
}

.btn.btn-pinterest.btn-simple:hover,
.btn.btn-pinterest.btn-simple:focus,
.btn.btn-pinterest.btn-simple:active {
  color: #dd2e34;
  border-color: #dd2e34;
}

.btn.btn-pinterest.btn-neutral {
  color: #cc2127;
  background-color: #FFFFFF !important;
}

.btn.btn-pinterest.btn-neutral:hover,
.btn.btn-pinterest.btn-neutral:focus,
.btn.btn-pinterest.btn-neutral:active {
  color: #dd2e34 !important;
}

.btn.btn-google {
  background-color: #dd4b39;
  color: #fff;
}

.btn.btn-google:focus,
.btn.btn-google:active,
.btn.btn-google:hover {
  background-color: #d73925 !important;
  color: #fff;
}

.btn.btn-google.btn-simple {
  color: #dd4b39;
  background-color: transparent;
  box-shadow: none;
  border-color: #dd4b39;
}

.btn.btn-google.btn-simple:hover,
.btn.btn-google.btn-simple:focus,
.btn.btn-google.btn-simple:active {
  color: #d73925;
  border-color: #d73925;
}

.btn.btn-google.btn-neutral {
  color: #dd4b39;
  background-color: #FFFFFF !important;
}

.btn.btn-google.btn-neutral:hover,
.btn.btn-google.btn-neutral:focus,
.btn.btn-google.btn-neutral:active {
  color: #d73925 !important;
}

.btn.btn-linkedin {
  background-color: #0077B5;
  color: #fff;
}

.btn.btn-linkedin:focus,
.btn.btn-linkedin:active,
.btn.btn-linkedin:hover {
  background-color: #00669c !important;
  color: #fff;
}

.btn.btn-linkedin.btn-simple {
  color: #0077B5;
  background-color: transparent;
  box-shadow: none;
  border-color: #0077B5;
}

.btn.btn-linkedin.btn-simple:hover,
.btn.btn-linkedin.btn-simple:focus,
.btn.btn-linkedin.btn-simple:active {
  color: #00669c;
  border-color: #00669c;
}

.btn.btn-linkedin.btn-neutral {
  color: #0077B5;
  background-color: #FFFFFF !important;
}

.btn.btn-linkedin.btn-neutral:hover,
.btn.btn-linkedin.btn-neutral:focus,
.btn.btn-linkedin.btn-neutral:active {
  color: #00669c !important;
}

.btn.btn-dribbble {
  background-color: #ea4c89;
  color: #fff;
}

.btn.btn-dribbble:focus,
.btn.btn-dribbble:active,
.btn.btn-dribbble:hover {
  background-color: #ed679b !important;
  color: #fff;
}

.btn.btn-dribbble.btn-simple {
  color: #ea4c89;
  background-color: transparent;
  box-shadow: none;
  border-color: #ea4c89;
}

.btn.btn-dribbble.btn-simple:hover,
.btn.btn-dribbble.btn-simple:focus,
.btn.btn-dribbble.btn-simple:active {
  color: #ed679b;
  border-color: #ed679b;
}

.btn.btn-dribbble.btn-neutral {
  color: #ea4c89;
  background-color: #FFFFFF !important;
}

.btn.btn-dribbble.btn-neutral:hover,
.btn.btn-dribbble.btn-neutral:focus,
.btn.btn-dribbble.btn-neutral:active {
  color: #ed679b !important;
}

.btn.btn-github {
  background-color: #333333;
  color: #fff;
}

.btn.btn-github:focus,
.btn.btn-github:active,
.btn.btn-github:hover {
  background-color: #424242 !important;
  color: #fff;
}

.btn.btn-github.btn-simple {
  color: #333333;
  background-color: transparent;
  box-shadow: none;
  border-color: #333333;
}

.btn.btn-github.btn-simple:hover,
.btn.btn-github.btn-simple:focus,
.btn.btn-github.btn-simple:active {
  color: #424242;
  border-color: #424242;
}

.btn.btn-github.btn-neutral {
  color: #333333;
  background-color: #FFFFFF !important;
}

.btn.btn-github.btn-neutral:hover,
.btn.btn-github.btn-neutral:focus,
.btn.btn-github.btn-neutral:active {
  color: #424242 !important;
}

.btn.btn-youtube {
  background-color: #e52d27;
  color: #fff;
}

.btn.btn-youtube:focus,
.btn.btn-youtube:active,
.btn.btn-youtube:hover {
  background-color: #e84842 !important;
  color: #fff;
}

.btn.btn-youtube.btn-simple {
  color: #e52d27;
  background-color: transparent;
  box-shadow: none;
  border-color: #e52d27;
}

.btn.btn-youtube.btn-simple:hover,
.btn.btn-youtube.btn-simple:focus,
.btn.btn-youtube.btn-simple:active {
  color: #e84842;
  border-color: #e84842;
}

.btn.btn-youtube.btn-neutral {
  color: #e52d27;
  background-color: #FFFFFF !important;
}

.btn.btn-youtube.btn-neutral:hover,
.btn.btn-youtube.btn-neutral:focus,
.btn.btn-youtube.btn-neutral:active {
  color: #e84842 !important;
}

.btn.btn-instagram {
  background-color: #125688;
  color: #fff;
}

.btn.btn-instagram:focus,
.btn.btn-instagram:active,
.btn.btn-instagram:hover {
  background-color: #1667a3 !important;
  color: #fff;
}

.btn.btn-instagram.btn-simple {
  color: #125688;
  background-color: transparent;
  box-shadow: none;
  border-color: #125688;
}

.btn.btn-instagram.btn-simple:hover,
.btn.btn-instagram.btn-simple:focus,
.btn.btn-instagram.btn-simple:active {
  color: #1667a3;
  border-color: #1667a3;
}

.btn.btn-instagram.btn-neutral {
  color: #125688;
  background-color: #FFFFFF !important;
}

.btn.btn-instagram.btn-neutral:hover,
.btn.btn-instagram.btn-neutral:focus,
.btn.btn-instagram.btn-neutral:active {
  color: #1667a3 !important;
}

.btn.btn-reddit {
  background-color: #ff4500;
  color: #fff;
}

.btn.btn-reddit:focus,
.btn.btn-reddit:active,
.btn.btn-reddit:hover {
  background-color: #ff5b1f !important;
  color: #fff;
}

.btn.btn-reddit.btn-simple {
  color: #ff4500;
  background-color: transparent;
  box-shadow: none;
  border-color: #ff4500;
}

.btn.btn-reddit.btn-simple:hover,
.btn.btn-reddit.btn-simple:focus,
.btn.btn-reddit.btn-simple:active {
  color: #ff5b1f;
  border-color: #ff5b1f;
}

.btn.btn-reddit.btn-neutral {
  color: #ff4500;
  background-color: #FFFFFF !important;
}

.btn.btn-reddit.btn-neutral:hover,
.btn.btn-reddit.btn-neutral:focus,
.btn.btn-reddit.btn-neutral:active {
  color: #ff5b1f !important;
}

.btn.btn-tumblr {
  background-color: #35465c;
  color: #fff;
}

.btn.btn-tumblr:focus,
.btn.btn-tumblr:active,
.btn.btn-tumblr:hover {
  background-color: #40556f !important;
  color: #fff;
}

.btn.btn-tumblr.btn-simple {
  color: #35465c;
  background-color: transparent;
  box-shadow: none;
  border-color: #35465c;
}

.btn.btn-tumblr.btn-simple:hover,
.btn.btn-tumblr.btn-simple:focus,
.btn.btn-tumblr.btn-simple:active {
  color: #40556f;
  border-color: #40556f;
}

.btn.btn-tumblr.btn-neutral {
  color: #35465c;
  background-color: #FFFFFF !important;
}

.btn.btn-tumblr.btn-neutral:hover,
.btn.btn-tumblr.btn-neutral:focus,
.btn.btn-tumblr.btn-neutral:active {
  color: #40556f !important;
}

.btn.btn-behance {
  background-color: #1769ff;
  color: #fff;
}

.btn.btn-behance:focus,
.btn.btn-behance:active,
.btn.btn-behance:hover {
  background-color: #367dff !important;
  color: #fff;
}

.btn.btn-behance.btn-simple {
  color: #1769ff;
  background-color: transparent;
  box-shadow: none;
  border-color: #1769ff;
}

.btn.btn-behance.btn-simple:hover,
.btn.btn-behance.btn-simple:focus,
.btn.btn-behance.btn-simple:active {
  color: #367dff;
  border-color: #367dff;
}

.btn.btn-behance.btn-neutral {
  color: #1769ff;
  background-color: #FFFFFF !important;
}

.btn.btn-behance.btn-neutral:hover,
.btn.btn-behance.btn-neutral:focus,
.btn.btn-behance.btn-neutral:active {
  color: #367dff !important;
}

.form-control::-moz-placeholder {
  color: #888;
  opacity: 1;
  filter: alpha(opacity=100);
}

.form-control:-moz-placeholder {
  color: #888;
  opacity: 1;
  filter: alpha(opacity=100);
}

.form-control::-webkit-input-placeholder {
  color: #888;
  opacity: 1;
  filter: alpha(opacity=100);
}

.form-control:-ms-input-placeholder {
  color: #888;
  opacity: 1;
  filter: alpha(opacity=100);
}

.form-control {
  background-color: transparent;
  border: 1px solid #E3E3E3;
  border-radius: 30px;
  color: #2c2c2c;
  line-height: normal;
  height: auto;
  font-size: 0.8571em;
  -webkit-transition: color 0.3s ease-in-out, border-color 0.3s ease-in-out, background-color 0.3s ease-in-out;
  -moz-transition: color 0.3s ease-in-out, border-color 0.3s ease-in-out, background-color 0.3s ease-in-out;
  -o-transition: color 0.3s ease-in-out, border-color 0.3s ease-in-out, background-color 0.3s ease-in-out;
  -ms-transition: color 0.3s ease-in-out, border-color 0.3s ease-in-out, background-color 0.3s ease-in-out;
  transition: color 0.3s ease-in-out, border-color 0.3s ease-in-out, background-color 0.3s ease-in-out;
  -webkit-box-shadow: none;
  box-shadow: none;
}

.form-control:focus {
  border: 1px solid #f96332;
  -webkit-box-shadow: none;
  box-shadow: none;
  outline: 0 !important;
  color: #2c2c2c;
}

.form-control:focus+.input-group-append .input-group-text,
.form-control:focus~.input-group-append .input-group-text,
.form-control:focus+.input-group-prepend .input-group-text,
.form-control:focus~.input-group-prepend .input-group-text {
  border: 1px solid #f96332;
  border-left: none;
  background-color: transparent;
}

.has-success .form-control,
.has-error .form-control,
.has-success .form-control:focus,
.has-error .form-control:focus {
  -webkit-box-shadow: none;
  box-shadow: none;
}

.has-danger .form-control.form-control-success,
.has-danger .form-control.form-control-danger,
.has-success .form-control.form-control-success,
.has-success .form-control.form-control-danger {
  background-image: none;
}

.form-control+.form-control-feedback {
  border-radius: 0.25rem;
  font-size: 14px;
  margin-top: -7px;
  position: absolute;
  right: 10px;
  top: 50%;
  vertical-align: middle;
}

.open .form-control {
  border-radius: 0.25rem 0.25rem 0 0;
  border-bottom-color: transparent;
}

.form-control+.input-group-append .input-group-text,
.form-control+.input-group-prepend .input-group-text {
  background-color: #FFFFFF;
}

.has-success .input-group-append .input-group-text,
.has-success .input-group-prepend .input-group-text,
.has-success .form-control {
  border-color: #E3E3E3;
}

.has-success .form-control:focus,
.has-success.input-group-focus .input-group-append .input-group-text,
.has-success.input-group-focus .input-group-prepend .input-group-text {
  border-color: #1be611;
}

.has-danger .form-control,
.has-danger .input-group-append .input-group-text,
.has-danger .input-group-prepend .input-group-text,
.has-danger.input-group-focus .input-group-prepend .input-group-text,
.has-danger.input-group-focus .input-group-append .input-group-text {
  border-color: #ffcfcf;
  color: #FF3636;
  background-color: rgba(222, 222, 222, 0.1);
}

.has-danger .form-control:focus,
.has-danger .input-group-append .input-group-text:focus,
.has-danger .input-group-prepend .input-group-text:focus,
.has-danger.input-group-focus .input-group-prepend .input-group-text:focus,
.has-danger.input-group-focus .input-group-append .input-group-text:focus {
  background-color: #FFFFFF;
}

.has-success:after,
.has-danger:after {
  font-family: 'Nucleo Outline';
  content: "\ea22";
  display: inline-block;
  position: absolute;
  right: 20px;
  bottom: 10px;
  color: #18ce0f;
  font-size: 11px;
}

.has-success.form-control-lg:after,
.has-danger.form-control-lg:after {
  font-size: 13px;
  top: 24px;
}

.has-success.has-label:after,
.has-danger.has-label:after {
  top: 35px;
}

.has-success .form-control+label,
.has-success.form-check .form-check-label label,
.has-success.form-check:after,
.has-danger .form-control+label,
.has-danger.form-check .form-check-label label,
.has-danger.form-check:after {
  display: none !important;
}

.has-success.form-check .form-check-label,
.has-danger.form-check .form-check-label {
  color: #18ce0f;
}

.has-danger:after {
  content: "\ea53";
  color: #FF3636;
}

.has-danger.form-check .form-check-label {
  color: #FF3636;
}

.form-group.no-border.form-control-lg .input-group-append .input-group-text,
.input-group.no-border.form-control-lg .input-group-append .input-group-text {
  padding: 15px 0 15px 19px;
}

.form-group.no-border.form-control-lg .form-control,
.input-group.no-border.form-control-lg .form-control {
  padding: 15px 19px;
}

.form-group.no-border.form-control-lg .form-control+.input-group-prepend .input-group-text,
.form-group.no-border.form-control-lg .form-control+.input-group-append .input-group-text,
.input-group.no-border.form-control-lg .form-control+.input-group-prepend .input-group-text,
.input-group.no-border.form-control-lg .form-control+.input-group-append .input-group-text {
  padding: 15px 19px 15px 0;
}

.form-group.form-control-lg .form-control,
.input-group.form-control-lg .form-control {
  padding: 14px 18px;
}

.form-group.form-control-lg .form-control+.input-group-prepend .input-group-text,
.form-group.form-control-lg .form-control+.input-group-append .input-group-text,
.input-group.form-control-lg .form-control+.input-group-prepend .input-group-text,
.input-group.form-control-lg .form-control+.input-group-append .input-group-text {
  padding: 14px 18px 14px 0;
}

.form-group.form-control-lg .input-group-prepend .input-group-text,
.form-group.form-control-lg .input-group-append .input-group-text,
.input-group.form-control-lg .input-group-prepend .input-group-text,
.input-group.form-control-lg .input-group-append .input-group-text {
  padding: 14px 0 15px 18px;
}

.form-group.form-control-lg .input-group-prepend .input-group-text+.form-control,
.form-group.form-control-lg .input-group-append .input-group-text+.form-control,
.input-group.form-control-lg .input-group-prepend .input-group-text+.form-control,
.input-group.form-control-lg .input-group-append .input-group-text+.form-control {
  padding: 15px 18px 15px 16px;
}

.form-group.no-border .form-control,
.input-group.no-border .form-control {
  padding: 11px 19px;
}

.form-group.no-border .form-control+.input-group-prepend .input-group-text,
.form-group.no-border .form-control+.input-group-append .input-group-text,
.input-group.no-border .form-control+.input-group-prepend .input-group-text,
.input-group.no-border .form-control+.input-group-append .input-group-text {
  padding: 11px 19px 11px 0;
}

.form-group.no-border .input-group-prepend .input-group-text,
.form-group.no-border .input-group-append .input-group-text,
.input-group.no-border .input-group-prepend .input-group-text,
.input-group.no-border .input-group-append .input-group-text {
  padding: 11px 0 11px 19px;
}

.form-group .form-control,
.input-group .form-control {
  padding: 10px 18px 10px 18px;
}

.form-group .form-control+.input-group-prepend .input-group-text,
.form-group .form-control+.input-group-append .input-group-text,
.input-group .form-control+.input-group-prepend .input-group-text,
.input-group .form-control+.input-group-append .input-group-text {
  padding: 10px 18px 10px 0;
}

.form-group .input-group-prepend .input-group-text,
.form-group .input-group-append .input-group-text,
.input-group .input-group-prepend .input-group-text,
.input-group .input-group-append .input-group-text {
  padding: 10px 0 10px 18px;
}

.form-group .input-group-prepend .input-group-text+.form-control,
.form-group .input-group-prepend .input-group-text~.form-control,
.form-group .input-group-append .input-group-text+.form-control,
.form-group .input-group-append .input-group-text~.form-control,
.input-group .input-group-prepend .input-group-text+.form-control,
.input-group .input-group-prepend .input-group-text~.form-control,
.input-group .input-group-append .input-group-text+.form-control,
.input-group .input-group-append .input-group-text~.form-control {
  padding: 10px 19px 11px 16px;
}

.form-group.no-border .form-control,
.form-group.no-border .form-control+.input-group-prepend .input-group-text,
.form-group.no-border .form-control+.input-group-append .input-group-text,
.input-group.no-border .form-control,
.input-group.no-border .form-control+.input-group-prepend .input-group-text,
.input-group.no-border .form-control+.input-group-append .input-group-text {
  background-color: rgba(222, 222, 222, 0.3);
  border: medium none;
}

.form-group.no-border .form-control:focus,
.form-group.no-border .form-control:active,
.form-group.no-border .form-control:active,
.form-group.no-border .form-control+.input-group-prepend .input-group-text:focus,
.form-group.no-border .form-control+.input-group-prepend .input-group-text:active,
.form-group.no-border .form-control+.input-group-prepend .input-group-text:active,
.form-group.no-border .form-control+.input-group-append .input-group-text:focus,
.form-group.no-border .form-control+.input-group-append .input-group-text:active,
.form-group.no-border .form-control+.input-group-append .input-group-text:active,
.input-group.no-border .form-control:focus,
.input-group.no-border .form-control:active,
.input-group.no-border .form-control:active,
.input-group.no-border .form-control+.input-group-prepend .input-group-text:focus,
.input-group.no-border .form-control+.input-group-prepend .input-group-text:active,
.input-group.no-border .form-control+.input-group-prepend .input-group-text:active,
.input-group.no-border .form-control+.input-group-append .input-group-text:focus,
.input-group.no-border .form-control+.input-group-append .input-group-text:active,
.input-group.no-border .form-control+.input-group-append .input-group-text:active {
  border: medium none;
  background-color: rgba(222, 222, 222, 0.5);
}

.form-group.no-border .form-control:focus+.input-group-prepend .input-group-text,
.form-group.no-border .form-control:focus+.input-group-append .input-group-text,
.input-group.no-border .form-control:focus+.input-group-prepend .input-group-text,
.input-group.no-border .form-control:focus+.input-group-append .input-group-text {
  background-color: rgba(222, 222, 222, 0.5);
}

.form-group.no-border .input-group-prepend .input-group-text,
.form-group.no-border .input-group-append .input-group-text,
.input-group.no-border .input-group-prepend .input-group-text,
.input-group.no-border .input-group-append .input-group-text {
  background-color: rgba(222, 222, 222, 0.3);
  border: none;
}

.has-error .form-control-feedback,
.has-error .control-label {
  color: #FF3636;
}

.has-success .form-control-feedback,
.has-success .control-label {
  color: #18ce0f;
}

.input-group-append .input-group-text,
.input-group-prepend .input-group-text {
  background-color: transparent;
  border: 1px solid #E3E3E3;
  border-radius: 30px;
  color: #888;
  -webkit-transition: color 0.3s ease-in-out, border-color 0.3s ease-in-out, background-color 0.3s ease-in-out;
  -moz-transition: color 0.3s ease-in-out, border-color 0.3s ease-in-out, background-color 0.3s ease-in-out;
  -o-transition: color 0.3s ease-in-out, border-color 0.3s ease-in-out, background-color 0.3s ease-in-out;
  -ms-transition: color 0.3s ease-in-out, border-color 0.3s ease-in-out, background-color 0.3s ease-in-out;
  transition: color 0.3s ease-in-out, border-color 0.3s ease-in-out, background-color 0.3s ease-in-out;
}

.input-group-append .input-group-text i,
.input-group-prepend .input-group-text i {
  opacity: .5;
}

.has-danger.input-group-focus .input-group-append .input-group-text,
.has-danger.input-group-focus .input-group-prepend .input-group-text {
  background-color: #FFFFFF;
}

.has-success .input-group-append .input-group-text,
.has-success .input-group-prepend .input-group-text {
  background-color: #FFFFFF;
}

.has-danger .form-control:focus+.input-group-append .input-group-text,
.has-danger .form-control:focus+.input-group-prepend .input-group-text {
  color: #FF3636;
}

.has-success .form-control:focus+.input-group-append .input-group-text,
.has-success .form-control:focus+.input-group-prepend .input-group-text {
  color: #18ce0f;
}

.input-group-append .input-group-text+.form-control,
.input-group-append .input-group-text~.form-control,
.input-group-prepend .input-group-text+.form-control,
.input-group-prepend .input-group-text~.form-control {
  padding: -0.5rem 0.7rem;
  padding-left: 18px;
}

.input-group-append .input-group-text i,
.input-group-prepend .input-group-text i {
  width: 17px;
}

.input-group-append,
.input-group-prepend {
  margin: 0;
}

.input-group-append .input-group-text {
  border-left: none;
}

.input-group-prepend .input-group-text {
  border-right: none;
}

.input-group-focus .input-group-prepend .input-group-text,
.input-group-focus .input-group-append .input-group-text {
  background-color: #FFFFFF;
  border-color: #f96332;
}

.input-group-focus.no-border .input-group-prepend .input-group-text,
.input-group-focus.no-border .input-group-append .input-group-text {
  background-color: rgba(222, 222, 222, 0.5);
}

.input-group,
.form-group {
  margin-bottom: 10px;
  position: relative;
}

.input-group .form-control-static,
.form-group .form-control-static {
  margin-top: 9px;
}

.input-group[disabled] .input-group-prepend .input-group-text,
.input-group[disabled] .input-group-append .input-group-text {
  background-color: #E3E3E3;
}

.input-group .form-control:not(:first-child):not(:last-child),
.input-group-btn:not(:first-child):not(:last-child) {
  border-radius: 30px;
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
  border-left: 0 none;
}

.input-group .form-control:first-child,
.input-group-btn:first-child>.dropdown-toggle,
.input-group-btn:last-child>.btn:not(:last-child):not(.dropdown-toggle) {
  border-right: 0 none;
}

.input-group .form-control:last-child,
.input-group-btn:last-child>.dropdown-toggle,
.input-group-btn:first-child>.btn:not(:first-child) {
  border-left: 0 none;
}

.form-control[disabled],
.form-control[readonly],
fieldset[disabled] .form-control {
  background-color: #E3E3E3;
  color: #888;
  cursor: not-allowed;
}

.input-group-btn .btn {
  border-width: 1px;
  padding: 11px 0.7rem;
}

.input-group-btn .btn-default:not(.btn-fill) {
  border-color: #DDDDDD;
}

.input-group-btn:last-child>.btn {
  margin-left: 0;
}

textarea.form-control {
  max-width: 100%;
  max-height: 80px;
  padding: 10px 10px 0 0;
  resize: none;
  border: none;
  border-bottom: 1px solid #E3E3E3;
  border-radius: 0;
  line-height: 2;
}

textarea.form-control:focus,
textarea.form-control:active {
  border-left: none;
  border-top: none;
  border-right: none;
}

.has-success.form-group .form-control,
.has-success.form-group.no-border .form-control,
.has-danger.form-group .form-control,
.has-danger.form-group.no-border .form-control {
  padding-right: 40px;
}

.form.form-newsletter .form-group {
  float: left;
  width: 78%;
  margin-right: 2%;
  margin-top: 9px;
}

.input-group .input-group-btn {
  padding: 0 12px;
}

.form-group input[type=file] {
  opacity: 0;
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 100;
}

.form-text {
  font-size: 0.8571em;
}

.form-control-lg {
  padding: 0;
  font-size: inherit;
  line-height: 0;
  border-radius: 0;
}

.form-horizontal .col-form-label,
.form-horizontal .label-on-right {
  padding: 10px 5px 0 15px;
  text-align: right;
  max-width: 180px;
}

.form-horizontal .checkbox-radios {
  margin-bottom: 15px;
}

.form-horizontal .checkbox-radios .form-check:first-child {
  margin-top: 8px;
}

.form-horizontal .label-on-right {
  text-align: left;
  padding: 10px 15px 0 5px;
}

.form-horizontal .form-check-inline {
  margin-top: 6px;
}

button,
input,
optgroup,
select,
textarea {
  font-family: "Montserrat", "Helvetica Neue", Arial, sans-serif;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  font-weight: 400;
}

a {
  color: #f96332;
}

a:hover,
a:focus {
  color: #f96332;
}

h1,
.h1 {
  font-size: 3.5em;
  line-height: 1.15;
  margin-bottom: 30px;
}

h1 small,
.h1 small {
  font-weight: 700;
  text-transform: uppercase;
  opacity: .8;
}

h2,
.h2 {
  font-size: 2.5em;
  margin-bottom: 30px;
}

h3,
.h3 {
  font-size: 2em;
  margin-bottom: 30px;
  line-height: 1.4em;
}

h4,
.h4 {
  font-size: 1.714em;
  line-height: 1.45em;
  margin-top: 30px;
  margin-bottom: 15px;
}

h4+.category,
h4.title+.category,
.h4+.category,
.h4.title+.category {
  margin-top: -10px;
}

h5,
.h5 {
  font-size: 1.57em;
  line-height: 1.4em;
  margin-bottom: 15px;
}

h6,
.h6 {
  font-size: 1em;
  font-weight: 700;
  text-transform: uppercase;
}

p.description {
  font-size: 1.14em;
}

.title {
  font-weight: 700;
}

.title.title-up {
  text-transform: uppercase;
}

.title.title-up a {
  color: #2c2c2c;
  text-decoration: none;
}

.title+.category {
  margin-top: -10px;
}

.description,
.card-description,
.footer-big p,
.card .footer .stats {
  color: #9A9A9A;
  font-weight: 300;
}

.category,
.card-category {
  text-transform: capitalize;
  font-weight: 400;
  color: #9A9A9A;
  font-size: 0.7142em;
}

.card-category {
  font-size: 1em;
}

.text-primary,
a.text-primary:focus,
a.text-primary:hover {
  color: #f96332 !important;
}

.text-info,
a.text-info:focus,
a.text-info:hover {
  color: #2CA8FF !important;
}

.text-success,
a.text-success:focus,
a.text-success:hover {
  color: #18ce0f !important;
}

.text-warning,
a.text-warning:focus,
a.text-warning:hover {
  color: #FFB236 !important;
}

.text-danger,
a.text-danger:focus,
a.text-danger:hover {
  color: #FF3636 !important;
}

.text-gray,
a.text-gray:focus,
a.text-gray:hover {
  color: #E3E3E3 !important;
}

.blockquote {
  border-left: none;
  border: 1px solid #888;
  padding: 20px;
  font-size: 1.1em;
  line-height: 1.8;
}

.blockquote small {
  color: #888;
  font-size: 0.8571em;
  text-transform: uppercase;
}

.blockquote.blockquote-primary {
  border-color: #f96332;
  color: #f96332;
}

.blockquote.blockquote-primary small {
  color: #f96332;
}

.blockquote.blockquote-danger {
  border-color: #FF3636;
  color: #FF3636;
}

.blockquote.blockquote-danger small {
  color: #FF3636;
}

.blockquote.blockquote-white {
  border-color: rgba(255, 255, 255, 0.8);
  color: #FFFFFF;
}

.blockquote.blockquote-white small {
  color: rgba(255, 255, 255, 0.8);
}

body {
  color: #2c2c2c;
  font-size: 14px;
  font-family: "Montserrat", "Helvetica Neue", Arial, sans-serif;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
}

.main {
  position: relative;
  background: #FFFFFF;
}

/* Animations */

.nav-pills .nav-link,
.navbar,
.nav-tabs .nav-link,
.sidebar .nav a,
.sidebar .nav a i,
.navbar-collapse .navbar-nav .nav-link,
.animation-transition-general,
.sidebar .sidebar-wrapper>.nav [data-toggle="collapse"]~div>ul>li>a span,
.sidebar .sidebar-wrapper .user .info [data-toggle="collapse"]~div>ul>li>a span,
.off-canvas-sidebar .sidebar-wrapper>.nav [data-toggle="collapse"]~div>ul>li>a span,
.off-canvas-sidebar .sidebar-wrapper .user .info [data-toggle="collapse"]~div>ul>li>a span,
.sidebar .navbar-minimize,
.off-canvas-sidebar .navbar-minimize,
.sidebar .nav p,
.off-canvas-sidebar .nav p,
.sidebar .logo a.logo-mini,
.sidebar .logo a.logo-normal,
.off-canvas-sidebar .logo a.logo-mini,
.off-canvas-sidebar .logo a.logo-normal,
.sidebar .user .photo,
.off-canvas-sidebar .user .photo,
.sidebar .user a,
.off-canvas-sidebar .user a,
.sidebar .user .info>a>span,
.off-canvas-sidebar .user .info>a>span,
.card-collapse .card .card-header a[data-toggle="collapse"] i,
.tag,
.tag [data-role="remove"],
.animation-transition-general,
.sidebar .sidebar-wrapper>.nav [data-toggle="collapse"]~div>ul>li>a span,
.sidebar .sidebar-wrapper .user .info [data-toggle="collapse"]~div>ul>li>a span,
.off-canvas-sidebar .sidebar-wrapper>.nav [data-toggle="collapse"]~div>ul>li>a span,
.off-canvas-sidebar .sidebar-wrapper .user .info [data-toggle="collapse"]~div>ul>li>a span,
.sidebar .navbar-minimize,
.off-canvas-sidebar .navbar-minimize,
.sidebar .nav p,
.off-canvas-sidebar .nav p,
.sidebar .logo a.logo-mini,
.sidebar .logo a.logo-normal,
.off-canvas-sidebar .logo a.logo-mini,
.off-canvas-sidebar .logo a.logo-normal,
.sidebar .user .photo,
.off-canvas-sidebar .user .photo,
.sidebar .user a,
.off-canvas-sidebar .user a,
.sidebar .user .info>a>span,
.off-canvas-sidebar .user .info>a>span,
.card-collapse .card .card-header a[data-toggle="collapse"] i {
  -webkit-transition: all 300ms ease 0s;
  -moz-transition: all 300ms ease 0s;
  -o-transition: all 300ms ease 0s;
  -ms-transition: all 300ms ease 0s;
  transition: all 300ms ease 0s;
}

.dropdown-toggle:after,
.bootstrap-switch-label:before,
.caret {
  -webkit-transition: all 150ms ease 0s;
  -moz-transition: all 150ms ease 0s;
  -o-transition: all 150ms ease 0s;
  -ms-transition: all 150ms ease 0s;
  transition: all 150ms ease 0s;
}

.dropdown-toggle[aria-expanded="true"]:after,
a[data-toggle="collapse"][aria-expanded="true"] .caret,
.card-collapse .card a[data-toggle="collapse"][aria-expanded="true"] i,
.card-collapse .card a[data-toggle="collapse"].expanded i {
  filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=2);
  -webkit-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  transform: rotate(180deg);
}

.button-bar {
  display: block;
  position: relative;
  width: 22px;
  height: 1px;
  border-radius: 1px;
  background: #FFFFFF;
}

.button-bar+.button-bar {
  margin-top: 7px;
}

.button-bar:nth-child(2) {
  width: 17px;
}

.caret {
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 2px;
  vertical-align: middle;
  border-top: 4px dashed;
  border-top: 4px solid\9;
  border-right: 4px solid transparent;
  border-left: 4px solid transparent;
}

.pull-left {
  float: left;
}

.pull-right {
  float: right;
}

.navbar {
  padding-top: 0.625rem;
  padding-bottom: 0.625rem;
  min-height: 53px;
  margin-bottom: 20px;
  box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.15);
}

.navbar a {
  vertical-align: middle;
}

.navbar a:not(.btn):not(.dropdown-item) {
  color: #FFFFFF;
}

.navbar a.dropdown-item {
  color: #888;
}

.navbar.bg-white .input-group .form-control,
.navbar.bg-white .input-group.no-border .form-control {
  color: #888;
}

.navbar.bg-white .input-group .form-control::-moz-placeholder,
.navbar.bg-white .input-group.no-border .form-control::-moz-placeholder {
  color: #888;
}

.navbar.bg-white .input-group .form-control:-ms-input-placeholder,
.navbar.bg-white .input-group.no-border .form-control:-ms-input-placeholder {
  color: #888;
}

.navbar.bg-white .input-group .form-control::-webkit-input-placeholder,
.navbar.bg-white .input-group.no-border .form-control::-webkit-input-placeholder {
  color: #888;
}

.navbar.bg-white .input-group-prepend .input-group-text i,
.navbar.bg-white .input-group-append .input-group-text i {
  color: #888;
  opacity: .5;
}

.navbar .form-group,
.navbar .input-group {
  margin: 0;
  margin-left: -3px;
  margin-right: 5px;
}

.navbar .form-group .form-group-addon,
.navbar .form-group .input-group-prepend .input-group-text,
.navbar .form-group .input-group-append .input-group-text,
.navbar .input-group .form-group-addon,
.navbar .input-group .input-group-prepend .input-group-text,
.navbar .input-group .input-group-append .input-group-text {
  color: #FFFFFF;
}

.navbar .form-group .form-group-addon i,
.navbar .form-group .input-group-prepend .input-group-text i,
.navbar .form-group .input-group-append .input-group-text i,
.navbar .input-group .form-group-addon i,
.navbar .input-group .input-group-prepend .input-group-text i,
.navbar .input-group .input-group-append .input-group-text i {
  opacity: 1;
}

.navbar .form-group.no-border .form-control,
.navbar .input-group.no-border .form-control {
  color: #FFFFFF;
}

.navbar .form-group.no-border .form-control::-moz-placeholder,
.navbar .input-group.no-border .form-control::-moz-placeholder {
  color: #FFFFFF;
}

.navbar .form-group.no-border .form-control:-ms-input-placeholder,
.navbar .input-group.no-border .form-control:-ms-input-placeholder {
  color: #FFFFFF;
}

.navbar .form-group.no-border .form-control::-webkit-input-placeholder,
.navbar .input-group.no-border .form-control::-webkit-input-placeholder {
  color: #FFFFFF;
}

.navbar p {
  display: inline-block;
  margin: 0;
  line-height: 1.8em;
  font-size: 1em;
  font-weight: 400;
}

.navbar.navbar-absolute {
  position: absolute;
  width: 100%;
  padding-top: 10px;
  z-index: 1029;
}

.documentation .navbar.fixed-top {
  left: 0;
  width: initial;
}

.navbar .navbar-wrapper {
  display: inline-flex;
  align-items: center;
}

.navbar .navbar-wrapper .navbar-minimize {
  padding-right: 10px;
}

.navbar .navbar-wrapper .navbar-minimize .btn {
  margin: 0;
}

.navbar .navbar-wrapper .navbar-toggle .navbar-toggler {
  padding-left: 0;
}

.navbar .navbar-wrapper .navbar-toggle:hover .navbar-toggler-bar.bar2 {
  width: 22px;
}

.navbar .navbar-nav.navbar-logo {
  position: absolute;
  left: 0;
  right: 0;
  margin: 0 auto;
  width: 49px;
  top: -4px;
}

.navbar .navbar-nav .nav-link.btn {
  padding: 11px 22px;
}

.navbar .navbar-nav .nav-link.btn.btn-lg {
  padding: 15px 48px;
}

.navbar .navbar-nav .nav-link.btn.btn-sm {
  padding: 5px 15px;
}

.navbar .navbar-nav .nav-link {
  text-transform: uppercase;
  font-size: 0.7142em;
  padding: 0.5rem 0.7rem;
  line-height: 1.625rem;
  margin-right: 3px;
}

.navbar .navbar-nav .nav-link i.fa+p,
.navbar .navbar-nav .nav-link i.now-ui-icons+p {
  margin-left: 3px;
}

.navbar .navbar-nav .nav-link i.fa,
.navbar .navbar-nav .nav-link i.now-ui-icons {
  font-size: 18px;
  position: relative;
  top: 3px;
  text-align: center;
  width: 21px;
}

.navbar .navbar-nav .nav-link i.now-ui-icons {
  top: 4px;
  font-size: 16px;
}

.navbar .navbar-nav .nav-link.profile-photo .profile-photo-small {
  width: 27px;
  height: 27px;
}

.navbar .navbar-nav .nav-link.disabled {
  opacity: .5;
  color: #FFFFFF;
}

.navbar .navbar-nav .nav-item.active .nav-link:not(.btn),
.navbar .navbar-nav .nav-item .nav-link:not(.btn):focus,
.navbar .navbar-nav .nav-item .nav-link:not(.btn):hover,
.navbar .navbar-nav .nav-item .nav-link:not(.btn):active {
  background-color: rgba(255, 255, 255, 0.2);
  border-radius: 0.1875rem;
  color: #FFFFFF;
}

.navbar .logo-container {
  width: 27px;
  height: 27px;
  overflow: hidden;
  margin: 0 auto;
  border-radius: 50%;
  border: 1px solid transparent;
}

.navbar .navbar-brand {
  text-transform: uppercase;
  font-size: 0.8571em;
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  line-height: 1.625rem;
}

.navbar .navbar-toggler {
  width: 37px;
  height: 27px;
  vertical-align: middle;
  outline: 0;
  cursor: pointer;
}

.navbar .navbar-toggler .navbar-toggler-bar.navbar-kebab {
  width: 3px;
  height: 3px;
  border-radius: 50%;
  margin: 0 auto;
}

.navbar .button-dropdown .navbar-toggler-bar:nth-child(2) {
  width: 17px;
}

.navbar.navbar-transparent {
  background-color: transparent !important;
  box-shadow: none;
  color: #FFFFFF;
}

.navbar.bg-white:not(.navbar-transparent) a:not(.dropdown-item):not(.btn) {
  color: #888;
}

.navbar.bg-white:not(.navbar-transparent) a:not(.dropdown-item):not(.btn).disabled {
  opacity: .5;
  color: #888;
}

.navbar.bg-white:not(.navbar-transparent) .button-bar {
  background: #888;
}

.navbar.bg-white:not(.navbar-transparent) .nav-item.active .nav-link:not(.btn),
.navbar.bg-white:not(.navbar-transparent) .nav-item .nav-link:not(.btn):focus,
.navbar.bg-white:not(.navbar-transparent) .nav-item .nav-link:not(.btn):hover,
.navbar.bg-white:not(.navbar-transparent) .nav-item .nav-link:not(.btn):active {
  background-color: rgba(222, 222, 222, 0.8);
  color: #888;
}

.navbar.bg-white:not(.navbar-transparent) .logo-container {
  border: 1px solid #888;
}

.bg-default {
  background-color: #888 !important;
}

.bg-primary {
  background-color: #f96332 !important;
}

.bg-info {
  background-color: #2CA8FF !important;
}

.bg-success {
  background-color: #18ce0f !important;
}

.bg-danger {
  background-color: #FF3636 !important;
}

.bg-warning {
  background-color: #FFB236 !important;
}

.bg-white {
  background-color: #FFFFFF !important;
}

.dropdown-menu {
  border: 0;
  box-shadow: 0px 10px 50px 0px rgba(0, 0, 0, 0.2);
  border-radius: 0.125rem;
  -webkit-transition: all 150ms linear;
  -moz-transition: all 150ms linear;
  -o-transition: all 150ms linear;
  -ms-transition: all 150ms linear;
  transition: all 150ms linear;
  font-size: 14px;
}

.dropdown-menu.dropdown-menu-right:before {
  left: auto;
  right: 10px;
}

.dropdown-menu i {
  margin-right: 5px;
  position: relative;
  top: 1px;
}

.dropdown-menu .now-ui-icons {
  margin-right: 10px;
  position: relative;
  top: 4px;
  font-size: 18px;
  margin-top: -5px;
  opacity: .5;
}

.dropdown-menu .dropdown-item.active,
.dropdown-menu .dropdown-item:active {
  color: inherit;
}

.dropup .dropdown-menu:before {
  display: none;
}

.dropup .dropdown-menu:after {
  display: inline-block;
  position: absolute;
  width: 0;
  height: 0;
  vertical-align: middle;
  content: "";
  top: auto;
  bottom: -5px;
  right: auto;
  left: 10px;
  color: #FFFFFF;
  border-top: .4em solid;
  border-right: .4em solid transparent;
  border-left: .4em solid transparent;
}

.dropup .dropdown-menu.dropdown-menu-right:after {
  right: 10px;
  left: auto;
}

.dropdown-menu:before {
  display: inline-block;
  position: absolute;
  width: 0;
  height: 0;
  vertical-align: middle;
  content: "";
  top: -5px;
  left: 10px;
  right: auto;
  color: #FFFFFF;
  border-bottom: .4em solid;
  border-right: .4em solid transparent;
  border-left: .4em solid transparent;
}

.dropdown-menu.dropdown-menu-right {
  right: 0 !important;
  left: auto !important;
}

.dropdown-menu .dropdown-item,
.bootstrap-select .dropdown-menu.inner li a {
  font-size: 0.8571em;
  padding-top: .6rem;
  padding-bottom: .6rem;
  margin-top: 5px;
  -webkit-transition: all 150ms linear;
  -moz-transition: all 150ms linear;
  -o-transition: all 150ms linear;
  -ms-transition: all 150ms linear;
  transition: all 150ms linear;
}

.dropdown-menu .dropdown-item:hover,
.dropdown-menu .dropdown-item:focus,
.bootstrap-select .dropdown-menu.inner li a:hover,
.bootstrap-select .dropdown-menu.inner li a:focus {
  background-color: rgba(222, 222, 222, 0.3);
  outline: 0;
}

.dropdown-menu .dropdown-item.disabled,
.dropdown-menu .dropdown-item:disabled,
.bootstrap-select .dropdown-menu.inner li a.disabled,
.bootstrap-select .dropdown-menu.inner li a:disabled {
  color: rgba(182, 182, 182, 0.6);
}

.dropdown-menu .dropdown-item.disabled:hover,
.dropdown-menu .dropdown-item.disabled:focus,
.dropdown-menu .dropdown-item:disabled:hover,
.dropdown-menu .dropdown-item:disabled:focus,
.bootstrap-select .dropdown-menu.inner li a.disabled:hover,
.bootstrap-select .dropdown-menu.inner li a.disabled:focus,
.bootstrap-select .dropdown-menu.inner li a:disabled:hover,
.bootstrap-select .dropdown-menu.inner li a:disabled:focus {
  background-color: transparent;
}

.dropdown-menu .dropdown-divider {
  background-color: rgba(222, 222, 222, 0.5);
}

.dropdown-menu .dropdown-header:not([href]):not([tabindex]) {
  color: rgba(182, 182, 182, 0.6);
  font-size: 0.7142em;
  text-transform: uppercase;
  font-weight: 700;
}

.dropdown-menu.dropdown-primary {
  background-color: #f95823;
}

.dropdown-menu.dropdown-primary:before {
  color: #f95823;
}

.dropdown-menu.dropdown-primary .dropdown-header:not([href]):not([tabindex]) {
  color: rgba(255, 255, 255, 0.8);
}

.dropdown-menu.dropdown-primary .dropdown-item {
  color: #FFFFFF;
}

.dropdown-menu.dropdown-primary .dropdown-item:hover,
.dropdown-menu.dropdown-primary .dropdown-item:focus {
  background-color: rgba(255, 255, 255, 0.2);
}

.dropdown-menu.dropdown-primary .dropdown-divider {
  background-color: rgba(255, 255, 255, 0.2);
}

.dropdown-menu.dropdown-info {
  background-color: #1da2ff;
}

.dropdown-menu.dropdown-info:before {
  color: #1da2ff;
}

.dropdown-menu.dropdown-info .dropdown-header:not([href]):not([tabindex]) {
  color: rgba(255, 255, 255, 0.8);
}

.dropdown-menu.dropdown-info .dropdown-item {
  color: #FFFFFF;
}

.dropdown-menu.dropdown-info .dropdown-item:hover,
.dropdown-menu.dropdown-info .dropdown-item:focus {
  background-color: rgba(255, 255, 255, 0.2);
}

.dropdown-menu.dropdown-info .dropdown-divider {
  background-color: rgba(255, 255, 255, 0.2);
}

.dropdown-menu.dropdown-danger {
  background-color: #ff2727;
}

.dropdown-menu.dropdown-danger:before {
  color: #ff2727;
}

.dropdown-menu.dropdown-danger .dropdown-header:not([href]):not([tabindex]) {
  color: rgba(255, 255, 255, 0.8);
}

.dropdown-menu.dropdown-danger .dropdown-item {
  color: #FFFFFF;
}

.dropdown-menu.dropdown-danger .dropdown-item:hover,
.dropdown-menu.dropdown-danger .dropdown-item:focus {
  background-color: rgba(255, 255, 255, 0.2);
}

.dropdown-menu.dropdown-danger .dropdown-divider {
  background-color: rgba(255, 255, 255, 0.2);
}

.dropdown-menu.dropdown-success {
  background-color: #16c00e;
}

.dropdown-menu.dropdown-success:before {
  color: #16c00e;
}

.dropdown-menu.dropdown-success .dropdown-header:not([href]):not([tabindex]) {
  color: rgba(255, 255, 255, 0.8);
}

.dropdown-menu.dropdown-success .dropdown-item {
  color: #FFFFFF;
}

.dropdown-menu.dropdown-success .dropdown-item:hover,
.dropdown-menu.dropdown-success .dropdown-item:focus {
  background-color: rgba(255, 255, 255, 0.2);
}

.dropdown-menu.dropdown-success .dropdown-divider {
  background-color: rgba(255, 255, 255, 0.2);
}

.dropdown-menu.dropdown-warning {
  background-color: #ffac27;
}

.dropdown-menu.dropdown-warning:before {
  color: #ffac27;
}

.dropdown-menu.dropdown-warning .dropdown-header:not([href]):not([tabindex]) {
  color: rgba(255, 255, 255, 0.8);
}

.dropdown-menu.dropdown-warning .dropdown-item {
  color: #FFFFFF;
}

.dropdown-menu.dropdown-warning .dropdown-item:hover,
.dropdown-menu.dropdown-warning .dropdown-item:focus {
  background-color: rgba(255, 255, 255, 0.2);
}

.dropdown-menu.dropdown-warning .dropdown-divider {
  background-color: rgba(255, 255, 255, 0.2);
}

.dropdown .dropdown-menu:not(.inner),
.dropup:not(.bootstrap-select) .dropdown-menu,
.dropdown-menu.bootstrap-datetimepicker-widget.top,
.dropdown-menu.bootstrap-datetimepicker-widget.bottom {
  visibility: hidden;
  display: block;
  opacity: 0;
  filter: alpha(opacity=0);
  top: 100% !important;
}

.dropdown .dropdown-menu:not(.inner),
.dropdown-menu.bootstrap-datetimepicker-widget.bottom {
  -webkit-transform: translate3d(0, -20px, 0) !important;
  -moz-transform: translate3d(0, -20px, 0) !important;
  -o-transform: translate3d(0, -20px, 0) !important;
  -ms-transform: translate3d(0, -20px, 0) !important;
  transform: translate3d(0, -20px, 0) !important;
}

.bootstrap-select.dropup .dropdown-menu:not(.inner) {
  -webkit-transform: translate3d(0, 25px, 0) !important;
  -moz-transform: translate3d(0, 25px, 0) !important;
  -o-transform: translate3d(0, 25px, 0) !important;
  -ms-transform: translate3d(0, 25px, 0) !important;
  transform: translate3d(0, 25px, 0) !important;
}

.dropup:not(.bootstrap-select) .dropdown-menu,
.dropdown-menu.bootstrap-datetimepicker-widget.top {
  -webkit-transform: translate3d(0, 20px, 0) !important;
  -moz-transform: translate3d(0, 20px, 0) !important;
  -o-transform: translate3d(0, 20px, 0) !important;
  -ms-transform: translate3d(0, 20px, 0) !important;
  transform: translate3d(0, 20px, 0) !important;
  top: auto !important;
  bottom: 100%;
}

.dropdown.show .dropdown-menu:not(.inner),
.dropdown-menu.bootstrap-datetimepicker-widget.top.open,
.dropdown-menu.bootstrap-datetimepicker-widget.bottom.open,
.dropup.show:not(.bootstrap-select) .dropdown-menu,
.navbar .dropdown.show .dropdown-menu {
  opacity: 1;
  filter: alpha(opacity=100);
  visibility: visible;
}

.dropdown.show .dropdown-menu:not(.inner),
.dropdown-menu.bootstrap-datetimepicker-widget.bottom.open,
.navbar .dropdown.show .dropdown-menu {
  -webkit-transform: translate3d(0, 1px, 0) !important;
  -moz-transform: translate3d(0, 1px, 0) !important;
  -o-transform: translate3d(0, 1px, 0) !important;
  -ms-transform: translate3d(0, 1px, 0) !important;
  transform: translate3d(0, 1px, 0) !important;
}

.dropup.show:not(.bootstrap-select) .dropdown-menu,
.dropdown-menu.bootstrap-datetimepicker-widget.top.open {
  -webkit-transform: translate3d(0, -2px, 0) !important;
  -moz-transform: translate3d(0, -2px, 0) !important;
  -o-transform: translate3d(0, -2px, 0) !important;
  -ms-transform: translate3d(0, -2px, 0) !important;
  transform: translate3d(0, -2px, 0) !important;
}

.button-dropdown {
  padding-right: 0.7rem;
  cursor: pointer;
}

.button-dropdown .dropdown-toggle {
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  display: block;
}

.button-dropdown .dropdown-toggle:after {
  display: none;
}

.alert {
  border: 0;
  border-radius: 0.1875rem;
  color: #FFFFFF;
  padding-top: .9rem;
  padding-bottom: .9rem;
  position: relative;
}

.alert.alert-success {
  background-color: #1be611;
}

.alert.alert-danger {
  background-color: #ff5050;
}

.alert.alert-warning {
  background-color: #ffbc50;
}

.alert.alert-info {
  background-color: #46b3ff;
}

.alert.alert-primary {
  background-color: #fa764b;
}

.alert i.fa,
.alert i.now-ui-icons {
  font-size: 20px;
}

.alert .close {
  color: #FFFFFF !important;
  opacity: .9;
  text-shadow: none;
  line-height: 0;
  outline: 0;
}

.alert span[data-notify="icon"] {
  font-size: 22px;
  display: block;
  left: 19px;
  position: absolute;
  top: 50%;
  margin-top: -11px;
}

.alert button.close {
  position: absolute;
  right: 10px;
  top: 50%;
  margin-top: -13px;
  width: 25px;
  height: 25px;
  padding: 3px;
}

.alert .close~span {
  display: block;
  max-width: 89%;
}

.alert.alert-with-icon {
  padding-left: 65px;
}

img {
  max-width: 100%;
  border-radius: 0.1875rem;
}

.img-raised {
  box-shadow: 0px 10px 25px 0px rgba(0, 0, 0, 0.3);
}

/* --------------------------------

Nucleo Outline Web Font - nucleoapp.com/
License - nucleoapp.com/license/
Created using IcoMoon - icomoon.io

-------------------------------- */

@font-face {
  font-family: 'Nucleo Outline';
  src: url("../fonts/nucleo-outline.eot");
  src: url("../fonts/nucleo-outline.eot") format("embedded-opentype"), url("../fonts/nucleo-outline.woff2") format("woff2"), url("../fonts/nucleo-outline.woff") format("woff"), url("../fonts/nucleo-outline.ttf") format("truetype");
  font-weight: normal;
  font-style: normal;
}

/*------------------------
	base class definition
-------------------------*/

.now-ui-icons {
  display: inline-block;
  font: normal normal normal 14px/1 'Nucleo Outline';
  font-size: inherit;
  speak: none;
  text-transform: none;
  /* Better Font Rendering */
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

/*------------------------
  change icon size
-------------------------*/

/*----------------------------------
  add a square/circle background
-----------------------------------*/

.now-ui-icons.circle {
  padding: 0.33333333em;
  vertical-align: -16%;
  background-color: #eee;
}

.now-ui-icons.circle {
  border-radius: 50%;
}

/*------------------------
  list icons
-------------------------*/

.nc-icon-ul {
  padding-left: 0;
  margin-left: 2.14285714em;
  list-style-type: none;
}

.nc-icon-ul>li {
  position: relative;
}

.nc-icon-ul>li>.now-ui-icons {
  position: absolute;
  left: -1.57142857em;
  top: 0.14285714em;
  text-align: center;
}

.nc-icon-ul>li>.now-ui-icons.circle {
  top: -0.19047619em;
  left: -1.9047619em;
}

/*------------------------
  spinning icons
-------------------------*/

.now-ui-icons.spin {
  -webkit-animation: nc-icon-spin 2s infinite linear;
  -moz-animation: nc-icon-spin 2s infinite linear;
  animation: nc-icon-spin 2s infinite linear;
}

@-webkit-keyframes nc-icon-spin {
  0% {
    -webkit-transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
  }
}

@-moz-keyframes nc-icon-spin {
  0% {
    -moz-transform: rotate(0deg);
  }
  100% {
    -moz-transform: rotate(360deg);
  }
}

@keyframes nc-icon-spin {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}

/*------------------------
  rotated/flipped icons
-------------------------*/

/*------------------------
	font icons
-------------------------*/

.now-ui-icons.ui-1_check:before {
  content: "\ea22";
}

.now-ui-icons.ui-1_email-85:before {
  content: "\ea2a";
}

.now-ui-icons.arrows-1_cloud-download-93:before {
  content: "\ea21";
}

.now-ui-icons.arrows-1_cloud-upload-94:before {
  content: "\ea24";
}

.now-ui-icons.arrows-1_minimal-down:before {
  content: "\ea39";
}

.now-ui-icons.arrows-1_minimal-left:before {
  content: "\ea3a";
}

.now-ui-icons.arrows-1_minimal-right:before {
  content: "\ea3b";
}

.now-ui-icons.arrows-1_minimal-up:before {
  content: "\ea3c";
}

.now-ui-icons.arrows-1_refresh-69:before {
  content: "\ea44";
}

.now-ui-icons.arrows-1_share-66:before {
  content: "\ea4c";
}

.now-ui-icons.business_badge:before {
  content: "\ea09";
}

.now-ui-icons.business_bank:before {
  content: "\ea0a";
}

.now-ui-icons.business_briefcase-24:before {
  content: "\ea13";
}

.now-ui-icons.business_bulb-63:before {
  content: "\ea15";
}

.now-ui-icons.business_chart-bar-32:before {
  content: "\ea1e";
}

.now-ui-icons.business_chart-pie-36:before {
  content: "\ea1f";
}

.now-ui-icons.business_globe:before {
  content: "\ea2f";
}

.now-ui-icons.business_money-coins:before {
  content: "\ea40";
}

.now-ui-icons.clothes_tie-bow:before {
  content: "\ea5b";
}

.now-ui-icons.design_vector:before {
  content: "\ea61";
}

.now-ui-icons.design_app:before {
  content: "\ea08";
}

.now-ui-icons.design_bullet-list-67:before {
  content: "\ea14";
}

.now-ui-icons.design_image:before {
  content: "\ea33";
}

.now-ui-icons.design_palette:before {
  content: "\ea41";
}

.now-ui-icons.design_scissors:before {
  content: "\ea4a";
}

.now-ui-icons.design-2_html5:before {
  content: "\ea32";
}

.now-ui-icons.design-2_ruler-pencil:before {
  content: "\ea48";
}

.now-ui-icons.emoticons_satisfied:before {
  content: "\ea49";
}

.now-ui-icons.files_box:before {
  content: "\ea12";
}

.now-ui-icons.files_paper:before {
  content: "\ea43";
}

.now-ui-icons.files_single-copy-04:before {
  content: "\ea52";
}

.now-ui-icons.health_ambulance:before {
  content: "\ea07";
}

.now-ui-icons.loader_gear:before {
  content: "\ea4e";
}

.now-ui-icons.loader_refresh:before {
  content: "\ea44";
}

.now-ui-icons.location_bookmark:before {
  content: "\ea10";
}

.now-ui-icons.location_compass-05:before {
  content: "\ea25";
}

.now-ui-icons.location_map-big:before {
  content: "\ea3d";
}

.now-ui-icons.location_pin:before {
  content: "\ea47";
}

.now-ui-icons.location_world:before {
  content: "\ea63";
}

.now-ui-icons.media-1_album:before {
  content: "\ea02";
}

.now-ui-icons.media-1_button-pause:before {
  content: "\ea16";
}

.now-ui-icons.media-1_button-play:before {
  content: "\ea18";
}

.now-ui-icons.media-1_button-power:before {
  content: "\ea19";
}

.now-ui-icons.media-1_camera-compact:before {
  content: "\ea1c";
}

.now-ui-icons.media-2_note-03:before {
  content: "\ea3f";
}

.now-ui-icons.media-2_sound-wave:before {
  content: "\ea57";
}

.now-ui-icons.objects_diamond:before {
  content: "\ea29";
}

.now-ui-icons.objects_globe:before {
  content: "\ea2f";
}

.now-ui-icons.objects_key-25:before {
  content: "\ea38";
}

.now-ui-icons.objects_planet:before {
  content: "\ea46";
}

.now-ui-icons.objects_spaceship:before {
  content: "\ea55";
}

.now-ui-icons.objects_support-17:before {
  content: "\ea56";
}

.now-ui-icons.objects_umbrella-13:before {
  content: "\ea5f";
}

.now-ui-icons.education_agenda-bookmark:before {
  content: "\ea01";
}

.now-ui-icons.education_atom:before {
  content: "\ea0c";
}

.now-ui-icons.education_glasses:before {
  content: "\ea2d";
}

.now-ui-icons.education_hat:before {
  content: "\ea30";
}

.now-ui-icons.education_paper:before {
  content: "\ea42";
}

.now-ui-icons.shopping_bag-16:before {
  content: "\ea0d";
}

.now-ui-icons.shopping_basket:before {
  content: "\ea0b";
}

.now-ui-icons.shopping_box:before {
  content: "\ea11";
}

.now-ui-icons.shopping_cart-simple:before {
  content: "\ea1d";
}

.now-ui-icons.shopping_credit-card:before {
  content: "\ea28";
}

.now-ui-icons.shopping_delivery-fast:before {
  content: "\ea27";
}

.now-ui-icons.shopping_shop:before {
  content: "\ea50";
}

.now-ui-icons.shopping_tag-content:before {
  content: "\ea59";
}

.now-ui-icons.sport_trophy:before {
  content: "\ea5d";
}

.now-ui-icons.sport_user-run:before {
  content: "\ea60";
}

.now-ui-icons.tech_controller-modern:before {
  content: "\ea26";
}

.now-ui-icons.tech_headphones:before {
  content: "\ea31";
}

.now-ui-icons.tech_laptop:before {
  content: "\ea36";
}

.now-ui-icons.tech_mobile:before {
  content: "\ea3e";
}

.now-ui-icons.tech_tablet:before {
  content: "\ea58";
}

.now-ui-icons.tech_tv:before {
  content: "\ea5e";
}

.now-ui-icons.tech_watch-time:before {
  content: "\ea62";
}

.now-ui-icons.text_align-center:before {
  content: "\ea05";
}

.now-ui-icons.text_align-left:before {
  content: "\ea06";
}

.now-ui-icons.text_bold:before {
  content: "\ea0e";
}

.now-ui-icons.text_caps-small:before {
  content: "\ea1b";
}

.now-ui-icons.gestures_tap-01:before {
  content: "\ea5a";
}

.now-ui-icons.transportation_air-baloon:before {
  content: "\ea03";
}

.now-ui-icons.transportation_bus-front-12:before {
  content: "\ea17";
}

.now-ui-icons.travel_info:before {
  content: "\ea04";
}

.now-ui-icons.travel_istanbul:before {
  content: "\ea34";
}

.now-ui-icons.ui-1_bell-53:before {
  content: "\ea0f";
}

.now-ui-icons.ui-1_calendar-60:before {
  content: "\ea1a";
}

.now-ui-icons.ui-1_lock-circle-open:before {
  content: "\ea35";
}

.now-ui-icons.ui-1_send:before {
  content: "\ea4d";
}

.now-ui-icons.ui-1_settings-gear-63:before {
  content: "\ea4e";
}

.now-ui-icons.ui-1_simple-add:before {
  content: "\ea4f";
}

.now-ui-icons.ui-1_simple-delete:before {
  content: "\ea54";
}

.now-ui-icons.ui-1_simple-remove:before {
  content: "\ea53";
}

.now-ui-icons.ui-1_zoom-bold:before {
  content: "\ea64";
}

.now-ui-icons.ui-2_chat-round:before {
  content: "\ea20";
}

.now-ui-icons.ui-2_favourite-28:before {
  content: "\ea2b";
}

.now-ui-icons.ui-2_like:before {
  content: "\ea37";
}

.now-ui-icons.ui-2_settings-90:before {
  content: "\ea4b";
}

.now-ui-icons.ui-2_time-alarm:before {
  content: "\ea5c";
}

.now-ui-icons.users_circle-08:before {
  content: "\ea23";
}

.now-ui-icons.users_single-02:before {
  content: "\ea51";
}

.all-icons .font-icon-detail {
  text-align: center;
  padding: 45px 0px 30px;
  border: 1px solid #e5e5e5;
  border-radius: 0.1875rem;
  margin: 15px 0;
  min-height: 168px;
}

.all-icons [class*="now-ui-icons"] {
  font-size: 32px;
}

.all-icons .font-icon-detail p {
  margin: 25px auto 0;
  width: 100%;
  text-align: center;
  display: block;
  color: #B8B8B8;
  padding: 0 10px;
  font-size: 0.7142em;
}

.table .img-wrapper {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  overflow: hidden;
  margin: 0 auto;
}

.table .img-row {
  max-width: 60px;
  width: 60px;
}

.table .form-check {
  margin: 0;
}

.table .form-check label .form-check-sign::before,
.table .form-check label .form-check-sign::after {
  top: -17px;
  left: 4px;
}

.table .btn {
  margin: 0;
}

.table small,
.table .small {
  font-weight: 300;
}

.card-tasks .card-body .table {
  margin-bottom: 0;
}

.card-tasks .card-body .table>thead>tr>th,
.card-tasks .card-body .table>tbody>tr>th,
.card-tasks .card-body .table>tfoot>tr>th,
.card-tasks .card-body .table>thead>tr>td,
.card-tasks .card-body .table>tbody>tr>td,
.card-tasks .card-body .table>tfoot>tr>td {
  padding-top: 0;
  padding-bottom: 0;
}

.table>thead>tr>th {
  border-bottom-width: 1px;
  font-size: 1.45em;
  font-weight: 300;
  border: 0;
}

.table .radio,
.table .checkbox {
  margin-top: 0;
  margin-bottom: 0;
  padding: 0;
  width: 15px;
}

.table .radio .icons,
.table .checkbox .icons {
  position: relative;
}

.table .radio label:after,
.table .radio label:before,
.table .checkbox label:after,
.table .checkbox label:before {
  top: -17px;
  left: -3px;
}

.table>thead>tr>th,
.table>tbody>tr>th,
.table>tfoot>tr>th,
.table>thead>tr>td,
.table>tbody>tr>td,
.table>tfoot>tr>td {
  padding: 12px 7px;
  vertical-align: middle;
}

.table .th-description {
  max-width: 150px;
}

.table .td-price {
  font-size: 26px;
  font-weight: 300;
  margin-top: 5px;
  position: relative;
  top: 4px;
  text-align: right;
}

.table .td-total {
  font-weight: 700;
  font-size: 1.57em;
  padding-top: 20px;
  text-align: right;
}

.table .td-actions .btn {
  margin: 0px;
}

.table>tbody>tr {
  position: relative;
}

.table-shopping>thead>tr>th {
  font-size: 1em;
  text-transform: uppercase;
}

.table-shopping>tbody>tr>td {
  font-size: 1em;
}

.table-shopping>tbody>tr>td b {
  display: block;
  margin-bottom: 5px;
}

.table-shopping .td-name {
  font-weight: 400;
  font-size: 1.5em;
}

.table-shopping .td-name small {
  color: #9A9A9A;
  font-size: 0.75em;
  font-weight: 300;
}

.table-shopping .td-number {
  font-weight: 300;
  font-size: 1.714em;
}

.table-shopping .td-name {
  min-width: 200px;
}

.table-shopping .td-number {
  text-align: right;
  min-width: 170px;
}

.table-shopping .td-number small {
  margin-right: 3px;
}

.table-shopping .img-container {
  width: 120px;
  max-height: 160px;
  overflow: hidden;
  display: block;
}

.table-shopping .img-container img {
  width: 100%;
}

.table-responsive {
  overflow: auto;
  padding-bottom: 10px;
}

#tables .table-responsive {
  margin-bottom: 30px;
}

.footer {
  padding: 24px 0;
}

.footer.footer-default {
  background-color: #f2f2f2;
}

.footer nav {
  display: inline-block;
  float: left;
  padding-left: 7px;
}

.footer ul {
  margin-bottom: 0;
  padding: 0;
  list-style: none;
}

.footer ul li {
  display: inline-block;
}

.footer ul li a {
  color: inherit;
  padding: 0.5rem;
  font-size: 0.8571em;
  text-transform: uppercase;
  text-decoration: none;
}

.footer ul li a:hover {
  text-decoration: none;
}

.footer.fixed-bottom {
  width: calc(100% - 80px);
  margin-left: auto;
}

.footer .copyright {
  font-size: 0.8571em;
  line-height: 1.8;
}

.footer:after {
  display: table;
  clear: both;
  content: " ";
}

.fixed-plugin {
  position: fixed;
  right: 0;
  width: 64px;
  background: rgba(0, 0, 0, 0.3);
  z-index: 1031;
  border-radius: 8px 0 0 8px;
  text-align: center;
  top: 120px;
}

.fixed-plugin li>a,
.fixed-plugin .badge {
  transition: all .34s;
  -webkit-transition: all .34s;
  -moz-transition: all .34s;
}

.fixed-plugin .fa-cog {
  color: #FFFFFF;
  padding: 10px;
  border-radius: 0 0 6px 6px;
  width: auto;
}

.fixed-plugin .dropdown .dropdown-menu {
  right: 80px;
  left: auto !important;
  top: -52px !important;
  width: 290px;
  border-radius: 0.1875rem;
  padding: 0 10px;
}

.fixed-plugin .dropdown .dropdown-menu .now-ui-icons {
  top: 5px;
}

.fixed-plugin .dropdown-menu:after,
.fixed-plugin .dropdown-menu:before {
  right: 10px;
  margin-left: auto;
  left: auto;
}

.fixed-plugin .fa-circle-thin {
  color: #FFFFFF;
}

.fixed-plugin .active .fa-circle-thin {
  color: #00bbff;
}

.fixed-plugin .dropdown-menu>.active>a,
.fixed-plugin .dropdown-menu>.active>a:hover,
.fixed-plugin .dropdown-menu>.active>a:focus {
  color: #777777;
  text-align: center;
}

.fixed-plugin img {
  border-radius: 0;
  width: 100%;
  height: 100px;
  margin: 0 auto;
}

.fixed-plugin .dropdown-menu li>a:hover,
.fixed-plugin .dropdown-menu li>a:focus {
  box-shadow: none;
}

.fixed-plugin .badge {
  border: 3px solid #FFFFFF;
  border-radius: 50%;
  cursor: pointer;
  display: inline-block;
  height: 23px;
  margin-right: 5px;
  position: relative;
  width: 23px;
}

.fixed-plugin .badge.active,
.fixed-plugin .badge:hover {
  border-color: #00bbff;
}

.fixed-plugin .badge-blue {
  background-color: #2CA8FF;
}

.fixed-plugin .badge-green {
  background-color: #18ce0f;
}

.fixed-plugin .badge-orange {
  background-color: #f96332;
}

.fixed-plugin .badge-yellow {
  background-color: #FFB236;
}

.fixed-plugin .badge-red {
  background-color: #FF3636;
}

.fixed-plugin h5 {
  font-size: 14px;
  margin: 10px;
}

.fixed-plugin .dropdown-menu li {
  display: block;
  padding: 18px 2px;
  width: 25%;
  float: left;
}

.fixed-plugin li.adjustments-line,
.fixed-plugin li.header-title,
.fixed-plugin li.button-container {
  width: 100%;
  height: 50px;
  min-height: inherit;
}

.fixed-plugin li.button-container {
  height: auto;
}

.fixed-plugin li.button-container div {
  margin-bottom: 5px;
}

.fixed-plugin #sharrreTitle {
  text-align: center;
  padding: 10px 0;
  height: 50px;
}

.fixed-plugin li.header-title {
  height: 30px;
  line-height: 25px;
  font-size: 12px;
  font-weight: 600;
  text-align: center;
  text-transform: uppercase;
}

.fixed-plugin .adjustments-line p {
  float: left;
  display: inline-block;
  margin-bottom: 0;
  font-size: 1em;
  color: #3C4858;
}

.fixed-plugin .adjustments-line a {
  color: transparent;
}

.fixed-plugin .adjustments-line a .badge-colors {
  position: relative;
  top: -2px;
}

.fixed-plugin .adjustments-line a a:hover,
.fixed-plugin .adjustments-line a a:focus {
  color: transparent;
}

.fixed-plugin .adjustments-line .togglebutton {
  text-align: center;
}

.fixed-plugin .adjustments-line .togglebutton .label-switch {
  position: relative;
  left: -10px;
  font-size: 0.7142em;
  color: #888;
}

.fixed-plugin .adjustments-line .togglebutton .label-switch.label-right {
  left: 10px;
}

.fixed-plugin .adjustments-line .togglebutton .toggle {
  margin-right: 0;
}

.fixed-plugin .adjustments-line .dropdown-menu>li.adjustments-line>a {
  padding-right: 0;
  padding-left: 0;
  border-bottom: 1px solid #ddd;
  border-radius: 0;
  margin: 0;
}

.fixed-plugin .dropdown-menu>li>a.img-holder {
  font-size: 16px;
  text-align: center;
  border-radius: 10px;
  background-color: #FFF;
  border: 3px solid #FFF;
  padding-left: 0;
  padding-right: 0;
  opacity: 1;
  cursor: pointer;
  display: block;
  max-height: 100px;
  overflow: hidden;
  padding: 0;
}

.fixed-plugin .dropdown-menu>li>a.img-holder img {
  margin-top: auto;
}

.fixed-plugin .dropdown-menu>li a.switch-trigger:hover,
.fixed-plugin .dropdown-menu>li>a.switch-trigger:focus {
  background-color: transparent;
}

.fixed-plugin .dropdown-menu>li:hover>a.img-holder,
.fixed-plugin .dropdown-menu>li:focus>a.img-holder {
  border-color: rgba(0, 187, 255, 0.53);
}

.fixed-plugin .dropdown-menu>.active>a.img-holder,
.fixed-plugin .dropdown-menu>.active>a.img-holder {
  border-color: #00bbff;
  background-color: #FFFFFF;
}

.fixed-plugin .btn-social {
  width: 50%;
  display: block;
  width: 48%;
  float: left;
  font-weight: 600;
}

.fixed-plugin .btn-social i {
  margin-right: 5px;
}

.fixed-plugin .btn-social:first-child {
  margin-right: 2%;
}

.fixed-plugin .dropdown .dropdown-menu {
  -webkit-transform: translateY(-15%);
  -moz-transform: translateY(-15%);
  -o-transform: translateY(-15%);
  -ms-transform: translateY(-15%);
  transform: translateY(-15%);
  top: 27px;
  opacity: 0;
  transform-origin: 0 0;
}

.fixed-plugin .dropdown .dropdown-menu:before {
  border-bottom: 0.4em solid rgba(0, 0, 0, 0);
  border-left: 0.4em solid rgba(0, 0, 0, 0.2);
  border-top: 0.4em solid rgba(0, 0, 0, 0);
  right: -16px;
  top: 46px;
}

.fixed-plugin .dropdown .dropdown-menu:after {
  border-bottom: 0.4em solid rgba(0, 0, 0, 0);
  border-left: .4em solid #FFFFFF;
  border-top: 0.4em solid rgba(0, 0, 0, 0);
  right: -16px;
}

.fixed-plugin .dropdown .dropdown-menu:before,
.fixed-plugin .dropdown .dropdown-menu:after {
  content: "";
  display: inline-block;
  position: absolute;
  top: 74px;
  width: 16px;
  transform: translateY(-50%);
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
}

.fixed-plugin .dropdown.show .dropdown-menu {
  opacity: 1;
  -webkit-transform: translateY(-13%);
  -moz-transform: translateY(-13%);
  -o-transform: translateY(-13%);
  -ms-transform: translateY(-13%);
  transform: translateY(-13%);
  transform-origin: 0 0;
}

.fixed-plugin .bootstrap-switch {
  margin: 0;
}

.form-check {
  margin-top: .5rem;
}

.form-check .form-check-label {
  display: inline-block;
  position: relative;
  cursor: pointer;
  padding-left: 35px;
  line-height: 26px;
  margin-bottom: 0;
  -webkit-transition: color 0.3s linear;
  -moz-transition: color 0.3s linear;
  -o-transition: color 0.3s linear;
  -ms-transition: color 0.3s linear;
  transition: color 0.3s linear;
}

.radio .form-check-sign {
  padding-left: 28px;
}

.form-check .form-check-sign::before,
.form-check .form-check-sign::after {
  content: " ";
  display: inline-block;
  position: absolute;
  width: 26px;
  height: 26px;
  left: 0;
  cursor: pointer;
  border-radius: 3px;
  top: 0;
  background-color: transparent;
  border: 1px solid #E3E3E3;
  -webkit-transition: opacity 0.3s linear;
  -moz-transition: opacity 0.3s linear;
  -o-transition: opacity 0.3s linear;
  -ms-transition: opacity 0.3s linear;
  transition: opacity 0.3s linear;
}

.form-check .form-check-sign::after {
  font-family: 'Nucleo Outline';
  content: "\ea22";
  top: 0px;
  text-align: center;
  font-size: 14px;
  opacity: 0;
  color: #555555;
  border: 0;
  background-color: inherit;
}

.form-check.disabled .form-check-label,
.form-check.disabled .form-check-label {
  color: #9A9A9A;
  opacity: .5;
  cursor: not-allowed;
}

.form-check input[type="checkbox"],
.radio input[type="radio"] {
  opacity: 0;
  position: absolute;
  visibility: hidden;
}

.form-check input[type="checkbox"]:checked+.form-check-sign::after {
  opacity: 1;
}

.form-control input[type="checkbox"]:disabled+.form-check-sign::before,
.checkbox input[type="checkbox"]:disabled+.form-check-sign::after {
  cursor: not-allowed;
}

.form-check input[type="checkbox"]:disabled+.form-check-sign,
.form-check input[type="radio"]:disabled+.form-check-sign {
  pointer-events: none;
}

.form-check-radio .form-check-sign::before,
.form-check-radio .form-check-sign::after {
  content: " ";
  width: 20px;
  height: 20px;
  border-radius: 50%;
  border: 1px solid #E3E3E3;
  display: inline-block;
  position: absolute;
  left: 3px;
  top: 3px;
  padding: 1px;
  -webkit-transition: opacity 0.3s linear;
  -moz-transition: opacity 0.3s linear;
  -o-transition: opacity 0.3s linear;
  -ms-transition: opacity 0.3s linear;
  transition: opacity 0.3s linear;
}

.form-check-radio input[type="radio"]+.form-check-sign:after,
.form-check-radio input[type="radio"] {
  opacity: 0;
}

.form-check-radio input[type="radio"]:checked+.form-check-sign::after {
  width: 4px;
  height: 4px;
  background-color: #555555;
  border-color: #555555;
  top: 11px;
  left: 11px;
  opacity: 1;
}

.form-check-radio input[type="radio"]:checked+.form-check-sign::after {
  opacity: 1;
}

.form-check-radio input[type="radio"]:disabled+.form-check-sign {
  color: #9A9A9A;
}

.form-check-radio input[type="radio"]:disabled+.form-check-sign::before,
.form-check-radio input[type="radio"]:disabled+.form-check-sign::after {
  color: #9A9A9A;
}

.progress-container {
  position: relative;
}

.progress-container+.progress-container,
.progress-container~.progress-container {
  margin-top: 15px;
}

.progress-container .progress-badge {
  color: #888;
  font-size: 0.8571em;
  text-transform: uppercase;
}

.progress-container .progress {
  height: 1px;
  border-radius: 0;
  box-shadow: none;
  background: rgba(222, 222, 222, 0.5);
  margin-top: 14px;
}

.progress-container .progress .progress-bar {
  box-shadow: none;
  background-color: #888;
}

.progress-container .progress .progress-value {
  position: absolute;
  top: 2px;
  right: 0;
  color: #888;
  font-size: 0.8571em;
}

.progress-container.progress-neutral .progress {
  background: rgba(255, 255, 255, 0.3);
}

.progress-container.progress-neutral .progress-bar {
  background: #FFFFFF;
}

.progress-container.progress-neutral .progress-value,
.progress-container.progress-neutral .progress-badge {
  color: #FFFFFF;
}

.progress-container.progress-primary .progress {
  background: rgba(249, 99, 50, 0.3);
}

.progress-container.progress-primary .progress-bar {
  background: #f96332;
}

.progress-container.progress-primary .progress-value,
.progress-container.progress-primary .progress-badge {
  color: #f96332;
}

.progress-container.progress-info .progress {
  background: rgba(44, 168, 255, 0.3);
}

.progress-container.progress-info .progress-bar {
  background: #2CA8FF;
}

.progress-container.progress-info .progress-value,
.progress-container.progress-info .progress-badge {
  color: #2CA8FF;
}

.progress-container.progress-success .progress {
  background: rgba(24, 206, 15, 0.3);
}

.progress-container.progress-success .progress-bar {
  background: #18ce0f;
}

.progress-container.progress-success .progress-value,
.progress-container.progress-success .progress-badge {
  color: #18ce0f;
}

.progress-container.progress-warning .progress {
  background: rgba(255, 178, 54, 0.3);
}

.progress-container.progress-warning .progress-bar {
  background: #FFB236;
}

.progress-container.progress-warning .progress-value,
.progress-container.progress-warning .progress-badge {
  color: #FFB236;
}

.progress-container.progress-danger .progress {
  background: rgba(255, 54, 54, 0.3);
}

.progress-container.progress-danger .progress-bar {
  background: #FF3636;
}

.progress-container.progress-danger .progress-value,
.progress-container.progress-danger .progress-badge {
  color: #FF3636;
}

/*           badges             */

.badge {
  border-radius: 8px;
  padding: 4px 8px;
  text-transform: uppercase;
  font-size: 0.7142em;
  line-height: 12px;
  background-color: transparent;
  border: 1px solid;
  text-decoration: none;
  color: #FFFFFF;
  margin-bottom: 5px;
  border-radius: 0.875rem;
}

.badge:hover,
.badge:focus {
  text-decoration: none;
}

.badge-icon {
  padding: 0.4em 0.55em;
}

.badge-icon i {
  font-size: 0.8em;
}

.badge-default {
  border-color: #888;
  background-color: #888;
}

.badge-primary {
  border-color: #f96332;
  background-color: #f96332;
}

.badge-info {
  border-color: #2CA8FF;
  background-color: #2CA8FF;
}

.badge-success {
  border-color: #18ce0f;
  background-color: #18ce0f;
}

.badge-warning {
  border-color: #FFB236;
  background-color: #FFB236;
}

.badge-danger {
  border-color: #FF3636;
  background-color: #FF3636;
}

.badge-neutral {
  border-color: #FFFFFF;
  background-color: #FFFFFF;
  color: inherit;
}

.badge-primary[href]:focus,
.badge-primary[href]:hover {
  color: #FFFFFF;
  background-color: #f95823;
  border-color: #f95823;
}

.badge-warning[href]:focus,
.badge-warning[href]:hover {
  color: #FFFFFF;
  background-color: #ffac27;
  border-color: #ffac27;
}

.badge-info[href]:focus,
.badge-info[href]:hover {
  color: #FFFFFF;
  background-color: #1da2ff;
  border-color: #1da2ff;
}

.badge-danger[href]:focus,
.badge-danger[href]:hover {
  color: #FFFFFF;
  background-color: #ff2727;
  border-color: #ff2727;
}

.badge-success[href]:focus,
.badge-success[href]:hover {
  color: #FFFFFF;
  background-color: #16c00e;
  border-color: #16c00e;
}

.badge-default[href]:focus,
.badge-default[href]:hover {
  color: #FFFFFF;
  background-color: gray;
  border-color: gray;
}

.pagination .page-item .page-link {
  border: 0;
  border-radius: 30px !important;
  transition: all .3s;
  padding: 0px 11px;
  margin: 0 3px;
  min-width: 30px;
  text-align: center;
  height: 30px;
  line-height: 30px;
  color: #2c2c2c;
  cursor: pointer;
  font-size: 14px;
  text-transform: uppercase;
  background: transparent;
  outline: none;
}

.pagination .page-item .page-link:hover,
.pagination .page-item .page-link:focus {
  color: #2c2c2c;
  background-color: rgba(222, 222, 222, 0.3);
  border: none;
}

.pagination .arrow-margin-left,
.pagination .arrow-margin-right {
  position: absolute;
}

.pagination .arrow-margin-right {
  right: 0;
}

.pagination .arrow-margin-left {
  left: 0;
}

.pagination .page-item.active>.page-link {
  color: #FFFFFF;
  box-shadow: 0 1px 15px 1px rgba(39, 39, 39, 0.1);
}

.pagination .page-item.active>.page-link,
.pagination .page-item.active>.page-link:focus,
.pagination .page-item.active>.page-link:hover {
  background-color: #f96332;
  border-color: #f96332;
  color: #FFFFFF;
}

.pagination .page-item.disabled>.page-link {
  opacity: .5;
}

.pagination.pagination-info .page-item.active>.page-link,
.pagination.pagination-info .page-item.active>.page-link:focus,
.pagination.pagination-info .page-item.active>.page-link:hover {
  background-color: #2CA8FF;
  border-color: #2CA8FF;
}

.pagination.pagination-success .page-item.active>.page-link,
.pagination.pagination-success .page-item.active>.page-link:focus,
.pagination.pagination-success .page-item.active>.page-link:hover {
  background-color: #18ce0f;
  border-color: #18ce0f;
}

.pagination.pagination-primary .page-item.active>.page-link,
.pagination.pagination-primary .page-item.active>.page-link:focus,
.pagination.pagination-primary .page-item.active>.page-link:hover {
  background-color: #f96332;
  border-color: #f96332;
}

.pagination.pagination-warning .page-item.active>.page-link,
.pagination.pagination-warning .page-item.active>.page-link:focus,
.pagination.pagination-warning .page-item.active>.page-link:hover {
  background-color: #FFB236;
  border-color: #FFB236;
}

.pagination.pagination-danger .page-item.active>.page-link,
.pagination.pagination-danger .page-item.active>.page-link:focus,
.pagination.pagination-danger .page-item.active>.page-link:hover {
  background-color: #FF3636;
  border-color: #FF3636;
}

.pagination.pagination-neutral .page-item>.page-link {
  color: #FFFFFF;
}

.pagination.pagination-neutral .page-item>.page-link:focus,
.pagination.pagination-neutral .page-item>.page-link:hover {
  background-color: rgba(255, 255, 255, 0.2);
  color: #FFFFFF;
}

.pagination.pagination-neutral .page-item.active>.page-link,
.pagination.pagination-neutral .page-item.active>.page-link:focus,
.pagination.pagination-neutral .page-item.active>.page-link:hover {
  background-color: #FFFFFF;
  border-color: #FFFFFF;
  color: #f96332;
}

.info.info-hover .info-title {
  transition: color .4s;
}

.info.info-hover:hover .icon {
  -webkit-transform: translate3d(0, -0.5rem, 0);
  -moz-transform: translate3d(0, -0.5rem, 0);
  -o-transform: translate3d(0, -0.5rem, 0);
  -ms-transform: translate3d(0, -0.5rem, 0);
  transform: translate3d(0, -0.5rem, 0);
}

.info.info-hover:hover .icon.icon-primary.icon-circle {
  box-shadow: 0px 15px 30px 0px rgba(249, 99, 50, 0.3);
}

.info.info-hover:hover .icon.icon-info.icon-circle {
  box-shadow: 0px 15px 35px 0px rgba(44, 168, 255, 0.3);
}

.info.info-hover:hover .icon.icon-success.icon-circle {
  box-shadow: 0px 15px 35px 0px rgba(24, 206, 15, 0.3);
}

.info.info-hover:hover .icon.icon-warning.icon-circle {
  box-shadow: 0px 15px 35px 0px rgba(255, 178, 54, 0.3);
}

.info.info-hover:hover .icon.icon-danger.icon-circle {
  box-shadow: 0px 15px 35px 0px rgba(255, 54, 54, 0.3);
}

.info.info-hover:hover .icon.icon-info+.info-title {
  color: #2CA8FF;
}

.info.info-hover:hover .icon.icon-warning+.info-title {
  color: #FFB236;
}

.info.info-hover:hover .icon.icon-danger+.info-title {
  color: #FF3636;
}

.info.info-hover:hover .icon.icon-primary+.info-title {
  color: #f96332;
}

.info.info-hover:hover .icon.icon-success+.info-title {
  color: #18ce0f;
}

.info .icon {
  color: #888;
  transition: transform .4s, box-shadow .4s;
}

.info .icon>i {
  font-size: 2.3em;
}

.info .icon.icon-circle {
  max-width: 70px;
  width: 70px;
  height: 70px;
  margin: 0 auto;
  border-radius: 50%;
  box-shadow: 0px 9px 35px -6px rgba(0, 0, 0, 0.3);
  font-size: 0.7142em;
  background-color: #FFFFFF;
  position: relative;
}

.info .icon.icon-circle i {
  line-height: 2.6em;
}

.info .info-title {
  margin: 15px 0 5px;
  padding: 0 15px;
  color: #2c2c2c;
  font-weight: 700;
}

.info p {
  color: #888;
  padding: 0 15px;
  font-size: 1.1em;
}

.info-horizontal {
  text-align: left !important;
}

.info-horizontal .icon {
  float: left;
  margin-top: 23px;
  margin-right: 10px;
}

.info-horizontal .icon>i {
  font-size: 2em;
}

.info-horizontal .icon.icon-circle {
  width: 65px;
  height: 65px;
  max-width: 65px;
  margin-top: 8px;
}

.info-horizontal .icon.icon-circle i {
  display: table;
  margin: 0 auto;
  line-height: 3.5;
  font-size: 1.9em;
}

.info-horizontal .description {
  overflow: hidden;
}

.icon.icon-primary {
  color: #f96332;
}

.icon.icon-primary.icon-circle {
  box-shadow: 0px 9px 30px -6px rgba(249, 99, 50, 0.5);
}

.icon.icon-info {
  color: #2CA8FF;
}

.icon.icon-info.icon-circle {
  box-shadow: 0px 9px 30px -6px rgba(44, 168, 255, 0.5);
}

.icon.icon-success {
  color: #18ce0f;
}

.icon.icon-success.icon-circle {
  box-shadow: 0px 9px 30px -6px rgba(24, 206, 15, 0.5);
}

.icon.icon-warning {
  color: #FFB236;
}

.icon.icon-warning.icon-circle {
  box-shadow: 0px 9px 30px -6px rgba(255, 178, 54, 0.5);
}

.icon.icon-danger {
  color: #FF3636;
}

.icon.icon-danger.icon-circle {
  box-shadow: 0px 9px 30px -6px rgba(255, 54, 54, 0.5);
}

.icon.icon-white {
  color: #FFFFFF;
}

.nav-pills.flex-column li>a {
  margin-bottom: 15px;
}

.nav-pills.nav-pills:not(.flex-column) .nav-item:not(:last-child) .nav-link {
  margin-right: 19px;
}

.nav-pills:not(.nav-pills-icons):not(.nav-pills-just-icons) .nav-item .nav-link {
  border-radius: 30px;
}

.nav-pills.nav-pills-just-icons .nav-item .nav-link {
  border-radius: 50%;
  height: 80px;
  max-width: 80px;
  min-width: auto;
  padding: 0;
  width: 80px;
}

.nav-pills.nav-pills-just-icons .nav-item .nav-link .now-ui-icons {
  font-size: 24px;
  line-height: 80px;
}

.nav-pills .nav-item .nav-link {
  padding: 0 15.5px;
  text-align: center;
  padding: 11px 23px;
  min-width: 100px;
  font-weight: 400;
  color: #444;
  background-color: rgba(222, 222, 222, 0.3);
}

.nav-pills .nav-item .nav-link:hover {
  background-color: rgba(222, 222, 222, 0.3);
}

.nav-pills .nav-item .nav-link.active,
.nav-pills .nav-item .nav-link.active:focus,
.nav-pills .nav-item .nav-link.active:hover {
  background-color: #9A9A9A;
  color: #FFFFFF;
  box-shadow: 0px 5px 35px 0px rgba(0, 0, 0, 0.3);
}

.nav-pills .nav-item .nav-link.disabled,
.nav-pills .nav-item .nav-link:disabled,
.nav-pills .nav-item .nav-link[disabled] {
  opacity: .5;
}

.nav-pills .nav-item i {
  display: block;
  font-size: 20px;
  line-height: 60px;
}

.nav-pills.nav-pills-neutral .nav-item .nav-link {
  background-color: rgba(255, 255, 255, 0.2);
  color: #FFFFFF;
}

.nav-pills.nav-pills-neutral .nav-item .nav-link.active,
.nav-pills.nav-pills-neutral .nav-item .nav-link.active:focus,
.nav-pills.nav-pills-neutral .nav-item .nav-link.active:hover {
  background-color: #FFFFFF;
  color: #f96332;
}

.nav-pills.nav-pills-primary .nav-item .nav-link.active,
.nav-pills.nav-pills-primary .nav-item .nav-link.active:focus,
.nav-pills.nav-pills-primary .nav-item .nav-link.active:hover {
  background-color: #f96332;
}

.nav-pills.nav-pills-info .nav-item .nav-link.active,
.nav-pills.nav-pills-info .nav-item .nav-link.active:focus,
.nav-pills.nav-pills-info .nav-item .nav-link.active:hover {
  background-color: #2CA8FF;
}

.nav-pills.nav-pills-success .nav-item .nav-link.active,
.nav-pills.nav-pills-success .nav-item .nav-link.active:focus,
.nav-pills.nav-pills-success .nav-item .nav-link.active:hover {
  background-color: #18ce0f;
}

.nav-pills.nav-pills-warning .nav-item .nav-link.active,
.nav-pills.nav-pills-warning .nav-item .nav-link.active:focus,
.nav-pills.nav-pills-warning .nav-item .nav-link.active:hover {
  background-color: #FFB236;
}

.nav-pills.nav-pills-danger .nav-item .nav-link.active,
.nav-pills.nav-pills-danger .nav-item .nav-link.active:focus,
.nav-pills.nav-pills-danger .nav-item .nav-link.active:hover {
  background-color: #FF3636;
}

.tab-space {
  padding: 20px 0 50px 0px;
}

.tab-content.tab-subcategories {
  margin-top: 20px;
  background-color: #FFFFFF;
  padding-left: 15px;
  padding-right: 15px;
  box-shadow: 0 1px 15px 1px rgba(39, 39, 39, 0.1);
}

.nav-align-center {
  text-align: center;
}

.nav-align-center .nav-pills {
  display: inline-flex;
}

.nav-tabs {
  border: 0;
  padding: 15px 0.7rem;
}

.nav-tabs>.nav-item>.nav-link {
  color: #888;
  margin: 0;
  margin-right: 5px;
  background-color: transparent;
  border: 1px solid transparent;
  border-radius: 30px;
  font-size: 14px;
  padding: 11px 23px;
  line-height: 1.5;
}

.nav-tabs>.nav-item>.nav-link:hover {
  background-color: transparent;
}

.nav-tabs>.nav-item>.nav-link.active {
  border: 1px solid #888;
  border-radius: 30px;
}

.nav-tabs>.nav-item>.nav-link i.now-ui-icons {
  font-size: 14px;
  position: relative;
  top: 1px;
  margin-right: 3px;
}

.nav-tabs>.nav-item.disabled>.nav-link,
.nav-tabs>.nav-item.disabled>.nav-link:hover {
  color: rgba(255, 255, 255, 0.5);
}

.nav-tabs.nav-tabs-neutral>.nav-item>.nav-link {
  color: #FFFFFF;
}

.nav-tabs.nav-tabs-neutral>.nav-item>.nav-link.active {
  border-color: rgba(255, 255, 255, 0.5);
  color: #FFFFFF;
}

.nav-tabs.nav-tabs-primary>.nav-item>.nav-link.active {
  border-color: #f96332;
  color: #f96332;
}

.nav-tabs.nav-tabs-info>.nav-item>.nav-link.active {
  border-color: #2CA8FF;
  color: #2CA8FF;
}

.nav-tabs.nav-tabs-danger>.nav-item>.nav-link.active {
  border-color: #FF3636;
  color: #FF3636;
}

.nav-tabs.nav-tabs-warning>.nav-item>.nav-link.active {
  border-color: #FFB236;
  color: #FFB236;
}

.nav-tabs.nav-tabs-success>.nav-item>.nav-link.active {
  border-color: #18ce0f;
  color: #18ce0f;
}

.rtl-active #bodyClick {
  right: 260px;
  left: auto;
}

.rtl-active .sidebar,
.rtl-active .bootstrap-navbar {
  right: 0;
  left: auto;
}

.rtl-active .sidebar .nav-mobile-menu .notification,
.rtl-active .bootstrap-navbar .nav-mobile-menu .notification {
  float: right;
  margin-right: 0;
  margin-left: 8px;
}

.rtl-active .sidebar .nav,
.rtl-active .bootstrap-navbar .nav {
  padding: 0;
}

.rtl-active .sidebar .nav i,
.rtl-active .bootstrap-navbar .nav i {
  float: right !important;
  margin-left: 15px;
  margin-right: 0;
}

.rtl-active .sidebar .nav p,
.rtl-active .bootstrap-navbar .nav p {
  margin: 0;
  text-align: right;
}

.rtl-active .sidebar .nav .caret,
.rtl-active .bootstrap-navbar .nav .caret {
  left: 11px;
  right: auto;
}

.rtl-active .sidebar .logo a.logo-mini,
.rtl-active .bootstrap-navbar .logo a.logo-mini {
  float: right;
}

.rtl-active .sidebar .user .user-info>a>span,
.rtl-active .bootstrap-navbar .user .user-info>a>span {
  text-align: right;
  display: block;
}

.rtl-active .sidebar .user .photo,
.rtl-active .bootstrap-navbar .user .photo {
  float: right;
  margin-left: 12px;
  margin-right: 23px;
}

.rtl-active .sidebar .user .info .caret,
.rtl-active .bootstrap-navbar .user .info .caret {
  left: 22px;
  right: auto;
}

.rtl-active .sidebar .sidebar-wrapper>.nav [data-toggle="collapse"]~div>ul>li>a .sidebar-mini-icon,
.rtl-active .sidebar .sidebar-wrapper .user .info [data-toggle="collapse"]~div>ul>li>a .sidebar-mini-icon,
.rtl-active .bootstrap-navbar .sidebar-wrapper>.nav [data-toggle="collapse"]~div>ul>li>a .sidebar-mini-icon,
.rtl-active .bootstrap-navbar .sidebar-wrapper .user .info [data-toggle="collapse"]~div>ul>li>a .sidebar-mini-icon {
  float: right;
  margin-left: 15px;
  margin-right: 0;
}

.rtl-active .navbar-minimize {
  margin-left: 23px;
  right: auto !important;
  left: 0;
}

.rtl-active .navbar-header .navbar-toggle {
  margin: 10px 0 10px 15px;
}

.rtl-active .btn:not(.btn-just-icon):not(.btn-fab) .fa,
.rtl-active .navbar .navbar-nav>li>a.btn:not(.btn-just-icon):not(.btn-fab) .fa {
  left: 5px;
}

.rtl-active .card .card-header.card-header-icon {
  float: right;
}

.rtl-active .main-panel {
  float: left;
}

.rtl-active .navbar>.container-fluid .navbar-brand {
  margin-right: 10px;
}

.rtl-active .dropdown-menu {
  right: 0;
  left: auto;
}

.rtl-active .card .card-header.card-header-tabs .nav-tabs-title {
  float: right;
  padding: 10px 0 10px 10px;
}

.rtl-active .card.card-product .card-footer {
  display: flex;
  align-items: center;
  flex-direction: row-reverse;
  justify-content: space-between;
}

.rtl-active .navbar-nav.navbar-right>li>.dropdown-menu:before,
.rtl-active .navbar-nav.navbar-right>li>.dropdown-menu:after {
  right: auto;
  left: 12px;
}

.rtl-active .card .form-horizontal .label-on-left {
  padding-top: 16px;
  text-align: left;
}

.rtl-active .form-horizontal .radio label span {
  right: 2px;
}

.rtl-active .form-check .form-check-label .form-check-sign .check:before {
  margin-right: 11px;
}

.rtl-active .card .checkbox .checkbox-material:before {
  left: 0;
}

.rtl-active .nav-pills>li+li {
  margin-right: 0;
}

.rtl-active .radio-inline,
.rtl-active .checkbox-inline {
  padding-right: 0;
  margin-top: 5px;
}

.rtl-active .form-horizontal .checkbox-radios .checkbox:first-child,
.rtl-active .form-horizontal .checkbox-radios .radio:first-child {
  margin-top: 5px;
}

.rtl-active .checkbox label,
.rtl-active .radio label {
  padding: 0;
}

.rtl-active .radio label {
  padding-right: 28px;
}

.rtl-active .card .form-horizontal .label-on-right {
  text-align: right;
  padding-top: 17px;
}

.rtl-active .alert button.close {
  left: 10px !important;
  right: auto !important;
}

.rtl-active .alert span[data-notify="icon"] {
  right: 15px;
  left: auto;
}

.rtl-active .alert.alert-with-icon {
  padding-left: 65px;
  padding-right: 15px;
  left: 20px;
  right: auto !important;
}

.rtl-active .alert.alert-with-icon i[data-notify="icon"] {
  right: 15px;
  left: auto;
}

@media (max-width: 991px) {
  .rtl-active .sidebar .sidebar-wrapper>.nav [data-toggle="collapse"]~div>ul>li>.sidebar-normal,
  .rtl-active .sidebar .sidebar-wrapper .user .user-info [data-toggle="collapse"]~div>ul>li>.sidebar-normal {
    text-align: right;
  }
  .nav-open .rtl-active .main-panel {
    -webkit-transform: translate3d(-260px, 0, 0);
    -moz-transform: translate3d(-260px, 0, 0);
    -o-transform: translate3d(-260px, 0, 0);
    -ms-transform: translate3d(-260px, 0, 0);
    transform: translate3d(-260px, 0, 0);
  }
  .rtl-active .sidebar {
    -webkit-transform: translate3d(260px, 0, 0);
    -moz-transform: translate3d(260px, 0, 0);
    -o-transform: translate3d(260px, 0, 0);
    -ms-transform: translate3d(260px, 0, 0);
    transform: translate3d(260px, 0, 0);
  }
}

@media (max-width: 768px) {
  .rtl-active .navbar>.container-fluid .navbar-brand {
    margin-right: 15px;
  }
  .rtl-active .navbar-header .navbar-toggle {
    margin-left: 30px;
  }
}

@media (min-width: 991px) {
  .rtl-active.sidebar-mini .sidebar .sidebar-wrapper>.nav [data-toggle="collapse"]~div>ul>li>.sidebar-normal,
  .rtl-active.sidebar-mini .sidebar .sidebar-wrapper .user .info [data-toggle="collapse"]~div>ul>li>.sidebar-normal,
  .rtl-active.sidebar-mini .sidebar .sidebar-wrapper .user .info>a>span,
  .rtl-active.sidebar-mini .sidebar .sidebar-wrapper>.nav li>a p {
    position: relative;
  }
  .rtl-active.sidebar-mini .sidebar:hover .sidebar-wrapper>.nav li>a p,
  .rtl-active.sidebar-mini .sidebar:hover .sidebar-wrapper>.nav [data-toggle="collapse"]~div>ul>li>a .sidebar-normal,
  .rtl-active.sidebar-mini .sidebar:hover .sidebar-wrapper .user .user-info [data-toggle="collapse"]~div>ul>li>.sidebar-normal,
  .rtl-active.sidebar-mini .sidebar:hover .sidebar-wrapper .user .user-info>a>span,
  .rtl-active.sidebar-mini .sidebar .sidebar-wrapper>.nav [data-toggle="collapse"]~div>ul>li>a .sidebar-normal,
  .rtl-active.sidebar-mini .sidebar .sidebar-wrapper .user .info [data-toggle="collapse"]~div>ul>li>a .sidebar-normal,
  .rtl-active.sidebar-mini .sidebar .sidebar-wrapper .user .info>a>span,
  .rtl-active.sidebar-mini .sidebar .sidebar-wrapper>.nav li>a p,
  .rtl-active.sidebar-mini .sidebar .logo a.logo-normal {
    -webkit-transform: translatX(25px);
    -moz-transform: translateX(25px);
    -o-transform: translateX(25px);
    -ms-transform: translateX(25px);
    transform: translateX(25px);
  }
  .rtl-active.sidebar-mini .sidebar:hover .sidebar-wrapper>.nav li>a p,
  .rtl-active.sidebar-mini .sidebar:hover .sidebar-wrapper>.nav [data-toggle="collapse"]~div>ul>li>a .sidebar-normal,
  .rtl-active.sidebar-mini .sidebar:hover .sidebar-wrapper .user .user-info [data-toggle="collapse"]~div>ul>li>a .sidebar-normal,
  .rtl-active.sidebar-mini .sidebar:hover .sidebar-wrapper .user .user-info>a>span,
  .rtl-active.sidebar-mini .sidebar:hover .logo a.logo-normal {
    -webkit-transform: translat3d(0, 0, 0);
    -moz-transform: translate3d(0, 0, 0);
    -o-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

.rtl-active.sidebar-mini .nav .nav-item .nav-link i {
  margin-right: 0;
}

.rtl-active .navbar .collapse .nav-item .nav-link .notification {
  top: -10px;
}

.rtl-active .sidebar-wrapper .nav .nav-item .collapse .nav .nav-item .nav-link .sidebar-mini,
.rtl-active .sidebar-wrapper .nav .nav-item .collapsing .nav .nav-item .nav-link .sidebar-mini,
.rtl-active .sidebar-wrapper .user .user-info .collapse .nav .nav-item .nav-link .sidebar-mini,
.rtl-active .sidebar-wrapper .user .user-info .collapsing .nav .nav-item .nav-link .sidebar-mini {
  float: right;
}

.rtl-active .sidebar-wrapper .nav .nav-item .collapse .nav .nav-item .nav-link .sidebar-normal,
.rtl-active .sidebar-wrapper .nav .nav-item .collapsing .nav .nav-item .nav-link .sidebar-normal,
.rtl-active .sidebar-wrapper .user .user-info .collapse .nav .nav-item .nav-link .sidebar-normal,
.rtl-active .sidebar-wrapper .user .user-info .collapsing .nav .nav-item .nav-link .sidebar-normal {
  text-align: right;
  display: block;
}

.rtl-active.sidebar-mini .collapse .nav .nav-item .nav-link .sidebar-mini,
.rtl-active.sidebar-mini .collapsing .nav .nav-item .nav-link .sidebar-mini {
  margin-right: 0 !important;
}

.rtl-active .sidebar .nav .nav-item .nav-link i {
  margin-right: 0;
}

.rtl-active .sidebar .nav .nav-item .nav .nav-item .nav-link .sidebar-mini,
.rtl-active .sidebar .user .user-info [data-toggle="collapse"]~div .nav .nav-item .nav-link .sidebar-mini {
  margin-right: 0 !important;
  float: right !important;
  margin-left: 15px !important;
}

.rtl-active .sidebar .user .user-info [data-toggle="collapse"]~div .nav .nav-item .nav-link .sidebar-normal {
  display: block !important;
}

.rtl-active .info-horizontal .icon {
  float: right;
}

.rtl-active .input-group>.custom-select:not(:last-child),
.rtl-active .input-group>.form-control:not(:last-child),
.rtl-active .input-group>.input-group-append:last-child>.btn:not(:last-child):not(.dropdown-toggle),
.rtl-active .input-group>.input-group-append:last-child>.input-group-text:not(:last-child),
.rtl-active .input-group>.input-group-append:not(:last-child)>.btn,
.rtl-active .input-group>.input-group-append:not(:last-child)>.input-group-text,
.rtl-active .input-group>.input-group-prepend>.btn,
.rtl-active .input-group>.input-group-prepend>.input-group-text {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
  border-top-left-radius: 30px;
  border-bottom-left-radius: 30px;
}

.rtl-active .input-group>.input-group-append>.btn,
.rtl-active .input-group>.input-group-append>.input-group-text,
.rtl-active .input-group>.input-group-prepend:first-child>.btn:not(:first-child),
.rtl-active .input-group>.input-group-prepend:first-child>.input-group-text:not(:first-child),
.rtl-active .input-group>.input-group-prepend:not(:first-child)>.btn,
.rtl-active .input-group>.input-group-prepend:not(:first-child)>.input-group-text,
.rtl-active .input-group>.custom-select:not(:first-child),
.rtl-active .input-group>.form-control:not(:first-child) {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
  border-top-right-radius: 30px;
  border-bottom-right-radius: 30px;
}

.rtl-active .form-control {
  text-align: right;
  direction: rtl;
}

.popover {
  font-size: 14px;
  box-shadow: 0px 10px 50px 0px rgba(0, 0, 0, 0.2);
  border: none;
  line-height: 1.7;
  max-width: 240px;
}

.popover.bs-popover-top .arrow:before,
.popover.bs-popover-left .arrow:before,
.popover.bs-popover-right .arrow:before,
.popover.bs-popover-bottom .arrow:before {
  border-top-color: transparent;
  border-left-color: transparent;
  border-right-color: transparent;
  border-bottom-color: transparent;
}

.popover .popover-header {
  color: rgba(182, 182, 182, 0.6);
  font-size: 14px;
  text-transform: capitalize;
  font-weight: 600;
  margin: 0;
  margin-top: 5px;
  border: none;
  background-color: transparent;
}

.popover:before {
  display: none;
}

.popover.bs-tether-element-attached-top:after {
  border-bottom-color: #FFFFFF;
  top: -9px;
}

.popover.popover-primary {
  background-color: #f96332;
}

.popover.popover-primary .popover-body {
  color: #FFFFFF;
}

.popover.popover-primary.bs-popover-right .arrow:after {
  border-right-color: #f96332;
}

.popover.popover-primary.bs-popover-top .arrow:after {
  border-top-color: #f96332;
}

.popover.popover-primary.bs-popover-bottom .arrow:after {
  border-bottom-color: #f96332;
}

.popover.popover-primary.bs-popover-left .arrow:after {
  border-left-color: #f96332;
}

.popover.popover-primary .popover-header {
  color: #FFFFFF;
  opacity: .6;
}

.popover.popover-info {
  background-color: #2CA8FF;
}

.popover.popover-info .popover-body {
  color: #FFFFFF;
}

.popover.popover-info.bs-popover-right .arrow:after {
  border-right-color: #2CA8FF;
}

.popover.popover-info.bs-popover-top .arrow:after {
  border-top-color: #2CA8FF;
}

.popover.popover-info.bs-popover-bottom .arrow:after {
  border-bottom-color: #2CA8FF;
}

.popover.popover-info.bs-popover-left .arrow:after {
  border-left-color: #2CA8FF;
}

.popover.popover-info .popover-header {
  color: #FFFFFF;
  opacity: .6;
}

.popover.popover-warning {
  background-color: #FFB236;
}

.popover.popover-warning .popover-body {
  color: #FFFFFF;
}

.popover.popover-warning.bs-popover-right .arrow:after {
  border-right-color: #FFB236;
}

.popover.popover-warning.bs-popover-top .arrow:after {
  border-top-color: #FFB236;
}

.popover.popover-warning.bs-popover-bottom .arrow:after {
  border-bottom-color: #FFB236;
}

.popover.popover-warning.bs-popover-left .arrow:after {
  border-left-color: #FFB236;
}

.popover.popover-warning .popover-header {
  color: #FFFFFF;
  opacity: .6;
}

.popover.popover-danger {
  background-color: #FF3636;
}

.popover.popover-danger .popover-body {
  color: #FFFFFF;
}

.popover.popover-danger.bs-popover-right .arrow:after {
  border-right-color: #FF3636;
}

.popover.popover-danger.bs-popover-top .arrow:after {
  border-top-color: #FF3636;
}

.popover.popover-danger.bs-popover-bottom .arrow:after {
  border-bottom-color: #FF3636;
}

.popover.popover-danger.bs-popover-left .arrow:after {
  border-left-color: #FF3636;
}

.popover.popover-danger .popover-header {
  color: #FFFFFF;
  opacity: .6;
}

.popover.popover-success {
  background-color: #18ce0f;
}

.popover.popover-success .popover-body {
  color: #FFFFFF;
}

.popover.popover-success.bs-popover-right .arrow:after {
  border-right-color: #18ce0f;
}

.popover.popover-success.bs-popover-top .arrow:after {
  border-top-color: #18ce0f;
}

.popover.popover-success.bs-popover-bottom .arrow:after {
  border-bottom-color: #18ce0f;
}

.popover.popover-success.bs-popover-left .arrow:after {
  border-left-color: #18ce0f;
}

.popover.popover-success .popover-header {
  color: #FFFFFF;
  opacity: .6;
}

.tooltip.bs-tooltip-right .arrow:before {
  border-right-color: #FFFFFF;
}

.tooltip.bs-tooltip-top .arrow:before {
  border-top-color: #FFFFFF;
}

.tooltip.bs-tooltip-bottom .arrow:before {
  border-bottom-color: #FFFFFF;
}

.tooltip.bs-tooltip-left .arrow:before {
  border-left-color: #FFFFFF;
}

.tooltip-inner {
  padding: 0.5rem 0.7rem;
  min-width: 130px;
  background-color: #FFFFFF;
  font-size: 14px;
  color: inherit;
  box-shadow: 0px 5px 25px 0px rgba(0, 0, 0, 0.2);
}

.modal-content {
  border-radius: 0.1875rem;
  border: none;
  box-shadow: 0px 10px 50px 0px rgba(0, 0, 0, 0.5);
}

.modal-content .modal-header {
  border-bottom: none;
  padding-top: 24px;
  padding-right: 24px;
  padding-bottom: 0;
  padding-left: 24px;
}

.modal-content .modal-header button {
  position: absolute;
  right: 27px;
  top: 30px;
  outline: 0;
}

.modal-content .modal-header .title {
  margin-top: 5px;
  margin-bottom: 0;
}

.modal-content .modal-body {
  padding-top: 24px;
  padding-right: 24px;
  padding-bottom: 16px;
  padding-left: 24px;
  line-height: 1.9;
}

.modal-content .modal-footer {
  border-top: none;
  padding-right: 24px;
  padding-bottom: 16px;
  padding-left: 24px;
  -webkit-justify-content: space-between;
  /* Safari 6.1+ */
  justify-content: space-between;
}

.modal-content .modal-footer button {
  margin: 0;
  padding-left: 16px;
  padding-right: 16px;
  width: auto;
}

.modal-content .modal-footer button.pull-left {
  padding-left: 5px;
  padding-right: 5px;
  position: relative;
  left: -5px;
}

.modal-content .modal-body+.modal-footer {
  padding-top: 0;
}

.modal-backdrop {
  background: rgba(0, 0, 0, 0.3);
}

.modal .modal-login {
  max-width: 320px;
}

.modal .modal-login .card-login .logo-container {
  width: 65px;
  margin-bottom: 38px;
  margin-top: 27px;
}

.modal.modal-mini p {
  text-align: center;
}

.modal.modal-mini .modal-dialog {
  max-width: 255px;
  margin: 0 auto;
}

.modal.modal-mini.show .modal-dialog {
  -webkit-transform: translate(0, 30%);
  -o-transform: translate(0, 30%);
  transform: translate(0, 30%);
}

.modal.modal-mini .modal-profile {
  width: 70px;
  height: 70px;
  background-color: #FFFFFF;
  border-radius: 50%;
  text-align: center;
  line-height: 5.7;
  box-shadow: 0px 5px 50px 0px rgba(0, 0, 0, 0.3);
}

.modal.modal-mini .modal-profile i {
  color: #f96332;
  font-size: 21px;
}

.modal.modal-mini .modal-profile[class*="modal-profile-"] i {
  color: #FFFFFF;
}

.modal.modal-mini .modal-profile.modal-profile-primary {
  background-color: #f96332;
}

.modal.modal-mini .modal-profile.modal-profile-danger {
  background-color: #FF3636;
}

.modal.modal-mini .modal-profile.modal-profile-warning {
  background-color: #FFB236;
}

.modal.modal-mini .modal-profile.modal-profile-success {
  background-color: #18ce0f;
}

.modal.modal-mini .modal-profile.modal-profile-info {
  background-color: #2CA8FF;
}

.modal.modal-mini .modal-footer button {
  text-transform: uppercase;
}

.modal.modal-mini .modal-footer button:first-child {
  opacity: .5;
}

.modal.modal-default .modal-content {
  background-color: #FFFFFF;
  color: #2c2c2c;
}

.modal.modal-default .modal-header .close {
  color: #2c2c2c;
}

.modal.modal-default .form-control::-moz-placeholder {
  color: #ebebeb;
  opacity: 1;
  filter: alpha(opacity=100);
}

.modal.modal-default .form-control:-moz-placeholder {
  color: #ebebeb;
  opacity: 1;
  filter: alpha(opacity=100);
}

.modal.modal-default .form-control::-webkit-input-placeholder {
  color: #ebebeb;
  opacity: 1;
  filter: alpha(opacity=100);
}

.modal.modal-default .form-control:-ms-input-placeholder {
  color: #ebebeb;
  opacity: 1;
  filter: alpha(opacity=100);
}

.modal.modal-default .form-control {
  border-color: rgba(255, 255, 255, 0.5);
  color: #FFFFFF;
}

.modal.modal-default .form-control:focus {
  border-color: #FFFFFF;
  background-color: transparent;
  color: #FFFFFF;
}

.modal.modal-default .has-success:after,
.modal.modal-default .has-danger:after {
  color: #FFFFFF;
}

.modal.modal-default .has-danger .form-control {
  background-color: transparent;
}

.modal.modal-default .input-group-prepend .input-group-text,
.modal.modal-default .input-group-append .input-group-text {
  background-color: transparent;
  border-color: rgba(255, 255, 255, 0.5);
  color: #FFFFFF;
}

.modal.modal-default .input-group-focus .input-group-prepend .input-group-text,
.modal.modal-default .input-group-focus .input-group-append .input-group-text {
  background-color: transparent;
  border-color: #FFFFFF;
  color: #FFFFFF;
}

.modal.modal-default .form-group.no-border .form-control,
.modal.modal-default .input-group.no-border .form-control {
  background-color: rgba(255, 255, 255, 0.1);
  color: #FFFFFF;
}

.modal.modal-default .form-group.no-border .form-control:focus,
.modal.modal-default .form-group.no-border .form-control:active,
.modal.modal-default .form-group.no-border .form-control:active,
.modal.modal-default .input-group.no-border .form-control:focus,
.modal.modal-default .input-group.no-border .form-control:active,
.modal.modal-default .input-group.no-border .form-control:active {
  background-color: rgba(255, 255, 255, 0.2);
  color: #FFFFFF;
}

.modal.modal-default .form-group.no-border .form-control+.input-group-prepend .input-group-text,
.modal.modal-default .form-group.no-border .form-control+.input-group-append .input-group-text,
.modal.modal-default .input-group.no-border .form-control+.input-group-prepend .input-group-text,
.modal.modal-default .input-group.no-border .form-control+.input-group-append .input-group-text {
  background-color: rgba(255, 255, 255, 0.1);
}

.modal.modal-default .form-group.no-border .form-control+.input-group-prepend .input-group-text:focus,
.modal.modal-default .form-group.no-border .form-control+.input-group-prepend .input-group-text:active,
.modal.modal-default .form-group.no-border .form-control+.input-group-prepend .input-group-text:active,
.modal.modal-default .form-group.no-border .form-control+.input-group-append .input-group-text:focus,
.modal.modal-default .form-group.no-border .form-control+.input-group-append .input-group-text:active,
.modal.modal-default .form-group.no-border .form-control+.input-group-append .input-group-text:active,
.modal.modal-default .input-group.no-border .form-control+.input-group-prepend .input-group-text:focus,
.modal.modal-default .input-group.no-border .form-control+.input-group-prepend .input-group-text:active,
.modal.modal-default .input-group.no-border .form-control+.input-group-prepend .input-group-text:active,
.modal.modal-default .input-group.no-border .form-control+.input-group-append .input-group-text:focus,
.modal.modal-default .input-group.no-border .form-control+.input-group-append .input-group-text:active,
.modal.modal-default .input-group.no-border .form-control+.input-group-append .input-group-text:active {
  background-color: rgba(255, 255, 255, 0.2);
  color: #FFFFFF;
}

.modal.modal-default .form-group.no-border .form-control:focus+.input-group-prepend .input-group-text,
.modal.modal-default .form-group.no-border .form-control:focus+.input-group-append .input-group-text,
.modal.modal-default .input-group.no-border .form-control:focus+.input-group-prepend .input-group-text,
.modal.modal-default .input-group.no-border .form-control:focus+.input-group-append .input-group-text {
  background-color: rgba(255, 255, 255, 0.2);
  color: #FFFFFF;
}

.modal.modal-default .form-group.no-border .input-group-prepend .input-group-text,
.modal.modal-default .form-group.no-border .input-group-append .input-group-text,
.modal.modal-default .input-group.no-border .input-group-prepend .input-group-text,
.modal.modal-default .input-group.no-border .input-group-append .input-group-text {
  background-color: rgba(255, 255, 255, 0.1);
  border: none;
  color: #FFFFFF;
}

.modal.modal-default .form-group.no-border.input-group-focus .input-group-prepend .input-group-text,
.modal.modal-default .form-group.no-border.input-group-focus .input-group-append .input-group-text,
.modal.modal-default .input-group.no-border.input-group-focus .input-group-prepend .input-group-text,
.modal.modal-default .input-group.no-border.input-group-focus .input-group-append .input-group-text {
  background-color: rgba(255, 255, 255, 0.2);
  color: #FFFFFF;
}

.modal.modal-default .input-group-addon,
.modal.modal-default .form-group.no-border .input-group-addon,
.modal.modal-default .input-group.no-border .input-group-addon {
  color: rgba(255, 255, 255, 0.8);
}

.modal.modal-primary .modal-content {
  background-color: #f96332;
  color: #FFFFFF;
}

.modal.modal-primary .modal-header .close {
  color: #FFFFFF;
}

.modal.modal-primary .form-control::-moz-placeholder {
  color: #ebebeb;
  opacity: 1;
  filter: alpha(opacity=100);
}

.modal.modal-primary .form-control:-moz-placeholder {
  color: #ebebeb;
  opacity: 1;
  filter: alpha(opacity=100);
}

.modal.modal-primary .form-control::-webkit-input-placeholder {
  color: #ebebeb;
  opacity: 1;
  filter: alpha(opacity=100);
}

.modal.modal-primary .form-control:-ms-input-placeholder {
  color: #ebebeb;
  opacity: 1;
  filter: alpha(opacity=100);
}

.modal.modal-primary .form-control {
  border-color: rgba(255, 255, 255, 0.5);
  color: #FFFFFF;
}

.modal.modal-primary .form-control:focus {
  border-color: #FFFFFF;
  background-color: transparent;
  color: #FFFFFF;
}

.modal.modal-primary .has-success:after,
.modal.modal-primary .has-danger:after {
  color: #FFFFFF;
}

.modal.modal-primary .has-danger .form-control {
  background-color: transparent;
}

.modal.modal-primary .input-group-prepend .input-group-text,
.modal.modal-primary .input-group-append .input-group-text {
  background-color: transparent;
  border-color: rgba(255, 255, 255, 0.5);
  color: #FFFFFF;
}

.modal.modal-primary .input-group-focus .input-group-prepend .input-group-text,
.modal.modal-primary .input-group-focus .input-group-append .input-group-text {
  background-color: transparent;
  border-color: #FFFFFF;
  color: #FFFFFF;
}

.modal.modal-primary .form-group.no-border .form-control,
.modal.modal-primary .input-group.no-border .form-control {
  background-color: rgba(255, 255, 255, 0.1);
  color: #FFFFFF;
}

.modal.modal-primary .form-group.no-border .form-control:focus,
.modal.modal-primary .form-group.no-border .form-control:active,
.modal.modal-primary .form-group.no-border .form-control:active,
.modal.modal-primary .input-group.no-border .form-control:focus,
.modal.modal-primary .input-group.no-border .form-control:active,
.modal.modal-primary .input-group.no-border .form-control:active {
  background-color: rgba(255, 255, 255, 0.2);
  color: #FFFFFF;
}

.modal.modal-primary .form-group.no-border .form-control+.input-group-prepend .input-group-text,
.modal.modal-primary .form-group.no-border .form-control+.input-group-append .input-group-text,
.modal.modal-primary .input-group.no-border .form-control+.input-group-prepend .input-group-text,
.modal.modal-primary .input-group.no-border .form-control+.input-group-append .input-group-text {
  background-color: rgba(255, 255, 255, 0.1);
}

.modal.modal-primary .form-group.no-border .form-control+.input-group-prepend .input-group-text:focus,
.modal.modal-primary .form-group.no-border .form-control+.input-group-prepend .input-group-text:active,
.modal.modal-primary .form-group.no-border .form-control+.input-group-prepend .input-group-text:active,
.modal.modal-primary .form-group.no-border .form-control+.input-group-append .input-group-text:focus,
.modal.modal-primary .form-group.no-border .form-control+.input-group-append .input-group-text:active,
.modal.modal-primary .form-group.no-border .form-control+.input-group-append .input-group-text:active,
.modal.modal-primary .input-group.no-border .form-control+.input-group-prepend .input-group-text:focus,
.modal.modal-primary .input-group.no-border .form-control+.input-group-prepend .input-group-text:active,
.modal.modal-primary .input-group.no-border .form-control+.input-group-prepend .input-group-text:active,
.modal.modal-primary .input-group.no-border .form-control+.input-group-append .input-group-text:focus,
.modal.modal-primary .input-group.no-border .form-control+.input-group-append .input-group-text:active,
.modal.modal-primary .input-group.no-border .form-control+.input-group-append .input-group-text:active {
  background-color: rgba(255, 255, 255, 0.2);
  color: #FFFFFF;
}

.modal.modal-primary .form-group.no-border .form-control:focus+.input-group-prepend .input-group-text,
.modal.modal-primary .form-group.no-border .form-control:focus+.input-group-append .input-group-text,
.modal.modal-primary .input-group.no-border .form-control:focus+.input-group-prepend .input-group-text,
.modal.modal-primary .input-group.no-border .form-control:focus+.input-group-append .input-group-text {
  background-color: rgba(255, 255, 255, 0.2);
  color: #FFFFFF;
}

.modal.modal-primary .form-group.no-border .input-group-prepend .input-group-text,
.modal.modal-primary .form-group.no-border .input-group-append .input-group-text,
.modal.modal-primary .input-group.no-border .input-group-prepend .input-group-text,
.modal.modal-primary .input-group.no-border .input-group-append .input-group-text {
  background-color: rgba(255, 255, 255, 0.1);
  border: none;
  color: #FFFFFF;
}

.modal.modal-primary .form-group.no-border.input-group-focus .input-group-prepend .input-group-text,
.modal.modal-primary .form-group.no-border.input-group-focus .input-group-append .input-group-text,
.modal.modal-primary .input-group.no-border.input-group-focus .input-group-prepend .input-group-text,
.modal.modal-primary .input-group.no-border.input-group-focus .input-group-append .input-group-text {
  background-color: rgba(255, 255, 255, 0.2);
  color: #FFFFFF;
}

.modal.modal-primary .input-group-addon,
.modal.modal-primary .form-group.no-border .input-group-addon,
.modal.modal-primary .input-group.no-border .input-group-addon {
  color: rgba(255, 255, 255, 0.8);
}

.modal.modal-danger .modal-content {
  background-color: #FF3636;
  color: #FFFFFF;
}

.modal.modal-danger .modal-header .close {
  color: #FFFFFF;
}

.modal.modal-danger .form-control::-moz-placeholder {
  color: #ebebeb;
  opacity: 1;
  filter: alpha(opacity=100);
}

.modal.modal-danger .form-control:-moz-placeholder {
  color: #ebebeb;
  opacity: 1;
  filter: alpha(opacity=100);
}

.modal.modal-danger .form-control::-webkit-input-placeholder {
  color: #ebebeb;
  opacity: 1;
  filter: alpha(opacity=100);
}

.modal.modal-danger .form-control:-ms-input-placeholder {
  color: #ebebeb;
  opacity: 1;
  filter: alpha(opacity=100);
}

.modal.modal-danger .form-control {
  border-color: rgba(255, 255, 255, 0.5);
  color: #FFFFFF;
}

.modal.modal-danger .form-control:focus {
  border-color: #FFFFFF;
  background-color: transparent;
  color: #FFFFFF;
}

.modal.modal-danger .has-success:after,
.modal.modal-danger .has-danger:after {
  color: #FFFFFF;
}

.modal.modal-danger .has-danger .form-control {
  background-color: transparent;
}

.modal.modal-danger .input-group-prepend .input-group-text,
.modal.modal-danger .input-group-append .input-group-text {
  background-color: transparent;
  border-color: rgba(255, 255, 255, 0.5);
  color: #FFFFFF;
}

.modal.modal-danger .input-group-focus .input-group-prepend .input-group-text,
.modal.modal-danger .input-group-focus .input-group-append .input-group-text {
  background-color: transparent;
  border-color: #FFFFFF;
  color: #FFFFFF;
}

.modal.modal-danger .form-group.no-border .form-control,
.modal.modal-danger .input-group.no-border .form-control {
  background-color: rgba(255, 255, 255, 0.1);
  color: #FFFFFF;
}

.modal.modal-danger .form-group.no-border .form-control:focus,
.modal.modal-danger .form-group.no-border .form-control:active,
.modal.modal-danger .form-group.no-border .form-control:active,
.modal.modal-danger .input-group.no-border .form-control:focus,
.modal.modal-danger .input-group.no-border .form-control:active,
.modal.modal-danger .input-group.no-border .form-control:active {
  background-color: rgba(255, 255, 255, 0.2);
  color: #FFFFFF;
}

.modal.modal-danger .form-group.no-border .form-control+.input-group-prepend .input-group-text,
.modal.modal-danger .form-group.no-border .form-control+.input-group-append .input-group-text,
.modal.modal-danger .input-group.no-border .form-control+.input-group-prepend .input-group-text,
.modal.modal-danger .input-group.no-border .form-control+.input-group-append .input-group-text {
  background-color: rgba(255, 255, 255, 0.1);
}

.modal.modal-danger .form-group.no-border .form-control+.input-group-prepend .input-group-text:focus,
.modal.modal-danger .form-group.no-border .form-control+.input-group-prepend .input-group-text:active,
.modal.modal-danger .form-group.no-border .form-control+.input-group-prepend .input-group-text:active,
.modal.modal-danger .form-group.no-border .form-control+.input-group-append .input-group-text:focus,
.modal.modal-danger .form-group.no-border .form-control+.input-group-append .input-group-text:active,
.modal.modal-danger .form-group.no-border .form-control+.input-group-append .input-group-text:active,
.modal.modal-danger .input-group.no-border .form-control+.input-group-prepend .input-group-text:focus,
.modal.modal-danger .input-group.no-border .form-control+.input-group-prepend .input-group-text:active,
.modal.modal-danger .input-group.no-border .form-control+.input-group-prepend .input-group-text:active,
.modal.modal-danger .input-group.no-border .form-control+.input-group-append .input-group-text:focus,
.modal.modal-danger .input-group.no-border .form-control+.input-group-append .input-group-text:active,
.modal.modal-danger .input-group.no-border .form-control+.input-group-append .input-group-text:active {
  background-color: rgba(255, 255, 255, 0.2);
  color: #FFFFFF;
}

.modal.modal-danger .form-group.no-border .form-control:focus+.input-group-prepend .input-group-text,
.modal.modal-danger .form-group.no-border .form-control:focus+.input-group-append .input-group-text,
.modal.modal-danger .input-group.no-border .form-control:focus+.input-group-prepend .input-group-text,
.modal.modal-danger .input-group.no-border .form-control:focus+.input-group-append .input-group-text {
  background-color: rgba(255, 255, 255, 0.2);
  color: #FFFFFF;
}

.modal.modal-danger .form-group.no-border .input-group-prepend .input-group-text,
.modal.modal-danger .form-group.no-border .input-group-append .input-group-text,
.modal.modal-danger .input-group.no-border .input-group-prepend .input-group-text,
.modal.modal-danger .input-group.no-border .input-group-append .input-group-text {
  background-color: rgba(255, 255, 255, 0.1);
  border: none;
  color: #FFFFFF;
}

.modal.modal-danger .form-group.no-border.input-group-focus .input-group-prepend .input-group-text,
.modal.modal-danger .form-group.no-border.input-group-focus .input-group-append .input-group-text,
.modal.modal-danger .input-group.no-border.input-group-focus .input-group-prepend .input-group-text,
.modal.modal-danger .input-group.no-border.input-group-focus .input-group-append .input-group-text {
  background-color: rgba(255, 255, 255, 0.2);
  color: #FFFFFF;
}

.modal.modal-danger .input-group-addon,
.modal.modal-danger .form-group.no-border .input-group-addon,
.modal.modal-danger .input-group.no-border .input-group-addon {
  color: rgba(255, 255, 255, 0.8);
}

.modal.modal-warning .modal-content {
  background-color: #FFB236;
  color: #FFFFFF;
}

.modal.modal-warning .modal-header .close {
  color: #FFFFFF;
}

.modal.modal-warning .form-control::-moz-placeholder {
  color: #ebebeb;
  opacity: 1;
  filter: alpha(opacity=100);
}

.modal.modal-warning .form-control:-moz-placeholder {
  color: #ebebeb;
  opacity: 1;
  filter: alpha(opacity=100);
}

.modal.modal-warning .form-control::-webkit-input-placeholder {
  color: #ebebeb;
  opacity: 1;
  filter: alpha(opacity=100);
}

.modal.modal-warning .form-control:-ms-input-placeholder {
  color: #ebebeb;
  opacity: 1;
  filter: alpha(opacity=100);
}

.modal.modal-warning .form-control {
  border-color: rgba(255, 255, 255, 0.5);
  color: #FFFFFF;
}

.modal.modal-warning .form-control:focus {
  border-color: #FFFFFF;
  background-color: transparent;
  color: #FFFFFF;
}

.modal.modal-warning .has-success:after,
.modal.modal-warning .has-danger:after {
  color: #FFFFFF;
}

.modal.modal-warning .has-danger .form-control {
  background-color: transparent;
}

.modal.modal-warning .input-group-prepend .input-group-text,
.modal.modal-warning .input-group-append .input-group-text {
  background-color: transparent;
  border-color: rgba(255, 255, 255, 0.5);
  color: #FFFFFF;
}

.modal.modal-warning .input-group-focus .input-group-prepend .input-group-text,
.modal.modal-warning .input-group-focus .input-group-append .input-group-text {
  background-color: transparent;
  border-color: #FFFFFF;
  color: #FFFFFF;
}

.modal.modal-warning .form-group.no-border .form-control,
.modal.modal-warning .input-group.no-border .form-control {
  background-color: rgba(255, 255, 255, 0.1);
  color: #FFFFFF;
}

.modal.modal-warning .form-group.no-border .form-control:focus,
.modal.modal-warning .form-group.no-border .form-control:active,
.modal.modal-warning .form-group.no-border .form-control:active,
.modal.modal-warning .input-group.no-border .form-control:focus,
.modal.modal-warning .input-group.no-border .form-control:active,
.modal.modal-warning .input-group.no-border .form-control:active {
  background-color: rgba(255, 255, 255, 0.2);
  color: #FFFFFF;
}

.modal.modal-warning .form-group.no-border .form-control+.input-group-prepend .input-group-text,
.modal.modal-warning .form-group.no-border .form-control+.input-group-append .input-group-text,
.modal.modal-warning .input-group.no-border .form-control+.input-group-prepend .input-group-text,
.modal.modal-warning .input-group.no-border .form-control+.input-group-append .input-group-text {
  background-color: rgba(255, 255, 255, 0.1);
}

.modal.modal-warning .form-group.no-border .form-control+.input-group-prepend .input-group-text:focus,
.modal.modal-warning .form-group.no-border .form-control+.input-group-prepend .input-group-text:active,
.modal.modal-warning .form-group.no-border .form-control+.input-group-prepend .input-group-text:active,
.modal.modal-warning .form-group.no-border .form-control+.input-group-append .input-group-text:focus,
.modal.modal-warning .form-group.no-border .form-control+.input-group-append .input-group-text:active,
.modal.modal-warning .form-group.no-border .form-control+.input-group-append .input-group-text:active,
.modal.modal-warning .input-group.no-border .form-control+.input-group-prepend .input-group-text:focus,
.modal.modal-warning .input-group.no-border .form-control+.input-group-prepend .input-group-text:active,
.modal.modal-warning .input-group.no-border .form-control+.input-group-prepend .input-group-text:active,
.modal.modal-warning .input-group.no-border .form-control+.input-group-append .input-group-text:focus,
.modal.modal-warning .input-group.no-border .form-control+.input-group-append .input-group-text:active,
.modal.modal-warning .input-group.no-border .form-control+.input-group-append .input-group-text:active {
  background-color: rgba(255, 255, 255, 0.2);
  color: #FFFFFF;
}

.modal.modal-warning .form-group.no-border .form-control:focus+.input-group-prepend .input-group-text,
.modal.modal-warning .form-group.no-border .form-control:focus+.input-group-append .input-group-text,
.modal.modal-warning .input-group.no-border .form-control:focus+.input-group-prepend .input-group-text,
.modal.modal-warning .input-group.no-border .form-control:focus+.input-group-append .input-group-text {
  background-color: rgba(255, 255, 255, 0.2);
  color: #FFFFFF;
}

.modal.modal-warning .form-group.no-border .input-group-prepend .input-group-text,
.modal.modal-warning .form-group.no-border .input-group-append .input-group-text,
.modal.modal-warning .input-group.no-border .input-group-prepend .input-group-text,
.modal.modal-warning .input-group.no-border .input-group-append .input-group-text {
  background-color: rgba(255, 255, 255, 0.1);
  border: none;
  color: #FFFFFF;
}

.modal.modal-warning .form-group.no-border.input-group-focus .input-group-prepend .input-group-text,
.modal.modal-warning .form-group.no-border.input-group-focus .input-group-append .input-group-text,
.modal.modal-warning .input-group.no-border.input-group-focus .input-group-prepend .input-group-text,
.modal.modal-warning .input-group.no-border.input-group-focus .input-group-append .input-group-text {
  background-color: rgba(255, 255, 255, 0.2);
  color: #FFFFFF;
}

.modal.modal-warning .input-group-addon,
.modal.modal-warning .form-group.no-border .input-group-addon,
.modal.modal-warning .input-group.no-border .input-group-addon {
  color: rgba(255, 255, 255, 0.8);
}

.modal.modal-success .modal-content {
  background-color: #18ce0f;
  color: #FFFFFF;
}

.modal.modal-success .modal-header .close {
  color: #FFFFFF;
}

.modal.modal-success .form-control::-moz-placeholder {
  color: #ebebeb;
  opacity: 1;
  filter: alpha(opacity=100);
}

.modal.modal-success .form-control:-moz-placeholder {
  color: #ebebeb;
  opacity: 1;
  filter: alpha(opacity=100);
}

.modal.modal-success .form-control::-webkit-input-placeholder {
  color: #ebebeb;
  opacity: 1;
  filter: alpha(opacity=100);
}

.modal.modal-success .form-control:-ms-input-placeholder {
  color: #ebebeb;
  opacity: 1;
  filter: alpha(opacity=100);
}

.modal.modal-success .form-control {
  border-color: rgba(255, 255, 255, 0.5);
  color: #FFFFFF;
}

.modal.modal-success .form-control:focus {
  border-color: #FFFFFF;
  background-color: transparent;
  color: #FFFFFF;
}

.modal.modal-success .has-success:after,
.modal.modal-success .has-danger:after {
  color: #FFFFFF;
}

.modal.modal-success .has-danger .form-control {
  background-color: transparent;
}

.modal.modal-success .input-group-prepend .input-group-text,
.modal.modal-success .input-group-append .input-group-text {
  background-color: transparent;
  border-color: rgba(255, 255, 255, 0.5);
  color: #FFFFFF;
}

.modal.modal-success .input-group-focus .input-group-prepend .input-group-text,
.modal.modal-success .input-group-focus .input-group-append .input-group-text {
  background-color: transparent;
  border-color: #FFFFFF;
  color: #FFFFFF;
}

.modal.modal-success .form-group.no-border .form-control,
.modal.modal-success .input-group.no-border .form-control {
  background-color: rgba(255, 255, 255, 0.1);
  color: #FFFFFF;
}

.modal.modal-success .form-group.no-border .form-control:focus,
.modal.modal-success .form-group.no-border .form-control:active,
.modal.modal-success .form-group.no-border .form-control:active,
.modal.modal-success .input-group.no-border .form-control:focus,
.modal.modal-success .input-group.no-border .form-control:active,
.modal.modal-success .input-group.no-border .form-control:active {
  background-color: rgba(255, 255, 255, 0.2);
  color: #FFFFFF;
}

.modal.modal-success .form-group.no-border .form-control+.input-group-prepend .input-group-text,
.modal.modal-success .form-group.no-border .form-control+.input-group-append .input-group-text,
.modal.modal-success .input-group.no-border .form-control+.input-group-prepend .input-group-text,
.modal.modal-success .input-group.no-border .form-control+.input-group-append .input-group-text {
  background-color: rgba(255, 255, 255, 0.1);
}

.modal.modal-success .form-group.no-border .form-control+.input-group-prepend .input-group-text:focus,
.modal.modal-success .form-group.no-border .form-control+.input-group-prepend .input-group-text:active,
.modal.modal-success .form-group.no-border .form-control+.input-group-prepend .input-group-text:active,
.modal.modal-success .form-group.no-border .form-control+.input-group-append .input-group-text:focus,
.modal.modal-success .form-group.no-border .form-control+.input-group-append .input-group-text:active,
.modal.modal-success .form-group.no-border .form-control+.input-group-append .input-group-text:active,
.modal.modal-success .input-group.no-border .form-control+.input-group-prepend .input-group-text:focus,
.modal.modal-success .input-group.no-border .form-control+.input-group-prepend .input-group-text:active,
.modal.modal-success .input-group.no-border .form-control+.input-group-prepend .input-group-text:active,
.modal.modal-success .input-group.no-border .form-control+.input-group-append .input-group-text:focus,
.modal.modal-success .input-group.no-border .form-control+.input-group-append .input-group-text:active,
.modal.modal-success .input-group.no-border .form-control+.input-group-append .input-group-text:active {
  background-color: rgba(255, 255, 255, 0.2);
  color: #FFFFFF;
}

.modal.modal-success .form-group.no-border .form-control:focus+.input-group-prepend .input-group-text,
.modal.modal-success .form-group.no-border .form-control:focus+.input-group-append .input-group-text,
.modal.modal-success .input-group.no-border .form-control:focus+.input-group-prepend .input-group-text,
.modal.modal-success .input-group.no-border .form-control:focus+.input-group-append .input-group-text {
  background-color: rgba(255, 255, 255, 0.2);
  color: #FFFFFF;
}

.modal.modal-success .form-group.no-border .input-group-prepend .input-group-text,
.modal.modal-success .form-group.no-border .input-group-append .input-group-text,
.modal.modal-success .input-group.no-border .input-group-prepend .input-group-text,
.modal.modal-success .input-group.no-border .input-group-append .input-group-text {
  background-color: rgba(255, 255, 255, 0.1);
  border: none;
  color: #FFFFFF;
}

.modal.modal-success .form-group.no-border.input-group-focus .input-group-prepend .input-group-text,
.modal.modal-success .form-group.no-border.input-group-focus .input-group-append .input-group-text,
.modal.modal-success .input-group.no-border.input-group-focus .input-group-prepend .input-group-text,
.modal.modal-success .input-group.no-border.input-group-focus .input-group-append .input-group-text {
  background-color: rgba(255, 255, 255, 0.2);
  color: #FFFFFF;
}

.modal.modal-success .input-group-addon,
.modal.modal-success .form-group.no-border .input-group-addon,
.modal.modal-success .input-group.no-border .input-group-addon {
  color: rgba(255, 255, 255, 0.8);
}

.modal.modal-info .modal-content {
  background-color: #2CA8FF;
  color: #FFFFFF;
}

.modal.modal-info .modal-header .close {
  color: #FFFFFF;
}

.modal.modal-info .form-control::-moz-placeholder {
  color: #ebebeb;
  opacity: 1;
  filter: alpha(opacity=100);
}

.modal.modal-info .form-control:-moz-placeholder {
  color: #ebebeb;
  opacity: 1;
  filter: alpha(opacity=100);
}

.modal.modal-info .form-control::-webkit-input-placeholder {
  color: #ebebeb;
  opacity: 1;
  filter: alpha(opacity=100);
}

.modal.modal-info .form-control:-ms-input-placeholder {
  color: #ebebeb;
  opacity: 1;
  filter: alpha(opacity=100);
}

.modal.modal-info .form-control {
  border-color: rgba(255, 255, 255, 0.5);
  color: #FFFFFF;
}

.modal.modal-info .form-control:focus {
  border-color: #FFFFFF;
  background-color: transparent;
  color: #FFFFFF;
}

.modal.modal-info .has-success:after,
.modal.modal-info .has-danger:after {
  color: #FFFFFF;
}

.modal.modal-info .has-danger .form-control {
  background-color: transparent;
}

.modal.modal-info .input-group-prepend .input-group-text,
.modal.modal-info .input-group-append .input-group-text {
  background-color: transparent;
  border-color: rgba(255, 255, 255, 0.5);
  color: #FFFFFF;
}

.modal.modal-info .input-group-focus .input-group-prepend .input-group-text,
.modal.modal-info .input-group-focus .input-group-append .input-group-text {
  background-color: transparent;
  border-color: #FFFFFF;
  color: #FFFFFF;
}

.modal.modal-info .form-group.no-border .form-control,
.modal.modal-info .input-group.no-border .form-control {
  background-color: rgba(255, 255, 255, 0.1);
  color: #FFFFFF;
}

.modal.modal-info .form-group.no-border .form-control:focus,
.modal.modal-info .form-group.no-border .form-control:active,
.modal.modal-info .form-group.no-border .form-control:active,
.modal.modal-info .input-group.no-border .form-control:focus,
.modal.modal-info .input-group.no-border .form-control:active,
.modal.modal-info .input-group.no-border .form-control:active {
  background-color: rgba(255, 255, 255, 0.2);
  color: #FFFFFF;
}

.modal.modal-info .form-group.no-border .form-control+.input-group-prepend .input-group-text,
.modal.modal-info .form-group.no-border .form-control+.input-group-append .input-group-text,
.modal.modal-info .input-group.no-border .form-control+.input-group-prepend .input-group-text,
.modal.modal-info .input-group.no-border .form-control+.input-group-append .input-group-text {
  background-color: rgba(255, 255, 255, 0.1);
}

.modal.modal-info .form-group.no-border .form-control+.input-group-prepend .input-group-text:focus,
.modal.modal-info .form-group.no-border .form-control+.input-group-prepend .input-group-text:active,
.modal.modal-info .form-group.no-border .form-control+.input-group-prepend .input-group-text:active,
.modal.modal-info .form-group.no-border .form-control+.input-group-append .input-group-text:focus,
.modal.modal-info .form-group.no-border .form-control+.input-group-append .input-group-text:active,
.modal.modal-info .form-group.no-border .form-control+.input-group-append .input-group-text:active,
.modal.modal-info .input-group.no-border .form-control+.input-group-prepend .input-group-text:focus,
.modal.modal-info .input-group.no-border .form-control+.input-group-prepend .input-group-text:active,
.modal.modal-info .input-group.no-border .form-control+.input-group-prepend .input-group-text:active,
.modal.modal-info .input-group.no-border .form-control+.input-group-append .input-group-text:focus,
.modal.modal-info .input-group.no-border .form-control+.input-group-append .input-group-text:active,
.modal.modal-info .input-group.no-border .form-control+.input-group-append .input-group-text:active {
  background-color: rgba(255, 255, 255, 0.2);
  color: #FFFFFF;
}

.modal.modal-info .form-group.no-border .form-control:focus+.input-group-prepend .input-group-text,
.modal.modal-info .form-group.no-border .form-control:focus+.input-group-append .input-group-text,
.modal.modal-info .input-group.no-border .form-control:focus+.input-group-prepend .input-group-text,
.modal.modal-info .input-group.no-border .form-control:focus+.input-group-append .input-group-text {
  background-color: rgba(255, 255, 255, 0.2);
  color: #FFFFFF;
}

.modal.modal-info .form-group.no-border .input-group-prepend .input-group-text,
.modal.modal-info .form-group.no-border .input-group-append .input-group-text,
.modal.modal-info .input-group.no-border .input-group-prepend .input-group-text,
.modal.modal-info .input-group.no-border .input-group-append .input-group-text {
  background-color: rgba(255, 255, 255, 0.1);
  border: none;
  color: #FFFFFF;
}

.modal.modal-info .form-group.no-border.input-group-focus .input-group-prepend .input-group-text,
.modal.modal-info .form-group.no-border.input-group-focus .input-group-append .input-group-text,
.modal.modal-info .input-group.no-border.input-group-focus .input-group-prepend .input-group-text,
.modal.modal-info .input-group.no-border.input-group-focus .input-group-append .input-group-text {
  background-color: rgba(255, 255, 255, 0.2);
  color: #FFFFFF;
}

.modal.modal-info .input-group-addon,
.modal.modal-info .form-group.no-border .input-group-addon,
.modal.modal-info .input-group.no-border .input-group-addon {
  color: rgba(255, 255, 255, 0.8);
}

.modal .modal-header .close {
  color: #FF3636;
  text-shadow: none;
}

.modal .modal-header .close:hover,
.modal .modal-header .close:focus {
  opacity: 1;
}

.carousel-item-next,
.carousel-item-prev,
.carousel-item.active {
  display: block;
}

.carousel .carousel-inner {
  box-shadow: 0px 10px 25px 0px rgba(0, 0, 0, 0.3);
}

.carousel .now-ui-icons {
  font-size: 2em;
}

.wrapper {
  position: relative;
  top: 0;
  height: 100vh;
}

.wrapper.wrapper-full-page {
  min-height: 100vh;
  height: auto;
}

.sidebar,
.off-canvas-sidebar {
  position: fixed;
  top: 0;
  height: 100%;
  bottom: 0;
  width: 260px;
  left: 0;
  z-index: 9999;
  box-shadow: 0px 2px 22px 0 rgba(0, 0, 0, 0.2), 0px 2px 30px 0 rgba(0, 0, 0, 0.35);
}

.sidebar .sidebar-wrapper,
.off-canvas-sidebar .sidebar-wrapper {
  position: relative;
  height: calc(100vh - 75px);
  overflow: auto;
  width: 260px;
  z-index: 4;
  padding-bottom: 100px;
}

.sidebar .sidebar-wrapper .dropdown .dropdown-backdrop,
.off-canvas-sidebar .sidebar-wrapper .dropdown .dropdown-backdrop {
  display: none !important;
}

.sidebar .sidebar-wrapper .navbar-form,
.off-canvas-sidebar .sidebar-wrapper .navbar-form {
  border: none;
}

.sidebar .sidebar-wrapper>.nav [data-toggle="collapse"]~div>ul>li>a span,
.sidebar .sidebar-wrapper .user .info [data-toggle="collapse"]~div>ul>li>a span,
.off-canvas-sidebar .sidebar-wrapper>.nav [data-toggle="collapse"]~div>ul>li>a span,
.off-canvas-sidebar .sidebar-wrapper .user .info [data-toggle="collapse"]~div>ul>li>a span {
  display: inline-block;
}

.sidebar .sidebar-wrapper>.nav [data-toggle="collapse"]~div>ul>li>a .sidebar-normal,
.sidebar .sidebar-wrapper .user .info [data-toggle="collapse"]~div>ul>li>a .sidebar-normal,
.off-canvas-sidebar .sidebar-wrapper>.nav [data-toggle="collapse"]~div>ul>li>a .sidebar-normal,
.off-canvas-sidebar .sidebar-wrapper .user .info [data-toggle="collapse"]~div>ul>li>a .sidebar-normal {
  margin: 0;
  position: relative;
  transform: translateX(0px);
  opacity: 1;
  white-space: nowrap;
  display: block;
  line-height: 23px;
  z-index: 1;
}

.sidebar .sidebar-wrapper>.nav [data-toggle="collapse"]~div>ul>li>a .sidebar-mini-icon,
.sidebar .sidebar-wrapper .user .info [data-toggle="collapse"]~div>ul>li>a .sidebar-mini-icon,
.off-canvas-sidebar .sidebar-wrapper>.nav [data-toggle="collapse"]~div>ul>li>a .sidebar-mini-icon,
.off-canvas-sidebar .sidebar-wrapper .user .info [data-toggle="collapse"]~div>ul>li>a .sidebar-mini-icon {
  text-transform: uppercase;
  width: 34px;
  margin-right: 10px;
  margin-left: 0px;
  font-size: 12px;
  text-align: center;
  line-height: 25px;
  position: relative;
  float: left;
  z-index: 1;
  display: inherit;
  line-height: 24px;
  color: rgba(255, 255, 255, 0.5);
}

.sidebar .sidebar-wrapper>.nav [data-toggle="collapse"]~div>ul>li>a i,
.sidebar .sidebar-wrapper .user .info [data-toggle="collapse"]~div>ul>li>a i,
.off-canvas-sidebar .sidebar-wrapper>.nav [data-toggle="collapse"]~div>ul>li>a i,
.off-canvas-sidebar .sidebar-wrapper .user .info [data-toggle="collapse"]~div>ul>li>a i {
  font-size: 17px;
  line-height: 20px;
  width: 26px;
}

.sidebar .sidebar-wrapper [data-toggle="collapse"]~div>ul>li.active>a .sidebar-mini-icon,
.off-canvas-sidebar .sidebar-wrapper [data-toggle="collapse"]~div>ul>li.active>a .sidebar-mini-icon {
  color: #f96332;
}

.sidebar .navbar-minimize,
.off-canvas-sidebar .navbar-minimize {
  position: absolute;
  right: 18px;
  top: 2px;
  opacity: 1;
}

.sidebar .navbar-minimize .btn,
.sidebar .navbar-minimize .btn:active,
.sidebar .navbar-minimize .btn:focus,
.sidebar .navbar-minimize .btn:hover,
.off-canvas-sidebar .navbar-minimize .btn,
.off-canvas-sidebar .navbar-minimize .btn:active,
.off-canvas-sidebar .navbar-minimize .btn:focus,
.off-canvas-sidebar .navbar-minimize .btn:hover {
  background-color: transparent !important;
}

.sidebar .logo-tim,
.off-canvas-sidebar .logo-tim {
  border-radius: 50%;
  border: 1px solid #333;
  display: block;
  height: 61px;
  width: 61px;
  float: left;
  overflow: hidden;
}

.sidebar .logo-tim img,
.off-canvas-sidebar .logo-tim img {
  width: 60px;
  height: 60px;
}

.sidebar .nav,
.off-canvas-sidebar .nav {
  margin-top: 20px;
  display: block;
}

.sidebar .nav .caret,
.off-canvas-sidebar .nav .caret {
  top: 14px;
  position: absolute;
  right: 10px;
}

.sidebar .nav li>a+div .nav li>a,
.off-canvas-sidebar .nav li>a+div .nav li>a {
  margin-top: 7px;
}

.sidebar .nav li>a,
.off-canvas-sidebar .nav li>a {
  margin: 10px 15px 0;
  border-radius: 30px;
  color: #FFFFFF;
  display: block;
  text-decoration: none;
  position: relative;
  text-transform: uppercase;
  cursor: pointer;
  font-size: 0.7142em;
  padding: 10px 8px;
  line-height: 1.625rem;
}

.sidebar .nav li:first-child>a,
.off-canvas-sidebar .nav li:first-child>a {
  margin: 0 15px;
}

.sidebar .nav li:hover:not(.active)>a,
.sidebar .nav li:focus:not(.active)>a,
.off-canvas-sidebar .nav li:hover:not(.active)>a,
.off-canvas-sidebar .nav li:focus:not(.active)>a {
  background-color: rgba(255, 255, 255, 0.1);
}

.sidebar .nav li:hover:not(.active)>a i,
.sidebar .nav li:focus:not(.active)>a i,
.off-canvas-sidebar .nav li:hover:not(.active)>a i,
.off-canvas-sidebar .nav li:focus:not(.active)>a i {
  color: #FFFFFF;
}

.sidebar .nav li.active>a:not([data-toggle="collapse"]),
.off-canvas-sidebar .nav li.active>a:not([data-toggle="collapse"]) {
  background-color: #FFFFFF;
  box-shadow: 0 1px 15px 1px rgba(39, 39, 39, 0.1);
}

.sidebar .nav li.active>a[data-toggle="collapse"],
.off-canvas-sidebar .nav li.active>a[data-toggle="collapse"] {
  background-color: rgba(255, 255, 255, 0.1);
  box-shadow: none;
  color: #FFFFFF;
}

.sidebar .nav li.active>a[data-toggle="collapse"] i,
.off-canvas-sidebar .nav li.active>a[data-toggle="collapse"] i {
  color: #FFFFFF;
}

.sidebar .nav li.active>a[data-toggle="collapse"]+div .nav .active a,
.off-canvas-sidebar .nav li.active>a[data-toggle="collapse"]+div .nav .active a {
  background-color: transparent;
  box-shadow: none;
}

.sidebar .nav li.active>a[data-toggle="collapse"]+div .nav .active a:after,
.off-canvas-sidebar .nav li.active>a[data-toggle="collapse"]+div .nav .active a:after {
  content: "";
  position: absolute;
  background-color: #FFFFFF;
  border-radius: 30px;
  box-shadow: 0 1px 15px 1px rgba(39, 39, 39, 0.1);
  color: #f96332;
  height: 44px;
  width: calc(100% - 5px);
  top: 0;
  left: 2px;
  z-index: 0;
}

.sidebar .nav p,
.off-canvas-sidebar .nav p {
  margin: 0;
  line-height: 30px;
  position: relative;
  display: block;
  height: auto;
  white-space: nowrap;
}

.sidebar .nav i,
.off-canvas-sidebar .nav i {
  font-size: 20px;
  float: left;
  margin-right: 12px;
  line-height: 30px;
  width: 34px;
  text-align: center;
  color: rgba(255, 255, 255, 0.5);
  position: relative;
}

.sidebar .sidebar-background,
.off-canvas-sidebar .sidebar-background {
  position: absolute;
  z-index: 1;
  height: 100%;
  width: 100%;
  display: block;
  top: 0;
  left: 0;
  background-size: cover;
  background-position: center center;
}

.sidebar .sidebar-background:after,
.off-canvas-sidebar .sidebar-background:after {
  position: absolute;
  z-index: 3;
  width: 100%;
  height: 100%;
  content: "";
  display: block;
  background: #FFFFFF;
  opacity: 1;
}

.sidebar .logo,
.off-canvas-sidebar .logo {
  position: relative;
  padding: 0.5rem 0.7rem;
  z-index: 4;
}

.sidebar .logo a.logo-mini,
.off-canvas-sidebar .logo a.logo-mini {
  opacity: 1;
  float: left;
  width: 34px;
  text-align: center;
  margin-left: 10px;
  margin-right: 12px;
}

.sidebar .logo a.logo-normal,
.off-canvas-sidebar .logo a.logo-normal {
  display: block;
  opacity: 1;
  -webkit-transform: translate3d(0px, 0, 0);
  -moz-transform: translate3d(0px, 0, 0);
  -o-transform: translate3d(0px, 0, 0);
  -ms-transform: translate3d(0px, 0, 0);
  transform: translate3d(0px, 0, 0);
}

.sidebar .logo:after,
.off-canvas-sidebar .logo:after {
  content: '';
  position: absolute;
  bottom: 0;
  right: 15px;
  height: 1px;
  width: calc(100% - 30px);
  background-color: rgba(255, 255, 255, 0.5);
}

.sidebar .logo p,
.off-canvas-sidebar .logo p {
  float: left;
  font-size: 20px;
  margin: 10px 10px;
  color: #FFFFFF;
  line-height: 20px;
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
}

.sidebar .logo .simple-text,
.off-canvas-sidebar .logo .simple-text {
  text-transform: uppercase;
  padding: 0.5rem 0;
  display: block;
  white-space: nowrap;
  font-size: 1em;
  color: #FFFFFF;
  text-decoration: none;
  font-weight: 400;
  line-height: 30px;
  overflow: hidden;
}

.sidebar .logo-tim,
.off-canvas-sidebar .logo-tim {
  border-radius: 50%;
  border: 1px solid #333;
  display: block;
  height: 61px;
  width: 61px;
  float: left;
  overflow: hidden;
}

.sidebar .logo-tim img,
.off-canvas-sidebar .logo-tim img {
  width: 60px;
  height: 60px;
}

.sidebar:before,
.sidebar:after,
.off-canvas-sidebar:before,
.off-canvas-sidebar:after {
  display: block;
  content: "";
  opacity: 1;
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
}

.sidebar:after,
.off-canvas-sidebar:after {
  background: #888;
  background: -webkit-linear-gradient(#888 0%, #000 80%);
  background: -o-linear-gradient(#888 0%, #000 80%);
  background: -moz-linear-gradient(#888 0%, #000 80%);
  background: linear-gradient(#888 0%, #000 80%);
  z-index: 3;
}

.sidebar[data-color="blue"]:after,
.off-canvas-sidebar[data-color="blue"]:after {
  background: #2CA8FF;
}

.sidebar[data-color="blue"] .nav li.active>a:not([data-toggle="collapse"]),
.off-canvas-sidebar[data-color="blue"] .nav li.active>a:not([data-toggle="collapse"]) {
  color: #2CA8FF;
}

.sidebar[data-color="blue"] .nav li.active>a:not([data-toggle="collapse"]) i,
.off-canvas-sidebar[data-color="blue"] .nav li.active>a:not([data-toggle="collapse"]) i {
  color: #2CA8FF;
}

.sidebar[data-color="green"]:after,
.off-canvas-sidebar[data-color="green"]:after {
  background: #18ce0f;
}

.sidebar[data-color="green"] .nav li.active>a:not([data-toggle="collapse"]),
.off-canvas-sidebar[data-color="green"] .nav li.active>a:not([data-toggle="collapse"]) {
  color: #18ce0f;
}

.sidebar[data-color="green"] .nav li.active>a:not([data-toggle="collapse"]) i,
.off-canvas-sidebar[data-color="green"] .nav li.active>a:not([data-toggle="collapse"]) i {
  color: #18ce0f;
}

.sidebar[data-color="orange"]:after,
.off-canvas-sidebar[data-color="orange"]:after {
  background: #f96332;
}

.sidebar[data-color="orange"] .nav li.active>a:not([data-toggle="collapse"]),
.off-canvas-sidebar[data-color="orange"] .nav li.active>a:not([data-toggle="collapse"]) {
  color: #f96332;
}

.sidebar[data-color="orange"] .nav li.active>a:not([data-toggle="collapse"]) i,
.off-canvas-sidebar[data-color="orange"] .nav li.active>a:not([data-toggle="collapse"]) i {
  color: #f96332;
}

.sidebar[data-color="red"]:after,
.off-canvas-sidebar[data-color="red"]:after {
  background: #FF3636;
}

.sidebar[data-color="red"] .nav li.active>a:not([data-toggle="collapse"]),
.off-canvas-sidebar[data-color="red"] .nav li.active>a:not([data-toggle="collapse"]) {
  color: #FF3636;
}

.sidebar[data-color="red"] .nav li.active>a:not([data-toggle="collapse"]) i,
.off-canvas-sidebar[data-color="red"] .nav li.active>a:not([data-toggle="collapse"]) i {
  color: #FF3636;
}

.sidebar[data-color="yellow"]:after,
.off-canvas-sidebar[data-color="yellow"]:after {
  background: #FFB236;
}

.sidebar[data-color="yellow"] .nav li.active>a:not([data-toggle="collapse"]),
.off-canvas-sidebar[data-color="yellow"] .nav li.active>a:not([data-toggle="collapse"]) {
  color: #FFB236;
}

.sidebar[data-color="yellow"] .nav li.active>a:not([data-toggle="collapse"]) i,
.off-canvas-sidebar[data-color="yellow"] .nav li.active>a:not([data-toggle="collapse"]) i {
  color: #FFB236;
}

.sidebar .user,
.off-canvas-sidebar .user {
  padding-bottom: 20px;
  margin: 20px auto 0;
  position: relative;
}

.sidebar .user:after,
.off-canvas-sidebar .user:after {
  content: '';
  position: absolute;
  bottom: 0;
  right: 15px;
  height: 1px;
  width: calc(100% - 30px);
  background-color: rgba(255, 255, 255, 0.5);
}

.sidebar .user .photo,
.off-canvas-sidebar .user .photo {
  width: 34px;
  height: 34px;
  overflow: hidden;
  float: left;
  z-index: 5;
  margin-right: 10px;
  border-radius: 50%;
  margin-left: 23px;
  box-shadow: 0px 10px 25px 0px rgba(0, 0, 0, 0.3);
}

.sidebar .user .photo img,
.off-canvas-sidebar .user .photo img {
  width: 100%;
}

.sidebar .user a,
.off-canvas-sidebar .user a {
  color: #FFFFFF;
  text-decoration: none;
  padding: 0.5rem 15px;
  white-space: nowrap;
}

.sidebar .user .info>a,
.off-canvas-sidebar .user .info>a {
  display: block;
  line-height: 18px;
}

.sidebar .user .info>a>span,
.off-canvas-sidebar .user .info>a>span {
  display: block;
  position: relative;
  opacity: 1;
}

.sidebar .user .info .caret,
.off-canvas-sidebar .user .info .caret {
  position: absolute;
  top: 8px;
  right: 18px;
}

.visible-on-sidebar-regular {
  display: inline-block !important;
}

.visible-on-sidebar-mini {
  display: none !important;
}

.off-canvas-sidebar .nav>li>a,
.off-canvas-sidebar .nav>li>a:hover {
  color: #FFFFFF;
}

.off-canvas-sidebar .nav>li>a:focus {
  background: rgba(200, 200, 200, 0.2);
}

.main-panel {
  position: relative;
  float: right;
  width: calc(100% - 260px);
  background-color: #ebecf1;
  -webkit-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
  -moz-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
  -o-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
  -ms-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
  transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
}

.main-panel>.content {
  padding: 0 30px 30px;
  min-height: calc(100vh - 123px);
  margin-top: -30px;
}

.main-panel>.navbar {
  margin-bottom: 0;
}

.main-panel .header {
  margin-bottom: 50px;
}

.perfect-scrollbar-on .sidebar,
.perfect-scrollbar-on .main-panel {
  height: 100%;
  max-height: 100%;
}

.navbar.fixed-top {
  width: calc(100% - 260px);
  z-index: 10;
  right: 0;
  left: auto;
}

@media (max-width: 991px) {
  .navbar.fixed-top {
    width: 100%;
  }
}

@media (min-width: 991px) {
  .sidebar,
  .main-panel,
  .sidebar-wrapper {
    -webkit-transition-property: top, bottom, width;
    transition-property: top, bottom, width;
    -webkit-transition-duration: .2s, .2s, .35s;
    transition-duration: .2s, .2s, .35s;
    -webkit-transition-timing-function: linear, linear, ease;
    transition-timing-function: linear, linear, ease;
    -webkit-overflow-scrolling: touch;
  }
  .sidebar-mini .visible-on-sidebar-regular {
    display: none !important;
  }
  .sidebar-mini .visible-on-sidebar-mini {
    display: inline-block !important;
  }
  .sidebar-mini .navbar.fixed-top {
    width: calc(100% - 80px);
  }
  .sidebar-mini .navbar-minimize {
    opacity: 0;
  }
  .sidebar-mini .sidebar,
  .sidebar-mini .sidebar .sidebar-wrapper {
    width: 80px;
  }
  .sidebar-mini .main-panel {
    width: calc(100% - 80px);
  }
  .sidebar-mini .sidebar {
    display: block;
    z-index: 1030;
  }
  .sidebar-mini .sidebar .logo a.logo-normal {
    opacity: 0;
    -webkit-transform: translate3d(-25px, 0, 0);
    -moz-transform: translate3d(-25px, 0, 0);
    -o-transform: translate3d(-25px, 0, 0);
    -ms-transform: translate3d(-25px, 0, 0);
    transform: translate3d(-25px, 0, 0);
  }
  .sidebar-mini .sidebar .sidebar-wrapper>.nav [data-toggle="collapse"]~div>ul>li>a .sidebar-normal,
  .sidebar-mini .sidebar .sidebar-wrapper .user .info [data-toggle="collapse"]~div>ul>li>a .sidebar-normal,
  .sidebar-mini .sidebar .sidebar-wrapper .user .info>a>span,
  .sidebar-mini .sidebar .sidebar-wrapper>.nav li>a p {
    -webkit-transform: translate3d(-25px, 0, 0);
    -moz-transform: translate3d(-25px, 0, 0);
    -o-transform: translate3d(-25px, 0, 0);
    -ms-transform: translate3d(-25px, 0, 0);
    transform: translate3d(-25px, 0, 0);
    opacity: 0;
  }
  .sidebar-mini .sidebar:hover {
    width: 260px;
  }
  .sidebar-mini .sidebar:hover .logo a.logo-normal {
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0);
    -moz-transform: translate3d(0, 0, 0);
    -o-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
  .sidebar-mini .sidebar:hover .navbar-minimize {
    opacity: 1;
  }
  .sidebar-mini .sidebar:hover .sidebar-wrapper {
    width: 260px;
  }
  .sidebar-mini .sidebar:hover .sidebar-wrapper>.nav li>a p,
  .sidebar-mini .sidebar:hover .sidebar-wrapper>.nav [data-toggle="collapse"]~div>ul>li>a .sidebar-normal,
  .sidebar-mini .sidebar:hover .sidebar-wrapper .user .info [data-toggle="collapse"]~div>ul>li>a .sidebar-normal,
  .sidebar-mini .sidebar:hover .sidebar-wrapper .user .info>a>span {
    -webkit-transform: translate3d(0px, 0, 0);
    -moz-transform: translate3d(0px, 0, 0);
    -o-transform: translate3d(0px, 0, 0);
    -ms-transform: translate3d(0px, 0, 0);
    transform: translate3d(0px, 0, 0);
    opacity: 1;
  }
}

.panel-header {
  height: 260px;
  padding-top: 80px;
  padding-bottom: 45px;
  background: #141E30;
  /* fallback for old browsers */
  background: -webkit-gradient(linear, left top, right top, from(#0c2646), color-stop(60%, #204065), to(#2a5788));
  background: linear-gradient(to right, #0c2646 0%, #204065 60%, #2a5788 100%);
  position: relative;
  overflow: hidden;
}

.panel-header .header .title {
  color: #FFFFFF;
}

.panel-header .header .category {
  max-width: 600px;
  color: rgba(255, 255, 255, 0.5);
  margin: 0 auto;
  font-size: 13px;
}

.panel-header .header .category a {
  color: #FFFFFF;
}

.panel-header-sm {
  height: 135px;
}

.panel-header-lg {
  height: 380px;
}

.card-timeline .timeline {
  list-style: none;
  padding: 20px 0 20px;
  position: relative;
}

.card-timeline .timeline:before {
  top: 0;
  bottom: 0;
  position: absolute;
  content: " ";
  width: 3px;
  background-color: #dbdbdb;
  left: 50%;
  margin-left: -1.5px;
}

.card-timeline .timeline .timeline-footer .btn {
  margin: 0;
}

.card-timeline .timeline .timeline-footer .dropdown {
  display: inline-block;
}

.card-timeline .timeline h6 {
  color: #9A9A9A;
  font-weight: 400;
  margin: 10px 0px 0px;
}

.card-timeline .timeline.timeline-simple:before {
  left: 5%;
}

.card-timeline .timeline.timeline-simple>li>.timeline-panel {
  width: 86%;
}

.card-timeline .timeline.timeline-simple>li>.timeline-badge {
  left: 5%;
}

.card-timeline .timeline>li {
  margin-bottom: 20px;
  position: relative;
}

.card-timeline .timeline>li:before,
.card-timeline .timeline>li:after {
  content: " ";
  display: table;
}

.card-timeline .timeline>li:after {
  clear: both;
}

.card-timeline .timeline>li>.timeline-panel {
  width: 45%;
  float: left;
  padding: 20px;
  border-radius: 0.1875rem;
  box-shadow: 0 2px 2px rgba(204, 197, 185, 0.5);
  background-color: #FFFFFF;
  color: #2c2c2c;
  margin-bottom: 20px;
  position: relative;
}

.card-timeline .timeline>li>.timeline-panel:before {
  position: absolute;
  top: 26px;
  right: -15px;
  display: inline-block;
  border-top: 15px solid transparent;
  border-left: 15px solid #E3E3E3;
  border-right: 0 solid #E3E3E3;
  border-bottom: 15px solid transparent;
  content: " ";
}

.card-timeline .timeline>li>.timeline-panel:after {
  position: absolute;
  top: 27px;
  right: -14px;
  display: inline-block;
  border-top: 14px solid transparent;
  border-left: 14px solid #FFFFFF;
  border-right: 0 solid #FFFFFF;
  border-bottom: 14px solid transparent;
  content: " ";
}

.card-timeline .timeline>li>.timeline-badge {
  color: #FFFFFF;
  width: 50px;
  height: 50px;
  line-height: 51px;
  font-size: 1.4em;
  text-align: center;
  position: absolute;
  top: 16px;
  left: 50%;
  margin-left: -25px;
  background-color: #9A9A9A;
  z-index: 100;
  border-top-right-radius: 50%;
  border-top-left-radius: 50%;
  border-bottom-right-radius: 50%;
  border-bottom-left-radius: 50%;
}

.card-timeline .timeline>li>.timeline-badge [class^="ti-"],
.card-timeline .timeline>li>.timeline-badge [class*=" ti-"] {
  line-height: inherit;
}

.card-timeline .timeline>li>.timeline-badge .now-ui-icons {
  line-height: 2.6;
  width: 25px;
  text-align: center;
}

.card-timeline .timeline>li.timeline-inverted>.timeline-panel {
  float: right;
  background-color: #fff;
}

.card-timeline .timeline>li.timeline-inverted>.timeline-panel:before {
  border-left-width: 0;
  border-right-width: 15px;
  left: -15px;
  right: auto;
}

.card-timeline .timeline>li.timeline-inverted>.timeline-panel:after {
  border-left-width: 0;
  border-right-width: 14px;
  left: -14px;
  right: auto;
}

.card-timeline .timeline-heading {
  margin-bottom: 15px;
}

.card-timeline .timeline-badge.primary {
  background-color: #2CA8FF !important;
}

.card-timeline .timeline-badge.info {
  background-color: #2CA8FF !important;
}

.card-timeline .timeline-badge.success {
  background-color: #18ce0f !important;
}

.card-timeline .timeline-badge.warning {
  background-color: #FFB236 !important;
}

.card-timeline .timeline-badge.danger {
  background-color: #FF3636 !important;
}

.card-timeline .timeline-title {
  margin-top: 0;
  color: inherit;
}

.card-timeline .timeline-body>p,
.card-timeline .timeline-body>ul {
  margin-bottom: 0;
}

.card-timeline .timeline-body>p+p {
  margin-top: 5px;
}

.card {
  border: 0;
  border-radius: 0.1875rem;
  display: inline-block;
  position: relative;
  width: 100%;
  margin-bottom: 20px;
  box-shadow: 0 1px 15px 1px rgba(39, 39, 39, 0.1);
}

.card [data-notify="container"].alert {
  min-width: auto;
  left: unset !important;
  right: unset !important;
}

.card .card-body {
  padding: 15px 15px 10px 15px;
}

.card .card-body.table-full-width {
  padding-left: 0;
  padding-right: 0;
}

.card .card-header {
  padding: 15px 15px 0;
  border: 0;
}

.card .card-header:not([data-background-color]) {
  background-color: transparent;
}

.card .card-header .card-title {
  margin-top: 10px;
}

.card .map {
  border-radius: 0.1875rem;
}

.card .map.map-big {
  height: 400px;
}

.card[data-background-color="orange"] {
  background-color: #f96332;
}

.card[data-background-color="orange"] .card-header {
  background-color: #f96332;
}

.card[data-background-color="orange"] .card-footer .stats {
  color: #FFFFFF;
}

.card[data-background-color="red"] {
  background-color: #FF3636;
}

.card[data-background-color="yellow"] {
  background-color: #FFB236;
}

.card[data-background-color="blue"] {
  background-color: #2CA8FF;
}

.card[data-background-color="green"] {
  background-color: #18ce0f;
}

.card .image {
  overflow: hidden;
  height: 200px;
  position: relative;
}

.card .avatar {
  width: 250px;
  height: 250px;
  overflow: hidden;
  border-radius: 50%;
  margin-bottom: 15px;
}

.card label {
  font-size: 0.8571em;
  margin-bottom: 5px;
  color: #9A9A9A;
}

.card .card-footer {
  background-color: transparent;
  border: 0;
}

.card .card-footer .stats i {
  margin-right: 5px;
  position: relative;
  top: 2px;
}

.card .card-footer .btn {
  margin: 0;
}

.card-chart .card-header .card-title {
  margin-top: 10px;
  margin-bottom: 0;
}

.card-chart .card-header .card-category {
  margin-bottom: 5px;
}

.card-chart .table {
  margin-bottom: 0;
}

.card-chart .table td {
  border-top: none;
  border-bottom: 1px solid #e9ecef;
}

.card-chart .card-progress {
  margin-top: 30px;
}

.card-chart .chart-area {
  height: 190px;
  width: calc(100% + 30px);
  margin-left: -15px;
  margin-right: -15px;
}

.card-chart .card-footer {
  margin-top: 15px;
}

.card-chart .card-footer .stats {
  color: #9A9A9A;
}

.card-chart .dropdown {
  position: absolute;
  right: 20px;
  top: 20px;
}

.card-chart .dropdown .btn {
  margin: 0;
}

.card-user .image {
  height: 120px;
}

.card-user .author {
  text-align: center;
  text-transform: none;
  margin-top: -77px;
}

.card-user .author a+p.description {
  margin-top: -7px;
}

.card-user .avatar {
  width: 124px;
  height: 124px;
  border: 1px solid #FFFFFF;
  position: relative;
}

.card-user .card-body {
  min-height: 240px;
}

.card-user hr {
  margin: 5px 15px;
}

.card-user .button-container {
  margin-bottom: 6px;
  text-align: center;
}

.card-plain {
  background: transparent;
  box-shadow: none;
}

.card-plain .card-header,
.card-plain .card-footer {
  margin-left: 0;
  margin-right: 0;
  background-color: transparent;
}

.card-plain:not(.card-subcategories).card-body {
  padding-left: 0;
  padding-right: 0;
}

.card-background {
  background-position: center center;
  background-size: cover;
  text-align: center;
}

.card-background .card-body {
  position: relative;
  z-index: 2;
  min-height: 370px;
  max-width: 530px;
  margin: 0 auto;
  padding-top: 60px;
  padding-bottom: 60px;
}

.card-background .card-footer {
  position: relative;
  z-index: 2;
}

.card-background.card-background-product .card-body {
  max-width: 400px;
}

.card-background.card-background-product .card-body .card-title {
  margin-top: 30px;
}

.card-background .stats {
  color: #FFFFFF;
}

.card-background .card-footer .stats-link>a {
  color: #FFFFFF;
  line-height: 1.9;
}

.card-background .category,
.card-background .card-description,
.card-background small {
  color: rgba(255, 255, 255, 0.8);
}

.card-background .card-title {
  color: #FFFFFF;
  margin-top: 130px;
}

.card-background:not(.card-pricing) .btn {
  margin-bottom: 0;
}

.card-background::after {
  position: absolute;
  z-index: 1;
  width: 100%;
  height: 100%;
  display: block;
  left: 0;
  top: 0;
  content: "";
  background-color: rgba(0, 0, 0, 0.63);
  border-radius: 0.25rem;
}

.card-collapse .card {
  margin-bottom: 25px;
}

.card-collapse .card .card-header {
  position: relative;
  padding: .75rem 1.25rem;
  padding-left: 0;
  padding-right: 0;
}

.card-collapse .card .card-header a[data-toggle="collapse"] {
  display: block;
  color: #444;
}

.card-collapse .card .card-header a[data-toggle="collapse"] i {
  float: right;
  position: relative;
  color: #f96332;
  top: 1px;
}

.card-collapse .card .card-header:after {
  content: "";
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 1px;
  background-color: #E3E3E3;
}

.card-collapse .card .card-body {
  padding-left: .5rem;
  padding-right: .5rem;
}

.map {
  height: 280px;
}

.card-contributions .card-description {
  max-width: 350px;
  margin: 0 auto;
  margin-bottom: 20px;
}

.card-contributions .card-title {
  padding-top: 35px;
}

.card-contributions .card-stats {
  display: flex;
  align-items: center;
  flex-direction: row;
  padding: 11px;
}

.card-contributions .card-footer [class*="col-"]:not(:first-child):before {
  content: "";
  position: absolute;
  left: 0;
  width: 1px;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.1);
}

.card-contributions .bootstrap-switch {
  margin: 0;
}

.card-contributions span {
  padding-left: 15px;
  text-align: left;
  max-width: 125px;
}

.card .info-area {
  padding: 40px 0 40px;
  text-align: center;
  position: relative;
  z-index: 2;
}

.card-lock .card-header img {
  width: 120px;
  height: 120px;
  border-radius: 50%;
  margin-top: -60px;
  box-shadow: 0px 10px 25px 0px rgba(0, 0, 0, 0.3);
}

.card-pricing {
  text-align: center;
}

.card-pricing .card-category {
  padding-top: 1.25em;
}

.card-pricing .card-title {
  margin-top: 30px;
}

.card-pricing .card-icon {
  padding: 10px 0 0px;
}

.card-pricing .card-icon i {
  font-size: 30px;
  line-height: 2.7;
  max-width: 80px;
  color: #888;
  width: 80px;
  height: 80px;
  margin: 0 auto;
  border-radius: 50%;
  box-shadow: 0px 9px 35px -6px rgba(0, 0, 0, 0.3);
  background-color: #FFFFFF;
  position: relative;
}

.card-pricing .card-icon.icon-primary i {
  box-shadow: 0px 9px 30px -6px #f96332;
  color: #f96332;
}

.card-pricing .card-icon.icon-info i {
  box-shadow: 0px 9px 30px -6px #2CA8FF;
  color: #2CA8FF;
}

.card-pricing .card-icon.icon-success i {
  color: #18ce0f;
  box-shadow: 0px 9px 30px -6px rgba(22, 199, 13, 0.85);
}

.card-pricing .card-icon.icon-warning i {
  box-shadow: 0px 9px 30px -6px #FFB236;
  color: #FFB236;
}

.card-pricing .card-icon.icon-danger i {
  box-shadow: 0px 9px 30px -6px #FF3636;
  color: #FF3636;
}

.card-pricing h1 small {
  font-size: 18px;
}

.card-pricing h1 small:first-child {
  position: relative;
  top: -17px;
  font-size: 26px;
}

.card-pricing ul {
  list-style: none;
  padding: 0;
  max-width: 240px;
  margin: 10px auto;
}

.card-pricing ul li {
  color: #888;
  text-align: center;
  padding: 12px 0;
  border-bottom: 1px solid rgba(136, 136, 136, 0.3);
}

.card-pricing ul li:last-child {
  border: 0;
}

.card-pricing ul li b {
  color: #2c2c2c;
}

.card-pricing ul li i {
  top: 3px;
  right: 3px;
  position: relative;
  font-size: 20px;
}

.card-pricing.card-background ul li {
  color: #FFFFFF;
  border-color: rgba(255, 255, 255, 0.3);
}

.card-pricing.card-background ul li b {
  color: #FFFFFF;
}

.card-pricing.card-background [class*="text-"] {
  color: #FFFFFF !important;
}

.card-pricing.card-background .card-body {
  padding-top: 1.25rem;
  padding-bottom: 1.25rem;
}

.card-pricing.card-background:after {
  background-color: rgba(0, 0, 0, 0.65);
}

.card-profile,
.card-testimonial {
  margin-top: 30px;
  text-align: center;
}

.card-profile .card-body .card-title,
.card-testimonial .card-body .card-title {
  margin-top: 0;
}

.card-profile [class*=col-] .card-description,
.card-testimonial [class*=col-] .card-description {
  margin-bottom: 0;
}

.card-profile [class*=col-] .card-description+.card-footer,
.card-testimonial [class*=col-] .card-description+.card-footer {
  margin-top: 8px;
}

.card-profile .card-header-avatar,
.card-testimonial .card-header-avatar {
  max-width: 130px;
  max-height: 130px;
  margin: -60px auto 0;
}

.card-profile .card-header-avatar img,
.card-testimonial .card-header-avatar img {
  border-radius: 50% !important;
}

.card-profile .card-header-avatar+.card-body,
.card-testimonial .card-header-avatar+.card-body {
  margin-top: 15px;
}

.card-plain.card-profile .card-header-avatar,
.card-plain.card-testimonial .card-header-avatar {
  margin-top: 0;
}

.card-profile .card-body .card-avatar,
.card-testimonial .card-body .card-avatar {
  margin: 0 auto 30px;
}

.card-signup .header {
  margin-left: 20px;
  margin-right: 20px;
  padding: 30px 0;
}

.card-signup .text-divider {
  margin-top: 30px;
  margin-bottom: 0px;
  text-align: center;
}

.card-signup .content {
  padding: 0px 30px;
}

.card-signup .form-check {
  margin-top: 20px;
  padding-left: 0;
}

.card-signup .form-check label {
  margin-left: 14px;
  padding-left: 40px;
}

.card-signup .social-line {
  margin-top: 20px;
  text-align: center;
}

.card-signup .social-line .btn.btn-icon,
.card-signup .social-line .btn.btn-icon .btn-icon {
  margin-left: 5px;
  margin-right: 5px;
  box-shadow: 0px 5px 50px 0px rgba(0, 0, 0, 0.2);
}

.card-signup .card-footer {
  margin-bottom: 10px;
  margin-top: 24px;
}

.card-stats-mini.card-background::after {
  background-image: linear-gradient(to right, #434343 0%, black 100%);
  opacity: .94;
}

.card-stats-mini .card-body::after {
  clear: both;
  content: '';
  display: block;
}

.card-stats-mini .card-footer {
  border-top: 1px solid rgba(255, 255, 255, 0.2);
  margin: 0 15px;
}

.card-stats-mini.card-background .card-body {
  min-height: auto;
  padding-top: 15px;
  padding-bottom: 15px;
}

.card-stats-mini .card-title {
  margin-top: 0;
  margin-bottom: 5px;
}

.card-stats-mini .info-area {
  text-align: left;
  width: 40%;
  float: left;
  padding: 15px 0;
}

.card-stats-mini .info-area .icon>i {
  font-size: 2em;
}

.card-stats-mini .chart-area {
  float: left;
  width: 60%;
}

.card-stats-mini .stats {
  text-align: left;
  color: #FFFFFF;
}

.card-contributions hr,
.card-stats hr {
  margin: 5px 15px;
}

.card-stats .statistics {
  position: relative;
  text-align: center;
  padding: 15px 0;
}

.card-stats .statistics .title {
  margin-bottom: 0;
}

.card-stats .statistics .stats-title {
  margin-bottom: 5px;
  color: #9A9A9A;
  font-weight: 400;
}

.card-stats .statistics.statistics-horizontal,
.card-stats .statistics.statistics-horizontal .info-title {
  padding: 0;
}

.card-stats .icon {
  display: inline-block;
  vertical-align: top;
  margin: 0 15px;
}

.card-stats .stats-information {
  display: inline-block;
  margin-bottom: 15px;
}

.card-stats .stats-information .stats-text {
  font-size: 29px;
}

.card-stats .stats-information .stats-details {
  display: block;
  color: #888;
}

.card-stats .dots {
  text-align: right;
}

.card-stats .dots .dot {
  background-color: #2c2c2c;
  height: 3px;
  width: 3px;
  border-radius: 50%;
  display: inline-block;
}

.card-stats [class*="col-"] .statistics::after {
  position: absolute;
  right: 0;
  top: 20px;
  width: 1px;
  height: calc(100% - 40px);
  content: "";
  background: #DDDDDD;
}

.card-stats [class*="col-"]:last-child .statistics::after {
  display: none;
}

.card-subcategories .card-body {
  padding-bottom: 30px;
}

.card-testimonial .card-body {
  padding-top: 25px;
}

.card-testimonial .card-description+.card-title {
  margin-top: 20px;
}

.card-testimonial .card-footer {
  margin-top: 0;
  margin-bottom: 2.5rem;
}

.card-testimonial .card-description+.card-title {
  margin-top: 30px;
}

.card-testimonial .icon i {
  font-size: 32px;
}

.card-testimonial .icon.icon-primary i {
  color: #f96332;
}

.card-testimonial .icon.icon-info i {
  color: #2CA8FF;
}

.card-testimonial .icon.icon-danger i {
  color: #FF3636;
}

.card-testimonial .icon.icon-warning i {
  color: #FFB236;
}

.card-testimonial .icon.icon-success i {
  color: #18ce0f;
}

.card-wizard .card-header {
  padding-bottom: 40px;
}

/* ========================================================================
 * bootstrap-switch - v3.3.2
 * http://www.bootstrap-switch.org
 * ========================================================================
 * Copyright 2012-2013 Mattia Larentis
 * http://www.apache.org/licenses/LICENSE-2.0
 */

.bootstrap-switch {
  display: inline-block;
  direction: ltr;
  cursor: pointer;
  border-radius: 30px;
  border: 0;
  position: relative;
  text-align: left;
  overflow: hidden;
  box-shadow: 0 0px 10px rgba(0, 0, 0, 0.13);
  margin-bottom: 10px;
  line-height: 8px;
  width: 59px !important;
  height: 22px;
  outline: none;
  z-index: 0;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  vertical-align: middle;
  -webkit-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
  transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
  background: rgba(44, 44, 44, 0.2);
}

.bootstrap-switch .bootstrap-switch-container {
  display: inline-flex;
  top: 0;
  height: 22px;
  border-radius: 4px;
  -webkit-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
  width: 100px !important;
}

.bootstrap-switch .bootstrap-switch-handle-on,
.bootstrap-switch .bootstrap-switch-handle-off,
.bootstrap-switch .bootstrap-switch-label {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  cursor: pointer;
  display: inline-block !important;
  height: 100%;
  color: #fff;
  padding: 6px 10px;
  font-size: 11px;
  text-indent: -5px;
  line-height: 15px;
  -webkit-transition: 0.25s ease-out;
  transition: 0.25s ease-out;
}

.bootstrap-switch .bootstrap-switch-handle-on,
.bootstrap-switch .bootstrap-switch-handle-off {
  text-align: center;
  z-index: 1;
  float: left;
  line-height: 11px;
  width: 50% !important;
}

.bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-brown,
.bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-brown {
  color: #fff;
  background: #f96332;
}

.bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-blue,
.bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-blue {
  color: #fff;
  background: #2CA8FF;
}

.bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-green,
.bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-green {
  color: #fff;
  background: #18ce0f;
}

.bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-orange,
.bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-orange {
  background: #FFB236;
  color: #fff;
}

.bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-red,
.bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-red {
  color: #fff;
  background: #FF3636;
}

.bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-default,
.bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-default {
  color: #fff;
}

.bootstrap-switch .bootstrap-switch-label {
  text-align: center;
  z-index: 100;
  color: #333333;
  background: #ffffff;
  width: 22px !important;
  height: 22px !important;
  margin: 0px -11px;
  border-radius: 20px;
  position: absolute;
  float: left;
  top: 0;
  left: 50%;
  padding: 0;
  box-shadow: 0 1px 11px rgba(0, 0, 0, 0.25);
}

.bootstrap-switch.bootstrap-switch-off .bootstrap-switch-label {
  background-color: rgba(23, 23, 23, 0.4);
}

.bootstrap-switch.bootstrap-switch-on:hover .bootstrap-switch-label {
  width: 27px !important;
  margin-left: -16px;
}

.bootstrap-switch.bootstrap-switch-off:hover .bootstrap-switch-label {
  width: 27px !important;
  margin-left: -11px;
}

.bootstrap-switch .bootstrap-switch-handle-on {
  border-bottom-left-radius: 3px;
  border-top-left-radius: 3px;
}

.bootstrap-switch .bootstrap-switch-handle-off {
  text-indent: 6px;
}

.bootstrap-switch input[type='radio'],
.bootstrap-switch input[type='checkbox'] {
  position: absolute !important;
  top: 0;
  left: 0;
  opacity: 0;
  filter: alpha(opacity=0);
  z-index: -1;
}

.bootstrap-switch input[type='radio'].form-control,
.bootstrap-switch input[type='checkbox'].form-control {
  height: auto;
}

.bootstrap-switch.bootstrap-switch-mini .bootstrap-switch-handle-on,
.bootstrap-switch.bootstrap-switch-mini .bootstrap-switch-handle-off,
.bootstrap-switch.bootstrap-switch-mini .bootstrap-switch-label {
  padding: 1px 5px;
  font-size: 12px;
  line-height: 1.5;
}

.bootstrap-switch.bootstrap-switch-small .bootstrap-switch-handle-on,
.bootstrap-switch.bootstrap-switch-small .bootstrap-switch-handle-off,
.bootstrap-switch.bootstrap-switch-small .bootstrap-switch-label {
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
}

.bootstrap-switch.bootstrap-switch-large .bootstrap-switch-handle-on,
.bootstrap-switch.bootstrap-switch-large .bootstrap-switch-handle-off,
.bootstrap-switch.bootstrap-switch-large .bootstrap-switch-label {
  padding: 6px 16px;
  font-size: 18px;
  line-height: 1.33;
}

.bootstrap-switch.bootstrap-switch-disabled,
.bootstrap-switch.bootstrap-switch-readonly,
.bootstrap-switch.bootstrap-switch-indeterminate {
  cursor: default !important;
}

.bootstrap-switch.bootstrap-switch-disabled .bootstrap-switch-handle-on,
.bootstrap-switch.bootstrap-switch-readonly .bootstrap-switch-handle-on,
.bootstrap-switch.bootstrap-switch-indeterminate .bootstrap-switch-handle-on,
.bootstrap-switch.bootstrap-switch-disabled .bootstrap-switch-handle-off,
.bootstrap-switch.bootstrap-switch-readonly .bootstrap-switch-handle-off,
.bootstrap-switch.bootstrap-switch-indeterminate .bootstrap-switch-handle-off,
.bootstrap-switch.bootstrap-switch-disabled .bootstrap-switch-label,
.bootstrap-switch.bootstrap-switch-readonly .bootstrap-switch-label,
.bootstrap-switch.bootstrap-switch-indeterminate .bootstrap-switch-label {
  opacity: 0.5;
  filter: alpha(opacity=50);
  cursor: default !important;
}

.bootstrap-switch.bootstrap-switch-animate .bootstrap-switch-container {
  -webkit-transition: margin-left 0.5s;
  transition: margin-left 0.5s;
}

.bootstrap-switch.bootstrap-switch-inverse .bootstrap-switch-handle-on {
  border-bottom-left-radius: 0;
  border-top-left-radius: 0;
  border-bottom-right-radius: 3px;
  border-top-right-radius: 3px;
}

.bootstrap-switch.bootstrap-switch-inverse .bootstrap-switch-handle-off {
  border-bottom-right-radius: 0;
  border-top-right-radius: 0;
  border-bottom-left-radius: 3px;
  border-top-left-radius: 3px;
}

.bootstrap-switch.bootstrap-switch-on .bootstrap-switch-container {
  margin-left: -2px !important;
}

.bootstrap-switch.bootstrap-switch-off .bootstrap-switch-container {
  margin-left: -39px !important;
}

.bootstrap-switch.bootstrap-switch-on .bootstrap-switch-label:before {
  background-color: #FFFFFF;
}

.bootstrap-switch.bootstrap-switch-on .bootstrap-switch-red~.bootstrap-switch-default {
  background-color: #FF3636;
}

.bootstrap-switch.bootstrap-switch-on .bootstrap-switch-orange~.bootstrap-switch-default {
  background-color: #FFB236;
}

.bootstrap-switch.bootstrap-switch-on .bootstrap-switch-green~.bootstrap-switch-default {
  background-color: #18ce0f;
}

.bootstrap-switch.bootstrap-switch-on .bootstrap-switch-brown~.bootstrap-switch-default {
  background-color: #f96332;
}

.bootstrap-switch.bootstrap-switch-on .bootstrap-switch-blue~.bootstrap-switch-default {
  background-color: #2CA8FF;
}

.bootstrap-switch.bootstrap-switch-off .bootstrap-switch-red,
.bootstrap-switch.bootstrap-switch-off .bootstrap-switch-brown,
.bootstrap-switch.bootstrap-switch-off .bootstrap-switch-blue,
.bootstrap-switch.bootstrap-switch-off .bootstrap-switch-orange,
.bootstrap-switch.bootstrap-switch-off .bootstrap-switch-green {
  background-color: #E3E3E3;
}

.bootstrap-switch-on .bootstrap-switch-handle-off,
.bootstrap-switch-off .bootstrap-switch-handle-on {
  opacity: 0;
  visibility: hidden;
}

/*! nouislider - 12.1.0 - 10/25/2018 */

/* Functional styling;
 * These styles are required for noUiSlider to function.
 * You don't need to change these rules to apply your design.
 */

.noUi-target,
.noUi-target * {
  -webkit-touch-callout: none;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
  -webkit-user-select: none;
  -ms-touch-action: none;
  touch-action: none;
  -ms-user-select: none;
  -moz-user-select: none;
  user-select: none;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

.noUi-target {
  position: relative;
  direction: ltr;
}

.noUi-base,
.noUi-connects {
  width: 100%;
  height: 100%;
  position: relative;
  z-index: 1;
}

/* Wrapper for all connect elements.
 */

.noUi-connects {
  overflow: hidden;
  z-index: 0;
}

.noUi-connect,
.noUi-origin {
  will-change: transform;
  position: absolute;
  z-index: 1;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  -ms-transform-origin: 0 0;
  -webkit-transform-origin: 0 0;
  transform-origin: 0 0;
}

/* Offset direction
 */

html:not([dir="rtl"]) .noUi-horizontal .noUi-origin {
  left: auto;
  right: 0;
}

/* Give origins 0 height/width so they don't interfere with clicking the
 * connect elements.
 */

.noUi-vertical .noUi-origin {
  width: 0;
}

.noUi-horizontal .noUi-origin {
  height: 0;
}

.noUi-handle {
  position: absolute;
}

.noUi-state-tap .noUi-connect,
.noUi-state-tap .noUi-origin {
  -webkit-transition: transform 0.3s;
  transition: transform 0.3s;
}

.noUi-state-drag * {
  cursor: inherit !important;
}

/* Slider size and handle placement;
 */

.noUi-horizontal {
  height: 1px;
}

.noUi-horizontal .noUi-handle {
  border-radius: 50%;
  background-color: #FFFFFF;
  box-shadow: 0 1px 13px 0 rgba(0, 0, 0, 0.2);
  height: 15px;
  width: 15px;
  cursor: pointer;
  margin-top: -7px;
  outline: none;
}

.noUi-vertical {
  width: 18px;
}

.noUi-vertical .noUi-handle {
  width: 28px;
  height: 34px;
  left: -6px;
  top: -17px;
}

html:not([dir="rtl"]) .noUi-horizontal .noUi-handle {
  right: -15px;
  left: auto;
}

/* Styling;
 * Giving the connect element a border radius causes issues with using transform: scale
 */

.noUi-target {
  background-color: rgba(182, 182, 182, 0.3);
  border-radius: 3px;
}

.noUi-connects {
  border-radius: 3px;
}

.noUi-connect {
  background: #888;
  border-radius: 3px;
  -webkit-transition: background 450ms;
  transition: background 450ms;
}

/* Handles and cursors;
 */

.noUi-draggable {
  cursor: ew-resize;
}

.noUi-vertical .noUi-draggable {
  cursor: ns-resize;
}

.noUi-handle {
  border-radius: 3px;
  background: #FFF;
  cursor: default;
  box-shadow: inset 0 0 1px #FFF, inset 0 1px 7px #EBEBEB, 0 3px 6px -3px #BBB;
  -webkit-transition: 300ms ease 0s;
  -moz-transition: 300ms ease 0s;
  -ms-transition: 300ms ease 0s;
  -o-transform: 300ms ease 0s;
  transition: 300ms ease 0s;
}

.noUi-active {
  -webkit-transform: scale3d(1.5, 1.5, 1);
  -moz-transform: scale3d(1.5, 1.5, 1);
  -ms-transform: scale3d(1.5, 1.5, 1);
  -o-transform: scale3d(1.5, 1.5, 1);
  transform: scale3d(1.5, 1.5, 1);
}

/* Handle stripes;
 */

.noUi-handle:before,
.noUi-handle:after {
  display: none;
}

.noUi-handle:after {
  left: 17px;
}

.noUi-vertical .noUi-handle:before,
.noUi-vertical .noUi-handle:after {
  width: 14px;
  height: 1px;
  left: 6px;
  top: 14px;
}

.noUi-vertical .noUi-handle:after {
  top: 17px;
}

/* Disabled state;
 */

[disabled] .noUi-connect {
  background: #B8B8B8;
}

[disabled].noUi-target,
[disabled].noUi-handle,
[disabled] .noUi-handle {
  cursor: not-allowed;
}

/* Base;
 *
 */

.noUi-pips,
.noUi-pips * {
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

.noUi-pips {
  position: absolute;
  color: #999;
}

/* Values;
 *
 */

.noUi-value {
  position: absolute;
  white-space: nowrap;
  text-align: center;
}

.noUi-value-sub {
  color: #ccc;
  font-size: 10px;
}

/* Markings;
 *
 */

.noUi-marker {
  position: absolute;
  background: #CCC;
}

.noUi-marker-sub {
  background: #AAA;
}

.noUi-marker-large {
  background: #AAA;
}

/* Horizontal layout;
 *
 */

.noUi-pips-horizontal {
  padding: 10px 0;
  height: 80px;
  top: 100%;
  left: 0;
  width: 100%;
}

.noUi-value-horizontal {
  -webkit-transform: translate(-50%, 50%);
  transform: translate(-50%, 50%);
}

.noUi-rtl .noUi-value-horizontal {
  -webkit-transform: translate(50%, 50%);
  transform: translate(50%, 50%);
}

.noUi-marker-horizontal.noUi-marker {
  margin-left: -1px;
  width: 2px;
  height: 5px;
}

.noUi-marker-horizontal.noUi-marker-sub {
  height: 10px;
}

.noUi-marker-horizontal.noUi-marker-large {
  height: 15px;
}

/* Vertical layout;
 *
 */

.noUi-pips-vertical {
  padding: 0 10px;
  height: 100%;
  top: 0;
  left: 100%;
}

.noUi-value-vertical {
  -webkit-transform: translate(0, -50%);
  transform: translate(0, -50%, 0);
  padding-left: 25px;
}

.noUi-rtl .noUi-value-vertical {
  -webkit-transform: translate(0, 50%);
  transform: translate(0, 50%);
}

.noUi-marker-vertical.noUi-marker {
  width: 5px;
  height: 2px;
  margin-top: -1px;
}

.noUi-marker-vertical.noUi-marker-sub {
  width: 10px;
}

.noUi-marker-vertical.noUi-marker-large {
  width: 15px;
}

.noUi-tooltip {
  display: block;
  position: absolute;
  border: 1px solid #D9D9D9;
  border-radius: 3px;
  background: #fff;
  color: #000;
  padding: 5px;
  text-align: center;
  white-space: nowrap;
}

.noUi-horizontal .noUi-tooltip {
  -webkit-transform: translate(-50%, 0);
  transform: translate(-50%, 0);
  left: 50%;
  bottom: 120%;
}

.noUi-vertical .noUi-tooltip {
  -webkit-transform: translate(0, -50%);
  transform: translate(0, -50%);
  top: 50%;
  right: 120%;
}

.slider.slider-neutral .noUi-connect,
.slider.slider-neutral.noUi-connect {
  background-color: #FFFFFF;
}

.slider.slider-neutral.noUi-target {
  background-color: rgba(255, 255, 255, 0.3);
}

.slider.slider-neutral .noUi-handle {
  background-color: #FFFFFF;
}

.slider.slider-primary .noUi-connect,
.slider.slider-primary.noUi-connect {
  background-color: #f96332;
}

.slider.slider-primary.noUi-target {
  background-color: rgba(249, 99, 50, 0.3);
}

.slider.slider-primary .noUi-handle {
  background-color: #f96332;
}

.slider.slider-info .noUi-connect,
.slider.slider-info.noUi-connect {
  background-color: #2CA8FF;
}

.slider.slider-info.noUi-target {
  background-color: rgba(44, 168, 255, 0.3);
}

.slider.slider-info .noUi-handle {
  background-color: #2CA8FF;
}

.slider.slider-success .noUi-connect,
.slider.slider-success.noUi-connect {
  background-color: #18ce0f;
}

.slider.slider-success.noUi-target {
  background-color: rgba(24, 206, 15, 0.3);
}

.slider.slider-success .noUi-handle {
  background-color: #18ce0f;
}

.slider.slider-warning .noUi-connect,
.slider.slider-warning.noUi-connect {
  background-color: #FFB236;
}

.slider.slider-warning.noUi-target {
  background-color: rgba(255, 178, 54, 0.3);
}

.slider.slider-warning .noUi-handle {
  background-color: #FFB236;
}

.slider.slider-danger .noUi-connect,
.slider.slider-danger.noUi-connect {
  background-color: #FF3636;
}

.slider.slider-danger.noUi-target {
  background-color: rgba(255, 54, 54, 0.3);
}

.slider.slider-danger .noUi-handle {
  background-color: #FF3636;
}

/*!
Animate.css - http://daneden.me/animate
Licensed under the MIT license - http://opensource.org/licenses/MIT

Copyright (c) 2015 Daniel Eden
*/

.animated {
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}

.animated.infinite {
  -webkit-animation-iteration-count: infinite;
  animation-iteration-count: infinite;
}

.animated.hinge {
  -webkit-animation-duration: 2s;
  animation-duration: 2s;
}

.animated.bounceIn,
.animated.bounceOut {
  -webkit-animation-duration: .75s;
  animation-duration: .75s;
}

.animated.flipOutX,
.animated.flipOutY {
  -webkit-animation-duration: .75s;
  animation-duration: .75s;
}

@-webkit-keyframes shake {
  from,
  to {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
  10%,
  30%,
  50%,
  70%,
  90% {
    -webkit-transform: translate3d(-10px, 0, 0);
    transform: translate3d(-10px, 0, 0);
  }
  20%,
  40%,
  60%,
  80% {
    -webkit-transform: translate3d(10px, 0, 0);
    transform: translate3d(10px, 0, 0);
  }
}

@keyframes shake {
  from,
  to {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
  10%,
  30%,
  50%,
  70%,
  90% {
    -webkit-transform: translate3d(-10px, 0, 0);
    transform: translate3d(-10px, 0, 0);
  }
  20%,
  40%,
  60%,
  80% {
    -webkit-transform: translate3d(10px, 0, 0);
    transform: translate3d(10px, 0, 0);
  }
}

.shake {
  -webkit-animation-name: shake;
  animation-name: shake;
}

@-webkit-keyframes fadeInDown {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
  }
  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

@keyframes fadeInDown {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
  }
  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

.fadeInDown {
  -webkit-animation-name: fadeInDown;
  animation-name: fadeInDown;
}

@-webkit-keyframes fadeOut {
  from {
    opacity: 1;
  }
  to {
    opacity: 0;
  }
}

@keyframes fadeOut {
  from {
    opacity: 1;
  }
  to {
    opacity: 0;
  }
}

.fadeOut {
  -webkit-animation-name: fadeOut;
  animation-name: fadeOut;
}

@-webkit-keyframes fadeOutDown {
  from {
    opacity: 1;
  }
  to {
    opacity: 0;
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0);
  }
}

@keyframes fadeOutDown {
  from {
    opacity: 1;
  }
  to {
    opacity: 0;
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0);
  }
}

.fadeOutDown {
  -webkit-animation-name: fadeOutDown;
  animation-name: fadeOutDown;
}

@-webkit-keyframes fadeOutUp {
  from {
    opacity: 1;
  }
  to {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
  }
}

@keyframes fadeOutUp {
  from {
    opacity: 1;
  }
  to {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
  }
}

.fadeOutUp {
  -webkit-animation-name: fadeOutUp;
  animation-name: fadeOutUp;
}

/*
 * Container style
 */

.ps {
  overflow: hidden !important;
  overflow-anchor: none;
  -ms-overflow-style: none;
  touch-action: auto;
  -ms-touch-action: auto;
}

/*
 * Scrollbar rail styles
 */

.ps__rail-x {
  display: none;
  opacity: 0;
  transition: background-color .2s linear, opacity .2s linear;
  -webkit-transition: background-color .2s linear, opacity .2s linear;
  height: 15px;
  /* there must be 'bottom' or 'top' for ps__rail-x */
  bottom: 0px;
  /* please don't change 'position' */
  position: absolute;
}

.ps__rail-y {
  display: none;
  opacity: 0;
  transition: background-color .2s linear, opacity .2s linear;
  -webkit-transition: background-color .2s linear, opacity .2s linear;
  width: 15px;
  /* there must be 'right' or 'left' for ps__rail-y */
  right: 0;
  /* please don't change 'position' */
  position: absolute;
}

.ps--active-x>.ps__rail-x,
.ps--active-y>.ps__rail-y {
  display: block;
  background-color: transparent;
}

.ps:hover>.ps__rail-x,
.ps:hover>.ps__rail-y,
.ps--focus>.ps__rail-x,
.ps--focus>.ps__rail-y,
.ps--scrolling-x>.ps__rail-x,
.ps--scrolling-y>.ps__rail-y {
  opacity: 0.6;
}

.ps .ps__rail-x:hover,
.ps .ps__rail-y:hover,
.ps .ps__rail-x:focus,
.ps .ps__rail-y:focus,
.ps .ps__rail-x.ps--clicking,
.ps .ps__rail-y.ps--clicking {
  background-color: #eee;
  opacity: 0.9;
}

/*
 * Scrollbar thumb styles
 */

.ps__thumb-x {
  background-color: #aaa;
  border-radius: 6px;
  transition: background-color .2s linear, height .2s ease-in-out;
  -webkit-transition: background-color .2s linear, height .2s ease-in-out;
  height: 6px;
  /* there must be 'bottom' for ps__thumb-x */
  bottom: 2px;
  /* please don't change 'position' */
  position: absolute;
}

.ps__thumb-y {
  background-color: #aaa;
  border-radius: 6px;
  transition: background-color .2s linear, width .2s ease-in-out;
  -webkit-transition: background-color .2s linear, width .2s ease-in-out;
  width: 6px;
  /* there must be 'right' for ps__thumb-y */
  right: 2px;
  /* please don't change 'position' */
  position: absolute;
}

.ps__rail-x:hover>.ps__thumb-x,
.ps__rail-x:focus>.ps__thumb-x,
.ps__rail-x.ps--clicking .ps__thumb-x {
  background-color: #999;
  height: 11px;
}

.ps__rail-y:hover>.ps__thumb-y,
.ps__rail-y:focus>.ps__thumb-y,
.ps__rail-y.ps--clicking .ps__thumb-y {
  background-color: #999;
  width: 11px;
}

/* MS supports */

@supports (-ms-overflow-style: none) {
  .ps {
    overflow: auto !important;
  }
}

@media screen and (-ms-high-contrast: active),
(-ms-high-contrast: none) {
  .ps {
    overflow: auto !important;
  }
}

.card-wizard {
  min-height: 410px;
  box-shadow: 0 1px 15px 1px rgba(39, 39, 39, 0.1);
  opacity: 0;
  -webkit-transition: all 300ms linear;
  -moz-transition: all 300ms linear;
  -o-transition: all 300ms linear;
  -ms-transition: all 300ms linear;
  transition: all 300ms linear;
}

.card-wizard.active {
  opacity: 1;
}

.card-wizard .nav-pills .nav-item .nav-link {
  padding-top: 8px;
  padding-bottom: 8px;
  margin-right: 0 !important;
}

.card-wizard .nav-pills .nav-item .nav-link,
.card-wizard .nav-pills .nav-item .nav-link.active,
.card-wizard .nav-pills .nav-item .nav-link:hover,
.card-wizard .nav-pills .nav-item .nav-link:focus,
.card-wizard .nav-pills .nav-item .nav-link.active:focus,
.card-wizard .nav-pills .nav-item .nav-link.active:hover {
  background-color: transparent;
  box-shadow: none;
}

.card-wizard .picture-container {
  position: relative;
  cursor: pointer;
  text-align: center;
}

.card-wizard .wizard-navigation {
  position: relative;
}

.card-wizard .wizard-navigation .nav-link {
  display: flex;
  align-items: center;
  -ms-flex-pack: center;
  justify-content: center;
}

.card-wizard .wizard-navigation .nav-link i,
.card-wizard .moving-tab i {
  display: inline-block;
  font-size: 19px;
  line-height: initial;
  margin-right: 6px;
  padding: 0;
  vertical-align: bottom;
}

.card-wizard .picture {
  width: 106px;
  height: 106px;
  background-color: #999999;
  border: 1px solid #E3E3E3;
  color: #FFFFFF;
  border-radius: 50%;
  margin: 5px auto;
  overflow: hidden;
  transition: all 0.2s;
  -webkit-transition: all 0.2s;
}

.card-wizard .picture:hover {
  border-color: #2ca8ff;
}

.card-wizard .moving-tab {
  position: absolute;
  text-align: center;
  padding: 12px;
  font-size: 12px;
  text-transform: uppercase;
  -webkit-font-smoothing: subpixel-antialiased;
  top: -4px;
  left: 0px;
  border-radius: 30px;
  background-color: #FFFFFF;
  box-shadow: 0 1px 15px 1px rgba(39, 39, 39, 0.1);
  color: #f96332;
  cursor: pointer;
  font-weight: 500;
}

.card-wizard[data-color="primary"] .moving-tab {
  color: #f96332;
}

.card-wizard[data-color="primary"] .picture:hover {
  border-color: #f96332;
}

.card-wizard[data-color="primary"] .choice:hover .icon,
.card-wizard[data-color="primary"] .choice.active .icon {
  border-color: #f96332;
  color: #f96332;
}

.card-wizard[data-color="primary"] .checkbox input[type=checkbox]:checked+.checkbox-material .check {
  background-color: #f96332;
}

.card-wizard[data-color="primary"] .radio input[type=radio]:checked~.check {
  background-color: #f96332;
}

.card-wizard[data-color="primary"] .radio input[type=radio]:checked~.circle {
  border-color: #f96332;
}

.card-wizard[data-color="white"] .moving-tab {
  color: #FFFFFF;
}

.card-wizard[data-color="white"] .picture:hover {
  border-color: #FFFFFF;
}

.card-wizard[data-color="white"] .choice:hover .icon,
.card-wizard[data-color="white"] .choice.active .icon {
  border-color: #FFFFFF;
  color: #FFFFFF;
}

.card-wizard[data-color="white"] .checkbox input[type=checkbox]:checked+.checkbox-material .check {
  background-color: #FFFFFF;
}

.card-wizard[data-color="white"] .radio input[type=radio]:checked~.check {
  background-color: #FFFFFF;
}

.card-wizard[data-color="white"] .radio input[type=radio]:checked~.circle {
  border-color: #FFFFFF;
}

.card-wizard[data-color="green"] .moving-tab {
  color: #18ce0f;
}

.card-wizard[data-color="green"] .picture:hover {
  border-color: #18ce0f;
}

.card-wizard[data-color="green"] .choice:hover .icon,
.card-wizard[data-color="green"] .choice.active .icon {
  border-color: #18ce0f;
  color: #18ce0f;
}

.card-wizard[data-color="green"] .checkbox input[type=checkbox]:checked+.checkbox-material .check {
  background-color: #18ce0f;
}

.card-wizard[data-color="green"] .radio input[type=radio]:checked~.check {
  background-color: #18ce0f;
}

.card-wizard[data-color="green"] .radio input[type=radio]:checked~.circle {
  border-color: #18ce0f;
}

.card-wizard[data-color="blue"] .moving-tab {
  color: #2CA8FF;
}

.card-wizard[data-color="blue"] .picture:hover {
  border-color: #2CA8FF;
}

.card-wizard[data-color="blue"] .choice:hover .icon,
.card-wizard[data-color="blue"] .choice.active .icon {
  border-color: #2CA8FF;
  color: #2CA8FF;
}

.card-wizard[data-color="blue"] .checkbox input[type=checkbox]:checked+.checkbox-material .check {
  background-color: #2CA8FF;
}

.card-wizard[data-color="blue"] .radio input[type=radio]:checked~.check {
  background-color: #2CA8FF;
}

.card-wizard[data-color="blue"] .radio input[type=radio]:checked~.circle {
  border-color: #2CA8FF;
}

.card-wizard[data-color="orange"] .moving-tab {
  color: #FFB236;
}

.card-wizard[data-color="orange"] .picture:hover {
  border-color: #FFB236;
}

.card-wizard[data-color="orange"] .choice:hover .icon,
.card-wizard[data-color="orange"] .choice.active .icon {
  border-color: #FFB236;
  color: #FFB236;
}

.card-wizard[data-color="orange"] .checkbox input[type=checkbox]:checked+.checkbox-material .check {
  background-color: #FFB236;
}

.card-wizard[data-color="orange"] .radio input[type=radio]:checked~.check {
  background-color: #FFB236;
}

.card-wizard[data-color="orange"] .radio input[type=radio]:checked~.circle {
  border-color: #FFB236;
}

.card-wizard[data-color="red"] .moving-tab {
  color: #FF3636;
}

.card-wizard[data-color="red"] .picture:hover {
  border-color: #FF3636;
}

.card-wizard[data-color="red"] .choice:hover .icon,
.card-wizard[data-color="red"] .choice.active .icon {
  border-color: #FF3636;
  color: #FF3636;
}

.card-wizard[data-color="red"] .checkbox input[type=checkbox]:checked+.checkbox-material .check {
  background-color: #FF3636;
}

.card-wizard[data-color="red"] .radio input[type=radio]:checked~.check {
  background-color: #FF3636;
}

.card-wizard[data-color="red"] .radio input[type=radio]:checked~.circle {
  border-color: #FF3636;
}

.card-wizard .picture input[type="file"] {
  cursor: pointer;
  display: block;
  height: 100%;
  left: 0;
  opacity: 0 !important;
  position: absolute;
  top: 0;
  width: 100%;
}

.card-wizard .picture-src {
  width: 100%;
}

.card-wizard .tab-content {
  min-height: 355px;
  padding: 20px 0;
}

.card-wizard .wizard-footer {
  padding: 0 15px;
}

.card-wizard .wizard-footer .checkbox {
  margin-top: 16px;
}

.card-wizard .disabled {
  display: none;
}

.card-wizard .wizard-header {
  text-align: center;
  padding: 25px 0 35px;
}

.card-wizard .wizard-header h5 {
  margin: 5px 0 0;
}

.card-wizard .nav-pills>li {
  text-align: center;
}

.card-wizard .btn {
  text-transform: uppercase;
}

.card-wizard .info-text {
  text-align: center;
  font-weight: 300;
  margin: 10px 0 30px;
}

.card-wizard .choice {
  text-align: center;
  cursor: pointer;
  margin-top: 20px;
}

.card-wizard .choice[disabled] {
  pointer-events: none;
  cursor: not-allowed;
  opacity: .5;
}

.card-wizard .choice .icon {
  text-align: center;
  vertical-align: middle;
  height: 116px;
  width: 116px;
  border-radius: 50%;
  color: #888;
  margin: 0 auto 20px;
  border: 1px solid #E3E3E3;
  transition: all 0.2s;
  -webkit-transition: all 0.2s;
}

.card-wizard .choice i {
  font-size: 30px;
  line-height: 116px;
  position: absolute;
  left: 0;
  right: 0;
}

.card-wizard .choice:hover .icon,
.card-wizard .choice.active .icon {
  border-color: #2ca8ff;
}

.card-wizard .choice input[type="radio"],
.card-wizard .choice input[type="checkbox"] {
  position: absolute;
  left: -10000px;
  z-index: -1;
}

.card-wizard .btn-finish {
  display: none;
}

.card-wizard .card-title+.description {
  font-size: 17px;
  margin-bottom: 32px;
}

.card-wizard .wizard-title {
  margin: 0;
}

.card-wizard .nav-pills {
  background-color: #e95e38;
}

.card-wizard .nav-pills>li+li {
  margin-left: 0;
}

.card-wizard .nav-pills>li>a {
  border: 0 !important;
  border-radius: 0;
  line-height: 18px;
  text-transform: uppercase;
  font-size: 12px;
  font-weight: 500;
  min-width: 100px;
  text-align: center;
  color: #555555;
}

.card-wizard .nav-pills>li.active>a,
.card-wizard .nav-pills>li.active>a:hover,
.card-wizard .nav-pills>li.active>a:focus,
.card-wizard .nav-pills>li>a:hover,
.card-wizard .nav-pills>li>a:focus {
  background-color: inherit;
  box-shadow: none;
}

.card-wizard .nav-pills>li i {
  display: block;
  font-size: 30px;
  padding: 15px 0;
}

.sr-only,
.bootstrap-datetimepicker-widget .btn[data-action="incrementHours"]::after,
.bootstrap-datetimepicker-widget .btn[data-action="incrementMinutes"]::after,
.bootstrap-datetimepicker-widget .btn[data-action="decrementHours"]::after,
.bootstrap-datetimepicker-widget .btn[data-action="decrementMinutes"]::after,
.bootstrap-datetimepicker-widget .btn[data-action="showHours"]::after,
.bootstrap-datetimepicker-widget .btn[data-action="showMinutes"]::after,
.bootstrap-datetimepicker-widget .btn[data-action="togglePeriod"]::after,
.bootstrap-datetimepicker-widget .btn[data-action="clear"]::after,
.bootstrap-datetimepicker-widget .btn[data-action="today"]::after,
.bootstrap-datetimepicker-widget .picker-switch::after,
.bootstrap-datetimepicker-widget table th.prev::after,
.bootstrap-datetimepicker-widget table th.next::after {
  position: absolute;
  width: 1px;
  height: 1px;
  margin: -1px;
  padding: 0;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}

.bootstrap-datetimepicker-widget {
  list-style: none;
}

.bootstrap-datetimepicker-widget a .btn:hover {
  background-color: transparent;
}

.bootstrap-datetimepicker-widget.dropdown-menu {
  padding: 8px 6px;
  width: 254px;
  max-width: 254px;
}

.bootstrap-datetimepicker-widget.dropdown-menu .now-ui-icons {
  opacity: 1;
}

@media (min-width: 768px) {
  .bootstrap-datetimepicker-widget.dropdown-menu.timepicker-sbs {
    width: 38em;
  }
}

@media (min-width: 992px) {
  .bootstrap-datetimepicker-widget.dropdown-menu.timepicker-sbs {
    width: 38em;
  }
}

@media (min-width: 1200px) {
  .bootstrap-datetimepicker-widget.dropdown-menu.timepicker-sbs {
    width: 38em;
  }
}

.bootstrap-datetimepicker-widget.dropdown-menu.bottom:before {
  display: inline-block;
  position: absolute;
  width: 0;
  height: 0;
  vertical-align: middle;
  content: "";
  top: -5px;
  left: 10px;
  right: auto;
  color: #FFFFFF;
  border-bottom: .4em solid;
  border-right: .4em solid transparent;
  border-left: .4em solid transparent;
}

.bootstrap-datetimepicker-widget.dropdown-menu.top:before {
  display: none;
}

.bootstrap-datetimepicker-widget.dropdown-menu.top:after {
  display: inline-block;
  position: absolute;
  width: 0;
  height: 0;
  vertical-align: middle;
  content: "";
  top: auto;
  bottom: -6px;
  right: auto;
  left: 10px;
  color: #FFFFFF;
  border-top: .4em solid;
  border-right: .4em solid transparent;
  border-left: .4em solid transparent;
}

.bootstrap-datetimepicker-widget.dropdown-menu.pull-right:before {
  left: auto;
  right: 6px;
}

.bootstrap-datetimepicker-widget.dropdown-menu.pull-right:after {
  left: auto;
  right: 7px;
}

.bootstrap-datetimepicker-widget .list-unstyled {
  margin: 0;
}

.bootstrap-datetimepicker-widget a[data-action] {
  padding: 0;
  border-width: 0;
  color: #66615B;
  background-color: transparent;
}

.bootstrap-datetimepicker-widget a[data-action="togglePicker"],
.bootstrap-datetimepicker-widget a[data-action="togglePicker"]:hover {
  color: #f96332;
}

.bootstrap-datetimepicker-widget a[data-action]:hover {
  background-color: transparent;
}

.bootstrap-datetimepicker-widget a[data-action]:active {
  box-shadow: none;
}

.bootstrap-datetimepicker-widget .timepicker-hour,
.bootstrap-datetimepicker-widget .timepicker-minute,
.bootstrap-datetimepicker-widget .timepicker-second {
  width: 40px;
  height: 40px;
  line-height: 40px;
  font-weight: 300;
  font-size: 1.5em;
  margin: 3px;
  border-radius: 50%;
}

.bootstrap-datetimepicker-widget button[data-action] {
  width: 38px;
  background-color: #f96332;
  height: 38px;
  padding: 0;
  box-shadow: 0px 1px 10px 0px rgba(0, 0, 0, 0.2);
}

.bootstrap-datetimepicker-widget .btn {
  margin: 0 !important;
}

.bootstrap-datetimepicker-widget .btn[data-action="incrementHours"]::after {
  content: "Increment Hours";
}

.bootstrap-datetimepicker-widget .btn[data-action="incrementMinutes"]::after {
  content: "Increment Minutes";
}

.bootstrap-datetimepicker-widget .btn[data-action="decrementHours"]::after {
  content: "Decrement Hours";
}

.bootstrap-datetimepicker-widget .btn[data-action="decrementMinutes"]::after {
  content: "Decrement Minutes";
}

.bootstrap-datetimepicker-widget .btn[data-action="showHours"]::after {
  content: "Show Hours";
}

.bootstrap-datetimepicker-widget .btn[data-action="showMinutes"]::after {
  content: "Show Minutes";
}

.bootstrap-datetimepicker-widget .btn[data-action="togglePeriod"]::after {
  content: "Toggle AM/PM";
}

.bootstrap-datetimepicker-widget .btn[data-action="clear"]::after {
  content: "Clear the picker";
}

.bootstrap-datetimepicker-widget .btn[data-action="today"]::after {
  content: "Set the date to today";
}

.bootstrap-datetimepicker-widget .picker-switch {
  text-align: center;
  border-radius: 3px;
  color: #f96332;
}

.bootstrap-datetimepicker-widget .picker-switch::after {
  content: "Toggle Date and Time Screens";
}

.bootstrap-datetimepicker-widget .picker-switch td {
  padding: 0;
  margin: 0;
  height: auto;
  width: auto;
  line-height: inherit;
}

.bootstrap-datetimepicker-widget .picker-switch td span {
  line-height: 2.5;
  height: 2.5em;
  width: 100%;
  border-radius: 3px;
  margin: 2px 0px !important;
}

.bootstrap-datetimepicker-widget table {
  width: 100%;
  margin: 0;
  text-align: center;
}

.bootstrap-datetimepicker-widget table td>div,
.bootstrap-datetimepicker-widget table th>div {
  text-align: center;
}

.bootstrap-datetimepicker-widget table th {
  height: 20px;
  line-height: 20px;
  width: 20px;
  font-weight: 300;
}

.bootstrap-datetimepicker-widget table th.picker-switch {
  width: 145px;
}

.bootstrap-datetimepicker-widget table th.disabled,
.bootstrap-datetimepicker-widget table th.disabled:hover {
  background: none;
  color: #cfcfca;
  cursor: not-allowed;
}

.bootstrap-datetimepicker-widget table th.prev span,
.bootstrap-datetimepicker-widget table th.next span {
  border-radius: 4px;
  height: 27px;
  width: 27px;
  line-height: 28px;
  font-size: 12px;
  border-radius: 50%;
  text-align: center;
  color: #f96332;
}

.bootstrap-datetimepicker-widget table th.prev::after {
  content: "Previous Month";
}

.bootstrap-datetimepicker-widget table th.next::after {
  content: "Next Month";
}

.bootstrap-datetimepicker-widget table th.dow {
  text-align: center;
  color: #f96332;
  padding-bottom: 5px;
  padding-top: 10px;
}

.bootstrap-datetimepicker-widget table thead tr:first-child th {
  cursor: pointer;
}

.bootstrap-datetimepicker-widget table thead tr:first-child th:hover span,
.bootstrap-datetimepicker-widget table thead tr:first-child th.picker-switch:hover {
  background: #eee;
}

.bootstrap-datetimepicker-widget table td.cw>div {
  font-size: .8em;
  height: 20px;
  line-height: 20px;
  color: #cfcfca;
}

.bootstrap-datetimepicker-widget table td.day>div,
.bootstrap-datetimepicker-widget table td.minute>div,
.bootstrap-datetimepicker-widget table td.hour>div {
  height: 30px;
  line-height: 2.2;
  width: 30px;
  text-align: center;
  padding: 0px;
  border-radius: 50%;
  margin: 0 auto;
  z-index: -1;
  position: relative;
  font-weight: 300;
  font-size: 14px;
  border: none;
  cursor: pointer;
  -webkit-transition: all 300ms ease 0s;
  -moz-transition: all 300ms ease 0s;
  -o-transition: all 300ms ease 0s;
  -ms-transition: all 300ms ease 0s;
  transition: all 300ms ease 0s;
}

.bootstrap-datetimepicker-widget table td.day:hover>div,
.bootstrap-datetimepicker-widget table td.hour:hover>div,
.bootstrap-datetimepicker-widget table td.minute:hover>div,
.bootstrap-datetimepicker-widget table td.second:hover>div {
  background: #eee;
  cursor: pointer;
}

.bootstrap-datetimepicker-widget table td.old>div,
.bootstrap-datetimepicker-widget table td.new>div {
  color: #888;
}

.bootstrap-datetimepicker-widget table td.today>div:before {
  content: '';
  display: inline-block;
  border: 0 0 7px 7px solid transparent;
  border-bottom-color: #68B3C8;
  border-top-color: rgba(0, 0, 0, 0.2);
  position: absolute;
  bottom: 4px;
  right: 4px;
}

.bootstrap-datetimepicker-widget table td.active>div,
.bootstrap-datetimepicker-widget table td.active:hover>div {
  background-color: #f96332;
  color: #FFFFFF;
  box-shadow: 0px 1px 10px 0px rgba(0, 0, 0, 0.2);
}

.bootstrap-datetimepicker-widget table td.active.today:before>div {
  border-bottom-color: #FFFFFF;
}

.bootstrap-datetimepicker-widget table td.disabled>div,
.bootstrap-datetimepicker-widget table td.disabled:hover>div {
  background: none;
  color: #cfcfca;
  cursor: not-allowed;
}

.bootstrap-datetimepicker-widget table td span {
  display: inline-block;
  width: 40px;
  height: 40px;
  line-height: 40px;
  margin: 0 3px;
  cursor: pointer;
  border-radius: 50%;
  text-align: center;
}

.bootstrap-datetimepicker-widget table td span:hover {
  background: #eee;
}

.bootstrap-datetimepicker-widget table td span.active {
  background-color: #f96332;
  color: #FFFFFF;
}

.bootstrap-datetimepicker-widget table td span.old {
  color: #cfcfca;
}

.bootstrap-datetimepicker-widget table td span.disabled,
.bootstrap-datetimepicker-widget table td span.disabled:hover {
  background: none;
  color: #cfcfca;
  cursor: not-allowed;
}

.bootstrap-datetimepicker-widget .timepicker-picker span,
.bootstrap-datetimepicker-widget .timepicker-hours span,
.bootstrap-datetimepicker-widget .timepicker-minutes span {
  border-radius: 50% !important;
}

.bootstrap-datetimepicker-widget.usetwentyfour td.hour {
  height: 27px;
  line-height: 27px;
}

.input-group.date .input-group-addon {
  cursor: pointer;
}

.table-condensed>tbody>tr>td,
.table-condensed>tbody>tr>th,
.table-condensed>tfoot>tr>td,
.table-condensed>tfoot>tr>th,
.table-condensed>thead>tr>td,
.table-condensed>thead>tr>th {
  padding: 1px;
  text-align: center;
  z-index: 1;
  cursor: pointer;
}

input.datetimepicker[data-color]+.bootstrap-datetimepicker-widget .picker-switch,
input.datetimepicker[data-color]+.bootstrap-datetimepicker-widget table th.prev span,
input.datetimepicker[data-color]+.bootstrap-datetimepicker-widget table th.next span,
input.datetimepicker[data-color]+.bootstrap-datetimepicker-widget table td.day>div,
input.datetimepicker[data-color]+.bootstrap-datetimepicker-widget a[data-action="togglePicker"],
input.datetimepicker[data-color]+.bootstrap-datetimepicker-widget a[data-action="togglePicker"]:hover,
input.datetimepicker[data-color]+.bootstrap-datetimepicker-widget span,
input.datetimepicker[data-color]+.bootstrap-datetimepicker-widget .timepicker-hours span,
input.datetimepicker[data-color]+.bootstrap-datetimepicker-widget .timepicker-minutes span,
input.datetimepicker[data-color]+.bootstrap-datetimepicker-widget .separator,
input.datetimepicker[data-color]+.bootstrap-datetimepicker-widget table td.minute>div,
input.datetimepicker[data-color]+.bootstrap-datetimepicker-widget table td.hour>div {
  color: #FFFFFF;
}

input.datetimepicker[data-color]+.bootstrap-datetimepicker-widget table th.dow {
  color: rgba(255, 255, 255, 0.8);
}

input.datetimepicker[data-color]+.bootstrap-datetimepicker-widget table td.old>div,
input.datetimepicker[data-color]+.bootstrap-datetimepicker-widget table td.new>div {
  color: rgba(255, 255, 255, 0.4);
}

input.datetimepicker[data-color]+.bootstrap-datetimepicker-widget button[data-action] {
  background-color: #FFFFFF;
}

input.datetimepicker[data-color]+.bootstrap-datetimepicker-widget table td.active>div,
input.datetimepicker[data-color]+.bootstrap-datetimepicker-widget table td.active:hover>div {
  background-color: #FFFFFF;
}

input.datetimepicker[data-color]+.bootstrap-datetimepicker-widget table td:not(.active).day:hover>div,
input.datetimepicker[data-color]+.bootstrap-datetimepicker-widget table td.hour:hover>div,
input.datetimepicker[data-color]+.bootstrap-datetimepicker-widget table td.minute:hover>div,
input.datetimepicker[data-color]+.bootstrap-datetimepicker-widget table td.second:hover>div,
input.datetimepicker[data-color]+.bootstrap-datetimepicker-widget table td span:hover {
  background: rgba(255, 255, 255, 0.2);
}

input.datetimepicker[data-color]+.bootstrap-datetimepicker-widget table thead tr:first-child th:hover span,
input.datetimepicker[data-color]+.bootstrap-datetimepicker-widget table thead tr:first-child th.picker-switch:hover {
  background-color: rgba(255, 255, 255, 0.2);
}

input.datetimepicker[data-color="orange"]+.bootstrap-datetimepicker-widget {
  background-color: #f96332;
}

input.datetimepicker[data-color="orange"]+.bootstrap-datetimepicker-widget table td.active>div,
input.datetimepicker[data-color="orange"]+.bootstrap-datetimepicker-widget table td.active:hover>div,
input.datetimepicker[data-color="orange"]+.bootstrap-datetimepicker-widget button[data-action],
input.datetimepicker[data-color="orange"]+.bootstrap-datetimepicker-widget.dropdown-menu.top:after,
input.datetimepicker[data-color="orange"]+.bootstrap-datetimepicker-widget.dropdown-menu.bottom:before {
  color: #f96332;
}

input.datetimepicker[data-color="blue"]+.bootstrap-datetimepicker-widget {
  background-color: #2CA8FF;
}

input.datetimepicker[data-color="blue"]+.bootstrap-datetimepicker-widget table td.active>div,
input.datetimepicker[data-color="blue"]+.bootstrap-datetimepicker-widget table td.active:hover>div,
input.datetimepicker[data-color="blue"]+.bootstrap-datetimepicker-widget button[data-action],
input.datetimepicker[data-color="blue"]+.bootstrap-datetimepicker-widget.dropdown-menu.top:after,
input.datetimepicker[data-color="blue"]+.bootstrap-datetimepicker-widget.dropdown-menu.bottom:before {
  color: #2CA8FF;
}

input.datetimepicker[data-color="green"]+.bootstrap-datetimepicker-widget {
  background-color: #18ce0f;
}

input.datetimepicker[data-color="green"]+.bootstrap-datetimepicker-widget table td.active>div,
input.datetimepicker[data-color="green"]+.bootstrap-datetimepicker-widget table td.active:hover>div,
input.datetimepicker[data-color="green"]+.bootstrap-datetimepicker-widget button[data-action],
input.datetimepicker[data-color="green"]+.bootstrap-datetimepicker-widget.dropdown-menu.top:after,
input.datetimepicker[data-color="green"]+.bootstrap-datetimepicker-widget.dropdown-menu.bottom:before {
  color: #18ce0f;
}

input.datetimepicker[data-color="red"]+.bootstrap-datetimepicker-widget {
  background-color: #FF3636;
}

input.datetimepicker[data-color="red"]+.bootstrap-datetimepicker-widget table td.active>div,
input.datetimepicker[data-color="red"]+.bootstrap-datetimepicker-widget table td.active:hover>div,
input.datetimepicker[data-color="red"]+.bootstrap-datetimepicker-widget button[data-action],
input.datetimepicker[data-color="red"]+.bootstrap-datetimepicker-widget.dropdown-menu.top:after,
input.datetimepicker[data-color="red"]+.bootstrap-datetimepicker-widget.dropdown-menu.bottom:before {
  color: #FF3636;
}

input.datetimepicker[data-color="yellow"]+.bootstrap-datetimepicker-widget {
  background-color: #FFB236;
}

input.datetimepicker[data-color="yellow"]+.bootstrap-datetimepicker-widget table td.active>div,
input.datetimepicker[data-color="yellow"]+.bootstrap-datetimepicker-widget table td.active:hover>div,
input.datetimepicker[data-color="yellow"]+.bootstrap-datetimepicker-widget button[data-action],
input.datetimepicker[data-color="yellow"]+.bootstrap-datetimepicker-widget.dropdown-menu.top:after,
input.datetimepicker[data-color="yellow"]+.bootstrap-datetimepicker-widget.dropdown-menu.bottom:before {
  color: #FFB236;
}

/*!
 * Bootstrap-select v1.13.1 (https://developer.snapappointments.com/bootstrap-select)
 *
 * Copyright 2012-2018 SnapAppointments, LLC
 * Licensed under MIT (https://github.com/snapappointments/bootstrap-select/blob/master/LICENSE)
 */

select.bs-select-hidden,
.bootstrap-select>select.bs-select-hidden,
select.selectpicker {
  display: none !important;
}

.bootstrap-select {
  width: 220px \0;
  /*IE9 and below*/
}

.bootstrap-select>.dropdown-menu {
  overflow: visible !important;
}

.bootstrap-select .dropdown-item.active,
.bootstrap-select .dropdown-item:active {
  background-color: inherit;
}

.bootstrap-select.dropup .dropdown-menu {
  top: auto !important;
  bottom: 100%;
}

.bootstrap-select>.dropdown-toggle {
  position: relative;
  width: 100%;
  z-index: 1;
  text-align: right;
  white-space: nowrap;
  margin: 0;
}

.bootstrap-select>select {
  position: absolute !important;
  bottom: 0;
  left: 50%;
  display: block !important;
  width: 0.5px !important;
  height: 100% !important;
  padding: 0 !important;
  opacity: 0 !important;
  border: none;
}

.bootstrap-select>select.mobile-device {
  top: 0;
  left: 0;
  display: block !important;
  width: 100% !important;
  z-index: 2;
}

.has-error .bootstrap-select .dropdown-toggle,
.error .bootstrap-select .dropdown-toggle,
.bootstrap-select.is-invalid .dropdown-toggle,
.was-validated .bootstrap-select .selectpicker:invalid+.dropdown-toggle {
  border-color: #b94a48;
}

.bootstrap-select.is-valid .dropdown-toggle,
.was-validated .bootstrap-select .selectpicker:valid+.dropdown-toggle {
  border-color: #28a745;
}

.bootstrap-select.fit-width {
  width: auto !important;
}

.bootstrap-select:not([class*="col-"]):not([class*="form-control"]):not(.input-group-btn) {
  width: 220px;
}

.bootstrap-select.form-control {
  margin-bottom: 0;
  padding: 0;
  border: none;
}

:not(.input-group)>.bootstrap-select.form-control:not([class*="col-"]) {
  width: 100%;
}

.bootstrap-select.form-control.input-group-btn {
  z-index: auto;
}

.bootstrap-select.form-control.input-group-btn:not(:first-child):not(:last-child)>.btn {
  border-radius: 0;
}

.bootstrap-select:not(.input-group-btn),
.bootstrap-select[class*="col-"] {
  float: none;
  display: inline-block;
  margin-left: 0;
}

.bootstrap-select.dropdown-menu-right,
.bootstrap-select[class*="col-"].dropdown-menu-right,
.row .bootstrap-select[class*="col-"].dropdown-menu-right {
  float: right;
}

.form-inline .bootstrap-select,
.form-horizontal .bootstrap-select,
.form-group .bootstrap-select {
  margin-bottom: 0;
}

.form-group-lg .bootstrap-select.form-control,
.form-group-sm .bootstrap-select.form-control {
  padding: 0;
}

.form-group-lg .bootstrap-select.form-control .dropdown-toggle,
.form-group-sm .bootstrap-select.form-control .dropdown-toggle {
  height: 100%;
  font-size: inherit;
  line-height: inherit;
  border-radius: inherit;
}

.bootstrap-select.form-control-sm .dropdown-toggle,
.bootstrap-select.form-control-lg .dropdown-toggle {
  font-size: inherit;
  line-height: inherit;
  border-radius: inherit;
}

.bootstrap-select.form-control-sm .dropdown-toggle {
  padding: 0.25rem 0.5rem;
}

.bootstrap-select.form-control-lg .dropdown-toggle {
  padding: 0.5rem 1rem;
}

.form-inline .bootstrap-select .form-control {
  width: 100%;
}

.bootstrap-select.disabled,
.bootstrap-select>.disabled {
  cursor: not-allowed;
}

.bootstrap-select.disabled:focus,
.bootstrap-select>.disabled:focus {
  outline: none !important;
}

.bootstrap-select.bs-container {
  position: absolute;
  top: 0;
  left: 0;
  height: 0 !important;
  padding: 0 !important;
}

.bootstrap-select.bs-container .dropdown-menu {
  z-index: 1060;
}

.bootstrap-select .dropdown-toggle:before {
  content: '';
  display: inline-block;
}

.bootstrap-select .dropdown-toggle .filter-option {
  position: absolute;
  top: 0;
  left: 0;
  padding-top: inherit;
  padding-right: inherit;
  padding-bottom: inherit;
  padding-left: inherit;
  height: 100%;
  width: 100%;
  text-align: left;
  outline: none;
}

.bootstrap-select .dropdown-toggle .filter-option-inner {
  padding-right: inherit;
}

.bootstrap-select .dropdown-toggle .filter-option-inner-inner {
  overflow: hidden;
}

.bootstrap-select .dropdown-toggle .caret {
  position: absolute;
  top: 50%;
  right: 12px;
  margin-top: -2px;
  vertical-align: middle;
}

.input-group .bootstrap-select.form-control .dropdown-toggle {
  border-radius: inherit;
}

.bootstrap-select[class*="col-"] .dropdown-toggle {
  width: 100%;
}

.bootstrap-select .dropdown-menu {
  min-width: 100%;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

.bootstrap-select .dropdown-menu>.inner:focus {
  outline: none !important;
}

.bootstrap-select .dropdown-menu.inner {
  position: static;
  float: none;
  border: 0;
  padding: 0;
  margin: 0;
  border-radius: 0;
  -webkit-box-shadow: none;
  box-shadow: none;
}

.bootstrap-select .dropdown-menu li {
  position: relative;
}

.bootstrap-select .dropdown-menu li.active small {
  color: #fff;
}

.bootstrap-select .dropdown-menu li.disabled a {
  cursor: not-allowed;
}

.bootstrap-select .dropdown-menu li a {
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.bootstrap-select .dropdown-menu li a.opt {
  position: relative;
  padding-left: 2.25em;
}

.bootstrap-select .dropdown-menu li a span.check-mark {
  display: none;
}

.bootstrap-select .dropdown-menu li a span.text {
  display: inline-block;
}

.bootstrap-select .dropdown-menu li small {
  padding-left: 0.5em;
}

.bootstrap-select .dropdown-menu .notify {
  position: absolute;
  bottom: 5px;
  width: 96%;
  margin: 0 2%;
  min-height: 26px;
  padding: 3px 5px;
  background: #f5f5f5;
  border: 1px solid #e3e3e3;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
  pointer-events: none;
  opacity: 0.9;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

.bootstrap-select .no-results {
  padding: 3px;
  background: #f5f5f5;
  margin: 0 5px;
  white-space: nowrap;
}

.bootstrap-select.fit-width .dropdown-toggle .filter-option {
  position: static;
  display: inline;
  padding: 0;
}

.bootstrap-select.fit-width .dropdown-toggle .filter-option-inner,
.bootstrap-select.fit-width .dropdown-toggle .filter-option-inner-inner {
  display: inline;
}

.bootstrap-select.fit-width .dropdown-toggle .caret {
  position: static;
  top: auto;
  margin-top: -1px;
}

.bootstrap-select.show-tick .dropdown-menu .selected span.check-mark {
  position: absolute;
  display: inline-block;
  right: 15px;
  top: 14px;
}

.bootstrap-select.show-tick .dropdown-menu li a span.text {
  margin-right: 34px;
}

.bootstrap-select .bs-ok-default:after {
  content: '';
  display: block;
  width: 0.5em;
  height: 1em;
  border-style: solid;
  border-width: 0 0.26em 0.26em 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  -o-transform: rotate(45deg);
  transform: rotate(45deg);
}

.bootstrap-select.show-menu-arrow.open>.dropdown-toggle,
.bootstrap-select.show-menu-arrow.show>.dropdown-toggle {
  z-index: 1061;
}

.bootstrap-select.show-menu-arrow .dropdown-toggle .filter-option:before {
  content: '';
  border-left: 7px solid transparent;
  border-right: 7px solid transparent;
  border-bottom: 7px solid rgba(204, 204, 204, 0.2);
  position: absolute;
  bottom: -4px;
  left: 9px;
  display: none;
}

.bootstrap-select.show-menu-arrow .dropdown-toggle .filter-option:after {
  content: '';
  border-left: 6px solid transparent;
  border-right: 6px solid transparent;
  border-bottom: 6px solid white;
  position: absolute;
  bottom: -4px;
  left: 10px;
  display: none;
}

.bootstrap-select.show-menu-arrow.dropup .dropdown-toggle .filter-option:before {
  bottom: auto;
  top: -4px;
  border-top: 7px solid rgba(204, 204, 204, 0.2);
  border-bottom: 0;
}

.bootstrap-select.show-menu-arrow.dropup .dropdown-toggle .filter-option:after {
  bottom: auto;
  top: -4px;
  border-top: 6px solid white;
  border-bottom: 0;
}

.bootstrap-select.show-menu-arrow.pull-right .dropdown-toggle .filter-option:before {
  right: 12px;
  left: auto;
}

.bootstrap-select.show-menu-arrow.pull-right .dropdown-toggle .filter-option:after {
  right: 13px;
  left: auto;
}

.bootstrap-select.show-menu-arrow.open>.dropdown-toggle .filter-option:before,
.bootstrap-select.show-menu-arrow.show>.dropdown-toggle .filter-option:before,
.bootstrap-select.show-menu-arrow.open>.dropdown-toggle .filter-option:after,
.bootstrap-select.show-menu-arrow.show>.dropdown-toggle .filter-option:after {
  display: block;
}

.bs-searchbox,
.bs-actionsbox,
.bs-donebutton {
  padding: 4px 8px;
}

.bs-actionsbox {
  width: 100%;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

.bs-actionsbox .btn-group button {
  width: 50%;
}

.bs-donebutton {
  float: left;
  width: 100%;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

.bs-donebutton .btn-group button {
  width: 100%;
}

.bs-searchbox+.bs-actionsbox {
  padding: 0 8px 4px;
}

.bs-searchbox .form-control {
  margin-bottom: 0;
  width: 100%;
  float: none;
}

/*# sourceMappingURL=bootstrap-select.css.map */

.btn-file {
  position: relative;
  overflow: hidden;
  vertical-align: middle;
}

.btn-file>input {
  position: absolute;
  top: 0;
  right: 0;
  width: 100%;
  height: 100%;
  margin: 0;
  font-size: 23px;
  cursor: pointer;
  filter: alpha(opacity=0);
  opacity: 0;
  direction: ltr;
}

.fileinput {
  display: inline-block;
  margin-bottom: 9px;
}

.fileinput .form-control {
  display: inline-block;
  padding-top: 7px;
  padding-bottom: 5px;
  margin-bottom: 0;
  vertical-align: middle;
  cursor: text;
}

.fileinput .thumbnail {
  display: inline-block;
  margin-bottom: 10px;
  overflow: hidden;
  text-align: center;
  vertical-align: middle;
  max-width: 250px;
  box-shadow: 0 1px 15px 1px rgba(39, 39, 39, 0.1);
}

.fileinput .thumbnail.img-circle {
  border-radius: 50%;
  max-width: 100px;
}

.fileinput .thumbnail>img {
  max-height: 100%;
}

.fileinput .btn {
  vertical-align: middle;
}

.fileinput-exists .fileinput-new,
.fileinput-new .fileinput-exists {
  display: none;
}

.fileinput-inline .fileinput-controls {
  display: inline;
}

.fileinput-filename {
  display: inline-block;
  overflow: hidden;
  vertical-align: middle;
}

.form-control .fileinput-filename {
  vertical-align: bottom;
}

.fileinput.input-group {
  display: table;
}

.fileinput.input-group>* {
  position: relative;
  z-index: 2;
}

.fileinput.input-group>.btn-file {
  z-index: 1;
}

.fileinput-new.input-group .btn-file,
.fileinput-new .input-group .btn-file {
  border-radius: 0 4px 4px 0;
}

.fileinput-new.input-group .btn-file.btn-xs,
.fileinput-new .input-group .btn-file.btn-xs,
.fileinput-new.input-group .btn-file.btn-sm,
.fileinput-new .input-group .btn-file.btn-sm {
  border-radius: 0 3px 3px 0;
}

.fileinput-new.input-group .btn-file.btn-lg,
.fileinput-new .input-group .btn-file.btn-lg {
  border-radius: 0 6px 6px 0;
}

.form-group.has-warning .fileinput .fileinput-preview {
  color: #FFB236;
}

.form-group.has-warning .fileinput .thumbnail {
  border-color: #FFB236;
}

.form-group.has-error .fileinput .fileinput-preview {
  color: #FF3636;
}

.form-group.has-error .fileinput .thumbnail {
  border-color: #FF3636;
}

.form-group.has-success .fileinput .fileinput-preview {
  color: #18ce0f;
}

.form-group.has-success .fileinput .thumbnail {
  border-color: #18ce0f;
}

.input-group-addon:not(:first-child) {
  border-left: 0;
}

.thumbnail {
  border: 0 none;
  border-radius: 3px;
  padding: 0;
}

/*
 * bootstrap-tagsinput v0.8.0
 *
 */

.bootstrap-tagsinput {
  display: inline-block;
  padding: 4px 6px;
  max-width: 100%;
  line-height: 22px;
}

.bootstrap-tagsinput input {
  border: none;
  box-shadow: none;
  outline: none;
  background-color: transparent;
  margin: 0;
  width: 74px;
  max-width: inherit;
}

.bootstrap-tagsinput input:focus {
  border: none;
  box-shadow: none;
}

.bootstrap-tagsinput.form-control input::-moz-placeholder {
  color: #777;
  opacity: 1;
}

.bootstrap-tagsinput.form-control input:-ms-input-placeholder,
.bootstrap-tagsinput.form-control input::-webkit-input-placeholder {
  color: #777;
}

.bootstrap-tagsinput .tag {
  cursor: pointer;
  margin: 5px 3px 5px 0;
  position: relative;
  padding: 3px 8px;
  border-radius: 12px;
  color: #FFFFFF;
  font-weight: 500;
  font-size: 0.75em;
  text-transform: uppercase;
  display: inline-block;
  line-height: 1.5em;
  padding-left: 0.8em;
}

.bootstrap-tagsinput .tag:hover {
  padding-right: 22px;
}

.bootstrap-tagsinput .tag:hover [data-role="remove"] {
  opacity: 1;
  padding-right: 4px;
}

.bootstrap-tagsinput .tag [data-role="remove"] {
  cursor: pointer;
  position: absolute;
  top: 3px;
  right: 0px;
  opacity: 0;
  background-color: transparent;
}

.bootstrap-tagsinput .tag [data-role="remove"]:after {
  font-family: 'Nucleo Outline';
  content: "\ea53";
  padding: 0px 2px;
}

.bootstrap-tagsinput.primary-badge .tag {
  background-color: #f96332;
  color: #FFFFFF;
}

.bootstrap-tagsinput.primary-badge .tag .tagsinput-remove-link {
  color: #FFFFFF;
}

.bootstrap-tagsinput.info-badge .tag {
  background-color: #2CA8FF;
  color: #FFFFFF;
}

.bootstrap-tagsinput.info-badge .tag .tagsinput-remove-link {
  color: #FFFFFF;
}

.bootstrap-tagsinput.success-badge .tag {
  background-color: #18ce0f;
  color: #FFFFFF;
}

.bootstrap-tagsinput.success-badge .tag .tagsinput-remove-link {
  color: #FFFFFF;
}

.bootstrap-tagsinput.warning-badge .tag {
  background-color: #FFB236;
  color: #FFFFFF;
}

.bootstrap-tagsinput.warning-badge .tag .tagsinput-remove-link {
  color: #FFFFFF;
}

.bootstrap-tagsinput.danger-badge .tag {
  background-color: #FF3636;
  color: #FFFFFF;
}

.bootstrap-tagsinput.danger-badge .tag .tagsinput-remove-link {
  color: #FFFFFF;
}

/*
 * This combined file was created by the DataTables downloader builder:
 *   https://datatables.net/download
 *
 * To rebuild or modify this file with the latest versions of the included
 * software please visit:
 *   https://datatables.net/download/#bs4/dt-1.10.16/cr-1.4.1/fc-3.2.3/fh-3.1.3/r-2.2.0/rg-1.0.2/rr-1.2.3/sc-1.4.3/sl-1.2.3
 *
 * Included libraries:
 *   DataTables 1.10.16, ColReorder 1.4.1, FixedColumns 3.2.3, FixedHeader 3.1.3, Responsive 2.2.0, RowGroup 1.0.2, RowReorder 1.2.3, Scroller 1.4.3, Select 1.2.3
 */

table.dataTable {
  clear: both;
  margin-top: 6px !important;
  margin-bottom: 6px !important;
  max-width: none !important;
  border-collapse: separate !important;
  border: 0;
}

table.dataTable td,
table.dataTable th {
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
}

table.dataTable td.dataTables_empty,
table.dataTable th.dataTables_empty {
  text-align: center;
}

table.dataTable.nowrap th,
table.dataTable.nowrap td {
  white-space: nowrap;
}

div.dataTables_wrapper div.dataTables_length label {
  font-weight: normal;
  text-align: left;
  white-space: nowrap;
}

div.dataTables_wrapper div.dataTables_length select {
  width: 75px;
  display: inline-block;
}

div.dataTables_wrapper div.dataTables_filter {
  text-align: right;
}

div.dataTables_wrapper div.dataTables_filter label {
  font-weight: normal;
  white-space: nowrap;
  text-align: left;
}

div.dataTables_wrapper div.dataTables_filter input {
  margin-left: 0.5em;
  display: inline-block;
  width: auto;
}

div.dataTables_wrapper div.dataTables_info {
  padding-top: 8px;
  white-space: nowrap;
}

div.dataTables_wrapper div.dataTables_paginate {
  margin: 0;
  white-space: nowrap;
  text-align: right;
}

div.dataTables_wrapper div.dataTables_paginate ul.pagination {
  margin: 2px 0;
  white-space: nowrap;
  -ms-flex-pack: end !important;
  justify-content: flex-end !important;
}

div.dataTables_wrapper div.dataTables_processing {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 200px;
  margin-left: -100px;
  margin-top: -26px;
  text-align: center;
  padding: 1em 0;
}

table.dataTable thead>tr>th.sorting_asc,
table.dataTable thead>tr>th.sorting_desc,
table.dataTable thead>tr>th.sorting,
table.dataTable thead>tr>td.sorting_asc,
table.dataTable thead>tr>td.sorting_desc,
table.dataTable thead>tr>td.sorting {
  padding-right: 30px;
}

table.dataTable thead>tr>th:active,
table.dataTable thead>tr>td:active {
  outline: none;
}

table.dataTable thead .sorting,
table.dataTable thead .sorting_asc,
table.dataTable thead .sorting_desc,
table.dataTable thead .sorting_asc_disabled,
table.dataTable thead .sorting_desc_disabled {
  cursor: pointer;
  position: relative;
}

table.dataTable thead .sorting_asc_disabled:after,
table.dataTable thead .sorting_desc_disabled:after {
  color: #eee;
}

div.dataTables_scrollHead table.dataTable {
  margin-bottom: 0 !important;
}

div.dataTables_scrollBody table {
  border-top: none;
  margin-top: 0 !important;
  margin-bottom: 0 !important;
}

div.dataTables_scrollBody table thead .sorting:after,
div.dataTables_scrollBody table thead .sorting_asc:after,
div.dataTables_scrollBody table thead .sorting_desc:after {
  display: none;
}

div.dataTables_scrollBody table tbody tr:first-child th,
div.dataTables_scrollBody table tbody tr:first-child td {
  border-top: none;
}

div.dataTables_scrollFoot table {
  margin-top: 0 !important;
  border-top: none;
}

@media screen and (max-width: 767px) {
  div.dataTables_wrapper div.dataTables_length,
  div.dataTables_wrapper div.dataTables_filter,
  div.dataTables_wrapper div.dataTables_info,
  div.dataTables_wrapper div.dataTables_paginate {
    text-align: center;
  }
}

table.dataTable.table-condensed>thead>tr>th {
  padding-right: 20px;
}

table.dataTable.table-condensed .sorting:after,
table.dataTable.table-condensed .sorting_asc:after,
table.dataTable.table-condensed .sorting_desc:after {
  top: 6px;
  right: 6px;
}

table.table-bordered.dataTable th,
table.table-bordered.dataTable td {
  border-left-width: 0;
}

table.table-bordered.dataTable th:last-child,
table.table-bordered.dataTable th:last-child,
table.table-bordered.dataTable td:last-child,
table.table-bordered.dataTable td:last-child {
  border-right-width: 0;
}

table.table-bordered.dataTable tbody th,
table.table-bordered.dataTable tbody td {
  border-bottom-width: 0;
}

div.dataTables_scrollHead table.table-bordered {
  border-bottom-width: 0;
}

div.table-responsive>div.dataTables_wrapper>div.row {
  margin: 0;
}

div.table-responsive>div.dataTables_wrapper>div.row>div[class^="col-"]:first-child {
  padding-left: 0;
}

div.table-responsive>div.dataTables_wrapper>div.row>div[class^="col-"]:last-child {
  padding-right: 0;
}

table.dataTable .btn-simple.btn-icon {
  padding: 3px;
}

table.dataTable thead .sorting:after,
table.dataTable thead .sorting_asc:after,
table.dataTable thead .sorting_desc:after,
table.dataTable thead .sorting_asc_disabled:after,
table.dataTable thead .sorting_desc_disabled:after {
  position: relative;
  display: inline-block;
  bottom: 1px;
  right: -7px;
  font-family: 'Font Awesome 5 Free';
  font-weight: 900;
  opacity: 0.8;
  font-size: 12px;
}

table.dataTable thead .disabled-sorting.sorting:after,
table.dataTable thead .disabled-sorting.sorting_asc:after,
table.dataTable thead .disabled-sorting.sorting_desc:after,
table.dataTable thead .disabled-sorting.sorting_asc_disabled:after,
table.dataTable thead .disabled-sorting.sorting_desc_disabled:after {
  display: none;
}

table.dataTable thead .sorting:after {
  opacity: 0.4;
  content: "\f0dc";
}

table.dataTable thead .sorting_asc:after {
  content: "\f0de";
  top: 2px;
}

table.dataTable thead .sorting_desc:after {
  content: "\f0dd";
  top: -3px;
}

table.dataTable>thead>tr>th,
table.dataTable>tbody>tr>th,
table.dataTable>tfoot>tr>th,
table.dataTable>thead>tr>td,
table.dataTable>tbody>tr>td,
table.dataTable>tfoot>tr>td {
  padding: 5px !important;
  outline: 0;
  max-width: 150px;
  width: 150px;
  border-right: 0;
  border-bottom: 0;
}

table.dataTable>thead>tr>th {
  border: none;
}

.dataTables_paginate a {
  outline: 0;
}

table.dataTable.dtr-inline.collapsed>tbody>tr>td.child,
table.dataTable.dtr-inline.collapsed>tbody>tr>th.child,
table.dataTable.dtr-inline.collapsed>tbody>tr>td.dataTables_empty {
  cursor: default !important;
}

table.dataTable.dtr-inline.collapsed>tbody>tr>td.child:before,
table.dataTable.dtr-inline.collapsed>tbody>tr>th.child:before,
table.dataTable.dtr-inline.collapsed>tbody>tr>td.dataTables_empty:before {
  display: none !important;
}

table.dataTable.dtr-inline.collapsed>tbody>tr>td:first-child,
table.dataTable.dtr-inline.collapsed>tbody>tr>th:first-child {
  position: relative;
  padding-left: 30px;
  cursor: pointer;
}

table.dataTable.dtr-inline.collapsed>tbody>tr>td:first-child:before,
table.dataTable.dtr-inline.collapsed>tbody>tr>th:first-child:before {
  top: 50%;
  margin-top: -9px;
  left: 4px;
  height: 18px;
  width: 18px;
  display: block;
  position: absolute;
  color: #18ce0f;
  border: 0px solid white;
  border-radius: 14px;
  box-shadow: 0 0 3px #444;
  box-sizing: content-box;
  text-align: center;
  font-family: 'Courier New', Courier, monospace;
  line-height: 18px;
  content: '+';
  background-color: #FFF;
}

table.dataTable.dtr-inline.collapsed>tbody>tr.parent>td:first-child:before,
table.dataTable.dtr-inline.collapsed>tbody>tr.parent>th:first-child:before {
  content: '-';
  color: #FF3636;
}

table.dataTable.dtr-inline.collapsed>tbody>tr.child td:before {
  display: none;
}

table.dataTable.dtr-inline.collapsed.compact>tbody>tr>td:first-child,
table.dataTable.dtr-inline.collapsed.compact>tbody>tr>th:first-child {
  padding-left: 27px;
}

table.dataTable.dtr-inline.collapsed.compact>tbody>tr>td:first-child:before,
table.dataTable.dtr-inline.collapsed.compact>tbody>tr>th:first-child:before {
  top: 5px;
  left: 4px;
  height: 14px;
  width: 14px;
  border-radius: 14px;
  line-height: 14px;
  text-indent: 3px;
}

table.dataTable.dtr-column>tbody>tr>td.control,
table.dataTable.dtr-column>tbody>tr>th.control {
  position: relative;
  cursor: pointer;
}

table.dataTable.dtr-column>tbody>tr>td.control:before,
table.dataTable.dtr-column>tbody>tr>th.control:before {
  top: 50%;
  left: 50%;
  height: 16px;
  width: 16px;
  margin-top: -10px;
  margin-left: -10px;
  display: block;
  position: absolute;
  color: white;
  border: 2px solid white;
  border-radius: 14px;
  box-shadow: 0 0 3px #444;
  box-sizing: content-box;
  text-align: center;
  font-family: 'Courier New', Courier, monospace;
  line-height: 14px;
  content: '+';
  background-color: #31b131;
}

table.dataTable.dtr-column>tbody>tr.parent td.control:before,
table.dataTable.dtr-column>tbody>tr.parent th.control:before {
  content: '-';
  background-color: #d33333;
}

table.dataTable>tbody>tr.child {
  padding: 0.5em 1em;
}

table.dataTable>tbody>tr.child:hover {
  background: transparent !important;
}

table.dataTable>tbody>tr.child ul {
  display: inline-block;
  list-style-type: none;
  margin: 0;
  padding: 0;
}

table.dataTable>tbody>tr.child ul li {
  border-bottom: 1px solid #efefef;
  padding: 0.5em 0;
}

table.dataTable>tbody>tr.child ul li:first-child {
  padding-top: 0;
}

table.dataTable>tbody>tr.child ul li:last-child {
  border-bottom: none;
}

table.dataTable>tbody>tr.child span.dtr-title {
  display: inline-block;
  min-width: 75px;
  font-weight: bold;
}

div.dtr-modal {
  position: fixed;
  box-sizing: border-box;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  z-index: 100;
  padding: 10em 1em;
}

div.dtr-modal div.dtr-modal-display {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  width: 50%;
  height: 50%;
  overflow: auto;
  margin: auto;
  z-index: 102;
  overflow: auto;
  background-color: #f5f5f7;
  border: 1px solid black;
  border-radius: 0.5em;
  box-shadow: 0 12px 30px rgba(0, 0, 0, 0.6);
}

div.dtr-modal div.dtr-modal-content {
  position: relative;
  padding: 1em;
}

div.dtr-modal div.dtr-modal-close {
  position: absolute;
  top: 6px;
  right: 6px;
  width: 22px;
  height: 22px;
  border: 1px solid #eaeaea;
  background-color: #f9f9f9;
  text-align: center;
  border-radius: 3px;
  cursor: pointer;
  z-index: 12;
}

div.dtr-modal div.dtr-modal-close:hover {
  background-color: #eaeaea;
}

div.dtr-modal div.dtr-modal-background {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 101;
  background: rgba(0, 0, 0, 0.6);
}

.material-datatables .input-sm {
  height: 35px;
  padding: 0;
}

@media screen and (max-width: 767px) {
  div.dtr-modal div.dtr-modal-display {
    width: 95%;
  }
  table.dataTable>tbody>tr>td:first-child {
    padding-left: 30px !important;
  }
}

@media all and (min-width: 520px) and (max-width: 730px) {
  table.dataTable .btn-simple.btn-icon {
    display: block;
    margin: 0;
  }
}

svg {
  touch-action: none;
}

.jvectormap-container {
  width: 100%;
  height: 100%;
  position: relative;
  overflow: hidden;
  touch-action: none;
}

.jvectormap-tip {
  position: absolute;
  display: none;
  color: #888;
  line-height: 1.5em;
  background: #FFFFFF;
  border: none;
  border-radius: 0.875rem;
  padding: 5px 10px;
  z-index: 1040;
}

.jvectormap-zoomin,
.jvectormap-zoomout,
.jvectormap-goback {
  position: absolute;
  left: 10px;
  border-radius: 3px;
  background: #292929;
  padding: 3px;
  color: white;
  cursor: pointer;
  line-height: 10px;
  text-align: center;
  box-sizing: content-box;
}

.jvectormap-zoomin,
.jvectormap-zoomout {
  width: 10px;
  height: 10px;
}

.jvectormap-zoomin {
  top: 10px;
}

.jvectormap-zoomout {
  top: 30px;
}

.jvectormap-goback {
  bottom: 10px;
  z-index: 1000;
  padding: 6px;
}

.jvectormap-spinner {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  background: center no-repeat url(data:image/gif;base64,R0lGODlhIAAgAPMAAP///wAAAMbGxoSEhLa2tpqamjY2NlZWVtjY2OTk5Ly8vB4eHgQEBAAAAAAAAAAAACH/C05FVFNDQVBFMi4wAwEAAAAh/hpDcmVhdGVkIHdpdGggYWpheGxvYWQuaW5mbwAh+QQJCgAAACwAAAAAIAAgAAAE5xDISWlhperN52JLhSSdRgwVo1ICQZRUsiwHpTJT4iowNS8vyW2icCF6k8HMMBkCEDskxTBDAZwuAkkqIfxIQyhBQBFvAQSDITM5VDW6XNE4KagNh6Bgwe60smQUB3d4Rz1ZBApnFASDd0hihh12BkE9kjAJVlycXIg7CQIFA6SlnJ87paqbSKiKoqusnbMdmDC2tXQlkUhziYtyWTxIfy6BE8WJt5YJvpJivxNaGmLHT0VnOgSYf0dZXS7APdpB309RnHOG5gDqXGLDaC457D1zZ/V/nmOM82XiHRLYKhKP1oZmADdEAAAh+QQJCgAAACwAAAAAIAAgAAAE6hDISWlZpOrNp1lGNRSdRpDUolIGw5RUYhhHukqFu8DsrEyqnWThGvAmhVlteBvojpTDDBUEIFwMFBRAmBkSgOrBFZogCASwBDEY/CZSg7GSE0gSCjQBMVG023xWBhklAnoEdhQEfyNqMIcKjhRsjEdnezB+A4k8gTwJhFuiW4dokXiloUepBAp5qaKpp6+Ho7aWW54wl7obvEe0kRuoplCGepwSx2jJvqHEmGt6whJpGpfJCHmOoNHKaHx61WiSR92E4lbFoq+B6QDtuetcaBPnW6+O7wDHpIiK9SaVK5GgV543tzjgGcghAgAh+QQJCgAAACwAAAAAIAAgAAAE7hDISSkxpOrN5zFHNWRdhSiVoVLHspRUMoyUakyEe8PTPCATW9A14E0UvuAKMNAZKYUZCiBMuBakSQKG8G2FzUWox2AUtAQFcBKlVQoLgQReZhQlCIJesQXI5B0CBnUMOxMCenoCfTCEWBsJColTMANldx15BGs8B5wlCZ9Po6OJkwmRpnqkqnuSrayqfKmqpLajoiW5HJq7FL1Gr2mMMcKUMIiJgIemy7xZtJsTmsM4xHiKv5KMCXqfyUCJEonXPN2rAOIAmsfB3uPoAK++G+w48edZPK+M6hLJpQg484enXIdQFSS1u6UhksENEQAAIfkECQoAAAAsAAAAACAAIAAABOcQyEmpGKLqzWcZRVUQnZYg1aBSh2GUVEIQ2aQOE+G+cD4ntpWkZQj1JIiZIogDFFyHI0UxQwFugMSOFIPJftfVAEoZLBbcLEFhlQiqGp1Vd140AUklUN3eCA51C1EWMzMCezCBBmkxVIVHBWd3HHl9JQOIJSdSnJ0TDKChCwUJjoWMPaGqDKannasMo6WnM562R5YluZRwur0wpgqZE7NKUm+FNRPIhjBJxKZteWuIBMN4zRMIVIhffcgojwCF117i4nlLnY5ztRLsnOk+aV+oJY7V7m76PdkS4trKcdg0Zc0tTcKkRAAAIfkECQoAAAAsAAAAACAAIAAABO4QyEkpKqjqzScpRaVkXZWQEximw1BSCUEIlDohrft6cpKCk5xid5MNJTaAIkekKGQkWyKHkvhKsR7ARmitkAYDYRIbUQRQjWBwJRzChi9CRlBcY1UN4g0/VNB0AlcvcAYHRyZPdEQFYV8ccwR5HWxEJ02YmRMLnJ1xCYp0Y5idpQuhopmmC2KgojKasUQDk5BNAwwMOh2RtRq5uQuPZKGIJQIGwAwGf6I0JXMpC8C7kXWDBINFMxS4DKMAWVWAGYsAdNqW5uaRxkSKJOZKaU3tPOBZ4DuK2LATgJhkPJMgTwKCdFjyPHEnKxFCDhEAACH5BAkKAAAALAAAAAAgACAAAATzEMhJaVKp6s2nIkolIJ2WkBShpkVRWqqQrhLSEu9MZJKK9y1ZrqYK9WiClmvoUaF8gIQSNeF1Er4MNFn4SRSDARWroAIETg1iVwuHjYB1kYc1mwruwXKC9gmsJXliGxc+XiUCby9ydh1sOSdMkpMTBpaXBzsfhoc5l58Gm5yToAaZhaOUqjkDgCWNHAULCwOLaTmzswadEqggQwgHuQsHIoZCHQMMQgQGubVEcxOPFAcMDAYUA85eWARmfSRQCdcMe0zeP1AAygwLlJtPNAAL19DARdPzBOWSm1brJBi45soRAWQAAkrQIykShQ9wVhHCwCQCACH5BAkKAAAALAAAAAAgACAAAATrEMhJaVKp6s2nIkqFZF2VIBWhUsJaTokqUCoBq+E71SRQeyqUToLA7VxF0JDyIQh/MVVPMt1ECZlfcjZJ9mIKoaTl1MRIl5o4CUKXOwmyrCInCKqcWtvadL2SYhyASyNDJ0uIiRMDjI0Fd30/iI2UA5GSS5UDj2l6NoqgOgN4gksEBgYFf0FDqKgHnyZ9OX8HrgYHdHpcHQULXAS2qKpENRg7eAMLC7kTBaixUYFkKAzWAAnLC7FLVxLWDBLKCwaKTULgEwbLA4hJtOkSBNqITT3xEgfLpBtzE/jiuL04RGEBgwWhShRgQExHBAAh+QQJCgAAACwAAAAAIAAgAAAE7xDISWlSqerNpyJKhWRdlSAVoVLCWk6JKlAqAavhO9UkUHsqlE6CwO1cRdCQ8iEIfzFVTzLdRAmZX3I2SfZiCqGk5dTESJeaOAlClzsJsqwiJwiqnFrb2nS9kmIcgEsjQydLiIlHehhpejaIjzh9eomSjZR+ipslWIRLAgMDOR2DOqKogTB9pCUJBagDBXR6XB0EBkIIsaRsGGMMAxoDBgYHTKJiUYEGDAzHC9EACcUGkIgFzgwZ0QsSBcXHiQvOwgDdEwfFs0sDzt4S6BK4xYjkDOzn0unFeBzOBijIm1Dgmg5YFQwsCMjp1oJ8LyIAACH5BAkKAAAALAAAAAAgACAAAATwEMhJaVKp6s2nIkqFZF2VIBWhUsJaTokqUCoBq+E71SRQeyqUToLA7VxF0JDyIQh/MVVPMt1ECZlfcjZJ9mIKoaTl1MRIl5o4CUKXOwmyrCInCKqcWtvadL2SYhyASyNDJ0uIiUd6GGl6NoiPOH16iZKNlH6KmyWFOggHhEEvAwwMA0N9GBsEC6amhnVcEwavDAazGwIDaH1ipaYLBUTCGgQDA8NdHz0FpqgTBwsLqAbWAAnIA4FWKdMLGdYGEgraigbT0OITBcg5QwPT4xLrROZL6AuQAPUS7bxLpoWidY0JtxLHKhwwMJBTHgPKdEQAACH5BAkKAAAALAAAAAAgACAAAATrEMhJaVKp6s2nIkqFZF2VIBWhUsJaTokqUCoBq+E71SRQeyqUToLA7VxF0JDyIQh/MVVPMt1ECZlfcjZJ9mIKoaTl1MRIl5o4CUKXOwmyrCInCKqcWtvadL2SYhyASyNDJ0uIiUd6GAULDJCRiXo1CpGXDJOUjY+Yip9DhToJA4RBLwMLCwVDfRgbBAaqqoZ1XBMHswsHtxtFaH1iqaoGNgAIxRpbFAgfPQSqpbgGBqUD1wBXeCYp1AYZ19JJOYgH1KwA4UBvQwXUBxPqVD9L3sbp2BNk2xvvFPJd+MFCN6HAAIKgNggY0KtEBAAh+QQJCgAAACwAAAAAIAAgAAAE6BDISWlSqerNpyJKhWRdlSAVoVLCWk6JKlAqAavhO9UkUHsqlE6CwO1cRdCQ8iEIfzFVTzLdRAmZX3I2SfYIDMaAFdTESJeaEDAIMxYFqrOUaNW4E4ObYcCXaiBVEgULe0NJaxxtYksjh2NLkZISgDgJhHthkpU4mW6blRiYmZOlh4JWkDqILwUGBnE6TYEbCgevr0N1gH4At7gHiRpFaLNrrq8HNgAJA70AWxQIH1+vsYMDAzZQPC9VCNkDWUhGkuE5PxJNwiUK4UfLzOlD4WvzAHaoG9nxPi5d+jYUqfAhhykOFwJWiAAAIfkECQoAAAAsAAAAACAAIAAABPAQyElpUqnqzaciSoVkXVUMFaFSwlpOCcMYlErAavhOMnNLNo8KsZsMZItJEIDIFSkLGQoQTNhIsFehRww2CQLKF0tYGKYSg+ygsZIuNqJksKgbfgIGepNo2cIUB3V1B3IvNiBYNQaDSTtfhhx0CwVPI0UJe0+bm4g5VgcGoqOcnjmjqDSdnhgEoamcsZuXO1aWQy8KAwOAuTYYGwi7w5h+Kr0SJ8MFihpNbx+4Erq7BYBuzsdiH1jCAzoSfl0rVirNbRXlBBlLX+BP0XJLAPGzTkAuAOqb0WT5AH7OcdCm5B8TgRwSRKIHQtaLCwg1RAAAOwAAAAAAAAAAAA==);
}

.jvectormap-legend-title {
  font-weight: bold;
  font-size: 14px;
  text-align: center;
}

.jvectormap-legend-cnt {
  position: absolute;
}

.jvectormap-legend-cnt-h {
  bottom: 0;
  right: 0;
}

.jvectormap-legend-cnt-v {
  top: 0;
  right: 0;
}

.jvectormap-legend {
  background: black;
  color: white;
  border-radius: 3px;
}

.jvectormap-legend-cnt-h .jvectormap-legend {
  float: left;
  margin: 0 10px 10px 0;
  padding: 3px 3px 1px 3px;
}

.jvectormap-legend-cnt-h .jvectormap-legend .jvectormap-legend-tick {
  float: left;
}

.jvectormap-legend-cnt-v .jvectormap-legend {
  margin: 10px 10px 0 0;
  padding: 3px;
}

.jvectormap-legend-cnt-h .jvectormap-legend-tick {
  width: 40px;
}

.jvectormap-legend-cnt-h .jvectormap-legend-tick-sample {
  height: 15px;
}

.jvectormap-legend-cnt-v .jvectormap-legend-tick-sample {
  height: 20px;
  width: 20px;
  display: inline-block;
  vertical-align: middle;
}

.jvectormap-legend-tick-text {
  font-size: 12px;
}

.jvectormap-legend-cnt-h .jvectormap-legend-tick-text {
  text-align: center;
}

.jvectormap-legend-cnt-v .jvectormap-legend-tick-text {
  display: inline-block;
  vertical-align: middle;
  line-height: 20px;
  padding-left: 3px;
}

.fc {
  direction: ltr;
  text-align: left;
}

.fc-rtl {
  text-align: right;
}

body .fc {
  /* extra precedence to overcome jqui */
  font-size: 1em;
}

/* Colors
--------------------------------------------------------------------------------------------------*/

.fc-unthemed th,
.fc-unthemed td,
.fc-unthemed thead,
.fc-unthemed tbody,
.fc-unthemed .fc-divider,
.fc-unthemed .fc-row,
.fc-unthemed .fc-content,
.fc-unthemed .fc-popover,
.fc-unthemed .fc-list-view,
.fc-unthemed .fc-list-heading td {
  border-color: #ddd;
}

.fc-unthemed .fc-popover {
  background-color: #FFFFFF;
}

.fc-unthemed .fc-divider,
.fc-unthemed .fc-popover .fc-header,
.fc-unthemed .fc-list-heading td {
  background: #888;
}

.fc-unthemed .fc-popover .fc-header .fc-close {
  color: #666666;
}

.fc-unthemed .fc-today {
  background: #F5F5F5;
}

.fc-highlight {
  /* when user is selecting cells */
  background: #bce8f1;
  opacity: .3;
}

.fc-bgevent {
  /* default look for background events */
  background: #8fdf82;
  opacity: .3;
}

.fc-nonbusiness {
  /* default look for non-business-hours areas */
  /* will inherit .fc-bgevent's styles */
  background: #d7d7d7;
}

/* Icons (inline elements with styled text that mock arrow icons)
--------------------------------------------------------------------------------------------------*/

.fc-icon {
  display: inline-block;
  height: 1em;
  line-height: 1em;
  font-size: 1em;
  text-align: center;
  overflow: hidden;
  font-family: "Courier New", Courier, monospace;
  /* don't allow browser text-selection */
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/*
Acceptable font-family overrides for individual icons:
	"Arial", sans-serif
	"Times New Roman", serif

NOTE: use percentage font sizes or else old IE chokes
*/

.fc-icon:after {
  position: relative;
}

.fc-icon-left-single-arrow:after {
  content: "\02039";
  font-weight: bold;
  font-size: 200%;
  top: -7%;
}

.fc-icon-right-single-arrow:after {
  content: "\0203A";
  font-weight: bold;
  font-size: 200%;
  top: -7%;
}

.fc-icon-left-double-arrow:after {
  content: "\000AB";
  font-size: 160%;
  top: -7%;
}

.fc-icon-right-double-arrow:after {
  content: "\000BB";
  font-size: 160%;
  top: -7%;
}

.fc-icon-left-triangle:after {
  content: "\25C4";
  font-size: 125%;
  top: 3%;
}

.fc-icon-right-triangle:after {
  content: "\25BA";
  font-size: 125%;
  top: 3%;
}

.fc-icon-down-triangle:after {
  content: "\25BC";
  font-size: 125%;
  top: 2%;
}

.fc-icon-x:after {
  content: "\000D7";
  font-size: 200%;
  top: 6%;
}

/* Buttons (styled <button> tags, normalized to work cross-browser)
--------------------------------------------------------------------------------------------------*/

.fc button {
  border-width: 2px;
  font-weight: 400;
  font-size: 0.8571em;
  line-height: 1.35em;
  margin: 5px 1px;
  border: none;
  margin: 10px 1px;
  border-radius: 0.1875rem;
  padding: 11px 22px;
  cursor: pointer;
  -webkit-transition: all .2s ease-in-out;
  -o-transition: all .2s ease-in-out;
  transition: all .2s ease-in-out;
  outline: none;
}

.fc button::-moz-focus-inner {
  border: 0;
}

.fc button,
.fc button.btn-primary {
  background-color: #f96332;
  color: #FFFFFF;
}

.fc button:hover,
.fc button:focus,
.fc button:not(:disabled):not(.disabled):active,
.fc button:not(:disabled):not(.disabled).active,
.fc button:not(:disabled):not(.disabled):active:focus,
.fc button:not(:disabled):not(.disabled).active:focus,
.fc button:active:hover,
.fc button.active:hover,
.show>.fc button.dropdown-toggle,
.show>.fc button.dropdown-toggle:focus,
.show>.fc button.dropdown-toggle:hover,
.fc button.btn-primary:hover,
.fc button.btn-primary:focus,
.fc button.btn-primary:not(:disabled):not(.disabled):active,
.fc button.btn-primary:not(:disabled):not(.disabled).active,
.fc button.btn-primary:not(:disabled):not(.disabled):active:focus,
.fc button.btn-primary:not(:disabled):not(.disabled).active:focus,
.fc button.btn-primary:active:hover,
.fc button.btn-primary.active:hover,
.show>.fc button.btn-primary.dropdown-toggle,
.show>.fc button.btn-primary.dropdown-toggle:focus,
.show>.fc button.btn-primary.dropdown-toggle:hover {
  background-color: #fa7a50;
  color: #FFFFFF;
  box-shadow: none;
  border-color: #fa7a50;
}

.fc button:not([data-action]):not([class*="btn-outline-"]):hover,
.fc button.btn-primary:not([data-action]):not([class*="btn-outline-"]):hover {
  box-shadow: 0 3px 8px 0 rgba(0, 0, 0, 0.17);
}

.fc button.disabled,
.fc button.disabled:hover,
.fc button.disabled:focus,
.fc button.disabled.focus,
.fc button.disabled:active,
.fc button.disabled.active,
.fc button:disabled,
.fc button:disabled:hover,
.fc button:disabled:focus,
.fc button:disabled.focus,
.fc button:disabled:active,
.fc button:disabled.active,
.fc button[disabled],
.fc button[disabled]:hover,
.fc button[disabled]:focus,
.fc button[disabled].focus,
.fc button[disabled]:active,
.fc button[disabled].active,
fieldset[disabled] .fc button,
fieldset[disabled] .fc button:hover,
fieldset[disabled] .fc button:focus,
fieldset[disabled] .fc button.focus,
fieldset[disabled] .fc button:active,
fieldset[disabled] .fc button.active,
.fc button.btn-primary.disabled,
.fc button.btn-primary.disabled:hover,
.fc button.btn-primary.disabled:focus,
.fc button.btn-primary.disabled.focus,
.fc button.btn-primary.disabled:active,
.fc button.btn-primary.disabled.active,
.fc button.btn-primary:disabled,
.fc button.btn-primary:disabled:hover,
.fc button.btn-primary:disabled:focus,
.fc button.btn-primary:disabled.focus,
.fc button.btn-primary:disabled:active,
.fc button.btn-primary:disabled.active,
.fc button.btn-primary[disabled],
.fc button.btn-primary[disabled]:hover,
.fc button.btn-primary[disabled]:focus,
.fc button.btn-primary[disabled].focus,
.fc button.btn-primary[disabled]:active,
.fc button.btn-primary[disabled].active,
fieldset[disabled] .fc button.btn-primary,
fieldset[disabled] .fc button.btn-primary:hover,
fieldset[disabled] .fc button.btn-primary:focus,
fieldset[disabled] .fc button.btn-primary.focus,
fieldset[disabled] .fc button.btn-primary:active,
fieldset[disabled] .fc button.btn-primary.active {
  background-color: #f96332;
  border-color: #f96332;
}

.fc button.btn-link,
.fc button.btn-primary.btn-link {
  color: #f96332;
}

.fc button.btn-link:hover,
.fc button.btn-link:focus,
.fc button.btn-link:active,
.fc button.btn-primary.btn-link:hover,
.fc button.btn-primary.btn-link:focus,
.fc button.btn-primary.btn-link:active {
  background-color: transparent;
  color: #fa7a50;
  text-decoration: none;
  box-shadow: none;
}

.fc button[disabled],
.fc button[disabled]:focus,
.fc button[disabled]:hover {
  cursor: default;
  opacity: .5;
  pointer-events: none;
}

.fc-state-default {
  /* non-theme */
  border: 1px solid;
}

/*.fc-state-default.fc-corner-left { non-theme
	border-top-left-radius: 4px;
	border-bottom-left-radius: 4px;
}

.fc-state-default.fc-corner-right { /* non-theme
	border-top-right-radius: 4px;
	border-bottom-right-radius: 4px;
}*/

/* icons in buttons */

.fc button .fc-icon {
  /* non-theme */
  position: relative;
  top: -0.05em;
  /* seems to be a good adjustment across browsers */
  margin: 0 .2em;
  vertical-align: middle;
}

/*
  button states
  borrowed from twitter bootstrap (http://twitter.github.com/bootstrap/)
*/

.fc-state-hover,
.fc-state-down,
.fc-state-active,
.fc-state-disabled {
  color: #333333;
  background-color: #e6e6e6;
}

.fc-state-hover {
  color: #333333;
  text-decoration: none;
  background-position: 0 -15px;
  -webkit-transition: background-position 0.1s linear;
  -moz-transition: background-position 0.1s linear;
  -o-transition: background-position 0.1s linear;
  transition: background-position 0.1s linear;
}

.fc-state-down,
.fc-state-active {
  background-color: #cccccc;
  background-image: none;
}

.fc-state-disabled {
  cursor: default;
  background-image: none;
  opacity: 0.65;
  box-shadow: none;
}

/* Buttons Groups
--------------------------------------------------------------------------------------------------*/

.fc-button-group {
  display: inline-block;
}

/*
every button that is not first in a button group should scootch over one pixel and cover the
previous button's border...
*/

.fc .fc-button-group>* {
  /* extra precedence b/c buttons have margin set to zero */
  float: left;
  margin: 0 0 0 2px;
}

.fc .fc-button-group> :first-child {
  /* same */
  margin-left: 0;
}

/* Popover
--------------------------------------------------------------------------------------------------*/

.fc-popover {
  position: absolute;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
}

.fc-popover .fc-header {
  /* TODO: be more consistent with fc-head/fc-body */
  padding: 2px 4px;
}

.fc-popover .fc-header .fc-title {
  margin: 0 2px;
}

.fc-popover .fc-header .fc-close {
  cursor: pointer;
}

.fc-ltr .fc-popover .fc-header .fc-title,
.fc-rtl .fc-popover .fc-header .fc-close {
  float: left;
}

.fc-rtl .fc-popover .fc-header .fc-title,
.fc-ltr .fc-popover .fc-header .fc-close {
  float: right;
}

/* unthemed */

.fc-unthemed .fc-popover {
  border-width: 1px;
  border-style: solid;
}

.fc-unthemed .fc-popover .fc-header .fc-close {
  font-size: .9em;
  margin-top: 2px;
}

/* jqui themed */

.fc-popover>.ui-widget-header+.ui-widget-content {
  border-top: 0;
  /* where they meet, let the header have the border */
}

/* Misc Reusable Components
--------------------------------------------------------------------------------------------------*/

.fc-divider {
  border-style: solid;
  border-width: 1px;
}

hr.fc-divider {
  height: 0;
  margin: 0;
  padding: 0 0 2px;
  /* height is unreliable across browsers, so use padding */
  border-width: 1px 0;
}

.fc-clear {
  clear: both;
}

.fc-bg,
.fc-bgevent-skeleton,
.fc-highlight-skeleton,
.fc-helper-skeleton {
  /* these element should always cling to top-left/right corners */
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
}

.fc-bg {
  bottom: 0;
  /* strech bg to bottom edge */
}

.fc-bg table {
  height: 100%;
  /* strech bg to bottom edge */
}

/* Tables
--------------------------------------------------------------------------------------------------*/

.fc table {
  width: 100%;
  box-sizing: border-box;
  /* fix scrollbar issue in firefox */
  table-layout: fixed;
  border-collapse: collapse;
  border-spacing: 0;
  font-size: 1em;
  /* normalize cross-browser */
}

.fc th {
  text-align: center;
}

.fc th,
.fc td {
  border-style: solid;
  border-width: 1px;
  padding: 0;
  vertical-align: top;
}

.fc td.fc-today {
  border-style: double;
  /* overcome neighboring borders */
}

/* Internal Nav Links
--------------------------------------------------------------------------------------------------*/

a[data-goto] {
  cursor: pointer;
}

a[data-goto]:hover {
  text-decoration: underline;
}

/* Fake Table Rows
--------------------------------------------------------------------------------------------------*/

.fc .fc-row {
  /* extra precedence to overcome themes w/ .ui-widget-content forcing a 1px border */
  /* no visible border by default. but make available if need be (scrollbar width compensation) */
  border-style: solid;
  border-width: 0;
}

.fc-row table {
  /* don't put left/right border on anything within a fake row.
	   the outer tbody will worry about this */
  border-left: 0 hidden transparent;
  border-right: 0 hidden transparent;
  /* no bottom borders on rows */
  border-bottom: 0 hidden transparent;
}

.fc-row:first-child table {
  border-top: 0 hidden transparent;
  /* no top border on first row */
}

/* Day Row (used within the header and the DayGrid)
--------------------------------------------------------------------------------------------------*/

.fc-row {
  position: relative;
}

.fc-row .fc-bg {
  z-index: 1;
}

/* highlighting cells & background event skeleton */

.fc-row .fc-bgevent-skeleton,
.fc-row .fc-highlight-skeleton {
  bottom: 0;
  /* stretch skeleton to bottom of row */
}

.fc-row .fc-bgevent-skeleton table,
.fc-row .fc-highlight-skeleton table {
  height: 100%;
  /* stretch skeleton to bottom of row */
}

.fc-row .fc-highlight-skeleton td,
.fc-row .fc-bgevent-skeleton td {
  border-color: transparent;
}

.fc-row .fc-bgevent-skeleton {
  z-index: 2;
}

.fc-row .fc-highlight-skeleton {
  z-index: 3;
}

/*
row content (which contains day/week numbers and events) as well as "helper" (which contains
temporary rendered events).
*/

.fc-row .fc-content-skeleton {
  position: relative;
  z-index: 4;
  padding-bottom: 2px;
  /* matches the space above the events */
}

.fc-row .fc-helper-skeleton {
  z-index: 5;
}

.fc-row .fc-content-skeleton td,
.fc-row .fc-helper-skeleton td {
  /* see-through to the background below */
  background: none;
  /* in case <td>s are globally styled */
  border-color: transparent;
  /* don't put a border between events and/or the day number */
  border-bottom: 0;
}

.fc-row .fc-content-skeleton tbody td,
.fc-row .fc-helper-skeleton tbody td {
  /* don't put a border between event cells */
  border-top: 0;
}

/* Scrolling Container
--------------------------------------------------------------------------------------------------*/

.fc-scroller {
  -webkit-overflow-scrolling: touch;
}

/* TODO: move to agenda/basic */

.fc-scroller>.fc-day-grid,
.fc-scroller>.fc-time-grid {
  position: relative;
  /* re-scope all positions */
  width: 100%;
  /* hack to force re-sizing this inner element when scrollbars appear/disappear */
}

/* Global Event Styles
--------------------------------------------------------------------------------------------------*/

.fc-event {
  position: relative;
  /* for resize handle and other inner positioning */
  display: block;
  /* make the <a> tag block */
  font-size: .85em;
  line-height: 1.3;
  border-radius: 2px;
  background-color: #18ce0f;
  /* default BACKGROUND color */
  font-weight: normal;
  /* undo jqui's ui-widget-header bold */
}

.fc-event.event-azure {
  background-color: #2CA8FF;
}

.fc-event.event-green {
  background-color: #18ce0f;
}

.fc-event.event-orange {
  background-color: #FFB236;
}

.fc-event.event-red {
  background-color: #FF3636;
}

.fc-event.event-default {
  background-color: #888;
}

.fc-event-dot {
  background-color: #3a87ad;
  /* default BACKGROUND color */
}

/* overpower some of bootstrap's and jqui's styles on <a> tags */

.fc-event,
.fc-event:hover,
.ui-widget .fc-event {
  color: #FFFFFF;
  /* default TEXT color */
  text-decoration: none;
  /* if <a> has an href */
}

.fc-event[href],
.fc-event.fc-draggable {
  cursor: pointer;
  /* give events with links and draggable events a hand mouse pointer */
}

.fc-not-allowed,
.fc-not-allowed .fc-event {
  /* to override an event's custom cursor */
  cursor: not-allowed;
}

.fc-event .fc-bg {
  /* the generic .fc-bg already does position */
  z-index: 1;
  background: #FFFFFF;
  opacity: .25;
}

.fc-event .fc-content {
  position: relative;
  z-index: 2;
}

/* resizer (cursor AND touch devices) */

.fc-event .fc-resizer {
  position: absolute;
  z-index: 4;
}

/* resizer (touch devices) */

.fc-event .fc-resizer {
  display: none;
}

.fc-event.fc-allow-mouse-resize .fc-resizer,
.fc-event.fc-selected .fc-resizer {
  /* only show when hovering or selected (with touch) */
  display: block;
}

/* hit area */

.fc-event.fc-selected .fc-resizer:before {
  /* 40x40 touch area */
  content: "";
  position: absolute;
  z-index: 9999;
  /* user of this util can scope within a lower z-index */
  top: 50%;
  left: 50%;
  width: 40px;
  height: 40px;
  margin-left: -20px;
  margin-top: -20px;
}

/* Event Selection (only for touch devices)
--------------------------------------------------------------------------------------------------*/

.fc-event.fc-selected {
  z-index: 9999 !important;
  /* overcomes inline z-index */
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
}

.fc-event.fc-selected.fc-dragging {
  box-shadow: 0 2px 7px rgba(0, 0, 0, 0.3);
}

/* Horizontal Events
--------------------------------------------------------------------------------------------------*/

/* bigger touch area when selected */

.fc-h-event.fc-selected:before {
  content: "";
  position: absolute;
  z-index: 3;
  /* below resizers */
  top: -10px;
  bottom: -10px;
  left: 0;
  right: 0;
}

/* events that are continuing to/from another week. kill rounded corners and butt up against edge */

.fc-ltr .fc-h-event.fc-not-start,
.fc-rtl .fc-h-event.fc-not-end {
  margin-left: 0;
  border-left-width: 0;
  padding-left: 1px;
  /* replace the border with padding */
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}

.fc-ltr .fc-h-event.fc-not-end,
.fc-rtl .fc-h-event.fc-not-start {
  margin-right: 0;
  border-right-width: 0;
  padding-right: 1px;
  /* replace the border with padding */
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}

/* resizer (cursor AND touch devices) */

/* left resizer  */

.fc-ltr .fc-h-event .fc-start-resizer,
.fc-rtl .fc-h-event .fc-end-resizer {
  cursor: w-resize;
  left: -1px;
  /* overcome border */
}

/* right resizer */

.fc-ltr .fc-h-event .fc-end-resizer,
.fc-rtl .fc-h-event .fc-start-resizer {
  cursor: e-resize;
  right: -1px;
  /* overcome border */
}

/* resizer (mouse devices) */

.fc-h-event.fc-allow-mouse-resize .fc-resizer {
  width: 7px;
  top: -1px;
  /* overcome top border */
  bottom: -1px;
  /* overcome bottom border */
}

/* resizer (touch devices) */

.fc-h-event.fc-selected .fc-resizer {
  /* 8x8 little dot */
  border-radius: 4px;
  border-width: 1px;
  width: 6px;
  height: 6px;
  border-style: solid;
  border-color: inherit;
  background: #fff;
  /* vertically center */
  top: 50%;
  margin-top: -4px;
}

/* left resizer  */

.fc-ltr .fc-h-event.fc-selected .fc-start-resizer,
.fc-rtl .fc-h-event.fc-selected .fc-end-resizer {
  margin-left: -4px;
  /* centers the 8x8 dot on the left edge */
}

/* right resizer */

.fc-ltr .fc-h-event.fc-selected .fc-end-resizer,
.fc-rtl .fc-h-event.fc-selected .fc-start-resizer {
  margin-right: -4px;
  /* centers the 8x8 dot on the right edge */
}

/* DayGrid events
----------------------------------------------------------------------------------------------------
We use the full "fc-day-grid-event" class instead of using descendants because the event won't
be a descendant of the grid when it is being dragged.
*/

.fc-day-grid-event {
  margin: 2px 5px 0;
  /* spacing between events and edges */
  padding: 0 1px;
}

tr:first-child>td>.fc-day-grid-event {
  margin-top: 2px;
  /* a little bit more space before the first event */
}

.fc-day-grid-event.fc-selected:after {
  content: "";
  position: absolute;
  z-index: 1;
  /* same z-index as fc-bg, behind text */
  /* overcome the borders */
  top: -1px;
  right: -1px;
  bottom: -1px;
  left: -1px;
  /* darkening effect */
  background: #000;
  opacity: .25;
}

.fc-day-grid-event .fc-content {
  /* force events to be one-line tall */
  white-space: nowrap;
  overflow: hidden;
  color: white;
  padding: 0 5px;
}

.fc-day-grid-event .fc-time {
  font-weight: bold;
}

/* resizer (cursor devices) */

/* left resizer  */

.fc-ltr .fc-day-grid-event.fc-allow-mouse-resize .fc-start-resizer,
.fc-rtl .fc-day-grid-event.fc-allow-mouse-resize .fc-end-resizer {
  margin-left: -2px;
  /* to the day cell's edge */
}

/* right resizer */

.fc-ltr .fc-day-grid-event.fc-allow-mouse-resize .fc-end-resizer,
.fc-rtl .fc-day-grid-event.fc-allow-mouse-resize .fc-start-resizer {
  margin-right: -2px;
  /* to the day cell's edge */
}

/* Event Limiting
--------------------------------------------------------------------------------------------------*/

/* "more" link that represents hidden events */

a.fc-more {
  margin: 1px 3px;
  font-size: .85em;
  cursor: pointer;
  text-decoration: none;
}

a.fc-more:hover {
  text-decoration: underline;
}

.fc-limited {
  /* rows and cells that are hidden because of a "more" link */
  display: none;
}

/* popover that appears when "more" link is clicked */

.fc-day-grid .fc-row {
  z-index: 1;
  /* make the "more" popover one higher than this */
}

.fc-more-popover {
  z-index: 2;
  width: 220px;
}

.fc-more-popover .fc-event-container {
  padding: 10px;
}

/* Now Indicator
--------------------------------------------------------------------------------------------------*/

.fc-now-indicator {
  position: absolute;
  border: 0 solid red;
}

/* Utilities
--------------------------------------------------------------------------------------------------*/

.fc-unselectable {
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  -webkit-touch-callout: none;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}

/* Toolbar
--------------------------------------------------------------------------------------------------*/

.fc-toolbar {
  text-align: center;
  margin-bottom: 1em;
}

.fc-toolbar .fc-left {
  float: left;
}

.fc-toolbar .fc-right {
  float: right;
}

.fc-toolbar .fc-center {
  display: inline-block;
}

/* the things within each left/right/center section */

.fc .fc-toolbar>*>* {
  /* extra precedence to override button border margins */
  float: left;
  margin-left: .75em;
}

/* the first thing within each left/center/right section */

.fc .fc-toolbar>*> :first-child {
  /* extra precedence to override button border margins */
  margin-left: 0;
}

/* title text */

.fc-toolbar h2 {
  margin: 0;
  font-size: 1.8em;
}

/* button layering (for border precedence) */

.fc-toolbar button {
  position: relative;
}

.fc-toolbar .fc-state-hover,
.fc-toolbar .ui-state-hover {
  z-index: 2;
}

.fc-toolbar .fc-state-down {
  z-index: 3;
}

.fc-toolbar .fc-state-active,
.fc-toolbar .ui-state-active {
  z-index: 4;
}

.fc-toolbar button:focus {
  z-index: 5;
}

/* View Structure
--------------------------------------------------------------------------------------------------*/

/* undo twitter bootstrap's box-sizing rules. normalizes positioning techniques */

/* don't do this for the toolbar because we'll want bootstrap to style those buttons as some pt */

.fc-view-container *,
.fc-view-container *:before,
.fc-view-container *:after {
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
}

.fc-view,
.fc-view>table {
  /* so dragged elements can be above the view's main element */
  position: relative;
  z-index: 1;
}

/* BasicView
--------------------------------------------------------------------------------------------------*/

/* day row structure */

.fc-basicWeek-view .fc-content-skeleton,
.fc-basicDay-view .fc-content-skeleton {
  /* there may be week numbers in these views, so no padding-top */
  padding-bottom: 1em;
  /* ensure a space at bottom of cell for user selecting/clicking */
}

.fc-basic-view .fc-body .fc-row {
  min-height: 4em;
  /* ensure that all rows are at least this tall */
}

/* a "rigid" row will take up a constant amount of height because content-skeleton is absolute */

.fc-row.fc-rigid {
  overflow: hidden;
}

.fc-row.fc-rigid .fc-content-skeleton {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
}

/* week and day number styling */

.fc-day-top.fc-other-month {
  opacity: 0.3;
}

.fc-basic-view .fc-week-number,
.fc-basic-view .fc-day-number {
  padding: 2px;
}

.fc-basic-view th.fc-week-number,
.fc-basic-view th.fc-day-number {
  padding: 0 2px;
  /* column headers can't have as much v space */
}

.fc-ltr .fc-basic-view .fc-day-top .fc-day-number {
  float: right;
}

.fc-rtl .fc-basic-view .fc-day-top .fc-day-number {
  float: left;
}

.fc-ltr .fc-basic-view .fc-day-top .fc-week-number {
  float: left;
  border-radius: 0 0 3px 0;
}

.fc-rtl .fc-basic-view .fc-day-top .fc-week-number {
  float: right;
  border-radius: 0 0 0 3px;
}

.fc-basic-view .fc-day-top .fc-week-number {
  min-width: 1.5em;
  text-align: center;
  background-color: #f2f2f2;
  color: #808080;
}

/* when week/day number have own column */

.fc-basic-view td.fc-week-number {
  text-align: center;
}

.fc-basic-view td.fc-week-number>* {
  /* work around the way we do column resizing and ensure a minimum width */
  display: inline-block;
  min-width: 1.25em;
}

/* AgendaView all-day area
--------------------------------------------------------------------------------------------------*/

.fc-agenda-view .fc-day-grid {
  position: relative;
  z-index: 2;
  /* so the "more.." popover will be over the time grid */
}

.fc-agenda-view .fc-day-grid .fc-row {
  min-height: 3em;
  /* all-day section will never get shorter than this */
}

.fc-agenda-view .fc-day-grid .fc-row .fc-content-skeleton {
  padding-bottom: 1em;
  /* give space underneath events for clicking/selecting days */
}

/* TimeGrid axis running down the side (for both the all-day area and the slot area)
--------------------------------------------------------------------------------------------------*/

.fc .fc-axis {
  /* .fc to overcome default cell styles */
  vertical-align: middle;
  padding: 0 4px;
  white-space: nowrap;
}

.fc-ltr .fc-axis {
  text-align: right;
}

.fc-rtl .fc-axis {
  text-align: left;
}

.ui-widget td.fc-axis {
  font-weight: normal;
  /* overcome jqui theme making it bold */
}

/* TimeGrid Structure
--------------------------------------------------------------------------------------------------*/

.fc-time-grid-container,
.fc-time-grid {
  /* so slats/bg/content/etc positions get scoped within here */
  position: relative;
  z-index: 1;
}

.fc-time-grid {
  min-height: 100%;
  /* so if height setting is 'auto', .fc-bg stretches to fill height */
}

.fc-time-grid table {
  /* don't put outer borders on slats/bg/content/etc */
  border: 0 hidden transparent;
}

.fc-time-grid>.fc-bg {
  z-index: 1;
}

.fc-time-grid .fc-slats,
.fc-time-grid>hr {
  /* the <hr> AgendaView injects when grid is shorter than scroller */
  position: relative;
  z-index: 2;
}

.fc-time-grid .fc-content-col {
  position: relative;
  /* because now-indicator lives directly inside */
}

.fc-time-grid .fc-content-skeleton {
  position: absolute;
  z-index: 3;
  top: 0;
  left: 0;
  right: 0;
}

/* divs within a cell within the fc-content-skeleton */

.fc-time-grid .fc-business-container {
  position: relative;
  z-index: 1;
}

.fc-time-grid .fc-bgevent-container {
  position: relative;
  z-index: 2;
}

.fc-time-grid .fc-highlight-container {
  position: relative;
  z-index: 3;
}

.fc-time-grid .fc-event-container {
  position: relative;
  z-index: 4;
}

.fc-time-grid .fc-now-indicator-line {
  z-index: 5;
}

.fc-time-grid .fc-helper-container {
  /* also is fc-event-container */
  position: relative;
  z-index: 6;
}

/* TimeGrid Slats (lines that run horizontally)
--------------------------------------------------------------------------------------------------*/

.fc-time-grid .fc-slats td {
  height: 1.5em;
  border-bottom: 0;
  /* each cell is responsible for its top border */
}

.fc-time-grid .fc-slats .fc-minor td {
  border-top-style: dotted;
}

.fc-time-grid .fc-slats .ui-widget-content {
  /* for jqui theme */
  background: none;
  /* see through to fc-bg */
}

/* TimeGrid Highlighting Slots
--------------------------------------------------------------------------------------------------*/

.fc-time-grid .fc-highlight-container {
  /* a div within a cell within the fc-highlight-skeleton */
  position: relative;
  /* scopes the left/right of the fc-highlight to be in the column */
}

.fc-time-grid .fc-highlight {
  position: absolute;
  left: 0;
  right: 0;
  /* top and bottom will be in by JS */
}

/* TimeGrid Event Containment
--------------------------------------------------------------------------------------------------*/

.fc-ltr .fc-time-grid .fc-event-container {
  /* space on the sides of events for LTR (default) */
  margin: 0 2.5% 0 2px;
}

.fc-rtl .fc-time-grid .fc-event-container {
  /* space on the sides of events for RTL */
  margin: 0 2px 0 2.5%;
}

.fc-time-grid .fc-event,
.fc-time-grid .fc-bgevent {
  position: absolute;
  z-index: 1;
  /* scope inner z-index's */
}

.fc-time-grid .fc-bgevent {
  /* background events always span full width */
  left: 0;
  right: 0;
}

/* Generic Vertical Event
--------------------------------------------------------------------------------------------------*/

.fc-v-event.fc-not-start {
  /* events that are continuing from another day */
  /* replace space made by the top border with padding */
  border-top-width: 0;
  padding-top: 1px;
  /* remove top rounded corners */
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

.fc-v-event.fc-not-end {
  /* replace space made by the top border with padding */
  border-bottom-width: 0;
  padding-bottom: 1px;
  /* remove bottom rounded corners */
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0;
}

/* TimeGrid Event Styling
----------------------------------------------------------------------------------------------------
We use the full "fc-time-grid-event" class instead of using descendants because the event won't
be a descendant of the grid when it is being dragged.
*/

.fc-time-grid-event {
  overflow: hidden;
  /* don't let the bg flow over rounded corners */
}

.fc-time-grid-event.fc-selected {
  /* need to allow touch resizers to extend outside event's bounding box */
  /* common fc-selected styles hide the fc-bg, so don't need this anyway */
  overflow: visible;
}

.fc-time-grid-event.fc-selected .fc-bg {
  display: none;
  /* hide semi-white background, to appear darker */
}

.fc-time-grid-event .fc-content {
  overflow: hidden;
  /* for when .fc-selected */
}

.fc-time-grid-event .fc-time,
.fc-time-grid-event .fc-title {
  padding: 0 1px;
}

.fc-time-grid-event .fc-time {
  font-size: .85em;
  white-space: nowrap;
}

/* short mode, where time and title are on the same line */

.fc-time-grid-event.fc-short .fc-content {
  /* don't wrap to second line (now that contents will be inline) */
  white-space: nowrap;
}

.fc-time-grid-event.fc-short .fc-time,
.fc-time-grid-event.fc-short .fc-title {
  /* put the time and title on the same line */
  display: inline-block;
  vertical-align: top;
}

.fc-time-grid-event.fc-short .fc-time span {
  display: none;
  /* don't display the full time text... */
}

.fc-time-grid-event.fc-short .fc-time:before {
  content: attr(data-start);
  /* ...instead, display only the start time */
}

.fc-time-grid-event.fc-short .fc-time:after {
  content: "\000A0-\000A0";
  /* seperate with a dash, wrapped in nbsp's */
}

.fc-time-grid-event.fc-short .fc-title {
  font-size: .85em;
  /* make the title text the same size as the time */
  padding: 0;
  /* undo padding from above */
}

/* resizer (cursor device) */

.fc-time-grid-event.fc-allow-mouse-resize .fc-resizer {
  left: 0;
  right: 0;
  bottom: 0;
  height: 8px;
  overflow: hidden;
  line-height: 8px;
  font-size: 11px;
  font-family: monospace;
  text-align: center;
  cursor: s-resize;
}

.fc-time-grid-event.fc-allow-mouse-resize .fc-resizer:after {
  content: "=";
}

/* resizer (touch device) */

.fc-time-grid-event.fc-selected .fc-resizer {
  /* 10x10 dot */
  border-radius: 5px;
  border-width: 1px;
  width: 8px;
  height: 8px;
  border-style: solid;
  border-color: inherit;
  background: #fff;
  /* horizontally center */
  left: 50%;
  margin-left: -5px;
  /* center on the bottom edge */
  bottom: -5px;
}

/* Now Indicator
--------------------------------------------------------------------------------------------------*/

.fc-time-grid .fc-now-indicator-line {
  border-top-width: 1px;
  left: 0;
  right: 0;
}

/* arrow on axis */

.fc-time-grid .fc-now-indicator-arrow {
  margin-top: -5px;
  /* vertically center on top coordinate */
}

.fc-ltr .fc-time-grid .fc-now-indicator-arrow {
  left: 0;
  /* triangle pointing right... */
  border-width: 5px 0 5px 6px;
  border-top-color: transparent;
  border-bottom-color: transparent;
}

.fc-rtl .fc-time-grid .fc-now-indicator-arrow {
  right: 0;
  /* triangle pointing left... */
  border-width: 5px 6px 5px 0;
  border-top-color: transparent;
  border-bottom-color: transparent;
}

/* List View
--------------------------------------------------------------------------------------------------*/

/* possibly reusable */

.fc-event-dot {
  display: inline-block;
  width: 10px;
  height: 10px;
  border-radius: 5px;
}

/* view wrapper */

.fc-rtl .fc-list-view {
  direction: rtl;
  /* unlike core views, leverage browser RTL */
}

.fc-list-view {
  border-width: 1px;
  border-style: solid;
}

/* table resets */

.fc .fc-list-table {
  table-layout: auto;
  /* for shrinkwrapping cell content */
}

.fc-list-table td {
  border-width: 1px 0 0;
  padding: 8px 14px;
}

.fc-list-table tr:first-child td {
  border-top-width: 0;
}

/* day headings with the list */

.fc-list-heading {
  border-bottom-width: 1px;
}

.fc-list-heading td {
  font-weight: bold;
}

.fc-ltr .fc-list-heading-main {
  float: left;
}

.fc-ltr .fc-list-heading-alt {
  float: right;
}

.fc-rtl .fc-list-heading-main {
  float: right;
}

.fc-rtl .fc-list-heading-alt {
  float: left;
}

/* event list items */

.fc-list-item.fc-has-url {
  cursor: pointer;
  /* whole row will be clickable */
}

.fc-list-item:hover td {
  background-color: #f5f5f5;
}

.fc-list-item-marker,
.fc-list-item-time {
  white-space: nowrap;
  width: 1px;
}

/* make the dot closer to the event title */

.fc-ltr .fc-list-item-marker {
  padding-right: 0;
}

.fc-rtl .fc-list-item-marker {
  padding-left: 0;
}

.fc-list-item-title a {
  /* every event title cell has an <a> tag */
  text-decoration: none;
  color: inherit;
}

.fc-list-item-title a[href]:hover {
  /* hover effect only on titles with hrefs */
  text-decoration: underline;
}

/* message when no events */

.fc-list-empty-wrap2 {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
}

.fc-list-empty-wrap1 {
  width: 100%;
  height: 100%;
  display: table;
}

.fc-list-empty {
  display: table-cell;
  vertical-align: middle;
  text-align: center;
}

.fc-unthemed .fc-list-empty {
  /* theme will provide own background */
  background-color: #eee;
}

.card-calendar table td {
  text-align: right;
}

.card-calendar .content {
  padding: 0 !important;
}

.card-calendar .fc td:first-child {
  border-left: 0;
}

.card-calendar .fc td:last-child {
  border-right: 0;
}

.card-calendar .fc .fc-day-header:last-child {
  padding-right: 15px;
}

.card-calendar .fc .fc-widget-header {
  border: 0;
}

.card-calendar .fc .fc-widget-header .fc-title {
  color: #FFFFFF;
}

.card-calendar .fc th {
  text-align: right;
  color: #888;
}

.card-calendar .title {
  margin-top: -9px;
}

.card-calendar .fc .fc-row:last-child td {
  border-bottom: 0;
}

.card-calendar .fc .fc-body .fc-widget-content {
  border-bottom: 0;
}

.login-page .card-login {
  border-radius: 0.25rem;
  padding-bottom: 0.7rem;
}

.login-page .card-login .btn-wd {
  min-width: 180px;
}

.login-page .card-login .logo-container {
  width: 65px;
  margin: 0 auto;
  margin-bottom: 55px;
}

.login-page .card-login .logo-container img {
  width: 100%;
}

.login-page .card-login .input-group:last-child {
  margin-bottom: 40px;
}

.login-page .card-login.card-plain .form-control::-moz-placeholder {
  color: #ebebeb;
  opacity: 1;
  filter: alpha(opacity=100);
}

.login-page .card-login.card-plain .form-control:-moz-placeholder {
  color: #ebebeb;
  opacity: 1;
  filter: alpha(opacity=100);
}

.login-page .card-login.card-plain .form-control::-webkit-input-placeholder {
  color: #ebebeb;
  opacity: 1;
  filter: alpha(opacity=100);
}

.login-page .card-login.card-plain .form-control:-ms-input-placeholder {
  color: #ebebeb;
  opacity: 1;
  filter: alpha(opacity=100);
}

.login-page .card-login.card-plain .form-control {
  border-color: rgba(255, 255, 255, 0.5);
  color: #FFFFFF;
}

.login-page .card-login.card-plain .form-control:focus {
  border-color: #FFFFFF;
  background-color: transparent;
  color: #FFFFFF;
}

.login-page .card-login.card-plain .has-success:after,
.login-page .card-login.card-plain .has-danger:after {
  color: #FFFFFF;
}

.login-page .card-login.card-plain .has-danger .form-control {
  background-color: transparent;
}

.login-page .card-login.card-plain .input-group-prepend .input-group-text,
.login-page .card-login.card-plain .input-group-append .input-group-text {
  background-color: transparent;
  border-color: rgba(255, 255, 255, 0.5);
  color: #FFFFFF;
}

.login-page .card-login.card-plain .input-group-focus .input-group-prepend .input-group-text,
.login-page .card-login.card-plain .input-group-focus .input-group-append .input-group-text {
  background-color: transparent;
  border-color: #FFFFFF;
  color: #FFFFFF;
}

.login-page .card-login.card-plain .form-group.no-border .form-control,
.login-page .card-login.card-plain .input-group.no-border .form-control {
  background-color: rgba(255, 255, 255, 0.1);
  color: #FFFFFF;
}

.login-page .card-login.card-plain .form-group.no-border .form-control:focus,
.login-page .card-login.card-plain .form-group.no-border .form-control:active,
.login-page .card-login.card-plain .form-group.no-border .form-control:active,
.login-page .card-login.card-plain .input-group.no-border .form-control:focus,
.login-page .card-login.card-plain .input-group.no-border .form-control:active,
.login-page .card-login.card-plain .input-group.no-border .form-control:active {
  background-color: rgba(255, 255, 255, 0.2);
  color: #FFFFFF;
}

.login-page .card-login.card-plain .form-group.no-border .form-control+.input-group-prepend .input-group-text,
.login-page .card-login.card-plain .form-group.no-border .form-control+.input-group-append .input-group-text,
.login-page .card-login.card-plain .input-group.no-border .form-control+.input-group-prepend .input-group-text,
.login-page .card-login.card-plain .input-group.no-border .form-control+.input-group-append .input-group-text {
  background-color: rgba(255, 255, 255, 0.1);
}

.login-page .card-login.card-plain .form-group.no-border .form-control+.input-group-prepend .input-group-text:focus,
.login-page .card-login.card-plain .form-group.no-border .form-control+.input-group-prepend .input-group-text:active,
.login-page .card-login.card-plain .form-group.no-border .form-control+.input-group-prepend .input-group-text:active,
.login-page .card-login.card-plain .form-group.no-border .form-control+.input-group-append .input-group-text:focus,
.login-page .card-login.card-plain .form-group.no-border .form-control+.input-group-append .input-group-text:active,
.login-page .card-login.card-plain .form-group.no-border .form-control+.input-group-append .input-group-text:active,
.login-page .card-login.card-plain .input-group.no-border .form-control+.input-group-prepend .input-group-text:focus,
.login-page .card-login.card-plain .input-group.no-border .form-control+.input-group-prepend .input-group-text:active,
.login-page .card-login.card-plain .input-group.no-border .form-control+.input-group-prepend .input-group-text:active,
.login-page .card-login.card-plain .input-group.no-border .form-control+.input-group-append .input-group-text:focus,
.login-page .card-login.card-plain .input-group.no-border .form-control+.input-group-append .input-group-text:active,
.login-page .card-login.card-plain .input-group.no-border .form-control+.input-group-append .input-group-text:active {
  background-color: rgba(255, 255, 255, 0.2);
  color: #FFFFFF;
}

.login-page .card-login.card-plain .form-group.no-border .form-control:focus+.input-group-prepend .input-group-text,
.login-page .card-login.card-plain .form-group.no-border .form-control:focus+.input-group-append .input-group-text,
.login-page .card-login.card-plain .input-group.no-border .form-control:focus+.input-group-prepend .input-group-text,
.login-page .card-login.card-plain .input-group.no-border .form-control:focus+.input-group-append .input-group-text {
  background-color: rgba(255, 255, 255, 0.2);
  color: #FFFFFF;
}

.login-page .card-login.card-plain .form-group.no-border .input-group-prepend .input-group-text,
.login-page .card-login.card-plain .form-group.no-border .input-group-append .input-group-text,
.login-page .card-login.card-plain .input-group.no-border .input-group-prepend .input-group-text,
.login-page .card-login.card-plain .input-group.no-border .input-group-append .input-group-text {
  background-color: rgba(255, 255, 255, 0.1);
  border: none;
  color: #FFFFFF;
}

.login-page .card-login.card-plain .form-group.no-border.input-group-focus .input-group-prepend .input-group-text,
.login-page .card-login.card-plain .form-group.no-border.input-group-focus .input-group-append .input-group-text,
.login-page .card-login.card-plain .input-group.no-border.input-group-focus .input-group-prepend .input-group-text,
.login-page .card-login.card-plain .input-group.no-border.input-group-focus .input-group-append .input-group-text {
  background-color: rgba(255, 255, 255, 0.2);
  color: #FFFFFF;
}

.login-page .card-login.card-plain .input-group-addon,
.login-page .card-login.card-plain .form-group.no-border .input-group-addon,
.login-page .card-login.card-plain .input-group.no-border .input-group-addon {
  color: rgba(255, 255, 255, 0.8);
}

.login-page .link {
  font-size: 10px;
  color: #FFFFFF;
  text-decoration: none;
}

[filter-color="primary"] {
  background: rgba(44, 44, 44, 0.2);
  /* For browsers that do not support gradients */
  background: -webkit-linear-gradient(90deg, rgba(44, 44, 44, 0.2), rgba(249, 99, 50, 0.6));
  /* For Safari 5.1 to 6.0 */
  background: -o-linear-gradient(90deg, rgba(44, 44, 44, 0.2), rgba(249, 99, 50, 0.6));
  /* For Opera 11.1 to 12.0 */
  background: -moz-linear-gradient(90deg, rgba(44, 44, 44, 0.2), rgba(249, 99, 50, 0.6));
  /* For Firefox 3.6 to 15 */
  background: linear-gradient(0deg, rgba(44, 44, 44, 0.2), rgba(249, 99, 50, 0.6));
  /* Standard syntax */
}

[filter-color="orange"] {
  background: rgba(44, 44, 44, 0.2);
  /* For browsers that do not support gradients */
  background: -webkit-linear-gradient(90deg, rgba(44, 44, 44, 0.2), rgba(255, 178, 54, 0.6));
  /* For Safari 5.1 to 6.0 */
  background: -o-linear-gradient(90deg, rgba(44, 44, 44, 0.2), rgba(255, 178, 54, 0.6));
  /* For Opera 11.1 to 12.0 */
  background: -moz-linear-gradient(90deg, rgba(44, 44, 44, 0.2), rgba(255, 178, 54, 0.6));
  /* For Firefox 3.6 to 15 */
  background: linear-gradient(0deg, rgba(44, 44, 44, 0.2), rgba(255, 178, 54, 0.6));
  /* Standard syntax */
}

[filter-color="green"] {
  background: rgba(44, 44, 44, 0.2);
  /* For browsers that do not support gradients */
  background: -webkit-linear-gradient(90deg, rgba(44, 44, 44, 0.2), rgba(24, 206, 15, 0.6));
  /* For Safari 5.1 to 6.0 */
  background: -o-linear-gradient(90deg, rgba(44, 44, 44, 0.2), rgba(24, 206, 15, 0.6));
  /* For Opera 11.1 to 12.0 */
  background: -moz-linear-gradient(90deg, rgba(44, 44, 44, 0.2), rgba(24, 206, 15, 0.6));
  /* For Firefox 3.6 to 15 */
  background: linear-gradient(0deg, rgba(44, 44, 44, 0.2), rgba(24, 206, 15, 0.6));
  /* Standard syntax */
}

[filter-color="red"] {
  background: rgba(44, 44, 44, 0.2);
  /* For browsers that do not support gradients */
  background: -webkit-linear-gradient(90deg, rgba(44, 44, 44, 0.2), rgba(255, 54, 54, 0.6));
  /* For Safari 5.1 to 6.0 */
  background: -o-linear-gradient(90deg, rgba(44, 44, 44, 0.2), rgba(255, 54, 54, 0.6));
  /* For Opera 11.1 to 12.0 */
  background: -moz-linear-gradient(90deg, rgba(44, 44, 44, 0.2), rgba(255, 54, 54, 0.6));
  /* For Firefox 3.6 to 15 */
  background: linear-gradient(0deg, rgba(44, 44, 44, 0.2), rgba(255, 54, 54, 0.6));
  /* Standard syntax */
}

[filter-color="blue"] {
  background: rgba(44, 44, 44, 0.2);
  /* For browsers that do not support gradients */
  background: -webkit-linear-gradient(90deg, rgba(44, 44, 44, 0.2), rgba(44, 168, 255, 0.6));
  /* For Safari 5.1 to 6.0 */
  background: -o-linear-gradient(90deg, rgba(44, 44, 44, 0.2), rgba(44, 168, 255, 0.6));
  /* For Opera 11.1 to 12.0 */
  background: -moz-linear-gradient(90deg, rgba(44, 44, 44, 0.2), rgba(44, 168, 255, 0.6));
  /* For Firefox 3.6 to 15 */
  background: linear-gradient(0deg, rgba(44, 44, 44, 0.2), rgba(44, 168, 255, 0.6));
  /* Standard syntax */
}

.full-page {
  min-height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
}

.full-page>.content,
.full-page>.footer {
  position: relative;
  z-index: 4;
}

.full-page.section-image {
  position: initial;
}

.full-page>.content {
  padding-bottom: 150px;
  padding-top: 150px;
  width: 100%;
}

.full-page .footer {
  position: absolute;
  width: 100%;
  bottom: 0;
}

.full-page .footer .container {
  color: #FFFFFF;
}

.full-page .full-page-background {
  position: absolute;
  z-index: -1;
  height: 100%;
  width: 100%;
  display: block;
  top: 0;
  left: 0;
  background-size: cover;
  background-position: center center;
}

.full-page:after {
  position: absolute;
  z-index: 1;
  width: 100%;
  height: 100%;
  display: block;
  left: 0;
  top: 0;
  content: "";
  background-color: rgba(0, 0, 0, 0.6);
}

.full-page.pricing-page .description {
  margin-bottom: 65px;
}

.full-page.register-page .info-horizontal {
  padding: 0px 0px 20px;
}

.full-page.register-page .info-horizontal {
  text-align: left !important;
}

.full-page.register-page .info-horizontal .icon {
  margin-top: 0;
}

.full-page.register-page .info-horizontal .icon>i {
  font-size: 2em;
}

.full-page.register-page .info-horizontal .icon.icon-circle {
  width: 65px;
  height: 65px;
  max-width: 65px;
  margin-top: 8px;
}

.full-page.register-page .info-horizontal .icon.icon-circle i {
  display: table;
  margin: 0 auto;
  line-height: 3.5;
  font-size: 1.9em;
}

.full-page.register-page .info-horizontal .description {
  overflow: hidden;
}

.section {
  padding: 70px 0;
  position: relative;
  background: #FFFFFF;
}

.section .row+.category {
  margin-top: 15px;
}

.section-navbars {
  padding-bottom: 0;
}

.section-full-screen {
  height: 100vh;
}

.section-signup {
  padding-top: 20vh;
}

.parallax-s {
  overflow: hidden;
  height: 500px;
  width: 100%;
}

.section-image {
  background-size: cover;
  background-position: center center;
  position: relative;
  width: 100%;
}

.section-image .title,
.section-image .card-plain .card-title {
  color: #FFFFFF;
}

.section-image .nav-pills .nav-link {
  background-color: #FFFFFF;
}

.section-image .nav-pills .nav-link:hover,
.section-image .nav-pills .nav-link:focus {
  background-color: #FFFFFF;
}

.section-image .info-title,
.section-image .info-area.info-horizontal .icon i,
.section-image .card-pricing.card-plain ul li {
  color: #FFFFFF;
}

.section-image .description,
.section-image .info-area .icon:not(.icon-circle) {
  color: rgba(255, 255, 255, 0.8);
}

.section-image .card:not(.card-plain) .info-title {
  color: #2c2c2c;
}

.section-image .card:not(.card-plain) .info-area p,
.section-image .card:not(.card-plain) .info-area .icon,
.section-image .card:not(.card-plain) .description {
  color: #9A9A9A;
}

.section-image .footer {
  color: #FFFFFF;
}

.section-image .card-plain [class*="text-"],
.section-image .card-plain ul li b {
  color: #FFFFFF;
}

.section-image .card-plain .category {
  color: rgba(255, 255, 255, 0.5);
}

.section-image:after {
  position: absolute;
  z-index: 1;
  width: 100%;
  height: 100%;
  display: block;
  left: 0;
  top: 0;
  content: "";
  background-color: rgba(0, 0, 0, 0.7);
}

.section-image .container {
  z-index: 2;
  position: relative;
}

.page-header {
  min-height: 100vh;
  max-height: 999px;
  padding: 0;
  color: #FFFFFF;
  position: relative;
}

.page-header .page-header-image {
  position: absolute;
  background-size: cover;
  background-position: center center;
  width: 100%;
  height: 100%;
  z-index: -1;
}

.page-header .content-center {
  position: absolute;
  top: 50%;
  left: 50%;
  z-index: 2;
  -ms-transform: translate(-50%, -50%);
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
  color: #FFFFFF;
  padding: 0 15px;
  width: 100%;
  max-width: 880px;
}

.page-header footer {
  position: absolute;
  bottom: 0;
  width: 100%;
}

.page-header .container {
  height: 100%;
  z-index: 1;
}

.page-header .category,
.page-header .description {
  color: rgba(255, 255, 255, 0.8);
}

.page-header.page-header-small {
  min-height: 60vh;
  max-height: 440px;
}

.page-header.page-header-mini {
  min-height: 40vh;
  max-height: 340px;
}

.page-header .title {
  margin-bottom: 15px;
}

.page-header .title+h4 {
  margin-top: 10px;
}

.page-header:after,
.page-header:before {
  position: absolute;
  z-index: 0;
  width: 100%;
  height: 100%;
  display: block;
  left: 0;
  top: 0;
  content: "";
}

.page-header:before {
  background-color: rgba(0, 0, 0, 0.3);
}

.page-header[filter-color="orange"] {
  background: rgba(44, 44, 44, 0.2);
  /* For browsers that do not support gradients */
  background: -webkit-linear-gradient(90deg, rgba(44, 44, 44, 0.2), rgba(224, 23, 3, 0.6));
  /* For Safari 5.1 to 6.0 */
  background: -o-linear-gradient(90deg, rgba(44, 44, 44, 0.2), rgba(224, 23, 3, 0.6));
  /* For Opera 11.1 to 12.0 */
  background: -moz-linear-gradient(90deg, rgba(44, 44, 44, 0.2), rgba(224, 23, 3, 0.6));
  /* For Firefox 3.6 to 15 */
  background: linear-gradient(0deg, rgba(44, 44, 44, 0.2), rgba(224, 23, 3, 0.6));
  /* Standard syntax */
}

.clear-filter:after,
.clear-filter:before {
  display: none;
}

.section-story-overview {
  padding: 50px 0;
}

.section-story-overview .image-container {
  height: 335px;
  position: relative;
  background-position: center center;
  background-size: cover;
  box-shadow: 0px 10px 25px 0px rgba(0, 0, 0, 0.3);
  border-radius: .25rem;
}

.section-story-overview .image-container+.category {
  padding-top: 15px;
}

.section-story-overview .image-container.image-right {
  z-index: 2;
}

.section-story-overview .image-container.image-right+h3.title {
  margin-top: 120px;
}

.section-story-overview .image-container.image-left {
  z-index: 1;
}

.section-story-overview .image-container img {
  width: 100%;
  left: 0;
  top: 0;
  height: auto;
  position: absolute;
}

.section-story-overview .image-container:nth-child(2) {
  margin-top: 420px;
  margin-left: -105px;
}

.section-story-overview p.blockquote {
  width: 220px;
  min-height: 180px;
  text-align: left;
  position: absolute;
  top: 376px;
  right: 155px;
  z-index: 0;
}

.section-nucleo-icons .nucleo-container img {
  width: auto;
  left: 0;
  top: 0;
  height: 100%;
  position: absolute;
}

.section-nucleo-icons .nucleo-container {
  height: 335px;
  position: relative;
}

.section-nucleo-icons h5 {
  margin-bottom: 35px;
}

.section-nucleo-icons .icons-container {
  position: relative;
  max-width: 450px;
  height: 300px;
  max-height: 300px;
  margin: 0 auto;
}

.section-nucleo-icons .icons-container i {
  font-size: 34px;
  position: absolute;
  left: 0;
  top: 0;
}

.section-nucleo-icons .icons-container i:nth-child(1) {
  top: 5%;
  left: 7%;
}

.section-nucleo-icons .icons-container i:nth-child(2) {
  top: 28%;
  left: 24%;
}

.section-nucleo-icons .icons-container i:nth-child(3) {
  top: 40%;
}

.section-nucleo-icons .icons-container i:nth-child(4) {
  top: 18%;
  left: 62%;
}

.section-nucleo-icons .icons-container i:nth-child(5) {
  top: 74%;
  left: 3%;
}

.section-nucleo-icons .icons-container i:nth-child(6) {
  top: 36%;
  left: 44%;
  font-size: 65px;
  color: #f96332;
  padding: 1px;
}

.section-nucleo-icons .icons-container i:nth-child(7) {
  top: 59%;
  left: 26%;
}

.section-nucleo-icons .icons-container i:nth-child(8) {
  top: 60%;
  left: 69%;
}

.section-nucleo-icons .icons-container i:nth-child(9) {
  top: 72%;
  left: 47%;
}

.section-nucleo-icons .icons-container i:nth-child(10) {
  top: 88%;
  left: 27%;
}

.section-nucleo-icons .icons-container i:nth-child(11) {
  top: 31%;
  left: 80%;
}

.section-nucleo-icons .icons-container i:nth-child(12) {
  top: 88%;
  left: 68%;
}

.section-nucleo-icons .icons-container i:nth-child(13) {
  top: 5%;
  left: 81%;
}

.section-nucleo-icons .icons-container i:nth-child(14) {
  top: 58%;
  left: 90%;
}

.section-nucleo-icons .icons-container i:nth-child(15) {
  top: 6%;
  left: 40%;
}

.section-images {
  max-height: 670px;
  height: 670px;
}

.section-images .hero-images-container,
.section-images .hero-images-container-1,
.section-images .hero-images-container-2 {
  margin-top: -38vh;
}

.section-images .hero-images-container {
  max-width: 670px;
}

.section-images .hero-images-container-1 {
  max-width: 390px;
  position: absolute;
  top: 55%;
  right: 18%;
}

.section-images .hero-images-container-2 {
  max-width: 225px;
  position: absolute;
  top: 68%;
  right: 12%;
}

[data-background-color="gray"] {
  background-color: #eeeeee;
}

[data-background-color="orange"] {
  background-color: #e95e38;
}

[data-background-color="black"] {
  background-color: #2c2c2c;
}

[data-background-color]:not([data-background-color="gray"]) {
  color: #FFFFFF;
}

[data-background-color]:not([data-background-color="gray"]) .separator-line {
  background-color: rgba(255, 255, 255, 0.5);
}

[data-background-color]:not([data-background-color="gray"]) .footer.footer-white .footer-brand,
[data-background-color]:not([data-background-color="gray"]) .footer.footer-white ul li>a.nav-link:not(.btn-icon) {
  color: initial;
}

[data-background-color]:not([data-background-color="gray"]) .pagination .page-item.disabled>.page-link {
  background-color: rgba(255, 255, 255, 0.2);
  color: #FFFFFF;
}

[data-background-color]:not([data-background-color="gray"]) .card:not(.card-plain) .category,
[data-background-color]:not([data-background-color="gray"]) .card:not(.card-plain) .card-description,
[data-background-color]:not([data-background-color="gray"]) .card:not(.card-plain) .category,
[data-background-color]:not([data-background-color="gray"]) .card:not(.card-plain) .category {
  color: #9A9A9A;
}

[data-background-color]:not([data-background-color="gray"]) .card:not(.card-plain) .card-title,
[data-background-color]:not([data-background-color="gray"]) .card:not(.card-plain) .card-title {
  color: initial;
}

[data-background-color]:not([data-background-color="gray"]) .carousel .carousel-inner {
  box-shadow: none;
}

[data-background-color]:not([data-background-color="gray"]) .title,
[data-background-color]:not([data-background-color="gray"]) .social-description h2,
[data-background-color]:not([data-background-color="gray"]) p,
[data-background-color]:not([data-background-color="gray"]) p.blockquote,
[data-background-color]:not([data-background-color="gray"]) p.blockquote small,
[data-background-color]:not([data-background-color="gray"]) h1,
[data-background-color]:not([data-background-color="gray"]) h2,
[data-background-color]:not([data-background-color="gray"]) h3,
[data-background-color]:not([data-background-color="gray"]) h4,
[data-background-color]:not([data-background-color="gray"]) h5,
[data-background-color]:not([data-background-color="gray"]) h6,
[data-background-color]:not([data-background-color="gray"]) a:not(.btn):not(.dropdown-item):not(.card-link),
[data-background-color]:not([data-background-color="gray"]) .icons-container i,
[data-background-color]:not([data-background-color="gray"]).card-pricing ul li,
[data-background-color]:not([data-background-color="gray"]) .info.info-horizontal .icon i,
[data-background-color]:not([data-background-color="gray"]) .card-pricing.card-plain ul li {
  color: #FFFFFF;
}

[data-background-color]:not([data-background-color="gray"]).card a:not(.btn):not(.dropdown-item) {
  color: #FFFFFF;
}

[data-background-color]:not([data-background-color="gray"]).card a:not(.btn):not(.dropdown-item):hover,
[data-background-color]:not([data-background-color="gray"]).card a:not(.btn):not(.dropdown-item):focus {
  border-color: #FFFFFF;
}

[data-background-color]:not([data-background-color="gray"]).footer hr,
[data-background-color]:not([data-background-color="gray"]).card-pricing .icon i,
[data-background-color]:not([data-background-color="gray"]).card-pricing ul li {
  border-color: rgba(255, 255, 255, 0.2);
}

[data-background-color]:not([data-background-color="gray"]) .card-footer .stats i,
[data-background-color]:not([data-background-color="gray"]).card-plain .category,
[data-background-color]:not([data-background-color="gray"]) .card-plain .category,
[data-background-color]:not([data-background-color="gray"]) .card-header:after {
  color: rgba(255, 255, 255, 0.5);
}

[data-background-color]:not([data-background-color="gray"]).card-pricing ul li i,
[data-background-color]:not([data-background-color="gray"]).card-pricing ul li b,
[data-background-color]:not([data-background-color="gray"]) .card-pricing.card-plain ul li b,
[data-background-color]:not([data-background-color="gray"]) .card-category,
[data-background-color]:not([data-background-color="gray"]) .author span,
[data-background-color]:not([data-background-color="gray"]) .card-pricing.card-plain ul li i {
  color: rgba(255, 255, 255, 0.8) !important;
}

[data-background-color]:not([data-background-color="gray"]) .separator {
  background-color: #FFFFFF;
}

[data-background-color]:not([data-background-color="gray"]) .navbar.bg-white p {
  color: #888;
}

[data-background-color]:not([data-background-color="gray"]) .description,
[data-background-color]:not([data-background-color="gray"]) .social-description p {
  color: rgba(255, 255, 255, 0.8);
}

[data-background-color]:not([data-background-color="gray"]) p.blockquote {
  border-color: rgba(255, 255, 255, 0.2);
}

[data-background-color]:not([data-background-color="gray"]) .checkbox label::before,
[data-background-color]:not([data-background-color="gray"]) .checkbox label::after,
[data-background-color]:not([data-background-color="gray"]) .radio label::before,
[data-background-color]:not([data-background-color="gray"]) .radio label::after {
  border-color: rgba(255, 255, 255, 0.2);
}

[data-background-color]:not([data-background-color="gray"]) .checkbox label::after,
[data-background-color]:not([data-background-color="gray"]) .checkbox label,
[data-background-color]:not([data-background-color="gray"]) .radio label {
  color: #FFFFFF;
}

[data-background-color]:not([data-background-color="gray"]) .checkbox input[type="checkbox"]:disabled+label,
[data-background-color]:not([data-background-color="gray"]) .radio input[type="radio"]:disabled+label {
  color: #FFFFFF;
}

[data-background-color]:not([data-background-color="gray"]) .radio input[type="radio"]:not(:disabled):hover+label::after,
[data-background-color]:not([data-background-color="gray"]) .radio input[type="radio"]:checked+label::after {
  background-color: #FFFFFF;
  border-color: #FFFFFF;
}

[data-background-color]:not([data-background-color="gray"]) .form-control::-moz-placeholder {
  color: #ebebeb;
  opacity: 1;
  filter: alpha(opacity=100);
}

[data-background-color]:not([data-background-color="gray"]) .form-control:-moz-placeholder {
  color: #ebebeb;
  opacity: 1;
  filter: alpha(opacity=100);
}

[data-background-color]:not([data-background-color="gray"]) .form-control::-webkit-input-placeholder {
  color: #ebebeb;
  opacity: 1;
  filter: alpha(opacity=100);
}

[data-background-color]:not([data-background-color="gray"]) .form-control:-ms-input-placeholder {
  color: #ebebeb;
  opacity: 1;
  filter: alpha(opacity=100);
}

[data-background-color]:not([data-background-color="gray"]) .form-control {
  border-color: rgba(255, 255, 255, 0.5);
  color: #FFFFFF;
}

[data-background-color]:not([data-background-color="gray"]) .form-control:focus {
  border-color: #FFFFFF;
  background-color: transparent;
  color: #FFFFFF;
}

[data-background-color]:not([data-background-color="gray"]) .has-success:after,
[data-background-color]:not([data-background-color="gray"]) .has-danger:after {
  color: #FFFFFF;
}

[data-background-color]:not([data-background-color="gray"]) .has-danger .form-control {
  background-color: transparent;
}

[data-background-color]:not([data-background-color="gray"]) .input-group-prepend .input-group-text,
[data-background-color]:not([data-background-color="gray"]) .input-group-append .input-group-text {
  background-color: transparent;
  border-color: rgba(255, 255, 255, 0.5);
  color: #FFFFFF;
}

[data-background-color]:not([data-background-color="gray"]) .input-group-focus .input-group-prepend .input-group-text,
[data-background-color]:not([data-background-color="gray"]) .input-group-focus .input-group-append .input-group-text {
  background-color: transparent;
  border-color: #FFFFFF;
  color: #FFFFFF;
}

[data-background-color]:not([data-background-color="gray"]) .form-group.no-border .form-control,
[data-background-color]:not([data-background-color="gray"]) .input-group.no-border .form-control {
  background-color: rgba(255, 255, 255, 0.1);
  color: #FFFFFF;
}

[data-background-color]:not([data-background-color="gray"]) .form-group.no-border .form-control:focus,
[data-background-color]:not([data-background-color="gray"]) .form-group.no-border .form-control:active,
[data-background-color]:not([data-background-color="gray"]) .form-group.no-border .form-control:active,
[data-background-color]:not([data-background-color="gray"]) .input-group.no-border .form-control:focus,
[data-background-color]:not([data-background-color="gray"]) .input-group.no-border .form-control:active,
[data-background-color]:not([data-background-color="gray"]) .input-group.no-border .form-control:active {
  background-color: rgba(255, 255, 255, 0.2);
  color: #FFFFFF;
}

[data-background-color]:not([data-background-color="gray"]) .form-group.no-border .form-control+.input-group-prepend .input-group-text,
[data-background-color]:not([data-background-color="gray"]) .form-group.no-border .form-control+.input-group-append .input-group-text,
[data-background-color]:not([data-background-color="gray"]) .input-group.no-border .form-control+.input-group-prepend .input-group-text,
[data-background-color]:not([data-background-color="gray"]) .input-group.no-border .form-control+.input-group-append .input-group-text {
  background-color: rgba(255, 255, 255, 0.1);
}

[data-background-color]:not([data-background-color="gray"]) .form-group.no-border .form-control+.input-group-prepend .input-group-text:focus,
[data-background-color]:not([data-background-color="gray"]) .form-group.no-border .form-control+.input-group-prepend .input-group-text:active,
[data-background-color]:not([data-background-color="gray"]) .form-group.no-border .form-control+.input-group-prepend .input-group-text:active,
[data-background-color]:not([data-background-color="gray"]) .form-group.no-border .form-control+.input-group-append .input-group-text:focus,
[data-background-color]:not([data-background-color="gray"]) .form-group.no-border .form-control+.input-group-append .input-group-text:active,
[data-background-color]:not([data-background-color="gray"]) .form-group.no-border .form-control+.input-group-append .input-group-text:active,
[data-background-color]:not([data-background-color="gray"]) .input-group.no-border .form-control+.input-group-prepend .input-group-text:focus,
[data-background-color]:not([data-background-color="gray"]) .input-group.no-border .form-control+.input-group-prepend .input-group-text:active,
[data-background-color]:not([data-background-color="gray"]) .input-group.no-border .form-control+.input-group-prepend .input-group-text:active,
[data-background-color]:not([data-background-color="gray"]) .input-group.no-border .form-control+.input-group-append .input-group-text:focus,
[data-background-color]:not([data-background-color="gray"]) .input-group.no-border .form-control+.input-group-append .input-group-text:active,
[data-background-color]:not([data-background-color="gray"]) .input-group.no-border .form-control+.input-group-append .input-group-text:active {
  background-color: rgba(255, 255, 255, 0.2);
  color: #FFFFFF;
}

[data-background-color]:not([data-background-color="gray"]) .form-group.no-border .form-control:focus+.input-group-prepend .input-group-text,
[data-background-color]:not([data-background-color="gray"]) .form-group.no-border .form-control:focus+.input-group-append .input-group-text,
[data-background-color]:not([data-background-color="gray"]) .input-group.no-border .form-control:focus+.input-group-prepend .input-group-text,
[data-background-color]:not([data-background-color="gray"]) .input-group.no-border .form-control:focus+.input-group-append .input-group-text {
  background-color: rgba(255, 255, 255, 0.2);
  color: #FFFFFF;
}

[data-background-color]:not([data-background-color="gray"]) .form-group.no-border .input-group-prepend .input-group-text,
[data-background-color]:not([data-background-color="gray"]) .form-group.no-border .input-group-append .input-group-text,
[data-background-color]:not([data-background-color="gray"]) .input-group.no-border .input-group-prepend .input-group-text,
[data-background-color]:not([data-background-color="gray"]) .input-group.no-border .input-group-append .input-group-text {
  background-color: rgba(255, 255, 255, 0.1);
  border: none;
  color: #FFFFFF;
}

[data-background-color]:not([data-background-color="gray"]) .form-group.no-border.input-group-focus .input-group-prepend .input-group-text,
[data-background-color]:not([data-background-color="gray"]) .form-group.no-border.input-group-focus .input-group-append .input-group-text,
[data-background-color]:not([data-background-color="gray"]) .input-group.no-border.input-group-focus .input-group-prepend .input-group-text,
[data-background-color]:not([data-background-color="gray"]) .input-group.no-border.input-group-focus .input-group-append .input-group-text {
  background-color: rgba(255, 255, 255, 0.2);
  color: #FFFFFF;
}

[data-background-color]:not([data-background-color="gray"]) .input-group-addon,
[data-background-color]:not([data-background-color="gray"]) .form-group.no-border .input-group-addon,
[data-background-color]:not([data-background-color="gray"]) .input-group.no-border .input-group-addon {
  color: rgba(255, 255, 255, 0.8);
}

[data-background-color]:not([data-background-color="gray"]) .subscribe-line .form-control {
  background-color: transparent;
  border: 1px solid #E3E3E3;
  color: #2c2c2c;
}

[data-background-color]:not([data-background-color="gray"]) .subscribe-line .form-control:last-child {
  border-left: 0 none;
}

[data-background-color]:not([data-background-color="gray"]) .subscribe-line .input-group-addon,
[data-background-color]:not([data-background-color="gray"]) .subscribe-line .form-group.no-border .input-group-addon,
[data-background-color]:not([data-background-color="gray"]) .subscribe-line .input-group.no-border .input-group-addon {
  color: #555555;
  border: 1px solid #E3E3E3;
}

[data-background-color]:not([data-background-color="gray"]) .btn.btn-simple {
  background-color: transparent;
  border-color: rgba(255, 255, 255, 0.5);
  color: #FFFFFF;
}

[data-background-color]:not([data-background-color="gray"]) .btn.btn-simple:hover,
[data-background-color]:not([data-background-color="gray"]) .btn.btn-simple:hover,
[data-background-color]:not([data-background-color="gray"]) .btn.btn-simple:focus,
[data-background-color]:not([data-background-color="gray"]) .btn.btn-simple:active {
  background-color: transparent;
  border-color: #FFFFFF;
}

[data-background-color]:not([data-background-color="gray"]) .nav-tabs>.nav-item>.nav-link i.now-ui-icons {
  color: #FFFFFF;
}

[data-background-color]:not([data-background-color="gray"]).section-nucleo-icons .icons-container i:nth-child(6) {
  color: #FFFFFF;
}

@media screen and (max-width: 991px) {
  .profile-photo .profile-photo-small {
    margin-left: -2px;
  }
  .button-dropdown {
    display: none;
  }
  [data-notify="container"].alert {
    min-width: 400px;
  }
  #minimizeSidebar {
    display: none;
  }
  .timeline>li>.timeline-panel {
    width: 86% !important;
    float: right !important;
  }
  .timeline:before,
  .timeline>li>.timeline-badge {
    left: 5% !important;
  }
  .timeline>li>.timeline-panel:before {
    border-left-width: 0;
    border-right-width: 15px;
    left: -15px;
    right: auto !important;
  }
  .timeline>li>.timeline-panel:after {
    border-left-width: 0;
    border-right-width: 14px;
    left: -14px;
    right: auto !important;
  }
  .timeline>li:not(.timeline-inverted)>.timeline-panel:after,
  .timeline>li:not(.timeline-inverted)>.timeline-panel:before {
    filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=2);
    -webkit-transform: rotate(180deg);
    -ms-transform: rotate(180deg);
    transform: rotate(180deg);
  }
  .navbar .container-fluid {
    padding-right: 15px;
    padding-left: 15px;
  }
  .navbar .navbar-collapse .input-group {
    margin: 0;
    margin-top: 5px;
  }
  .navbar .navbar-nav .nav-item:first-child {
    margin-top: 10px;
  }
  .navbar .navbar-nav .nav-item:not(:last-child) {
    margin-bottom: 10px;
  }
  .navbar .dropdown.show .dropdown-menu {
    display: block;
  }
  .navbar .dropdown .dropdown-menu {
    display: none;
  }
  .navbar .dropdown.show .dropdown-menu,
  .navbar .dropdown .dropdown-menu {
    background-color: transparent;
    border: 0;
    transition: none;
    -webkit-box-shadow: none;
    box-shadow: none;
    width: auto;
    margin: 0px 1rem;
    margin-top: 0px;
  }
  .navbar .dropdown.show .dropdown-menu:before,
  .navbar .dropdown .dropdown-menu:before {
    display: none;
  }
  .navbar .dropdown-menu .dropdown-item:focus,
  .navbar .dropdown-menu .dropdown-item:hover {
    color: #FFFFFF;
  }
  .navbar.bg-white .dropdown-menu .dropdown-item:focus,
  .navbar.bg-white .dropdown-menu .dropdown-item:hover {
    color: #888;
  }
  .navbar.bg-white:not(.navbar-transparent) .navbar-toggler-bar {
    background-color: #888;
  }
  .wrapper {
    -webkit-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
    -moz-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
    -o-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
    -ms-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
    transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
  }
  .sidebar {
    box-shadow: none;
  }
  #bodyClick {
    height: 100%;
    width: 100%;
    position: fixed;
    opacity: 1;
    top: 0;
    right: 0;
    left: 260px;
    content: "";
    z-index: 9999;
    overflow-x: hidden;
    background-color: transparent;
    -webkit-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
    -moz-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
    -o-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
    -ms-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
    transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
  }
  .footer .copyright {
    text-align: right;
  }
  .section-nucleo-icons .icons-container {
    margin-top: 65px;
  }
  .navbar-nav .nav-link i.fa,
  .navbar-nav .nav-link i.now-ui-icons {
    opacity: .5;
  }
  .sidebar,
  .bootstrap-navbar {
    position: fixed;
    display: block;
    top: 0;
    height: 100%;
    width: 260px;
    right: auto;
    left: 0;
    z-index: 1032;
    visibility: visible;
    overflow-y: visible;
    padding: 0;
    -webkit-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
    -moz-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
    -o-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
    -ms-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
    transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
    -webkit-transform: translate3d(-260px, 0, 0);
    -moz-transform: translate3d(-260px, 0, 0);
    -o-transform: translate3d(-260px, 0, 0);
    -ms-transform: translate3d(-260px, 0, 0);
    transform: translate3d(-260px, 0, 0);
  }
  .bar1,
  .bar2,
  .bar3 {
    outline: 1px solid transparent;
  }
  .bar1 {
    top: 0px;
    -webkit-animation: topbar-back 500ms linear 0s;
    -moz-animation: topbar-back 500ms linear 0s;
    animation: topbar-back 500ms 0s;
    -webkit-animation-fill-mode: forwards;
    -moz-animation-fill-mode: forwards;
    animation-fill-mode: forwards;
  }
  .bar2 {
    opacity: 1;
  }
  .bar3 {
    bottom: 0px;
    -webkit-animation: bottombar-back 500ms linear 0s;
    -moz-animation: bottombar-back 500ms linear 0s;
    animation: bottombar-back 500ms 0s;
    -webkit-animation-fill-mode: forwards;
    -moz-animation-fill-mode: forwards;
    animation-fill-mode: forwards;
  }
  .toggled .bar1 {
    top: 6px;
    -webkit-animation: topbar-x 500ms linear 0s;
    -moz-animation: topbar-x 500ms linear 0s;
    animation: topbar-x 500ms 0s;
    -webkit-animation-fill-mode: forwards;
    -moz-animation-fill-mode: forwards;
    animation-fill-mode: forwards;
  }
  .toggled .bar2 {
    opacity: 0;
  }
  .toggled .bar3 {
    bottom: 6px;
    -webkit-animation: bottombar-x 500ms linear 0s;
    -moz-animation: bottombar-x 500ms linear 0s;
    animation: bottombar-x 500ms 0s;
    -webkit-animation-fill-mode: forwards;
    -moz-animation-fill-mode: forwards;
    animation-fill-mode: forwards;
  }
  @keyframes topbar-x {
    0% {
      top: 0px;
      transform: rotate(0deg);
    }
    45% {
      top: 6px;
      transform: rotate(145deg);
    }
    75% {
      transform: rotate(130deg);
    }
    100% {
      transform: rotate(135deg);
    }
  }
  @-webkit-keyframes topbar-x {
    0% {
      top: 0px;
      -webkit-transform: rotate(0deg);
    }
    45% {
      top: 6px;
      -webkit-transform: rotate(145deg);
    }
    75% {
      -webkit-transform: rotate(130deg);
    }
    100% {
      -webkit-transform: rotate(135deg);
    }
  }
  @-moz-keyframes topbar-x {
    0% {
      top: 0px;
      -moz-transform: rotate(0deg);
    }
    45% {
      top: 6px;
      -moz-transform: rotate(145deg);
    }
    75% {
      -moz-transform: rotate(130deg);
    }
    100% {
      -moz-transform: rotate(135deg);
    }
  }
  @keyframes topbar-back {
    0% {
      top: 6px;
      transform: rotate(135deg);
    }
    45% {
      transform: rotate(-10deg);
    }
    75% {
      transform: rotate(5deg);
    }
    100% {
      top: 0px;
      transform: rotate(0);
    }
  }
  @-webkit-keyframes topbar-back {
    0% {
      top: 6px;
      -webkit-transform: rotate(135deg);
    }
    45% {
      -webkit-transform: rotate(-10deg);
    }
    75% {
      -webkit-transform: rotate(5deg);
    }
    100% {
      top: 0px;
      -webkit-transform: rotate(0);
    }
  }
  @-moz-keyframes topbar-back {
    0% {
      top: 6px;
      -moz-transform: rotate(135deg);
    }
    45% {
      -moz-transform: rotate(-10deg);
    }
    75% {
      -moz-transform: rotate(5deg);
    }
    100% {
      top: 0px;
      -moz-transform: rotate(0);
    }
  }
  @keyframes bottombar-x {
    0% {
      bottom: 0px;
      transform: rotate(0deg);
    }
    45% {
      bottom: 6px;
      transform: rotate(-145deg);
    }
    75% {
      transform: rotate(-130deg);
    }
    100% {
      transform: rotate(-135deg);
    }
  }
  @-webkit-keyframes bottombar-x {
    0% {
      bottom: 0px;
      -webkit-transform: rotate(0deg);
    }
    45% {
      bottom: 6px;
      -webkit-transform: rotate(-145deg);
    }
    75% {
      -webkit-transform: rotate(-130deg);
    }
    100% {
      -webkit-transform: rotate(-135deg);
    }
  }
  @-moz-keyframes bottombar-x {
    0% {
      bottom: 0px;
      -moz-transform: rotate(0deg);
    }
    45% {
      bottom: 6px;
      -moz-transform: rotate(-145deg);
    }
    75% {
      -moz-transform: rotate(-130deg);
    }
    100% {
      -moz-transform: rotate(-135deg);
    }
  }
  @keyframes bottombar-back {
    0% {
      bottom: 6px;
      transform: rotate(-135deg);
    }
    45% {
      transform: rotate(10deg);
    }
    75% {
      transform: rotate(-5deg);
    }
    100% {
      bottom: 0px;
      transform: rotate(0);
    }
  }
  @-webkit-keyframes bottombar-back {
    0% {
      bottom: 6px;
      -webkit-transform: rotate(-135deg);
    }
    45% {
      -webkit-transform: rotate(10deg);
    }
    75% {
      -webkit-transform: rotate(-5deg);
    }
    100% {
      bottom: 0px;
      -webkit-transform: rotate(0);
    }
  }
  @-moz-keyframes bottombar-back {
    0% {
      bottom: 6px;
      -moz-transform: rotate(-135deg);
    }
    45% {
      -moz-transform: rotate(10deg);
    }
    75% {
      -moz-transform: rotate(-5deg);
    }
    100% {
      bottom: 0px;
      -moz-transform: rotate(0);
    }
  }
  @-webkit-keyframes fadeIn {
    0% {
      opacity: 0;
    }
    100% {
      opacity: 1;
    }
  }
  @-moz-keyframes fadeIn {
    0% {
      opacity: 0;
    }
    100% {
      opacity: 1;
    }
  }
  @keyframes fadeIn {
    0% {
      opacity: 0;
    }
    100% {
      opacity: 1;
    }
  }
  .navbar-toggler-bar {
    display: block;
    position: relative;
    width: 22px;
    height: 1px;
    border-radius: 1px;
    background: #FFFFFF;
  }
  .navbar-toggler-bar+.navbar-toggler-bar {
    margin-top: 7px;
  }
  .navbar-toggler-bar+.navbar-toggler-bar.navbar-kebab {
    margin-top: 3px !important;
  }
  .navbar-toggler-bar.bar2 {
    width: 17px;
    transition: width .2s linear;
  }
  .main-panel {
    width: 100%;
  }
  .navbar-toggle .navbar-toggler,
  .navbar-toggle {
    display: block !important;
  }
  .navbar .toggled .navbar-toggler-bar {
    width: 24px;
  }
  .navbar .toggled .navbar-toggler-bar+.navbar-toggler-bar {
    margin-top: 5px;
  }
  .nav-open .main-panel {
    right: 0;
    -webkit-transform: translate3d(260px, 0, 0);
    -moz-transform: translate3d(260px, 0, 0);
    -o-transform: translate3d(260px, 0, 0);
    -ms-transform: translate3d(260px, 0, 0);
    transform: translate3d(260px, 0, 0);
  }
  .nav-open .sidebar {
    -webkit-transform: translate3d(0px, 0, 0);
    -moz-transform: translate3d(0px, 0, 0);
    -o-transform: translate3d(0px, 0, 0);
    -ms-transform: translate3d(0px, 0, 0);
    transform: translate3d(0px, 0, 0);
    box-shadow: 0px 2px 22px 0 rgba(0, 0, 0, 0.2), 0px 2px 30px 0 rgba(0, 0, 0, 0.35);
  }
  .nav-open body {
    position: relative;
    overflow-x: hidden;
  }
  .nav-open .menu-on-right .main-panel {
    -webkit-transform: translate3d(-260px, 0, 0);
    -moz-transform: translate3d(-260px, 0, 0);
    -o-transform: translate3d(-260px, 0, 0);
    -ms-transform: translate3d(-260px, 0, 0);
    transform: translate3d(-260px, 0, 0);
  }
  .nav-open .menu-on-right .navbar-collapse,
  .nav-open .menu-on-right .sidebar {
    -webkit-transform: translate3d(0px, 0, 0);
    -moz-transform: translate3d(0px, 0, 0);
    -o-transform: translate3d(0px, 0, 0);
    -ms-transform: translate3d(0px, 0, 0);
    transform: translate3d(0px, 0, 0);
  }
  .nav-open .menu-on-right .navbar-translate {
    -webkit-transform: translate3d(-300px, 0, 0);
    -moz-transform: translate3d(-300px, 0, 0);
    -o-transform: translate3d(-300px, 0, 0);
    -ms-transform: translate3d(-300px, 0, 0);
    transform: translate3d(-300px, 0, 0);
  }
  .nav-open .menu-on-right #bodyClick {
    right: 260px;
    left: auto;
  }
  .menu-on-right .sidebar {
    left: auto;
    right: 0;
    -webkit-transform: translate3d(260px, 0, 0);
    -moz-transform: translate3d(260px, 0, 0);
    -o-transform: translate3d(260px, 0, 0);
    -ms-transform: translate3d(260px, 0, 0);
    transform: translate3d(260px, 0, 0);
  }
}

@media screen and (min-width: 992px) {
  .navbar-collapse {
    background: none !important;
  }
  .navbar .navbar-toggle {
    display: none;
  }
  .navbar-nav .nav-link.profile-photo {
    padding: 0;
    margin: 7px 0.7rem;
  }
  .section-nucleo-icons .icons-container {
    margin: 0 0 0 auto;
  }
  .dropdown-menu .dropdown-item {
    color: inherit;
  }
  .footer .copyright {
    float: right;
    padding-right: 15px;
  }
}

@media screen and (max-width: 768px) {
  .nav-tabs {
    display: inline-block;
    width: 100%;
    padding-left: 100px;
    padding-right: 100px;
    text-align: center;
  }
  .nav-tabs .nav-item>.nav-link {
    margin-bottom: 5px;
  }
  .user-profile [class*="col-"] {
    padding-left: 15px !important;
    padding-right: 15px !important;
  }
  .card-stats [class*="col-"] .statistics::after {
    display: none;
  }
  .main-panel .content {
    padding-left: 15px;
    padding-right: 15px;
  }
  .footer nav {
    display: block;
    margin-bottom: 5px;
    float: none;
  }
  .landing-page .section-story-overview .image-container:nth-child(2) {
    margin-left: 0;
    margin-bottom: 30px;
  }
}

@media screen and (max-width: 576px) {
  .navbar[class*='navbar-toggleable-'] .container {
    margin-left: 0;
    margin-right: 0;
  }
  [data-notify="container"].alert {
    left: 10px !important;
    right: 10px !important;
    width: auto;
  }
  .card-contributions .card-stats {
    flex-direction: column;
  }
  .card-contributions .card-stats .bootstrap-switch {
    margin-bottom: 15px;
  }
  .footer .copyright {
    text-align: center;
  }
  .section-nucleo-icons .icons-container i {
    font-size: 30px;
  }
  .section-nucleo-icons .icons-container i:nth-child(6) {
    font-size: 48px;
  }
  .page-header .container h6.category-absolute {
    width: 90%;
  }
}

@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) and (orientation: landscape) {
  .sidebar,
  .bootstrap-navbar {
    position: fixed;
    display: block;
    top: 0;
    height: 100%;
    width: 260px;
    right: auto;
    left: 0;
    z-index: 1032;
    visibility: visible;
    overflow-y: visible;
    padding: 0;
    -webkit-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
    -moz-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
    -o-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
    -ms-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
    transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
    -webkit-transform: translate3d(-260px, 0, 0);
    -moz-transform: translate3d(-260px, 0, 0);
    -o-transform: translate3d(-260px, 0, 0);
    -ms-transform: translate3d(-260px, 0, 0);
    transform: translate3d(-260px, 0, 0);
  }
  .bar1,
  .bar2,
  .bar3 {
    outline: 1px solid transparent;
  }
  .bar1 {
    top: 0px;
    -webkit-animation: topbar-back 500ms linear 0s;
    -moz-animation: topbar-back 500ms linear 0s;
    animation: topbar-back 500ms 0s;
    -webkit-animation-fill-mode: forwards;
    -moz-animation-fill-mode: forwards;
    animation-fill-mode: forwards;
  }
  .bar2 {
    opacity: 1;
  }
  .bar3 {
    bottom: 0px;
    -webkit-animation: bottombar-back 500ms linear 0s;
    -moz-animation: bottombar-back 500ms linear 0s;
    animation: bottombar-back 500ms 0s;
    -webkit-animation-fill-mode: forwards;
    -moz-animation-fill-mode: forwards;
    animation-fill-mode: forwards;
  }
  .toggled .bar1 {
    top: 6px;
    -webkit-animation: topbar-x 500ms linear 0s;
    -moz-animation: topbar-x 500ms linear 0s;
    animation: topbar-x 500ms 0s;
    -webkit-animation-fill-mode: forwards;
    -moz-animation-fill-mode: forwards;
    animation-fill-mode: forwards;
  }
  .toggled .bar2 {
    opacity: 0;
  }
  .toggled .bar3 {
    bottom: 6px;
    -webkit-animation: bottombar-x 500ms linear 0s;
    -moz-animation: bottombar-x 500ms linear 0s;
    animation: bottombar-x 500ms 0s;
    -webkit-animation-fill-mode: forwards;
    -moz-animation-fill-mode: forwards;
    animation-fill-mode: forwards;
  }
  @keyframes topbar-x {
    0% {
      top: 0px;
      transform: rotate(0deg);
    }
    45% {
      top: 6px;
      transform: rotate(145deg);
    }
    75% {
      transform: rotate(130deg);
    }
    100% {
      transform: rotate(135deg);
    }
  }
  @-webkit-keyframes topbar-x {
    0% {
      top: 0px;
      -webkit-transform: rotate(0deg);
    }
    45% {
      top: 6px;
      -webkit-transform: rotate(145deg);
    }
    75% {
      -webkit-transform: rotate(130deg);
    }
    100% {
      -webkit-transform: rotate(135deg);
    }
  }
  @-moz-keyframes topbar-x {
    0% {
      top: 0px;
      -moz-transform: rotate(0deg);
    }
    45% {
      top: 6px;
      -moz-transform: rotate(145deg);
    }
    75% {
      -moz-transform: rotate(130deg);
    }
    100% {
      -moz-transform: rotate(135deg);
    }
  }
  @keyframes topbar-back {
    0% {
      top: 6px;
      transform: rotate(135deg);
    }
    45% {
      transform: rotate(-10deg);
    }
    75% {
      transform: rotate(5deg);
    }
    100% {
      top: 0px;
      transform: rotate(0);
    }
  }
  @-webkit-keyframes topbar-back {
    0% {
      top: 6px;
      -webkit-transform: rotate(135deg);
    }
    45% {
      -webkit-transform: rotate(-10deg);
    }
    75% {
      -webkit-transform: rotate(5deg);
    }
    100% {
      top: 0px;
      -webkit-transform: rotate(0);
    }
  }
  @-moz-keyframes topbar-back {
    0% {
      top: 6px;
      -moz-transform: rotate(135deg);
    }
    45% {
      -moz-transform: rotate(-10deg);
    }
    75% {
      -moz-transform: rotate(5deg);
    }
    100% {
      top: 0px;
      -moz-transform: rotate(0);
    }
  }
  @keyframes bottombar-x {
    0% {
      bottom: 0px;
      transform: rotate(0deg);
    }
    45% {
      bottom: 6px;
      transform: rotate(-145deg);
    }
    75% {
      transform: rotate(-130deg);
    }
    100% {
      transform: rotate(-135deg);
    }
  }
  @-webkit-keyframes bottombar-x {
    0% {
      bottom: 0px;
      -webkit-transform: rotate(0deg);
    }
    45% {
      bottom: 6px;
      -webkit-transform: rotate(-145deg);
    }
    75% {
      -webkit-transform: rotate(-130deg);
    }
    100% {
      -webkit-transform: rotate(-135deg);
    }
  }
  @-moz-keyframes bottombar-x {
    0% {
      bottom: 0px;
      -moz-transform: rotate(0deg);
    }
    45% {
      bottom: 6px;
      -moz-transform: rotate(-145deg);
    }
    75% {
      -moz-transform: rotate(-130deg);
    }
    100% {
      -moz-transform: rotate(-135deg);
    }
  }
  @keyframes bottombar-back {
    0% {
      bottom: 6px;
      transform: rotate(-135deg);
    }
    45% {
      transform: rotate(10deg);
    }
    75% {
      transform: rotate(-5deg);
    }
    100% {
      bottom: 0px;
      transform: rotate(0);
    }
  }
  @-webkit-keyframes bottombar-back {
    0% {
      bottom: 6px;
      -webkit-transform: rotate(-135deg);
    }
    45% {
      -webkit-transform: rotate(10deg);
    }
    75% {
      -webkit-transform: rotate(-5deg);
    }
    100% {
      bottom: 0px;
      -webkit-transform: rotate(0);
    }
  }
  @-moz-keyframes bottombar-back {
    0% {
      bottom: 6px;
      -moz-transform: rotate(-135deg);
    }
    45% {
      -moz-transform: rotate(10deg);
    }
    75% {
      -moz-transform: rotate(-5deg);
    }
    100% {
      bottom: 0px;
      -moz-transform: rotate(0);
    }
  }
  @-webkit-keyframes fadeIn {
    0% {
      opacity: 0;
    }
    100% {
      opacity: 1;
    }
  }
  @-moz-keyframes fadeIn {
    0% {
      opacity: 0;
    }
    100% {
      opacity: 1;
    }
  }
  @keyframes fadeIn {
    0% {
      opacity: 0;
    }
    100% {
      opacity: 1;
    }
  }
  .navbar-toggler-bar {
    display: block;
    position: relative;
    width: 22px;
    height: 1px;
    border-radius: 1px;
    background: #FFFFFF;
  }
  .navbar-toggler-bar+.navbar-toggler-bar {
    margin-top: 7px;
  }
  .navbar-toggler-bar+.navbar-toggler-bar.navbar-kebab {
    margin-top: 3px !important;
  }
  .navbar-toggler-bar.bar2 {
    width: 17px;
    transition: width .2s linear;
  }
  .main-panel {
    width: 100%;
  }
  .navbar-toggle .navbar-toggler,
  .navbar-toggle {
    display: block !important;
  }
  .navbar .toggled .navbar-toggler-bar {
    width: 24px;
  }
  .navbar .toggled .navbar-toggler-bar+.navbar-toggler-bar {
    margin-top: 5px;
  }
  .nav-open .main-panel {
    right: 0;
    -webkit-transform: translate3d(260px, 0, 0);
    -moz-transform: translate3d(260px, 0, 0);
    -o-transform: translate3d(260px, 0, 0);
    -ms-transform: translate3d(260px, 0, 0);
    transform: translate3d(260px, 0, 0);
  }
  .nav-open .sidebar {
    -webkit-transform: translate3d(0px, 0, 0);
    -moz-transform: translate3d(0px, 0, 0);
    -o-transform: translate3d(0px, 0, 0);
    -ms-transform: translate3d(0px, 0, 0);
    transform: translate3d(0px, 0, 0);
    box-shadow: 0px 2px 22px 0 rgba(0, 0, 0, 0.2), 0px 2px 30px 0 rgba(0, 0, 0, 0.35);
  }
  .nav-open body {
    position: relative;
    overflow-x: hidden;
  }
  .nav-open .menu-on-right .main-panel {
    -webkit-transform: translate3d(-260px, 0, 0);
    -moz-transform: translate3d(-260px, 0, 0);
    -o-transform: translate3d(-260px, 0, 0);
    -ms-transform: translate3d(-260px, 0, 0);
    transform: translate3d(-260px, 0, 0);
  }
  .nav-open .menu-on-right .navbar-collapse,
  .nav-open .menu-on-right .sidebar {
    -webkit-transform: translate3d(0px, 0, 0);
    -moz-transform: translate3d(0px, 0, 0);
    -o-transform: translate3d(0px, 0, 0);
    -ms-transform: translate3d(0px, 0, 0);
    transform: translate3d(0px, 0, 0);
  }
  .nav-open .menu-on-right .navbar-translate {
    -webkit-transform: translate3d(-300px, 0, 0);
    -moz-transform: translate3d(-300px, 0, 0);
    -o-transform: translate3d(-300px, 0, 0);
    -ms-transform: translate3d(-300px, 0, 0);
    transform: translate3d(-300px, 0, 0);
  }
  .nav-open .menu-on-right #bodyClick {
    right: 260px;
    left: auto;
  }
  .menu-on-right .sidebar {
    left: auto;
    right: 0;
    -webkit-transform: translate3d(260px, 0, 0);
    -moz-transform: translate3d(260px, 0, 0);
    -o-transform: translate3d(260px, 0, 0);
    -ms-transform: translate3d(260px, 0, 0);
    transform: translate3d(260px, 0, 0);
  }
  .navbar-minimize {
    display: none;
  }
  .sidebar {
    box-shadow: none;
  }
  .nav-open .sidebar {
    box-shadow: 0px 2px 22px 0 rgba(0, 0, 0, 0.2), 0px 2px 30px 0 rgba(0, 0, 0, 0.35);
  }
  .sidebar,
  .main-panel,
  .sidebar-wrapper {
    -webkit-transition-property: all;
    transition-property: all;
    -webkit-transition-duration: 0.5s;
    transition-duration: 0.5s;
    -webkit-transition-timing-function: cubic-bezier(0.685, 0.0473, 0.346, 1);
    transition-timing-function: cubic-bezier(0.685, 0.0473, 0.346, 1);
    -webkit-overflow-scrolling: touch;
  }
}

@media screen and (max-width: 768px) {
  [class*="pr-"] {
    padding-right: 15px !important;
  }
  [class*="pl-"] {
    padding-left: 15px !important;
  }
  [class*="px-"] {
    padding-left: 15px !important;
    padding-right: 15px !important;
  }
}

/*# sourceMappingURL=dashboard-pro.css.map */
</style>
@include("layouts.app-sidebar")
@include("layouts.app-header")
<!--start page wrapper -->
<div class="page-wrapper">
	<div class="page-content">
		<div class="row">
		       <div class="col-12 col-lg-12">
		          <div class="card radius-10">
				<div class="card-header">
					<div class="d-flex align-items-center">
						<div>
							<h5 class="mb-0"><b>@php echo app\Http\Controllers\Controller::staffname(Auth::user()->profileid) @endphp Signature</b></h5>
						</div>
						<div class="dropdown ms-auto">
							<a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown"><i class='bx bx-dots-horizontal-rounded font-22 text-option'></i>
							</a>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="javascript:;">Action</a>
								</li>
								<li><a class="dropdown-item" href="javascript:;">Another action</a>
								</li>
								<li>
									<hr class="dropdown-divider">
								</li>
								<li><a class="dropdown-item" href="javascript:;">Something else here</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				  <div class="card-body">
				  	<div class="form-body">
					 <form class="row" action="submitmysignature" id="submitmysignature" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="user" value="{{ Auth::user()->profileid }}">
					 	<div class="col-sm-12">
					 	<center>



					 		<!--image upload starts here--->
	                	<div class="fileinput fileinput-new text-center" data-provides="fileinput">
	                    <div class="fileinput-new border-gray">
	                      <img src="@if(!is_null(app\Http\Controllers\Controller::staffsignature(Auth::user()->profileid))) {{ asset(app\Http\Controllers\Controller::staffsignature(Auth::user()->profileid)) }} @else {{ asset('assets/images/signature.png') }} @endif" width="250px" alt="...">
	                    </div>
	                    <div class="fileinput-preview fileinput-exists border-gray">
	                      <img src="@if(!is_null(app\Http\Controllers\Controller::staffsignature(Auth::user()->profileid))) {{ asset(app\Http\Controllers\Controller::staffsignature(Auth::user()->profileid)) }} @else {{ asset('assets/images/signature.png') }} @endif" width="250px" alt="...">
	                    </div>
	                    <div>
	                    	
	                      <span class="btn btn-round btn-rose btn-file">
	                        <span class="fileinput-new">Add Photo</span>
	                        <span class="fileinput-exists">Change</span>
	                        <input type="file" name="pics" id="pics" />
	                      </span>
	                      <br />
	                      <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
	                    </div>
	                    
	                  	</div><br /><br />


	                  	<button type="submit" class="btn btn-info btn-round" id="button">Submit</button>
                      <img src="{{ asset('assets/images/processing.gif') }}" width="50px;" id="processing" class="processing" style="display: none;">

					 		
						</center>
					 	</div>
					 </form>
					 </div>
				  </div>
			  </div>
		   </div>
		</div>
	</div>
</div>
<!--end page wrapper -->
@include("layouts.app-footer")
@include("process.staffprofile")