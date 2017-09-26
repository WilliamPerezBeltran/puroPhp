'use strict';

try {
  angular.module('reviewsTranslations');
} catch (e) {
  angular.module('reviewsTranslations', ['pascalprecht.translate']);
}

angular.module('reviewsTranslations').config(['$translateProvider',
  function ($translateProvider) {
    var translations = {
      'reviews': {
        'readMore': {
          'less': 'read less',
          'more': 'read more'
        },
        'sharePopup': {
          'share': 'Share your review',
          'thanks': 'Thanks for your review!'
        },
        'rating': {
          'noReviewsYet': 'Be the first to review',
          'total': '({{ total }} Reviews)',
          'star': {
            'popover': {
              '1': 'Cannot Recommend.',
              '2': 'Could Be Better.',
              '3': 'It\'s OK...',
              '4': 'Great App.',
              '5': 'Must Have App!'
            }
          }
        },
        'confirmationModal': {
          'no': 'Cancel',
          'yes': 'Delete',
          'deleteReply': {
            'header': 'Are you sure you want to delete this reply?'
          }
        },
        'owner': {
          'negativeReviews': {
            'notification': 'You have {{totalNegativeUnseenByOwner}} negative reviews you haven\'t replied to yet'
          },
          'notifications': {
            'option': {
              'none': 'Don\'t send notifications',
              'poor': 'For poor reviews',
              'all': 'For all reviews'
            },
            'title': 'Your Email Notification Settings'
          },
          'noReviews': {
            'title': 'No Reviews yet but stay tuned!'
          },
          'action': {
            'postReply': 'Post Reply',
            'cancel': 'Cancel',
            'setNotifications': 'Set Notifications',
            'changeApp': 'Change App',
            'delete': 'Delete',
            'edit': 'Edit',
            'reply': 'Reply'
          },
          'error': {
            'generic': 'Looks like something went wrong. <br/> Please try again later'
          }
        },
        'admin': {
          'action': {
            'data': 'Data',
            'manage': 'Manage',
            'statistics': 'Statistics'
          }
        },
        'public': {
          'action': {
            'reload': 'Reload.',
            'cancel': 'Cancel',
            'saveChanges': 'Save Changes',
            'post': 'Post',
            'editReview': 'Edit Review',
            'addReview': 'Add Review'
          },
          'error': {
            'generic': {
              'body': 'It appears there has been an internal server error with the action you requested. Please try again later.',
              'title': 'Something went wrong',
              'dislike': 'There was a problem trying to dislike this review.<br/><a>Click here</a> to refresh.',
              'like': 'There was a problem trying to like this review.<br/><a>Click here</a> to refresh.'
            },
            'conflict': {
              'review': {
                'edit': 'Looks like you are editing your review<br/>in a different window. <a>Click here</a> to refresh.',
                'new': 'You can only post a single review per App.<br/>If you wish to change your review, <a>refresh</a> and click<br/>Edit Review.'
              }
            },
            'changed': {
              'review': 'Looks like the review has changed.<br/><a>Click here</a> to refresh.'
            },
            'emptyRating': 'Oops! You need to rate this app',
            'emptyTitle': 'Oops! You need a title to post a review'
          },
          'form': {
            'editNote': 'Quick note: Editing your review and saving the changes will set the likes and dislikes back to 0.',
            'optional': '(optional)',
            'description': 'Description',
            'title': 'Title',
            'rating': 'Rate'
          },
          'by': 'by {{userName}}',
          'header': {
            'noReviews': 'Be the first to review this App'
          },
          'sortBy': {
            'label': 'Sort By:',
            'highestRate': 'Highest Rate',
            'lowestRate': 'Lowest Rate',
            'mostLiked': 'Most Liked',
            'mostRecent': 'Most Recent'
          }
        }
      }
    };
    $translateProvider.translations('en', translations);
    $translateProvider.translations(translations);
  }
]);
