(($) => {
  "use strict";

  $(document).ready(function () {
    const { ajaxURL, welcomeNonce, redirectURL } = ajaxObj;

    const $dashboard = $("#fotawp-dashboard");

    /* Welcome notice script */
    $("#fotawp-welcome-notice").on(
      "click",
      ".notice-dismiss",
      function () {
        $.ajax({
          url: ajaxURL,
          method: "POST",
          data: {
            action: "fotawp_dismissble_notice",
            nonce: welcomeNonce,
          },
          success: function (response) {
            if (response.success) {
              console.log("Notice dismissed successfully.");
              $("#fotawp-welcome-notice").fadeOut(); // Hide the notice
            } else {
              console.log("Failed to dismiss notice!");
            }
          },
          error: function (jqXHR, textStatus, errorThrown) {
            console.log("Error:", textStatus, errorThrown);
          },
        });
      },
    );

    // FAQ Accordion
    $dashboard.find(".accordion-header").on("click", function () {
      var $item = $(this).closest(".accordion-item");
      var isActive = $item.hasClass("active");

      // close all others (remove this block if you want multiple open at once)
      $(".accordion-item").not($item).removeClass("active");

      $item.toggleClass("active", !isActive);
    });

    /* Plugin Installation */
    // Cozy Blocks installation
    $(".cozy-addons-install").click(function () {
      const $this = $(this);
      const $spinner = $this.find("#fotawp-admin-spinner");

      $spinner.removeClass("fotawp-display-none");
      $this.addClass("fotawp-disabled");

      $.post(
        ajaxURL,
        {
          action: "fotawp_install_and_activate_plugins",
          plugins: JSON.stringify(["cozy-addons"]),
          nonce: welcomeNonce,
        },
        function (response) {
          // alert(response);
          var checkJSON = /{.*}/; // Regular expression to match the JSON portion
          var match = checkJSON.exec(response);

          if (match) {
            var jsonResponse = match[0]; // Extracted JSON portion
            try {
              var responseObj = JSON.parse(jsonResponse); // Parse the extracted JSON

              if (responseObj.success === true) {
                // window.location.href = response.data.redirect_url;
                console.log("Plugin installed");
              } else {
                console.log("Error!");
              }
            } catch (error) {
              console.log("Error parsing JSON!");
            }
          }

          window.location.href = redirectURL;

          $spinner.addClass("fotawp-display-none");
          $this.removeClass("fotawp-disabled");
        },
      );
    });

    // Install Cozy Essential Addons/Advanced Import
    $("#install-required-plugins").click(function () {
      const $this = $(this);
      const $spinner = $this.find("#fotawp-admin-spinner");

      $spinner.removeClass("fotawp-display-none");
      $this.addClass("fotawp-disabled");

      $.post(
        ajaxURL,
        {
          action: "fotawp_install_and_activate_plugins",
          plugins: JSON.stringify([
            "cozy-addons",
            "cozy-essential-addons",
            "advanced-import",
          ]),
          nonce: welcomeNonce,
        },
        function (response) {
          // alert(response);
          var checkJSON = /{.*}/; // Regular expression to match the JSON portion
          var match = checkJSON.exec(response);

          if (match) {
            var jsonResponse = match[0]; // Extracted JSON portion
            try {
              var responseObj = JSON.parse(jsonResponse); // Parse the extracted JSON

              if (responseObj.success === true) {
                // window.location.href = response.data.redirect_url;
                console.log("Plugin installed");
              } else {
                console.log("Error!");
              }
            } catch (error) {
              console.log("Error parsing JSON!");
            }
          }

          window.location.href = redirectURL;

          $spinner.addClass("fotawp-display-none");
          $this.removeClass("fotawp-disabled");
        },
      );
    });
  });
})(jQuery);
