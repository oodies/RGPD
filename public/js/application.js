var hostProvider = hostProvider || {};
(function (publics) {

    /** @type null|string */
    var _hostProviderList = null
    /** @type null|array */
    var _hostProviderData = null

    var privates = {}

    privates.initVar = function () {
      _hostProviderList = '#form_hostProviderList';
      _hostProviderData = $('#hostProviderData').data('provider');
    }

    privates.onChangeHostProviderSelect = function () {
      $(document).on('change', _hostProviderList, function () {
        var organization = _hostProviderData[$(this).val()];
        $('#form_hostingName').val(organization.legalName);
        $('#form_hostingStreetAddress').val(organization.address.streetAddress);
        $('#form_hostingPostalCode').val(organization.address.postalCode);
        $('#form_hostingAddressLocality').val(organization.address.addressLocality);
        $('#form_hostingAddressCountry').val(organization.address.addressCountry);
        $('#form_hostingCapitalAmount').val(organization.capitalAmount);
        $('#form_hostingDunsRcs').val(organization.dun);
        $('#form_hostingPhone').val(organization.telephone);
        $('#form_hostingEmail').val(organization.email);
      })
    }

    publics.init = function () {
      privates.initVar();
      privates.onChangeHostProviderSelect();
    }
  }(hostProvider)
)
