jQuery(document).ready(function($) {
  // Allocate the bootstrapValidater to our form based on the forms id
  $("#contactPageSendMail")
    .bootstrapValidator({
      // Sets the validation for each field on the form
      fields: {
        // The fullname requi res at least 2 characters and can't be empty
        name: {
          validators: {
            stringLength: {
              min: 2
            },
            notEmpty: {
              message: "Please supply your full name"
            }
          }
        },
        company: {
          validators: {
            stringLength: {
              min: 2
            },
            notEmpty: {
              message: "Please supply your company name"
            }
          }
        },
        // The email can't be empty and must be a valid email address @ etc
        email: {
          validators: {
            notEmpty: {
              message: "Please supply your email address"
            },
            emailAddress: {
              message: "Please supply a valid email address"
            }
          }
        },
        // The phone can't be empty
        telephone: {
          validators: {
            notEmpty: {
              message: "Please supply your phone number"
            }
          }
        },
        // The message requires at least 10 characters and can only contain a max of 200 charcters and can't be empty
        message: {
          validators: {
            stringLength: {
              min: 10,
              max: 200,
              message:
                "Please enter at least 10 characters and no more than 200"
            },
            notEmpty: {
              message: "Please add a message"
            }
          }
        }
      }
    })
    .on("success.form.bv", function(e) {
      // Once validated it will be passed to the WordPress admin-ajax.php url
      var $form = $(e.target);
      $.ajax({
        type: "POST",
        url: ajaxurl,
        data: $form.serialize(),
        dataType: "json",
        success: function(response) {
          // On a successful response slides and fades in the success message
          $("#feedback")
            .append(
              '<div class="alert alert-success" id="success_message" role="alert"><i class="fa fa-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly</div>'
            )
            .slideDown(
              {
                opacity: "show"
              },
              "slow"
            );
          $("#contact-us-title").replaceWith("<h1>Thank you!</h1>");
          // Fade out the form
          $("#contactPageSendMail").fadeOut();
          // Reset all the values in the form to empty
          $("#contactPageSendMail").bootstrapValidator("resetForm", true);
        }
      });
      // Prevents the browser window refreshing
      e.preventDefault();
    });
});
jQuery(document).ready(function($) {
  $("#frontPageSendMail")
    .bootstrapValidator({
      // Sets the validation for each field on the form
      fields: {
        // The fullname requi res at least 2 characters and can't be empty
        name: {
          validators: {
            stringLength: {
              min: 2
            },
            notEmpty: {
              message: ""
            }
          }
        },
        company: {
          validators: {
            stringLength: {
              min: 2
            },
            notEmpty: {
              message: ""
            }
          }
        },
        // The email can't be empty and must be a valid email address @ etc
        email: {
          validators: {
            notEmpty: {
              message: ""
            },
            emailAddress: {
              message: ""
            }
          }
        },
        // The phone can't be empty
        telephone: {
          validators: {
            notEmpty: {
              message: ""
            }
          }
        }
      }
    })
    .on("success.form.bv", function(e) {
      // Once validated it will be passed to the WordPress admin-ajax.php url
      var $form = $(e.target);
      $.ajax({
        type: "POST",
        url: ajaxurl,
        data: $form.serialize(),
        dataType: "json",
        success: function(response) {
          // On a successful response slides and fades in the success message
          $("#feedback")
            .append(
              '<div class="alert alert-success" id="success_message" role="alert">Thanks - we will contact you back as soon as possible.</div>'
            )
            .slideDown(
              {
                opacity: "show"
              },
              "slow"
            );
          // Fade out the form
          $("#frontPageSendMail").fadeOut();
          // Reset all the values in the form to empty
          $("#frontPageSendMail").bootstrapValidator("resetForm", true);
        },
        failure: function(response) {
          // On a successful response slides and fades in the success message
          $("#feedback")
            .append(
              '<div class="alert alert-failure" id="failure_message" role="alert">Server Error - Your mail did not send. Please email info@lindoresgriffin.co.uk.</div>'
            )
            .slideDown(
              {
                opacity: "show"
              },
              "slow"
            );
          // Fade out the form
          $("#frontPageSendMail").fadeOut();
          // Reset all the values in the form to empty
          $("#frontPageSendMail").bootstrapValidator("resetForm", true);
        }
      });
      // Prevents the browser window refreshing
      e.preventDefault();
    });
});
