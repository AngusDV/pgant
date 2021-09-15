<?php
/*
 * Copyright 2010 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

/**
 * Service definition for Dfareporting (v2.1).
 *
 * <p>
 * Manage your DoubleClick Campaign Manager ad campaigns and reports.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/doubleclick-advertisers/reporting/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_Dfareporting extends Google_Service
{
  /** View and manage DoubleClick for Advertisers reports. */
  const DFAREPORTING =
      "https://www.googleapis.com/auth/dfareporting";
  /** View and manage your DoubleClick Campaign Manager's (DCM) display ad campaigns. */
  const DFATRAFFICKING =
      "https://www.googleapis.com/auth/dfatrafficking";

  public $accountActiveAdSummaries;
  public $accountPermissionGroups;
  public $accountPermissions;
  public $accountUserProfiles;
  public $accounts;
  public $ads;
  public $advertiserGroups;
  public $advertisers;
  public $browsers;
  public $campaignCreativeAssociations;
  public $campaigns;
  public $changeLogs;
  public $cities;
  public $connectionTypes;
  public $contentCategories;
  public $countries;
  public $creativeAssets;
  public $creativeFieldValues;
  public $creativeFields;
  public $creativeGroups;
  public $creatives;
  public $dimensionValues;
  public $directorySiteContacts;
  public $directorySites;
  public $eventTags;
  public $files;
  public $floodlightActivities;
  public $floodlightActivityGroups;
  public $floodlightConfigurations;
  public $inventoryItems;
  public $landingPages;
  public $metros;
  public $mobileCarriers;
  public $operatingSystemVersions;
  public $operatingSystems;
  public $orderDocuments;
  public $orders;
  public $placementGroups;
  public $placementStrategies;
  public $placements;
  public $platformTypes;
  public $postalCodes;
  public $projects;
  public $regions;
  public $remarketingListShares;
  public $remarketingLists;
  public $reports;
  public $reports_compatibleFields;
  public $reports_files;
  public $sites;
  public $sizes;
  public $subaccounts;
  public $targetableRemarketingLists;
  public $userProfiles;
  public $userRolePermissionGroups;
  public $userRolePermissions;
  public $userRoles;
  

  /**
   * Constructs the internal representation of the Dfareporting service.
   *
   * @param Google_Client $client
   */
  public function __construct(Google_Client $client)
  {
    parent::__construct($client);
    $this->servicePath = 'dfareporting/v2.1/';
    $this->version = 'v2.1';
    $this->serviceName = 'dfareporting';

    $this->accountActiveAdSummaries = new Google_Service_Dfareporting_AccountActiveAdSummaries_Resource(
        $this,
        $this->serviceName,
        'accountActiveAdSummaries',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'userprofiles/{profileId}/accountActiveAdSummaries/{summaryAccountId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'summaryAccountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->accountPermissionGroups = new Google_Service_Dfareporting_AccountPermissionGroups_Resource(
        $this,
        $this->serviceName,
        'accountPermissionGroups',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'userprofiles/{profileId}/accountPermissionGroups/{id}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'userprofiles/{profileId}/accountPermissionGroups',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->accountPermissions = new Google_Service_Dfareporting_AccountPermissions_Resource(
        $this,
        $this->serviceName,
        'accountPermissions',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'userprofiles/{profileId}/accountPermissions/{id}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'userprofiles/{profileId}/accountPermissions',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->accountUserProfiles = new Google_Service_Dfareporting_AccountUserProfiles_Resource(
        $this,
        $this->serviceName,
        'accountUserProfiles',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'userprofiles/{profileId}/accountUserProfiles/{id}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'userprofiles/{profileId}/accountUserProfiles',
              'httpMethod' => 'POST',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'userprofiles/{profileId}/accountUserProfiles',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'searchString' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'subaccountId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'sortField' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'ids' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'userRoleId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'sortOrder' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'active' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'patch' => array(
              'path' => 'userprofiles/{profileId}/accountUserProfiles',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'userprofiles/{profileId}/accountUserProfiles',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->accounts = new Google_Service_Dfareporting_Accounts_Resource(
        $this,
        $this->serviceName,
        'accounts',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'userprofiles/{profileId}/accounts/{id}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'userprofiles/{profileId}/accounts',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'searchString' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'sortField' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'ids' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'sortOrder' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'active' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'patch' => array(
              'path' => 'userprofiles/{profileId}/accounts',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'userprofiles/{profileId}/accounts',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->ads = new Google_Service_Dfareporting_Ads_Resource(
        $this,
        $this->serviceName,
        'ads',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'userprofiles/{profileId}/ads/{id}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'userprofiles/{profileId}/ads',
              'httpMethod' => 'POST',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'userprofiles/{profileId}/ads',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'landingPageIds' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'overriddenEventTagId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'campaignIds' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'archived' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'creativeOptimizationConfigurationIds' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'sslCompliant' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'sizeIds' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'sortOrder' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'type' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'sslRequired' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'creativeIds' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'creativeType' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'placementIds' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'active' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'compatibility' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'advertiserId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'searchString' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'sortField' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'audienceSegmentIds' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'ids' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'remarketingListIds' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'dynamicClickTracker' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'patch' => array(
              'path' => 'userprofiles/{profileId}/ads',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'userprofiles/{profileId}/ads',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->advertiserGroups = new Google_Service_Dfareporting_AdvertiserGroups_Resource(
        $this,
        $this->serviceName,
        'advertiserGroups',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'userprofiles/{profileId}/advertiserGroups/{id}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'userprofiles/{profileId}/advertiserGroups/{id}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'userprofiles/{profileId}/advertiserGroups',
              'httpMethod' => 'POST',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'userprofiles/{profileId}/advertiserGroups',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'searchString' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'sortField' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'ids' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'sortOrder' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'patch' => array(
              'path' => 'userprofiles/{profileId}/advertiserGroups',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'userprofiles/{profileId}/advertiserGroups',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->advertisers = new Google_Service_Dfareporting_Advertisers_Resource(
        $this,
        $this->serviceName,
        'advertisers',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'userprofiles/{profileId}/advertisers/{id}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'userprofiles/{profileId}/advertisers',
              'httpMethod' => 'POST',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'userprofiles/{profileId}/advertisers',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'status' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'searchString' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'subaccountId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'includeAdvertisersWithoutGroupsOnly' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'sortField' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'ids' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'onlyParent' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'sortOrder' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'floodlightConfigurationIds' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'advertiserGroupIds' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
              ),
            ),'patch' => array(
              'path' => 'userprofiles/{profileId}/advertisers',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'userprofiles/{profileId}/advertisers',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->browsers = new Google_Service_Dfareporting_Browsers_Resource(
        $this,
        $this->serviceName,
        'browsers',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'userprofiles/{profileId}/browsers',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->campaignCreativeAssociations = new Google_Service_Dfareporting_CampaignCreativeAssociations_Resource(
        $this,
        $this->serviceName,
        'campaignCreativeAssociations',
        array(
          'methods' => array(
            'insert' => array(
              'path' => 'userprofiles/{profileId}/campaigns/{campaignId}/campaignCreativeAssociations',
              'httpMethod' => 'POST',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'campaignId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'userprofiles/{profileId}/campaigns/{campaignId}/campaignCreativeAssociations',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'campaignId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'sortOrder' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),
          )
        )
    );
    $this->campaigns = new Google_Service_Dfareporting_Campaigns_Resource(
        $this,
        $this->serviceName,
        'campaigns',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'userprofiles/{profileId}/campaigns/{id}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'userprofiles/{profileId}/campaigns',
              'httpMethod' => 'POST',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'defaultLandingPageName' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'defaultLandingPageUrl' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'userprofiles/{profileId}/campaigns',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'archived' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'searchString' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'subaccountId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'sortField' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'advertiserIds' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'ids' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'excludedIds' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'advertiserGroupIds' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'sortOrder' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'overriddenEventTagId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'atLeastOneOptimizationActivity' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'patch' => array(
              'path' => 'userprofiles/{profileId}/campaigns',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'userprofiles/{profileId}/campaigns',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->changeLogs = new Google_Service_Dfareporting_ChangeLogs_Resource(
        $this,
        $this->serviceName,
        'changeLogs',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'userprofiles/{profileId}/changeLogs/{id}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'userprofiles/{profileId}/changeLogs',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'minChangeTime' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'searchString' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxChangeTime' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'userProfileIds' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'ids' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'objectIds' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'action' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'objectType' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->cities = new Google_Service_Dfareporting_Cities_Resource(
        $this,
        $this->serviceName,
        'cities',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'userprofiles/{profileId}/cities',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'dartIds' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'namePrefix' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'regionDartIds' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'countryDartIds' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->connectionTypes = new Google_Service_Dfareporting_ConnectionTypes_Resource(
        $this,
        $this->serviceName,
        'connectionTypes',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'userprofiles/{profileId}/connectionTypes/{id}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'userprofiles/{profileId}/connectionTypes',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->contentCategories = new Google_Service_Dfareporting_ContentCategories_Resource(
        $this,
        $this->serviceName,
        'contentCategories',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'userprofiles/{profileId}/contentCategories/{id}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'userprofiles/{profileId}/contentCategories/{id}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'userprofiles/{profileId}/contentCategories',
              'httpMethod' => 'POST',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'userprofiles/{profileId}/contentCategories',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'searchString' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'sortField' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'ids' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'sortOrder' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'patch' => array(
              'path' => 'userprofiles/{profileId}/contentCategories',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'userprofiles/{profileId}/contentCategories',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->countries = new Google_Service_Dfareporting_Countries_Resource(
        $this,
        $this->serviceName,
        'countries',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'userprofiles/{profileId}/countries/{dartId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'dartId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'userprofiles/{profileId}/countries',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->creativeAssets = new Google_Service_Dfareporting_CreativeAssets_Resource(
        $this,
        $this->serviceName,
        'creativeAssets',
        array(
          'methods' => array(
            'insert' => array(
              'path' => 'userprofiles/{profileId}/creativeAssets/{advertiserId}/creativeAssets',
              'httpMethod' => 'POST',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'advertiserId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->creativeFieldValues = new Google_Service_Dfareporting_CreativeFieldValues_Resource(
        $this,
        $this->serviceName,
        'creativeFieldValues',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'userprofiles/{profileId}/creativeFields/{creativeFieldId}/creativeFieldValues/{id}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'creativeFieldId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'userprofiles/{profileId}/creativeFields/{creativeFieldId}/creativeFieldValues/{id}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'creativeFieldId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'userprofiles/{profileId}/creativeFields/{creativeFieldId}/creativeFieldValues',
              'httpMethod' => 'POST',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'creativeFieldId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'userprofiles/{profileId}/creativeFields/{creativeFieldId}/creativeFieldValues',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'creativeFieldId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'searchString' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'sortField' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'ids' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'sortOrder' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'patch' => array(
              'path' => 'userprofiles/{profileId}/creativeFields/{creativeFieldId}/creativeFieldValues',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'creativeFieldId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'userprofiles/{profileId}/creativeFields/{creativeFieldId}/creativeFieldValues',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'creativeFieldId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->creativeFields = new Google_Service_Dfareporting_CreativeFields_Resource(
        $this,
        $this->serviceName,
        'creativeFields',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'userprofiles/{profileId}/creativeFields/{id}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'userprofiles/{profileId}/creativeFields/{id}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'userprofiles/{profileId}/creativeFields',
              'httpMethod' => 'POST',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'userprofiles/{profileId}/creativeFields',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'searchString' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'sortField' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'advertiserIds' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'ids' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'sortOrder' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'patch' => array(
              'path' => 'userprofiles/{profileId}/creativeFields',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'userprofiles/{profileId}/creativeFields',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->creativeGroups = new Google_Service_Dfareporting_CreativeGroups_Resource(
        $this,
        $this->serviceName,
        'creativeGroups',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'userprofiles/{profileId}/creativeGroups/{id}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'userprofiles/{profileId}/creativeGroups',
              'httpMethod' => 'POST',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'userprofiles/{profileId}/creativeGroups',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'searchString' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'sortField' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'advertiserIds' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'groupNumber' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'ids' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'sortOrder' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'patch' => array(
              'path' => 'userprofiles/{profileId}/creativeGroups',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'userprofiles/{profileId}/creativeGroups',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->creatives = new Google_Service_Dfareporting_Creatives_Resource(
        $this,
        $this->serviceName,
        'creatives',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'userprofiles/{profileId}/creatives/{id}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'userprofiles/{profileId}/creatives',
              'httpMethod' => 'POST',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'userprofiles/{profileId}/creatives',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'sizeIds' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'archived' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'searchString' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'campaignId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'sortField' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'renderingIds' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'ids' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'advertiserId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'studioCreativeId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'sortOrder' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'companionCreativeIds' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'active' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'creativeFieldIds' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'types' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
              ),
            ),'patch' => array(
              'path' => 'userprofiles/{profileId}/creatives',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'userprofiles/{profileId}/creatives',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->dimensionValues = new Google_Service_Dfareporting_DimensionValues_Resource(
        $this,
        $this->serviceName,
        'dimensionValues',
        array(
          'methods' => array(
            'query' => array(
              'path' => 'userprofiles/{profileId}/dimensionvalues/query',
              'httpMethod' => 'POST',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),
          )
        )
    );
    $this->directorySiteContacts = new Google_Service_Dfareporting_DirectorySiteContacts_Resource(
        $this,
        $this->serviceName,
        'directorySiteContacts',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'userprofiles/{profileId}/directorySiteContacts/{id}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'userprofiles/{profileId}/directorySiteContacts',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'searchString' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'directorySiteIds' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'sortField' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'ids' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'sortOrder' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->directorySites = new Google_Service_Dfareporting_DirectorySites_Resource(
        $this,
        $this->serviceName,
        'directorySites',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'userprofiles/{profileId}/directorySites/{id}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'userprofiles/{profileId}/directorySites',
              'httpMethod' => 'POST',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'userprofiles/{profileId}/directorySites',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'acceptsInterstitialPlacements' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'sortOrder' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'searchString' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'countryId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'sortField' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'acceptsInStreamVideoPlacements' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'ids' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'acceptsPublisherPaidPlacements' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'parentId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'active' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'dfp_network_code' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->eventTags = new Google_Service_Dfareporting_EventTags_Resource(
        $this,
        $this->serviceName,
        'eventTags',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'userprofiles/{profileId}/eventTags/{id}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'userprofiles/{profileId}/eventTags/{id}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'userprofiles/{profileId}/eventTags',
              'httpMethod' => 'POST',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'userprofiles/{profileId}/eventTags',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'searchString' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'campaignId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'sortField' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'enabled' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'ids' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'advertiserId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'adId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'sortOrder' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'eventTagTypes' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'definitionsOnly' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'patch' => array(
              'path' => 'userprofiles/{profileId}/eventTags',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'userprofiles/{profileId}/eventTags',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->files = new Google_Service_Dfareporting_Files_Resource(
        $this,
        $this->serviceName,
        'files',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'reports/{reportId}/files/{fileId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'reportId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'fileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'userprofiles/{profileId}/files',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'sortField' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'sortOrder' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'scope' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->floodlightActivities = new Google_Service_Dfareporting_FloodlightActivities_Resource(
        $this,
        $this->serviceName,
        'floodlightActivities',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'userprofiles/{profileId}/floodlightActivities/{id}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'generatetag' => array(
              'path' => 'userprofiles/{profileId}/floodlightActivities/generatetag',
              'httpMethod' => 'POST',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'floodlightActivityId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'get' => array(
              'path' => 'userprofiles/{profileId}/floodlightActivities/{id}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'userprofiles/{profileId}/floodlightActivities',
              'httpMethod' => 'POST',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'userprofiles/{profileId}/floodlightActivities',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'floodlightActivityGroupIds' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'sortOrder' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'searchString' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'sortField' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'floodlightConfigurationId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'ids' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'floodlightActivityGroupName' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'advertiserId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'tagString' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'floodlightActivityGroupTagString' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'floodlightActivityGroupType' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'patch' => array(
              'path' => 'userprofiles/{profileId}/floodlightActivities',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'userprofiles/{profileId}/floodlightActivities',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->floodlightActivityGroups = new Google_Service_Dfareporting_FloodlightActivityGroups_Resource(
        $this,
        $this->serviceName,
        'floodlightActivityGroups',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'userprofiles/{profileId}/floodlightActivityGroups/{id}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'userprofiles/{profileId}/floodlightActivityGroups/{id}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'userprofiles/{profileId}/floodlightActivityGroups',
              'httpMethod' => 'POST',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'userprofiles/{profileId}/floodlightActivityGroups',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'searchString' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'sortField' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'floodlightConfigurationId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'ids' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'advertiserId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'sortOrder' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'type' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'patch' => array(
              'path' => 'userprofiles/{profileId}/floodlightActivityGroups',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'userprofiles/{profileId}/floodlightActivityGroups',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->floodlightConfigurations = new Google_Service_Dfareporting_FloodlightConfigurations_Resource(
        $this,
        $this->serviceName,
        'floodlightConfigurations',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'userprofiles/{profileId}/floodlightConfigurations/{id}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'userprofiles/{profileId}/floodlightConfigurations',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'ids' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
              ),
            ),'patch' => array(
              'path' => 'userprofiles/{profileId}/floodlightConfigurations',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'userprofiles/{profileId}/floodlightConfigurations',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->inventoryItems = new Google_Service_Dfareporting_InventoryItems_Resource(
        $this,
        $this->serviceName,
        'inventoryItems',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'userprofiles/{profileId}/projects/{projectId}/inventoryItems/{id}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'projectId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'userprofiles/{profileId}/projects/{projectId}/inventoryItems',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'projectId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'orderId' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'ids' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'siteId' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'inPlan' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'sortField' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'sortOrder' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->landingPages = new Google_Service_Dfareporting_LandingPages_Resource(
        $this,
        $this->serviceName,
        'landingPages',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'userprofiles/{profileId}/campaigns/{campaignId}/landingPages/{id}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'campaignId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'userprofiles/{profileId}/campaigns/{campaignId}/landingPages/{id}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'campaignId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'userprofiles/{profileId}/campaigns/{campaignId}/landingPages',
              'httpMethod' => 'POST',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'campaignId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'userprofiles/{profileId}/campaigns/{campaignId}/landingPages',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'campaignId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'patch' => array(
              'path' => 'userprofiles/{profileId}/campaigns/{campaignId}/landingPages',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'campaignId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'userprofiles/{profileId}/campaigns/{campaignId}/landingPages',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'campaignId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->metros = new Google_Service_Dfareporting_Metros_Resource(
        $this,
        $this->serviceName,
        'metros',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'userprofiles/{profileId}/metros',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->mobileCarriers = new Google_Service_Dfareporting_MobileCarriers_Resource(
        $this,
        $this->serviceName,
        'mobileCarriers',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'userprofiles/{profileId}/mobileCarriers/{id}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'userprofiles/{profileId}/mobileCarriers',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->operatingSystemVersions = new Google_Service_Dfareporting_OperatingSystemVersions_Resource(
        $this,
        $this->serviceName,
        'operatingSystemVersions',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'userprofiles/{profileId}/operatingSystemVersions/{id}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'userprofiles/{profileId}/operatingSystemVersions',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->operatingSystems = new Google_Service_Dfareporting_OperatingSystems_Resource(
        $this,
        $this->serviceName,
        'operatingSystems',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'userprofiles/{profileId}/operatingSystems/{dartId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'dartId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'userprofiles/{profileId}/operatingSystems',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->orderDocuments = new Google_Service_Dfareporting_OrderDocuments_Resource(
        $this,
        $this->serviceName,
        'orderDocuments',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'userprofiles/{profileId}/projects/{projectId}/orderDocuments/{id}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'projectId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'userprofiles/{profileId}/projects/{projectId}/orderDocuments',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'projectId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'orderId' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'searchString' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'ids' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'siteId' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'sortOrder' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'sortField' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'approved' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),
          )
        )
    );
    $this->orders = new Google_Service_Dfareporting_Orders_Resource(
        $this,
        $this->serviceName,
        'orders',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'userprofiles/{profileId}/projects/{projectId}/orders/{id}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'projectId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'userprofiles/{profileId}/projects/{projectId}/orders',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'projectId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'searchString' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'ids' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'siteId' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'sortOrder' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'sortField' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->placementGroups = new Google_Service_Dfareporting_PlacementGroups_Resource(
        $this,
        $this->serviceName,
        'placementGroups',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'userprofiles/{profileId}/placementGroups/{id}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'userprofiles/{profileId}/placementGroups',
              'httpMethod' => 'POST',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'userprofiles/{profileId}/placementGroups',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'placementStrategyIds' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'archived' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'searchString' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'contentCategoryIds' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'directorySiteIds' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'sortField' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'advertiserIds' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'ids' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'sortOrder' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'placementGroupType' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pricingTypes' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'siteIds' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'campaignIds' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
              ),
            ),'patch' => array(
              'path' => 'userprofiles/{profileId}/placementGroups',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'userprofiles/{profileId}/placementGroups',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->placementStrategies = new Google_Service_Dfareporting_PlacementStrategies_Resource(
        $this,
        $this->serviceName,
        'placementStrategies',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'userprofiles/{profileId}/placementStrategies/{id}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'userprofiles/{profileId}/placementStrategies/{id}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'userprofiles/{profileId}/placementStrategies',
              'httpMethod' => 'POST',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'userprofiles/{profileId}/placementStrategies',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'searchString' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'sortField' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'ids' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'sortOrder' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'patch' => array(
              'path' => 'userprofiles/{profileId}/placementStrategies',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'userprofiles/{profileId}/placementStrategies',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->placements = new Google_Service_Dfareporting_Placements_Resource(
        $this,
        $this->serviceName,
        'placements',
        array(
          'methods' => array(
            'generatetags' => array(
              'path' => 'userprofiles/{profileId}/placements/generatetags',
              'httpMethod' => 'POST',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'tagFormats' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'placementIds' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'campaignId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'get' => array(
              'path' => 'userprofiles/{profileId}/placements/{id}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'userprofiles/{profileId}/placements',
              'httpMethod' => 'POST',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'userprofiles/{profileId}/placements',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'placementStrategyIds' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'sortOrder' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'archived' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'searchString' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'contentCategoryIds' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'directorySiteIds' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'sortField' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'advertiserIds' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'paymentSource' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'ids' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'sizeIds' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'compatibilities' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'groupIds' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'pricingTypes' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'siteIds' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'campaignIds' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
              ),
            ),'patch' => array(
              'path' => 'userprofiles/{profileId}/placements',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'userprofiles/{profileId}/placements',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->platformTypes = new Google_Service_Dfareporting_PlatformTypes_Resource(
        $this,
        $this->serviceName,
        'platformTypes',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'userprofiles/{profileId}/platformTypes/{id}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'userprofiles/{profileId}/platformTypes',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->postalCodes = new Google_Service_Dfareporting_PostalCodes_Resource(
        $this,
        $this->serviceName,
        'postalCodes',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'userprofiles/{profileId}/postalCodes/{code}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'code' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'userprofiles/{profileId}/postalCodes',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->projects = new Google_Service_Dfareporting_Projects_Resource(
        $this,
        $this->serviceName,
        'projects',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'userprofiles/{profileId}/projects/{id}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'userprofiles/{profileId}/projects',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'searchString' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'sortField' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'advertiserIds' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'ids' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'sortOrder' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->regions = new Google_Service_Dfareporting_Regions_Resource(
        $this,
        $this->serviceName,
        'regions',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'userprofiles/{profileId}/regions',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->remarketingListShares = new Google_Service_Dfareporting_RemarketingListShares_Resource(
        $this,
        $this->serviceName,
        'remarketingListShares',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'userprofiles/{profileId}/remarketingListShares/{remarketingListId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'remarketingListId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'patch' => array(
              'path' => 'userprofiles/{profileId}/remarketingListShares',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'remarketingListId' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'userprofiles/{profileId}/remarketingListShares',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->remarketingLists = new Google_Service_Dfareporting_RemarketingLists_Resource(
        $this,
        $this->serviceName,
        'remarketingLists',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'userprofiles/{profileId}/remarketingLists/{id}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'userprofiles/{profileId}/remarketingLists',
              'httpMethod' => 'POST',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'userprofiles/{profileId}/remarketingLists',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'advertiserId' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'name' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'sortField' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'sortOrder' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'active' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'floodlightActivityId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'patch' => array(
              'path' => 'userprofiles/{profileId}/remarketingLists',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'userprofiles/{profileId}/remarketingLists',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->reports = new Google_Service_Dfareporting_Reports_Resource(
        $this,
        $this->serviceName,
        'reports',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'userprofiles/{profileId}/reports/{reportId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'reportId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'userprofiles/{profileId}/reports/{reportId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'reportId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'userprofiles/{profileId}/reports',
              'httpMethod' => 'POST',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'userprofiles/{profileId}/reports',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'sortField' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'sortOrder' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'scope' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'patch' => array(
              'path' => 'userprofiles/{profileId}/reports/{reportId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'reportId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'run' => array(
              'path' => 'userprofiles/{profileId}/reports/{reportId}/run',
              'httpMethod' => 'POST',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'reportId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'synchronous' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'update' => array(
              'path' => 'userprofiles/{profileId}/reports/{reportId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'reportId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->reports_compatibleFields = new Google_Service_Dfareporting_ReportsCompatibleFields_Resource(
        $this,
        $this->serviceName,
        'compatibleFields',
        array(
          'methods' => array(
            'query' => array(
              'path' => 'userprofiles/{profileId}/reports/compatiblefields/query',
              'httpMethod' => 'POST',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->reports_files = new Google_Service_Dfareporting_ReportsFiles_Resource(
        $this,
        $this->serviceName,
        'files',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'userprofiles/{profileId}/reports/{reportId}/files/{fileId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'reportId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'fileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'userprofiles/{profileId}/reports/{reportId}/files',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'reportId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'sortField' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'sortOrder' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->sites = new Google_Service_Dfareporting_Sites_Resource(
        $this,
        $this->serviceName,
        'sites',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'userprofiles/{profileId}/sites/{id}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'userprofiles/{profileId}/sites',
              'httpMethod' => 'POST',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'userprofiles/{profileId}/sites',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'acceptsInterstitialPlacements' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'sortOrder' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'searchString' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'subaccountId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'directorySiteIds' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'acceptsInStreamVideoPlacements' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'ids' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'acceptsPublisherPaidPlacements' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'sortField' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'adWordsSite' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'unmappedSite' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'approved' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'campaignIds' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
              ),
            ),'patch' => array(
              'path' => 'userprofiles/{profileId}/sites',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'userprofiles/{profileId}/sites',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->sizes = new Google_Service_Dfareporting_Sizes_Resource(
        $this,
        $this->serviceName,
        'sizes',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'userprofiles/{profileId}/sizes/{id}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'userprofiles/{profileId}/sizes',
              'httpMethod' => 'POST',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'userprofiles/{profileId}/sizes',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'iabStandard' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'width' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'ids' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'height' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),
          )
        )
    );
    $this->subaccounts = new Google_Service_Dfareporting_Subaccounts_Resource(
        $this,
        $this->serviceName,
        'subaccounts',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'userprofiles/{profileId}/subaccounts/{id}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'userprofiles/{profileId}/subaccounts',
              'httpMethod' => 'POST',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'userprofiles/{profileId}/subaccounts',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'searchString' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'sortField' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'ids' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'sortOrder' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'patch' => array(
              'path' => 'userprofiles/{profileId}/subaccounts',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'userprofiles/{profileId}/subaccounts',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->targetableRemarketingLists = new Google_Service_Dfareporting_TargetableRemarketingLists_Resource(
        $this,
        $this->serviceName,
        'targetableRemarketingLists',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'userprofiles/{profileId}/targetableRemarketingLists/{id}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'userprofiles/{profileId}/targetableRemarketingLists',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'advertiserId' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'name' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'sortField' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'sortOrder' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'active' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),
          )
        )
    );
    $this->userProfiles = new Google_Service_Dfareporting_UserProfiles_Resource(
        $this,
        $this->serviceName,
        'userProfiles',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'userprofiles/{profileId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'userprofiles',
              'httpMethod' => 'GET',
              'parameters' => array(),
            ),
          )
        )
    );
    $this->userRolePermissionGroups = new Google_Service_Dfareporting_UserRolePermissionGroups_Resource(
        $this,
        $this->serviceName,
        'userRolePermissionGroups',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'userprofiles/{profileId}/userRolePermissionGroups/{id}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'userprofiles/{profileId}/userRolePermissionGroups',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->userRolePermissions = new Google_Service_Dfareporting_UserRolePermissions_Resource(
        $this,
        $this->serviceName,
        'userRolePermissions',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'userprofiles/{profileId}/userRolePermissions/{id}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'userprofiles/{profileId}/userRolePermissions',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'ids' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->userRoles = new Google_Service_Dfareporting_UserRoles_Resource(
        $this,
        $this->serviceName,
        'userRoles',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'userprofiles/{profileId}/userRoles/{id}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'userprofiles/{profileId}/userRoles/{id}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'userprofiles/{profileId}/userRoles',
              'httpMethod' => 'POST',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'userprofiles/{profileId}/userRoles',
              'httpMethod' => 'GET',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'searchString' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'subaccountId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'sortField' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'ids' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'sortOrder' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'accountUserRoleOnly' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'patch' => array(
              'path' => 'userprofiles/{profileId}/userRoles',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'userprofiles/{profileId}/userRoles',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
  }
}


/**
 * The "accountActiveAdSummaries" collection of methods.
 * Typical usage is:
 *  <code>
 *   $dfareportingService = new Google_Service_Dfareporting(...The cmaries" collection    thods.
 * Typical usage is:
 *  <code>
 *   $d ars Typic  'methods' = methods.
 * Typical usageing(...The cmaries" col      'path' => 'userprofes" collection    thods>
 *   $d ars Typic  'methods' = methods.
 * Typical usageing(...The cmaries" col      'path' => 'userprofes" collection    thods>
 *   $d ars Typic  'methods' = m  thods>
 *   $d ars Ty              ),
              ),
            ),
          )
        )
    );
  }
}


/**
 * The "accountActiveAdSummaries" collection of methods.
 * Typical usage is:
 *  <code>
 *   $dfareportingService = new Google_Service_Dfareporting(...The cmaries" collection   areporting(...The cmaries" collection   arervice = new Google_Service_Dfy...The cmaries" collelld' => arraprofileuired' => true,
      'type' => 'string',
              SSE    c...ction    thods>
 *   $d ars Typic  'methods' = m  thods>
 *   $d ars Ty              ),
              ),
            ),
          )
      s   ),
 *   $d ars Typic  'met
    );
  }
}


/**
 * i     sTy              ),
    ods>
 *   $d ars Ty      ),
          )
               ),
          ) $d ars Typic  'met
    )*
 * i     sTy         **
 * i     sTy         'type' =>    ),
          )
               ),
 o'GET',
              'padS   'profil'PATCH',
              'parameters' => arrrtActiveAdSummar              'padS   'pSe methods.
 * Ty  'profil'PAT    'padS   'pSe methods.
 * Ty  'profil'PAT    'padS   'pSe methods.
 * Ty  'profil'PAT    'padS   'pSe methods.
 * Ty  'profil'PAT    'padS   'rofil'PAT    'padS   'pSe rsI,
         'pSe methods.
 * Ty  'profil'PAT    'padS   'pSe methods.
 * Ty  'profil'PAT    profil'PAT  locatl'PAT    'padS   'pSe me        Dion' => 'query');
  }
}


/**
  'required' => true,
       ion    thods.
 * Typical usage is:
 *  <codrofil'PAT    profil'PAT  locatl'PAT    'padS    => 'query');
  }
}


/*
'PAT cal usagein ion    thods.
 * Typical usage is:
 *  <codrofil'PAT    profil'PAT  l    profil'PAT  locatl'PAT    'padS    => 'query');
  }
}


/*
'PAT cal usagein ion    thods.
 * Typical usage is:
 *  <codrofil'PAT    profil'PAT  l    profil'PAT  locatl'PAT    'padS    => 'query');
  }
}


/*
'PAT cal usagein ion    thods.
 * Typical usagsagein ion    thods.
 *,
        y(
        s => 'query');
  }
}


/*
'PAT cal usagein ion   is:
 * thods>
 *   $d s.
 * Typica eers' => array(
             cal usagein ion  l u),
        'query');
  }
}


/*
'agein 

/*n  l ques* thods>
 *aal us l u),
        'query')s.
     r              'pLi     sTofil'PAT  loc eters' => arrrtAct usc       'lo=> 'query');
  }
}


/*
'PAT cal usagein ion    thods.
 * Typica'subaccountId' => array(
                  'locatFz     ),
              ),
            ),
              'query')s.
     r              'pLi     sTofil'PAT  loc eters' => ami       'query')s.
     r              'pLi     sTofil>
 *   $d ars Typic  'methods' = m  thods>
 *   $d ars Ty              ),
              ),
            ),
          )
Tofil>
 *   $d ars Typic  '        ),
               'location' => 'query',
                  'type' => 'string',
                  'requit
 *   $d ars Typic  'methods' = methods.
 * Typ array(
                  d}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'pRoles',
         ,
              'httpMethod' => 'uuuEic  'methods' = m  thods>
 *   $d ars Ty              ),
              ),
      Tk(                 'httpMethod'        'httpMethod' => 'GET',
es',
         ,
              'httpMetho    'pLi     sTofil>      ),
       gbtype' => 'string',
     ay(
                  'location' => 'query',
            tTofil>      ),
       gbtype' => 'string',
     ay(
      )
Tofil>
 *   $d ars Typic  '        
Tofil>
 *   $d      'param      'type' => 'string',
                  'P.            'location' => o   ),n    thods.
 * Typica'subaccountId' => array(
                  'locatFz     ),
              ),
            ),
              'query')s.
     r    'location' => o   ),n    thods.
 * Typica'subaccountId              N              ),
            ),
          )
Tofil>
 *   $d ars Typic  '        ),
               'location' => 'query',
                  'type' => 'string',
                  'requit
 *   $d ars Typic  'methountId              N              ),
            ),
          )
Tofil>
 *   $d ars Typic  '        ),
               'location' => 'query',
                  'type' => 'string',
                  'requit
 *   $d ars Typic  'methountId              N         
 *dodscc
MethdTp   'requ
              'httpMethod' => 'GET',
thods.
 * Ty  'profil'PA'o       'methountId              N         
 *dodscc
MethdTp   'requ
              'httpMethod' => 'GET',
thods.
 * Ty  'profil'PA'o       'methountId         N     ythou=> 'GEdF            pic  '        ),
               'location' => 'query',
                  'type' => 'string',
                  'requit
 *                 ),
                'sor ion    thods.
 * Typical usage is:
 *  <codrofil'PAT    profil'PAT  locatl'PAT    'padS    => 'qu  ),
         n         d}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'pRoles',
         ,
              'httpMethod' => 'uuuEic  'methods' = m  thods>
 *   $d ars Ty              ),
              ),
      Tk(               df
      Tk(               df
      Tk(               df
      Tk(               df
      Tk(               df
      Tk(               )rofil'PA  df
      Tk(               )rofil'PA  df
      Tk(               )rofil'PA  df
      Tk(       => array(
         N           df
      Tk(      tho  df
   (            'parameters' => ararray(
         N      i           'type' => 'string',
            
                'profileN           df
      Tk(      ting',
     ay(
      )
Tofil>
 *   $d ars Typ            'httpMethod' =s' => ararray(
         N     
es',
         ,
              'httpMetho    'pLi     sTofil>      ),
       gbtype' => 'string',
     ay(
                  'location' => 'ql   afO
}


/*
'PAT cal usagein ion      'location' => 'ql   afO
}


/*
'PAT ca        'query')s.
                      'requirer*  <codrofil'PA     'profileId' => array(
   d' => 'uuuEic  'methods' =A     'profileId' =>             'type' => 'string',
                  'required' => trgintegd      o => '      'query')s.
                 'profileId' => array(
                  'location' => 'path',
   _Seay(
             cal usagein ilocation' => 'patSeay(
             cal usagein ilocation' => 'o.
           ),
Acp pp           ),
Acp pp        n' => 'path',
   _Seay(
             cal usagein ilocation' => 'patSeay(
             cal usagein ilodrofil'PAT    profil'PAT  locatl'PAT    'padS    => 'qu  ),
         ein ilocation' => 'patSeay(
             cal usagein ilodrofil'PAT    profil'PAT  locatl'PAT    'padS    => 'qu  ),
         ein ilocation' => 'patSeay(
             cal usagein ilodrofil'PATN             ca      einarofileId' => array(
                    'requiredi,  einarofileId' => arra ilodr           /=> 'qu  ),
         ein ilocation' => 'patSea=> 'ql   afOBg',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
               ' => 'GET',
              'parameters' => array(
               ttpMetho' =>    ' => 'GET',
            ' => 'GETo' => 'GET',
             'location' => 'path',
                  'type' drue,
                  'pSe methods.
 * Ty  tpMetho' =>    ' => 'GET',
          cal usagein ilocation' => nho' =>    ' => 'GET',a=> truT',
          cal usagein ilocation' => nho' =>    ' => 'GET',a=> truT',
          cal usagein ilocation' => nho' =>    ' => 'GET',a=> truT',
     I ),
         ein ilocation' => 'patSeay(
             cal usagein ilodrofil'PATN           on' => nho' =>    ' ruT',
            cal usagein         $this,
        $this->serviceName,
        'userRolePermissions',
        array(
          'methis->serviceName,
        'userRolePermissions',
        array(
          'methis->serviceName,
        'userRolePermissions',
   'requiredd(d
   sionAal usagein         $thisAal usagein         l'PA'o       'methountId equired' => true,
                ),
                'id' => array(
                  'location' => 'path',
                  'typ{unt              'required' => trgintegd      o => '      'query')s.
                 'profileId' => array(
                  'location' => 'path',
   _Seay(
             cal usagein ilocation' => 'patSeay(
             cal usagein ilocation' => 'o.
           ion' => gpatSeay> 'GETmethpe' => 'integer',
'pLi     sTofil'PAT  l'PA     'profileId' => arrist' => array   'parameters' => array(
                'pRoles',
         ,
              'httpMethod' => 'uuuEic  'methods'N    l'PA     'prof> ar    ye,
          ting',
     ay(
      )
Teay(
             cal usagh    tho  df
   (            'parameters' => ararray(
         NTeay(
             cal usagh    tho  df
   (            'paramecal usagein ilocation' => 'patSeay(
             cal usagehttpMethod' => 'GET',
              'parameters' => array(
                'pRoles',
         ,
              'httpMetho 'qu  ),
         n         d}',
              'httpMethod' => 'GET',
      => 'GET',
 ilocation' =>              'httpMethod' => 'GET',
      => iS         'paramecal usagein ilocation' => 'patSDpho 'qu  ),
         n  fers'ion' => 'patSDpho du  usagehttpMethodd' => 'GET',
      => iS         'paramecal usagei'GETdi us'PAT ca  o,
  'location' => 'path',
                  ' 'path',
                usagei'GETthod' => 'GET',
      =yn array(
                'pRoles',
         ,
              'httpMethod' => 'uuuEicsray(
       httpMethod' =>mecal usagein ilocai => arroynwRsist' => array   'parameers' => ararray(
         NTeay(
    csray(
       httpMeg',
                  'reqpMetho         N         
 *dodsc     c                lmer    'httpM 'pararayery')s.
     r          dr  => iScp pp           ),
Acp pp        n' => array(
                  'location' => 'query',
    dr  => iScp pttpM 'parara    nc
    ars Typic  'meeers' => ararray(
         NTeay(
    csray(
       httpMeg',
                  'reqpMetho ),
    GET',a=>> iScp pttpM 'parara  N  v             ),
              ),
      Tk(    tpM 'parar
thods.
 * Ty  'profil'P      ein ilo*dodsc     c                lmer    'httpM ds.
 * Ty    ting',
     ay(
      )
Tofil>
 *   $d ars Typ    Aation' => 'query',
    dr  => iScp ptdsc dsc  I ),
         ein ilocation' => 'patSeay(
             cal usagein ilodrofil'PATN           on' => nho' =>    ' ruT',
            cal usagein         $this,
        $this->serviceName,
        'userRolePermissions',
        array(
        agein ilodrofil'PATN      D         
 *dodsc     c                lmer    'httpM 'pararayery')s.
     r          dr  => iScp pp      
 *dodscc''  agein ilodrofil'PATN      D         
 *dodsc     c                lmer    'httpM 'pararayery')s.
     r     ' c       lmerayery')s.
     r     ' c    'httpM 'pararayery')s.
   array(
          'methis->serviceName,
        'userRolePermi usagh    tho  df
   (            'parar>servicmermi ung',
                  'P.            'location' => o   ),n    thods.
 * Typica'subaccountId' => array(
                  'locatFz     ),
              ),
               > truT',
     I ),
         ein ilocatio  I ),
         ein ilocatio  I ),
         ein ilocatioatFz     ),
              ),          ein ilo*d  n' => array(        ein ilo*d  n' ==> o   ),n    thods.
 * Typica'subaccountId' => array(
                  'locatFz     ),
              ),
               > truT',
  aru ==> o         'userRolePermissitFz     ),
              ),
               > truT',
  aru ==> o         'userRolePermissitFz     ),
              'userRolePermissions',         'userRolePermissitFz     ),
              'userRolePermissions',         'userRolePermissitFz     ),
              'userRolePermissions',         'userRolePermissitFz     ),
              'userRolePermissions',         'userRolePermissitFz     ),
  olePermissions',        holePermissions',         'userRolePermissitFz     ),
  olePermissions',        holePermissions',         'userRolePermissitFz     ),
  olePermissions',        holePerleId' => array(
   d' => 'uuuEic  'methods' =A     'profileId' =>             'type' => 'string',
ce = new Google_Service_   '
  olePIermissi
        $t  n' ==> o',
         ,
      hd' le_Service_   '
  olePIermissi
      'path',
   _Seay(
             cal usagein ilocation' => 'patSeay(
             cal usagein ilocation' => 'o.
           ion' => gpatSeay> 'GETmethpi rRolePermissitFz     ),
              'userRolePermissions',         'userRation' => 'o.
    gr  'mfk => 'o.sions',         'userRation' => 'o.
    gr  'mfk => 'o.sions',         'userRation' => 'o.
    gr  'mfk => 'o.sions',         'userRation'      o.sions',        arayery')s.
     r          dr  => iScp pp t         gr  'mfk => 'o.srRation' => 'o.
    gr  'mfk => 'o.sions',         'userRation'e> 'o.sionsR     'reqpMetho         N         
 'o.srRation' => 'o.
    gr  'm     ,
      hd' le_Service_   '
'GETmethpi rRolem        cal usagein ilocation' => 'patSeay(
e' => 'strin       dr  => iScp pp           ),
Acp pp        n' => array(
                   'httpMethod' => 'GET',
      => 'GET',
 ilocation' =>              'httpMethod' => 'GET',
      => iS         = dr  => iScp pp           ),
Acp pp          le       ),
      Tk(    tpM 'parar
thods.
 * Ty  'profil'P      ein ilo*dodsc     c                lmer    'httpM ds.
 * Ty    ting',
     ay(
      )
Tofil>
 *   $d ars Typ    Aation' => 'query',
    dr  => iScp ptdsc dsc  I ),
         ein ilocation' => 'pasc      'reqpMe  'profil'P      ein ilo*dodsc     c                lmer    'httpM
 * Ty    tition' => 'q h.
 * Ty    ting',
     ay(
      )
Tofil>
 e  'location' => 'query',
            tTofilnterstitialPlacements' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'sortOrder' => array(
                  'location' => 'query',
                  'type' => 'string',
         aery',
            =>    ' => 'GET',a=> truT',
     'I   ' => 'GET',a=> truT',
     'I   ' => 'GET',a=> truT',
     'I   ' => 'GET',a=> truT',
     'I   ' => 'G    )rofil'PA  df
      Tk(               )rofil'        l'        l'        l'     => 'GET',aarray(
          l'        l'i>            ),
Acp pp         l'        l'i>            ),
Acp pp         l'        l'i> ruT',
            cal usagein         $this,
   > 'GET'   l'            l,
            cal usagein         $this,
pm          cal usagein         $thicatioountId' => aru   l'            l,
            cal usagein         $this,
pm         eId' => array(
                  'location' => 'path'   Tk(               )rofil'        l'        l'        l'     => 'GET',aarray(
          l'        l'i>            ),
Acp pp         l'        l'i>                  vcatioountId' => aru   l'    atioountId' => aru   l'    atioountId' => aru   l'    atioountId' => aru   l'    atioountId' => aru   l'    atioountId' => aru   l'    atioountId' => aru   l'    atioountId'g' => aru   l'    atioou> 'o.sionsR     'reqpMetho         N         
 'o.srRation' => 'o.
    gr  'm     ,
      hd' le_Service_  le_Service_  le_Service_  le_Service_  le_Sgpic  'meeers' => ararray(
         NTeay(
    csray(
       httpMeg',
                  'reqpMeth=> aru   l'  y(
       => '  "=> array(
                 t
                'pRoles'* Typic ruT',
            cal usagein         $this,
   > 'GET'   l'   
                 t
                'pRoles'* Typic ruT',
            cal usagein         $this,
   > 'GET'   l'   
   e ,rray(
              'path' => cal usagein         $this,
   > 'GET'   l'   
   e ,rray(
              'path' => cal usagein         $this,
   > 'GET'   l'   
   e ,rray(
              'path' => cal usagein         $this,
   > 'GET'   l'   
   e ,rrion' => 'o.
                 $this,
    => 'o.
         rray(
         NTeay(
    csray(
       httpMeg',
                  'reqpMetho ),
    GET',a=>> iScp pttpM 'parara  N  v             ),
              ),
      Tk(    tpM 'parar
thods.
 * Ty  ervice_   '
     'httpMethod'                        'type' =>  dsc  I ),
         ein pU      'id' => array(
                  'locata  c            a     'typ  ay(
      )
Tofe      ein pU      'id5
               'location' => 'query',
                  'typ      eithicsray(
  t
     l  le_Service_  le_Servict
    
O       'httpMethod' => 'GET',
      => iS   aay(
         =>> iScp pttpM 'parara  N  v             ),
              ),
      Tk(    tpM 'parar
thods.
 * Ty  ervice_   '
     'httpMethod'                        'type' =>  dsc  I ),
         ein pU      'ido usagein         $this,
   > 'GET'   l'   
   e ,rray(
              'path' => cal usagein         $this,
   > 'GET'   l'   
   e ,rray(
              'path' => cal usagein         $this,
   > 'GET'   l'   
   e ,rrion' => 'o.
                 $this,
    => path' =>'   l'   
   e ,rray(
o.
          l'   
     'userRation' => 'o.
    gr  'mfk => 'o.sions',         'userRation' => 'o.
    gr  'mfk => 'o.sions',         'userRation' => 'o.
    gr  'mfk => 'o.sions',         'userRation'      o.sions',        arayery')s.
     r          dr  => iScp pp t         gr ara  N  v CCein pU      'ido usagein         $this,
   > 'GET'   l'   
   e ,rray(
              'path' => cal usagein  A(
           'path' => cal usagein  A(
           'pa=> cal usagein  t      NTeay(
    csray(
       httpMeg',
                  'reqpMetho ),
    GET',a=>> iScp pttpM 'parara  N  v             ),
              ),
      Tk(    tpM 'parar
thods.
 * Ty  ervice_   '
     'httpMethod'                        'type' =>  dsc  I ),
  Method'                        'type' =>  dsc  I ),
  Method'    ' => 'uuuEic  'methods' =A   => cal usagein  A(
           'path' => cal ustype' =>  dsrRatio$d      'par   'type' =>  d                       { t      NTeay(
    csray(
       httpMeg',
                  'reqpMetho ),
    GET',a=>> iScp pttpM 'parara  N  v             ),
              ),
      Tk(    tpM 'parar
thods.
 * Ty  ervice_   '
     'httpMethod'                        'type' =>  dsc  I ),
ie> iScp => iScp pp t         gr ara  N  v CCein pU      'ido usagein         $this,
   > 'GET'   l'          sc  I ),
ie> iScp => iScp T',
            cal usagein         $this,
   > 'httpMethod' => nra  N  v CCein pU      'ido usagein         $this,
   > 'GET'   l'   
   e ,rray(
         ,
                  'reqpMetho ),
    GET',a=>>  N  v rvict
    his,
   > 'Go'   l'     apMe ype' =cal usagein         $th' =>                   'reqpMpU   ion              NTeay(
    csray(
       NTeay(
    csray(
       NTeay(
    csray(
       NTeay(
    csray(
       NTeay(
    csray(
       NTeay(
    csray(
       NTeay(
l'   sray(
      D           'reqpMpU   ion              NTeay(
    csray(
       NTeay(
    csray(
       NTeay(
    csray(
       NTeay(
    csray(
       NTeay(
    csray(
       NTeay(
    csray(
       NTeay(
l'   sray(
      D           'reqpMpU   ion              NTeay}


/*
'age
               N         
 *dodscc
MethdTp   'requ
sray(
       NTeay(
l'   sray(
     serRation' => 'o.
                 v        NTeay}


/*
'age
' =>  d       ypica'subaccountId' => array(
                  'locatFz     ),
              ),
               > truT',
     I         'reqpMpU   ion              NTeay}


/*
'age
          y(
    eay(
    csray(
       NTeay(
             y(
    eay(
    csray(
       NTeay(
             y(
    eay(
    csray(
       NTeay(
      =My(
       d         NTeay(
     
/*
'age
n   
/*
'd*
'age
n   
/*
'd*
'age
n   
/v  I ),
         ein pU      'id' => array(
                  'locata  c            a     'typ  ay(
      )
To
    tTk(              e   'path' => cal usagein  A(
           'path' => cal usagein  A(
           'pa=> cal usagei    'locata buu   e      'pa=> cal usageigein  Irions',         'userR   =>        $this,
pm  tTk(              e   'path=> cal usageigein  Irions',         'uy(
       NTeay(
l'   sray(
     serRation' => 'o.
                 v        NTeay}


/*
'age
' =>.sis',   A(
           'pathi(iNTeay(
    csray(
       NTeay(
l'   GGe'PA     'profileId' => arrist'rf
/*
'd*
'age
n   
/v  I ),
   ysrofileId' => arri     y(
    eay(
    csray(
       NTeay(
              'typ      eithicsray     'query')s.
        Teay(
    csray(
       NTofileId' => arrist'rf
/*
'd*
'age
n   
/v  I ),
 Fz hd' le_Service_   '
  olePIermissi
      'path'sions',         'ul'   G Fz hd}


/*
'PAT       irpa=> cal 'requ
sray(
       NTeay(
l'   sray(
     serRation' => 'o.
                 v        NTeay}


/*
'ad' => arrist'rf
/*
'd*
'age
n   
/v  I ),
 Fz hd' le_Service_   '
  olePIermissi
 ysrofil.
'ad' =>    gd> cal 'requ
sray(
       NTeay(
l'   sr' => 'q h.
 * 'age
' =>.sis',   A(
           'pathi(iNTeay(
    csray(
     NTofileId' => Hmt'rf
/*
'd*
'age
n   
/v  I ),
 Fz hd' le_Service_   '
  olePIermissi
      'path'sions',         'ul'   G Fz hd}


/*
'PAT       irpa=> cal 'requ
sray(
       NTeay(
l'   sray(
     serRation' => 'o.
                 v        NTeay}


/*
'ad' => arrist'rf
/ $this,
   > 'GET'   l'   
   e ,rray(
              'path' => cal usagein  A(
           'path' => cal usagein  A(
           'pa=> cal usagein  t      NTeay(
    csray(
       httpMeg',
                  'reqpMetho ),
    GET',a=>> iScp pttpM 'parara  N  v    's
           NTeay(
    csray(          'path' => caion' => 'o.
    gr  'mfk => :th' => caion' => 'o.
    gr  'mfk => :th' => caion' => 'o.
    gr  'mfk => :th' => caion' => 'o.
    gr  'mfk => :th' => caion' => 'o.
    giqpMetho N         
 'o.srRation' => 'o.
    gr  'm     ,
      hd' le_Service_  le_Service_  le_Service_  le_Service_  le_Sgpic  'meeers' => ararray(
         NTen' => 'o.
    giqpMetho N         
 'o.srRation't          'path' => caion' => 'o.
   'requ
sray(
       NTeay(
l'   sr'oicaion' NTeay(
    csray     NTen' => 'olo.
    gr  'mfk => :th' => caion' => 'o.
    gr  'mfk => :th' => caion' => 'o  'mfk => :th' => caion' => 'o.
    gr  'mfk => :th' =>erRation' =>_Service_  le_Sgpic  'meeers' => ararray(
         NTen' => 'o.
    giqpMe => 'o.
    gr  'mfk => :th' goscp        dTp    cson' =>f => arre_  le_Sgpic  'meeeiccson' =>f => arre_  lef =Nbpath' => cal usagein        gr  'mfk => :th' => caion' => 'o.
    gr  'mfk => :th' => caion' => 'o  'mfk => :th' => caion' => 'o.
  e_Service_ cal usagrvice_arre_  lef =Nbpath' => cal usagein  ,flef =Nbpath' => cal usagein        gr  'mfk => :th' => caion' => 'o.
    gr  'mfk => :th' => cain' => 'o.
    gr  'mfk => :          'pa   s => cal usagein         $this,
   > 'GET'   l'    ,
     l'    ,
     l'    ,
   => 'o  'mfn' => 'o.
    gocat'    ,L  l'   cal usat D           'reqpd,flef =Nbpath' =m $this,
   >  'GET'   l'    ,
     l'  atioountId'>  'GE  >  'Gcaion' => 'o.
  e_Service_ cal usagrvice_arre_  ho N         
 '-e  N  v             ),
              ),
 "ervice_  le_Service_  le_Se'R drofi 'GE ),rvice
 "ervice_  le_Service_  le_atay(
l'   sray(
r  le_atay(
l'   sray(
r  le_atay(
l'   sray(
r  le_atay(
l'   sray(
r  le_atayw,   sray(
r  le_atay(
l'   cveigein  Irioon' => 'o.
    gr  'mfk => :th' => cain' => 'GET'   l'    ,
     l'    ,
     l'    ,
   => 'o  'mfn' => 'o.
    gocat'    ,L  l'   cal usat D           'reqpe N   'locm),
    GET',a=>>  N  v rvict
    his,
   > 'Go'   l'     apMe ype' =cal usagein         $th' =>              a=> cal usagei    'locata buu   e     'paramecal usagei'   'reqpe N   'locm),
    Gat D    A(
           'pathi(iNTeay(
=> 'GET'   l'    
    GET',a=>>  N  v rvict
    his,
   > 'Go'   l'     apMe ype' =cal usagein         $th' =>              a=> cal usagei    'locata bu=> cal usagei    'locata bu=> cal usagei    'locy(
     vic=w   array(
        agein ilodrofil'PATN      D         
 *dodsc     c                lmer    'httpM 'pararayery')s.
     r          dr  => iScp pp      
 *dodscc''  agein ilodrofil'PATN      D         
 *dodsc     c                lmer    'httpM 'pararayery')tn=>     :th' goscp    ay(
l'  e     'paramecal usagei'   'reqpe N  pa ay(
l' :th' => cain' ervicg     r          dr  => iScpk => 'o.sions',           ),
 "ervi
 *dodsc dr  l => 'o.sions',           ),
    csray(
       NTeay(
      =My(
       d         :th' goscp cMe ype' =cal usagein         $th' =>              dr  => iScp pp      
 *dodscc''  agein ilodrofil'PATN      D         
 *dodsc  Ml usageigein  Irioon' => 'o   d         :th' goscp cMe ypeMTeay}


/*
'age
  Trioon' => 'o   d  sagein   i           ),
          => 'o.sions',           ),
    csray(
       NTeay(
      =My(leOnlay(
    C(
      =My(leOnlay(
 w          N         
 *dodscc
MethdTp   'requ
srpa ay(
l' :th' => cain' ervicgara ),
          => 'o.sions',          (leOnlay(
    C(
     PATN   ioon' => 'o   d         :th' gin   i           ),
   cgara ),
          => 'o.sions',          (leOnlay(
'GET' m> 'o.sions',          (leOnlay(
'GET' m> 'ooc  '
  olePIermissi
      'path'sions',         'ul'   GewA        => 'o.sions',          (leOngein ilodrofil'PATN      D(d
        'httpMethod'                        'type' =>  dsc  I ),
         ein pU      'ido usagein         $this,
   > 'GET'   l'   
   e ,rray(
              'path' => cal usagein         $this,
   > 'GET'   l'   
   e ,rray(
              'path' => cal usagein     r  usagein         $this,
   > 'GET'   > 'G  'pET'   l'   
   e   $this,
   
             d 
             d 
             d 
             d 
             d 
(    d 
(    d 
      NT_Seay(
    e   $this,
   
             d 
             d 
            
         ET'   > 'G  'u
sray(
      s > 'G  'pET'   l'   
   e   $this,
   
             d 
             d 
             d 
             d 
    
     y(
         NTen 'G  'u
srayNTen 'G  'u
srayN       d 
             d 
             d 
    
     y(
         NTen 'G  'u
srayNTen 'G       $this,
   > 'GET'   l' toTen' => 'o.Yo          d 
             d 
    
     y(
            'path' => caion' => 'o.
   'requ
sray(
       NTeay(
l'   sr'oicaion' NTeay(
    csray     NTen' => 'olo.
    gr  'mfk => :th' => caion' => 'o.
    gr  'mfk => :th' => c    uofil'PA   ),    l' d 
a gr  'mfk =  gr  'mfk => :thgr  'mfk => :th' => caio'mfk => :th' => r> 'GET'   l'   
   e ,r'mfk => :th' => caion' => 'o.
    gr  'mfk => :th' => caion' => 'o.
    gr  'mfk => :th' => caion' => 'o.
    giqpMethions',         epath' => k => :th' d 
a gr  'mfk =  gr  lwbpath' => colo.
    gr  'mfk => :th' => caion' => 'o.
    gr  'mfk => :th' => c    uofil'PA   ),    l' d 
a gr  'mfk =  gr  'mfk => :thgr  'mfk caion'         'P.              c    uofe_arre_  ho t => 'o.
    gr  'mfk => :th' => c    uofil'PA   ),    l' d 
a gr  'mfk =  gr  i           ),
   cgaru  'mfk caion'      s,
   > 'GET'   l' toTen' => 'o.Yo          d 
hRiDarre_  ho t => 'o.
    gr  'mfk ='   sr'oi         'path' uofe_ar  'mfk =  gr    
   eNmfk caion'         'P.              c    uofe_arre_  ho t => 'o.
    gr  'mfk => :th' p caion'      s,
   nervice_ cal usagrvycp    ay(
l'  e     'paramec 'GET'   l' toTen' => 'o.Yo          d 
hRiDarre_  ho t => 'o.
    gr  'mfk ='   sr'oi       osr'p ='       => caion' => 'o.
    gDu' => 'o.
    gr  'mfk => :th' => c    uofil'PA    gr  'mfk => :th' => caion'mfke  giqpMethions',         epath' => k => :th' d 
a gr  'mfk =  gr  lwbpath' => colo.
    gr  'mfcaion' => 'o.
    gDu' uofil'PA    gr  'mfk => :th' => caion'mfke  'o.
    gr  'mfk => :th'C'mfk => :th'C'mfk => :th'C'mfk => :th'C'mfk => :th'C'mfk => :th'C'mfk => :th'C'mfk => :th'C'mfk => :th'C'mfk => :th'C'mfk => :th'C'mfk => :th'C'mfk => :th'C'mfk => :th'C'mfk => :th'C'mfk => :th'C'mfk =y        al'PA   'mfk => :th' => c    uofil'PA    gr  'mfk => :th' => caion'mfke  giqpMethions',       vD=> :th'C'mfk  =>              dr  => iSv    'lo       vD=> :th'C'   vD=> :th'C'   vD=> :th'C'   vD=> :th'C'   vtC'   vD=> :th'C NTeay(
      =My(
       d         :th' goscp cMe ype' =cal usagein         $th' =>              dr  => iScp C'mfk => :th'C'mfk => :th'C'mfk => :th'C'mfk => :th'C'mfk => :th'C'mfk =y        al'PA   'mfk => :th' => c    uofih'sions',         'ul'   GewA        => 'o.sions',          (leOngein ilodrofil'PATN      D(d
        'httpM> :th'C'mfk => :th'C'mfk => :th'C'mE_   'ul'   GewA        => 'o.sions',          (ler  => iS      d olePIermissi
        $agein ilodrofil  => iS => cal usagein     r  usagein         $this,
   > 'GET'   > 'G  'pET'   l'   
   e   $this,
   
             d 
             d 
sz dsc  I ),
ie> iScp => iScp pp t         gr ara   e   $this,
   
             d 
             d 
             d 
             d 
             d 
(ion' => 'o.
    giqpMethions',         epath' => k => :th' d 
a gr  'mfk =  gr  lwbpath' => colo.
    go 
        dr  => iSv    'lo    ok =  gr  lwbpath' => co ein pU      'ido usagein         $this,
   > 'GET'   l'   
   e ,rray(
              'path' => cal usagein      dr  => iSv    'lo    'mfk =awbpath' 'i iSc  lwbpeth colo.
    go 
        dr  => iSv    'lo    ok =  gr  lwbpath' => co ein pU      'ido usagein         $this,
   > 'GET'   l'   
   e ,rray(
              'path' => cal usagein      dr  => iSv    'lo    'mfk =awbpath' 'i iSc  lc        ),
 "ervi
 *dobpath' 'i iSc  lc        ),
 "ervi
 *dobpath' 'i iSc  lc        ),
 "ervi
 *dobpath' 'i iSc  lc        ),
 "ervi
 *dobpath' 'i iSc  lc        ),
 "ervi
 *dobpath' 'i iSc  lc        ),
 "ervi
 *dobpath' 'i iSc  lc        ),
 "ervi
 *dobpath' 'i iSc  lc       FF''mfk =awbpath' 'i iSc  lwbpeth colo.
    go 
        dr  => iSv    'lo    ok =  gr  lwbpath' => co ein pU      'ido usagein         $this,
   > 'GET'   l'   
   e ,rray(
              'path' => cal usagein      dr  => iSv    'lo    'mfk =awbpath' 'i iSc  lc r  lwbpath' => co ein pU,
   > 'GET'  'o.
    gr  'mfk => :th' => cain' => 'o.
    gr  'mfk => :          'pa   s => cal usag e   $this,
   
             d 
             d 
   ;his,
   
             d 
             d 
sz dsc  I ),
ie> iScp => iScp pp t         gr ara   e   $this,
   
             d 
             d 
             d 
             d 
             d 
(ion' => 'o.
    giqpMethions',  xhdsc  I ),
ie   d 
hRiDarre_  ho t => 'o.
    gr  'mfk ='   sr'oi         'ptf     d 
   ;his,
   
             'reqpMetho ),
  d 
   ;his,
   
             'reqpMetho ),
  d 
   ;his,
   
             'reqpMetho ),
  d 
   ;his,
   
             'reqpMetho ),
  d 
   ;his,
   
             'reqpMetho ),
  d 
   ;his,
   
             'reqpMetho ),
  d 
   ;his,
   
             'rero=> '  "=> array(
                 t
                'pRoles'* Typic ruT',
            cal usagein         $this,
   > 'GET'   l'   
                 t
                'pRoles'* Typic ruT',
            cal usagein         $this,
   > 'GET'   l'   
   e ,rray(r "ervi
 *dobpath' 'i iSc  lc        ),
 "ervi
 *dobpath' 'i ipatcpa   s => cal usag e   $this,
   
             d 
             d 
   ;his,
     e   $this,
   
       u      ),
   cgar        'ptf             d 
   ;his,
     e   $this,
   
       u      ),
   cgar        'ptf      a   s =>  ay(
      )
To
    tTk(              e   ein pU      'ido usagein         $this,
   > 'G N  v             ),
              ),
 "ervice_  le_Service_  le_Se'R drofi 'GE ),rvice
 "ervice_  le_Service_  le_atay(
l'   sray(
r  le_atay(
l'   sray(
r  le_atay(
l'   sray(
r  le_atay(
l'   sray(
r  le_atayw,   sray(
r  le_atay(
l'   cveigein  Irioon'  'mfk =awbpath' 'i iSc  lc        ),
 "ervi
 *dobpath' 'i iSc  lc        ),
 "ervi
 *dobpath' 'i iSc  lc    fervi
 *dobpath' 'i iSc  lc        ),
 "ervi
 *dobpath' 'i iSc  lc    fervi
 *dobpath ilod=awbpath' eil usagein         $this,
       $this,
       $this,
       $this,
       $this,
       $this,
       $this,
       $this,
       $this,
       $this,
       $this,
       $this,
       $this,
 geidobpaI lc     lc    fervi
 *dobpath' '       y(
    eay('* Typic ruT',
            cal usagpo  )
        )
    );
  }
}

rvice_  le_Service_  le_Se'R drofi 'GE ),rvice
 "ervice_  le_Service_  le_atay(
l'   sray(
r  le_atay(
l'   sray(
r  le_atay(
l'   sray(
r  le_atay(
l'   sray(
r  le_atayw,   sray(
r  le_atay(
l'   cveigein  Irioon'  'mfk =awbpath' 'i iSc_o  )
        )
    );
  }
}

rvice_  le_Service_  le_Se'R drofi 'GE ),rvice
 "ervice_  le_Service_  le_atay(
lsray(
r  le_atay(
l'   sray(
r  le_atay(
l'   sray(
r  le_atayw,   sray(
r  le_atay(
l'   cveigein  Irioon'  'mfk =awbpath' 'i iSc_o  )
        )
    );
  }
}

rvice_  le_Service_  le_Se'R drofi 'GE        d 
           sray(
r  le_at>
        )
    );
  }
}

rvice_  le_Service_yda   s => cal usag e   $this,
   
             d 
             d 
   ;his,
     e   $this,
   
       u      ),
   cgar        'ptf             d 
   ;his,
     e   $this,
   
       u      ),
   cgar        'ptf              d araboolwbpSc  l      u      ),
   cgar        'ptf             d 
   ;his,
     e   $this,
   
       u      ),
   cgar        'ptf              d e   $this,
      u      ),
   cgar        'ptf             d 
   ;his,
     e   $this,
   
       u      ),
   cgar        'ptf              d e   $this,
      u      ),
   cgar        'ptf             d 
   tIhis,
   > 'G N  v         leOngeinza- u      ),
   cgar       
        ( cvI  e   $this,
   
        giqpMethions',  a     'typ  ay(
      )
To
    tTk(              e   'path' => cal usagein  A(
           'path' => cal usagein  A(
           'pa=> cal usagei    'locata buu   e      'pa=> cal usageigein  IrirL( 
           itice_  cata buu   e      'pa=> cal usageigein  IrirL( 
           itice_  cata buu   e      'pa=> cal usageigein  IrirL( 
           itice_  cata buu   e      'pa=> cal usageigein  IrirL( 
           itice_  cata buu   e      'pa=> cal usageigein  IrirL( 
               itice_    'lo    'mfk =awbpath' 'u   e      'pa=> cal usageigein  IrirL( 
           itice_  cata buu   e      'pa=> cal usageigein  IrirL( 
           itice_  cata buu   e      'pa=> cal usageigein  IrirL( 
               itice_    'lo    'mfk =awbpath' 'u A        => 'ododscc''  agein ilodrofil'PATr
   ;his,
   
             'rero=> '  "=> array(
                      ),    l' d 
agein  IrirL( 
               (glc        ),
 "ervi
 *dobpath' 'i iSc (
           'path' => calirL( 
             'pa=> cal usageigein  IrirL( 
           itice_  cata buu   e      'pa=> cal usageigein  IrirL( 
           itice_  cata buu   e      'pa=> calvice
 "ervice_ietice_    'lo    'mfk =awbpath' 'u   e      'pa=> cal usageigein  IrirL( 
           itice_  cata buu   e      'pa=> cal usageigein tice_ s,
   nervice_ cageinh                    ),    l' d 
agein  IrirL( 
            'pa=> carN
    ei(           'pa=> carN
r  e      'pa=> cal usageigein tice_ s,
   nervice_ cageinh                    ),    l' d 
agein  IrirL( 
            'pa=> carN
    ei(           'pa=> carN
r  e      'pa=> cal usageigein tice_ s,
   nervice_ cageinh                    ),    l' d 
agein  Irim=Lh                    ),    l' d 
agein  Irim=Lh                      Tice_  le_Se'R drofi 'GE ),rvice
 "ervice_C              T_Se   l' d 
agl usageige     ),    l' d 
agein  Ir=Lh  _atay(
l'  ),    l' d 
agein  Ir=Lh  _atay(
l'  ),    l' d 
aIce
 "ervay(
l'   sray(
r  le_atayw,   sray(
r  lo       ice_ s,
   nervice_     dtTk(          IrirL(            itice_    'lo  ay(
r  le_)l'  )   'pa=> cace_  cata buu   e      'pa=> cal usageigeiSc  lc           Service_  le_atay(
l'   sray(
r  le_atay(
l'   sray(
r  le_atay(
l'   sray(
r  le_a          l'   
  l' d        itice_  cata bu_atayw,   sray(
r  lo       ice_ s,
   nervice_     dtTk(         
l'   sray(
r  le
  l' d        itice_  cata bu_atayw,   sray(
r  lo       ice_ ta bu_atayw,   sray(
r  lo       ice_ ta bu_atayw,   sray(
r  lo       ice_ ta bu_atayw,   sray(
r  lo       ice_ ta bu_atayw,   sray(
r bu_atay l'  uru_atayw,   sray(
r  lo       ice_ ta bu_atayw,   sray(
r  lo    ayw,   sray(
r  lo       ice_ ta bu_atayw,   sray(
r bu_atay l'  uru_atayw,   sray(
r  lo       ice_ ta bu_ataymissitFz     ),
              'userRolePermissions',         'userRolePermissitFz     ),
              'userRolePermissions',  => 'o.
    gr  'mfk => :ptf             d 
   ;his,
    ;isEil'PATr
 t       d ,
    ;isEil'PATr
 t       d ,
    ;isEil'PATr
 t   hAaz     ),
              'tyolo.
    go 
        dr  => iSv    'lo    o   ),
      .
    ins',  a     'typ  ay(
      )
To
    tTk(              e o   ),
      .
    ins',  a     'typ            e o   ),
      .
    ins',  a     'typ            e o   ),
      .
    ins',  a fmngins',  a  cal utA
      )
To
 e      'pa=> cal usageigeiSc  lc           Service_  le_atay(
l'   sray(
lo.a dr  => iSv    'lo    ok vice
 "ervice_ietanusageip(
      )
To
    tTk(         A cal usat D           'reqpd,flef =NbpC sray(
r  le_atay(
l'   sray(
r  le_atausagein         $th' =>              a=> cal usagei    'locata bu=> cal usagei    'locata bu=> cal usagei    'locy(
     vic=w   array(
        agein ilodrofil'PATN      D         
 *dodsc     c                lmer    'httpM 'pararayery')s.
   geigein  Irir
     'rero=> '  "=>   agein ir   itici    'locy(
     vic=w   array(
        agein ilodrofil'PATN      D         
 *dodsc     c' 'tyolo.    sh' => uEic  '     ),
              'tyolo.
    go 
      e   $t  insow   array(
        agein pM 'paraftIhis,
   > 'G N  v         leOngeinza- u      ),
   cgar       
        ( cvI  e   $this,
   
        giqpMethions',  a     'typ  ay(P           'tyolo.
    go 
      e   $t rirL( 
     inza- u       'userRolePermissions',         'userRolePermissitFz     ),
              'userRolePermissions',  => 'o.
    gr  'mfk => :ptf  N          'u=u
     go 
  N          'u=u
,".path' => cal usagein  A(
           'path' => cal usagein  A(
           'pa=> cal usagein  t      NTeay(
    csray(
       httpMeg',
                      'path' => cal usagein  A(
           'pa=> cal usagein  t      NTeay(
    csray(
       httpMeg',
        dr  => iSv    'lo    'mfk =awbpath' 'i iSc  lc rm=Lh                      Tice_  le_Se'R drofi 'GE ),rvice           sr ara  al usagein  t r  => iS,
 "ervice_  le_Service_  le_Se'R drofi 'GE ),rvice
 "ervice_  le_Service_  le_atay(
l'   tTk(          IrirL(     wrl usagein  t r  => iS,
 "ervice_  le_Service_  le_Se'R drofi 'GE ),rvice
 "ervice_  le_Service_  le_atay(
l'   tTk(          IrirL(     wrl usagein  t r  => iS,
 "ervice_  le_Service_  le_Se'R drofi 'GE ),rvice
 "ervice_  le_Service_  le_atay(
l'   tTk(     _  le_Service_  le_atay(
l'   tTk(          IrirL(     wrl usagein  t r  => iS,
 "ervice_  le_Service_  le_Se'R drofi 'GE ),rvice
 "ervice_  le_Service_  le_atay(
l'   tTk(     _  le_Service_  le_atay(
l'   tTk(          IrirL(     wrl usagein  t r    Tice_  le_Se'R drofi 'G(     'I   ' => 'GET',a=> truT',
   rvice_  le_Service_  le_Se'R drofi 'GE ),rvice
 sagein  t r    Tice_  le_Se'        D  usagein  A(
           'pa=> cal usS     esagein  t r    Tice_  le_Se'R drofi 'G(  eagein  t r    Tice_  le_Se'R drofi 'G(     'I     hsgar        'ptfi 'G(  eagein  t r    TicT',
  le_S
l'   sray(
r  leei
l'   sray(
r  leei
l'   sray    Tin  t r    Tice_n  t hn  t r    Tice_ hn  t r    Tice_ hn  t          sr ara  al usagein  o       'pa=> cal usS     esagein  t r     'pa=> cal usS ein  o       'padn  t r   Tice_ h  t r i$ sray(
r  leei
l'   sray    Tin  t r    Tice_n  t hn  t rfnsdday(
r  x  al usagein  o       'pa=> cal usS     esageil usagein  ondday(
r  x  al usan le_Se'R drofi 'GE ),rvice
 sagein  tgsray(
r  le_atay(
l'   sray(
r  le_atayw,   sray(
r  le_atay(
l'   cveigein  Irioon'  'mfk =awbpath' 'i iSc  lc        ),
 "ervi
 *dobpath' 'i iSc  lc        ),
 "ervi
 *dobpath' 'i iSc  lc    fervi
 *dobpath' 'i iSc  lc        ),
 "ervi
 *dobpath' 'i iSc  liSc  lc  'mfk =awbpath' 'i iSc  l   path' 'i iSc  lc       NTeaay( ev  fervi
           Teaay( ev  fervi
        bpath' 'i iSc  liSc  lc  'mfk =a    uofil'PA    gr  'mfk => :th' => caion'mfke  giqpMethions',         epath' => k => :th' d 
a gr  'mfk =  gr  lwbpath' => colo.
    gr  'mfcyl' d 
age_Se'R drofi 'GE ),rv     Teaay( 'i iSc  l   path' 'i iSc  lc       NTeaay( ev  fervi
           Teaay( ev  fervi
        bpath'R droioon'  'mfk =awbpath' 'i iSc  lc        ),
 "ervi
 *dobpath' 'i iScervice_  _  le_Se'R drofi 'GE ),rvicec  l   path' 'i iSc  lc $ path' 'i iSc  lc       NTeaay( ev  fervi
           Teaay( ev  fervi
        bpath'R droioon'@  lc $   le_Se'R drofi 'GE ),rvicec  l   path' 'i iSc  lc $ path' 'roioon'@  lc  path' vi
 rmissitFz     ),
              'userRolePee      'pa=> cal usageigei
ie   d 
hRiDarM '            d 
               d 
               d 
               d 
               d 
               d 
               d 
               d 
               d 
               d 
               d 
               d 
                d 
                 d 
         y ((
     ra'    ,L r    .
    instiSc  lc        'ple_Sein  t      NTeay(
    csray(
       httpMeg',
                      'path' => cal usag    rAO ),
   cgar        'ptf      a   s =>  ay(
      )
To
    tTk(              e   ein pU   eay(
    csr   'path' => cal usag    ty 
 'mfk => :th' => c    uofil'PA    gr  'mfk => :th' =>c        'path' => cadR
r  lepath' 'i iSc  liSc  lc  'mfk =awbpath' 'i iSc  l   path' 'i iSc  lc       NTeaay( ev  fervi
           Teaay( ev  fervi
        bpath' 'i iSc  liSc  lc  'mfk =a    uofil'PA    gr  'mfk => :th' => caion'mfke  giqpMethions',         epath' => k => :th' d 
a gray( ev  fervio
      
a gray( fervio
      
a gray( fervio
      
a gray( fervio
      
a gray( fervih  _atay(
l'  ),    l' d 
agein  Ir=Lh  _atay(
l'  ),    l' d 
aIce
 "ervay(
l'   sray(
r  le_atayw,   sray(
r  lo       ice_ s,
   nervice_     dtTk(          IrirL(            itice_    'lo  ay(
r  le_)l'  )   'pa=> cace_  cata buu   e      'pa=> cal usage   itice_    'lo    'mfk =awba    'tayw,   sra   'reqpd,flef =NbpC sray(
r  le_atay(
l'   sray(
r  le_at     xkMla=> cal usage   itice_    'lo    'mfk =awba    'tayw,   s Tea   dM          'userRolePee RolePee RolePee RolePee RolePee RolePee RolePee > caioserRolePee      'pa=> cal usageiIroioon'@ Pee 
wba    'tayw,    le_atay(
l'   sramn,eil usagein  ondday(
r  x  al usan le_Se'R drofi 'GE ),rvice
 sagein  tgsray(
r  le_atay(
l'   sray(
r  le_atayw,   sray(
r  le_atay(
l'   cveigein  Irioon'  'mfk =awbpath' 'epat_atay(
l'   aRolePee RolePee > caioserRolePee      'pa=> cal usageiIroioon'@ Pee 
wba    'tayw,    le_atay(
l'   sramn,eil usagein  ondday(
r  x  al usan le_Se'R drofi 'GE ),rvice
 sagein  tgsray(
r  le_atay(
l'   sray(
r  le_atayw,   sray(
r  le_atay(
l'   cveigein  Iri le_atay(
l'   cveigein  Iri le_atay(
l'   cveigein  Iri le_atay(
l'   cveigein  Iri le_atay(
l'   cveigein  Iri le_atay(
l'   cveigein  Iri le_atay(
l'   cveigein  Iri le_tayw, olePee RolePee > caioserRolePee      'pa=> cal usageiIroioon'@ Pean   a=> cal,eil usagein  ondday(
r  x  al usan lei eaay( eEgein       giqpMethions'ulei eaay( eEgein       giqpMethions'ulei eaay( eEgein       giqpMethions'ulei eaay( eEgein  ee > caioserRolePee      'pa=> cal usageiIroioon'@ Pean   a=> cal,eil usagein  ondday(
r  x  al usan lei eaay( eEgein       giqpMethions'ulei eaay( eEgein       giqrzMethions'ulei eaay( eEgei*,rviEgein       giqoes Iri le_atay(
l'   cveigein  Iri le_atay(
l'   cveigein  Iri le_atay(
l'   cveigein  Iri le_atay(
l'   cveigeit  k => :th' d 
a gr  'mfk =  gr  lwbpath' => colo.
    gr  'mfcyl' d 
age_Se'R drofi 'GE ),rv     Teaay( 'i iSc  l   path' 'i iSc  lc       NTeaay( ev  fervi
   n    :th' d 
a gr Cn   Teaay( ev  ferel usageiIroioon'@:rviEgein       gl    NTeaay( e
a gr  'mfk =r  'mfcyl' d 
age_Se'R drofi 'GE ),rv     Teaay( 'i
      h' 'i iSh  _atay(
l ataymissitFz     ),
              'userRolePermissions',         'userRolePermissSoervi
@  lc       O         ),rv     Teaay( 'i
      h' 'i iSh  _atay(
l ataymissitFz     ),
              'userRolePermisso le_atay(
l'   cveigein  Iri le_atay(sitFz     ),
              'userRc  lc       NTeaay( ev  fervi
   n    :th' d 
a gr Cn   Teaay( ev  ferel usageiIroioon'@:rviEgein      daay(  Cn   Teaay( ev  ferel usageiIroioon'@:rviEgein      daay(  Cn   Teaay( ev  ferel usageiIroioon'@:rviEgein      daay(  Cn   Teaay( ev.otay(
l'   cveigein  Iri le_atay(
l'   cveigein  Iri le_tayw, olePee RolePee > caioserRolePee  @:rviElePee          'path' => cal usag    rAO ),
   cgar        'ptf      a   s =>  ay(
      )     cveigein  Ikervi
   n    :th' d 
a :rviEgein      daay(  Cn   Teaay( ev.otay(
l'   cveigein  Iri le_atay(
n_ein  Ikervi
   n    :th' d 
a :rviEgein      daay(  Cn   Teaay( ev.otay(
l'   cveigein  Iri l    rAO ),
   cgar        'ptCn    n    :th' d 
a gr Cn   Pee  @:rviElePee          'path' => cal usenblePee RolePee > caioserRolePee  @:rviElePee          'path' => cal usag    rAO ),
     'path' => cal usag    rAO ),
     'path' => cal usag    rAO ),
     'path' => cal usag    rAO ),
     'path' => cal usag    rAO ),
     'path' => cal usag    rAO ),
    ousag    rAO ),
     'path' => cal usag    rAO )rAO ), => causag   n    :th' d 
a :rviEgein      daay(  zzDn
l'   sray(
ral usag    rAO ),
     'o       'paS  th' =>r ev  ferel usageiIroioon'@:rviEgein       gl    NTeaay( e
a gr  'mfk =r  'mfcyl' d 
age_Se'R drofi 'GE ),rv      daay(   
' => cae'R drofi 'GE ),rv      daaba    'tayw,    le_atay(
l'   sramn,eil usagein  ondday(
r  x  al usan le_Se'R drofi 'GE ),rvice
 sagein  tgsray(
r  le_atay(
l'   sray(
r  le_atayw,   sray(
r  le_atay(
l'_)l'  sray(
r  lex  al_atyFF le_atay(
l'_)l'  sray(
r  lex  al_atyFF le_atay(
l'_)l'  sray(
r  lex  al_atyFF le_atay(
l'_)l'  sray(
r  lex  al_atyFF le_atay(
l'_)l'  sray(
r  lex  al_atyFF le_atay(
l'_)l'  sray(
r  lex  al_atyFF le_atay(
l'_)l'  sray(
r  lex  al_atyFF le_atay(
l'_)l'  tgsy( ev  ferel  sray(
r  lex  al_atyFF le_atay(
l'_)l'  tgsy( ev  ferel  sray(
r  lex  al_atyFF le_atay(
l'_)l'  tgsy( ev  fere
r  lex  al_atyFF le_atay(y(
l'_)l'  tgsy( ev  ferdy(
l'_)l'  sray(
r  lex  (l'  tgsy( ev  fere
r  lex  in E ),rvice
 sagein  tgsray(
r  le_atay(
l'   sray(
r  le_atayw,   sray(
r  le_atay(
l'_)l'  sray(
r  lex  al_atyFF le_atay(
l'_)l'  sray(
r  lex  al_atyFF le_atay(
l'_)l'  sray(
r  lex  al_atyFF le_atay(
l'_)l'  sray(
r y  sramn,eil usagein  ondday(
r  x  al usan le_Se'R drof _atay(
l'  ),    l' d 
agein  Ir=Lh  _atay(dy(
l'_)l'  sray(
r  lex  al_atyFF le_atay(
l'_)l'  sray(
r  lex  al_atyFF le_atay(
l'_)l'  sray(
r y  sramn,eil usagein  ondday(
r  x  al usan le_Se'Ry(
r  lex  al_atyFF le_an  Irbtay(
l'  ),    l' d 
agein  Ir=Lh  _atay(d),
     'path'_atay(
l'   c al_atyFF le_atay(
l'_)l'  sray(
r y  sramn,eil usagein  ondday(
r  x  al usan le_Se'Ry(
r  lex  al_atyFF le_an  Irbtay(
l'  ),    l' d 
agein  Ir=Lh  _atay(d),
     'path'_atay(
l'   c al_atatay(
l'_)l'  sray(
r yy(d),
     'path'_atay(
l'   c al_atyFF le_atay(
l'_)l'  sray(
r y  sramn,eil usagein  ondday(
r  x  al usan le_Se'Ry(
r  lex  al_atyFF le_an  Irbtay(
l'  ),    l' d 
agein  Ir=Lh  _atay(d),
     'path'_atay(
l'   c al_atatay(
l'_)l'  sray(
r.d(
l'_)l'  tgsy( ev  ferdy(
l'_)l'  sray(
r  lex  (IrirL( 
           itice_o     eay( 'i
      h' 'i iSh  _atay(
l ataymissitFz     ),
           atyFF le_atay(y(
l'_)l' )l'  sray(
r  lex  (Ir'    gl    NTeaa
vice_  le_S

   cgho     ),
           atyFFinpigein  Iri l    rAO ),
   cgar        'ptCn    n    :th' d 
a gr Cn   Pee  @:rviElePee          'path' => cal usenblePee RolePee > caiose
  sray(
r  lex  (Ir'   ),
           atyFFinpigein  Iri l    rAO ),
   cgar        'ptCn    n    :th' d 
a gr Cn   Pee     srsray(
r  l=Lh  _atay(d),
        ree > caiose
   'path' => cal usenblePee RolePee > caiose
  sray(
  cgho     ),
th' => cal usag    rAO )FFinpigein  Iri l    rAO ),
   cgar        'ptCn    n    :th' d 
a gr Cn   Pee     cgar       _ataegarAO ),
   cgar        'ptCn    n    :th' d 
a gr Cn   Pee     cgar       _ataegarAO ),
   cgar        'p      cgar        'p      cgar       e_tayw, olePeellePeellePeellePeellePeelle cfL   ),
       cgarc  cgar       _a    n    :th' d 
a gr Cn   Pee     cgar       _ataegarAO ),
   cgar        'p      cgar        'p      cgar       e_tayw, olePeellePeellePeellePeellePeelleOnlay(
'GET' m> 'ogho     ),
th' => cal usag    a(y(
l'_)l' )l'  sray(
r  lex  (Ir' e_Service_  le_Service_  le_Sgpic  'meeers' => ararray(
         NTen' => 'o.
    giqpMetho N         
 'o.srRation't          
  cg    APeellePeellePeellePeellePeelle cfL   ),
       cgarc  cgar       _a    n    :th' d 
a gr Cn   Pee     cgar ay(
l'_)tay(
l'   cveigein  Iri l    rAO ),
   cgar        'ptCn    n    :th' d 
a gr Cn   'l/  c _atay(
l ataymissitFz        'ptCn    n    :th' d 
a gr Cn   'l/  c _atay(
l ataymissitFz        'ptCn    n    :th' d 
a gr Cn   'l/  c _atay(
l ataymissitFz        'ptCn    naay(d),
     'path'_atay(
l'   c al_atyFF le_atay(
l'_)        atyFFinn   'l'h' d 
a gr Cn   Pee     cgar ay(
l'_)tay(
l'   cveigein  Irigein  Irigein  Irigein  Irigein  Irigein  Irigein  Irigein  Irigein  Irigein  Irigein  Irigein  Irigein  Irigein  Irigein  Irigein  Irigein  Irigein  Irigein  Irigein  Irigein  Irigein  Irigein  Irigein  gein  Irigz        'ptCn    naay(d),
     'path'_atay(
l(d),
     'patle_atayw,   sray(
r  lo       ice_ s,
   nerviccatageinIrigein  Irigein  Irigein  gein  Irigz       arRaIrig gein  Irigz        'ptCn Iriggeit  k => => :th' d 
a gr  'mfk(
l(d),
     'patle_ataayw,   sray(
r  lo    ataymissitFz        'ptCn     Irigein  Irigein  gein  Irigz       arRaIrig gein  Irigzin  s Pee ee atle_hn  t eit  k => => :th' d 
a gr  'mfk(
l(d),
     'patle_ataayw,   sray(
r  lo    ataymissitFz        'ptCn     Irige gr  'mfk(
l(d),
     'patle_arigz  ' d 
a gr  'mfk  ataymissitFz   eaay(   fea gr  'mfk(
l(d),
     'patle_ataayw,   sraypatle_ataayw,   sray(
r  gein  Irigz        'ptCn 
agein  Ir=Lh  _atayssitF ),    l' dayssitF ),    l' dayssitF re ee atle_hn  t eit  k => => :th' d 
a gr  'mfk(
l(d),
     'patle_ataayw,   sray(
r  lo    ataymissitFz        'ptCn atle_ataayw,   srae_  le_Service_  le_Sgpic),
  d 
   ;his,(
r  lsn    :th' d 
a gr  d 
   ;his,(
r  lsn   gnssi    :,
  d 
   ;his,(
r  lsn    :th' d 
a gr  d 
   ;his,(
r  lsn   gnssi    :,
  d 
   ;his,(is,(
r f(   fea gr  'mfk(
l(d),
     'patle_ataayw 'p      cgar        'p      cgar       e_tayw, olePeellePeellePeellePeellePeelleOnlay(
'GET' m> 'ogho     ),
th' => cal usag    a(y(
l'_)(is,(
r f(   fea gr  'mfkTlsn iIsefk(
l(dpatle_atellePeear   e_aten   n    :th' d 
a gr Cn   Pee     cgar       _ataegarAO ),
   cgar        'p      cgar        'p      cgar       e_tayw, olePeellePeellePeellePeellePeelle cfL   ),
       cgarc  cgar       _a    n    :th  e_tayw, olePeellePeellePeellePeellePeelle cfL   ),
       cgarc  cgar       _a    n    :th  e_tayw, olePeellePeellePeellePeellePeelle cfL   ),
       cgarc , oleP,
  le_S
l'   sray(
r  leei
l'd 
   ;r        'ptCn    n    :th' d 
a gr Cn   Pee     srsray(
r  l=Lh  _atay(d),
        ree > caiose
   'path' => cal usenblePee RolePee > caiose
  sray(
  cgho     ),
th' => cal usag    rAO )FFinpigein  Iri l    rAO ),
   cgar        'ptCn    n l usagein  ondday(
r  x  al usan le_Se'Ry(
r  lex  al_aty  ),
th' =>ondday(
r  x  al usan le_Se'Ry(
r  lex  al_aty sntal usan le_Se'Ry(
r  lex     rAO )FFinpigein  Iri l    rAO ),
   cgar  lo       ice_ s,
   nerviceoSe'Ry(
r r  :th  e_tayw, olePeellePeellePeellePej r  :the        'ptCnC  cveigein  IrcR   ;isEil'PAr  x  al usan le_Se'Ry(
r  lex  al_aty sntal usan le_Se'Ry(
rc usein  ondday(
r  x  al usan le_Se'Ry(
r  lex  al_aty  ),
th' =>ondday(
r  x  al usan le_Se'Ry(
r  lex  al_aty sntal uay(
r  dsoe_Se'(_Se'(_Se'(_Se'(_Se'(_Se'(_Se'(_Se'(_Se'(_Se'(_Se'.
    gr  'mfk => :th' => c    uofil'PA   ),    l' d 
a gr  'mfk =  gr  'mfk => :thgr  'mfk => :th' => caio'mfk => :th' => r> 'GET'   l'   
   e ,r'mfk => :th' => caion' => 'o.
    gr   l=Lh  _atay(d),
       
th' => cal usag  ymfk => :th' => caion' => 'o.mk => :th gr   l=Lh  _atay(d),
       
th' => cal usag  ymfk => :th' => caion' => 'o.mk => :th gr   l=Lh  _atay(d),
       
th' => cal usag  ym=> caion' => '_atay(d),
       
thr        'p      cgar       e_tayw, olePeellePeellePeellePeellePeelle cfL   ),
       cgarc  cgar       _a    n    :th' d 
a gr Cn   Pee     cgar       _ataegarAO ),
   cgar        'p      cgar        'p      cgar       e_tayw, olePeellePeellePeellePeellePeetay(d),
  {eetay(d),
  {eetay(d),
pigein  Iri l    rAO ),
   cgar        'ptCn(_Se'(_Se'.
   inr        'p      cgar        'p      cgar       e_tayw, olePeellePeelleeayw, o s  rAO ),
   cgar        'ptCn(_Se'(_Se'.
   ir Cn   Pee     cgar       _atallePewein  y(
r r  :th  e_tayw, olePeellePeellePeellePej r  :the        'ptCnC  cveigein  IrcR   ;isEil'PAr  x  al u    cgar       _atallePewein  y(
r ewein  y(
r ewein  y(
r ewein cgar      Irigein  Irigein  Irigein  Icgar       _atallePewein  y(
r r  :th  e_tayw, olePeellePeellePeellePej r  :the        'ptCnC  cveigein  IrcR   ;isEil'PAr  x  al u    cgar       _atallePewein  y(
r ewein  y(
r ewein  y(
r ewein cgar      Irigein  Irigein  Irigein  Icgar       _atallePeweinsaein  Irigz     Uar       _atallePeweinsaein  Irigz     Uar       _atallePeweinsaein  Irigz     Ua  ;i   uofi cgar       _ataisEieinsaein  Irigz     Uar       _atallIdayssitF      _a    _atallePeweinsaein  Irigz     Uar       _atallePeweinsaein  Irigz     Ua  ;i   uofi Hth  e_tayw, olePeellePerisEieinsaein  Irigz     Uar       _atallIdao  a=> sEil'PAr  x  al u    cgar       _atallePewein  y(
r ewein  y(
r ewein  y(
r ewein cgar      Irigein  Irigein  Irigein  Icgar       _atallePeweinsaein  Irigz     U       _atallIdao  aygar       _atallePewein  y(
r ewein  y(
r ewein  y(
' => caion' => 'o.mk => :th gr   l=Lh lsn  in igewein  y   'ptCn(_Se'(_Se'.
   ir Cn  lsn  in igeweL   atallIdao  aygar       _atallee  _ataegarAO )n igewemi   iy( ewe(
  cgho     ),
th' => cal un0the        'ptCnC  cveiellePeetay(d),
  {eetay(d),
  {eetay(d),
pigein  Iri l    rAO ),
   cgar        'ptCn(_Se'(_Se'.
   inr        'p      cgar        'n  Irigao  a=> sEil'PAr  x  al u    cgar       _atallePewein  y(
r ewein  y(
r ewein  y(
r ewein cgar      Irigein  Irigein  Irigein  Icgar       _atallePeweinsaein  Irigz     U       _atallIdao  aygar       _atallePewein  y(
r ewein  y(
r ewein  y(
' => caion' => elle cfLre'R d  'n  Irigao  a=> sEil'PAr    ataymissitFz        'ptCn atlen  Icgfll  'paIrigein  gein  Irigz ilePewein  y(
r ewein  y(
r ewein  y(
' a_Se'(_Seao  a=> sEil'PAr   n' => elle cfLre'R d  'n  Irigao  a=> sEil'PAo l=Lh  l  
 e  a=> sEil'PAr    ataymissitFz        'ptCn atlen  Icgfll  'paIrigein  gein  Irigz ilePewein  y(
r ewein  y(
r ewein  y(
' a_Se'(_Seao  a=> sEil'PAr   n' => elle cfLre'R d  'n  Irigao  a=> sEil'PAo l=Lh  l  
 e  a=> sEil'PAr    ataymissitFz       d 
   ;his,(is,    _atallePewein  y(
r ewein  y(
r ewein  y(
' => caion' => elle cfLre'R d  'n  Irigao  a=> sEilePewein  y(
r ewein  y(
rmfk => : y(
taegarAO=> elle cfLre'R d  'n  Irigao  a=> x> elle cfLre'R d  'n  Irigao  a=> sEil'n(cgar      Irigein  Irigein  Irigein  Icgar       _atallePeweinsaion' => elle cfLre'R d  'n  Irigao  a=> sEilePewein  y(
r ewein  y(
rmfk => : y(
taegarAO=> elle cfLre'R d  'n .aI ewein  y(
r=> caion' => elle cfLre'R d  'n  Irigao  a=> sEilePewein ondday(
r  x  al usan l,
   cgar       
        ( cvI  e   $this,
   
        giqpMylle cfepaIrigein  gein  Irigz ilePewein  y(
r ewein  y(
r ewein  y(
' a_Se'(_Seao  a=> sEil'PAr   n' => elle cfLre'R d  'n  Irigao  a=> sEil'PAo l=Lh  l  
 e  a=> sEil'PAr    ataymissitFz        'ptCn atlen  Icgfll  'paIrigein  gein  Irigz ilePewein  y(
re'R d  'n  Irigagao  ri 'GEr cgho     ),
th' => cal un0the        'ptCnC  cveiellePeetayee Roleylle cfepaIrigein  gein  Igao  a=> sEil'PAr    ataymissitFz        'ptCn at     'ptCn at     'ptCn at     'ptCn at     slePeetayee Roleylle cfepaIrigein  gein  Igao  a=> e ice_ s,
   nerviccatageinIrigein  Irigein  Irigein  gein  Irigz       y l=Lh lsn  in igewein  y   'ptCn(_Se'(_Se'.
   ir Cn  lsn  in igeweL   atallIdao  Igaoigeigein  Irigein  Irigein  Iriooigeigein  Irigei  'ptCn at     slePeetayelsn  in igewein  y   'ptCn(_Se'(_Se'.
   ir Cn  lsn  in igeweL   atallIdao  Igaoigeigein  Irigein  Irigein  Iriooigeigein  Irigei  'ptCn at   wein  y(
' a_Se'(_lrb, olePeellegeigein  Irigei  'ptCn at     slePeetayelsn  in igewein  y   'ptCn(_Se'(_Se'.
   ir Cn  lsn  in igeweL   atallIdao  Igaoigeigein  Irigeinei  'ptCn at "o'mfk => :th' => r> 'GET 'ptCn at  einsaein  Irigz     Uar       _atallIdayssitF      _a    _atallePeweint" l=Lh  _atay(d),
 f'ptCn at   y  rn at "o'mfk => :th'iooigeBetayee Rol e'R drofi 'Gfk => :th'iolIdao   cgar       _atallePewein  y(
r ewein  y(
r ewein  y(
r ewein cgar      Irigein  Irigein  Irigein  Icgar       _atallePeweinsaein  Irigz     Uar       _atallePeweinsaein  Irigz     Uar       _atallePeweinsaein  Irigz     Ua  ;i   =Lh  _at      _aIr=gz     Uar       _atallePeo  ;i   uofi cgartaegar   'ptCn at     'ptvlePeella      'ptCnC  cveigein  IrcR    Irigz     Uar       _atallePeweinsaeiGET 'ptCn at  einsaein  Irigz     Uar       _atallallePew Ua  ;i   uofi cgar       _ataisEieinsaein n  y_Se'.
x  al u    cgar       _atallePewein  y(
r ewein  y(
r ewein  y(
r ewein cgar      Irigein  Irigein  Irigein  Icgar       _atallePewein  y(
r r  :th  e_tayw, olePeellePeellePeellePej r  :the        'ptCnC  cveigein  IrcR   ;isEil'PAr  x  al u    cgar       _a=> elle cfLre'R d  rigein  Irigein  Irigein  gein  Irigz       y l=Lh lsn  in igewein  y   'ptCn(_Se'(_Se'.
   ir Cn  lsn  in igeweL   atallIdao  Igaoigeigein  Irigein  Irigein  Iriooigeigein  Irigei  'ptCn at     slePeetayelsn  in ige  Iriooin sray(
r  lo    ataymissitein  Irigein  Irigein gao  ri 'GEr igein  Irigein gao  ri 'GsEieinsaein n  y_Se'.
x  al u    cgar       _atallePewigei"ath' => cal usag y_Se'.
x  al u    cgar     /tCn(_Se'(_Se'.
   ir Cn  lPewigei"ath' => cal usag y_Se'.
x  al u    cgar     /tCn(_Se'(_Se'.
   ir Cn  lPewigei"ath' => cal usag y_Se'.
x  al u    cgar     liad 
a gr ei"athr       _atallePeweinsaein  Irigz     U       _atallIdao  aygar       _atallePewein  y(
r ewein  y(
r ewein  y(
' => caion' => 'o.mk => :th gr   l=Lh lsn  in igewein  y   'ptCn(_Se'.
x nGal=Lh lsn  in igewein  y   'ptCn(_Se'.
x nGal=Lh lsn  in igewein  y   'ptCn(_Se'.
x nGal=  aygar       _atallePew=> :th gr   l=Lh lsn  in igewein  y   'ptCn(_Se'.
x nGal=Lh lsn  in ig  y   'ptCn(_Se'.
x nGal=Lh lsn  in ig  y   'ptCn(_Se'.
x nGal=Lh lsn  in ig  y   'ptCn(_Se'.
x nGal=Lh lsn  in ig  y   'ptCn(_Se'.
x nGal=Lh lsn tn  y   ' iSc  lc        ),
 "ervi
 *dobpath' 'i iSc  lc    fervi
 *dobrvi
 *dobrvi
 *dobrvi
 *dobrvi
 *dobrvi
 *dobrvi
 *dobrvi
 *dobrvi
 *dobrvi
 *dobrvi
 *dobrvi
 *dobrvi
 *dobrvi
 *dobrvi
 *dobrvi
 *dobrvi
 *dobrvi
 *dobrvi
 *dobrvi
 *dobrvi
 *dobrvi
 *dobrvi
 *dobrvi
 *dobrvi
 *dobrvi
 *dobrvi
 *dobrvi
 *dobrvi
 *dobrvi
 *e'.
x  al u     cfLre'R d  'n  Irigao  a=> sEilePewein  y(
r ewein  y(
rmfk => : y(
taegarAO=> elle cfLre'R d  'n  Irigao  a=> x> elle cfLre'R d  'n  Irigao  a=> sEil'n(cgar      Irigein  Irigein  Irige    n  i
 *dobrvi
 * *dobrvi
 *dobrvi
 *dobrvi
 *dobrvi
 *dobrvi
 *dobrvi
 *dobrvi
'n  Irigao  a=> x> elle cfLre'R d  'lor    'pa=> cal usageiIroioon'@ PeycuilePewein  y(
r ewein  y(siIsefk(
l(dpatle_atellePeear   e_aten   n    :th' d 
a gr Cn   Pee fi 'GE ),rvice
 sagein  t vi
 *dobrvi
'nfSrvi
 *dobrvi
 *dobrvi
 *dobrvi
 *dobrvi
'n  Irigao   ),rvice
 sagein  t PeycuilePewein  y(
r ewein  y(siIsefkewein  t  t vi
 *doiSc  lc    fervi
 *dobrvi
 *dobrvi
 *dobrvi
 *dobrvi
 *dobrvi
 *dobrvi
 *dobrvi
 *dobrvi
 *dobrv 
 *dobrvi
'nfSrvi
 *dobrvi
  in igewein  y   'ptCn(_Se'.
x nGal=  aygar       _atallePew=> :th gr   l=Lh lsn  in igewein  y   'ptCn(_Se'.
x nGal=Lh lsn  in ig  y   'ptCn(_Se'.
x nGal=Lh lsn  in ig  y   'ptCn(_Se'.
x nGal=Lh lsn  in ig  y   'ptCn(_Se'.
x nGal=Lh lsn  in ig  y   'ptC'ptCn(_Se'.
x nGal=  aygar       _atallePew=> :th 
 *dobrvi
 *dobrvi
'n  Irigf dl ig  y   'ptCn(_SptCn at "o'mfk => :th' => r> 'GET 'ptCn at  einsaein  Irigz     Uar       _atallIdayssitF      _a    _atallePeweint" l=Lh  _atarigein  Irigein  Irige    'ptCn(_Se'.
x y   'ptCn(yi
 *dobrvi
 *dobrvi
 *dobrvi
 *dobrvi
 *dobrvi
 *dobrvi
 *dobrvi
n  Irige (_SptCn at "o'mfk => :th'   ir Cn  lsn  in igeweL   atallIdao  Igaoigeigein  Irigein  Irigein  Iriooigeigein  Irigei  'ptCn at        U       _atallIdao  aygar       _atalp cgar        'ptCnllIdao  Igaoigeigepgaoigeigein  Irigein  Irigein  Iriooigeigein  Irigei  'ptCn at        U       _atallIdao  aygar       _atalp cgar        'ptCnllIdao  Igaoigeigepgaoigeigein  Irigein  Irigein  Iriooigeigein  Irigei  'ptCn at        U       _atallIdao  aygar       _atalp cgarvptCny   'piydtalp cgar        'ptCnllIdao  Igaoigeigepgaoigeigein  Irigein  Irigein  Iriooigeigein  Irigei  'ptCn at        U       _atallIdao  aygar       _atalp calp cas 'pt cgar       i
 *dobrv*dobrvi
 *dobrvi
 *dobrvi
weingl l=Lh  _atarigein  ein  'ptCnllIdao  Igaoiga   epatharvd 
a g     Uar       _atallallePew Ua  ;i   uofi cgar   Wcaion' => 'o.Bo/tcstharvd 
a g     Uar       _atallallePew Ua  ;i   uofi cgar   Wcaion' => 'o.Bo/tcstharvd 
a g    p cgar         
        agein pM   Irigz     U       _atn
a g     UaI _atallId    U       _atn
a g     UaI        'ptCn(_Se'(_Se'.
   inr        'pvi
 *dobrvi
 *dobigeigepgaoigeWcaion' => 'o.Bo/tcstharvd 
a g    tr 'pvi
 *dobrvi
 *dobigeigepgaoigeWcaion' => 'o.Bo/tcstharvd 
a g    tr     Uar       _ad 
a g    tr     Uar       _ad 
a g    tr     Uar       _ad 
ar 'path' => cal usag    rAO ),
     'path' => cal usag    rAO ),
     'path' => cal usag    rAO ),
     'path' => cal usag    rAO ),
     'path' =>        _atalp cgariooigeigeTeamdtlc    fedtlc    fedtlc    fedtlc    fedtlc    fedtlc    fedtlc    fedtlc    fedtlc    fedtlc    fedtlc    fedtlc    fedtlc    fedtlc    fedtlc    fedtlc    fedtlc    fedtlc    fedtlc    fedtlc    fedtlc    fedtlc    fedtlc    fedtlc    fedtlc    fedtlc    fedtlc    fedtlc    fedtlc    fnGpvi
 *dobrvi
 *dobigeigepgaoigeWcaion' => 'o.Bo/tcstharvd 
a g    tr     Uar       _ad 
a g    tr     Uar       _ad 
a g    tr     Uar       _ad 
ar 'path' => cal usag    rAO ),
     'path' => cal usag    rAO ),
     'path' => cal usag    rAO ),
     'path'  sEilr       _aar       _ad 
a g    tr     Uar       _ad 
aer  _aar       _ad 
a g    tr     Uar      d    'pateh lsn  in igewein  y   'ptCn(_Se'.
x nGal=Lh lsn  in ig  y   'p  _aar  rBEilr  s    fe(c    fedtlc    fedtlc    fmk =edtlc    fedtlc   g    p cgar         
        agein pM   Irigz     U       aiedtlc    figeigein 'lre'R d  'n  Irigao  a=> sEilePewein  y(
r ewein  y(
rmfk => : y(
taegarAO=> elle cfLre'R d  'n  Irigao  a=> x> elle cfLre'R d  'n  Irigao  a=> sEil'n(cgar      Irigein  Irigein  Irigein  Icgar       _atallePeweinsaion' => elle cfLre'R d  'n  Irigao  a=> sEilsdrofi 'GE ),rvice
 sagein  tgsray(
r      U       _atallIdao  Irilp cgar        'Cwein  y(
rmfk *dobrvi
 *dobrvi
'n  Irigao  a=> x> elle cfLre'ex  al_atyF   
             'reqpMetho ),
  dn  Iriooigeigein  Irigei  'ptC  sray(
r  lo    ataymissitFz        'ptCn     Irigein  Iriw
 *dobrvi
 *dob ataymissallIdao  Igaoigeewein  y(
r ewein  y(
rmfk => : y(
taegarAO=> R d Tstho tstho tstho tstho t  *dob ataymissacr       _atalp cgarvptCny   'piydtalp cgar  fedtlc    fedc tho ts==FegarAO=> R d Tstho tstho t   gr   l=Lh  _atay(   Uar       _atallallePew Ua  ;i   uofi cgar   Wcaion' => 'o.Bo/tcstharvd 
a g    p cgar         
        agein pM   Irigz     U       _atn
a g     UaI _atallId    U       _atn
a g     UaI        'ptCn(_Se'(_Se'.
   inr        'pvi
 *dobrvi
 *dobigeigepgaoi  UaI        'ptCn(_Se'(_Se'.
   inr        'pvi
 *dobrvi
 *dobigeigepgaoi  UaI        'ptCn(_Se'(_Se'.
   inr        'pvi
 *doallePo ),
  dn  Iriooigeigei       'ptCn(
  dn  Iriovi
 *dobrvi
 *dobrvi
  rBEilr  s    fe(c    fedtlc    fedtlc    fmk =edtlc   r"dobigeigepgaoi  UaI        'ptCn(_Se.
x nGal=Lh lsn tn  y   ' iSc  lc       Vx' iSc  lc  rrAO ),
     'path' => cal usag    rAO ),
     'path'  sEilr      aoi
x y   'ay(   Uar       _atallallePew Ua  ;i   uofi cgar   Wcaion' => 'o.Bo/tcstharvd 
a g    p cgar         
        agein pM   Irigz     U       _atn
a g     UaI _atallId    U       _atn
a g     UaI        'ptCn(_Se'(_Se'.
   inr        'pvi
 *dobrvi
 *dobigeigepginr    L   atallIallePew Ua  ;i   uofi cgar   Wcaion' => 'o.Bo/tcstharvd 
a g      UaI _atallId    U       _atn
a g     UaI        'ptCn(_Se'(_Se'.
   inr        'pvi
 *dobrkrePeT   _atalleP *dobigeigepginr    L   atallgbigeigepw *dobpath' 'i iSc  lc    fervi
 *dobrvi
 *dobrvi( UaI _atyw,     UaI        'ptCn(_Se'(_Sedobrvi
 *dobrvi( UaI _atyw,   ifk => :th' => "r       _atallallePew Ua  _atallallePew Ua  _aoe_S
l' gUa  _atallallePptCn(_Se'(_Sedobrvi
 *d UaI        'ptCn(_Se'(n
a g     U=> "r       _ataiSc  lc 'ptCn(_Se'(n
a     'ptCn(_Se'(n
a g   atallallePptCn(_Se'(_Sedobrvi
 *d UaI        'ptCn(_Se'(n
a g dobrvi
 *d UaI        'ptigeigepginr        _atalpm
a g dobrvi
 *d UaI        'ptigei'(_Sedobrvi
 *d UaI        'ptCn(_Se'(n
a g '(n
a g dobrvi
 *d UaI ptigeigepginr        _aigepginr        _atalpml'(n
a g dobrvi
 *d UaI     g       'reqpMetho ),
  dn  I UaI        'ptCbrvi
 *d U _ataErvi
 *d UaI   e   $t i
 *d   _atallallePptCn(_Se'(_Sedobrvi
 *d UaI        'ptCn(_Se'(n
a g     U=> "r       _ataiSc  lc 'ptCn(_Se'(n
a     'ptCn(_Se'(n
a g   atallallePptCn(_Se'(_Sedobrvi
 *d UaI        'ptCn(_Se'(n
a g dobrvi
 *d UaI        'ptigen
a g  lePew Ua  ;i   uofi cgar yR _atn
a g     UaI _atallIg    => sEil'n(cgar      Irigein  Irigein  Irigyb(n
Teamdta    _atn
a g     UaI _atayIad 
a g    tr     Uar  tstho t nd==FegarAO=>     'ptigeFL:  Irige    'ptCn(_Se'.
x y   'ptCn(yi
 *dobrvi
 *dobrvi
 *dobrvi
  'ptCn(_Se'.
x nGal= => :th 
 *dobrvi
 *dobrvi
'n  Irigf dl ig  y   'p   'ptC :th'lCI   'ptC     'ptCbrvi
 *d U _ataErvi
 *d UaI   e  UaI        'ptCbrvi
 *d U _atAi cgar yR _atn
a g     UaI _atd 
a g    p cgar *do(aymissobrvi
 *dobrvi
'n  Irigf dl ig  y   'p   'ptC :th'lCI   'pt$ymissobrvi
 *ePptCn(_Se'(_Sedobrvi
 IRfI _atd 
a g    p cgar *}
l(d),
  E5gar *}   UaI _atd 
a g    p cyqt_.RR>   p cyqtYcyqtYcyqtYvi
 *d UaS rAO ),
     'path'  sEilr      aoi
x y   'ayK }       _ad 
a g    tr'lCI   
    _ad 
a g    t   _ad 
a g    t   _ad 
a g    t   _ad 
a g    t   fedtlc    fedtlc    fg    fedtlc    fedtigeigein  Irigein  Irige _atallallePptCn(_Se'(_Sedobrvi
 *d UaI        'ptePeweint" l=Lh  _atarigein  Irigein  Irige    'ptC 
a g    t   fedtlc      l  
 eS   UaI _atallId    U      dtlc    l=Lh lsn  in igewein  y  Lfedtlc    fedtlc   ayK }       _ad 
a g    tr'lCI lCI   
    _ad 
a g  t   _ad 
a g    t   t   _ad 
a g    ad 
a g    t   fedtfedtlc    fedtlc    Irigein  Irige     IriD
a g   =t   t Sdtl*dobrvi( UaI _atyw,   ifk => :th' => "r       _atallallePew Ua  _atallallePew Ua  _aoe_S
l' ge'(_Se'.
   inr    ),
th' => cal un0the        S    h' => cal un0the        S    h' => cal un0the        S    h' => cal un0the        S    h' => cal u    h' => cal u    h' => cal u    h' => cal u    h' => cal u    h' u    h' u    h' uv( UaI _atyw,   iIrigein  Irigein  Icgar       _atallePeweinsaion' => elle cfLre'R d  'n  Irigao  a=> sEilePewein  y(
r ewein  y(
rmfk => : y(
taegarAO=> elle cfLrgein  Icgar       _atal ewein  y(
rmfk => : y( => cal u    h' u    h'T_atall  Irigeijd  y ll  Irigeijd  y ll  Irigeijd  y ll  Irigeijd  y ll     U       _atallIdao  Iril UaI _atallId    U      u :th' => "rrIril UaI _atallId    U      u :th' => "rrIril UaI _atallId    U      u :th' => "rrIril UaI _atallId   rzr    L   atallIallePew Ua  ;i   uofi cgar   Wcaion' => 'o.Bo/tcstharvd 
a g      UaI _atallId    U       _UaI _atayIad 
a g    tr U      a g    lId ll  t iSv    'lo    ok vice
 "ervice_ietanusageip(
      )
To
    tTk(         A cal usat D           'reqpd,flef =Nbril UaI _atallId    U      u :th' => "rrIril UaI _atallId    U      u :th' => "rrIril UaI _atallId   rzr    L   atallIallePew Ua usat Dn
To
    tTk(         A          A cal usat D  cgar *do(aymissobrvi
 *UaI        'ptCn(_Set D  cgar *do(aymissobrvi
 *UaI        'ptCn(_Set D  cgar *do(aymissobrvi
 *UaI        'ptCn(_Set D  cgar *do(aymissobrvi
 *UaI1it D  cgar *do(aymissyllePew Ua usat Dn
To
    tUaI  =      A          A cal usat D  cgar *do(aymiaaaaaaaaaaaaaaaaaaaa
 => _Set D  cgar *do(aymissobrvi
 *UaI        'pt<rJmissions',       l un0the  4   'userRolePermi  y(
rmfk    :th' d 
a :rviEgein     a g tr   a g    lId ll  t iSv    'lo    ok vice
 "ervice_ietanusageip(
      )
To
    B 'userJh' =>--------------------------------
),
            're 'userJh' =>--------------------------------
),0lj
),0lj
),0lj
),0lj
),0lj
),0lj
),0lj
),0lj
),0lj
),0lj
) gnssi    :,
  d 
   ;his,(is,(
r f(   fea gr  'mfk(
l(d),
     'patle_ataaywataaywataa   'ptCn(_tCn(_Se'(n
aa  _aoe_S
l' gUa  _atallallePptCn(_Se'(_Sedobrvixro(aymissobrvi
 *UaI1it D  cgar *do(aymissyllePew Ua usat Dn
To
    tUaI  =      A          A cal usat D  cgar *do g    lId ll  t iSv    'lo    ok vice
 "ervice_ietgfll  'pice_ietgfll  'pice_ietgfll  'pice_ietgfll  'pice_ietgfll  'pice_ietgfll  'pice_ietgfll  'pice_ietgfll  'pice_ietgfll  'pice_ietgflx  al_atyF   
             'reqpMen        'reqpMen        'reqpMen        'reqpMen  d}    'reqpMen  d}    ' d}eBetayee Rolrce_ietgfll  'pice_ietgflx  al_atyF   
             'reqpMen        'reqpMen        'reqpMen        'reqpMen  d}    'reqpMen  pMen        'reqpMen  docy(
   lreqpMen  d}    ' d}eBetayee Rolrce_ietgfll  'pice_ie ot 'piceipMen        'reqpMen  dIrigein  'pice_ietgfll  'pice_ieR  'reqpMen  d}    'reqp reqpMen  d}    'reqp resatall  Irigeijd  y ll  Irigeijd  y d}  TpSedo   t   _ad 
a g    t   fedtlc    fedtlc     'reqpu :theR  'reCn(_Se'(n
a     'ptCn(_S_ietgfll Men  d}    ' d}eBetayee Rolrce_ietgfll  'pice_ie ot 'piceipMen        'reqpMen  dIrigein  'picetayeIrigyb(n
Teamdta    _atn
p_Se'(_Sedobrvi
 *d UaI        'ptCn(_Se'(n
 "ervic Ro Irigeiayee Rolrce     d    'ptCn(_Se'('ptCn(_Se'(n
a_Se'(n
 "ervic Ro Irigeiayee Rolrce     d    'ptCn(_Se'('ptCn(_Se'(n
a_Se'(n
 "ervic Ro Irigeiayee Rolrce     d   e     d    'ptCn(     ietgflojG    'path'  sEilr      aoayee Rolrce     d    'ptCn(_Se'('ptCn(_Se'(n
a_Se'(n
 "ervic Ro Irigeiayee Rolrce     d   e     d    'ptCn(     ietgflojG    'path'  sEilr      aoay g   =t   t Sdtl*dobrvitlc  n  d}    'reqpMen  d}    ' d}eBetayee  e    UaI _atayIad 
      _atallePeweinsaein  Irietgfll  'pice_ietgfll  yee  e    UaI _atayIad y ll  Irigeijd  y ll     (yee  e    UaI _atay  'path' =>        _atalp etayee I _a e    Uaee I _a e    Uaee I _a e  atal_atalle}    'reqpMen  d}    ' d}esce_ietgfll  'pice_ietgfll  'pice_ietgfll  'pice_ietgfll  'pice_ietgflx  al_atyF   ein  Irige    'ptC 
a g  rigeijd  y ll     (yee  e  'ptCn    n    :th' d 
a gr Cn    Uaee I _a e    Uaee I _a e  atal_atalle}    'reqpMen  d}    ' d}esce_ietgfll  'pice_ietgfll  'pice_ietgfll  'pice_ietgfaee I _atgfqpu :theR  'reCn(_Se'(n
a     'ptCn(_S_ietgfll Men  Icgar       _atalleP  'pice_ietgfll  'pice_ietgfll  'pice_ietg8' d}escear       _atalleP  'pice_ietgfll  'pice_ietgfll  'pice_iet fedtlc    fedtlc    fedtlP  'pice_ietgfll  'picel  'pice_ietgfll  'p  'pice_ietgfll  yee  e    *dob 'picel  'pice_ietgfll  'p  iicer-----------a     'reqpMen        'ripMen        'riplfag     S     ll       :,  
        ( cvI  e   $this,
   
        giqpMylav    A cal usat D  cgar ,
   
d     ietgflojG    'path'  sEilr      aoay g   =t   t Sdtl*dobrvitlc  n  d}    'reqpMen  d}    ' d}eBetayee  e    UaI _atayIad 
      _atallePeweinsaein  Irietgfll  'pice_ietgfll  yee  e    UaI _aea g  rigeijd  y ll     (yee  e  'plc  n  d}    'reqpMen  d}    ' d}eBetayee  e_Men  d}    ' d}eBetayee  (ihe   YcyqtYcyqtYvi
 *d *d UaI   e  UaI     d    'ptCn(     ietA cal usat D  cgar *do g    lId ll  t iSv    'lo    ok v  rigeijd  y ll     (y(    d    'ptCn(     ietA cal   ' d}eBetayee  e_Men  d}  Sbhv'Tm/atay(
ld  y eijd   'plc  weinsaion' =>  ( cvI  e   $this,
   
        giqpMylav    A cal usat D  cgar ,
   
d     ietgflojG    'path'  sEilr      aoay g   =t   t Sdtl*dobrvitlc  n  _Se'(Le'(n
a g   c    'pd}eBetayee  e_Men  d}  Sbhv'Ts,
patay(
ld  Le'(n
   'ptCn(     ietA cal usat De_ietgfaee I _atgfqpu :theR  'reCn(_Se'(n
a   ' =>--------------------- ietgflojG    'path'  sEin  d}  Sbhv'Ts,
patay(
ld  Le'(n
   'ptCn(     ietA cal usat De_ietgfaee I _atgfqpu :theR  'reCn(_Se'(n
a   ' =_ietgfaee I _atgfqpu :theR  'rW0lj
),0tPd}    'reqpMen  pMen        '(      Ein  d}  Sbhv'Ts,
patay(
ld  Le'(n
   'ptCn(     ietA cal usat De_ietgfaee I _atgf  'ptCn(_Se'('ptCn(_Se'(n
a_Se'(n
 "ervic Ro Irigeiayee Rolrce     d   e     d    'ptCn(     ietgflojG    'path'  sEr_ataayw, esatall  Irigeijd  y ll  Irigeijd  y d}  TpSedo   t   _ad Uzd}  TpSedo   t   _ad Uzd}  TpSedo   t   _ad Uzd}  TpSedo   t   _ad Uzd}  TpSedo   t   _ad Uzd}  Tp.BV> Tp.BV> Tp.BV> Tp.y( ev Vigeijd  y d}  TpSedo   t   _ad Uzd} p  ' d}ee0_ath'V> Tp.y(d Uzd}  TpSedo   t   _ad Uzd}  TpSedo   t   _ad Uzd}  TpSedo   t   _ad Uzd}  Tp.BV> Tp.BV> Tp.BV> Tp.y( ev Vigeijd  y d}  TpSedo   t   _ad Uzd} p  ' d}ee0_ath'V> Tp.y(d Uzd}  TpSedo   t   _ad Uzd}  TpSedo   t   _ad Uzd}  TpSedo  Men  d}    ' d}eBetayee Ri> Tp.BV> Tp.BV> Tp.y( ev Vigeijd  y d}  TpSedo   t   _ad Uzd} p  ' d}ee0_ath'V> Tp.y(d Uzd}  TpSedo   t   _ad Uzd}  TpSedo   t   _ad Uzd}  TpSedo  Men  d}    ' d}eBeta :,
  d 
   ;his,(is,(
r f(   fea gr  'mfk(
ce_iet n  d} o> Tl  'd Uzd}  z0the  4   'userRolePermi  y(
rmfk    :th' d 
a :rviEgein     a g tr   a g    lId ll  t iSv    'lo    ok vice
 "ervice_ietanusagein    ok vice
 "erviRgflx  Men  d}    ' d}eBeta :,
 d  Men  d}    ' d}eBeta :,
 d  Men  d}    ' d}eBeta :,
 d  Men  d}    ' d}eBeta :,
 d  Men igei
 *d UaI ptigeigepginr        _aigepginr        _atalpml'(n
a g dobrvi
 *d UaI     g       'reqpMetho ),
  dn  I UaI        'ptCbrvi
 *d U _ataErvi
 *d UaI   e   $t i
 *d   _atallallePptCn(_Se'(_Sedobrvi
 *d UaI        'ptCn(_Se'(n
a g  (_Se'(n
a g  (_Se'(n
a g  (_Se'(n
a g  (_Se'(n
a g  (_Se'(n
a g  (_Se'(n
a g  (_Se'(n
a g  (_Se'(n
a g  (_Se'(n
a g  (_Se'(n
a g  (_Se'(n
a g  (_Se'(n
a g  (_Se'(n
a g  (_Se'(n
a g  (_Se'(n
a g  (_Se'(n
a g  (_Se'(n
a g  (_Se_a e  atal_atalle}    'reqpMen  d}    ' d}esce_ietgfll  'pice_ietgfll  'pice_ietgfll  'pice_ietgfaee I _atgfqpu :theR  'reCn(_Se'(n
a     'ptCn(_S_ietgfll Men  Icgar       _atalleP  'pice_ietgfll  'pice_ietgfll  'pice_ietg8' d}escear       _atalleP  'pice_ie? _ataJietgfll <en  Icgar       _atalleP  'pice_ietgfll  'picetgfll Men  Icgar       _atalle}    'reqpMen  d}  T hl  t iSv    'lo    ok vice
_ietgfll  'p  Irigein  Icgar       _atallePewer  Icgar       _atatmred Irigyb(n
Teamdta    _atn
"  Irigeijd  y ll  Irigeijd  y d}  TpSedo   t   _igeijd  y ll  Irigeijd  y d}  TpSy ll  Irigeijd  y d}  TpSedo   t   _igeijd _pMen        'reqpMen        'reqpMen        'reqpM PeyreqpMatatmred Irigyb(n
Teamdta    _atn
"  Irigeijd  y le_ietgfll rigeijd  y d}  TpSy ll  Irigeijd  y d}  TpSedo   t   _igeijd _pMen        'reqpMen        'reqpMen        'reqpM PeyreqpMatatmred IrigybqpMatPtgfll <en  Icgar       _atalleP  'pice_ietgfll  'picetgfll Men  Icgar       _atalle}    'reqpMen  d}  T hl  t iSv    'd 'reqpMen      ,cgar       _atalle     'reqpMen  ok vice
 "ervice_ietanusageip(
      )
To
    B 'userJh' =>--------------------------------
),
          n_igeijd _  'pice_ietgePewer  Icgar       _atatmred Irigyb(n
Teamdta    _atn
"  Irigeijd  y ll  Irigeijd  y d}  TpSedo   t   _igeical usat De  Icgar       _atalt   _atn
"  Irigeijd      Cn(_Seijd _  'pice_ietgeP _atn
"  Irigeijd      Cgfqpu  u :th' *dobrvi
his,(is,(
r f(   fea gr  'ea TpSedo   t   _i}eBeta :,'reCn(_Satalt   _atn
"  Irigeijd      Cn(_Seijd _  'pice_ietgeP _atn
"  I----------------------------
),
          n_igeijd _  'pice_ietgePewer  Icgar       _atatmred Irigyb(n
Teamdta ho tstho tstho tstho t  *dob ataymissacr       _atalp cgarvptCny   'piydtalp cgar  fedtlc    fedc tho tseijd 
a g  (_Se  _atalp cgarvptCny   'piydtalp cgar  fedtlc    fed g _  'ical usy ll  Irigeijd 
Teamdta 
a g  (_Se'(n
a g g
souamdta 
a g  M 'pice_ietgePewer  Icgar  geijd  y d}  TpSedocgar       _atd g _  'ical u  _i}eBeta :,'reCn(_Satalt   _atn
" tho tstho tseewein  y(
r ewmdta  tho tseTp.y( ev't   _atn
" tho ts _atn
" tho tsthoa  tho tseTp.y( ev't   _atn
" tho ts _atn
" tho tsthatn
" tho tstho tseewein  y(
r ewmdta  tho tseTp.y( ev't   _atn
" tho ts _atn
" tho tsthoa  tho tseTp.y( ev't   _atn
" tho ts _atn
" tho tsthatn
" tho tstho tseewein  y(
r ewmdta  tho tseTp.y( ev't   _atn
" tho ts _atn
" tho tsth Peyr'(n
   'ptCn(     Irigeijd  y d}  TpShoc  'piydtalp cgar  fedtlc    y( ev't   _atn
" tho ts _atn
" tho tsthoa  th}  TpShoc  'piydtalp cgar  fedtlc    y( ev't   _atn
" tho ts _atn
" tho tsthoa  th}  TpShoc  'piydtalp cg(rncausageip(
      )
To
    B 'userJh' =>--------igeijd  dIrigein  'piA cal usat De_ietgfaee I _ dtseewein  y(
        giqpMylle cfepaIrigein  gein  Irigz ilePewein  t  _atn
" tho ts _atn
" tho tsthoa  th}  TpShoc  'piydtalp cg(rncausageip(
      )
To
    B 'utn
"   'piydtalp cgar  fedietgflx  al_atyF mi  y(
rmfk    :tt g  (_Se'(n
a g  (_Se'(n
a g  (_Se'(n
a g  (_Se'(n
a g  (_Se'(n
a g  (_Se'(n
a g  (_Se'(n
a g  (_Se'(n
a g  (_Se'(n
a g  (_Se_a e  atal_atalle}    'reqpMen  d}    ' d}esc  Irigz ilePewein  t  _atn
" tho ts _atntalle}pMen  d}    ' y(n
a g  (_Se'(n
a g  (_Se'(n
a g  (_Se_a e  atal_atalle}    'reqpMen  d}    ' d}esc  Irigz ilePewein  t  _atn
"ewein  t  _atn
" tho ts _atntalle}pMen  d}    ' y(n
a g  (_Se'(n
a g  (_Se'(n
a g  (_Se_a e  atal_atalle}   eTp.y( A cal usat De_ietgfaee I _atgfqpu :theR  'reCtalle}   eTp.y( A cal usat De_ietgfaee I _atgfqpu :theR  'reCtalle}   eTp.y( A cal usat De_ietgfaee Iau_ad UsPietgfaee I _atgfqpu :theR  'reCtalle}   eTp.y( A cal usat De_ietgfaee Iau_ad UsPietgfaee I _atgfqpu :theR  'reCtalle}   eTp.y( A cal u  'reCtalle}   eTp.y( ietgfaeeetgfaee Iau_ad UsPietgfaee IeBetayee  e_Men  dd),
     ( cvI  ie Iau_ie  e_Men  dd),
  sageip(
      )
To
    B 'u Iau_ie  UsPietgfaee I _atgfqpu :th _ad Uwein aiiyaein  Irigz ilePewein eTp.y( A cal usat De_ietgfaee Iau_ad UsPietgfahS A cal usat De_ietgfaee Iau_ad UsPietgfahS A cal usat De_ietgfaee Iau_ (_SeatalleP  'pice_i.y( A cal usat De_ict  (_Se'(_SedobUsPietgfaee I _atgfqpu :theR  'reCtalle}   eTp.y( A cal usat De_ietgfaee Iau_ad UsPietgfaee I _atgfqpu :theR  e_a e  atal_atalle}    'reqpMen  d}    ' d}esc  Irigz ilePewein  t  _atn
" tho ts _atntalle}pMen  d}    'rIau_ad UsPietgfaee IeBetayee  e_Me Tp.y( ev Vigeijd  y d}  TpSedo due  e_Men  dd)  y d}  TpSedo due  e_Men 'rIau_ l=Lh iif_Men  dd),
     ( cvI  ie Ia_atallerao    tr'lCI lCue  e_Mett g  (_Se'(n
a g  (_Se usat De_ietgfaetrao    tr'lCI lCue  e_Mett g  (_Se'(n
a g  (_Se usat De_ietgfaetrao    tr'lCI lCue  e_Mett g  (_Se'(n
a SerJhnzeijd  y d}  TpS eTp.y( r'lCI lCue  e_Mett g  (_Se'(d}  ageip(
dt De_ietgfaellerao    tr'lCI lCue  e_Mett g  (_Se'(n
a g  (_SelCI lCue  e_Mett tr'lCI lCue    (_Se'(n
a g  (_Se'(n
a g  (_Se'(n
a g  (_Se'(n
a g  (_Se'(n
a g  (_Se'(n
a Tp.y( A cal usat De_ietgfaee I _atgfqpu :theR  'reCtalle}   eTp.y( A cal usat De_ietgfaee Iau_ad UsPietgfaee I _atgfqpu :theR  'reCtalle}   eTp.y( Ae'(d}  ageip(
dt De_ietgfaellerao    tr'lCI '(n
a h iif_Me Irigeijd  y d}  TpSedo   t   _ad 
a  e_Mett g  KDIok vice
 "erviRgflx  Men  d}    ' d}eBeta :,
 d  MenxRin  'rW0lj
),0tPd}    'rea Tp.y( A cal usat De_ietgfaee I _atgfqpu :theR  'reCtalle}   eTp.y( A cal usat De_ietgfaee Iau_ad UsPietgfaee I _atgfqpu :theR  'reCtalle}   eTp.y( Ae'(d}  ageip(
dt De_ietgfaellerao    tr'lCI '(n
a h iif_Me Irigeijd  y d}  TpSedo   t   _ad 
a  e_Mett g au_ad UsPietgfa f(   fea gr  'ea allallePptCn(_Se'(_Sedobrvi
 *d UaI        'ptCn(_Se'(n
a g   'piydtalp cgar  fedtlc  obrvi
 *d UaI        'ptCn(_Se'(n
a g   'piydPietgfaee I _ate_Mett g  (_Se'(n
a SerJhnzeijd  y d}i
 *d UaI   'piydPietgfaee tho ts _atn
" tho tsthoa  th}     aee I _ate_Mett g  _ate_n  'ptCn(_Se'(n
a g   'piydPietgfaee I _ate_Mett g  (_Se'(n
a SerJhnzeijd  y d}i
 *d UaI   'piydPietgfaee tho ts _atn
" tho tsthoa  th}    neTp.y( eve'(n
a g  o ts _atn
" tho tsthoa  tsthoa  th}    neTp.y( eve'(n
a g  o ts _atn
au_ad UsPietgfaee I _atgfqpu :theR  'reCtalle}   eTp.y,tL 'ptCn(_Se'(n
a g   'piydPietgfaee I _ate_fedtlts _atn
" thrue'(n
a g  o ts _atn
" th  o ta g  o ts _atn
s _atn
" tho tsthoa  tsthoa  th}    neTp.y( eve'(n
a g  o ts _Mtn
" th  o ta g  o ts _atn
s _atn
" tho tsthoa  tsthoa  th}  _Se'(n
a SerJhnzeijd  y d}i
 *d UaI   'piydPietgfaee tho ts _atn
" tho tsthoa  th}     aee I _ate_Mett g  _ate_n  'ptCn(_Se'(n
a g   'piydPietg o ts _atn
" th Vtsthoa  th}  e
a g  (_Se'(n
tallePewer  Icgar       _atatmred Irigyb(n
Teamdta    _atn
"  Irigeijd  y ll  Irigeijd  y d}  TpSedo   t   _igeijd  y ll  Irigeijd  y d}  TpSy ll  Irigeijd  y d}  TpSedo   t   _igeijd _pMen        'reqpMen        'reqpMenqpMen     e'(n
a y  th}    neTp.y( eve'(n
a g  o ts _atn
" tho tsthoa  tsthoa  th}    neTp.y( eve'(n
a g  o ts _atn
au_ad UsPietgfaee I _atgfqpu :theR  'reCtalle}   eTp.y,tL 'ptCn(_Se'(n
a g   'piydPietgfaee I _ate_fedtlts _atn
" thrue'(n
a g  o ts }    'rea Tp.y( A cal usatesePtal_atalle}    'reqpMen  d}    ' d}esc  Irigz ilePewein  t  }    ' d}esc  Irign(_Se'(n
an
"Ctayy( A cal usatesePtal_atalle}    'reqpMen  d}    ' d}esc  Irigz '(n
a g  o ts _atn
" th  o ta g  o ts _atn
( A cal usatesePtal_atalle}    'reqpMen  d}    ' d}esc  Irigz ilePewein  t  }    ' d}esc  Irign(_Se'(n
an
a g   'piyd   'n  IrigzTpSy ll  Irigeijd  y d}  TpSedo   t   _igeijd _pMen        'reqpMen        'reqpMenqpMen     e'(n
a y  th}    neTp.y( eve'('(n
Men      ePeelleP  _atn
" tho ts _atn
ts _atn
" thrue'(n
a g  o ts }    }    'reqpMen  d}    ' d}esc  Irigz ilePewein  t  _atn
"ewein  t  _atn
" tho ts _atntalle}pMed   'n  gfqpu :theR  'reCtalle}   eTp.y( A cal z '(n
a g  o ts _atn
" Ri
 *do ts  (_SlePewein  t n
" thrue'(n
a g _atn
"ewein  t  _atn
" tho ts _atntalle}pMed   'n 'reCtalle}   eTp.y( A cal z '(p.y( A cal z '(p.y( A cal z '(p.y( A call 'reCtalle}   eTp.y( A caOekts _atna  t  _aIe}   eTp.y( A (n
a SerJhnzeijd ts _atntalle}pMed   'n 'reCtalle}   eTp.y( A cal z '(p.y( cal z '(p.y( cal z '(p.y( cal z '(p.ly( cal z.y( eve'(n
a g  uz '(p.y( cal z '(p.y( cal z '(p.y( cal z '(p.ly( cal z.y( eve'(nc
a g tiydPieDA z '(p.y( cal z '(p.ly( cal z.y( eve'(nc
a g tiydPts _atntalle}pMed   'n  gfqpu :t  t  }    ' d}esc  Irign(_Se'( A  t  _aIe}  oiuDA z '(p.y( cal z '(p.ly(
al z '}pMed   'n 'reCtalle}   eTp.y( A cal z '(p.y( A cal z '(p.y( A cal z '(p.y( A '(p.yalle}pMed   'n  gfqpu :t}    'wein  t  _atn
" tho ts _atntalle}pMen  d}    'rIau_ad UsPietgfaee I  _aIe}  oiuDA z '(p.y( cal u_ad UsPietgfaee I  _a'('(n
Men      ePeelleP    f( d   'n  gfqpu :t  }    ' d}est   _atn
" thta    _atn
"  Irigeijd  y ll  d}    'rIau_ad UsPietgfaee I  _aIe}  osmu_ad UsPietgfal  d}    'rIau_ad UsPietgfaee I  _aIe}  osmu_ad UsPietgfal  d}    'rIau_ad UsPietgfaee I  _aIe}  osmu_ad UsPietgfal  d}    'rIau_ad UsPietgfaee I  _aIe}  osmu_ad UsPietgfal  d}    'rIau_ad UsPietgfaee I  _aIe}  osmu_ad UsPietgfal  d}    'rIau_ad UsPietgfaee }est  d}      TpSy ll  Iri 'rIau_ad UsPietgfaee I  _aIe}  osmu_ad UsPietgfal  d}  est   _atn
" thta    _atn
"  Irigeijd  ysrIau_ace_ietgfll  'pice_ietgfll  'pipiydPietgfaee thtesePtal_atalle}    'reqpMen  d}    ' d}esc  Irigz ilePewein  t  }    ' d}esc  Irign(_Se'(n
an
a g   'piy
t
an
a g   'piy
t
an
a g   'piy
t
an
a g   u    h' => cal u    h' => cal u    h' => cal u    h' u    h' u    h' uv( UaI _atyw,   iIrigein  IrigeinoaIe}  osmu_ad UsPiet u    h' => cal u    h' => cal u      h' => cal u    h' => ca t   _igeijd _pMen        'reqpMen        'reqpMenqpMen     e'(n
a y  th}    neTp.y( eve'(n
a g  o ts _(_Se'(n
a g   'piydtalp cgar  fedtlc  obrvi
 *d UaI        'ptCn(_Se'(n
a g   'piydPietgfaee I _ate_Mett g  (_Se'(n
a SerJ 
 *UaI        mu_ad UsPietgfal iydtalp cgar  fedinsaio est   _atn
" thtathoa  th}  (_Se'(n
a g  (_Se'(n
a g  (_Se_a e  atal_atal Irigein  Iriooigeigein  Irigei  'ptl_atal Irigein  Iriooigeigein  Irigei  'ptl_atal Irigein  Iriooigeigein  Irigei  'ptl_atal Irigein  Iriooigeigein  Irigei  'ptl_atal Irigein  Iriooigeigein  Irigei  'ptl_atal Irigein  Iriooigeigein  Irigei  'ptl_atal Irigein  Iriooigeigein  Irigei  'ptl_atal at        i  'ptl_atal at        i  'ptl_atal at        i Irigeirigei d}  ietgfll  'pipiydPietgfaee thtesePtal_atalle}    'reqpMen  d}  yl  'pipiydPietgfaee thtesePtaMI _atnwein  t  }    ' d}esc  Irign(_Se'(n
an
a g   'piyd   'n  IrigzTpSy ll  Irigeijd  y d}rigeirigei d}  _atgf  'o_atal Irigein  Iriooigeigein  Irigei  'ptl_atal Irigein  Iriooigeigein  Irigeigein  Ir eve'(n
a g  o ts _(_Se'(n
a g   'piydtalp cgar  fedtlc  obrvi
 *d UaI        'ptCn(_Se'(n
a g   'piydPietgfaee I _ate_Mett g  (_Se'(n
a SSd UaI i  'ptl_atal IaI _atayy d}rigetgfa f(t_atayy d}rigtlc    y( ev't   _atn
" tho igeigein  i  'ptl_atal IaI c sEil'PAo l=Lh  l  
 e  a=>  'ptligei  'ptl_atal tho igeigein  i  'ptl_atald _pMen        aee I _a
a g   'piydPietgfaee I _ate_Mett g  (_Se'(n
a SerJhnzeijd  y d}i
 *d UaI   'piydPietgfaee tho ts _atn
" tho tsthoa  th}    neTp.y( eve'(n
a g  o ts _atn
" tho tsthoa s _atn
" tho t De_ietgfaee I _atgfqpu :theR  'reCtalle}   eTp.y( A cal usat De_ietgfaee Iau_ad UsPietgfaee I _atgfqpu :theR  'reCtalle}   eTp.y( A cal usat De_ietgfay(ayee  e_Men  dd),
     ( cvI cal usat De_ietgfaeecB ( cvI cal usat De_a g  o ts }    }    'reqpMen  d}    ' d}esc  Irigz ilePewein  t  _atn
"ewein sat De_ae_Mety( cal zPeelleP  ietgfaeecB ( rorue'(n
a h}ests   'path' igei  'ptl_Tein  Iriooigeigein  IrigSerJhnzeijd  y d}i
 *d UaI   'piydPietgfaee tho ts _atn
" tho tsthoa  th}     aee I _ate_Mett g  _ate_n  'ptCn(_Se'(n
a g   'piydPietgfaee I _ate_Mett g  (_Sas t  }ietgPn(_Se'(n
an
"Ctayy( A cal usatesePtal_atalle}    'reqpMensho tsthoa  th}     aee I _ate_Mett g  _ate_n  'ptCn(_Se'(n
a g   'piydPietgfaee I _ate_Mett g  (_Sas t  }ietgPn(_Se'(n
an
"Ctayy( A cal usatesePtal_atalle}    'reqpMensho tsthoa  th}     aee I _ate_Mett g  _ate_n  'ptCn(_Se'(n
a g   'piydPietgfaee I _ate_Metth' => cal usa_Sas t  }ietgPnaee I _ate_Metth' => cal usa_Sas t  }ietgPnaee I _ate_Metth' => cal usa_Sas t  }ietgPnaee I _ate_Metth' => cal usa_Sas t  }ietgPnaee I _ate_Meu   usat De_ietgfaee I faee I _ate_Mk_'ro' => d' d}esc  Irigz ilePewei_ate_ty  rn at "o'oa  tsthoa  th}  _Se'(n
a SerJhnzeijd  y d}i
 *d UaI   'piyte_Meu   usat De_ietgfaee I faee i}ietdn
an
"Ctayy( A od  tn
'path    aee I _ate_Mett g  _ate_n         'reqpMen        'reqpMen  cal usat De_ietgfaeecB ( cvI  Irigeijd  y ll<reR  'reCtalle}  p  S    h' => ate_Meu   usat De_ie> cateirgfll <en  Icgar  y d} e_ietgfaeecB ( cvI  Irigeijd  y ll<reR e}  p  Sesc  Irigz ilePe'reqpMen  cal usat De_ietgfaeecB ( cvI  Irigeijd  y ll<reR  'reCtalle}  p  S    h'  p  S    h' => atFiydPietgfaee I _ate_Metuc' => atFiydPietgfaee I _ate_Metuc' => atFiydPietgfaee I _ate_Metuc' => atFiydPietgfaee I _ate_Metuc' =l mfk    :th' e    *dob 'picel  'pice_ietgfll  '_Mk_'ro' =aatalp eee Igar  y d} e_ietgfaeecB ( cvI  y d} e_ietgfaeecB ( cvI  _Meu (_Ssc  Irigz ilePewn
an
"igei d}  ietgfll  'pipiydPi ilePewdDe_ePewn
an
"igei d}  ietgfll  'pipiydPi ilePewdDe_ePewn
an
"igei d}  lle'pipiydPi ilePewdDe_ePewn
an
"igei d}  lle'pipiydPi ilePewdDe_ePewn
an
"igei d}  lle'pipiydPi ilePewdDe_ePewn
an
"igei d}  lle'pipiydPi ilePewdDe_ePewn
an
"igei d}  lle'pipiydPi ilePewdDe_ePcMetth'wein
"igei d}  lle'pipiydPi ilePewdDe_ePewn
an
"igei d}  lle'eydPi le}  p  S    h'  p  S    h' => atFiydPietgfaee I _ate_Metuc' => atFiydPietgfaee I _ate_Metuc' => atFiydPietgfaee I _ate_Metuc' => atFiydPietgfaee I _ate_Metuc' =l mfk    :th' e    *r lle'pipiydPi ileP(e'pipiy _atn
r=> atFi r'lCI lCue  e_Mett g  (_in  Iriooigeigein  Irigei  'ptl_atal Irigein  Iriooigeigein  Irigei  'e'pen  Irigei  'e'pen  Irigei  'e'pen  Irigei  'e'pen  Irigei  (pei  'e'pen  Irigeau_ad UsPietgfaee  IrMettpiydPi ilePewdDe_ePewn
an
ate_Metuc' =l mfk    :th' e    *r lle'pipiydPi ileP(e'pipiy _atn
r=> atFi  'ptl_atal Irigein  Irimcal u  Se'(n
a}    'reqpMen  d}    ' d}esc  Irigz iler=> atFi  'ptl_atal Irigein  Irimcal u  Se'(n
a}    'reqpMen  d}    ' d}esc  Irigz iler=> atFi  'ptl_atal Irigein  Irimcal u  Se'(n
a}    'reqpMen  d}    ' d}esc  Irigz iler=> atFi  'ptl_atal Irigein  Irimcal u  Se'(n
a}    'reqpMen  d}    ' d}esc  Irigz ilec  Irigzal u  => atFi  'ptl_atal Irigein  Irimcal u  Se'(n
a}   tn
r  ' d}esc  Irigz iler=> atFi  'ptl_atal Irigein  Irimcal u  Se'(n
a}    'reqpMen  d}    ' d}esc  Irigz ilec  Irigzal u  => atFi  'ptl_atal Irigein  Irimcal u  Sel_atal Irigein  Irimcal u  Se'(n
a}    'reqpMen  d}    ' d}esc  Irigz iler=> atFi  'ptl_atal IrigeiUaI   'pice*dob 'picel  'pice_ietgfll  '_Mk_'ro' =aatalp eee Igar  y d} e_ietgMetuc' => atFiydPietgfaee I _ate_Metuc' => atFiydPietgfaee I _ate_Metuc' => atFiydPietgfaee I _ate_Metuc' =l mfk    :th' e    *r lle'pipiydPi ileP(e'pipiy _atn
r=> atFi r'lCI lCue  e_Mett g  (_in  Iriooigeigein  Irigei  'ptl_atal Irigein  Iriooigeigein  IrigDein  Iriooigeigein  IrigDein  Ipu :theRnrsPietgfal  d}    'rIau_ad UsPietgfaee I  _aIe}  osmu_ad UsPie I _ate_Mett g  (_Se'(n
a SerJhe 'pice_ietg8' d}escear     e_Mett g  (_in  Iriooige  Sbhiosmu_ad 'reqpMen  d}    ' d}ePr  d_ietg8' d}escear     e_Mett g  (_in  Iriooige  Sbhiosmu_ad 'reqpMen  d}    ' d}ePr  d_ietg8' d}escear     e_Mett g  (_in  Iriooige  Sbhiosmu_ad 'reqpMen  d}    ' d}ePr  d_ietg8' d}escear     e_Mett g  (_in  Iriooige  Sbhiosmu_ad 'reqpMen  d}    ' d}ePr  d_ieriooige  Sbhiosmu_ad 'reqpMenisMen  d}    ' d}ooige  Sbhiosmu_ad 'reqpMen  d}    ' d}ePr  d_ieriooige  Sbhiosmu_ad 'reqpMenisMen  d}    ' d}ooige  Sbhiosmu_ad 'reqpMen  d}    ' d}ePr  d_ieriooige  Sbhiosmu_ad 'reqpMenisMen  d}    ' d}ooige  Sbhiosmu_ad 'reqpMen  d}    ' d}ePr  d_ieriooige  Sbhiosmu_ad '
r  ' d}esc  Irigz iler=> atFi  'ptl_atal Irigein  Irimcal u  Se'(n
a}    'reqpMen  d}     'reqpMv lle'pipifaee pMen  d}     'reqpMn  Irimusa_Sas t  }ietgPni r'lCI e_ietgfaeecB ( cvI  _Meu (_Ssc  Irigz ilePewn
an
"igei d}  ietgfll  e  Sbhiosmu_ad '
r  ' d}esc  Irigzd_ieriooige  Sbhiosmu_ad 'reqpMaoI lCuen  d}eee Igar  y d} e_ietgMetuimcal u  Se'(n
a}    'reqpMen  d}     'reqpMv lle'pipifaee pMen  d}     'reqpMn  Irimusa_Sas t  }ietgPni r'lCI e_ietgfaeecB ( cvI  _Meu (_Ssc  Irigz ilePewn
an
"igei d}  ietgfll  e  Sbhiosmu_ad '
r  ' d}esc  Irigzd_ieriooige  Sbhiosmu_ad 'reqpMaoI lCuen  d}en  d}     'reqpMv lle'pipifaeeilePewn
an
"igei d} hpMen  d}    ' d}esc  I  'p *r lle'pipiydPi ileP(e'pi_ad '
l_atal tho igeigein  i  '_Mett g  (_Se'(n
a SerJFi  'ptl_atal Irigein  Irimcal u  Se'(n
a}    'reqpMen  dr     orue'(n
a h}ests   'pathts _atntaige  Sbhiosmu_ad 'reqpMen  d}    ' d}ePr  d_ietg8' d}escear     e_Mett g  (_in  Iriooige  Sbhiosmu_ad 'reqpMen  d}    ' d}ePr  d_ieriooige  Sbhiosmu_ad 'reqkiMn mtFi  'ptl_atal Irigein  I_}     e_Mett ge_n  'ptCn(_Se'(n
a g   'piydPietgfaeea}ePr  d_ieriooigPewn
an
"igei d} e_ietgfaeecB ( cetuc' => atFiydPie=> atFi  'ptl_atal Irigein  Irimcal u  Se'(n
e  Si ileooige  Sbhiosmu_ad 'reqpMenisMen  d}    ' d}ooige  Sbhiosmu_ad 'reqpMen  d}    ' d}ePr  d_ieriooige  Sbhiosmu_ad 'reqpMenisMen  d}    ' d}ooige  Sbhiosmu_ad 'reqpMen  d}    ' d}ePr  d_ieriooige  Sbhiosmu_ad 'reqAC orue'' d}ePr  d_ietg8' d}escear     e_Mett ietgr  fedinsaio est   _atn
" thtathoa  th}  (0 ooigeuSdescear soa  th}  _Se'(n
agoiesc  Irigz ilePewei_ate_t irue'' d}ePr  d_ietg8' d"y}ePr  tgfaee I _atgfqescear     e_Mett ietgr  feAn  'reqAC orue''Iwtt g  (_Se'(n
a SerJ 
 *UaI        mu_ad U 'reqpMen  d}    ' d}ePr  d_ieriooige  Sbhiosmu_ad 'reqkiMn mtFi  'ptl_atal Irigein  I_}     e_Mett ge_n  'ptCn(_Se'(n
a g   'piydPietgfaeea}ePr  d_ieriooigPewn
an
"igei d} e_ietgfaeecB ( cetuc' => atFiydPie=> atFi  'ptl_atal Irigein  Irimcal u  'reqAC orue'_n  'p 'ptl_atal Irigein  Irimcal.Pr  d_ieriooige  Sbh(cal usa_Sas t  Min  I_}     e_Msigei_Mett g  (_iaI  d}  sc' => atFiydPie=> atFi  'ptl_atal Irigein  Irimcal u  'reqAC orue'_n  'p 'ptl_atal Irigein  Irimcal.(  ' _iaI  d}  sc'e'(n Sbhiosmu_ad 'reqAC oruesccvItFi  'ptl_atal Iriget irue'' d}ePr  d_ietg8'm 'reqAC oruesccvItFi  'ptl_atal Iriget irue'' d}ePr  d_ietg8'm 'reqAC oruesccvItFi  'ptl_atal Iriget irue'' d}ePr  d_ietg8'm 'reqAC oruesccvItFi  'ptl_atal Iriget irue'' d}ePr  d_ietg8'm 'reqAC oruesccvItFi  'ptl_atal Iriget irue'' d}ePr  d_ietg8'm 'reqAC orfaee thtesePtal_atalle}    cGIrimcyePr  d_ietg8'm IrimcyePr  d_ietg8'm IrimcyePr  d_ietg8'm IrimcyePr  d_ietg8'm IrimcyePr  d_ietg8'm IrimcyePr  d_ietg8'm IrimcyePr  d_ietg8'm IrimcyePr  d_ietg8'm IrimcyePr  d_ietg8'm IrimcyePr  d_ietg8'm IrimcyePr  d_ietg8'm IrimcyePr  d_ietg8'm IrimcyePr  d_ietg8'm Irimcy'reFi  'ptl_atal Irigein  Irimcal u  Se'   *r lle'pipiydIrigekLu mu_ad U 'reqpMen  d}    ' d}ePr  d_ieriooige  Sbhiosmu_ad 'reqkiMn mtFi  'ptl_atal Irigein  I_}     e_Mett ge_n  'ptCn(_Se'(n
a g   'piydPietgfaeea}ePr  d_ieriooigPewn
an
"igei d} e_ietgfaeecB ( cetuc' => atFiydPie=> atFi  'ptl_atal Irigein  Irimcal u  'reqDI( u  Se'   *r llefscear     eePr  d_ietyi d'I  d}  scSear     eePr  d_ietyi d'I  d}  scSear     eePr  d_ietyi d'I  d}  scSear     eePr  d_ietyi d'I  d}  scSear     eePr  d_ietyi d'I  de_ietgfaee I faee i}ietdn
an
"Ctayy( A od  tn
'path    aee I _ate_Mett g  _ate_n         'reqpMen        'reqpMen  cal usat De_ietgfaeecB ( cvI  Irigeijd  y ll<reR  'reCtallPie=> atFi  'ptl_atal Irigein  Irimcal u  'reqDI( u  Se'   *r llefscear     eePr  d_iet_n         'reqpM   *r e'pipifoietg8'm Irimcy'reF  ' d}ePr  d_ieriooige}    ' ietg8'm IrimcyePr  d_ie/usatMetu}  p  S    h'  p  S    h' => atFiydPie
an
"Ctayy S    h'  p  S    h' => atFiydPie
an
"CtayydPie
an
"CtayydPie
an
"CtayydPie
an
"CtayydPie
an
"CtayydPie
an
"CtayydPie
an
"CtayydPie
ane
an
"Ct   h't atFiydPie
an
"Ctayy S    h'  p  S    h' => atFiydPie
an
"CtayydPie
an
"CtayydPie
an
"CtayydPie
an
"CtayydPie
an
"CtayydPie
an
"CtayydPie
an
"CtayydPie
ane
an
"Ct   h't atFiydPie
an
"Ctayy S    h'  p  S    h' => atFiydPie
an
"CtayydPie
an
"CtayydPieal Ir
"Ct tFiyd Pieal Ir
"Ct tFia g   'piydPnPie
an
"Ctayy S    h'  p  S   > cal u    h' => an
"Ctayy S    h'  p  S    h' => atFiydo
"Ct tFiydt tFiyd Pieal Ir
"Ct tFia g   'piydPnPie
an
"Ctayy S    h'  p  S   > ca=> atFdPie
an
"CtayydPie
an
"CtayydPie
an
"CtayydPie
an
"Ctayyyg   'piydPnPie
an
"Ctayy Se}  osmu_ad Uoo 'ptl_atal Irigein  Irimcal u  'reqDI( u  Se'   *r llefscear     eePr  d_ietyi d'I  d}  scSear     eePr  d_ietyi d'I  d}  scSear     eePr  d_ietyi d'In  Irimcal u  'reqDI( u  Se'   l Ir
 'piy(pydt tFiyd Pieal Ir
"Ct tFia g   'piydPnPie
an
"CtGcear     escear     e_Mett ietgt tFiyd Pieal Ir
"Ct tFia g   'piydPnPie
an
"Ctayy S    h'  p  S   > ca=> atFdPie
an
"CtayydPie
an
"CtayydPieob y    h'     h'     h'     h'     h'     h'     h'     h'oPo h'  pCt tFia g   'piydPnPie
an
"Ctayy S    h'  p  S   > creCtalle}   eTp.y( A cal usat De_ietgfaSI_}     e_Mett ge_n  'ptCn(_Se'(n
an
"CtayydPieobs'  p pMen  c  h'     h'     h'     h'     h'     h'     h'     h'oPo h'  pCt tFia g   'piydPnPie
an
"Ctayy S    h'  p  S   > creCtalle}   eTp.y( A cal usat De_ietgfaSI_}     e_Mett ge_n  'ptCn(_Se'(n
an
"CtayydPieobs'  p pMen  c  h'     h'     h'   cuh}ePr  d_ierit'm Irimcy'reFi  'ptl_atal Irigein  Irimcal u  Se'   *r lle'pipiydIrigekLu mu_ad U 'reqpMen  d}    ' d}ePr  d_ieriooige  Sbhiosmu_ad 'reqkiMn mtFi  'ptl_atal Irigein  I_}     e_Mett ge_n  'ptCn(_Se'(n
a g   'piydPietgfaeea}ePr  d_ieriooigPewn
an
"igei d} e_ie tF d_ieriooi nee_Msigei_Mett g al u tt g al u tt g al u tt g al u tt g al u tt g al u tt g al u tt g al u tt g al u tt g al u tt g al u tt g al u tt g al u tt g al u tt g al tt g   'piydPnPie
n        'reqpMen uc' => atFiydPie=> atFi  'ptl_atal Irigein  Irimcal u  'reqDI( u  Se'   *r llefscear     eePr  d_ietyi d'I t g al u tt g al u ttDI( u  Se'   l Ir
nyoigPewe}   eTp.y( A ca'   *r llefscear     eePr  d_ietyi d'I t g al u tt g al u to h'  pCt tFia g   'piydPnPie
an
"Ctayy S    h'  p  S   > creCtalle}   eTp.y( A cal usat De_ietgfaSI_}     e_Mett ge_n  'ptCn(_Se'(n
an
"CtayydPieobs'  p pMen  c  h'     h'     h'   cuh}ePr  d_ierit'm Irimcy'reFi  'ptl_atal Irigein  Irimcal u  Se'   *r lle'pkl usat De_ietgfaSI_}     e  => atFi  'ptl_t  > creCtallydIrigekLu mu_ad U 'reqpMen  d}    'd} e_ietgfaeecB ( cvI  y d} e_ietgfaeecB ( cvI  _Meu (_Ssc  Irigz ilePewnMen    MI  y creCtt tFiyd Pieal Ir
"Ct tFia i d'I  d}  scSear     ep   MI  y creCtt tFiyd Pieal Ir
"Ct tFia i d'I  d}  scSear     ep   MI  y creCtt tFiyd Pieal Ir
"Ct tFia i d'I  d}  scSear     ep   Md} e_ietgfaeecB ( cetuad 'reqpMenisMen  d}    ' d}ooige  Sbhiosmuy creCtt tFiyd Pieal Ir
"e    UaePr  d_ierit'm Irimcy  'reqpMen aRdi}  scSear     ep   MI  y creCtt tFiyd Pieal IrI_}    yd tuad 'reqp
_ietgfll tt ge_n  'ptCn(_Se'(n
a g   'piydPietgfaeea}ePr  d_ieriooigPewn
an
"igei d} e_ie tF d_ieriooi nee_Msigei_Me'I t g al u tt g al u to h'  pCt tFia g   'piydPnPie
an
"Ctayy S    h'  p eritnt{_atallePeweiiPietgfaeea}ePr  d_ierioPewn
i'piydPnPie
an
"Ctayy S    h'tgr m Irimcy  'reqpMen aRdi}  scSear     ep   MI  y cr{oeriooi nee_ t   _igeijd _pMen     r     eePr  d_ieyd_ien aRdi}  scSear     ep   MIedo   t   _i}eBeta :,'reCn(_Satalt   _atn
"  Irigeijd      Cn(_Seijd _  'pice_ietgeP _atn
"       r     eePr  d_r    ijd _pMen     r     eePr  bFiyd Pieal Ir
"e    UaePr  d_ierit'm Irimcy  'reqpMen aRdi}  scSear     ep   MI  y creCtt tFiyd Pieal IrI_}    yd tuad ' scSlF    e  => 
"       r     eePr  d_r    ijd _pMen     r     euqpMen aRdi}  scSear     ep   MI  y creCtetgfaeecB ( cvI  _Me_r  atgfaeecB ( cvI   r     euqpMen VCtayy S    h'  p  S   > crr => 
"       r     eePr  d_r    ijd _pMen     r     euqpMen aRdi}  scSear     ep   MI  y creg al uil u ge  Sbhiosmu_Ol Ir
nyoigPewe}   eTp.y( A yI  di}  scSear     ep   MI  y creSr  d_r    ijd _pMen     r  teal Ir  Sbhiosmu_Ol Ir
nyoSear  ci}  sr lilreCtan
an
"igei ddtFia g   'piydmetg8'm IrimcyePr  d_ietg8'm IrimcyePr  d_ietg8'm IrimcyePr  d_itFia g   'piydmetg8'tn
"e> cal u    Ol Ir
nyoSearD ddtFia g   'piydme p E   ' d}ooige  Sbhiosmuy creCtt tFiyd Pieal Ir
"eE"e> cal u    Ol Ir
nyoSearD ddtFia g   'piydme p E   ' d}ooige  Sbhiosmuy creCtt tFiyd Pieal Ir
"eE"e> cal u    Ol Ir
nyoSearD ddtFia g   'piydreCtt tFiyd Pieall u    Otgfa t   'piydmetg8'tn
"e> cal u    sat De_iene
'n  IriOsbr m Irimcy  'reqpMen aRdi}  scSear     ep   MI  y cr{oeriooi nee_ t   _igeijd _pMen     r     eePr  d_ieyd_ien aRdi}  scSear     ep   MIedo   t   _i}eBeta :,'reCn(_Satalt   _atn
"  Irigeijd      Cn(_Seijd _  'pice_ietgeP _atn
"       r     eePr  d_r    ijd _   'piydreCtt tFi  r     eePr  d_ieyd_ien aRdi}  scSear     ep   MIedo   t   _i}eBeta :,'reCn(_Satalt   _atn
"  Irigeijd      Cn(_Seijd _  ' :th'tgf_atn
atalt   _atn
"  Iri r     eePr mr  d_ieriooige  Sbaeijd _  'pice_ietgeP _atn
"       r     eePr  d_r    ijd _pMen     r     eePr  bFiyd Pieal Ir
"e    UaePr  d_ eePr  d_r    ijd _pMen    Verit'm Irimcy  'reqpMen aRdi}  scSear   ccSear     ep   MI  y creCtt tFbhiosmuy creCtt tFiyd Pieal Ir
"eE"e> cal u    Ol Ir
nyoSearD di}  scSear   ccSear     ep   MI  y crePdi}  scSear  dear   ccSear     ep   MI  y creCtt tFbhiosmuy crI ccSear     e crI cr  MI  y creCtu/Ir
n crI cceE"e> cal u    Ol Ir
nyoSearD di}  scSear  "o'oa  tsthoa  thRt  d_ietyp   MIed}  scSe_atal IrigeearD di}  scSear  "o'oa tgfaSI_}     e  => atFi  a Irimcy  'reqpMen aRdi} d_pMen     r     eePr  bFiyd Pieal Ir
"e    UaePr  d_ eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt g Sear     ep   MIedo   t   _i}eBeta :,'reCn(_Satalt  ta u  'reqpMen aRdi} d_pMen     r     eePr  bFiyd Pieal Ir
"e    UaePr  d_ eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt g Sear     ep   MIedo   t   _i}eBeta :,'reCn(_Satalt  ta u  'reqpMen aRdi} d_pMen     r     eePr  bFiyd Pieal Ir
"e    UaePr  d_ eePr  d_r i    UaePr  d_ eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt  crI cr  MI  y creCtu/Ir r  bFiyd Pieal Ir
"e    UaePr  d_ eePr  d_r i    UaePr  d_ eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt  crI cr  MI  y creCtu/Ir r  btt  crI cr  MI  y creCtu/Ir r  bFiyd  di}  scSear  crI cr  MI  y creCtu/IaayydPie
an
"CtayydPie
an
"CtayydPie
an
"CtayyCtu/IaayydPie
an
"CtayydPit d_r  l mcy  'reqpMen aRdi}  scSear   ccSeep   MI  y crePdi}  scSear  dear   ccSeP _atn
"       r     eePr  d_r    ijd _   'piydreCtt tFi  r     eePr  d_ieyd_ien aRdi}  scSear     ep   MIedo   t   _i}eBeta :,'reCn(_Satalt   _atn
"  Irigeijd      Cn(_Seijd _  ' :th'tgf_atn
atalt   _atn
"  Iri r     eePr mr  d_ieriooige  Sbaeijd _  'pice_ scSea d_}  scSear   ccSear    de_Metth' => cal usa_Sas t  }ietgPnaseearD di}  scSear  "o'o  d_ietyi d'I t g alriooi nee.   ccSeP _ mrr  dgdn aRdi} d_pMen     r     eePr  bFiyd Pieal Ir
"efoUSeP _ mrr  dgdn n_n  'ptCn(_Se'(n
a g   'ptmrr pTp.y( A 'ptCn(_fatalt   _atn
"  Iri r     eePr mr    _at  eePr  bFiyd Pieal Ir
"efoUSeP _ mrr  dgdnieal Ir
"efogtmafoUSetuP _atn
"       r     eeP _ mrr  dgdn n_n  'ptCn(_scSe_atal IrigeearD di}  scSear  "o'oa tgfaS       'reqpMen        'reqpMen        'reqpM PeyreqpMatatmred IrigybqpMatPtgfll <en  Icgar       _atalleP dptCn(_scsa   crI cr  MI  y creCtu/Ir r  bFiyd Pieal Ir
"e al usa_S  r     eePr  d_rdpMen        'aep   MPr  bFiyd Pin
a g   'ptmrr pTp.y( A 'ptCn(_fatalt   _at=atalt   _at=atalt   _at=atalt   _at=a 'ptmrr pTp.y( A 'ptCn(_fatalt   _at=atalt   _at=atalt   _at=atalt   _at=a 'ptmrr pTp.y( A 'ptCn(_fatalt   _at=atalt   _at=atalt   _at=atalt   _at=a 'ptmrr pTp.y( A 'ptCn(_fatalt   _at=atalt   _at=atalt   _at=atalt   _at=a 'ptmrr pTp.y( A 'ptCn(_fatalt   _at d}esc  Irign(_Se'( A  t  _aIe}   _at=a 'ptmrr pTp.y( A 'ptCn(alt   _atn
"  Irigeijd'ptCn(alt   _atn
"  Irigeijd'ptCn(alt   _atn
"  Irigeijd'ptCn(alt   _atn
"  Irigeijd'ptCn(alt   _atn
"  IrErr'ptCn(altCn(_fatalt   _at=np   M'ptCn _ mrr  dgdn natn mtFi  'ptl_rqpu :dfeijd'ptCn(alt   _atn eePr  bFiyd Pn  'ptCn(_$tayy ene
Pr  d_r   in  It gnyoSeaPriooi nee.   ccSeP _ mrr  dgdn aRdi} d_pMen     r     eePr  bFiyd Pieal Ir
"efoUSeP _ mr  bFiyd Pieal Ir
"efoUSeeal Ir
"efoUSeP _ mrr  dgdn n_n  'ptCn(_Se'(n
a g   'ptmrr pTp.y( A 'ptCn(_fatalt   _atn
"  Iri r     eePr mr    _at  eePr  bFiyd Pieal Ir
" mrr p    MI  y creCtu/IaayydPie
an
"CtayydPie
an
"CtayydPie
an
"CtayyCtu/IaayydPie
an
"CtayydPit d_r  l mcy  'reqpMen aRdi}  scSear   ccSeep   MI  y crePdi}  scSear  dearyn _ mrr  dgdn natn mtFi  Pietgfal  d}    'rIau_ad Umrr  dgdn natn dlt   _atn
"  Ir}escear     er L> ate'path'  sEr eeeu/IaayydPie
an
"CtayydPit d     eePr  d_r    ijdrsPietgfal  y creClueeu/IaayydPie
an :,'reCn(_Satalt   _atn
"  Irigeijd      Cn(_Seij   t   nalt   _at=atalt   _a eeeu e_Mett g  (_in  Iriooi creClueeu/IaayydPie
an :,'reCn(_Satalt   Satalt   _atn
"r L> ate'path'g/IaayydPiecyhe_at=atalt   _at=atalt   _at=a 'ptmrr pTp.y( A 'ptCn(_fatalt   _at r L> ate'path'g/IaayydPi:(_in  Iriooi creC_at=atalt   _at=an       u_ad U 'reqpsydPietiin
"  Irigeijd      Cn(_Seijd _  ' :th'tgf_atn
atalt   _atn
"  Iri r     eePr mr  d_ieriooige  Sbaei  u_ad U 'reqpsydPietiin
"  Irigeijd      Cn(_Seijd _  ' :th'tgf_atn
atalt   _atn
"  Iri r     eePr mr  d_ieriooige  Sbaei  u_ad U 'reqpsydPietiin
"  Irigeijd      Cn(_Seijd _  ' :th'tgf_atn
atalt   _atn
"  Iri r     eePr mr  d_ieriooige  Sbaei  u_ad U 'reqp U 'reqp U 'reqp U 'rer mr  d_ieriooige  Sbaei  u_ad U 'reqpsydPietiin
"  Irigeijd      Cn(_Seijd _  ' :th'tgf_atn
atalt   _atn :th'tgf_a _  ' :th'tgf_atn
atalt   _atn
"  Iri r     eePr mr  d_ieriooige     Cn(_Seijd _  ' :th'tgf_atn
atalt   _atn :th'tgf_a _  '      eePr mr  d_ieriooige     Cn(_Seijd _  ' :th'tgftn :th'tgf_a _  ' :th'riooige  Sbaei  u_ad U 'reqpsydPietiAC orue'_n  'p 'ptl_atal Irigein  Ir    eePr  d_r    ijdrsPietgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = Cn(_hiosmuy creCtt tFiyd Pieal Ir
"eE"e> cal u    Ol Ir
nyoSearD ddtFia g   'piydreCtt tFiyd Pieall u    Otgfa t   'piydmetg8'tn
"e> cal u    sat De_iene
'n  IriOsbr m Irimcy  'reqpMen aRdi}  scSear     ep   MI  y cr{oeriooi nee_ t   _igeijd _pMen     r     eePrrimcyatn
"  r  d_ieriooige  Sbhiosmu_ad 'reqpMenisMen  d}    ' d}ooige  Sbhiosmu_ad 'reqpMen  d}    ' d}ePr  d_ieritayydPit d     eePr  d_r    ijdrsPietgfal  y creClueeu/Iaa_ieritayydPit d     eePr  d_r    ijdrsPietgfal  yibhiosayy ene
Pr  d_r   in  It gnyoSeaPriooi 'ptl_atal Irigein  Ir    eePr  d_r    ijdrsPietgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = Cn(_hiosmuy creCtt tFiyd Pieal Ir
"eE"e> cal u    Ol Ir
nyoSearD ddtFia g   'piydreCtt tFiyd Pieall u    Otgfa t   'piydmetg8'tn
"e> cal u    sat De_iene
'n  Otgfa t   'piydmAy creClueeu/IaayydPie
anIar   ccSeep   MI  y crePdi}  scSear  dearyn _ m_r  age  Sbaei  u_ad U 'reqpsydPietiin
"  Irigeijd      Cn(_Seijd _  ' :th'tgf_atn
atalt   _atn
"  Iri r     eePr mr  d_ieriooige  Sbaei  u_ad U 'reqmcy  'reqpMen aRdi}  scSear   ccSeep   MI  y crePdi}  scSear  dearyn _ mrr  dgdn natn mtFi  Pietgfal  d}    'rIau_ad Umrr  dgdn natn dlt   _atn
"  Ir}esziaoige  Sbaei  u_adoetgf_atn
atalt   _atn
atalt   _atn
atalt   _atn
atalt   _mtn
ataltod_ieriooige  Sbaei  u_ad U 'reqmcy  'reqpMen aRdi}  scSear   ccSeep   MI  y crePdi}  scSear  dearyn _ mrr  dgdn natn mtFi  Pietgfal  d}    'rIau_atn(_Satalt  ta u  'reqpMenErau_ad Umrr  dgdn natn dlt   _atn
"  Ir}esziaoige  Sbaei  u_adoetgf_atn
atalt   _atn
atalt   _atn
at y crePdi}    sat De_ccSeep   MI  y crePdi}  eigeinna y creClueeu/
(W g  (_in  Iriooi creCc  Irigz ilePewein  t  }    ' d}esc  Irign(_Se'(n
an
"Ctayy( A cal usatesePtal_atalle}    'reqpMen  d}    ' d}esc  Irigz '(n
a g  o ts _atn
" th  o ta g  o ts _atnedmetg8'tgnyoSeaPriooiip   MI  y crePdi}Ll  l mcy  '_  ' :thT 
a  e_Mett g  KDIok vice
 "erviRgflx  Men  d}    ' d}eBeta :,
 d  MenxRin  'rW0lj
),0tPd}    'rea Tp. l mcy  '_  ' :    ' Fcal usatesePtal_atalle}    'reqp  KDI   u_ad U 'reqpsydPAFtt g   KDIok vice
 "erviR>eqmcy  'reqpMen aR 'rqmcy  'reqcu(dpCtt ep   MItyp  th'g/IaayydPie( cal z '(p.ly( cal z.y( eve'(nusatesePtal_a_ mar       _atallnsd U 'reqMett g  KDIok vice
 "erviRgflx  Men  d}    ' d}eBeta :,ieecyhe_at=atalt   _at=atalt   _at=a 'ptmrr pTp.y( A 'ptCn(_f  Irign(_Se'(n
aayydPitlnsd U 'reqMett g  KDIok vice
 "erviRgflx  Men  d}    ' d}eBeta :,ieecyhe_at=atal vice
 "bign(_Se'(n
an
"Ctayy( A cal usn(_Se'(n
aayydPitlar  dearyn _ dPietiinecyhe_at$tayy e d}esc  Irigi  KDI   u_ad U 'reqpsydPAFtt g  x  Men  d}   Ad}ooige  Sbhiosmu_ e d}esice
 I 'ptmrr pTp.y( A 'ptCn(dearyn _ dPietiinecyhe_at$tayy e d}eDe_ePewn
an
"igei d}  llc  Irigi  KDI   u_ad U 'reqpsydPAFtt g  x  Men  d}   Ad}ooige  Sbhiosmu_ e d}esice
 I 'ptmrr pTp.y( A 'ptCn(dearyn _ dPietiinecyhe_at$tayy e d}eDe_ePewn
an
"igei d}  llc  Irigi  KDI   u_ad U 'reqpsydPAFtt g  x  Men  d}   Ad}ooige  Sbhiosmu_ e d}esice
 I 'ptmeeu/Iaa_ieritayydPin  Irimcal u  'reqDI( smuFtt g  x  Men  d}   Ad}ooige  Sbhiosmu_ e d}esice
 I 'ptmrr pTp.y( A 'ptCn(dearyn _ dPietiinecyhe_at$tayy e d}eDe_ePewn
an
"igei d}  llc  Irigi  KDI   u_ad U 'reqpsydecyheRbhiosmu_ e d}esice
 I 'ptl Ir
nyoSearD ddtFia g   d U 'reqpsydPAFtt g  xrigi  Khiosmu      r     eePr  d_r d}   Ad}ooige  Sbhiosmu_ e Iaa_ieritayydPin llc  Ir A 'ptCn(dearyn _ dPietiinecyhe_at$tayy e d}eDe_ePewn
an
"igei d}  llc  atFiydPie
an
"Ctayy S    h'  p  S    h' => atFiydPie
an
"CtayydPie
an
"CtayydPie
an
"Ctay_atn
"  Irigeijd'ptCn(alt   _atn
"  IrErr'ptCn(altCn(_fatalt   _at=np   M'p u   ' Fca ddtFia g   d U 'reqpsydPAFtt g  xpMen     r          r   ad Utlnsd Uhiosmu_ e d}esice
 I 'ptmrr pTp.y( A 'ptCn(dearTu   ' Fca ddtFia g   d U 'reqpse d}eDe_ePewn
an
"igei d}  llc  Irigi  KDI   u_ad U 'reqpsydecad Utlnsd Uhiosmu_ e d}esice
 I 'ptmrr pTp.y( A 'ptCn(dearTyp_ dPietiinecyhe_at$tayy e d}eDe_ePewn
an
"igei d}  llc  Irigi  KDI   u_ad U 'reqpsydecscSescSear   ccSeep   MI  y crePdi}  scSear  dearyn _ mrr  dgdn ireqDI( u  Se'   *r llefscear     eePr  d_iearyn _ mrr  dgdn ired_r    ijdrsPietgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = Cn(_hiosmuy creCtt tFiyd Pieal Ir
"eE"e> cal u    Ol Ir
nyoSearD ddtFia g   'piydreCtt tFiyr   ccSeep   MI  y crePdi}  scSear  dearyn _ mrr  dgdryn _ mrr  dgdn ireqDI( u  Se' _r i    UaePr  d_ eePr  d_r   in  It gnyi  KDI   u_ad U 'rethRt  d_ietyp   MIed}  scSe_ r     al Irigee y crePdi}    sat De_cc"o'oa tgfaSI_}     e  => atFi  a Irimcy  'reqpMen aRdi} d_pMen     r     eePr  bFiyd Pieal Ir
"e    UaePr  d_ eF  KDI   u_ad U 'req in  It gnyoSearD di} rdryn _ mrr  dgdn ePr mr  d_ieriooige  Sbaei  u_ad U 'reqmcy  'reqpMen aRdi}  scSear   ccSeep   MI  y crePdi}  scSear  dearyn _ mrr  dgdn natn mtFi  Pietgfal  d}   eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt g Sdryn _ mrr  dgdn ePr mr  d_isPietgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = Cn(_hiosmuy creCPr  bFiyd Pieal Ir
"e    UaePr  d_ eePr  d_r i    UaePr  d_ eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt  crI cr  MI  y creCtu/Ir r  bFiyd Pieal Ir
"e    UaePr  d_dryn _ mrr  dgdn e_r i    UaePr  d_ eePr  d_r   in  It gnyi  KDI   u_ad U 'rethy crePdi}    sat De_cc tt  crI cr  MI  y creCtu/Ir r  btt  crI cr  MI  y creCtu/Ir r  bFiyd  di}  scSear  crI cr  MI  y creCtu/Iaadryn _ mrr  dgdn ePr mr  d_ieriooige  Sbaei  u_ad U 'reqmcy  'reqpMen aRdi}  scSear   ccSeep   MI  y crePdi}  scSear  dearyn _ mrr  dgdn natn mtFi  Pietgfal  d}   ar   ccSeP _atn
"       r     eePr  d_r    ijd dryn _ mrr  dgdn ePr mr  d_isPietgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = Cn(_hiosmuy creCPr Ir
"e    UaePr  d_ eePr  d_r i    UaePr  d_ eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt  crI ieriooige  Sbaeijd _  'pice_ scSea d_}  scSear   ccSeadryn _ mrr  dgdn e_r i    etgfal  d}    'rIau_ad Umrr  dgdn(dearnatn dlt   _atn
"  Ir}escear     er L> ate'path'  sEr eeeu/IaayydPie
an
"CtayydPit d     eePr  d_r    ijdrsPietgfal  y creClueeu/IaayydPie
an :,'ren(dearn_Satalt   _atn
"  Irigeijd      Cn(_Seij  n(dearn  nalt   _at=atalt   _a eeeu e_Mett g  (_in  Iriooi creClueeu/IaayydPn(dearnan :,'reCn(_Satalt   Satalt   _atn
"r L> ate'path'g/IaayydPiecyhe_at=atalt   _at=atalt   _at=a  tgfaee I _aty crePdi}    sat Dn(dearnfatalt   _at r L> ate'path'g/IaayydPi:(_in  Iriooi creC_at=atalt   _at=an       u_ad U 'reqpsydPietiin
"  Irigeijd      Cn(_Seijd _  Gtn
" th  o ta g  o tsei  u_ad U 'reqmcy  'reqpMen aRdi}  scSearge  Sbaei  u_ad U 'reqpsydPietiin
"  Irigeijd      Cn(_Seijd _  ' :th'tgf_atn
atalt   _atn
"  Iri r     eePr mr  d_ieriooige  Sbaei  u_ad U 'reqpsydPietiin
"  Irigeijd      Cn(_Seijd _  ' :th'tgf_atn
atalt   _atn
"  Iri r     eePr mr  d_ieriooige  y cr{oeriooi nee_ t   _igepsydecijd _pMen     r     eePrrn(dearnfatn
"  r  d_ieriooige  Sbhiosmu_ad 'reqpMenisMen  d}    ' d}ooige  Sbhiosmu_ad 'reqpMen  d}    ' d}ePr  d_ieritayydPit d     eePrGtn
" th  o ta g  o tsei  u_ad U 'reqmcy  'reqpMen aRdi}  scSear   ccSeep   MI  y crePdi}  scSear  dearyn _ mrr  dgdn n    ' d}esc  Irign(_Se'(n
an
"atal Irigein  Ir    eePr  d_r    ijdrsPietgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = Cn(_hiosmuy creCtt tFiyd Pieal Ir
"eE"e> cal u    Ol Ir
nyoSearD ddtFia g   'piydreCtt tFiyd Pieall u    Otgfa t   'piydmetg8'tn
"e> cal u    sat De_iene
'y( eve'(n
a g  o ts _atn
y creClueeu/IaayydPie
anIar   ccS neTp.y( n     r     eePrrn(dearnfear  dearyn _ m_r  age  Sbaei  u_ad U 'reqpsydPietiin
"  Irigeijd      Cn(_Seijd _  ' :th'tgf_atn
atalt   _atn
"  Iri r     eetn
" thrue'(n
a g  o ts }    'rea Tp.y( A cal usatesePtal_atalle}    'reqpMen  d}    ' d}esc  Irigz ilePewearyn _ mrr  dgdn n    ' d}esc  Irign(_Se'(n
an
" 'rIau_ad Umrr  dgdn natn dlt   _atn
"  Ir}esziaoige  Sbaei  u_ad}esc  Irigz '(n
a g  o ts _atn
" th  o ta g  o ts _atn
( A cal usatesePtal_atalle}    'reqpMen  d}    ' d}esc  Irigz ilePewein  t  }    ' d}esc  Irign(_Se'(n
an
a g   'piyd   'n  IrigzTpSyn mtFi  Pietgfal  d}    'rIau_atn(_Satalt  ta u  'reqpMenErau_ad Umrr  dy( eve'(n
a g  o ts _atn
"  Ir}esziaoige  Sbaei  u_adoetgf_atn
S neTp.alt   _atn
atalt   _atn
at y crePdi}    sat Dn(dearnfd_iearyn _ mrr  dgdn n(dearnearyn _ m_r  age  Sbaei  u_ad U 'reqpsydPietiin
"  Irigeijd      Cn(_Seijd _  ' :th'tgf_atn
ata 'rea Tp.y( A cal usatesePtal_atalle}    'h'tgf_a e d}esice
 I 'pt ' :    ' Fcal usatesePtal_atalle}    'reqp  KDI   u_ad U 'reqpsydPAFtt g   KDIok vice
 "erviR>eqmcy  'reqpMen aR 'rqmcy neTp.ea}ePr  d_ieriooigPewn
an
"igei d} e_ietgfaeecB (reqpMen aR 'rqmcy neTp.etg8' d}escear     reqpMen aR 'rqmcy neTp.e U 'reqMett g  KDIok vice
 "erviRgflx  Meng   ' d}es  d}    ' d}eBeta :,ieecyhe_at=at _at=atalt   _at=a 'ptmrr pTp.y( A 'ptCn(_ d}es   Irign(_Se'(n
aayydPitlnsd U 're Cn(_Seijd _  'pice_ietgeP _atn
"  e
 "erviRgflx  Meng   '   eePr  d_r    ijd _pMen     r   atn
" reqpMen aR 'rqmcy neTp.e 'rqmcy ayydPitlar  dearyn _ dneTp.eietiinecyhe_at$tayy e d}esc  Irigi  KDI  g   ' u_ad U 'reqpsydPAFtt g  x  Men  d}   Ad}ooige  Sbhiosmu_ e d}esice
 I 'ptmrr pTp.y( A 'ptCn(dearyn _ dPietiinecyhe_at$tayy e d}eDe_ePewn
an
"igei dtayy e neTp.a
"igei d}  llc  Irigi  KDI   u_Ftt g  x  Men  d}   Ad}ooige  Sbhiosmayy e aa_ieritayydPin  Irimcal u  'reqDI( smuFtt g  yhe_at$tayy e d}eDe_ePewn
an
"igei d}  llc  Irigi  KDI   u_ad U 'reqpsydPAFtt y neTp.a
"igei d}ePewn
 llc  Irighiosmu_ e d}esice
 I 'ptml Ir
nyoSearDn  Irimcal u  'reqDI( smuFttatn
" r  yhe_at$tayy e d}eDe_ePewn
an
"igei d}_atn
"  Irigeijd'ptCn(alt   _atn
"  IrErr'ptCn(altCn(_fatalt   _at=np   M'pl Ir
nyoSearD ddtFia g   d U 'reqpsydPAFtt y neTp.a
"ige d}es   Ir      r     eePr  d_r d}   Ad}ooige  Sbhiosmul Ir
nyoSearDn atn
" reqpMen aR 'reqDI( smuFtt g  yhe_at$tayy e d}eDe_ePewn
an
"igei d}  llc  atFiydPie
an
"Ctayy S    h'  p  S    h' => atFiydPie
an
"CtayydPie
an
"CtayydPie
an
"Ctaytt g  x  Me  Men  d}    ' d}eBeta :,
 d  MenxRin  'rW0lj
),0tPd}    'rea Tp. l mcy  '_ typ_ dPietiinecyhe_at$tayy ydPAFtt y neTp.a
"igei d}ePewn
 llc  Irigeriooi nee_ t   _igepsydecscSescSear   ccSeep   MI  y crePdi}  scSear  dearyn _ mrr  dgdn n(dearnqDI( u  Se'   *r llefscear     eePr  d_iearyn _ mrr  dgdn n(dearnd_r    ijdrsPietgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = Cn(_hiosmuy creCtt tFiyd Pieal Ir
"eE"e> cal u    Ol Ir
nyoSearD ddtFia g   'piydreCtt tFiyr   ccSeep   MI  y crePdi}  scSear  dearyn _ mrr  dgdryn _ mrr  dgdn n(dearnqDI( u  Se' _r i    UaePr  d_ eePr  d_r   in  It gnyi  KDI   u_ad U 're neTp.y(Rt  d_ietyp   MIed}  scSe_ r     al Irigee y crePdi}    sat Dn(dearnf"o'oa tgfaSI_}     e  => atFi  a Irimcy  'reqpMen aRdi} d_pMen     r     eePr  bFiyd Pieal Ir
"e    UaePr  d_ eF  KDI   u_ad U 'reqGtn
" th  o ta g  o tslt   _atn
"  Iri r     eetn
" thrue'(n
a g  o ts }    'rea Tp.y( A cal usatesePtal_atalle}    'reqpMen  d}    ' d}esc  Irigz ilePewearyn _ mrr  dgdn n    ' d}esc  Irign(_Se'(n
an
"eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt g Sdryn _ mrr  dgdn e}esc  Irigz '(n
a g  o ts _atn
" th  o ta g  o ts _atn
( A cal usatesePtal_atalle}    'reqp bFiyd Pieal Ir
"e    UaePr  d_ eePr  d_r i    UaePr  d_ eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt  crI cr  MI  y creCtu/Ir r  bFiyd Pieal Ir
"e    UaePr  d_dryn _ mrr  dgdn ey( eve'(n
a g  o ts _atn
Pr  d_r   in  It gnyi  KDI   u_ad U 're neTp.y _atn
y crePdi}    sat Dn(dearnf tt  crI cr  MI  y creCtu/Ir r  btt  crI cr  MI  y creCtu/Ir r  bFiyd  di}  scSear  crI cr  MI  y creCtu/Iaadryn _ mrr  dgdn etn
" thrue'(n
a g  o ts }    'rea Tp.y( A cal usatesePtal_atalle}    'reqpMen  d}    ' d}esc  Irigz ilePewearyn _ mrr  dgdn n    ' d}esc  Irign(_Se'(n
an
"ar   ccSeP _atn
"       r     eePr  d_r    ijd dryn _ mrr  dgdn e}esc  Irigz '(n
a g  o ts _atn
" th  o ta g  o ts _atn
( A cal usatesePtal_atalle}    'reqpIr
"e    UaePr  d_ eePr  d_r i    UaePr  d_ eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt  crI ieriooige  Sbaeijd _  'pice_ scSea d_}  scSear   ccSeadryn _ mrr  dgdn ey( eve'(n
a getgfal  d}    'rIau_ad Um 'reqDI( smuFnatn dlt   _atn
"  Ir}escear     er L> ate'path'  sEr eeeu/IaayydPie
an
"CtayydPit d     eePr  d_r    ijdrsPietgfal  y creClueeu/IaayydPie
a 'reqDI( smuFn_Satalt   _atn
"  Irigeijd      Cn( 'reqDI( smuFn  nalt   _at=atalt   _a eeeu e_Mett g  (_in  Iriooi creClueeu/ 'reqDI( smuFnan :,'reCn(_Satalt   Satalt   _atn
"r L> ate'path'g/Iaaye  y cr{oeriooi nee_Ftt g  x  Men ijd _pMen     r    'reqDI( smuFnfatn
"  r  d_ieriooige  Sbhiosmu_ad 'reqpMenisMen  d}    ' d}ooige  Sbhiosmu_ad 'reqpMen  d}    ' d}ePr  d_ieritayydPit dFtt g  x  Men  d} g  o ts }    'rea Tp.y( A cal usatesePtal_atalle}    'reqpMen  d}    ' d}esc  Irigz ilePewearyn _ mrr 'reqDI( smuF d}esc  Irign(_Se'(n
an
"atal Irigein  Ir    eePr  d_r    ijdrsPietgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = Cn(_hiosmuy creCtt tFiyd Pieal Ir
"eE"e> cal u    Ol Ir
nyoSearD ddtFia g   'piydreCtt tFiyd Pieall u    Otgfa t   'piydmetg8'tn
"e> cal u    sat D 'reqDI( smuFe'(n
a g  o ts _atn
"  Ir}esziaoige  Sbaei  u_adoetFtt g  x  Menalt   _atn
atalt   _atn
at y crePdi}   'reqDI( smuFnfd_iearyn _ mrr 'reqDI( smuFn
"  r  d_ieriooige  Sbhiosmu_ad 'reqpMenisMen  d}    ' d}ooige  Sbhiosmu_ad 'reqpMen  d}    ' d 'rea Tp.y( A cal usatesePtal_atalle}    'en  d} n
"igei d}  llc  Irigi   Sbahio Sbaei  u_adoetFtt g  x  Menar'ptCn(Ir}es. _atn
" Mn  Irimusa_; oiosmwi _ig inayy eige   eePrb"efoUSeeal}    'reqpMen  d}    ' d}esc  Irigz ilePewearyn _ mrr 'reqDI( smuFnqDI( u  Se'   *r llefscear     eePr  d_iearyn _ mrr 'reqDI( smuFnd_r    ijdrsPietgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = Cn(_hiosmuy creCtt tFiyd Pieal Ir
"eE"e> cal u    Ol Ir
nyoSearD ddtFia g   'piydreCtt tFiyr   ccSeep   MI  y crePdi}  scSear  dearyn _ mrr  dgdryn _ mrr 'reqDI( smuFnqDI( u  Se' e'(n
a g  o ts _atn
Pr  d_r   in  It gnyi  KDI   u_Ftt g  x  Meny(Rt  d_ietyp   MIed}  scSe_ r     al Irigee y crePdi}   'reqDI( smuFnf"o'oa tgfaSI_}     e  => atFi  a Irimcy  'reqpMen aRdi} d_pMen     r     eePr  bFiyd Pieal Ir
"e    UaePr  d_ eF  KDI   u_Ftt g  x  Men  d} g  o ts }   Ctu/Iaadryn _ mrr 'reqDI( smuFthrue'(n
a g  o ts }    'rea Tp.y( A cal usatesePtal_atalle}    'reqpMen  d}    ' d}esc  Irigz ilePewearyn _ mrr 'reqDI( smuF d}esc  Irign(_Se'(n
an
"eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt g Sdryn _ mrr 'reqDI( smuFthrue'(n
asPietgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = Cn(_hiosmuy creCeqp bFiyd Pieal Ir
"e    UaePr  d_ eePr  d_r i    UaePr  d_ eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt  crI cr  MI  y creCtu/Ir r  bFiyd Pieal Ir
"e    UaePr  d_dryn _ mrr 'reqDI( smuFe'(n
a g  o ts _atn
Pr  d_r   in  It gnyi  KDI   u_Ftt g  x  Meny
n
at y crePdi}   'reqDI( smuFnf tt  crI cr  MI  y creCtu/Ir r  btt  crI cr  MI  y creCtu/Ir r  bFiyd  di}  scSear  crI cr  MI  y creCtu/Iaadryn _ mrr 'reqDI( smuFthrue'(n
a g  o ts }    'rea Tp.y( A cal usatesePtal_atalle}    'reqpMen  d}    ' d}esc  Irigz ilePewearyn _ mrr 'reqDI( smuF d}esc  Irign(_Se'(n
an
"ar   ccSeP _atn
"       r     eePr  d_r    ijd dryn _ mrr 'reqDI( smuFthrue'(n
asPietgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = Cn(_hiosmuy creCeqpIr
"e    UaePr  d_ eePr  d_r i    UaePr  d_ eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt  crI ieriooige  Sbaeijd _  'pice_ scSea d_}  scSear   ccSeadryn _ mrr 'reqDI( smuFe'(n
a getgfal  d}    'in    oryItemnatn dlt   _atn
"  Ir}escear     er L> ate'path'  sEr eeeu/IaayydPie
an
"CtayydPit d     eePr  d_r    ijdrsPietgfal  y creClueeu/Iin    oryItemn_Satalt   _atn
"  Irigeijin    oryItemn  nalt   _at=atalt   _a eeeu e_Mett g  (_in  Iriooi In    oryItemnan :,'reCn(_Satalt   Satalt   _atn
"r L> ate'path'g/Iaaye  y cr{oin    ory item ijd _pMein    oryItemnfatn
"  r  d_ieriooige  Sbhiosmu_ad 'reqpMenisMen  d}    ' d}ooige  Sbhiosmu_ad 'reqpMen  d}    ' d}ePr  d_Men ijdeqpPen ijd _  '   od}   docu   h' en  d}    ' d}ePr  d__ eIn    ory item  d} g  o ts }    'rea Tp.y( A cal usatesePtal_atalle}    'reqpMen  d}    ' d}esc  Irigz ilePeweIn    oryItem d}esc  Irign(_Se'(n
an
"atal Irigein  Ir Men ijdeqIr    eePr  d_r    ijdrsPietgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = CMen ijdeq_Ol Ir
ny ijdeqIrCn(_hiosmuy creCtt tFiyd Pieal Ir
"eE"e> cal u    Ol Ir
nyoSearD ddtFia g   'piydreCtt tFiyd Pieall u    Otgfa t   'piydmetg8'tn
"e> cal In    oryIteme'(n
a g  o ts _atn
"  Ir}esziaoige  Sbain    ory itemalt   _atn
atalt   _atn
at yin    oryItemnfige In    oryItemn
"  r  d_ieriooige  Sbhiosmu_ad 'reqpMenisMen  d}    ' d}ooige  Sbhiosmu_ad 'reqpMen  d}    ' d}ePr  d_Men ijdeqpPen ijd _  '   od}   docu   h' en  d}    ' d 'rea Tp.y( A cal usatesePtal_atalle}    'en  d} n
"igei d}  llc  od}  arD ddtFia g   in    ory itema 'piydme p E   en  d} llc  Irigod}  Mett g  KDIok vice
 "erviRIrigi  KDI   u_ain    ory itema "igei d}
"CtayydPie
an
"CtayydPie
an
"CtayydPie
an
"CtayydPie
an
"CtayydPie
an
"CtayydPie
ane
an
"Ct   h't atFiydPie
an
"Ctayy S    h'  p  S    h' => atFiydPie
an
"CtayydPie
an
"CtayydPie
an
"Ctaytt g  x il IrD ddtFia g   in    ory itema 'piydKDIok d}ooige  SbhitayydP d}
"Ctayy S    h'  p  S   > "    inPl  i ddtFia g   in    ory itema 'piydKDIoinayy 
"       r     eePr  d_r    ijd _pMen     r     euqpMen aRdi}  scSear     ep   MI  y tt g  x  Me  Men  d}    ' d}eBeta :,
 d  MenxRin  'rW0lj
),0tPd}    'rqpMen  d}    ' d}esc  Irigz ilePeweIn    oryItemnqDI( u  Se'   *r llefscear     eePr  d_ieIn    oryItemnl Irigein  Ir Men ijdeqIr Pr  d_r    ijdrsPietgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = CMen ijdeq_Ol Ir
ny ijdeq creCtt tFiyd Pieal Ir
"eE"e> cal u    Ol Ir
nyoSearD ddtFia g   'piydreCttr   ccSeep   MI  y crePdi}  scSear  dearyn _ mrr  dgIn    oryItemnqDI( u  Se' e'(n
a getgfal  d}    'y 
d  d  p natn dlt   _atn
"  Ir}escear     er L> ate'path'  sEr eeeu/IaayydPie
an
"CtayydPit d     eePr  d_r    ijdrsPietgfal  y creClueeu/Iy 
d  d  p n_Satalt   _atn
"  Irigeijy 
d  d  p n  nalt   _at=atalt   _a eeeu e_Mett g  (_in  Iriooi L 
d  d  p nan :,'reCn(_Satalt   Satalt   _atn
"r L> ate'path'g/IaayydPiecyhe_at=atalt  
atalt   y 
d  d
an
"C (y 
d  d  p nfatalt   _at r L> ate'path'g/IaayydPi:(_in  Iriooi creC_at=atalt   _at=an       u_ad U 'reqpsydPietiin
"  Irig  ep   MI  L 
d  d
an
" 
atalt    d} g  o ts }   }ePr  d__ eL 
d  d
an
"  d} g  o ts }    'rea Tp.y( A cal usatesePtal_atalle}    'ge  Sbaei  u_ad U 'reqpsydPietiin
"  Iri  ep   MI Ir    eePr  d_r    ijdrsPietgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = C  ep   MI _Ol Ir  ep   MI IrCn(_hiosmuy creCtt tFiyd Pieal Ir
"eE"e> cal u    Ol Ir
nyoSearD ddtFia g   'piydreCttlt   _atn
"  Iri r     eePr mr  d_ieriooige  y cr{o
atalt   y 
d  d
an
" ijd _pMey 
d  d  p nfatn
"  r  d_ieriooige  Sbhiosmu_ad 'reqpMenisMen  d}    ' d}ooige  Sbhiosmu_ad 'reqpMen  d}    ' d}ePr  d_  ep   MI  L 
d  d
an
" 
atalt    d} g  o ts }   }ePr  d__ eL 
d  d
an
"  d} g  o ts }    'rea Tp.y( A cal usatesePtal_atalle}    ''rqpMen  d}    ' d}esc  Irigz ilePeweL 
d  d  p     'ge  Sbaei  u_ad U 'ratal Irigein  Ir   ep   MI Ir    eePr  d_r    ijdrsPietgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = C  ep   MI _Ol Ir  ep   MI IrCn(_hiosmuy creCtt tFiyd Pieal Ir
"eE"e> cal u    Ol Ir
nyoSearD ddtFia g   'piydreCtt tFiyd Pieall u    Otgfa t   'piydmetg8'tn
"e> cal L 
d  d  p e'(n
a g  o ts _atn
y creClueeu/Iay 
d  d
an
" rigi  KDI   u_ad U e  => 
"Mey 
d  d  p nfear  dearyn _ m_r  age  Sbaei  u_ad U 'reqpsydPietiin
"  Irigeijd      Cn(_Seijd _  ' :th'tgf_atn
ata}ePr  d_  ep   MI  L 
d  d
an
" 
atalt    d} g  o ts }   a t   'L 
d  d  p thrue'(n
a g  o ts }    'rea Tp.y( A cal usatesePtal_atalle}    'reqpMen  d}    ' d}esc  Irigz ilePeweL 
d  d  p     'ge  Sbaei  u_ad U 'r 'rIau_ad Umrr  dgdr  ep   MI Ird}    ' d}esc  Irigz ilePeweL 
d  d  p thrue'(n
asPietgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = Cn(_hiosmuy creCeqp  ep   MI _Ol Ir  ep   MI IrCIr
"e    UaePr  d_ eePr  d_r i    UaePr  d_ eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt  crI n mtFi  Pietgfal  d}    'rIau_atn(_Satalt  ta u  'reqpL 
d  d  p e'(n
a g  o ts _atn
"  Ir}eszii}  scSetn
"y 
d  d
an
"s rigi  KDI   u_ad U e  => 
" _atn
ey 
d  d  p nfscSeL 
d  d  p nearyn _ m_r  age  Sbaei  u_ad U 'reqpsydPietiin
"  Irigeijd      Cn(_Seijd _  ' :th'tgf_atn
ata}ePr  d_  ep   MI  L 
d  d
an
" 
atalt    d} g  o ts }    'rea Tp.y( A cal usatesePtal_atalle}    'reqpMen  d}    ' d}esc  Irigz ilePeweL 
d  d  p nqDI( u  Se'   *r llefscear     eePr  d_ieL 
d  d  p nl Irigein  Ir   ep   MI Ir etgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = Cn(_hiosmuy creCeqp  ep   MI _Ol Ir  ep   MI r  d_r i    UaePr  d_ eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt  crI r   ccSeep   MI  y crePdi}  scSear  dearyn _ mrr  dgL 
d  d  p nqDI( u  Se' e'(n
a g  o ts _atn
Pr  d_r   in  It gny
atalt   y 
d  d
an
"C Rt  d_ietyp   MIed}  scSe_ r     al Irigee yy 
d  d  p nf"o'oa tgfaSI_}     e  => atFi  a Irimcy  'reqpMen aRdi} d_pMen     r     eePr  bFiyd Pieal Ir
"e    UaePr  d  ep   MI  L 
d  d
an
" 
atalt    d} g  o ts }   }ePr  d__ eL 
d  d
an
"  d} g  o ts }   a t   'L 
d  d  p thrue'(n
a g  o ts }    'rea Tp.y( A cal usatesePtal_atalle}    'reqpMen  d}    ' d}esc  Irigz ilePeweL 
d  d  p     'ge  Sbaei  u_ad U 'reePr  d_r   in  It   ep   MI Ir    ed}    ' d}esc  Irigz ilePeweL 
d  d  p thrue'(n
asPietgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = Cn(_hiosmuy creCeqp  ep   MI _Ol Ir  ep   MI IrC bFiyd Pieal Ir
"e    UaePr  d_ eePr  d_r i    UaePr  d_ eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt  crI cr  MI  y creCtu/Ir r  bFiyd Pieal Ir
"e    UaePr  d_L 
d  d  p e'(n
a g  o ts _atn
Pr  d_r   in  It gny
atalt   y 
d  d
an
"C yy 
d  d  p nf tt  crI cr  MI  y creCtu/Ir r  btt  crI cr  MI  y creCtu/Ir r  bFiyd  di}  scSear  crI cr  MI  y creUaePr  d  ep   MI  L 
d  d
an
" 
atalt    d} g  o ts }   a t   'L 
d  d  p thrue'(n
a g  o ts }    'rea Tp.y( A cal usatesePtal_atalle}    'reqpMen  d}    ' d}esc  Irigz ilePeweL 
d  d  p     'ge  Sbaei  u_ad U 'rar   ccSeP _atn
"  r  ep   MI Ird}    ' d}esc  Irigz ilePeweL 
d  d  p thrue'(n
asPietgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = Cn(_hiosmuy creCeqp  ep   MI _Ol Ir  ep   MI IrCIr
"e    UaePr  d_ eePr  d_r i    UaePr  d_ eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt  crI ieriooige  Sbaeijd _  'pice_ scSea d_}  scSear   ccSeaL 
d  d  p e'(n
a getgfal  d}    'ataronatn dlt   _atn
"  Ir}escear     er L> ate'path'  sEr eeeu/IaayydPie
an
"CtayydPit d     eePr  d_r    ijdrsPietgfal  y creClueeu/Iataron_Satalt   _atn
"  Irigeijataron  nalt   _at=atalt   _a eeeu e_Mett g  (_in  Iriooi Mtaronan :,'reCn(_Satalt   Satalt   _atn
"r L> ate'path'g/Iaay"  Ir}esziaoige  SbaataronC yataronCige MtaronrI cr  MI  y creCtu/Ir r  btt  crI cr  MI  y creCtu/Ir r  bFiyd  di}  scSear  crI cr  MI  y cre 'rea Tp.y( A cal usatesePtal_atalle}    'reqpMen  d}    ' d}esc  Irigz ilePeweMtaronqDI( u  Se'   *r llefscear     eePr  d_ieMtaroncSeP _atn
"  retgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = Cn(_hiosmuy creCr  d_r i    UaePr  d_ eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt  crI r   ccSeep   MI  y crePdi}  scSear  dearyn _ mrr  dgMtaronqDI( u  Se' e'(n
a getgfal  d}    'aob crCeepilleatn dlt   _atn
"  Ir}escear     er L> ate'path'  sEr eeeu/IaayydPie
an
"CtayydPit d     eePr  d_r    ijdrsPietgfal  y creClueeu/Iaob crCeepille_Satalt   _atn
"  Irigeijaob crCeepille  nalt   _at=atalt   _a eeeu e_Mett g  (_in  Iriooi Mob crCeepillean :,'reCn(_Satalt   Satalt   _atn
"r L> ate'path'g/Iaaye  y cr{oaob cr 
aepill ijd _pMeaob crCeepillefatn
"  r  d_ieriooige  Sbhiosmu_ad 'reqpMenisMen  d}    ' d}ooige  Sbhiosmu_ad 'reqpMen  d}    ' d}ePr  d__ eMob cr 
aepill  d} g  o ts }    'rea Tp.y( A cal usatesePtal_atalle}    'reqpMen  d}    ' d}esc  Irigz ilePeweMob crCeepill  *r llefscear     eePr  atal Irigein  Ir    eePr  d_r    ijdrsPietgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = Cn(_hiosmuy creCtt tFiyd Pieal Ir
"eE"e> cal u    Ol Ir
nyoSearD ddtFia g   'piydreCtt tFiyd Pieall u    Otgfa t   'piydmetg8'tn
"e> cal Mob crCeepille'(n
a g  o ts _atn
"  Ir}esziaoige  Sbaaob cr 
aepillspMeaob crCeepillefd_ieMob crCeepille
"  r  d_ieriooige  Sbhiosmu_ad 'reqpMenisMen  d}    ' d}ooige  Sbhiosmu_ad 'reqpMen  d}    ' d 'rea Tp.y( A cal usatesePtal_atalle}    'reqpMen  d}    ' d}esc  Irigz ilePeweMob crCeepillnqDI( u  Se'   *r llefscear     eePr  d_ieMob crCeepillncSeP _atn
"  retgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = Cn(_hiosmuy creCr  d_r i    UaePr  d_ eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt  crI r   ccSeep   MI  y crePdi}  scSear  dearyn _ mrr  dgMob crCeepillnqDI( u  Se' e'(n
a getgfal  d}    'ope( sm
" ystemVllniuFnatn dlt   _atn
"  Ir}escear     er L> ate'path'  sEr eeeu/IaayydPie
an
"CtayydPit d     eePr  d_r    ijdrsPietgfal  y creClueeu/Iope( sm
" ystemVllniuFn_Satalt   _atn
"  Irigeijope( sm
" ystemVllniuFn  nalt   _at=atalt   _a eeeu e_Mett g  (_in  Iriooi Ope( sm
" ystemVllniuFnan :,'reCn(_Satalt   Satalt   _atn
"r L> ate'path'g/Iaaye  y cr{oope( sm
" system vllniuF ijd _pMeope( sm
" ystemVllniuFnfatn
"  r  d_ieriooige  Sbhiosmu_ad 'reqpMenisMen  d}    ' d}ooige  Sbhiosmu_ad 'reqpMen  d}    ' d}ePr  d__ eOpe( sm
" system vllniuF  d} g  o ts }    'rea Tp.y( A cal usatesePtal_atalle}    'reqpMen  d}    ' d}esc  Irigz ilePeweOpe( sm
" ystemVllniuF  *r llefscear     eePr  atal Irigein  Ir    eePr  d_r    ijdrsPietgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = Cn(_hiosmuy creCtt tFiyd Pieal Ir
"eE"e> cal u    Ol Ir
nyoSearD ddtFia g   'piydreCtt tFiyd Pieall u    Otgfa t   'piydmetg8'tn
"e> cal Ope( sm
" ystemVllniuFe'(n
a g  o ts _atn
"  Ir}esziaoige  Sbaope( sm
" system vllniuFe}    'reope( sm
" ystemVllniuFnfige Ope( sm
" ystemVllniuFn
"  r  d_ieriooige  Sbhiosmu_ad 'reqpMenisMen  d}    ' d}ooige  Sbhiosmu_ad 'reqpMen  d}    ' d 'rea Tp.y( A cal usatesePtal_atalle}    'reqpMen  d}    ' d}esc  Irigz ilePeweOpe( sm
" ystemVllniuFnqDI( u  Se'   *r llefscear     eePr  d_ieOpe( sm
" ystemVllniuFncSeP _atn
"  retgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = Cn(_hiosmuy creCr  d_r i    UaePr  d_ eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt  crI r   ccSeep   MI  y crePdi}  scSear  dearyn _ mrr  dgOpe( sm
" ystemVllniuFnqDI( u  Se' e'(n
a getgfal  d}    'ope( sm
" ystemnatn dlt   _atn
"  Ir}escear     er L> ate'path'  sEr eeeu/IaayydPie
an
"CtayydPit d     eePr  d_r    ijdrsPietgfal  y creClueeu/Iope( sm
" ystemn_Satalt   _atn
"  Irigeijope( sm
" ystemn  nalt   _at=atalt   _a eeeu e_Mett g  (_in  Iriooi Ope( sm
" ystemnan :,'reCn(_Satalt   Satalt   _atn
"r L> ate'path'g/Iaaye  y cr{oope( sm
" system ijdDARTd _pMeope( sm
" ystemnfatn
"  r  d_ieriooige  Sbhiosmu_ad 'reqpMenisMen  d}    ' d}ooige  Sbhiosmu_ad 'reqpMen  d}    ' d}ePr  d_da scSeOpe( sm
" system DARTd _pen  d}    ' d 'rea Tp.y( A cal usatesePtal_atalle}    'reqpMen  d}    ' d}esc  Irigz ilePeweOpe( sm
" ystem  *r llefscear     eePr  atal Irigein  Ir da scS  retgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = Cn(_hiosmuy creC= Cda scSn(_hioda scSr  d_r i    UaePr  d_ eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt  crI  tFiyd Pieall u    Otgfa t   'piydmetg8'tn
"e> cal Ope( sm
" ysteme'(n
a g  o ts _atn
"  Ir}esziaoige  Sbaope( sm
" systeme}    'reope( sm
" ystemnfige Ope( sm
" ystemn
"  r  d_ieriooige  Sbhiosmu_ad 'reqpMenisMen  d}    ' d}ooige  Sbhiosmu_ad 'reqpMen  d}    ' d 'rea Tp.y( A cal usatesePtal_atalle}    'reqpMen  d}    ' d}esc  Irigz ilePeweOpe( sm
" ystemnqDI( u  Se'   *r llefscear     eePr  d_ieOpe( sm
" ystemncSeP _atn
"  retgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = Cn(_hiosmuy creCr  d_r i    UaePr  d_ eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt  crI r   ccSeep   MI  y crePdi}  scSear  dearyn _ mrr  dgOpe( sm
" ystemnqDI( u  Se' e'(n
a getgfal  d}    'od}  Docu   h'atn dlt   _atn
"  Ir}escear     er L> ate'path'  sEr eeeu/IaayydPie
an
"CtayydPit d     eePr  d_r    ijdrsPietgfal  y creClueeu/Iod}  Docu   h'_Satalt   _atn
"  Irigeijod}  Docu   h'  nalt   _at=atalt   _a eeeu e_Mett g  (_in  Iriooi Od}  Docu   h'an :,'reCn(_Satalt   Satalt   _atn
"r L> ate'path'g/Iaaye  y cr{ood}   docu   h ijd _pMeod}  Docu   h'fatn
"  r  d_ieriooige  Sbhiosmu_ad 'reqpMenisMen  d}    ' d}ooige  Sbhiosmu_ad 'reqpMen  d}    ' d}ePr  d_pen ijdeqpPen ijd _  '   od}   docu   h' en  d}    ' d}ePr  d__ eOd}   docu   h  _pen  d}    ' d 'rea Tp.y( A cal usatesePtal_atalle}    'reqpMen  d}    ' d}esc  Irigz ilePeweOd}  Docu   h  *r llefscear     eePr  atal Irigein  Ir Men ijdeqIr    eePr  d_r    ijdrsPietgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = CMen ijdeq_Ol Ir
ny ijdeqIrCn(_hiosmuy creCtt tFiyd Pieal Ir
"eE"e> cal u    Ol Ir
nyoSearD ddtFia g   'piydreCtt tFiyd Pieall u    Otgfa t   'piydmetg8rigz ilePeweOd}  Docu   he'(n
a g  o ts _atn
"  Ir}esziaoige  Sbaod}   docu   h'lt   _atn
atalt   _atn
at yod}  Docu   h'fd_ieOd}  Docu   h'
"  r  d_ieriooige  Sbhiosmu_ad 'reqpMenisMen  d}    ' d}ooige  Sbhiosmu_ad 'reqpMen  d}    ' d}ePr  d_pen ijdeqpPen ijd _  '   od}   docu   h' en  d}    ' d 'rea Tp.y( A cal usatesePtal_atalle}    'en  d} o
"igei d}  llc  od}  arD ddtFia g   od}   docu   h' '    llc  Irigod}  Mett g  KDIok vice
 "erviR ' :    ' Fcal usatesePtal_atalle} d}   docu   h' p  KDI tt g   u_ad qpsydPAFtt g   KDIok vice
 "erviR>eqmcy  ' d}  docu   hea}ePr  d_ieriooigPewn
and}   docu   h' d} e_ietgfaeecB ( d}  docu   hetg8' d}escear      d}  docu   he U 'reqMett g  KDIok vic d}  docu   he d}    ' d}eBeta :ar    ieecyhe_at=at _at=atalt   _at=a 'ptmrr pTp.y( A 'ptCn(_   Irign(_Se'(n
aayydPar    i ' FcU 're Cn(_Seijd _  'pice_ietgeP _ic d}  docu   h   eePr  d_r  d}  ar    docu   h' d} e_ietg(n
an d}  docu   h   ' d}  docu   heietiinecyhe_at$tayy e d d}  docu   h ett g  KDIok vice
 "erviRIrigi  KDI   u_and}   docu   h' d} e_ d}
"CtayydPie
an
"CtayydPie
an
"CtayydPie
an
"CtayydPie
an
"CtayydPie
an
"CtayydPie
ane
an
"Ct   h't atFiydPie
an
"Ctayy S    h'  p  S    h' => atFiydPie
an
"CtayydPie
an
"CtayydPie
an
"Ctaytt g  x il IrD ddtFia g   nd}   docu   h' 'piydKDIok d}ooige  SbhitayydP d}
"Ctayy S    h'  p  S   > tt g  x oMe  Men  d}    ' d}eBeta :,
 d  MenxRin  'rW0lj
),0tPd}    'r p  S   > tt g  x oMed _pMen     r     euqpMen aRdi}  scSear     ep   MI  y "    appenverD ddtFia g   nd}   docu   h' 'piydhave be   appenverr     br pTplead}eB8' ueni}    'reqpMen  d}    ' d}esc  Irigz ilePeweOd}  Docu   hnqDI( u  Se'   *r llefscear     eePr  d_ieOd}  Docu   hnl Irigein  Ir Men ijdeqIr Pr  d_r    ijdrsPietgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = CMen ijdeq_Ol Ir
ny ijdeq creCtt tFiyd Pieal Ir
"eE"e> cal u    Ol Ir
nyoSearD ddtFia g   'piydreCttr   ccSeep   MI  y crePdi}  scSear  dearyn _ mrr  dgOd}  Docu   hnqDI( u  Se' e'(n
a getgfal  d}    'od}  'atn dlt   _atn
"  Ir}escear     er L> ate'path'  sEr eeeu/IaayydPie
an
"CtayydPit d     eePr  d_r    ijdrsPietgfal  y creClueeu/Iod}  '_Satalt   _atn
"  Irigeijod}  '  nalt   _at=atalt   _a eeeu e_Mett g  (_in  Iriooi Od}  'an :,'reCn(_Satalt   Satalt   _atn
"r L> ate'path'g/Iaaye  y cr{ood}   ijd _pMeod}  'fatn
"  r  d_ieriooige  Sbhiosmu_ad 'reqpMenisMen  d}    ' d}ooige  Sbhiosmu_ad 'reqpMen  d}    ' d}ePr  d_pen ijdeqpPen ijd _  '   od}  ' en  d}    ' d}ePr  d__ eOd}    _pen  d}    ' d 'rea Tp.y( A cal usatesePtal_atalle}    'reqpMen  d}    ' d}esc  Irigz ilePeweOd}    *r llefscear     eePr  atal Irigein  Ir Men ijdeqIr    eePr  d_r    ijdrsPietgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = CMen ijdeq_Ol Ir
ny ijdeqIrCn(_hiosmuy creCtt tFiyd Pieal Ir
"eE"e> cal u    Ol Ir
nyoSearD ddtFia g   'piydreCtt tFiyd Pieall u    Otgfa t   'piydmetg8rigz ilePeweOd}  e'(n
a g  o ts _atn
"  Ir}esziaoige  Sbaod}  'lt   _atn
atalt   _aMeod}  'fd_ieOd}  '
"  r  d_ieriooige  Sbhiosmu_ad 'reqpMenisMen  d}    ' d}ooige  Sbhiosmu_ad 'reqpMen  d}    ' d}ePr  d_pen ijdeqpPen ijd _  '   od}  ' en  d}    ' d 'rea Tp.y( A cal usatesePtal_atalle}    'en  d} o
"igei d}  llc   ' :    ' Fcal usatesePtal_atalle} d}  eqp  KDI   u_ad U 'reqpsydPAFtt g   KDIok vice
 "erviR>eqmcy  ' d}   'reqcu(dpCtt ep  } d}  eqSbhitayydPietgfaeecB ( d}  e'(nusatesePta d}  e U 'reqMett g  KDIok vic d}  e d}   tayydP' d}eBeta :,ieecyhe_at=at _at=atalt   _at=a 'ptmrr pTp.y( A 'ptCn(_   IrigntayydPoSe'(n
aayydPitlnsd U 're Cn(_Seijd _  'pice_ietgeP _ic d}     eePr  d_rtayydPod}  eqSbhi_ietg(n
an d}  ePta d}  eqMett g  KDIok vic d}   ett g  KDIok vice
 "erviRIrigi  KDI   u_and}  ' d} e_ d}
"CtayydPie
an
"CtayydPie
an
"CtayydPie
an
"CtayydPie
an
"CtayydPie
an
"CtayydPie
ane
an
"Ct   h't atFiydPie
an
"Ctayy S    h'  p  S    h' => atFiydPie
an
"CtayydPie
an
"CtayydPie
an
"Ctaytt g  x il IrD ddtFia g   nd}  ' 'piydKDIok d}ooige  Sbhi_ d}
"tayydP il CtayydPie
an
"CtayydPitt g  x oMe  Men  d}    ' d}eBeta :,
 d  MenxRin  'rW0lj
),0tPd}    'r p  S   > tt g  x oMed _pMen     r     euqpMen aRdi}  scSear     eqpMen  d}    ' d}esc  Irigz ilePeweOd}  nqDI( u  Se'   *r llefscear     eePr  d_ieOd}  nl Irigein  Ir Men ijdeqIr Pr  d_r    ijdrsPietgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = CMen ijdeq_Ol Ir
ny ijdeq creCtt tFiyd Pieal Ir
"eE"e> cal u    Ol Ir
nyoSearD ddtFia g   'piydreCttr   ccSeep   MI  y crePdi}  scSear  dearyn _ mrr  dgOd}  nqDI( u  Se' e'(n
a getgfal  d}    'place   h(dearnatn dlt   _atn
"  Ir}escear     er L> ate'path'  sEr eeeu/IaayydPie
an
"CtayydPit d     eePr  d_r    ijdrsPietgfal  y creClueeu/Iplace   h(dearn_Satalt   _atn
"  Irigeijplace   h(dearn  nalt   _at=atalt   _a eeeu e_Mett g  (_in  Iriooi Place   h(dearnan :,'reCn(_Satalt   Satalt   _atn
"r L> ate'path'g/Iaaye  y cr{oplace   hepsydecijd _pMeplace   h(dearnfatn
"  r  d_ieriooige  Sbhiosmu_ad 'reqpMenisMen  d}    ' d}ooige  Sbhiosmu_ad 'reqpMen  d}    ' d}ePr  d__ ePlace   hepsydec _pen  d}    ' d 'rea Tp.y( A cal usatesePtal_atalle}    'reqpMen  d}    ' d}esc  Irigz ilePewePlace   h(dear  *r llefscear     eePr  atal Irigein  Ir    eePr  d_r    ijdrsPietgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = Cn(_hiosmuy creCtt tFiyd Pieal Ir
"eE"e> cal u    Ol Ir
nyoSearD ddtFia g   'piydreCtt tFiyd Pieall u    Otgfa t   'piydmetg8'tn
"e> cal Place   h(deare'(n
a g  o ts _atn
y creClueeu/Iaplace   hepsydepMeplace   h(dearnfear  dearyn _ m_r  age  Sbaei  u_ad U 'reqpsydPietiin
"  Irigeijd      Cn(_Seijd _  ' :th'tgf_atn
ataa t   'Place   h(dear hrue'(n
a g  o ts }    'rea Tp.y( A cal usatesePtal_atalle}    'reqpMen  d}    ' d}esc  Irigz ilePewePlace   h(dear  *r llefscear     eePr   'rIau_ad Umrr  dgdn natn dlt   _atn
"  Ir}esziPlace   h(dear hrue'(n
a eePr  d_r    ijdrsPietgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = CIr
"e    UaePr  d_ eePr  d_r i    UaePr  d_ eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt  crI n mtFi  Pietgfal  d}    'rIau_atn(_Satalt  ta u  'reqpPlace   h(deare'(n
a g  o ts _atn
"  Ir}esziaoige  Sbaplace   hepsyde'lt   _atn
atalt   _atn
at yplace   h(dearnfige Place   h(dearnearyn _ m_r  age  Sbaei  u_ad U 'reqpsydPietiin
"  Irigeijd      Cn(_Seijd _  ' :th'tgf_atn
ata 'rea Tp.y( A cal usatesePtal_atalle}    'h'tgf_aane
an
"Ct   h't alace   h  '   gyIrigi  KDI   u_aplace   hepsyde' 'piydKDIh'tgf_k d}ooige  Sbhi_ d}
"aplace   hes '   giy S    h'  p  S   > "    Ptal_verD ddtFia g   Ptal_verDplace   hs. Don'heset_Seij    h'musa_qpMenddtFiabohi_Ptal_verDn(_ _at$Ptal_verDplace   hs.h'tgf_aane
an
"Ct   h't  ' :    ' Fcal usatesePtal_atalle}place   hepsyde' p  KDI tt g   u_ad qpsydPAFtt g   KDIok vice
 "erviR>eqmcy  'place   h 'reqcu(dpCtt ep  tt g  place   hepsyde' d} e_ietgfaeecB (place   hepsydec'(nusatesePtaplace   htt g  psydecMea qMett g  KDIok vicplace   hs  d}    ' d}eBeta :,ieecyhe_at=at _attt g  atalt   _at=a 'ptmrr pTp.y( A 'ptCn(_   IrignPoSe'(n
aayydPitlnsd U 'rett g  Cn(_Seijd _  'pice_ietgeP _icplace   hpsyde   eePr  d_r place   hepsyde' d} ett g  ietg(n
anplace   hpsyde ,icplace   hpsyde qMett g  KDIok vicplace   hpsyde .h'tgf_aane
an
"Ct   h't conSattC   goryIrigi  KDI   u_aplace   hepsyde' 'piydKDIh'tgf_k d}ooige  Sbhi_ d}
"aconSatt c   goriy S    h'  p  S   >    h't dirKDIorySil Irigi  KDI   u_aplace   hepsyde' 'piydKDIh'tgf_k d}ooige  Sbhi_ d}
"adirKDIoryCtayy S    h'  p  S   > tt g  x oMed _pMen     r     euqpMen aRdi}  scSear     e p  S   > tt g  xl Ir
nyoSearigi  KDI   u_aplace   hepsyde' 'piydme p E   en  d} d}
"al Ir
nyoSe S    h'  p  S   > tt g  xIrigi  KDI   u_aplace   hepsyde' d} e_ d}
"CtayydPie
an
"CtayydPie
an
"CtayydPie
an
"CtayydPie
an
"CtayydPie
an
"CtayydPie
ane
an
"Ct   h't atFiydPie
an
"Ctayy S    h'  p  S    h' => atFiydPie
an
"CtayydPie
an
"CtayydPie
an
"Ctaytt g  x oMe  Men  d}    ' d}eBeta :,
 d  MenxRin  'rW0lj
),0tPd}    'r p  S   > tt g  xplace   h(dearTyp_ dPietiinecyhplace   hepsyde' pe p Eg  tt g  atn(_Seijdpsyde scSes A
anckate'pad _ Iok edpsyde Sbaplace   h' 'piydKjd _aan
"Cta _ In_atFiy'pt  xpoe
ang  yhepsyde Sbatagss A
roadblock'pad _psyde Sbtt g  place   h' 'piydnoia g   Pjd _aaa _ In_atFiy'pt  xpoe
anbutat=at _ssume' 'piyn
"Cta ePr atFtagsoinait  eePrb"eoSeverDnTp.y( Aetg(times A
roadblock'r Mn  Iy cr{tt g   fait _aasignerDplace   hsPie
b"emarkerDnsFiy'maryng  ya u  'reqd}    'r p  S   > tt g  xpy'pt  Typ_igi  KDI   u_aplace   hepsyde' d} e_ d}
"tt g  py'pt  xscSe S    h'  p  S   > tt g  x il Irigi  KDI   u_aplace   hepsyde' 'piydKDI_k d}ooige tt g  atn(_Se}
"Ctayy S    h'  p  S   > tt g  x  ep   MI igi  KDI   u_aplace   hepsyde' 'piydme p E   en  d} d}
"a  ep   Me}    'reqpMen  d}    ' d}esc  Irigz ilePewePlace   h(dearnqDI( u  Se'   *r llefscear     eePr  d_iePlace   h(dearncSeP _atn
"  retgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = Cn(_hiosmuy creCr  d_r i    UaePr  d_ eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt  crI r   ccSeep   MI  y crePdi}  scSear  dearyn _ mrr  dgPlace   h(dearnqDI( u  Se' e'(n
a g  o ts _atn
Pr  d_r   in  It gnyplace   hepsydeC Rt  d_ietyp   MIed}  scSe_  al Irigee _atn
yplace   h(dearnf"o'oa tgfaSI_}     e  => atFi  a Irimcy  'reqpMen aRdi} d_pMen     r     eePr  bFiyd Pieal Ir
"e    UaePr  d_ ePlace   hepsydec _pen  d}    ' da t   'Place   h(dear hrue'(n
a g  o ts }    'rea Tp.y( A cal usatesePtal_atalle}    'reqpMen  d}    ' d}esc  Irigz ilePewePlace   h(dear  *r llefscear     eePr  eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt g SPlace   h(dear hrue'(n
a  retgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = Cn(_hiosmuy creCIrC bFiyd Pieal Ir
"e    UaePr  d_ eePr  d_r i    UaePr  d_ eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt  crI cr  MI  y creCtu/Ir r  bFiyd Pieal Ir
"e    UaePr  d_Place   h(deare'(n
a g  o ts _atn
Pr  d_r   in  It gnyplace   hepsydeC yplace   h(dearnf tt  crI cr  MI  y creCtu/Ir r  btt  crI cr  MI  y creCtu/Ir r  bFiyd  di}  scSear  crI cr  MI  y crea t   'Place   h(dear hrue'(n
a g  o ts }    'rea Tp.y( A cal usatesePtal_atalle}    'reqpMen  d}    ' d}esc  Irigz ilePewePlace   h(dear  *r llefscear     eePr  ar   ccSeP _atn
"       r     eePr  d_r    ijd Place   h(dear hrue'(n
a  retgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = Cn(_hiosmuy creCIrCIr
"e    UaePr  d_ eePr  d_r i    UaePr  d_ eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt  crI ieriooige  Sbaeijd _  'pice_ scSea d_}  scSear   ccSeaPlace   h(deare'(n
a getgfal  d}    'place   hS '   giy atn dlt   _atn
"  Ir}escear     er L> ate'path'  sEr eeeu/IaayydPie
an
"CtayydPit d     eePr  d_r    ijdrsPietgfal  y creClueeu/Iplace   hS '   giy _Satalt   _atn
"  Irigeijplace   hS '   giy   nalt   _at=atalt   _a eeeu e_Mett g  (_in  Iriooi Place   hS '   giy an :,'reCn(_Satalt   Satalt   _atn
"r L> ate'path'g/IaayydPiecyhe_at=atalt  place   hes '   gyC yplace   hS '   giy fatalt   _at r L> ate'path'g/IaayydPi:(_in  Iriooi creC_at=atalt   _at=an       u_ad U 'reqpsydPietiin
"  Irig_ ePlace   hes '   gyc _pen  d}    ' d 'rea Tp.y( A cal usatesePtal_atalle}    'ge  Sbaei  u_ad U 'reqpsydPietiin
"  Iri   eePr  d_r    ijdrsPietgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = Cn(_hiosmuy creCtt tFiyd Pieal Ir
"eE"e> cal u    Ol Ir
nyoSearD ddtFia g   'piydreCttlt   _atn
"  Iri r     eePr mr  d_ieriooige  y cr{oplace   hes '   gycijd _pMeplace   hS '   giy fatn
"  r  d_ieriooige  Sbhiosmu_ad 'reqpMenisMen  d}    ' d}ooige  Sbhiosmu_ad 'reqpMen  d}    ' d}ePr  d__ ePlace   hes '   gyc _pen  d}    ' d 'rea Tp.y( A cal usatesePtal_atalle}    'reqpMen  d}    ' d}esc  Irigz ilePewePlace   hS '   gy    'ge  Sbaei  u_ad U 'ratal Irigein  Ir    eePr  d_r    ijdrsPietgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = Cn(_hiosmuy creCtt tFiyd Pieal Ir
"eE"e> cal u    Ol Ir
nyoSearD ddtFia g   'piydreCtt tFiyd Pieall u    Otgfa t   'piydmetg8'tn
"e> cal Place   hS '   gye'(n
a g  o ts _atn
y creClueeu/Iaplace   hes '   gyC yplace   hS '   giy fear  dearyn _ m_r  age  Sbaei  u_ad U 'reqpsydPietiin
"  Irigeijd      Cn(_Seijd _  ' :th'tgf_atn
ataa t   'Place   hS '   gy hrue'(n
a g  o ts }    'rea Tp.y( A cal usatesePtal_atalle}    'reqpMen  d}    ' d}esc  Irigz ilePewePlace   hS '   gy    'ge  Sbaei  u_ad U 'r 'rIau_ad Umrr  dgdn natn dlt   _atn
"  Ir}esziPlace   hS '   gy hrue'(n
a eePr  d_r    ijdrsPietgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = CIr
"e    UaePr  d_ eePr  d_r i    UaePr  d_ eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt  crI n mtFi  Pietgfal  d}    'rIau_atn(_Satalt  ta u  'reqpPlace   hS '   gye'(n
a g  o ts _atn
"  Ir}esziaoige  Sbaplace   hes '   giy lt   _atn
atalt   _atn
at yplace   hS '   giy fd_iePlace   hS '   giy earyn _ m_r  age  Sbaei  u_ad U 'reqpsydPietiin
"  Irigeijd      Cn(_Seijd _  ' :th'tgf_atn
ata 'rea Tp.y( A cal usatesePtal_atalle}    'h'tgf_a p  S   > tt g  x ' :    ' Fcal usatesePtal_atalle}   ijd _p  KDI   u_ad U 'reqpsydPAFtt g   KDIok vice
 "erviR>eqmcy  'place   hs '   gy 'reqcu(dpCtt ep  tt g     ijd _d} e_ietgfaeecB (place   hs '   gyc'(nusatesePtaplace   hs '   gy    'e U 'reqMett g  KDIok vicplace   hs '   gyc d}    ' d}eBeta :,ieecyhe_at=at    'e_at=atalt   _at=a 'ptmrr pTp.y( A 'ptCn(_   IrignPoSe'(n
aayydPitlnsd U 'rett g  Cn(_Seijd _  'pice_ietgeP _icplace   hs '   gy   eePr  d_r    ijd _d} e_ietgtt g  n
anplace   hs '   gy Ptaplace   hs '   gyeietiinecyhe_at$tayy e dplace   hs '   gy CtayydPie
an
"Ctaytt g  x oMed _pMen     r     euqpMen aRdi}  scSear     e p  S   > tt g  xIrigi  KDI   u_aplace   hes '   giy  d} e_ d}
"CtayydPie
an
"CtayydPie
an
"CtayydPie
an
"CtayydPie
an
"CtayydPie
an
"CtayydPie
ane
an
"Ct   h't atFiydPie
an
"Ctayy S    h'  p  S    h' => atFiydPie
an
"CtayydPie
an
"CtayydPie
an
"Ctaytt g  x oMe  Men  d}    ' d}eBeta :,
 d  MenxRin  'rW0lj
),0tPd}    'rqpMen  d}    ' d}esc  Irigz ilePewePlace   hS '   giy qDI( u  Se'   *r llefscear     eePr  d_iePlace   hS '   giy cSeP _atn
"  retgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = Cn(_hiosmuy creCr  d_r i    UaePr  d_ eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt  crI r   ccSeep   MI  y crePdi}  scSear  dearyn _ mrr  dgPlace   hS '   giy qDI( u  Se' e'(n
a g  o ts _atn
Pr  d_r   in  It gnyplace   hes '   gyC Rt  d_ietyp   MIed}  scSe_  al Irigee _atn
yplace   hS '   giy f"o'oa tgfaSI_}     e  => atFi  a Irimcy  'reqpMen aRdi} d_pMen     r     eePr  bFiyd Pieal Ir
"e    UaePr  d_ ePlace   hes '   gye _pen  d}    ' da t   'Place   hS '   gy hrue'(n
ah'tgf_atn
ata 'rea Tp.y( A cal usatesePtal_atalle}    ''rqpMen  d}    ' d}esc  Irigz ilePewePlace   hS '   gy    'ge  Sbaei  u_ad U 'reePr  d_r   in  It gnyoSearD di} r  d_r  l u tt g SPlace   hS '   gy hrue'(n
a  retgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = Cn(_hiosmuy creCIrC bFiyd Pieal Ir
"e    UaePr  d_ eePr  d_r i    UaePr  d_ eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt  crI cr  MI  y creCtu/Ir r  bFiyd Pieal Ir
"e    UaePr  d_Place   hS '   gye'(n
a g  o ts _atn
Pr  d_r   in  It gnyplace   hes '   gyC yplace   hS '   giy f tt  crI cr  MI  y creCtu/Ir r  btt  crI cr  MI  y creCtu/Ir r  bFiyd  di}  scSear  crI cr  MI  y crea t   'Place   hS '   gy hrue'(n
ah'tgf_atn
ata 'rea Tp.y( A cal usatesePtal_atalle}    ''rqpMen  d}    ' d}esc  Irigz ilePewePlace   hS '   gy    'ge  Sbaei  u_ad U 'rar   ccSeP _atn
"       r     eePr  d_r    ijd Place   hS '   gy hrue'(n
a  retgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = Cn(_hiosmuy creCIrCIr
"e    UaePr  d_ eePr  d_r i    UaePr  d_ eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt  crI ieriooige  Sbaeijd _  'pice_ scSea d_}  scSear   ccSeaPlace   hS '   gye'(n
a getgfal  d}    'place   h atn dlt   _atn
"  Ir}escear     er L> ate'path'  sEr eeeu/IaayydPie
an
"CtayydPit d     eePr  d_r    ijdrsPietgfal  y creClueeu/Iplace   h _Satalt   _atn
"  Irigeijplace   h   nalt   _at=atalt   _a eeeu e_Mett g  (_in  Iriooi Place   h an :,'reCn(_Satalt   Satalt   _atn
"r L> ate'path'g/IaayGene( se' 'agsog  yheplace   hC yplace   h fatne( se'agsrI cr  MI  y creCtu/Ir r  btt  crI cr  MI  y creCtu/Ir r  bFiyd  di}  scSear  crI cr  MI  y cre 'rea Tp.y( A cal usatesePtal_atalle}    'cr  MI e
an
"Ctaytt g  x'ag're  ds Tatalle  ds ie
atne( se rigi  K
"aplace   h S    h'  p  S   > tt g  xplace   hI igGene( se 'agsog  y  K
"aplace   h S    h'  p  S   > tt g  x  ep   MI  Gene( se place   h _pe p Eg   ie
 scSe e  => 
" _atn
Rt  dpad _r Mn  Irimusa_}    ''rqpMen  d}    ' d}esc  Irigz ilePewePlace   hsGene( seTats u  Se'   *r llefscear     eePr  atne( se'agscSeP _atn
"  retgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = Cn(_hiosmuy creCr  d_r i    UaePr  d_ eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt  crI atne( se'agsige  Sbaeijd _  'pice_ scSea d_}  scSear   ccSeaPlace   hsGene( seTats u  Se' e'(n
a g  o ts _atn
e  y cr{oplace   heijd _pMeplace   h fatn
"  r  d_ieriooige  Sbhiosmu_ad 'reqpMenisMen  d}    ' d}ooige  Sbhiosmu_ad 'reqpMen  d}    ' d}ePr  d__ ePlace   he _pen  d}    ' d 'rea Tp.y( A cal usatesePtal_atalle}    'reqpMen  d}    ' d}esc  Irigz ilePewePlace   h  *r llefscear     eePr  atal Irigein  Ir    eePr  d_r    ijdrsPietgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = Cn(_hiosmuy creCtt tFiyd Pieal Ir
"eE"e> cal u    Ol Ir
nyoSearD ddtFia g   'piydreCtt tFiyd Pieall u    Otgfa t   'piydmetg8'tn
"e> cal Place   he'(n
a g  o ts _atn
y creClueeu/Iaplace   hpMeplace   h fear  dearyn _ m_r  age  Sbaei  u_ad U 'reqpsydPietiin
"  Irigeijd      Cn(_Seijd _  ' :th'tgf_atn
ataa t   'Place   h hrue'(n
ah'tgf_atn
ata 'rea Tp.y( A cal usatesePtal_atalle}    ''rqpMen  d}    ' d}esc  Irigz ilePewePlace   h  *r llefscear     eePr   'rIau_ad Umrr  dgdn natn dlt   _atn
"  Ir}esziPlace   h hrue'(n
a  retgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = Cn(_hiosmuy creCIrCIr
"e    UaePr  d_ eePr  d_r i    UaePr  d_ eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt  crI n mtFi  Pietgfal  d}    'rIau_atn(_Satalt  ta u  'reqpPlace   he'(n
a g  o ts _atn
"  Ir}esziaoige  Sbaplace   h lt   _atn
atalt   _atn
at yplace   h fd_iePlace   hsrI cr  MI  y creCtu/Ir r  btt  crI cr  MI  y creCtu/Ir r  bFiyd  di}  scSear  crI cr  MI  y cre 'rea Tp.y( A cal usatesePtal_atalle}    'cr  MI e
an
"Ctaytt g  xplace   hS '   gyIrigi  KDI   u_aplace   h' 'piydKDIh'tgf_k d}ooige  Sbhi_ d}
"aplace   hes '   giy CtayydPie
an
"Ctaytt g  x oMe  Men  d}    ' d}eBeta :,
 d  MenxRin  'rW0lj
),0tPd}    're
an
"Ctay"    Ptal_verD ddtFia g   Ptal_verDplace   hs. Don'heset_Seij    h'musa_qpMenddtFiabohi_Ptal_verDn(_ _at$Ptal_verDplace   hs.h'tgf_aane
an
"Ct   h't  ' :    ' Fcal usatesePtal_atalle}place   h _p  KDI   u_ad U 'reqpsydPAFtt g   KDIok vice
 "erviR>eqmcy  'place   h 'reqcu(dpCtt ep  tt g  place   h' d} e_ietgfaeecB (place   he'(nusatesePtaplace   hcMea qMett g  tt g  DIok vicplace   hs  d}    ' d}eBeta :,ieecyhe_at=at _at=atalt   _at=a 'ptmrrh'tgf_kTp.y( A 'ptCn(_   IrignPoSe'(n
aayydPitlnsd U 're Cn(_Seijd _  'pice_ietgeh'tgf_ _icplace   h   eePr  d_r place   heqSbhi_ietg(n
anplace   h Ptaplace   htt g  qMett g  KDIok vicplace   h .h'tgf_aane
an
"Ct   h't conSattC   goryIrigi  KDI   u_aplace   h' 'piydKDIh'tgf_k d}ooige  Sbhi_ d}
"aconSatt c   goriy S    h'  p  S   >    h't dirKDIorySil Irigi  KDI   u_aplace   h' 'piydKDI_k d}ooige tt g  atn(_Se}
"CdirKDIoryCtayy S    h'  p  S   > tt g  x oMed _pMen     r     euqpMen aRdi}  scSear     e p  S   > tt g  xl Ir
nyoSearigi  KDI   u_aplace   h' 'piydme p E     d}
"tt g  l Ir
nyoSe S    h'  p  S   > tt g  xpay   hS,'reCni  KDI   u_aplace   h'  di}  scSepay   htt g  D,'reCS    h'  p  S   > tt g  xIrigi  KDI   u_aplace   h  d} e_ d}
"CtayydPie
an
"CtayydPie
an
"CtayydPie
an
"CtayydPie
an
"CtayydPie
an
"CtayydPie
ane
an
"Ct   h't siz Irigi  KDI   u_aplace   h' 'piydKDI_k d}ooige  d} ett g  Se}
"Ctazy S    h'  p  S   > tt g  xatFiydPie
an
"Ctayy S    h'  p  S    h' => atFiydPie
an
"CtayydPie
an
"CtayydPie
an
"Ctaytt g  xco  =tibiliti_igi  KDI   u_aplace   h' 'piydKDI_k d}ooige tt g  atn(_Se}
"Cco  =tibiliti_i. WEBCn(_ WEB_INTERSTITIALayyfie
ie
ann}  tgeh'tgf_etn(ie
a'reqsktopg  Ka'raob cr deatalsng  ya gulae} die
aSe titisePadan
"Ctayydpt   vely. APPCn(_ APP_INTERSTITIALaKDI_g  ya n}  tgeoinaaob crtt g  lpps.IN_STREAM_VIDEOayyfies
ie
ann}  tgeoinain-tt etayvidet _as deae ppe tt g  atn(_Se} VAST A 'nd   CtayydPie
an
"Ctaytt g  xpsydeIrigi  KDI   u_aplace   h' 'piydme p E     d}
"tt g  place   hcpsyde'S    h'  p  S   > tt g  xay'pt  Typ_igi  KDI   u_aplace   h  d} e_ d}
"Cay'pt  tt g  ScSe S    h'  p  S   > tt g  x il Irigi  KDI   u_aplace   h' 'piydKDI_k d}ooige  d} ett g  Se}
"Ctayy S    h'  p  S   > tt g  x  ep   MI igi  KDI   u_aplace   h' 'piydme p E     d}
"tt g    ep   Me}    'reqpMen  d}    ' d}esc  Irigz ilePewePlace   h qDI( u  Se'   *r llefscear     eePr  d_iePlace   hscSeP _atn
"  retgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = Cn(_hiosmuy creCr  d_r i    UaePr  d_ eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt  crI r   ccSeep   MI  y crePdi}  scSear  dearyn _ mrr  dgPlace   h qDI( u  Se' e'(n
a g  o ts _atn
Pr  d_r   in  It gnyplace   hC Rt  d_ietyp   MIed}  scSe_  al Irigee _atn
yplace   h f"o'oa tgfaSI_}     e  => atFi  a Irimcy  'reqpMen aRdi} d_pMen     r     eePr  bFiyd Pieal Ir
"e    UaePr  d_ ePlace   he _pen  d}    ' da t   'Place   h hrue'(n
ah'tgf_atn
ata 'rea Tp.y( A cal usatesePtal_atalle}    ''rqpMen  d}    ' d}esc  Irigz ilePewePlace   h  *r llefscear     eePr  eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt g SPlace   h hrue'(n
a  retgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = Cn(_hiosmuy creCIrC bFiyd Pieal Ir
"e    UaePr  d_ eePr  d_r i    UaePr  d_ eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt  crI cr  MI  y creCtu/Ir r  bFiyd Pieal Ir
"e    UaePr  d_Place   he'(n
a g  o ts _atn
Pr  d_r   in  It gnyplace   hC yplace   h f tt  crI cr  MI  y creCtu/Ir r  btt  crI cr  MI  y creCtu/Ir r  bFiyd  di}  scSear  crI cr  MI  y crea t   'Place   h hrue'(n
ah'tgf_atn
ata 'rea Tp.y( A cal usatesePtal_atalle}    ''rqpMen  d}    ' d}esc  Irigz ilePewePlace   h  *r llefscear     eePr  ar   ccSeP _atn
"       r     eePr  d_r    ijd Place   h hrue'(n
a  retgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = Cn(_hiosmuy creCIrCIr
"e    UaePr  d_ eePr  d_r i    UaePr  d_ eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt  crI ieriooige  Sbaeijd _  'pice_ scSea d_}  scSear   ccSeaPlace   he'(n
a getgfal  d}    'platlle Typ_iatn dlt   _atn
"  Ir}escear     er L> ate'path'  sEr eeeu/IaayydPie
an
"CtayydPit d     eePr  d_r    ijdrsPietgfal  y creClueeu/Iplatlle Typ_i_Satalt   _atn
"  Irigeijplatlle Typ_i  nalt   _at=atalt   _a eeeu e_Mett g  (_in  Iriooi Platlle Typ_ian :,'reCn(_Satalt   Satalt   _atn
"r L> ate'path'g/IaayGety cr{oplatlle  ScSeeijd _pMeplatlle Typ_ifatn
"  r  d_ieriooige  Sbhiosmu_ad 'reqpMenisMen  d}    ' d}ooige  Sbhiosmu_ad 'reqpMen  d}    ' d}ePr  d__ ePlatlle  ScSee _pen  d}    ' d 'rea Tp.y( A cal usatesePtal_atalle}    'reqpMen  d}    ' d}esc  Irigz ilePewePlatlle Typ_  *r llefscear     eePr  atal Irigein  Ir    eePr  d_r    ijdrsPietgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = Cn(_hiosmuy creCtt tFiyd Pieal Ir
"eE"e> cal u    Ol Ir
nyoSearD ddtFia g   'piydreCtt tFiyd Pieall u    Otgfa t   'piydmetg8'tn
"e> cal Platlle Typ_e'(n
a g  o ts _atn
"  Ir}esziaoige  Sbaplatlle  ScSespMeplatlle Typ_ifd_iePlatlle Typ_i
"  r  d_ieriooige  Sbhiosmu_ad 'reqpMenisMen  d}    ' d}ooige  Sbhiosmu_ad 'reqpMen  d}    ' d 'rea Tp.y( A cal usatesePtal_atalle}    'reqpMen  d}    ' d}esc  Irigz ilePewePlatlle Typ_ qDI( u  Se'   *r llefscear     eePr  d_iePlatlle Typ_ cSeP _atn
"  retgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = Cn(_hiosmuy creCr  d_r i    UaePr  d_ eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt  crI r   ccSeep   MI  y crePdi}  scSear  dearyn _ mrr  dgPlatlle Typ_ qDI( u  Se' e'(n
a getgfal  d}    'p d_alC_atiatn dlt   _atn
"  Ir}escear     er L> ate'path'  sEr eeeu/IaayydPie
an
"CtayydPit d     eePr  d_r    ijdrsPietgfal  y creClueeu/Ip d_alC_ati_Satalt   _atn
"  Irigeijp d_alC_ati  nalt   _at=atalt   _a eeeu e_Mett g  (_in  Iriooi P d_alC_atian :,'reCn(_Satalt   Satalt   _atn
"r L> ate'path'g/IaayGety cr{op d_al  _ateijd _pMep d_alC_atifatn
"  r  d_ieriooige  Sbhiosmu_ad 'reqpMenisMen  d}    ' d}ooige  Sbhiosmu_ad 'reqpMen  d}    ' d}ePr  d_ _ateP d_al  _ate _pen  d}    ' d 'rea Tp.y( A cal usatesePtal_atalle}    'reqpMen  d}    ' d}esc  Irigz ilePeweP d_alC_at  *r llefscear     eePr  atal Irigein  Ir  _at  retgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = Cn(_hiosmuy creCeqp _atn(_hio _atr  d_r i    UaePr  d_ eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt  crI  tFiyd Pieall u    Otgfa t   'piydmetg8'tn
"e> cal P d_alC_ate'(n
a g  o ts _atn
"  Ir}esziaoige  Sbap d_al  _atspMep d_alC_atifd_ieP d_alC_ati
"  r  d_ieriooige  Sbhiosmu_ad 'reqpMenisMen  d}    ' d}ooige  Sbhiosmu_ad 'reqpMen  d}    ' d 'rea Tp.y( A cal usatesePtal_atalle}    'reqpMen  d}    ' d}esc  Irigz ilePeweP d_alC_at qDI( u  Se'   *r llefscear     eePr  d_ieP d_alC_at cSeP _atn
"  retgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = Cn(_hiosmuy creCr  d_r i    UaePr  d_ eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt  crI r   ccSeep   MI  y crePdi}  scSear  dearyn _ mrr  dgP d_alC_at qDI( u  Se' e'(n
a getgfal  d}    'pny ijdiatn dlt   _atn
"  Ir}escear     er L> ate'path'  sEr eeeu/IaayydPie
an
"CtayydPit d     eePr  d_r    ijdrsPietgfal  y creClueeu/Ipny ijdi_Satalt   _atn
"  Irigeijpny ijdi  nalt   _at=atalt   _a eeeu e_Mett g  (_in  Iriooi Pny ijdian :,'reCn(_Satalt   Satalt   _atn
"r L> ate'path'g/IaayGety cr{open ijd ijd _pMepny ijdifatn
"  r  d_ieriooige  Sbhiosmu_ad 'reqpMenisMen  d}    ' d}ooige  Sbhiosmu_ad 'reqpMen  d}    ' d}ePr  d_iqpPen ijd _ Men  d}    ' d 'rea Tp.y( A cal usatesePtal_atalle}    'reqpMen  d}    ' d}esc  Irigz ilePewePen ijd  *r llefscear     eePr  atal Irigein  Ir    eePr  d_r    ijdrsPietgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = Cn(_hiosmuy creCtt tFiyd Pieal Ir
"eE"e> cal u    Ol Ir
nyoSearD ddtFia g   'piydreCtt tFiyd Pieall u    Otgfa t   'piydmetg8'tn
"e> cal Pen ijde'(n
a g  o ts _atn
"  Ir}esziaoige  Sbapny ijdilt   _atn
atalt   _aMepny ijdifd_iePny ijdi
"  r  d_ieriooige  Sbhiosmu_ad 'reqpMenisMen  d}    ' d}ooige  Sbhiosmu_ad 'reqpMen  d}    ' d 'rea Tp.y( A cal usatesePtal_atalle}    'en  d} one
an
"Ct   h't  ' :    ' Fcal usatesePtal_atalle}pny ijdi_p  KDI   u_ad U 'reqpsydPAFtt g   KDIok vice
 "erviR>eqmcy  'pny ijd 'reqcu(dpCtt ep  }pny ijdiU 'reqd} e_ietgfaeecB (pen ijd '(nusatesePtapen ijd  U 'reqMett g  KDIok vicpen ijd  *r   d}    ' d}eBeta :,ieecyhe_at=at _at=atalt   _at=a 'ptmrr_kTp.y( A 'ptCn(_  *r    IrignPoSe'(n
aayydPitlnsd U 're Cn(_Seijd _  'pice_ietge_ _icpen ijde  d_ieriooi  d_r pny ijdi_Sbhi_ietg(n
anpen ijdePtapen ijd qMett g  KDIok vicpen ijd CtayydPie
an
"Ctaytt g  x oMed _pMen     r     euqpMen aRdi}  scSear     e p  S   > tt g  xl Ir
nyoSearigi  KDI   u_apny ijdi_Sbhi_td}
"al Ir
nyoSer     tayydPie
an
"CtayydPitt g  xIrigi  KDI   u_apny ijdi_Sbhi_td}
"atayydPie
an
"CtayydPie
an
"CtayydPie
an
"CtayydPie
an
"CtayydPie
an
"CtayydPie
ane
an
"Ct   h't atFiydPie
an
"Ctayy S    h'  p  S    h' => atFiydPie
an
"CtayydPie
an
"CtayydPie
an
"Ctaytt g  x oMe  Men  d}    ' d}eBeta :,
 d  MenxRin  'rW0lj
),0tPd}    'rqpMen  d}    ' d}esc  Irigz ilePewePen ijd qDI( u  Se'   *r llefscear     eePr  d_iePen ijd cSeP _atn
"  retgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = Cn(_hiosmuy creCr  d_r i    UaePr  d_ eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt  crI r   ccSeep   MI  y crePdi}  scSear  dearyn _ mrr  dgPen ijd qDI( u  Se' e'(n
a getgfal  d}    'regPr iatn dlt   _atn
"  Ir}escear     er L> ate'path'  sEr eeeu/IaayydPie
an
"CtayydPit d     eePr  d_r    ijdrsPietgfal  y creClueeu/IregPr i_Satalt   _atn
"  IrigeijregPr i  nalt   _at=atalt   _a eeeu e_Mett g  (_in  Iriooi RegPr ian :,'reCn(_Satalt   Satalt   _atn
"r L> ate'path'g/Iaay"  Ir}esziaoige  SbaregPr iaMeregPr ialDI( ugPr i
"  r  d_ieriooige  Sbhiosmu_ad 'reqpMenisMen  d}    ' d}ooige  Sbhiosmu_ad 'reqpMen  d}    ' d 'rea Tp.y( A cal usatesePtal_atalle}    ''rqpMen  d}    ' d}esc  Irigz ilePewe ugPr iqDI( u  Se'   *r llefscear     eePr  d_ie ugPr icSeP _atn
"  retgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = Cn(_hiosmuy creCr  d_r i    UaePr  d_ eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt  crI r   ccSeep   MI  y crePdi}  scSear  dearyn _ mrr  dg ugPr iqDI( u  Se' e'(n
a getgfal  d}    'remarker  dqDI(Shn _iatn dlt   _atn
"  Ir}escear     er L> ate'path'  sEr eeeu/IaayydPie
an
"CtayydPit d     eePr  d_r    ijdrsPietgfal  y creClueeu/Iremarker  dqDI(Shn _i_Satalt   _atn
"  Irigeijremarker  dqDI(Shn _i  nalt   _at=atalt   _a eeeu e_Mett g  (_in  Iriooi Remarker  dqDI(Shn _ian :,'reCn(_Satalt   Satalt   _atn
"r L> ate'path'g/IaayGety cr{oremarker  doige  shn _ r  remarker  doige  ad U 'req(remarker  dqDI(Shn _ifatn
"  r  d_ieriooige  Sbhiosmu_ad 'reqpMenisMen  d}    ' d}ooige  Sbhiosmu_ad 'reqpMen  d}    ' d}ePr  d_remarker  dqDI(eqpRemarker  doige  ad U 'req    ' d 'rea Tp.y( A cal usatesePtal_atalle}    ''rqpMen  d}    ' d}esc  Irigz ilePewe umarker  dqDI(Shn _  *r llefscear     eePr  atal Irigein  Ir remarker  dqDI(eq  retgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = Cn(_hiosmuy creC= Cremarker  dqDI(eqn(_hioremarker  dqDI(eqr  d_r i    UaePr  d_ eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt  crI  tFiyd Pieall u    Otgfa t   'piydmetg8'tn
"e> cal  umarker  dqDI(Shn _e'(n
a g  o ts _atn
Pr  d_r   in  It gnyremarker  doige  shn _C Rt  d_ietyp   MIed}  scSe_ _atn
 al Irigeeq(remarker  dqDI(Shn _if"o'oa tgfaSI_}     e  => atFi  a Irimcy  'reqpMen aRdi} d_pMen     r     eePr  bFiyd Pieal Ir
"e    UaePr  dremarker  dqDI(eqpRemarker  doige  ad U 'req    ' da t   ' umarker  dqDI(Shn _ hrue'(n
ah'tgf_atn
ata 'rea Tp.y( A cal usatesePtal_atalle}    ''rqpMen  d}    ' d}esc  Irigz ilePewe umarker  dqDI(Shn _  *r llefscear     eePr  eePr  d_r   in  It remarker  dqDI(eq  d}    ' d}esc  Irigz ilePewe umarker  dqDI(Shn _ hrue'(n
a  retgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = Cn(_hiosmuy creCIrCremarker  dqDI(eqn(_hioremarker  dqDI(eqIrCIr
"e    UaePr  d_ eePr  d_r i    UaePr  d_ eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt  crI cr  MI  y creCtu/Ir r  bFiyd Pieal Ir
"e    UaePr  d_ umarker  dqDI(Shn _e'(n
a g  o ts _atn
Pr  d_r   in  It gnyremarker  doige  shn _C (remarker  dqDI(Shn _if tt  crI cr  MI  y creCtu/Ir r  btt  crI cr  MI  y creCtu/Ir r  bFiyd  di}  scSear  crI cr  MI  y crea t   ' umarker  dqDI(Shn _ hrue'(n
ah'tgf_atn
ata 'rea Tp.y( A cal usatesePtal_atalle}    ''rqpMen  d}    ' d}esc  Irigz ilePewe umarker  dqDI(Shn _  *r llefscear     eePr  ar   ccSeP _atn
"       r     eePr  d_r    ijd  umarker  dqDI(Shn _ hrue'(n
a  retgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = Cn(_hiosmuy creCIrCIr
"e    UaePr  d_ eePr  d_r i    UaePr  d_ eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt  crI ieriooige  Sbaeijd _  'pice_ scSea d_}  scSear   ccSea umarker  dqDI(Shn _e'(n
a getgfal  d}    'remarker  dqDI(iatn dlt   _atn
"  Ir}escear     er L> ate'path'  sEr eeeu/IaayydPie
an
"CtayydPit d     eePr  d_r    ijdrsPietgfal  y creClueeu/Iremarker  dqDI(i_Satalt   _atn
"  Irigeijremarker  dqDI(i  nalt   _at=atalt   _a eeeu e_Mett g  (_in  Iriooi Remarker  dqDI(ian :,'reCn(_Satalt   Satalt   _atn
"r L> ate'path'g/IaayGety cr{oremarker  doige  ijd _pMeremarker  dqDI(ifatn
"  r  d_ieriooige  Sbhiosmu_ad 'reqpMenisMen  d}    ' d}ooige  Sbhiosmu_ad 'reqpMen  d}    ' d}ePr  d_iqpRemarker  doige  ad U 'req    ' d 'rea Tp.y( A cal usatesePtal_atalle}    ''rqpMen  d}    ' d}esc  Irigz ilePewe umarker  dqDI(  *r llefscear     eePr  atal Irigein  Ir    eePr  d_r    ijdrsPietgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = Cn(_hiosmuy creCtt tFiyd Pieal Ir
"eE"e> cal u    Ol Ir
nyoSearD ddtFia g   'piydreCtt tFiyd Pieall u    Otgfa t   'piydmetg8'tn
"e> cal  umarker  dqDI(e'(n
a g  o ts _atn
y creClueeu/Iaremarker  doige pMeremarker  dqDI(ifear  dearyn _ m_r  age  Sbaei  u_ad U 'reqpsydPietiin
"  Irigeijd      Cn(_Seijd _  ' :th'tgf_atn
ataa t   ' umarker  dqDI( hrue'(n
ah'tgf_atn
ata 'rea Tp.y( A cal usatesePtal_atalle}    ''rqpMen  d}    ' d}esc  Irigz ilePewe umarker  dqDI(  *r llefscear     eePr   'rIau_ad Umrr  dgdn natn dlt   _atn
"  Ir}eszi umarker  dqDI( hrue'(n
a eePr  d_r    ijdrsPietgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = CIr
"e    UaePr  d_ eePr  d_r i    UaePr  d_ eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt  crI n mtFi  Pietgfal  d}    'rIau_atn(_Satalt  ta u  'reqp umarker  dqDI(e'(n
a g  o ts _atn
"  Ir}esziaoige  Sbaremarker  doige ilt   _atn
atalt   _a _atn
eremarker  dqDI(ifige Remarker  dqDI(iearyn _ m_r  age  Sbaei  u_ad U 'reqpsydPietiin
"  Irigeijd      Cn(_Seijd _  ' :th'tgf_atn
atabaei  u_l Ir
nyoSeargi  KDI   u_aremarker  doige i ownerDijdSeijh'tgf_l Ir
nyoSe U 'req    ' d 'rea Tp.y( A cal usatesePtal_atalle}    'U 'req e
an
"Ctaytt g  xietg(l usatesePtal_atalle}   ijd _p  KDI   u_ad qpsydPAFtt _atn
e   KDIok vice
 "erviR>eqmcy  'remarker  doige  'reqcu(dpCtt ep  } b ijdiU 'reqd} e_ietgfaeecB (remarker  doige  '(nusatesePtaremarker  doige   U 'reqMett U 'req  KDIok vicremarker  doige   d}    ' d}eBeta :,ieecyhe_at=at _at=atalt   _U 'reqt=a 'ptmrr pTp.y( A 'ptCn(_   IrignPoSe'(n
aayydPitlnsd U 're Cn(_Seijd U 'req  'pice_ietge_ _icremarker  doige    eePr  d_r    ijd _d} e_ietg(n
aU 'reqremarker  doige  Ptaremarker  doige  qMett g  KDIok vicremarker  doige  CtayydPie
an
"Ctaytt g  x oMed _pMen     r     euqpMen aRdi}  scSear     e p  S   > e
an
"CtayydPie
an
"CtayydPie
an
"CtayydPie
an
"CtayydPie
ane
an
"Ct   h't atFiydPie
an
"Ctayy S    h'  p  S    h' => atFiydPie
an
"CtayydPie
an
"CtayydPie
an
"Ctaytt g  x oMe  Men  d}    ' d}eBeta :,
 d  MenxRin  'rW0lj
),0tPd}    're
an
"Ctay"    P   veD ddtFia g   P   veD  Ka'   inP   veDremarker  doige iCtayydPie
an
"Ctaytt g  xfloodlightA   vityargi  KDI   u_aremarker  doige i 'piyn
"Ctahave Seijdfloodlight P   vity ad U 'req qpMen  d}    ' d}esc  Irigz ilePewe umarker  dqDI(iqDI( u  Se'   *r llefscear     eePr  d_ie umarker  dqDI(il Irigein  Ir l Ir
nyoSear eePr  d_r    ijdrsPietgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = Cl Ir
nyoSear_Ol Irl Ir
nyoSearr  d_r i    UaePr  d_ eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt  crI d_ie  Pietgfal  d}    'rIau_atn(_Satalt  ta u  'reqp umarker  dqDI( qDI( u  Se' e'(n
a g  o ts _atn
Pr  d_r   in  It gnyremarker  doige pMRt  d_ietyp   MIed}  scSe_  al Irigee _atn
yremarker  dqDI(if"o'oa tgfaSI_}     e  => atFi  a Irimcy  'reqpMen aRdi} d_pMen     r     eePr  bFiyd Pieal Ir
"e    UaePr  diqpRemarker  doige  ad U 'req    ' da t   ' umarker  dqDI( hrue'(n
ah'tgf_atn
ata 'rea Tp.y( A cal usatesePtal_atalle}    ''rqpMen  d}    ' d}esc  Irigz ilePewe umarker  dqDI(  *r llefscear     eePr  eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt g S umarker  dqDI( hrue'(n
a eePr  d_r    ijdrsPietgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = C bFiyd Pieal Ir
"e    UaePr  d_ eePr  d_r i    UaePr  d_ eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt  crI cr  MI  y creCtu/Ir r  bFiyd Pieal Ir
"e    UaePr  d_ umarker  dqDI(e'(n
a g  o ts _atn
Pr  d_r   in  It gnyremarker  doige pMyremarker  dqDI(if tt  crI cr  MI  y creCtu/Ir r  btt  crI cr  MI  y creCtu/Ir r  bFiyd  di}  scSear  crI cr  MI  y crea t   ' umarker  dqDI( hrue'(n
ah'tgf_atn
ata 'rea Tp.y( A cal usatesePtal_atalle}    ''rqpMen  d}    ' d}esc  Irigz ilePewe umarker  dqDI(  *r llefscear     eePr  ar   ccSeP _atn
"       r     eePr  d_r    ijd  umarker  dqDI( hrue'(n
a eePr  d_r    ijdrsPietgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = CIr
"e    UaePr  d_ eePr  d_r i    UaePr  d_ eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt  crI ieriooige  Sbaeijd _  'pice_ scSea d_}  scSear   ccSea umarker  dqDI(e'(n
a getgfal  d}    'reIed} atn dlt   _atn
"  Ir}escear     er L> ate'path'  sEr eeeu/IaayydPie
an
"CtayydPit d     eePr  d_r    ijdrsPietgfal  y creClueeu/IreIed}  Satalt   _atn
"  IrigeijreIed}   nalt   _at=atalt   _a eeeu e_Mett g  (_in  Iriooi ReIed} an :,'reCn(_Satalt   Satalt   _atn
"r L> ate'path'g/IaayydPiecyhe n  Iri r  it _ _pMereIed} fatalt   _at r L> ate'path'g/IaayydPi:(_in      DFAL> MI  y creCtu/ieal Ir
"e    UaePr  dreIed}n      u/Iayy S  reIed} U 'req    ' d 'rea Tp.y( A cal usatesePtal_atalle}    'ge  Sbaei  u_ad U 'reqpsydPietiin
"  IrireIed}n  eePr  d_r    ijdrsPietgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = CreIed}n n(_hioreIed}n r  d_r i    UaePr  d_ eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt  crI lt   _atn
"  Iri r     eePr mr  d_ieriooig"  Ir}esziaon  Iri r  it _ _pMereIed} fatn
"  r  d_ieriooige  Sbhiosmu_ad 'reqp    DFAL> MI  y creCtu/ieal Ir
"e    UaePr  dreIed}n      u/Iayy S  reIed} U 'req    ' d 'rea Tp.y( A cal usatesePtal_atalle}    ''rqpMen  d}    ' d}esc  Irigz ilePewe u ile    'ge  Sbaei  u_ad U 'ratal Irigein  Ir reIed}n  eePr  d_r    ijdrsPietgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = CreIed}n n(_hioreIed}n r  d_r i    UaePr  d_ eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt  crI  tFiyd Pieall u    Otgfa t   'piydmetg8'tn
"e> cal  u"e> e'(n
a g  o ts _atn
Creaecyhe n  IripMereIed} fear  dearyn _ m_r  age  Sbaei  u_ad U 'reqp    DFAL> MI  y creCtu/ieal Ir
"e    a t   ' u Iri hrue'(n
ah'tgf_atn
ata 'rea Tp.y( A cal usatesePtal_atalle}    ''rqpMen  d}    ' d}esc  Irigz ilePewe u ile    'ge  Sbaei  u_ad U 'r 'rIau_ad Umrr  dgdn natn dlt   _atn
"  Ir}eszi u Iri hrue'(n
a eePr  d_r    ijdrsPietgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = CIr
"e    UaePr  d_ eePr  d_r i    UaePr  d_ eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt  crI n mtFi  Pietgfal  d}    'rIau_atn(_Satalt  ta u  'reqp u"e> e'(n
a g  o ts _atn
"  Ir}esziige  an
"CIed} fMereIed} fd_ie uIed} earyn _ m_r  age  Sbaei  u_ad U 'reqp    DFAL> MI  y creCtu/ieal Ir
"e     'rea Tp.y( A cal usatesePtal_atalle}    'eal Ir
e
an
"Ctaytt g  x oMed _pMe    f     r     euqpMen aRdi}  scSear     e p  S   > e
an
"CtayydPie
an
"CtayydPie
an
"CtayydPie
an
"CtayydPie
ane
an
"Ct   h't atFiydPie
    vn
"Ctayy S    h' S    h' => atFiydPie
an
"CtayydPie
an
"CtayydPie
an
"Ctaytt g  x oMe  Men  d}    ' d}eBeta :,
 d  MenxRin  'rW'DElj
),0tP'CtayydPie
an
"Ctaytt g  x cope
     cope
'piydenxiny  d  euq"CtayydPKDIoan
"Cted U 'reqenxRin  'rW'MINE'}    ''rqpMen  d}    ' d}esc  Irigz ilePewe u ileqDI(  *r llefscear     eePr  d_ie uIed} l Irigein  Ir Pr  d_r    ijdrsPietgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear r  d_r i    UaePr  d_ eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt  crI d_ie  Pietgfal  d}    'rIau_atn(_Satalt  ta u  'reqp u ileqDI(e'(n
a g  o ts _atn
Pr  d_r   n  IripMRt  d_ietyp   MIed}  scSe_  al IrigeeMereIed} f"o'oa tgfaSI_}     e  => atFi  a Irimcy  '    DFAL> MI  y creCtu/ieal Ir
"e    UaePr  dreIed}n      u/Iayy S  reIed} U 'req    ' da t   ' u Iri hrue'(n
ah'tgf_atn
ata 'rea Tp.y( A cal usatesePtal_atalle}    ''rqpMen  d}    ' d}esc  Irigz ilePewe u ile    'ge  Sbaei  u_ad U 'reePr  d_r   in  It reIed}n  ed}    ' d}esc  Irigz ilePewe u ile hrue'(n
a eePr  d_r    ijdrsPietgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = CreIed}n n(_hioreIed}n = CIr
"e    UaePr  d_ eePr  d_r i    UaePr  d_ eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt  crI cr  MI  y creCtu/Ir r  bFiyd Pieal Ir
"e    UaePr  d_ u"e> e'(n
a g  o ts _atn
"unyhe n  IripMereIed} frun tgfaSI_}     e  => atFi  a Irimcy  '    DFAL y creCtu/ieal Ir
"e    UaePr  dreIed}n      u/Iayy S  reIed} U 'req    ' d 'rea Tp.y( A cal usatesePtal_atalle}    'tayydPie
an
"Ctay"    synchrone
a Ifeset_n(_  rue,  Ir}dPie
auny S  reIed}tayydPsynchrone
aly}    ''rqpMen  d}    ' d}esc  Irigz ilePeweIrigz ilePewFil   *r llefscear     eePr  aunl Irigein  Ir reIed}n  eePr  d_r    ijdrsPietgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = CreIed}n n(_hioreIed}n r  d_r i    UaePr  d_ eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt  crI aunI  y creCtu/Ir r  bFiyd Pieal Ir
"e    UaePr  d_Irigz ilePewFil e'(n
a g  o ts _atn
Pr  d_r   n  IripMereIed} f tt  crI cr  MI  y creCtu/Ir r  btt  crI cr    DFAL> MI  y creCtu/ieal Ir
"e    UaePr  dreIed}n      u/Iayy S  reIed} U 'req    ' da t   ' u Iri hrue'(n
ah'tgf_atn
ata 'rea Tp.y( A cal usatesePtal_atalle}    ''rqpMen  d}    ' d}esc  Irigz ilePewe u ile    'ge  Sbaei  u_ad U 'rar   ccSeP _atn
"   reIed}n  ed}    ' d}esc  Irigz ilePewe u ile hrue'(n
a eePr  d_r    ijdrsPietgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = CreIed}n n(_hioreIed}n = CIr
"e    UaePr  d_ eePr  d_r i    UaePr  d_ eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt  crI ieriooige  Sbaeijd _  'pice_ scSea d_}  scSear   ccSea u"e> e'(n
a getgfal  d}    'co  =tibled _pM atn dlt   _atn
"  Ir}escear     er L> ate'path'  sEr eeeu/IaayydPie
an
"CtayydPit d     eePr  d_r    ijdrsPietgfal  y creClueeu/Ico  =tibled _pM  Satalt   _atn
"  Irigeijco  =tibled _pM   nalt   _at=atalt   _a eeeu e_Mett g  (_in  Iriooi ReIed} Co  =tibled _pM an :,'reCn(_Satalt   Satalt   _atn
"r L> ate'path'g/IaayR  d_rsy S  f _pM  'piydKDI_co  =tiblePie
b"enddtFietainy S  redpt   vetayydPst   _astn
"aon  Iri criallia, g veny S  f _pM  alreadyenddtFietainy S  inpu}tayydPn  Iri n(_ > MI  ermissir iaMeco  =tibled _pM .queryrI cr  MI  y creCtu/Ir r  btt  crI cr    DFAL> MI  y creCtu/ieal Ir
"e    a t   ' u Iri hrue'(n
ah'tgf_atn
ata 'rea Tp.y( A cal usatesePtal_atalle}    ''rqpMen  d}    ' d}esc  Irigz ilePeweCo  =tibled _pM     'ge  Sbaei  u_ad U 'rquery_ad Umrr  dgdn natn dlt   _atn
"  Ir}eszi u Iri hrue'(n
a eePr  d_r    ijdrsPietgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = CIr
"e    UaePr  d_ eePr  d_r i    UaePr  d_ eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt  crI queryige  Sbaeijd _  'pice_ scSea d_}  scSear   ccSeaCo  =tibled _pM e'(n
a getfal  d}    'oSea atn dlt   _atn
"  Ir}escear     er L> ate'path'  sEr eeeu/IaayydPie
an
"CtayydPit d     eePr  d_r    ijdrsPietgfal  y creClueeu/IoSea  Satalt   _atn
"  IrigeijoSea   nalt   _at=atalt   _a eeeu e_Mett g  (_in  Iriooi ReIed} Fil  an :,'reCn(_Satalt   Satalt   _atn
"r L> ate'path'g/IaayR  Ir}esziaon  Iri oSeaaMeoSea fatn
"  r  d_ieriooige  Sbhiosmu_ad 'reqp    DFAL y creCtu/ieal Ir
"e    UaePr  dreIed}n      u/Iayy S  reIed} U 'req    ' dUaePr  dd 'reqp    u/Iayy S  reIed} oSeaah'tgf_atn
ata 'rea Tp.y( A cal usatesePtal_atalle}    ''rqpMen  d}    ' d}esc  Irigz ilePeweIrigz ilePewFil   *r llefscear     eePr  atal Irigein  Ir reIed}n  eegein  Ir Pr  d_r    ijdrsPietgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = CreIed}n n(_hioreIed}n = Chiosmu_Ol Irhiosmur  d_r i    UaePr  d_ eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt  crI  tFiyd Pieall u    Otgfa t   'piydmetg8'tn
"e> cal Irigz ilePewFil e'(n
a g  o ts _atn
qDI(i oSea  g  yhereIed} MeoSea fd_ie uIed} Fil  
"  r  d_ieriooige  Sbhiosmu_ad 'reqp    DFAL y creCtu/ieal Ir
"e    UaePr  dreIed}n      u/Iayy S  "e   h reIed} U 'req    ' d 'rea Tp.y( A cal usatesePtal_atalle}    'U 'req e
an
"Ctaytt g  x oMed _pMe    f     r     euqpMen aRdi}  scSear     e p  S   > e
an
"CtayydPie
an
"CtayydPie
an
"CtayydPie
an
"CtayydPie
ane
an
"Ct   h't atFiydPie
    vn
"Ctayy S    h' S    h' => atFiydPie
an
"CtayydPie
an
"CtayydPie
an
"Ctaytt g  x oMe  Men  d}    ' d}eBeta :,
 d  MenxRin  'rW'DElj
),0tP'CtayydPiqpMen  d}    ' d}esc  Irigz ilePeweFil qDI(  *r llefscear     eePr  d_ie uIed} Fil  l Irigein  Ir reIed}n  eePr  d_r    ijdrsPietgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = CreIed}n n(_hioreIed}n r  d_r i    UaePr  d_ eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt  crI d_ie  Pietgfal  d}    'rIau_atn(_Satalt  ta u  'reqpFil qDI(e'(n
a getgfal  d}    'tayy atn dlt   _atn
"  Ir}escear     er L> ate'path'  sEr eeeu/IaayydPie
an
"CtayydPit d     eePr  d_r    ijdrsPietgfal  y creClueeu/Itayy  Satalt   _atn
"  Irigeijtayy   nalt   _at=atalt   _a eeeu e_Mett g  (_in  Iriooi Sil  an :,'reCn(_Satalt   Satalt   _atn
"r L> ate'path'g/IaayGety cr{otayy ijd _pMetayy Satn
"  r  d_ieriooige  Sbhiosmu_ad 'reqp  MI  y creCtu/Ir r  bFiyd  di}  scSear  crI cr  MI  y creUaePr  diqpSil tu/ieal Ir
"e     'rea Tp.y( A cal usatesePtal_atalle}    'PiqpMen  d}    ' d}esc  Irigz ilePeweSil   *r llefscear     eePr  atal Irigein  Ir    eePr  d_r    ijdrsPietgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = Cn(_hiosmuy creCtt tFiyd Pieal Ir
"eE"e> cal u    Ol Ir
nyoSearD ddtFia g   'piydreCtt tFiyd Pieall u    Otgfa t   'piydmetg8'tn
"e> cal Sil e'(n
a g  o ts _atn
y creClueeu/IatayypMetayy Sear  dearyn _ m_r  age  Sbaei  u_ad U 'reqp  MI  y creCtu/Ir r  bFiyd  di}  scSear  crI cr  MI  y crea t   'pil thrue'(n
ah'tgf_atn
ata 'rea Tp.y( A cal usatesePtal_atalle}    ''rqpMen  d}    ' d}esc  Irigz ilePeweSil   *r llefscear     eePr   'rIau_ad Umrr  dgdn natn dlt   _atn
"  Ir}eszipil thrue'(n
a eePr  d_r    ijdrsPietgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = CIr
"e    UaePr  d_ eePr  d_r i    UaePr  d_ eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt  crI n mtFi  Pietgfal  d}    'rIau_atn(_Satalt  ta u  'reqpSil e'(n
a g  o ts _atn
R  Ir}esziaoige  Sbatayy lt   _atn
atalt   _aMetayy Sige Sil  earyn _ m_r  age  Sbaei  u_ad U 'reqp  MI  y creCtu/Ir r  bFiyd  di}  scSear  crI cr  MI  y cre 'rea Tp.y( A cal usatesePtal_atalle}    'cr  MI o
an
"Ctay"    acceptsI
aSe titisePlace   h MRt  d  'picetalt   'rWno  p ESer       MIed}erDn(_  eePrhave no effKDI   y S  redayydPan
"CtedCtayydPie
an
"Ctaytt g  x oMe  Men  d}    ' d}eBeta :,
 d  MenxRin  'rW0lj
),0tPd}    're
an
"Ctaytt g  x ' :    ' Fcal usatesePtal_atalle}   ijd _p  KDI , u/Iaer     keyNDI .qpsydPAFtt g   KDIok vice
 "erviR>eqmcy  'tayy 'reqcu(dpCtt ep  tt g     ijd _d} e_ietgfaeecB (tayy '(nusatesePtatayy  U 'reqMett g  KDIok vicsil   *r   d}    ' d}eBeta :,ieecyhe_at=at _at=atalt   _at=a 'ptmrr_kTp.y( A 'ptCn(_  *r    IrignPoSe'(n
aayydPitlnsd U 're Cn(_Seijd _  'pice_ietge_ _icsil e  d_ieriooi  d_r    ijd _d} e_ietg(n
aatayyePtatayy qMett g  KDIok vicsil  CtayydPie
an
"Ctaytt g  x ubaccou hI gi  KDI   u_atayy   di}  scSe ubaccou htu/ieal Ir
e
an
"Ctaytt g  xdirKDIorySil Irigi  KDI   u_atayy   di}  se
"CdirKDIoryr      il tu/iCtayydPie
an
"Ctay"    acceptsI
St etaVidetPlace   h MRt  d  'picetalt   'rWnotayydP p ESe   MIed}erDn(_  eePrhave no effKDI   y S  redayydPan
"CtedCtayydPie
an
"Ctaytt g  xIrigi  KDI   u_atayy   di}  se
"CtayydPie
an
"CtayydPie
an
"CtayydPie
an
"CtayydPie
an
"CtayydPie
an
"CtayydPie
ane
an
"Ct   h't atFiydPie
an
"Ctayy S    h'  p  S    h' => atFiydPie
an
"CtayydPie
an
"CtayydPie
an
"Ctay"    acceptsPcearsherPaidPlace   h Mi  KDI   u_atayy  'piydKccepttayydPpcearsher
anirDplace   hs.h'tgf_aane
an
"Ct   h't  oMed _pMen     r     euqpMen aRdi}  scSear     e p  S   > "    adWo  _pil ti  KDI   u_aAdWo  _Ctayy S    h'  p  S   > "    unmappedpil ti  KDI   u_atayy  'piydhave noydme   mappedqpMea    h'dirKDIoryCtayyar     e p  S   > "    ap y verD ddtFia g   Pp y verDtayy S    h'  p  S   >    h't   ep   MI igi  KDI   u_atayy   di}  se
"C  ep   MCtayydPie
anqpMen  d}    ' d}esc  Irigz ilePeweSil iqDI( u  Se'   *r llefscear     eePr  d_ieSil il Irigein  Ir Pr  d_r    ijdrsPietgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear r  d_r i    UaePr  d_ eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt  crI d_ie  Pietgfal  d}    'rIau_atn(_Satalt  ta u  'reqpSil iqDI( u  Se' e'(n
a g  o ts _atn
Pr  d_r   in  It gnytayyaMRt  d_ietyp   MIed}  scSe_  al IrigeeMetayy S"o'oa tgfaSI_}     e  => atFi  a Irimcy  '  MI  y creCtu/Ir r  bFiyd  di}  scSear  crI cr  MI  y creUaePr  diqpSil tu/ieal Ir
"e    a t   'pil thrue'(n
ah'tgf_atn
ata 'rea Tp.y( A cal usatesePtal_atalle}    ''rqpMen  d}    ' d}esc  Irigz ilePeweSil   *r llefscear     eePr  eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt g Spil thrue'(n
aIr Pr  d_r    ijdrsPietgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = C bFiyd Pieal Ir
"e    UaePr  d_ eePr  d_r i    UaePr  d_ eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt  crI cr  MI  y creCtu/Ir r  bFiyd Pieal Ir
"e    UaePr  d_pil e'(n
a g  o ts _atn
Pr  d_r   in  It gnytayyaMetayy S tt  crI cr  MI  y creCtu/Ir r  btt  crI cr  MI  y creCtu/Ir r  bFiyd  di}  scSear  crI cr  MI  y crea t   'pil thrue'(n
ah'tgf_atn
ata 'rea Tp.y( A cal usatesePtal_atalle}    ''rqpMen  d}    ' d}esc  Irigz ilePeweSil   *r llefscear     eePr  ar   ccSeP _atn
"       r     eePr  d_r    ijd pil thrue'(n
aIr Pr  d_r    ijdrsPietgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = CIr
"e    UaePr  d_ eePr  d_r i    UaePr  d_ eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt  crI ieriooige  Sbaeijd _  'pice_ scSea d_}  scSear   ccSeapil e'(n
a getgfal  d}    'tazy atn dlt   _atn
"  Ir}escear     er L> ate'path'  sEr eeeu/IaayydPie
an
"CtayydPit d     eePr  d_r    ijdrsPietgfal  y creClueeu/Itazy  Satalt   _atn
"  Irigeijtazy   nalt   _at=atalt   _a eeeu e_Mett g  (_in  Iriooi Siz  an :,'reCn(_Satalt   Satalt   _atn
"r L> ate'path'g/IaayGety cr{otazy ijd _pMetazy Satn
"  r  d_ieriooige  Sbhiosmu_ad 'reqp  MI  y creCtu/Ir r  bFiyd  di}  scSear  crI cr  MI  y creUaePr  diqpSiz tu/ieal Ir
"e     'rea Tp.y( A cal usatesePtal_atalle}    'PiqpMen  d}    ' d}esc  Irigz ilePeweSiz   *r llefscear     eePr  atal Irigein  Ir    eePr  d_r    ijdrsPietgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = Cn(_hiosmuy creCtt tFiyd Pieal Ir
"eE"e> cal u    Ol Ir
nyoSearD ddtFia g   'piydreCtt tFiyd Pieall u    Otgfa t   'piydmetg8'tn
"e> cal Siz e'(n
a g  o ts _atn
y creClueeu/IatazepMetazy Sear  dearyn _ m_r  age  Sbaei  u_ad U 'reqp  MI  y creCtu/Ir r  bFiyd  di}  scSear  crI cr  MI  y crea t   'piz thrue'(n
ah'tgf_atn
ata 'rea Tp.y( A cal usatesePtal_atalle}    ''rqpMen  d}    ' d}esc  Irigz ilePeweSiz   *r llefscear     eePr   'rIau_ad Umrr  dgdn natn dlt   _atn
"  Ir}eszipiz thrue'(n
aIr Pr  d_r    ijdrsPietgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = CIr
"e    UaePr  d_ eePr  d_r i    UaePr  d_ eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt  crI n mtFi  Pietgfal  d}    'rIau_atn(_Satalt  ta u  'reqpSiz e'(n
a g  o ts _atn
R  Ir}esziaoige  Sbatazy lt   _atn
atalt   _aMetazy Sige Siz  earyn _ m_r  age  Sbaei  u_ad U 'reqp  MI  y creCtu/Ir r  bFiyd  di}  scSear  crI cr  MI  y cre 'rea Tp.y( A cal usatesePtal_atalle}    'cr  MI o
an
"Ctay"    iabS 'nd   gi  KDI   u_aIAB A 'nd   Ctazy S    h'  p  S   > e
anwidi} i  KDI   u_atazy   di}  scSewidi}CtayydPie
an
"Ctaytt g  xIrigi  KDI   u_ataze   di}  se
"CtayydPie
an
"CtayydPie
anheight i  KDI   u_atazy   di}  scSeheight}    ''rqpMen  d}    ' d}esc  Irigz ilePeweSiz iqDI( u  Se'   *r llefscear     eePr  d_ieSiz il Irigein  Ir Pr  d_r    ijdrsPietgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear r  d_r i    UaePr  d_ eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt  crI d_ie  Pietgfal  d}    'rIau_atn(_Satalt  ta u  'reqpSizt qDI( u  Se' e'(n
a getgfal  d}    ' ubaccou h atn dlt   _atn
"  Ir}escear     er L> ate'path'  sEr eeeu/IaayydPie
an
"CtayydPit d     eePr  d_r    ijdrsPietgfal  y creClueeu/Itubaccou h  Satalt   _atn
"  Irigeijtubaccou h   nalt   _at=atalt   _a eeeu e_Mett g  (_in  Iriooi Subaccou h an :,'reCn(_Satalt   Satalt   _atn
"r L> ate'path'g/IaayGety cr{otubaccou htijd _pMetubaccou h Satn
"  r  d_ieriooige  Sbhiosmu_ad 'reqp  MI  y creCtu/Ir r  bFiyd  di}  scSear  crI cr  MI  y creUaePr  diqpSubaccou htu/ieal Ir
 y cre 'rea Tp.y( A cal usatesePtal_atalle}    ''rqpMen  d}    ' d}esc  Irigz ilePeweSubaccou h  *r llefscear     eePr  atal Irigein  Ir    eePr  d_r    ijdrsPietgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = Cn(_hiosmuy creCtt tFiyd Pieal Ir
"eE"e> cal u    Ol Ir
nyoSearD ddtFia g   'piydreCtt tFiyd Pieall u    Otgfa t   'piydmetg8'tn
"e> cal Subaccou he'(n
a g  o ts _atn
y creClueeu/Iatubaccou hpMetubaccou h Sear  dearyn _ m_r  age  Sbaei  u_ad U 'reqp  MI  y creCtu/Ir r  bFiyd  di}  scSear  crI cr  MI  y crea t   'pubaccou hthrue'(n
ah'tgf_atn
ata 'rea Tp.y( A cal usatesePtal_atalle}    ''rqpMen  d}    ' d}esc  Irigz ilePeweSubaccou h  *r llefscear     eePr   'rIau_ad Umrr  dgdn natn dlt   _atn
"  Ir}eszipubaccou hthrue'(n
a eePr  d_r    ijdrsPietgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = CIr
"e    UaePr  d_ eePr  d_r i    UaePr  d_ eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt  crI n mtFi  Pietgfal  d}    'rIau_atn(_Satalt  ta u  'reqpSubaccou he'(n
a g  o ts _atn
Gety aoige  Sbatubaccou h lt   _atn
atalt   _aMetubaccou h Sd_ieSubaccou h earyn _ m_r  age  Sbaei  u_ad U 'reqp  MI  y creCtu/Ir r  bFiyd  di}  scSear  crI cr  MI  y cre 'rea Tp.y( A cal usatesePtal_atalle}    'cr  MI e
an
"Ctaytt g  x ' :    ' Fcal usatesePtal_atalle}   ijd _p  KDI   u_ad U 'reqpsydPAFtt g   KDIok vice
 "erviR>eqmcy  'tubaccou h 'reqcu(dpCtt ep  } b ijdiU 'reqd} e_ietgfaeecB (tubaccou ht'(nusatesePtatubaccou ht U 'reqMett g  KDIok vU 'reqatubaccou ht d}    ' d}eBeta :,ieecyhe_at=at _at=atalt   _at=a 'ptmrr_kTp.y(U 'reqA 'ptCn(_   IrignPoSe'(n
aayydPitlnsd U 're Cn(_Seijd _  'pice_ietge_ _U 'reqatubaccou h   eePr  d_r    ijd _d} e_ietg(n
aatubaccou hePtatubaccou htqMett U 'req  KDIok victubaccou heCtayydPie
an
"Ctaytt g  x oMed _pMen     r     euqpMen aRdi}  scSear     e p  S   > tt g  xIrigi  KDI   u_atubaccou h   di}  se
"CtayydPie
an
"CtayydPie
an
"CtayydPie
an
"CtayydPie
an
"CtayydPie
an
"CtayydPie
ane
an
"Ct   h't atFiydPie
an
"Ctayy S    h'  p  S    h' => atFiydPie
an
"CtayydPie
an
"CtayydPie
an
"Ctaytt g  x oMe  Men  d}    ' d}eBeta :,
 d  MenxRin  'rW0lj
),0tPd}    'rqpMen  d}    ' d}esc  Irigz ilePeweSubaccou hiqDI( u  Se'   *r llefscear     eePr  d_ieSubaccou hil Irigein  Ir Pr  d_r    ijdrsPietgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear r  d_r i    UaePr  d_ eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt  crI d_ie  Pietgfal  d}    'rIau_atn(_Satalt  ta u  'reqpSubaccou hiqDI( u  Se' e'(n
a g  o ts _atn
Pr  d_r   in  It gnytubaccou hpMRt  d_ietyp   MIed}  scSe_  al Irigee _atn
etubaccou h S"o'oa tgfaSI_}     e  => atFi  a Irimcy  '  MI  y creCtu/Ir r  bFiyd  di}  scSear  crI cr  MI  y creUaePr  diqpSubaccou htu/ieal Ir
 y crea t   'pubaccou hthrue'(n
ah'tgf_atn
ata 'rea Tp.y( A cal usatesePtal_atalle}    ''rqpMen  d}    ' d}esc  Irigz ilePeweSubaccou h  *r llefscear     eePr  eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt g Spubaccou hthrue'(n
a eePr  d_r    ijdrsPietgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = C bFiyd Pieal Ir
"e    UaePr  d_ eePr  d_r i    UaePr  d_ eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt  crI cr  MI  y creCtu/Ir r  bFiyd Pieal Ir
"e    UaePr  d_pubaccou he'(n
a g  o ts _atn
Pr  d_r   in  It gnytubaccou hpMetubaccou h S tt  crI cr  MI  y creCtu/Ir r  btt  crI cr  MI  y creCtu/Ir r  bFiyd  di}  scSear  crI cr  MI  y crea t   'pubaccou hthrue'(n
ah'tgf_atn
ata 'rea Tp.y( A cal usatesePtal_atalle}    ''rqpMen  d}    ' d}esc  Irigz ilePeweSubaccou h  *r llefscear     eePr  ar   ccSeP _atn
"       r     eePr  d_r    ijd pubaccou hthrue'(n
a eePr  d_r    ijdrsPietgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = CIr
"e    UaePr  d_ eePr  d_r i    UaePr  d_ eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt  crI ieriooige  Sbaeijd _  'pice_ scSea d_}  scSear   ccSeapubaccou he'(n
a getgfal  d}    ' 'p tFable umarker  dqDI( atn dlt   _atn
"  Ir}escear     er L> ate'path'  sEr eeeu/IaayydPie
an
"CtayydPit d     eePr  d_r    ijdrsPietgfal  y creClueeu/I 'p tFable umarker  dqDI(  Satalt   _atn
"  Irigeij 'p tFable umarker  dqDI(   nalt   _at=atalt   _a eeeu e_Mett g  (_in  Iriooi T'p tFable umarker  dqDI( an :,'reCn(_Satalt   Satalt   _atn
"r L> ate'path'g/IaayGety cr{oremarker  doige  ijd _pMe 'p tFable umarker  dqDI( Satn
"  r  d_ieriooige  Sbhiosmu_ad 'reqp  MI  y creCtu/Ir r  bFiyd  di}  scSear  crI cr  MI  y creUaePr  diqpRemarker  doige  ad U 'req    ' d 'rea Tp.y( A cal usatesePtal_atalle}    ''rqpMen  d}    ' d}esc  Irigz ilePeweT'p tFable umarker  dqDI(  *r llefscear     eePr  atal Irigein  Ir    eePr  d_r    ijdrsPietgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = Cn(_hiosmuy creCtt tFiyd Pieal Ir
"eE"e> cal u    Ol Ir
nyoSearD ddtFia g   'piydreCtt tFiyd Pieall u    Otgfa t   'piydmetg8'tn
"e> cal T'p tFable umarker  dqDI(e'(n
a g  o ts _atn
R  Ir}esziaoige  Sba 'p tFableoremarker  doige  lt   _atn
atalt   _a _atn
e 'p tFable umarker  dqDI( Sige T'p tFable umarker  dqDI( 
"  r  d_ieriooige  Sbhiosmu_ad 'reqp  MI  y creCtu/Ir r  bFiyd  di}  scSear  crI cr  MI  y creUaePr  dl Ir
nyoSeargi  KDI   u_a 'p tFableoremarker  doige  cr  MI 'p tFableoijdSee
"al Ir
nyoSes U 'req    ' d 'rea Tp.y( A cal usatesePtal_atalle}    'U 'req e
an
"Ctaytt g  xietg(l usatesePtal_atalle}   ijd _p  KDI   u_ad qpsydPAFtt _atn
e   KDIok vice
 "erviR>eqmcy  'remarker  doige  'reqcu(dpCtt ep  } b ijdiU 'reqd} e_ietgfaeecB (remarker  doige  '(nusatesePtaremarker  doige   U 'reqMett U 'req  KDIok vicremarker  doige   d}    ' d}eBeta :,ieecyhe_at=at _at=atalt   _U 'reqt=a 'ptmrr pTp.y( A 'ptCn(_   IrignPoSe'(n
aayydPitlnsd U 're Cn(_Seijd U 'req  'pice_ietge_ _icremarker  doige    eePr  d_r    ijd _d} e_ietg(n
aU 'reqremarker  doige  Ptaremarker  doige  qMett g  KDIok vicremarker  doige  CtayydPie
an
"Ctaytt g  x oMed _pMen     r     euqpMen aRdi}  scSear     e p  S   > e
an
"CtayydPie
an
"CtayydPie
an
"CtayydPie
an
"CtayydPie
ane
an
"Ct   h't atFiydPie
an
"Ctayy S    h'  p  S    h' => atFiydPie
an
"CtayydPie
an
"CtayydPie
an
"Ctaytt g  x oMe  Men  d}    ' d}eBeta :,
 d  MenxRin  'rW0lj
),0tPd}    're
an
"Ctay"    P   veD ddtFia g   P   veD  Ka'   inP   veD 'p tFableU 'reqremarker  doige e}    ''rqpMen  d}    ' d}esc  Irigz ilePeweT'p tFable umarker  dqDI(iqDI( u  Se'   *r llefscear     eePr  d_ieT'p tFable umarker  dqDI(il Irigein  Ir l Ir
nyoSear eePr  d_r    ijdrsPietgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = Cl Ir
nyoSear_Ol Irl Ir
nyoSearr  d_r i    UaePr  d_ eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt  crI d_ie  Pietgfal  d}    'rIau_atn(_Satalt  ta u  'reqpT'p tFable umarker  dqDI(iqDI( u  Se' e'(n
a getgfal  d}    '> MIPnyoSea atn dlt   _atn
"  Ir}escear     er L> ate'path'  sEr eeeu/IaayydPie
an
"CtayydPit d     eePr  d_r    ijdrsPietgfal  y creClueeu/I> MIPnyoSea  Satalt   _atn
"  Irigeij> MIPnyoSea   nalt   _at=atalt   _a eeeu e_Mett g  (_in  Iriooi U MIPnyoSea an :,'reCn(_Satalt   Satalt   _atn
"r L> ate'path'g/IaayGety cr{o> MI  y creCtijd _pMe> MIPnyoSea Satn
"  r  d_ieriooige  Sbhiosmu_ad 'reqp    > MI  y creCtu/ieal Ir
"e     'rea Tp.y( A cal usatesePtal_atalle}    ''rqpMen  d}    ' d}esc  Irigz ilePeweU MIPnyoSea  *r llefscear     eePr  atal Irigein  Ir Pr  d_r    ijdrsPietgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear r  d_r i    UaePr  d_ eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt  crI  tFiyd Pieall u    Otgfa t   'piydmetg8'tn
"e> cal U MIPnyoSeae'(n
a g  o ts _atn
"  Ir}esziige  an
> MI  y creC  g  yhe> MIpMe> MIPnyoSea Sige U MIPnyoSea 
"  r  d_ieriooige  'rea Tp.y( A cal usatesePtal_atalle}    ''rqpMen  d}    ' d}esc  Irigz ilePeweU MIPnyoSeaqDI(  *r llefscear     eePr  ige U MIPnyoSea ( Pr  d_r    ijdrsPietgfal  y creClue  y eal Irr  d_r i    UaePr  d_ eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt  crI d_ie  Pietgfal  d}    'rIau_atn(_Satalt  ta u  'reqpU MIPnyoSeaqDI(e'(n
a getgfal  d}    '> MIRolePermissir Group atn dlt   _atn
"  Ir}escear     er L> ate'path'  sEr eeeu/IaayydPie
an
"CtayydPit d     eePr  d_r    ijdrsPietgfal  y creClueeu/I> MIRolePermissir Group  Satalt   _atn
"  Irigeij> MIRolePermissir Group   nalt   _at=atalt   _a eeeu e_Mett g  (_in  Iriooi U MIRolePermissir Group an :,'reCn(_Satalt   Satalt   _atn
"r L> ate'path'g/IaayGety cr{o> MI role  ermissir  grouptijd _pMe> MIRolePermissir Group Satn
"  r  d_ieriooige  Sbhiosmu_ad 'reqp  MI  y creCtu/Ir r  bFiyd  di}  scSear  crI cr  MI  y creUaePr  diqp  MI role  ermissir  grouptu/ieal Ir
"e     'rea Tp.y( A cal usatesePtal_atalle}    ''rqpMen  d}    ' d}esc  Irigz ilePeweU MIRolePermissir Group  *r llefscear     eePr  atal Irigein  Ir    eePr  d_r    ijdrsPietgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = Cn(_hiosmuy creCtt tFiyd Pieal Ir
"eE"e> cal u    Ol Ir
nyoSearD ddtFia g   'piydreCtt tFiyd Pieall u    Otgfa t   'piydmetg8'tn
"e> cal U MIRolePermissir Groupe'(n
a g  o ts _atn
Gety aoige  SbareC   MIed}erD> MI role  ermissir  groupee _atn
e> MIRolePermissir Group Sige U MIRolePermissir Group 
"  r  d_ieriooige  Sbhiosmu_ad 'reqp  MI  y creCtu/Ir r  bFiyd  di}  scSear  crI cr  MI  y cre 'rea Tp.y( A cal usatesePtal_atalle}    ''rqpMen  d}    ' d}esc  Irigz ilePeweU MIRolePermissir GroupiqDI( u  Se'   *r llefscear     eePr  d_ieU MIRolePermissir Groupil Irigein  Ir Pr  d_r    ijdrsPietgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear r  d_r i    UaePr  d_ eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt  crI d_ie  Pietgfal  d}    'rIau_atn(_Satalt  ta u  'reqpU MIRolePermissir GroupiqDI( u  Se' e'(n
a getgfal  d}    '> MIRolePermissir  atn dlt   _atn
"  Ir}escear     er L> ate'path'  sEr eeeu/IaayydPie
an
"CtayydPit d     eePr  d_r    ijdrsPietgfal  y creClueeu/I> MIRolePermissir   Satalt   _atn
"  Irigeij> MIRolePermissir    nalt   _at=atalt   _a eeeu e_Mett g  (_in  Iriooi U MIRolePermissir  an :,'reCn(_Satalt   Satalt   _atn
"r L> ate'path'g/IaayGety cr{o> MI role  ermissir  ijd _pMe> MIRolePermissir  Satn
"  r  d_ieriooige  Sbhiosmu_ad 'reqp  MI  y creCtu/Ir r  bFiyd  di}  scSear  crI cr  MI  y creUaePr  diqp  MI role  ermissir  u/ieal Ir
"e     'rea Tp.y( A cal usatesePtal_atalle}    ''rqpMen  d}    ' d}esc  Irigz ilePeweU MIRolePermissir   *r llefscear     eePr  atal Irigein  Ir    eePr  d_r    ijdrsPietgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = Cn(_hiosmuy creCtt tFiyd Pieal Ir
"eE"e> cal u    Ol Ir
nyoSearD ddtFia g   'piydreCtt tFiyd Pieall u    Otgfa t   'piydmetg8'tn
"e> cal U MIRolePermissir e'(n
a g  o ts _atn
Gety aoige  Sba> MI role  ermissir  lt   _atn
atalt   _a _atn
e> MIRolePermissir  Sd_ieU MIRolePermissir  
"  r  d_ieriooige  Sbhiosmu_ad 'reqp  MI  y creCtu/Ir r  bFiyd  di}  scSear  crI cr  MI  y cre 'rea Tp.y( A cal usatesePtal_atalle}    'cr  MI e
an
"Ctaytt g  xIrigi  KDI   u_a> MI role  ermissir    di}  se
"CtayydPie
anqpMen  d}    ' d}esc  Irigz ilePeweU MIRolePermissir iqDI( u  Se'   *r llefscear     eePr  d_ieU MIRolePermissir il Irigein  Ir Pr  d_r    ijdrsPietgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear r  d_r i    UaePr  d_ eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt  crI d_ie  Pietgfal  d}    'rIau_atn(_Satalt  ta u  'reqpU MIRolePermissir iqDI( u  Se' e'(n
a getgfal  d}    '> MIRole atn dlt   _atn
"  Ir}escear     er L> ate'path'  sEr eeeu/IaayydPie
an
"CtayydPit d     eePr  d_r    ijdrsPietgfal  y creClueeu/I> MIRole  Satalt   _atn
"  Irigeij> MIRole   nalt   _at=atalt   _a eeeu e_Mett g  (_in  Iriooi U MIRole an :,'reCn(_Satalt   Satalt   _atn
"r L> ate'path'g/IaayydPiecyhe in  It gny> MI rolepMe> MIRole fatalt   _at r L> ate'path'g/IaayydPi:(_in    MI  y creCtu/Ir r  bFiyd  di}  scSear  crI cr  MI  y creUaePr  diqp  MI role u/ieal Ir
"e     'rea Tp.y( A cal usatesePtal_atalle}    'ge  Sbaei  u_ad U 'reqpsydPietiin
"  Iri   eePr  d_r    ijdrsPietgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = Cn(_hiosmuy creCtt tFiyd Pieal Ir
"eE"e> cal u    Ol Ir
nyoSearD ddtFia g   'piydreCttlt   _atn
"  Iri r     eePr mr  d_ieriooigGety cr{o> MI role ijd _pMe> MIRole Satn
"  r  d_ieriooige  Sbhiosmu_ad 'reqp  MI  y creCtu/Ir r  bFiyd  di}  scSear  crI cr  MI  y creUaePr  diqp  MI role u/ieal Ir
"e     'rea Tp.y( A cal usatesePtal_atalle}    'anqpMen  d}    ' d}esc  Irigz ilePeweU MIRole    'ge  Sbaei  u_ad U 'ratal Irigein  Ir    eePr  d_r    ijdrsPietgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = Cn(_hiosmuy creCtt tFiyd Pieal Ir
"eE"e> cal u    Ol Ir
nyoSearD ddtFia g   'piydreCtt tFiyd Pieall u    Otgfa t   'piydmetg8'tn
"e> cal U MIRolee'(n
a g  o ts _atn
y creClueeu/Ia> MI rolepMe> MIRole fear  dearyn _ m_r  age  Sbaei  u_ad U 'reqp  MI  y creCtu/Ir r  bFiyd  di}  scSear  crI cr  MI  y crea t   'U MIRole hrue'(n
ah'tgf_atn
ata 'rea Tp.y( A cal usatesePtal_atalle}    ''rqpMen  d}    ' d}esc  Irigz ilePeweU MIRole    'ge  Sbaei  u_ad U 'r 'rIau_ad Umrr  dgdn natn dlt   _atn
"  Ir}esziU MIRole hrue'(n
a eePr  d_r    ijdrsPietgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = CIr
"e    UaePr  d_ eePr  d_r i    UaePr  d_ eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt  crI n mtFi  Pietgfal  d}    'rIau_atn(_Satalt  ta u  'reqpU MIRolee'(n
a g  o ts _atn
R  Ir}esziaoige  Sba> MI role lt   _atn
atalt   _aMe> MIRole fd_ieU MIRole 
"  r  d_ieriooige  Sbhiosmu_ad 'reqp  MI  y creCtu/Ir r  bFiyd  di}  scSear  crI cr  MI  y cre 'rea Tp.y( A cal usatesePtal_atalle}    'cr  MI e
an
"Ctaytt g  x ' :    ' Fcal usatesePtal_atalle}   ijd _p  KDI   u_ad U 'reqpsydPAFtt g   KDIok vice
 "erviR>eqmcy  '> MIrole 'reqcu(dpCtt ep  } b ijdiU 'reqd} e_ietgfaeecB (> MIrole '(nusatesePta> MIrole  U 'reqMett g  KDIok vU 'reqa> MIrole  d}    ' d}eBeta :,ieecyhe_at=at _at=atalt   _at=a 'ptmrr_kTp.y(U 'reqA 'ptCn(_   IrignPoSe'(n
aayydPitlnsd U 're Cn(_Seijd _  'pice_ietge_ _U 'reqa> MIrole   eePr  d_r    ijd _d} e_ietg(n
a > MIrole ,qa> MIrole  d}   g  U 'reqAIok vic> MIrole .cr  MI e
an
"Ctaytt g  x ubaccou hargi  KDI   u_a> MI role  'piydbe p EPie
 scSU 'reqAubaccou hpcr  MI e
an
"Ctaytt g  x oMed _pMen     r     euqpMen aRdi}  scSear     e p  S   > tt g  xIrigi  KDI   u_a> MI role   di}  se dpt ifiyd tayydPie
an
"CtayydPie
an
"CtayydPie
an
"CtayydPie
an
"CtayydPie
an
"CtayydPie
ane
an
"Ct   h't atFiydPie
an
"Ctayy S    h'  p  S    h' => atFiydPie
an
"CtayydPie
an
"CtayydPie
an
"Ctaytt g  x oMe  Men  d}    ' d}eBeta :,
 d  MenxRin  'rW0lj
),0tPd}    're
an
"Ctay"    accou hU MIRoleO u_a ddtFia g   P cou htl}esla> MI role  nottayydPr r  bFiyd  di} any dpt ificqAubaccou hpcr  MI qpMen  d}    ' d}esc  Irigz ilePeweU MIRoleiqDI( u  Se'   *r llefscear     eePr  d_ieU MIRoleil Irigein  Ir Pr  d_r    ijdrsPietgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear r  d_r i    UaePr  d_ eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt  crI d_ie  Pietgfal  d}    'rIau_atn(_Satalt  ta u  'reqpU MIRoleiqDI( u  Se' e'(n
a g  o ts _atn
Pr  d_r   in  It gny> MI rolepMRt  d_ietyp   MIed}  scSe_  al Irigee _atn
e> MIRole f"o'oa tgfaSI_}     e  => atFi  a Irimcy  '  MI  y creCtu/Ir r  bFiyd  di}  scSear  crI cr  MI  y creUaePr  diqp  MI role u/ieal Ir
"e    a t   'U MIRole hrue'(n
ah'tgf_atn
ata 'rea Tp.y( A cal usatesePtal_atalle}    ''rqpMen  d}    ' d}esc  Irigz ilePeweU MIRole    'ge  Sbaei  u_ad U 'reePr  d_r   in  It gnyoSearD di} r  d_r  l u tt g SU MIRole hrue'(n
a eePr  d_r    ijdrsPietgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = C bFiyd Pieal Ir
"e    UaePr  d_ eePr  d_r i    UaePr  d_ eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt  crI cr  MI  y creCtu/Ir r  bFiyd Pieal Ir
"e    UaePr  d_U MIRolee'(n
a g  o ts _atn
Pr  d_r   in  It gny> MI rolepMe> MIRole f tt  crI cr  MI  y creCtu/Ir r  btt  crI cr  MI  y creCtu/Ir r  bFiyd  di}  scSear  crI cr  MI  y crea t   'U MIRole hrue'(n
ah'tgf_atn
ata 'rea Tp.y( A cal usatesePtal_atalle}    ''rqpMen  d}    ' d}esc  Irigz ilePeweU MIRole    'ge  Sbaei  u_ad U 'rar   ccSeP _atn
"       r     eePr  d_r    ijd U MIRole hrue'(n
a eePr  d_r    ijdrsPietgfal  y creClue  y eal Ir  Sbhiosmu_Ol Ir
nyoSear = CIr
"e    UaePr  d_ eePr  d_r i    UaePr  d_ eePr  d_r   in  It gnyoSearD di} r  d_r  l u tt  crI ieriooige  Sbaeijd _  'pice_ scSea d_}  scSear   ccSeaU MIRolee'(n
a g g       _a eeeu e_Mett g  (_in  Iriooi A cou ht(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'availablePermissir Ids';  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $accou hPermissir Ids(n
aSbaei  $accou hPnyoSea(n
aSbaei  $ac  ve(n
aSbaei  $ac  veAdiqDmitTier(n
aSbaei  $ac  veView usOut(n
aSbaei  $availablePermissir Ids(n
aSbaei  $comscoreVceEnabled(n
aSbaei  $cou hryId(n
aSbaei  $currencyId(n
aSbaei  $enxRin Creae veSiztId(n
aSbaei  $enscriusate(n
aSbaei  $id(n
aSbaei  $kind(n
aSbaei  $lo  ce(n
aSbaei  $man
"CtImn
"Sizt(n
aSbaei  $ietg(n
aSbaei  $i   senOcrEnabled(n
aSnyteFieta$n  IrisConfigurasateTyp d  'eeeu e_Mett g  (_in  Iriooi R  IrisConfigurasate';  y
nyteFieta$n  IrisConfigurasateDataTyp d  ''(n
aSbaei  $tea MISiztqDmit;

e  Sbaei  u_ad U 'rsetAccou hPermissir Ids($accou hPermissir Idstgfal  y crl u ttaccou hPermissir Ids Sataccou hPermissir Ids(n
a}e  Sbaei  u_ad U 'rgetAccou hPermissir Ids(tgfal  y cr  d_r  l u ttaccou hPermissir Ids(n
a}e  Sbaei  u_ad U 'rsetAccou hPnyoSea($accou hPnyoSeatgfal  y crl u ttaccou hPy creCt= $accou hPnyoSea(n
a}e  Sbaei  u_ad U 'rgetAccou hPnyoSea(tgfal  y cr  d_r  l u ttaccou hPnyoSea(n
a}e  Sbaei  u_ad U 'rsetAce ve($ac  vetgfal  y crl u ttac  veD= $ac  ve(n
a}e  Sbaei  u_ad U 'rgetAce ve(tgfal  y cr  d_r  l u ttac  ve(n
a}e  Sbaei  u_ad U 'rsetAce veAdiqDmitTier($ac  veAdiqDmitTiertgfal  y crl u ttac  veAdiqDmitTierD= $ac  veAdiqDmitTier(n
a}e  Sbaei  u_ad U 'rgetAce veAdiqDmitTier(tgfal  y cr  d_r  l u ttac  veAdiqDmitTier(n
a}e  Sbaei  u_ad U 'rsetAce veView usOut($ac  veView usOuttgfal  y crl u ttac  veView usOutD= $ac  veView usOut(n
a}e  Sbaei  u_ad U 'rgetAce veView usOut(tgfal  y cr  d_r  l u ttac  veView usOut(n
a}e  Sbaei  u_ad U 'rsetAvailablePermissir Ids($availablePermissir Idstgfal  y crl u ttavailablePermissir IdsD= $availablePermissir Ids(n
a}e  Sbaei  u_ad U 'rgetAvailablePermissir Ids(tgfal  y cr  d_r  l u ttavailablePermissir Ids(n
a}e  Sbaei  u_ad U 'rsetComscoreVceEnabled($comscoreVceEnabledtgfal  y crl u ttcomscoreVceEnabledD= $comscoreVceEnabled(n
a}e  Sbaei  u_ad U 'rgetComscoreVceEnabled(tgfal  y cr  d_r  l u ttcomscoreVceEnabled(n
a}e  Sbaei  u_ad U 'rsetCou hryId($cou hryIdtgfal  y crl u ttcou hryIdD= $cou hryId(n
a}e  Sbaei  u_ad U 'rgetCou hryId(tgfal  y cr  d_r  l u ttcou hryId(n
a}e  Sbaei  u_ad U 'rsetCurrencyId($currencyIdtgfal  y crl u ttcurrencyIdD= $currencyId(n
a}e  Sbaei  u_ad U 'rgetCurrencyId(tgfal  y cr  d_r  l u ttcurrencyId(n
a}e  Sbaei  u_ad U 'rsetDnxRin Creae veSiztId($enxRin Creae veSiztIdtgfal  y crl u ttenxRin Creae veSiztId SatanxRin Creae veSiztId(n
a}e  Sbaei  u_ad U 'rgetDnxRin Creae veSiztId(tgfal  y cr  d_r  l u ttanxRin Creae veSiztId(n
a}e  Sbaei  u_ad U 'rsetDnscriusate($enscriusatetgfal  y crl u ttenscriusate Satanscriusate(n
a}e  Sbaei  u_ad U 'rgetDnscriusate(tgfal  y cr  d_r  l u ttanscriusate(n
a}e  Sbaei  u_ad U 'rsetId($idtgfal  y crl u ttid Satid(n
a}e  Sbaei  u_ad U 'rgetId(tgfal  y cr  d_r  l u ttid(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetLo  ce($lo  cetgfal  y crl u ttlo  ce Satlo  ce(n
a}e  Sbaei  u_ad U 'rgetLo  ce(tgfal  y cr  d_r  l u ttlo  ce(n
a}e  Sbaei  u_ad U 'rsetMan
"CtImn
"Sizt($man
"CtImn
"Sizttgfal  y crl u ttman
"CtImn
"Sizt Satman
"CtImn
"Sizt(n
a}e  Sbaei  u_ad U 'rgetMan
"CtImn
"Sizt(tgfal  y cr  d_r  l u ttman
"CtImn
"Sizt(n
a}e  Sbaei  u_ad U 'rsetNDI ($ietgtgfal  y crl u ttietg(= $ietg(n
a}e  Sbaei  u_ad U 'rgetNDI (tgfal  y cr  d_r  l u ttietg(n
a}e  Sbaei  u_ad U 'rsetN   senOcrEnabled($i   senOcrEnabledtgfal  y crl u tti   senOcrEnabled(= $i   senOcrEnabled(n
a}e  Sbaei  u_ad U 'rgetN   senOcrEnabled(tgfal  y cr  d_r  l u tti   senOcrEnabled(n
a}e  Sbaei  u_ad U 'rsetR  IrisConfigurasate(eeeu e_Mett g  (_in  Iriooi R  IrisConfigurasatea$n  IrisConfigurasatetgfal  y crl u ttn  IrisConfigurasate(= $n  IrisConfigurasate(n
a}e  Sbaei  u_ad U 'rgetR  IrisConfigurasate(tgfal  y cr  d_r  l u ttn  IrisConfigurasate(n
a}e  Sbaei  u_ad U 'rsetTea MISiztqDmit($tea MISiztqDmittgfal  y crl u tttea MISiztqDmit(= $tea MISiztqDmit;

a}e  Sbaei  u_ad U 'rgetTea MISiztqDmit(tgfal  y cr  d_r  l u tttea MISiztqDmit;

a}e}     _a eeeu e_Mett g  (_in  Iriooi A cou hAce veAdSummaryt(_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $accou hId(n
aSbaei  $ac  veAdi(n
aSbaei  $ac  veAdiqDmitTier(n
aSbaei  $availableAdi(n
aSbaei  $kind(n
e  Sbaei  u_ad U 'rsetAccou hId($accou hIdtgfal  y crl u ttaccou harg= $accou hId(n
a}e  Sbaei  u_ad U 'rgetAccou hId(tgfal  y cr  d_r  l u ttaccou hId(n
a}e  Sbaei  u_ad U 'rsetAce veAdi($ac  veAditgfal  y crl u ttac  veAds Satac  veAdi(n
a}e  Sbaei  u_ad U 'rgetAce veAds(tgfal  y cr  d_r  l u ttac  veAdi(n
a}e  Sbaei  u_ad U 'rsetAce veAdiqDmitTier($ac  veAdiqDmitTiertgfal  y crl u ttac  veAdiqDmitTierD= $ac  veAdiqDmitTier(n
a}e  Sbaei  u_ad U 'rgetAce veAdiqDmitTier(tgfal  y cr  d_r  l u ttac  veAdiqDmitTier(n
a}e  Sbaei  u_ad U 'rsetAvailableAdi($availableAditgfal  y crl u ttavailableAdiD= $availableAdi(n
a}e  Sbaei  u_ad U 'rgetAvailableAdi(tgfal  y cr  d_r  l u ttavailableAdi(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi A cou hPermissir t(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'accou hPnyoSeas';  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $accou hPnyoSeas(n
aSbaei  $id(n
aSbaei  $kind(n
aSbaei  $l}esl(n
aSbaei  $ietg(n
aSbaei  $ ermissir GroupId(n
e  Sbaei  u_ad U 'rsetAccou hPnyoSeas($accou hPnyoSeastgfal  y crl u ttaccou hPnyoSeast= $accou hPnyoSeas(n
a}e  Sbaei  u_ad U 'rgetAccou hPnyoSeas(tgfal  y cr  d_r  l u ttaccou hPnyoSeas(n
a}e  Sbaei  u_ad U 'rsetId($idtgfal  y crl u ttid Satid(n
a}e  Sbaei  u_ad U 'rgetId(tgfal  y cr  d_r  l u ttid(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetL}esl($l}esltgfal  y crl u ttl}esla= $l}esl(n
a}e  Sbaei  u_ad U 'rgetL}esl(tgfal  y cr  d_r  l u ttl}esl(n
a}e  Sbaei  u_ad U 'rsetNDI ($ietgtgfal  y crl u ttietg(= $ietg(n
a}e  Sbaei  u_ad U 'rgetNDI (tgfal  y cr  d_r  l u ttietg(n
a}e  Sbaei  u_ad U 'rsetPermissir GroupId($ ermissir GroupIdtgfal  y crl u tt ermissir GroupId(= $ ermissir GroupId(n
a}e  Sbaei  u_ad U 'rgetPermissir GroupId(tgfal  y cr  d_r  l u tt ermissir GroupId(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi A cou hPermissir Groupt(_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $id(n
aSbaei  $kind(n
aSbaei  $ietg(n
e  Sbaei  u_ad U 'rsetId($idtgfal  y crl u ttid Satid(n
a}e  Sbaei  u_ad U 'rgetId(tgfal  y cr  d_r  l u ttid(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetNDI ($ietgtgfal  y crl u ttietg(= $ietg(n
a}e  Sbaei  u_ad U 'rgetNDI (tgfal  y cr  d_r  l u ttietg(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi A cou hPermissir GroupsqDI( u  Se' t(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'accou hPermissir Groups';  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSnyteFieta$accou hPermissir GroupsTyp d  'eeeu e_Mett g  (_in  Iriooi A cou hPermissir Group';  y
nyteFieta$accou hPermissir GroupsDataTyp d  'eal I'(n
aSbaei  $kind(n
e  Sbaei  u_ad U 'rsetAccou hPermissir Groups($accou hPermissir Group 
"  l  y crl u ttaccou hPermissir Group t= $accou hPermissir Group (n
a}e  Sbaei  u_ad U 'rgetAccou hPermissir Groups(tgfal  y cr  d_r  l u ttaccou hPermissir Group (n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi A cou hPermissir sqDI( u  Se' t(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'accou hPermissir s';  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSnyteFieta$accou hPermissir sTyp d  'eeeu e_Mett g  (_in  Iriooi A cou hPermissir ';  y
nyteFieta$accou hPermissir sDataTyp d  'eal I'(n
aSbaei  $kind(n
e  Sbaei  u_ad U 'rsetAccou hPermissir s($accou hPermissir  
"  l  y crl u ttaccou hPermissir  t= $accou hPermissir  (n
a}e  Sbaei  u_ad U 'rgetAccou hPermissir s(tgfal  y cr  d_r  l u ttaccou hPermissir  (n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi A cou hU MIPy creCt(_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $accou hId(n
aSbaei  $ac  ve;  y
nyteFieta$a Ir
nyoSeFalt  Typ d  'eeeu e_Mett g  (_in  Iriooi O  ijdFalt  ';  y
nyteFieta$a Ir
nyoSeFalt  DataTyp d  ''(n
aSnyteFieta$n ep   MFalt  Typ d  'eeeu e_Mett g  (_in  Iriooi O  ijdFalt  ';  y
nyteFieta$n ep   MFalt  DataTyp d  ''(n
aSbaei  $com   hs(n
aSbaei  $email(n
aSbaei  $id(n
aSbaei  $kind(n
aSbaei  $lo  ce(n
aSbaei  $ietg(n
aSnyteFieta$tayyFalt  Typ d  'eeeu e_Mett g  (_in  Iriooi O  ijdFalt  ';  y
nyteFieta$tayyFalt  DataTyp d  ''(n
aSbaei  $ ubaccou har(n
aSbaei  $traffick  Typ (n
aSbaei  $> MIA cessTyp (n
aSnyteFieta$> MIRoleFalt  Typ d  'eeeu e_Mett g  (_in  Iriooi O  ijdFalt  ';  y
nyteFieta$> MIRoleFalt  DataTyp d  ''(n
aSbaei  $> MIRoleId(n
e  Sbaei  u_ad U 'rsetAccou hId($accou hIdtgfal  y crl u ttaccou harg= $accou hId(n
a}e  Sbaei  u_ad U 'rgetAccou hId(tgfal  y cr  d_r  l u ttaccou hId(n
a}e  Sbaei  u_ad U 'rsetAce ve($ac  vetgfal  y crl u ttac  veD= $ac  ve(n
a}e  Sbaei  u_ad U 'rgetAce ve(tgfal  y cr  d_r  l u ttac  ve(n
a}e  Sbaei  u_ad U 'rsetA Ir
nyoSeFalt  (eeeu e_Mett g  (_in  Iriooi O  ijdFalt  a$a Ir
nyoSeFalt  tgfal  y crl u tta Ir
nyoSeFalt  D= $a Ir
nyoSeFalt  (n
a}e  Sbaei  u_ad U 'rgetA Ir
nyoSeFalt  (tgfal  y cr  d_r  l u tta Ir
nyoSeFalt  (n
a}e  Sbaei  u_ad U 'rsetC ep   MFalt  (eeeu e_Mett g  (_in  Iriooi O  ijdFalt  a$n ep   MFalt  tgfal  y crl u ttn ep   MFalt  D= $n ep   MFalt  (n
a}e  Sbaei  u_ad U 'rgetC ep   MFalt  (tgfal  y cr  d_r  l u ttn ep   MFalt  (n
a}e  Sbaei  u_ad U 'rsetCom   hs($com   hstgfal  y crl u ttnom   hsD= $nom   hs(n
a}e  Sbaei  u_ad U 'rgetCom   hs(tgfal  y cr  d_r  l u ttnom   hs(n
a}e  Sbaei  u_ad U 'rsetEmail($emailtgfal  y crl u ttemailD= $email(n
a}e  Sbaei  u_ad U 'rgetEmail(tgfal  y cr  d_r  l u ttemail(n
a}e  Sbaei  u_ad U 'rsetId($idtgfal  y crl u ttid Satid(n
a}e  Sbaei  u_ad U 'rgetId(tgfal  y cr  d_r  l u ttid(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetLo  ce($lo  cetgfal  y crl u ttlo  ce Satlo  ce(n
a}e  Sbaei  u_ad U 'rgetLo  ce(tgfal  y cr  d_r  l u ttlo  ce(n
a}e  Sbaei  u_ad U 'rsetNDI ($ietgtgfal  y crl u ttietg(= $ietg(n
a}e  Sbaei  u_ad U 'rgetNDI (tgfal  y cr  d_r  l u ttietg(n
a}e  Sbaei  u_ad U 'rsetSayyFalt  (eeeu e_Mett g  (_in  Iriooi O  ijdFalt  a$tayyFalt  tgfal  y crl u tttayyFalt  (= $tayyFalt  (n
a}e  Sbaei  u_ad U 'rgetSayyFalt  (tgfal  y cr  d_r  l u tttayyFalt  (n
a}e  Sbaei  u_ad U 'rsetSubaccou har($ ubaccou hartgfal  y crl u tttubaccou harg= $ ubaccou har(n
a}e  Sbaei  u_ad U 'rgetSubaccou har(tgfal  y cr  d_r  l u tttubaccou har(n
a}e  Sbaei  u_ad U 'rsetTraffick  Typ ($traffick  Typ tgfal  y crl u tttraffick  Typ g= $traffick  Typ (n
a}e  Sbaei  u_ad U 'rgetTraffick  Typ (tgfal  y cr  d_r  l u tttraffick  Typ (n
a}e  Sbaei  u_ad U 'rsetU MIA cessTyp ($> MIA cessTyp tgfal  y crl u tt> MIA cessTyp g= $> MIA cessTyp (n
a}e  Sbaei  u_ad U 'rgetU MIA cessTyp (tgfal  y cr  d_r  l u tt> MIA cessTyp (n
a}e  Sbaei  u_ad U 'rsetU MIRoleFalt  (eeeu e_Mett g  (_in  Iriooi O  ijdFalt  a$> MIRoleFalt  tgfal  y crl u tt> MIRoleFalt  g= $> MIRoleFalt  (n
a}e  Sbaei  u_ad U 'rgetU MIRoleFalt  (tgfal  y cr  d_r  l u tt> MIRoleFalt  (n
a}e  Sbaei  u_ad U 'rsetU MIRolear($> MIRoleIdtgfal  y crl u tt> MIRolearg= $> MIRoleId(n
a}e  Sbaei  u_ad U 'rgetU MIRolear(tgfal  y cr  d_r  l u tt> MIRoleId(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi A cou hU MIPy creCsqDI( u  Se' t(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'accou hU MIPy creCs';  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSnyteFieta$accou hU MIPy creCsTyp d  'eeeu e_Mett g  (_in  Iriooi A cou hU MIPy creC';  y
nyteFieta$accou hU MIPy creCsDataTyp d  'eal I'(n
aSbaei  $kind(n
aSbaei  $  h'  p  S   (n
e  Sbaei  u_ad U 'rsetAccou hU MIPy creCs($accou hU MIPy creCstgfal  y crl u ttaccou hU MIPy creCsg= $accou hU MIPy creCs(n
a}e  Sbaei  u_ad U 'rgetAccou hU MIPy creCs(tgfal  y cr  d_r  l u ttaccou hU MIPy creCs(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetN h'  p  S   ($  h'  p  S   tgfal  y crl u tti h'  p  S    = $  h'  p  S   (n
a}e  Sbaei  u_ad U 'rgetN h'  p  S   (tgfal  y cr  d_r  l u tti h'  p  S   (n
a}e}     _a eeeu e_Mett g  (_in  Iriooi A cou hsqDI( u  Se' t(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'accou hs';  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSnyteFieta$accou hsTyp d  'eeeu e_Mett g  (_in  Iriooi A cou h';  y
nyteFieta$accou hsDataTyp d  'eal I'(n
aSbaei  $kind(n
aSbaei  $  h'  p  S   (n
e  Sbaei  u_ad U 'rsetAccou hs($accou hstgfal  y crl u ttaccou hsg= $accou hs(n
a}e  Sbaei  u_ad U 'rgetAccou hs(tgfal  y cr  d_r  l u ttaccou hs(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetN h'  p  S   ($  h'  p  S   tgfal  y crl u tti h'  p  S    = $  h'  p  S   (n
a}e  Sbaei  u_ad U 'rgetN h'  p  S   (tgfal  y cr  d_r  l u tti h'  p  S   (n
a}e}     _a eeeu e_Mett g  (_in  Iriooi A tivitiCsg(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'm  IrcNDI s';  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSnyteFieta$falt  sTyp d  'eeeu e_Mett g  (_in  Iriooi Di   sir an
"C';  y
nyteFieta$falt  sDataTyp d  'eal I'(n
aSbaei  $kind(n
aSbaei  $m  IrcNDI s(n
e  Sbaei  u_ad U 'rsetFalt  s($falt  stgfal  y crl u ttfalt  s = $falt  s(n
a}e  Sbaei  u_ad U 'rgetFalt  s(tgfal  y cr  d_r  l u ttfalt  s(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetM  IrcNDI s($m  IrcNDI stgfal  y crl u ttm  IrcNDI s Satm  IrcNDI s(n
a}e  Sbaei  u_ad U 'rgetM  IrcNDI s(tgfal  y cr  d_r  l u ttm  IrcNDI s(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi Adg(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'place   hAssign   hs';  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  yyyyyyycremarker  dqDI(Expressir "UaePcremarker  d_d_ie_expressir ",
 y'(n
aSbaei  $accou hId(n
aSbaei  $ac  ve;  y
baei  $a Ir
nyoSear;  y
nyteFieta$a Ir
nyoSearDi   sir an
"CTyp d  'eeeu e_Mett g  (_in  Iriooi Di   sir an
"C';  y
nyteFieta$a Ir
nyoSearDi   sir an
"CDataTyp d  ''(n
aSbaei  $Ptal_ved(n
aSbaei  $audienceSeg   hId(n
aSbaei  $n ep   Mar;  y
nyteFieta$n ep   MarDi   sir an
"CTyp d  'eeeu e_Mett g  (_in  Iriooi Di   sir an
"C';  y
nyteFieta$n ep   MarDi   sir an
"CDataTyp d  ''(n
aSnyteFieta$nei kThroughUrlTyp d  'eeeu e_Mett g  (_in  Iriooi Cei kThroughUrl'(n
aSnyteFieta$nei kThroughUrlDataTyp d  ''(n
aSnyteFieta$nei kThroughUrlSuffixPy pr
nyCsTyp d  'eeeu e_Mett g  (_in  Iriooi Cei kThroughUrlSuffixPy pr
nyCs'(n
aSnyteFieta$nei kThroughUrlSuffixPy pr
nyCsDataTyp d  ''(n
aSbaei  $com   hs(n
aSbaei  $compatibility(n
aSnyteFieta$nreaeeInfoTyp d  'eeeu e_Mett g  (_in  Iriooi LastModifiydInfo'(n
aSnyteFieta$nreaeeInfoDataTyp d  ''(n
aSnyteFieta$nreae veGroupAssign   hsTyp d  'eeeu e_Mett g  (_in  Iriooi Creae veGroupAssign   h'(n
aSnyteFieta$nreae veGroupAssign   hsDataTyp d  'eal I'(n
aSnyteFieta$nreae veRotasateTyp d  'eeeu e_Mett g  (_in  Iriooi Creae veRotasate'(n
aSnyteFieta$nreae veRotasateDataTyp d  ''(n
aSnyteFieta$dayPareT'p tFooiTyp d  'eeeu e_Mett g  (_in  Iriooi DayPareT'p tFooi'(n
aSnyteFieta$dayPareT'p tFooiDataTyp d  ''(n
aSnyteFieta$dnxRin Cei kThroughEv  hTagPy pr
nyCsTyp d  'eeeu e_Mett g  (_in  Iriooi DnxRin Cei kThroughEv  hTagPy pr
nyCs'(n
aSnyteFieta$dnxRin Cei kThroughEv  hTagPy pr
nyCsDataTyp d  ''(n
aSnyteFieta$dnl verySchedulCTyp d  'eeeu e_Mett g  (_in  Iriooi Dnl verySchedulC'(n
aSnyteFieta$dnl verySchedulCDataTyp d  ''(n
aSbaei  $dynamicCei kTrack  (n
aSbaei  $ataTitg(n
aSnyteFieta$ev  hTagOverridCsTyp d  'eeeu e_Mett g  (_in  Iriooi Ev  hTagOverridC'(n
aSnyteFieta$ev  hTagOverridCsDataTyp d  'eal I'(n
aSnyteFieta$geoT'p tFooiTyp d  'eeeu e_Mett g  (_in  Iriooi GeoT'p tFooi'(n
aSnyteFieta$geoT'p tFooiDataTyp d  ''(n
aSbaei  $ir;  y
nyteFieta$irDi   sir an
"CTyp d  'eeeu e_Mett g  (_in  Iriooi Di   sir an
"C';  y
nyteFieta$irDi   sir an
"CDataTyp d  ''(n
aSnyteFieta$keyan
"CT'p tFooiExpressir Typ d  'eeeu e_Mett g  (_in  Iriooi Keyan
"CT'p tFooiExpressir '(n
aSnyteFieta$keyan
"CT'p tFooiExpressir DataTyp d  ''(n
aSbaei  $kind(n
aSnyteFieta$lastModifiydInfoTyp d  'eeeu e_Mett g  (_in  Iriooi LastModifiydInfo'(n
aSnyteFieta$lastModifiydInfoDataTyp d  ''(n
aSbaei  $ietg(n
aSnyteFieta$place   hAssign   hsTyp d  'eeeu e_Mett g  (_in  Iriooi Place   hAssign   h'(n
aSnyteFieta$place   hAssign   hsDataTyp d  'eal I'(n
aSnyteFieta$remarker  dqDI(Expressir Typ d  'eeeu e_Mett g  (_in  Iriooi qDI(T'p tFooiExpressir '(n
aSnyteFieta$remarker  dqDI(Expressir DataTyp d  ''(n
aSnyteFieta$sizCTyp d  'eeeu e_Mett g  (_in  Iriooi Sizt'(n
aSnyteFieta$sizCDataTyp d  ''(n
aSbaei  $ slCo=a 'ant(n
aSbaei  $ slRequired(n
aSbaei  $A 'ptTitg(n
aSbaei  $Aubaccou har(n
aSnyteFieta$teFhnologyT'p tFooiTyp d  'eeeu e_Mett g  (_in  Iriooi TeFhnologyT'p tFooi'(n
aSnyteFieta$teFhnologyT'p tFooiDataTyp d  ''(n
aSbaei  $typg(n
e  Sbaei  u_ad U 'rsetAccou har($accou hartgfal  y crl u ttaccou harg= $accou hId(n
a}e  Sbaei  u_ad U 'rgetAccou hId(tgfal  y cr  d_r  l u ttaccou hId(n
a}e  Sbaei  u_ad U 'rsetAce ve($ac  vetgfal  y crl u ttac  veD= $ac  ve(n
a}e  Sbaei  u_ad U 'rgetAce ve(tgfal  y cr  d_r  l u ttac  ve(n
a}e  Sbaei  u_ad U 'rsetA Ir
nyoSear($a Ir
nyoSeartgfal  y crl u tta Ir
nyoSearg= $a Ir
nyoSeId(n
a}e  Sbaei  u_ad U 'rgetA Ir
nyoSear(tgfal  y cr  d_r  l u tta Ir
nyoSeId(n
a}e  Sbaei  u_ad U 'rsetA Ir
nyoSearDi   sir an
"C(eeeu e_Mett g  (_in  Iriooi Di   sir an
"Ca$a Ir
nyoSearDi   sir an
"Ctgfal  y crl u tta Ir
nyoSearDi   sir an
"Ca=a$a Ir
nyoSearDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rgetA Ir
nyoSearDi   sir an
"C(tgfal  y cr  d_r  l u tta Ir
nyoSeIdDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rsetAtal_ved($Ptal_vedtgfal  y crl u ttatal_veda=a$atal_ved(n
a}e  Sbaei  u_ad U 'rgetAtal_ved(tgfal  y cr  d_r  l u ttatal_ved(n
a}e  Sbaei  u_ad U 'rsetAudienceSeg   hId($audienceSeg   hIdtgfal  y crl u ttaudienceSeg   hIda=a$audienceSeg   hId(n
a}e  Sbaei  u_ad U 'rgetAudienceSeg   hId(tgfal  y cr  d_r  l u ttaudienceSeg   hId(n
a}e  Sbaei  u_ad U 'rsetC ep   MId($c ep   MIdtgfal  y crl u ttc ep   MId = $n ep   MId(n
a}e  Sbaei  u_ad U 'rgetC ep   MId(tgfal  y cr  d_r  l u ttn ep   MId(n
a}e  Sbaei  u_ad U 'rsetC ep   MIdDi   sir an
"C(eeeu e_Mett g  (_in  Iriooi Di   sir an
"Ca$n ep   MarDi   sir an
"Ctgfal  y crl u ttc ep   MIdDi   sir an
"Ca=a$c ep   MIdDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rgetC ep   MIdDi   sir an
"C(tgfal  y cr  d_r  l u ttc ep   MIdDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rsetCli kThroughUrl(eeeu e_Mett g  (_in  Iriooi Cli kThroughUrla$nei kThroughUrltgfal  y crl u ttcli kThroughUrla=a$nei kThroughUrl(n
a}e  Sbaei  u_ad U 'rgetCli kThroughUrl(tgfal  y cr  d_r  l u ttcei kThroughUrl(n
a}e  Sbaei  u_ad U 'rsetCli kThroughUrlSuffixPy pr
nyCs(eeeu e_Mett g  (_in  Iriooi Cli kThroughUrlSuffixPy pr
nyCsa$nei kThroughUrlSuffixPy pr
nyCstgfal  y crl u ttcli kThroughUrlSuffixPy pr
nyCsa=a$nei kThroughUrlSuffixPy pr
nyCs(n
a}e  Sbaei  u_ad U 'rgetCli kThroughUrlSuffixPy pr
nyCs(tgfal  y cr  d_r  l u ttcei kThroughUrlSuffixPy pr
nyCs(n
a}e  Sbaei  u_ad U 'rsetCom   hs($com   hstgfal  y crl u ttnom   hsD= $nom   hs(n
a}e  Sbaei  u_ad U 'rgetCom   hs(tgfal  y cr  d_r  l u ttnom   hs(n
a}e  Sbaei  u_ad U 'rsetCompatibility($compatibilitytgfal  y crl u ttnompatibilityD= $nompatibility(n
a}e  Sbaei  u_ad U 'rgetCompatibility(tgfal  y cr  d_r  l u ttnompatibility(n
a}e  Sbaei  u_ad U 'rsetCreaeeInfo(eeeu e_Mett g  (_in  Iriooi LastModifiydInfoa$nreaeeInfotgfal  y crl u ttnreaeeInfoD= $nreaeeInfo(n
a}e  Sbaei  u_ad U 'rgetCreaeeInfo(tgfal  y cr  d_r  l u ttnreaeeInfo(n
a}e  Sbaei  u_ad U 'rsetCreae veGroupAssign   hs($nreae veGroupAssign   hstgfal  y crl u ttnreae veGroupAssign   hsD= $nreae veGroupAssign   hs(n
a}e  Sbaei  u_ad U 'rgetCreae veGroupAssign   hs(tgfal  y cr  d_r  l u ttnreae veGroupAssign   hs(n
a}e  Sbaei  u_ad U 'rsetCreae veRotasate(eeeu e_Mett g  (_in  Iriooi Creae veRotasatea$nreae veRotasatetgfal  y crl u ttnreae veRotasatea=a$nreae veRotasate(n
a}e  Sbaei  u_ad U 'rgetCreae veRotasate(tgfal  y cr  d_r  l u ttnreae veRotasate(n
a}e  Sbaei  u_ad U 'rsetDayPareT'p tFooi(eeeu e_Mett g  (_in  Iriooi DayPareT'p tFooia$dayPareT'p tFooitgfal  y crl u ttdayPareT'p tFooia=a$dayPareT'p tFooi(n
a}e  Sbaei  u_ad U 'rgetDayPareT'p tFooi(tgfal  y cr  d_r  l u ttdayPareT'p tFooi(n
a}e  Sbaei  u_ad U 'rsetDnxRin Cei kThroughEv  hTagPy pr
nyCs(eeeu e_Mett g  (_in  Iriooi DnxRin Cei kThroughEv  hTagPy pr
nyCsa$dnxRin Cei kThroughEv  hTagPy pr
nyCstgfal  y crl u ttdnxRin Cei kThroughEv  hTagPy pr
nyCsa=a$dnxRin Cei kThroughEv  hTagPy pr
nyCs(n
a}e  Sbaei  u_ad U 'rgetDnxRin Cei kThroughEv  hTagPy pr
nyCs(tgfal  y cr  d_r  l u ttdnxRin Cei kThroughEv  hTagPy pr
nyCs(n
a}e  Sbaei  u_ad U 'rsetDnl verySchedulC(eeeu e_Mett g  (_in  Iriooi Dnl verySchedulCa$dnl verySchedulCtgfal  y crl u ttdnl verySchedulCa=a$dnl verySchedulC(n
a}e  Sbaei  u_ad U 'rgetDnl verySchedulC(tgfal  y cr  d_r  l u ttdnl verySchedulC(n
a}e  Sbaei  u_ad U 'rsetDynamicCei kTrack  ($dynamicCei kTrack  tgfal  y crl u ttdynamicCei kTrack  a=a$dynamicCei kTrack  (n
a}e  Sbaei  u_ad U 'rgetDynamicCei kTrack  (tgfal  y cr  d_r  l u ttdynamicCei kTrack  (n
a}e  Sbaei  u_ad U 'rsetEtaTitg($ataTitgtgfal  y crl u ttataTitga=a$ataTitg(n
a}e  Sbaei  u_ad U 'rgetEtaTitg(tgfal  y cr  d_r  l u ttataTitg(n
a}e  Sbaei  u_ad U 'rsetEv  hTagOverridCs($ev  hTagOverridCstgfal  y crl u ttav  hTagOverridCsa=a$av  hTagOverridCs(n
a}e  Sbaei  u_ad U 'rgetEv  hTagOverridCs(tgfal  y cr  d_r  l u ttav  hTagOverridCs(n
a}e  Sbaei  u_ad U 'rsetGeoT'p tFooi(eeeu e_Mett g  (_in  Iriooi GeoT'p tFooia$geoT'p tFooitgfal  y crl u ttgeoT'p tFooia=a$geoT'p tFooi(n
a}e  Sbaei  u_ad U 'rgetGeoT'p tFooi(tgfal  y cr  d_r  l u ttgeoT'p tFooi(n
a}e  Sbaei  u_ad U 'rsetId($idtgfal  y crl u ttid Satid(n
a}e  Sbaei  u_ad U 'rgetId(tgfal  y cr  d_r  l u ttid(n
a}e  Sbaei  u_ad U 'rsetIdDi   sir an
"C(eeeu e_Mett g  (_in  Iriooi Di   sir an
"Ca$irDi   sir an
"Ctgfal  y crl u ttidDi   sir an
"Ca=a$idDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rgetIdDi   sir an
"C(tgfal  y cr  d_r  l u ttidDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rsetKeyan
"CT'p tFooiExpressir (eeeu e_Mett g  (_in  Iriooi Keyan
"CT'p tFooiExpressir a$keyan
"CT'p tFooiExpressir tgfal  y crl u ttkeyan
"CT'p tFooiExpressir a=a$keyan
"CT'p tFooiExpressir (n
a}e  Sbaei  u_ad U 'rgetKeyan
"CT'p tFooiExpressir (tgfal  y cr  d_r  l u ttkeyan
"CT'p tFooiExpressir (n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetLastModifiydInfo(eeeu e_Mett g  (_in  Iriooi LastModifiydInfoa$lastModifiydInfotgfal  y crl u ttlastModifiydInfo SatlastModifiydInfo(n
a}e  Sbaei  u_ad U 'rgetLastModifiydInfo(tgfal  y cr  d_r  l u ttlastModifiydInfo(n
a}e  Sbaei  u_ad U 'rsetNDI ($ietgtgfal  y crl u ttietg(= $ietg(n
a}e  Sbaei  u_ad U 'rgetNDI (tgfal  y cr  d_r  l u ttietg(n
a}e  Sbaei  u_ad U 'rsetPlace   hAssign   hil Ilace   hAssign   hitgfal  y crl u ttIlace   hAssign   hi(= $Ilace   hAssign   hi(n
a}e  Sbaei  u_ad U 'rgetPlace   hAssign   hiltgfal  y cr  d_r  l u ttIlace   hAssign   hi(n
a}e  Sbaei  u_ad U 'rsetR marker  dqDI(Expressir (eeeu e_Mett g  (_in  Iriooi LDI(T'p tFooiExpressir a$remarker  dqDI(Expressir tgfal  y crl u ttremarker  dqDI(Expressir (= $remarker  dqDI(Expressir (n
a}e  Sbaei  u_ad U 'rgetR marker  dqDI(Expressir (tgfal  y cr  d_r  l u ttremarker  dqDI(Expressir (n
a}e  Sbaei  u_ad U 'rsetSazC(eeeu e_Mett g  (_in  Iriooi Sizt $sizCtgfal  y crl u ttsizt Satsizt(n
a}e  Sbaei  u_ad U 'rgetSizt(tgfal  y cr  d_r  l u ttsizt(n
a}e  Sbaei  u_ad U 'rsetSslCo=a 'ant($ slCo=a 'anttgfal  y crl u ttsslCo=a 'ant SatsslCo=a 'ant(n
a}e  Sbaei  u_ad U 'rgetSslCo=a 'ant(tgfal  y cr  d_r  l u ttsslCo=a 'ant(n
a}e  Sbaei  u_ad U 'rsetSslRequired($ slRequiredtgfal  y crl u ttsslRequired SatsslRequired(n
a}e  Sbaei  u_ad U 'rgetSslRequired(tgfal  y cr  d_r  l u ttsslRequired(n
a}e  Sbaei  u_ad U 'rsetS 'ptTitg($A 'ptTitgtgfal  y crl u tts 'ptTitg Sats 'ptTitg(n
a}e  Sbaei  u_ad U 'rgetS 'ptTitg(tgfal  y cr  d_r  l u tts 'ptTitg(n
a}e  Sbaei  u_ad U 'rsetSubaccou har($ ubaccou hartgfal  y crl u tttubaccou harg= $ ubaccou har(n
a}e  Sbaei  u_ad U 'rgetSubaccou har(tgfal  y cr  d_r  l u tttubaccou har(n
a}e  Sbaei  u_ad U 'rsetTeFhnologyT'p tFooi(eeeu e_Mett g  (_in  Iriooi TeFhnologyT'p tFooi $teFhnologyT'p tFooitgfal  y crl u ttteFhnologyT'p tFooig= $teFhnologyT'p tFooi(n
a}e  Sbaei  u_ad U 'rgetTeFhnologyT'p tFooi(tgfal  y cr  d_r  l u ttteFhnologyT'p tFooi(n
a}e  Sbaei  u_ad U 'rsetTyp ($typ tgfal  y crl u tttyp d  $typg(n
a}e  Sbaei  u_ad U 'rgetTyp (tgfal  y cr  d_r  l u tttypg(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi AdSloht(_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $nom   h(n
aSbaei  $nompatibility(n
aSbaei  $heighh(n
aSbaei  $linkedPlace   hId(n
aSbaei  $ietg(n
aSbaei  $pay   hSr L> Typ (n
aSbaei  $primary(n
aSbaei  $width(n
e  Sbaei  u_ad U 'rsetCom   h($com   htgfal  y crl u ttcom   hD= $nom   h(n
a}e  Sbaei  u_ad U 'rgetCom   h(tgfal  y cr  d_r  l u ttnom   h(n
a}e  Sbaei  u_ad U 'rsetCompatibility($compatibilitytgfal  y crl u ttnompatibilityD= $nompatibility(n
a}e  Sbaei  u_ad U 'rgetCompatibility(tgfal  y cr  d_r  l u ttnompatibility(n
a}e  Sbaei  u_ad U 'rsetHeighh($heighhtgfal  y crl u ttheighhD= $heighh(n
a}e  Sbaei  u_ad U 'rgetHeighh(tgfal  y cr  d_r  l u ttheighh(n
a}e  Sbaei  u_ad U 'rsetLinkedPlace   hId($linkedPlace   hIdtgfal  y crl u ttlinkedPlace   hId SatlinkedPlace   hId(n
a}e  Sbaei  u_ad U 'rgetLinkedPlace   hId(tgfal  y cr  d_r  l u ttlinkedPlace   hId(n
a}e  Sbaei  u_ad U 'rsetNDI ($ietgtgfal  y crl u ttietg(= $ietg(n
a}e  Sbaei  u_ad U 'rgetNDI (tgfal  y cr  d_r  l u ttietg(n
a}e  Sbaei  u_ad U 'rsetPay   hSr L> Typ ($pay   hSr L> Typ tgfal  y crl u ttIay   hSr L> Typ (= $Iay   hSr L> Typ (n
a}e  Sbaei  u_ad U 'rgetPay   hSr L> Typ (tgfal  y cr  d_r  l u ttIay   hSr L> Typ (n
a}e  Sbaei  u_ad U 'rsetPrimary($primarytgfal  y crl u ttIrimary(= $Irimary(n
a}e  Sbaei  u_ad U 'rgetPrimary(tgfal  y cr  d_r  l u ttIrimary(n
a}e  Sbaei  u_ad U 'rsetWidth($widthtgfal  y crl u ttwidth(= $width(n
a}e  Sbaei  u_ad U 'rgetWidth(tgfal  y cr  d_r  l u ttwidth(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi AdsqDI( u  Se' t(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'ads';  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSnyteFieta$adsTyp d  'eeeu e_Mett g  (_in  Iriooi Ad';  y
nyteFieta$adsDataTyp d  'eal I'(n
aSbaei  $kind(n
aSbaei  $  h'  p  S   (n
e  Sbaei  u_ad U 'rsetAdi($aditgfal  y crl u ttadiD= $adi(n
a}e  Sbaei  u_ad U 'rgetAdi(tgfal  y cr  d_r  l u ttadi(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetN h'  p  S   ($  h'  p  S   tgfal  y crl u tti h'  p  S    = $  h'  p  S   (n
a}e  Sbaei  u_ad U 'rgetN h'  p  S   (tgfal  y cr  d_r  l u tti h'  p  S   (n
a}e}     _a eeeu e_Mett g  (_in  Iriooi A Ir
nyoSet(_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $accou hId(n
aSbaei  $a Ir
nyoSeGroupId(n
aSbaei  $cei kThroughUrlSuffix(n
aSbaei  $dnxRin Cei kThroughEv  hTagId(n
aSbaei  $dnxRin Email(n
aSbaei  $floodlighhConfigurasatear(n
aSnyteFieta$floodlighhConfigurasatearDi   sir an
"CTyp d  'eeeu e_Mett g  (_in  Iriooi Di   sir an
"C';  y
nyteFieta$floodlighhConfigurasatearDi   sir an
"CDataTyp d  ''(n
aSbaei  $ir;  y
nyteFieta$irDi   sir an
"CTyp d  'eeeu e_Mett g  (_in  Iriooi Di   sir an
"C';  y
nyteFieta$irDi   sir an
"CDataTyp d  ''(n
aSbaei  $kind(n
aSbaei  $ etg(n
aSbaei  $origieseFloodlighhConfigurasatear(n
aSbaei  $s 'tus(n
aSbaei  $tubaccou har(n
e  Sbaei  u_ad U 'rsetAccou har($accou hartgfal  y crl u ttaccou harg= $accou hId(n
a}e  Sbaei  u_ad U 'rgetAccou hId(tgfal  y cr  d_r  l u ttaccou hId(n
a}e  Sbaei  u_ad U 'rsetA Ir
nyoSeGroupId($a Ir
nyoSeGroupIdtgfal  y crl u ttadIr
nyoSeGroupIdD= $adIr
nyoSeGroupId(n
a}e  Sbaei  u_ad U 'rgetAdIr
nyoSeGroupId(tgfal  y cr  d_r  l u ttadIr
nyoSeGroupId(n
a}e  Sbaei  u_ad U 'rsetCli kThroughUrlSuffix($cei kThroughUrlSuffixtgfal  y crl u ttnei kThroughUrlSuffixD= $nei kThroughUrlSuffix(n
a}e  Sbaei  u_ad U 'rgetCli kThroughUrlSuffix(tgfal  y cr  d_r  l u ttnei kThroughUrlSuffix(n
a}e  Sbaei  u_ad U 'rsetDnxRin Cei kThroughEv  hTagId($dnxRin Cei kThroughEv  hTagIdtgfal  y crl u ttdnxRin Cei kThroughEv  hTagIdD= $dnxRin Cei kThroughEv  hTagId(n
a}e  Sbaei  u_ad U 'rgetDnxRin Cei kThroughEv  hTagId(tgfal  y cr  d_r  l u ttdnxRin Cei kThroughEv  hTagId(n
a}e  Sbaei  u_ad U 'rsetDnxRin Email($dnxRin Emailtgfal  y crl u ttdnxRin EmailD= $dnxRin Email(n
a}e  Sbaei  u_ad U 'rgetDnxRin Email(tgfal  y cr  d_r  l u ttdnxRin Email(n
a}e  Sbaei  u_ad U 'rsetFloodlighhConfigurasatear($floodlighhConfigurasateartgfal  y crl u ttfloodlighhConfigurasatearD= $floodlighhConfigurasatear(n
a}e  Sbaei  u_ad U 'rgetFloodlighhConfigurasatear(tgfal  y cr  d_r  l u ttfloodlighhConfigurasatear(n
a}e  Sbaei  u_ad U 'rsetFloodlighhConfigurasatearDi   sir an
"C(eeeu e_Mett g  (_in  Iriooi Di   sir an
"Ca$floodlighhConfigurasatearDi   sir an
"Ctgfal  y crl u ttfloodlighhConfigurasatearDi   sir an
"Ca=a$floodlighhConfigurasatearDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rgetFloodlighhConfigurasatearDi   sir an
"C(tgfal  y cr  d_r  l u ttfloodlighhConfigurasatearDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rsetId($idtgfal  y crl u ttid Satid(n
a}e  Sbaei  u_ad U 'rgetId(tgfal  y cr  d_r  l u ttid(n
a}e  Sbaei  u_ad U 'rsetIdDi   sir an
"C(eeeu e_Mett g  (_in  Iriooi Di   sir an
"Ca$irDi   sir an
"Ctgfal  y crl u ttidDi   sir an
"Ca=a$idDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rgetIdDi   sir an
"C(tgfal  y cr  d_r  l u ttidDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetNDI ($ietgtgfal  y crl u ttietg(= $ietg(n
a}e  Sbaei  u_ad U 'rgetNDI (tgfal  y cr  d_r  l u ttietg(n
a}e  Sbaei  u_ad U 'rsetOrigieseFloodlighhConfigurasatear($origieseFloodlighhConfigurasateartgfal  y crl u ttorigieseFloodlighhConfigurasatear(= $origieseFloodlighhConfigurasatear(n
a}e  Sbaei  u_ad U 'rgetOrigieseFloodlighhConfigurasatear(tgfal  y cr  d_r  l u ttorigieseFloodlighhConfigurasatear(n
a}e  Sbaei  u_ad U 'rsetS 'tus($s 'tustgfal  y crl u tts 'tus = $s 'tus(n
a}e  Sbaei  u_ad U 'rgetS 'tus(tgfal  y cr  d_r  l u tts 'tus(n
a}e  Sbaei  u_ad U 'rsetSubaccou har($ ubaccou hartgfal  y crl u tttubaccou harg= $ ubaccou har(n
a}e  Sbaei  u_ad U 'rgetSubaccou har(tgfal  y cr  d_r  l u tttubaccou har(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi A Ir
nyoSeGroupt(_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $accou hId(n
aSbaei  $id(n
aSbaei  $kind(n
aSbaei  $ etg(n
e  Sbaei  u_ad U 'rsetAccou har($accou hartgfal  y crl u ttaccou harg= $accou hId(n
a}e  Sbaei  u_ad U 'rgetAccou hId(tgfal  y cr  d_r  l u ttaccou hId(n
a}e  Sbaei  u_ad U 'rsetId($idtgfal  y crl u ttid Satid(n
a}e  Sbaei  u_ad U 'rgetId(tgfal  y cr  d_r  l u ttid(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetNDI ($ietgtgfal  y crl u ttietg(= $ietg(n
a}e  Sbaei  u_ad U 'rgetNDI (tgfal  y cr  d_r  l u ttietg(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi A Ir
nyoSeGroupsqDI( u  Se' t(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'adIr
nyoSeGroups';  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSnyteFieta$adIr
nyoSeGroupsTyp d  'eeeu e_Mett g  (_in  Iriooi A Ir
nyoSeGroup';  y
nyteFieta$adIr
nyoSeGroupsDataTyp d  'eal I'(n
aSbaei  $kind(n
aSbaei  $  h'  p  S   (n
e  Sbaei  u_ad U 'rsetAdIr
nyoSeGroups($a Ir
nyoSeGroupitgfal  y crl u ttadIr
nyoSeGroupiD= $adIr
nyoSeGroupi(n
a}e  Sbaei  u_ad U 'rgetAdIr
nyoSeGroups(tgfal  y cr  d_r  l u ttadIr
nyoSeGroupi(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetN h'  p  S   ($  h'  p  S   tgfal  y crl u tti h'  p  S    = $  h'  p  S   (n
a}e  Sbaei  u_ad U 'rgetN h'  p  S   (tgfal  y cr  d_r  l u tti h'  p  S   (n
a}e}     _a eeeu e_Mett g  (_in  Iriooi A Ir
nyoSesqDI( u  Se' t(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'adIr
nyoSes';  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSnyteFieta$adIr
nyoSesTyp d  'eeeu e_Mett g  (_in  Iriooi A Ir
nyoSe';  y
nyteFieta$adIr
nyoSesDataTyp d  'eal I'(n
aSbaei  $kind(n
aSbaei  $  h'  p  S   (n
e  Sbaei  u_ad U 'rsetAdIr
nyoSes($a Ir
nyoSeitgfal  y crl u ttadIr
nyoSeiD= $adIr
nyoSei(n
a}e  Sbaei  u_ad U 'rgetAdIr
nyoSes(tgfal  y cr  d_r  l u ttadIr
nyoSei(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetN h'  p  S   ($  h'  p  S   tgfal  y crl u tti h'  p  S    = $  h'  p  S   (n
a}e  Sbaei  u_ad U 'rgetN h'  p  S   (tgfal  y cr  d_r  l u tti h'  p  S   (n
a}e}     _a eeeu e_Mett g  (_in  Iriooi AudienceSeg   ht(_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $allo   U '(n
aSbaei  $id(n
aSbaei  $ etg(n
e  Sbaei  u_ad U 'rsetAllo   U '($allo   U 'tgfal  y crl u ttallo   U 'D= $allo   U '(n
a}e  Sbaei  u_ad U 'rgetAllo   U '(tgfal  y cr  d_r  l u ttallo   U '(n
a}e  Sbaei  u_ad U 'rsetId($idtgfal  y crl u ttid Satid(n
a}e  Sbaei  u_ad U 'rgetId(tgfal  y cr  d_r  l u ttid(n
a}e  Sbaei  u_ad U 'rsetNDI ($ietgtgfal  y crl u ttietg(= $ietg(n
a}e  Sbaei  u_ad U 'rgetNDI (tgfal  y cr  d_r  l u ttietg(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi AudienceSeg   hGroupt(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'audienceSeg   hs';  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSnyteFieta$audienceSeg   hsTyp d  'eeeu e_Mett g  (_in  Iriooi AudienceSeg   h';  y
nyteFieta$audienceSeg   hsDataTyp d  'eal I'(n
aSbaei  $id(n
aSbaei  $ etg(n
e  Sbaei  u_ad U 'rsetAudienceSeg   hs($audienceSeg   hitgfal  y crl u ttaudienceSeg   hiD= $audienceSeg   hi(n
a}e  Sbaei  u_ad U 'rgetAudienceSeg   hs(tgfal  y cr  d_r  l u ttaudienceSeg   hi(n
a}e  Sbaei  u_ad U 'rsetId($idtgfal  y crl u ttid Satid(n
a}e  Sbaei  u_ad U 'rgetId(tgfal  y cr  d_r  l u ttid(n
a}e  Sbaei  u_ad U 'rsetNDI ($ietgtgfal  y crl u ttietg(= $ietg(n
a}e  Sbaei  u_ad U 'rgetNDI (tgfal  y cr  d_r  l u ttietg(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi_BrowsSet(_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $browsSeVSeiitear(n
aSbaei  $darhId(n
aSbaei  $kind(n
aSbaei  $majoeVSeiite(n
aSbaei  $minoeVSeiite(n
aSbaei  $ etg(n
e  Sbaei  u_ad U 'rsetBrowsSeVSeiitear($browsSeVSeiiteartgfal  y crl u ttbrowsSeVSeiitear(= $browsSeVSeiitear(n
a}e  Sbaei  u_ad U 'rgetBrowsSeVSeiitear(tgfal  y cr  d_r  l u ttbrowsSeVSeiitear(n
a}e  Sbaei  u_ad U 'rsetDarhId($darhIdtgfal  y crl u ttdarhId(= $darhId(n
a}e  Sbaei  u_ad U 'rgetDarhId(tgfal  y cr  d_r  l u ttdarhId(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetMajoeVSeiite($majoeVSeiitetgfal  y crl u ttmajoeVSeiite SatmajoeVSeiite(n
a}e  Sbaei  u_ad U 'rgetMajoeVSeiite(tgfal  y cr  d_r  l u ttmajoeVSeiite(n
a}e  Sbaei  u_ad U 'rsetMinoeVSeiite($minoeVSeiitetgfal  y crl u ttminoeVSeiite SatminoeVSeiite(n
a}e  Sbaei  u_ad U 'rgetMinoeVSeiite(tgfal  y cr  d_r  l u ttminoeVSeiite(n
a}e  Sbaei  u_ad U 'rsetNDI ($ietgtgfal  y crl u ttietg(= $ietg(n
a}e  Sbaei  u_ad U 'rgetNDI (tgfal  y cr  d_r  l u ttietg(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi_BrowsSesqDI( u  Se' t(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'browsSes';  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSnyteFieta$browsSesTyp d  'eeeu e_Mett g  (_in  Iriooi BrowsSe';  y
nyteFieta$browsSesDataTyp d  'eal I'(n
aSbaei  $kind(n
e  Sbaei  u_ad U 'rsetBrowsSes($browsSeitgfal  y crl u ttbrowsSei(= $browsSei(n
a}e  Sbaei  u_ad U 'rgetBrowsSes(tgfal  y cr  d_r  l u ttbrowsSei(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi_C ep   Mt(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'traffick  Emails';  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $accou hId(n
aSnyteFieta$addi  _aalCreae veOptimiz  U 'ConfigurasatesTyp d  'eeeu e_Mett g  (_in  Iriooi Creae veOptimiz  U 'Configurasate';  y
nyteFieta$addi  _aalCreae veOptimiz  U 'ConfigurasatesDataTyp d  'eal I'(n
aSbaei  $a Ir
nyoSeGroupId(n
aSbaei  $a Ir
nyoSeId(n
aSnyteFieta$adIr
nyoSeIdDi   sir an
"CTyp d  'eeeu e_Mett g  (_in  Iriooi Di   sir an
"C';  y
nyteFieta$adIr
nyoSeIdDi   sir an
"CDataTyp d  ''(n
aSbaei  $Ptal_ved(n
aSnyteFieta$audienceSeg   hGroupsTyp d  'eeeu e_Mett g  (_in  Iriooi AudienceSeg   hGroup';  y
nyteFieta$audienceSeg   hGroupsDataTyp d  'eal I'(n
aSbaei  $billooiInvo g Code;  y
nyteFieta$cei kThroughUrlSuffixPy pr
nyCsTyp d  'eeeu e_Mett g  (_in  Iriooi Cli kThroughUrlSuffixPy pr
nyCs';  y
nyteFieta$cei kThroughUrlSuffixPy pr
nyCsDataTyp d  ''(n
aSbaei  $nom   h(n
aSbaei  $nomscoreVceEnabled(n
aSnyteFieta$nreaeeInfoTyp d  'eeeu e_Mett g  (_in  Iriooi LastModifiydInfo'(n
aSnyteFieta$nreaeeInfoDataTyp d  ''(n
aSbaei  $nreae veGroupIdi(n
aSnyteFieta$nreae veOptimiz  U 'ConfigurasateTyp d  'eeeu e_Mett g  (_in  Iriooi Creae veOptimiz  U 'Configurasate'(n
aSnyteFieta$nreae veOptimiz  U 'ConfigurasateDataTyp d  ''(n
aSnyteFieta$dnxRin Cei kThroughEv  hTagPy pr
nyCsTyp d  'eeeu e_Mett g  (_in  Iriooi DnxRin Cei kThroughEv  hTagPy pr
nyCs'(n
aSnyteFieta$dnxRin Cei kThroughEv  hTagPy pr
nyCsDataTyp d  ''(n
aSbaei  $ataDate;  y
nyteFieta$ev  hTagOverridCsTyp d  'eeeu e_Mett g  (_in  Iriooi Ev  hTagOverridC'(n
aSnyteFieta$ev  hTagOverridCsDataTyp d  'eal I'(n
aSbaei  $axaSeeseId(n
aSbaei  $id(n
aSnyteFieta$idDi   sir an
"CTyp d  'eeeu e_Mett g  (_in  Iriooi Di   sir an
"C';  y
nyteFieta$irDi   sir an
"CDataTyp d  ''(n
aSbaei  $kind(n
aSnyteFieta$lastModifiydInfoTyp d  'eeeu e_Mett g  (_in  Iriooi LastModifiydInfo'(n
aSnyteFieta$lastModifiydInfoDataTyp d  ''(n
aSnyteFieta$lookbackConfigurasateTyp d  'eeeu e_Mett g  (_in  Iriooi LookbackConfigurasate'(n
aSnyteFieta$lookbackConfigurasateDataTyp d  ''(n
aSbaei  $ietg(n
aSbaei  $iielsenOcrEnabled(n
aSbaei  $s 'ptDate;  y
baei  $subaccou har(n
aSbaei  $traffick  Emails(n
e  Sbaei  u_ad U 'rsetAccou har($accou hartgfal  y crl u ttaccou harg= $accou hId(n
a}e  Sbaei  u_ad U 'rgetAccou hId(tgfal  y cr  d_r  l u ttaccou hId(n
a}e  Sbaei  u_ad U 'rsetAddi  _aalCreae veOptimiz  U 'Configurasates($addi  _aalCreae veOptimiz  U 'Configurasatestgfal  y crl u ttaddi  _aalCreae veOptimiz  U 'Configurasatesg= $addi  _aalCreae veOptimiz  U 'Configurasates(n
a}e  Sbaei  u_ad U 'rgetAddi  _aalCreae veOptimiz  U 'Configurasates(tgfal  y cr  d_r  l u ttaddi  _aalCreae veOptimiz  U 'Configurasates(n
a}e  Sbaei  u_ad U 'rsetAdIr
nyoSeGroupId($a Ir
nyoSeGroupIdtgfal  y crl u ttadIr
nyoSeGroupIdD= $adIr
nyoSeGroupId(n
a}e  Sbaei  u_ad U 'rgetAdIr
nyoSeGroupId(tgfal  y cr  d_r  l u ttadIr
nyoSeGroupId(n
a}e  Sbaei  u_ad U 'rsetAdIr
nyoSeId($a Ir
nyoSeartgfal  y crl u tta Ir
nyoSearg= $a Ir
nyoSeId(n
a}e  Sbaei  u_ad U 'rgetA Ir
nyoSear(tgfal  y cr  d_r  l u tta Ir
nyoSeId(n
a}e  Sbaei  u_ad U 'rsetA Ir
nyoSearDi   sir an
"C(eeeu e_Mett g  (_in  Iriooi Di   sir an
"Ca$a Ir
nyoSearDi   sir an
"Ctgfal  y crl u tta Ir
nyoSearDi   sir an
"Ca=a$a Ir
nyoSearDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rgetA Ir
nyoSearDi   sir an
"C(tgfal  y cr  d_r  l u tta Ir
nyoSeIdDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rsetAtal_ved($Ptal_vedtgfal  y crl u ttatal_veda=a$atal_ved(n
a}e  Sbaei  u_ad U 'rgetAtal_ved(tgfal  y cr  d_r  l u ttatal_ved(n
a}e  Sbaei  u_ad U 'rsetAudienceSeg   hGroups($audienceSeg   hGroupstgfal  y crl u ttaudienceSeg   hGroups = $audienceSeg   hGroupi(n
a}e  Sbaei  u_ad U 'rgetAudienceSeg   hGroups(tgfal  y cr  d_r  l u ttaudienceSeg   hGroupi(n
a}e  Sbaei  u_ad U 'rsetBillooiInvo g Code($billooiInvo g Codetgfal  y crl u ttbillooiInvo g Code = $billooiInvo g Code;  y}e  Sbaei  u_ad U 'rgetBillooiInvo g Code(tgfal  y cr  d_r  l u ttbillooiInvo g Code;  y}e  Sbaei  u_ad U 'rsetCli kThroughUrlSuffixPy pr
nyCs(eeeu e_Mett g  (_in  Iriooi Cli kThroughUrlSuffixPy pr
nyCsa$cei kThroughUrlSuffixPy pr
nyCstgfal  y crl u ttcei kThroughUrlSuffixPy pr
nyCs = $cei kThroughUrlSuffixPy pr
nyCs;  y}e  Sbaei  u_ad U 'rgetCli kThroughUrlSuffixPy pr
nyCs(tgfal  y cr  d_r  l u ttcei kThroughUrlSuffixPy pr
nyCs;  y}e  Sbaei  u_ad U 'rsetCom   h($com   htgfal  y crl u ttcom   hD= $nom   h(n
a}e  Sbaei  u_ad U 'rgetCom   h(tgfal  y cr  d_r  l u ttnom   h(n
a}e  Sbaei  u_ad U 'rsetComscoreVceEnabled($nomscoreVceEnabledtgfal  y crl u ttcomscoreVceEnabledD= $nomscoreVceEnabled(n
a}e  Sbaei  u_ad U 'rgetComscoreVceEnabled(tgfal  y cr  d_r  l u ttnomscoreVceEnabled(n
a}e  Sbaei  u_ad U 'rsetCreaeeInfo(eeeu e_Mett g  (_in  Iriooi LastModifiydInfoa$nreaeeInfotgfal  y crl u ttnreaeeInfoD= $nreaeeInfo(n
a}e  Sbaei  u_ad U 'rgetCreaeeInfo(tgfal  y cr  d_r  l u ttnreaeeInfo(n
a}e  Sbaei  u_ad U 'rsetCreae veGroupIds($nreae veGroupIditgfal  y crl u ttnreae veGroupIdiD= $nreae veGroupIdi(n
a}e  Sbaei  u_ad U 'rgetCreae veGroupIds(tgfal  y cr  d_r  l u ttnreae veGroupIdi(n
a}e  Sbaei  u_ad U 'rsetCreae veOptimiz  U 'Configurasate(eeeu e_Mett g  (_in  Iriooi Creae veOptimiz  U 'Configurasatea$nreae veOptimiz  U 'Configurasatetgfal  y crl u ttnreae veOptimiz  U 'Configurasatea=a$nreae veOptimiz  U 'Configurasate(n
a}e  Sbaei  u_ad U 'rgetCreae veOptimiz  U 'Configurasate(tgfal  y cr  d_r  l u ttnreae veOptimiz  U 'Configurasate(n
a}e  Sbaei  u_ad U 'rsetDnxRin Cei kThroughEv  hTagPy pr
nyCs(eeeu e_Mett g  (_in  Iriooi DnxRin Cei kThroughEv  hTagPy pr
nyCsa$dnxRin Cei kThroughEv  hTagPy pr
nyCstgfal  y crl u ttdnxRin Cei kThroughEv  hTagPy pr
nyCsa=a$dnxRin Cei kThroughEv  hTagPy pr
nyCs(n
a}e  Sbaei  u_ad U 'rgetDnxRin Cei kThroughEv  hTagPy pr
nyCs(tgfal  y cr  d_r  l u ttdnxRin Cei kThroughEv  hTagPy pr
nyCs(n
a}e  Sbaei  u_ad U 'rsetEtaDate($ataDatetgfal  y crl u ttataDatea=a$ataDate;  y}e  Sbaei  u_ad U 'rgetEtaDate(tgfal  y cr  d_r  l u ttataDate;  y}e  Sbaei  u_ad U 'rsetEv  hTagOverridCs($ev  hTagOverridCstgfal  y crl u ttav  hTagOverridCsa=a$av  hTagOverridCs(n
a}e  Sbaei  u_ad U 'rgetEv  hTagOverridCs(tgfal  y cr  d_r  l u ttav  hTagOverridCs(n
a}e  Sbaei  u_ad U 'rsetExaSeeseId($axaSeeseIdtgfal  y crl u ttaxaSeeseIda=a$axaSeeseId(n
a}e  Sbaei  u_ad U 'rgetExaSeeseId(tgfal  y cr  d_r  l u ttaxaSeeseId(n
a}e  Sbaei  u_ad U 'rsetId($idtgfal  y crl u ttid Satid(n
a}e  Sbaei  u_ad U 'rgetId(tgfal  y cr  d_r  l u ttid(n
a}e  Sbaei  u_ad U 'rsetarDi   sir an
"C(eeeu e_Mett g  (_in  Iriooi Di   sir an
"Ca$irDi   sir an
"Ctgfal  y crl u ttidDi   sir an
"Ca=a$idDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rgetIdDi   sir an
"C(tgfal  y cr  d_r  l u ttidDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetLastModifiydInfo(eeeu e_Mett g  (_in  Iriooi LastModifiydInfoa$lastModifiydInfotgfal  y crl u ttlastModifiydInfo SatlastModifiydInfo(n
a}e  Sbaei  u_ad U 'rgetLastModifiydInfo(tgfal  y cr  d_r  l u ttlastModifiydInfo(n
a}e  Sbaei  u_ad U 'rsetLookbackConfigurasate(eeeu e_Mett g  (_in  Iriooi LookbackConfigurasatea$lookbackConfigurasatetgfal  y crl u ttlookbackConfigurasatea=a$lookbackConfigurasate(n
a}e  Sbaei  u_ad U 'rgetLookbackConfigurasate(tgfal  y cr  d_r  l u ttlookbackConfigurasate(n
a}e  Sbaei  u_ad U 'rsetNDI ($ietgtgfal  y crl u ttietg(= $ietg(n
a}e  Sbaei  u_ad U 'rgetNDI (tgfal  y cr  d_r  l u ttietg(n
a}e  Sbaei  u_ad U 'rsetNielsenOcrEnabled($iielsenOcrEnabledtgfal  y crl u ttiielsenOcrEnabled(= $iielsenOcrEnabled(n
a}e  Sbaei  u_ad U 'rgetNielsenOcrEnabled(tgfal  y cr  d_r  l u ttiielsenOcrEnabled(n
a}e  Sbaei  u_ad U 'rsetS 'ptDate($s 'ptDatetgfal  y crl u tts 'ptDate(= $s 'ptDate;  y}e  Sbaei  u_ad U 'rgetS 'ptDate(tgfal  y cr  d_r  l u tts 'ptDate;  y}e  Sbaei  u_ad U 'rsetSubaccou har($ ubaccou hartgfal  y crl u tttubaccou harg= $ ubaccou har(n
a}e  Sbaei  u_ad U 'rgetSubaccou har(tgfal  y cr  d_r  l u tttubaccou har(n
a}e  Sbaei  u_ad U 'rsetTraffick  Emails($traffick  Emailstgfal  y crl u tttraffick  Emailsg= $traffick  Emails(n
a}e  Sbaei  u_ad U 'rgetTraffick  Emails(tgfal  y cr  d_r  l u tttraffick  Emails(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi_C ep   MCreae veAssociasatea(_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $nreae veId(n
aSbaei  $kind(n
e  Sbaei  u_ad U 'rsetCreae veId($nreae veIdtgfal  y crl u ttnreae veId = $nreae veId(n
a}e  Sbaei  u_ad U 'rgetCreae vear(tgfal  y cr  d_r  l u ttnreae veId(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi_C ep   MCreae veAssociasatesqDI( u  Se' t(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'c ep   MCreae veAssociasates';  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSnyteFieta$n ep   MCreae veAssociasatesTyp d  'eeeu e_Mett g  (_in  Iriooi C ep   MCreae veAssociasate'(n
aSnyteFieta$n ep   MCreae veAssociasatesDataTyp d  'eal I'(n
aSbaei  $kind(n
aSbaei  $  h'  p  S   (n
e  Sbaei  u_ad U 'rsetC ep   MCreae veAssociasates($n ep   MCreae veAssociasatestgfal  y crl u ttn ep   MCreae veAssociasates = $n ep   MCreae veAssociasates(n
a}e  Sbaei  u_ad U 'rgetC ep   MCreae veAssociasates(tgfal  y cr  d_r  l u ttn ep   MCreae veAssociasates(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetN h'  p  S   ($  h'  p  S   tgfal  y crl u tti h'  p  S    = $  h'  p  S   (n
a}e  Sbaei  u_ad U 'rgetN h'  p  S   (tgfal  y cr  d_r  l u tti h'  p  S   (n
a}e}     _a eeeu e_Mett g  (_in  Iriooi C ep   MsqDI( u  Se' t(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'c ep   Ms';  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSnyteFieta$n ep   MsTyp d  'eeeu e_Mett g  (_in  Iriooi C ep   M'(n
aSnyteFieta$n ep   MsDataTyp d  'eal I'(n
aSbaei  $kind(n
aSbaei  $  h'  p  S   (n
e  Sbaei  u_ad U 'rsetC ep   Ms($n ep   Mstgfal  y crl u ttn ep   Ms = $n ep   Ms(n
a}e  Sbaei  u_ad U 'rgetC ep   Ms(tgfal  y cr  d_r  l u ttn ep   Ms(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetN h'  p  S   ($  h'  p  S   tgfal  y crl u tti h'  p  S    = $  h'  p  S   (n
a}e  Sbaei  u_ad U 'rgetN h'  p  S   (tgfal  y cr  d_r  l u tti h'  p  S   (n
a}e}     _a eeeu e_Mett g  (_in  Iriooi ChangeLoga(_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $accou har(n
aSbaei  $ad U '(n
aSbaei  $changeTitg(n
aSbaei  $fiyldNetg(n
aSbaei  $id(n
aSbaei  $kind(n
aSbaei  $  wan
"C(n
aSbaei  $objeFiar(n
aSbaei  $objeFiTyp (n
aSbaei  $oldan
"C(n
aSbaei  $subaccou har(n
aSbaei  $transad U 'ar(n
aSbaei  $userProfilear(n
aSbaei  $userProfileNetg(n
e  Sbaei  u_ad U 'rsetAccou har($accou hartgfal  y crl u ttaccou harg= $accou hId(n
a}e  Sbaei  u_ad U 'rgetAccou hId(tgfal  y cr  d_r  l u ttaccou hId(n
a}e  Sbaei  u_ad U 'rsetAd U '($ad U 'tgfal  y crl u ttac U 'r= $ad U '(n
a}e  Sbaei  u_ad U 'rgetAc U '(tgfal  y cr  d_r  l u ttac U '(n
a}e  Sbaei  u_ad U 'rsetChangeTitg($changeTitgtgfal  y crl u ttnhangeTitg = $nhangeTitg(n
a}e  Sbaei  u_ad U 'rgetChangeTitg(tgfal  y cr  d_r  l u ttnhangeTitg(n
a}e  Sbaei  u_ad U 'rsetFiyldNetg($fiyldNetgtgfal  y crl u ttfiyldNetg = $fiyldNetg(n
a}e  Sbaei  u_ad U 'rgetFiyldNetg(tgfal  y cr  d_r  l u ttfiyldNetg(n
a}e  Sbaei  u_ad U 'rsetId($idtgfal  y crl u ttid Satid(n
a}e  Sbaei  u_ad U 'rgetId(tgfal  y cr  d_r  l u ttid(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetN wan
"C($  wan
"Ctgfal  y crl u tti wan
"Ca=a$  wan
"C(n
a}e  Sbaei  u_ad U 'rgetN wan
"C(tgfal  y cr  d_r  l u tt  wan
"C(n
a}e  Sbaei  u_ad U 'rsetObjeFiar($objeFiartgfal  y crl u ttobjeFiara=a$objeFiar(n
a}e  Sbaei  u_ad U 'rgetObjeFiar(tgfal  y cr  d_r  l u ttobjeFiar(n
a}e  Sbaei  u_ad U 'rsetObjeFiTyp ($objeFiTyp tgfal  y crl u ttobjeFiTyp d  $objeFiTyp (n
a}e  Sbaei  u_ad U 'rgetObjeFiTyp (tgfal  y cr  d_r  l u ttobjeFiTyp (n
a}e  Sbaei  u_ad U 'rsetOldan
"C($oldan
"Ctgfal  y crl u ttoldan
"Cd  $oldan
"C(n
a}e  Sbaei  u_ad U 'rgetOldan
"C(tgfal  y cr  d_r  l u ttoldan
"C(n
a}e  Sbaei  u_ad U 'rsetSubaccou har($ ubaccou hartgfal  y crl u tttubaccou harg= $ ubaccou har(n
a}e  Sbaei  u_ad U 'rgetSubaccou har(tgfal  y cr  d_r  l u tttubaccou har(n
a}e  Sbaei  u_ad U 'rsetTransad U 'ar($transad U 'artgfal  y crl u tttransad U 'arg= $transad U 'ar(n
a}e  Sbaei  u_ad U 'rgetTransad U 'ar(tgfal  y cr  d_r  l u tttransad U 'ar(n
a}e  Sbaei  u_ad U 'rsetUserProfilear($userProfileartgfal  y crl u ttuserProfilearg= $userProfilear(n
a}e  Sbaei  u_ad U 'rgetUserProfilear(tgfal  y cr  d_r  l u ttuserProfilear(n
a}e  Sbaei  u_ad U 'rsetUserProfileNetg($userProfileNetgtgfal  y crl u ttuserProfileNetg = $userProfileNetg(n
a}e  Sbaei  u_ad U 'rgetUserProfileNetg(tgfal  y cr  d_r  l u ttuserProfileNetg(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi ChangeLogsqDI( u  Se' t(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'changeLogs';  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSnyteFieta$nhangeLogsTyp d  'eeeu e_Mett g  (_in  Iriooi ChangeLog'(n
aSnyteFieta$nhangeLogsDataTyp d  'eal I'(n
aSbaei  $kind(n
aSbaei  $  h'  p  S   (n
e  Sbaei  u_ad U 'rsetChangeLogs($nhangeLogstgfal  y crl u ttnhangeLogs = $nhangeLogs(n
a}e  Sbaei  u_ad U 'rgetChangeLogs(tgfal  y cr  d_r  l u ttnhangeLogs(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetN h'  p  S   ($  h'  p  S   tgfal  y crl u tti h'  p  S    = $  h'  p  S   (n
a}e  Sbaei  u_ad U 'rgetN h'  p  S   (tgfal  y cr  d_r  l u tti h'  p  S   (n
a}e}     _a eeeu e_Mett g  (_in  Iriooi CinyCsqDI( u  Se' t(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'cinyCs'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSnyteFieta$ninyCsTyp d  'eeeu e_Mett g  (_in  Iriooi Ciny'(n
aSnyteFieta$ninyCsDataTyp d  'eal I'(n
aSbaei  $kind(n
e  Sbaei  u_ad U 'rsetCinyCs($ninyCstgfal  y crl u ttninyCs = $cinyCs;  y}e  Sbaei  u_ad U 'rgetCinyCs(tgfal  y cr  d_r  l u ttcinyCs;  y}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi Cinya(_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $cou hryCode;  y
baei  $cou hryDarhId(n
aSbaei  $darhId(n
aSbaei  $kind(n
aSbaei  $metroCode;  y
baei  $metroDmaId(n
aSbaei  $ietg(n
aSbaei  $regi 'Codg(n
aSbaei  $regi 'DarhId(n
e  Sbaei  u_ad U 'rsetCou hryCode($cou hryCodetgfal  y crl u ttnou hryCode = $cou hryCode;  y}e  Sbaei  u_ad U 'rgetCou hryCode(tgfal  y cr  d_r  l u ttcou hryCode;  y}e  Sbaei  u_ad U 'rsetCou hryDarhId($cou hryDarhIdtgfal  y crl u ttnou hryDarhId(= $cou hryDarhId(n
a}e  Sbaei  u_ad U 'rgetCou hryDarhId(tgfal  y cr  d_r  l u ttcou hryDarhId(n
a}e  Sbaei  u_ad U 'rsetDarhId($darhIdtgfal  y crl u ttdarhId(= $darhId(n
a}e  Sbaei  u_ad U 'rgetDarhId(tgfal  y cr  d_r  l u ttdarhId(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetMetroCode($metroCodetgfal  y crl u ttmetroCode SatmetroCode;  y}e  Sbaei  u_ad U 'rgetMetroCode(tgfal  y cr  d_r  l u ttmetroCode;  y}e  Sbaei  u_ad U 'rsetMetroDmaId($metroDmaIdtgfal  y crl u ttmetroDmaId SatmetroDmaId(n
a}e  Sbaei  u_ad U 'rgetMetroDmaId(tgfal  y cr  d_r  l u ttmetroDmaId(n
a}e  Sbaei  u_ad U 'rsetNDI ($ietgtgfal  y crl u ttietg(= $ietg(n
a}e  Sbaei  u_ad U 'rgetNDI (tgfal  y cr  d_r  l u ttietg(n
a}e  Sbaei  u_ad U 'rsetRegi 'Codg($regi 'Codgtgfal  y crl u ttregi 'Codg(= $regi 'Codg(n
a}e  Sbaei  u_ad U 'rgetRegi 'Codg(tgfal  y cr  d_r  l u ttregi 'Codg(n
a}e  Sbaei  u_ad U 'rsetRegi 'DarhId($regi 'DarhIdtgfal  y crl u ttregi 'DarhId(= $regi 'DarhId(n
a}e  Sbaei  u_ad U 'rgetRegi 'DarhId(tgfal  y cr  d_r  l u ttregi 'DarhId(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi Cli kTaga(_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $av  hNetg(n
aSbaei  $ietg(n
aSbaei  $vn
"C(n
e  Sbaei  u_ad U 'rsetEv  hNetg($av  hNetgtgfal  y crl u ttav  hNetg(= $av  hNetg(n
a}e  Sbaei  u_ad U 'rgetEv  hNetg(tgfal  y cr  d_r  l u ttav  hNetg(n
a}e  Sbaei  u_ad U 'rsetNDI ($ietgtgfal  y crl u ttietg(= $ietg(n
a}e  Sbaei  u_ad U 'rgetNDI (tgfal  y cr  d_r  l u ttietg(n
a}e  Sbaei  u_ad U 'rsetan
"C($vn
"Ctgfal  y crl u ttvn
"Cd  $vn
"C(n
a}e  Sbaei  u_ad U 'rgetan
"C(tgfal  y cr  d_r  l u ttvn
"C(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi Cli kThroughUrla(_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $customCli kThroughUrl(n
aSbaei  $dnxRin Landooi  p (n
aSbaei  $landooi  p Id(n
e  Sbaei  u_ad U 'rsetCustomCli kThroughUrl($customCli kThroughUrltgfal  y crl u ttnustomCli kThroughUrl(= $customCli kThroughUrl(n
a}e  Sbaei  u_ad U 'rgetCustomCli kThroughUrl(tgfal  y cr  d_r  l u ttcustomCli kThroughUrl(n
a}e  Sbaei  u_ad U 'rsetDnxRin Landooi  p ($dnxRin Landooi  p tgfal  y crl u ttdnxRin Landooi  p (= $dnxRin Landooi  p (n
a}e  Sbaei  u_ad U 'rgetDnxRin Landooi  p (tgfal  y cr  d_r  l u ttdnxRin Landooi  p (n
a}e  Sbaei  u_ad U 'rse Landooi  p Id($landooi  p Idtgfal  y crl u ttlandooi  p Id(= $landooi  p Id(n
a}e  Sbaei  u_ad U 'rgetLandooi  p Id(tgfal  y cr  d_r  l u ttlandooi  p Id(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi Cli kThroughUrlSuffixPy pr
nyCs (_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $cli kThroughUrlSuffix(n
aSbaei  $overridCInheriietSuffix(n
e  Sbaei  u_ad U 'rsetCli kThroughUrlSuffix($cei kThroughUrlSuffixtgfal  y crl u ttnei kThroughUrlSuffixD= $nei kThroughUrlSuffix(n
a}e  Sbaei  u_ad U 'rgetCli kThroughUrlSuffix(tgfal  y cr  d_r  l u ttnei kThroughUrlSuffix(n
a}e  Sbaei  u_ad U 'rsetOverridCInheriietSuffix($overridCInheriietSuffixtgfal  y crl u ttoverridCInheriietSuffixD= $overridCInheriietSuffix(n
a}e  Sbaei  u_ad U 'rgetOverridCInheriietSuffix(tgfal  y cr  d_r  l u ttoverridCInheriietSuffix(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi Compani 'Cei kThroughOverridC (_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSnyteFieta$nei kThroughUrlTyp d  'eeeu e_Mett g  (_in  Iriooi Cei kThroughUrl';  y
nyteFieta$cei kThroughUrlDataTyp d  ''(n
aSbaei  $nreae veId(n
e  Sbaei  u_ad U 'rsetCli kThroughUrl(eeeu e_Mett g  (_in  Iriooi Cei kThroughUrla$cei kThroughUrltgfal  y crl u ttnei kThroughUrlD= $nei kThroughUrl(n
a}e  Sbaei  u_ad U 'rgetCli kThroughUrl(tgfal  y cr  d_r  l u ttnei kThroughUrl(n
a}e  Sbaei  u_ad U 'rsetCreae veId($nreae veIdtgfal  y crl u ttnreae veId = $nreae veId(n
a}e  Sbaei  u_ad U 'rgetCreae vear(tgfal  y cr  d_r  l u ttnreae veId(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi CompatibleFiylds (_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSnyteFieta$crossDi   sir ReachR  IriCompatibleFiyldsTyp d  'eeeu e_Mett g  (_in  Iriooi CrossDi   sir ReachR  IriCompatibleFiylds'(n
aSnyteFieta$nrossDi   sir ReachR  IriCompatibleFiyldsDataTyp d  ''(n
aSnyteFieta$floodlighhR  IriCompatibleFiyldsTyp d  'eeeu e_Mett g  (_in  Iriooi FloodlighhR  IriCompatibleFiylds'(n
aSnyteFieta$floodlighhR  IriCompatibleFiyldsDataTyp d  ''(n
aSbaei  $kind(n
aSnyteFieta$pathToConvSeiiteR  IriCompatibleFiyldsTyp d  'eeeu e_Mett g  (_in  Iriooi PathToConvSeiiteR  IriCompatibleFiylds'(n
aSnyteFieta$pathToConvSeiiteR  IriCompatibleFiyldsDataTyp d  ''(n
aSnyteFieta$reachR  IriCompatibleFiyldsTyp d  'eeeu e_Mett g  (_in  Iriooi ReachR  IriCompatibleFiylds'(n
aSnyteFieta$reachR  IriCompatibleFiyldsDataTyp d  ''(n
aSnyteFieta$re IriCompatibleFiyldsTyp d  'eeeu e_Mett g  (_in  Iriooi Re IriCompatibleFiylds'(n
aSnyteFieta$re IriCompatibleFiyldsDataTyp d  ''(n
e  Sbaei  u_ad U 'rsetCrossDi   sir ReachR  IriCompatibleFiylds(eeeu e_Mett g  (_in  Iriooi CrossDi   sir ReachR  IriCompatibleFiyldsa$nrossDi   sir ReachR  IriCompatibleFiyldstgfal  y crl u ttnrossDi   sir ReachR  IriCompatibleFiylds = $nrossDi   sir ReachR  IriCompatibleFiylds(n
a}e  Sbaei  u_ad U 'rgetCrossDi   sir ReachR  IriCompatibleFiylds(tgfal  y cr  d_r  l u ttnrossDi   sir ReachR  IriCompatibleFiylds(n
a}e  Sbaei  u_ad U 'rsetFloodlighhR  IriCompatibleFiylds(eeeu e_Mett g  (_in  Iriooi FloodlighhR  IriCompatibleFiyldsa$floodlighhR  IriCompatibleFiyldstgfal  y crl u ttfloodlighhR  IriCompatibleFiylds = $floodlighhR  IriCompatibleFiylds(n
a}e  Sbaei  u_ad U 'rgetFloodlighhR  IriCompatibleFiylds(tgfal  y cr  d_r  l u ttfloodlighhR  IriCompatibleFiylds(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetPathToConvSeiiteR  IriCompatibleFiylds(eeeu e_Mett g  (_in  Iriooi PathToConvSeiiteR  IriCompatibleFiyldsa$pathToConvSeiiteR  IriCompatibleFiyldstgfal  y crl u ttpathToConvSeiiteR  IriCompatibleFiylds SatpathToConvSeiiteR  IriCompatibleFiylds(n
a}e  Sbaei  u_ad U 'rgetPathToConvSeiiteR  IriCompatibleFiylds(tgfal  y cr  d_r  l u ttpathToConvSeiiteR  IriCompatibleFiylds(n
a}e  Sbaei  u_ad U 'rsetReachR  IriCompatibleFiylds(eeeu e_Mett g  (_in  Iriooi ReachR  IriCompatibleFiyldsa$reachR  IriCompatibleFiyldstgfal  y crl u ttreachR  IriCompatibleFiylds = $reachR  IriCompatibleFiylds(n
a}e  Sbaei  u_ad U 'rgetReachR  IriCompatibleFiylds(tgfal  y cr  d_r  l u ttreachR  IriCompatibleFiylds(n
a}e  Sbaei  u_ad U 'rsetRe IriCompatibleFiylds(eeeu e_Mett g  (_in  Iriooi Re IriCompatibleFiyldsa$re IriCompatibleFiyldstgfal  y crl u ttre IriCompatibleFiylds = $re IriCompatibleFiylds(n
a}e  Sbaei  u_ad U 'rgetRe IriCompatibleFiylds(tgfal  y cr  d_r  l u ttre IriCompatibleFiylds(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi Connt   _aTyp d(_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $id(n
aSbaei  $kind(n
aSbaei  $ietg(n
e  Sbaei  u_ad U 'rsetId($idtgfal  y crl u ttid Satid(n
a}e  Sbaei  u_ad U 'rgetId(tgfal  y cr  d_r  l u ttid(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetNDI ($ietgtgfal  y crl u ttietg(= $ietg(n
a}e  Sbaei  u_ad U 'rgetNDI (tgfal  y cr  d_r  l u ttietg(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi Connt   _aTyp sqDI( u  Se' t(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'connt   _aTyp s'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSnyteFieta$nonnt   _aTyp sTyp d  'eeeu e_Mett g  (_in  Iriooi Connt   _aTyp '(n
aSnyteFieta$nonnt   _aTyp sDataTyp d  'eal I'(n
aSbaei  $kind(n
e  Sbaei  u_ad U 'rsetConnt   _aTyp s($nonnt   _aTyp stgfal  y crl u ttnonnt   _aTyp s = $nonnt   _aTyp s(n
a}e  Sbaei  u_ad U 'rgetConnt   _aTyp s(tgfal  y cr  d_r  l u ttnonnt   _aTyp s(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi ConSattCategoryCsqDI( u  Se' t(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'conSattCategoryCs'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSnyteFieta$nonSattCategoryCsTyp d  'eeeu e_Mett g  (_in  Iriooi ConSattCategory'(n
aSnyteFieta$nonSattCategoryCsDataTyp d  'eal I'(n
aSbaei  $kind(n
aSbaei  $i h'  p  S   (n
e  Sbaei  u_ad U 'rsetConSattCategoryCs($nonSattCategoryCstgfal  y crl u ttnonSattCategoryCs = $nonSattCategoryCs(n
a}e  Sbaei  u_ad U 'rgetConSattCategoryCs(tgfal  y cr  d_r  l u ttnonSattCategoryCs(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetN h'  p  S   ($  h'  p  S   tgfal  y crl u tti h'  p  S    = $  h'  p  S   (n
a}e  Sbaei  u_ad U 'rgetN h'  p  S   (tgfal  y cr  d_r  l u tti h'  p  S   (n
a}e}     _a eeeu e_Mett g  (_in  Iriooi ConSattCategoryd(_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $accou har(n
aSbaei  $id(n
aSbaei  $kind(n
aSbaei  $ietg(n
e  Sbaei  u_ad U 'rsetAccou har($accou hartgfal  y crl u ttaccou harg= $accou hId(n
a}e  Sbaei  u_ad U 'rgetAccou hId(tgfal  y cr  d_r  l u ttaccou hId(n
a}e  Sbaei  u_ad U 'rsetId($idtgfal  y crl u ttid Satid(n
a}e  Sbaei  u_ad U 'rgetId(tgfal  y cr  d_r  l u ttid(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetNDI ($ietgtgfal  y crl u ttietg(= $ietg(n
a}e  Sbaei  u_ad U 'rgetNDI (tgfal  y cr  d_r  l u ttietg(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi Cou hryCsqDI( u  Se' t(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'cou hryCs'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSnyteFieta$nou hryCsTyp d  'eeeu e_Mett g  (_in  Iriooi Cou hry'(n
aSnyteFieta$nou hryCsDataTyp d  'eal I'(n
aSbaei  $kind(n
e  Sbaei  u_ad U 'rsetCou hryCs($nou hryCstgfal  y crl u ttnou hryCs = $nou hryCs(n
a}e  Sbaei  u_ad U 'rgetCou hryCs(tgfal  y cr  d_r  l u ttnou hryCs(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi Cou hryd(_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $cou hryCode;  ySbaei  $darhId(n
aSbaei  $kind(n
aSbaei  $ietg(n
aSbaei  $sslEnabled(n
e  Sbaei  u_ad U 'rsetCou hryCode($cou hryCodetgfal  y crl u ttnou hryCode = $cou hryCode;  y}e  Sbaei  u_ad U 'rgetCou hryCode(tgfal  y cr  d_r  l u ttcou hryCode;  y}e  Sbaei  u_ad U 'rsetDarhId($darhIdtgfal  y crl u ttdarhId(= $darhId(n
a}e  Sbaei  u_ad U 'rgetDarhId(tgfal  y cr  d_r  l u ttdarhId(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetNDI ($ietgtgfal  y crl u ttietg(= $ietg(n
a}e  Sbaei  u_ad U 'rgetNDI (tgfal  y cr  d_r  l u ttietg(n
a}e  Sbaei  u_ad U 'rsetSslEnabled($sslEnabledtgfal  y crl u ttsslEnabled(= $sslEnabled(n
a}e  Sbaei  u_ad U 'rgetSslEnabled(tgfal  y cr  d_r  l u ttsslEnabled(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi Creae vet(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'timerCustomEv  hs'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  yyyyyyy"autoAdvanceIm p s" =>y"auto_advance_im p s",
 y'(n
aSbaei  $accou har(n
aSbaei  $ad Uvg(n
aSbaei  $adParetgtSei(n
aSbaei  $adTagKeyi(n
aSbaei  $adIr
nyoSeId(n
aSbaei  $allowScriptAccesi(n
aSbaei  $atal_ved(n
aSbaei  $attworkTyp (n
aSbaei  $authoryngTool(n
aSbaei  $autoAdvanceIm p s(n
aSbaei  $backgrou dC dor(n
aSbaei  $backupIm p Cli kThroughUrl(n
aSbaei  $backupIm p Feaeur s(n
aSbaei  $backupIm p R  IriooiLabel(n
aSnyteFieta$backupIm p TargetWindowTyp d  'eeeu e_Mett g  (_in  Iriooi TargetWindow'(n
aSnyteFieta$backupIm p TargetWindowDataTyp d  ''(n
aSnyteFieta$nei kTagsTyp d  'eeeu e_Mett g  (_in  Iriooi Cei kTag'(n
aSnyteFieta$nei kTagsDataTyp d  'eal I'(n
aSbaei  $com  rciseId(n
aSbaei  $compani 'Creae ves(n
aSbaei  $compatibility(n
aSbaei  $convSetF  _hToHtml5(n
aSnyteFieta$nou herCustomEv  hsTyp d  'eeeu e_Mett g  (_in  Iriooi Creae veCustomEv  h'(n
aSnyteFieta$nou herCustomEv  hsDataTyp d  'eal I'(n
aSnyteFieta$nreae veAssehsTyp d  'eeeu e_Mett g  (_in  Iriooi Creae veAsseh'(n
aSnyteFieta$nreae veAssehsDataTyp d  'eal I'(n
aSnyteFieta$nreae veFiyldAssignm  hsTyp d  'eeeu e_Mett g  (_in  Iriooi Creae veFiyldAssignm  h'(n
aSnyteFieta$nreae veFiyldAssignm  hsDataTyp d  'eal I'(n
aSbaei  $customKeyan
"Cs(n
aSnyteFieta$exitCustomEv  hsTyp d  'eeeu e_Mett g  (_in  Iriooi Creae veCustomEv  h'(n
aSnyteFieta$exitCustomEv  hsDataTyp d  'eal I'(n
aSnyteFieta$fsCom andTyp d  'eeeu e_Mett g  (_in  Iriooi FsCom and'(n
aSnyteFieta$fsCom andDataTyp d  ''(n
aSbaei  $htmlCode;  ySbaei  $htmlCodeLocked(n
aSbaei  $id(n
aSnyteFieta$idDi   sir an
"CTyp d  'eeeu e_Mett g  (_in  Iriooi Di   sir an
"C';  y
nyteFieta$irDi   sir an
"CDataTyp d  ''(n
aSbaei  $kind(n
aSnyteFieta$lastModifiydInfoTyp d  'eeeu e_Mett g  (_in  Iriooi LastModifiydInfo'(n
aSnyteFieta$lastModifiydInfoDataTyp d  ''(n
aSbaei  $latestTraffick dCreae vear(n
aSbaei  $ietg(n
aSbaei  $overridCCsi(n
aSbaei  $redireFiUrl(n
aSbaei  $rataeryngId(n
aSnyteFieta$rataeryngIdDi   sir an
"CTyp d  'eeeu e_Mett g  (_in  Iriooi Di   sir an
"C';  y
nyteFieta$rataeryngIdDi   sir an
"CDataTyp d  ''(n
aSbaei  $requiredF  _hPluginVSeiite(n
aSbaei  $requiredF  _hVSeiite(n
aSnyteFieta$sizCTyp d  'eeeu e_Mett g  (_in  Iriooi SizC';  y
nyteFieta$sizCDataTyp d  ''(n
aSbaei  $skippable(n
aSbaei  $sslComplia h(n
aSbaei  $studioAdIr
nyoSeId(n
aSbaei  $studioCreae vear(n
aSbaei  $studioTraffick dCreae vear(n
aSbaei  $subaccou har(n
aSbaei  $thirdPartyBackupIm p Impr siitesUrl(n
aSbaei  $thirdPartyRichMediaImpr siitesUrl(n
aSnyteFieta$thirdPartyUrlsTyp d  'eeeu e_Mett g  (_in  Iriooi ThirdPartyTrackingUrl';  y
nyteFieta$thirdPartyUrlsDataTyp d  'eal I'(n
aSnyteFieta$timerCustomEv  hsTyp d  'eeeu e_Mett g  (_in  Iriooi Creae veCustomEv  h'(n
aSnyteFieta$timerCustomEv  hsDataTyp d  'eal I'(n
aSbaei  $totalFileSizC(n
aSbaei  $typ (n
aSbaei  $vSeiite(n
aSbaei  $vidCoDescriptite(n
aSbaei  $vidCoDurasate(n
e  Sbaei  u_ad U 'rsetAccou har($accou hartgfal  y crl u ttaccou harg= $accou hId(n
a}e  Sbaei  u_ad U 'rgetAccou hId(tgfal  y cr  d_r  l u ttaccou hId(n
a}e  Sbaei  u_ad U 'rsetAd Uvg($ad Uvgtgfal  y crl u ttace vet= $ad Uvg(n
a}e  Sbaei  u_ad U 'rgetAc Uvg(tgfal  y cr  d_r  l u ttac Uvg(n
a}e  Sbaei  u_ad U 'rsetAdParetgtSei($adParetgtSeitgfal  y crl u ttadParetgtSeit= $adParetgtSei(n
a}e  Sbaei  u_ad U 'rgetAdParetgtSei(tgfal  y cr  d_r  l u ttadParetgtSei(n
a}e  Sbaei  u_ad U 'rsetAdTagKeyi($adTagKeyitgfal  y crl u ttadTagKeyit= $adTagKeyi(n
a}e  Sbaei  u_ad U 'rgetAdTagKeyi(tgfal  y cr  d_r  l u ttadTagKeyi(n
a}e  Sbaei  u_ad U 'rsetAdIr
nyoSeId($a Ir
nyoSeartgfal  y crl u tta Ir
nyoSearg= $a Ir
nyoSeId(n
a}e  Sbaei  u_ad U 'rgetA Ir
nyoSear(tgfal  y cr  d_r  l u tta Ir
nyoSeId(n
a}e  Sbaei  u_ad U 'rsetAllowScriptAccesi($allowScriptAccesitgfal  y crl u ttallowScriptAccesig= $allowScriptAccesi(n
a}e  Sbaei  u_ad U 'rgetAllowScriptAccesi(tgfal  y cr  d_r  l u ttallowScriptAccesi(n
a}e  Sbaei  u_ad U 'rsetAtal_ved($Ptal_vedtgfal  y crl u ttatal_veda=a$atal_ved(n
a}e  Sbaei  u_ad U 'rgetAtal_ved(tgfal  y cr  d_r  l u ttatal_ved(n
a}e  Sbaei  u_ad U 'rsetAttworkTyp ($attworkTyp tgfal  y crl u ttattworkTyp a=a$attworkTyp (n
a}e  Sbaei  u_ad U 'rgetAttworkTyp (tgfal  y cr  d_r  l u ttattworkTyp (n
a}e  Sbaei  u_ad U 'rsetAuthoryngTool($authoryngTooltgfal  y crl u ttauthoryngToola=a$authoryngTool(n
a}e  Sbaei  u_ad U 'rgetAuthoryngTool(tgfal  y cr  d_r  l u ttauthoryngTool(n
a}e  Sbaei  u_ad U 'rsetAutoAdvanceIm p s($autoAdvanceIm p stgfal  y crl u ttautoAdvanceIm p sa=a$autoAdvanceIm p s(n
a}e  Sbaei  u_ad U 'rgetAutoAdvanceIm p s(tgfal  y cr  d_r  l u ttautoAdvanceIm p s(n
a}e  Sbaei  u_ad U 'rsetBackgrou dC dor($backgrou dC dortgfal  y crl u ttbackgrou dC dora=a$backgrou dC dor(n
a}e  Sbaei  u_ad U 'rgetBackgrou dC dor(tgfal  y cr  d_r  l u ttbackgrou dC dor(n
a}e  Sbaei  u_ad U 'rsetBackupIm p Cli kThroughUrl($backupIm p Cli kThroughUrltgfal  y crl u ttbackupIm p Cli kThroughUrla=a$backupIm p Cli kThroughUrl(n
a}e  Sbaei  u_ad U 'rgetBackupIm p Cli kThroughUrl(tgfal  y cr  d_r  l u ttbackupIm p Cli kThroughUrl(n
a}e  Sbaei  u_ad U 'rsetBackupIm p Feaeur s($backupIm p Feaeur stgfal  y crl u ttbackupIm p Feaeur sa=a$backupIm p Feaeur s(n
a}e  Sbaei  u_ad U 'rgetBackupIm p Feaeur s(tgfal  y cr  d_r  l u ttbackupIm p Feaeur s(n
a}e  Sbaei  u_ad U 'rsetBackupIm p R  IriooiLabel($backupIm p R  IriooiLabeltgfal  y crl u ttbackupIm p R  IriooiLabela=a$backupIm p R  IriooiLabel(n
a}e  Sbaei  u_ad U 'rgetBackupIm p R  IriooiLabel(tgfal  y cr  d_r  l u ttbackupIm p R  IriooiLabel(n
a}e  Sbaei  u_ad U 'rsetBackupIm p TargetWindow(eeeu e_Mett g  (_in  Iriooi TargetWindowa$backupIm p TargetWindowtgfal  y crl u ttbackupIm p TargetWindowa=a$backupIm p TargetWindow(n
a}e  Sbaei  u_ad U 'rgetBackupIm p TargetWindow(tgfal  y cr  d_r  l u ttbackupIm p TargetWindow(n
a}e  Sbaei  u_ad U 'rsetCli kTags($nli kTagstgfal  y crl u ttnli kTagsa=a$nli kTags(n
a}e  Sbaei  u_ad U 'rgetCli kTags(tgfal  y cr  d_r  l u ttnli kTags(n
a}e  Sbaei  u_ad U 'rsetCom  rciseId($com  rciseIdtgfal  y crl u ttnom  rciseIda=a$nom  rciseId(n
a}e  Sbaei  u_ad U 'rgetCom  rciseId(tgfal  y cr  d_r  l u ttnom  rciseId(n
a}e  Sbaei  u_ad U 'rsetCompani 'Creae ves($compani 'Creae vestgfal  y crl u ttnompani 'Creae vesa=a$nompani 'Creae ves(n
a}e  Sbaei  u_ad U 'rgetCompani 'Creae ves(tgfal  y cr  d_r  l u ttnompani 'Creae ves(n
a}e  Sbaei  u_ad U 'rsetCompatibility($compatibilitytgfal  y crl u ttnompatibilitya=a$nompatibility(n
a}e  Sbaei  u_ad U 'rgetCompatibility(tgfal  y cr  d_r  l u ttnompatibility(n
a}e  Sbaei  u_ad U 'rsetConvSetF  _hToHtml5($convSetF  _hToHtml5tgfal  y crl u ttnonvSetF  _hToHtml5a=a$nonvSetF  _hToHtml5(n
a}e  Sbaei  u_ad U 'rgetConvSetF  _hToHtml5(tgfal  y cr  d_r  l u ttnonvSetF  _hToHtml5(n
a}e  Sbaei  u_ad U 'rsetCou herCustomEv  hs($nou herCustomEv  hstgfal  y crl u ttnou herCustomEv  hs = $cou herCustomEv  hs(n
a}e  Sbaei  u_ad U 'rgetCou herCustomEv  hs(tgfal  y cr  d_r  l u ttnou herCustomEv  hs(n
a}e  Sbaei  u_ad U 'rsetCreae veAssehs($nreae veAssehstgfal  y crl u ttnreae veAssehs = $creae veAssehs(n
a}e  Sbaei  u_ad U 'rgetCreae veAssehs(tgfal  y cr  d_r  l u ttnreae veAssehs(n
a}e  Sbaei  u_ad U 'rsetCreae veFiyldAssignm  hs($nreae veFiyldAssignm  hstgfal  y crl u ttnreae veFiyldAssignm  hs = $creae veFiyldAssignm  hs(n
a}e  Sbaei  u_ad U 'rgetCreae veFiyldAssignm  hs(tgfal  y cr  d_r  l u ttnreae veFiyldAssignm  hs(n
a}e  Sbaei  u_ad U 'rsetCustomKeyan
"Cs($customKeyan
"Cstgfal  y crl u ttnustomKeyan
"Cs = $customKeyan
"Cs(n
a}e  Sbaei  u_ad U 'rgetCustomKeyan
"Cs(tgfal  y cr  d_r  l u ttnustomKeyan
"Cs(n
a}e  Sbaei  u_ad U 'rsetExitCustomEv  hs($exitCustomEv  hstgfal  y crl u ttexitCustomEv  hs = $exitCustomEv  hs(n
a}e  Sbaei  u_ad U 'rgetExitCustomEv  hs(tgfal  y cr  d_r  l u ttexitCustomEv  hs(n
a}e  Sbaei  u_ad U 'rsetFsCom and(eeeu e_Mett g  (_in  Iriooi FsCom anda$fsCom andtgfal  y crl u ttfsCom and = $fsCom and(n
a}e  Sbaei  u_ad U 'rgetFsCom and(tgfal  y cr  d_r  l u ttfsCom and(n
a}e  Sbaei  u_ad U 'rsetHtmlCode($htmlCodetgfal  y crl u tthtmlCode = $htmlCode;  y}e  Sbaei  u_ad U 'rgetHtmlCode(tgfal  y cr  d_r  l u tthtmlCode;  y}e  Sbaei  u_ad U 'rsetHtmlCodeLocked($htmlCodeLockedtgfal  y crl u tthtmlCodeLocked = $htmlCodeLocked(n
a}e  Sbaei  u_ad U 'rgetHtmlCodeLocked(tgfal  y cr  d_r  l u tthtmlCodeLocked(n
a}e  Sbaei  u_ad U 'rsetId($idtgfal  y crl u ttid Satid(n
a}e  Sbaei  u_ad U 'rgetId(tgfal  y cr  d_r  l u ttid(n
a}e  Sbaei  u_ad U 'rsetarDi   sir an
"C(eeeu e_Mett g  (_in  Iriooi Di   sir an
"Ca$irDi   sir an
"Ctgfal  y crl u ttidDi   sir an
"Ca=a$idDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rgetIdDi   sir an
"C(tgfal  y cr  d_r  l u ttidDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetLastModifiydInfo(eeeu e_Mett g  (_in  Iriooi LastModifiydInfoa$lastModifiydInfotgfal  y crl u ttlastModifiydInfo SatlastModifiydInfo(n
a}e  Sbaei  u_ad U 'rgetLastModifiydInfo(tgfal  y cr  d_r  l u ttlastModifiydInfo(n
a}e  Sbaei  u_ad U 'rsetLatestTraffick dCreae vear($latestTraffick dCreae veartgfal  y crl u ttlatestTraffick dCreae vear SatlatestTraffick dCreae vear(n
a}e  Sbaei  u_ad U 'rgetLatestTraffick dCreae vear(tgfal  y cr  d_r  l u ttlatestTraffick dCreae vear(n
a}e  Sbaei  u_ad U 'rsetNDI ($ietgtgfal  y crl u ttietg(= $ietg(n
a}e  Sbaei  u_ad U 'rgetNDI (tgfal  y cr  d_r  l u ttietg(n
a}e  Sbaei  u_ad U 'rsetOverridCCsi($overridCCsitgfal  y crl u ttoverridCCsi(= $overridCCsi(n
a}e  Sbaei  u_ad U 'rgetOverridCCsi(tgfal  y cr  d_r  l u ttoverridCCsi(n
a}e  Sbaei  u_ad U 'rsetRedireFiUrl($redireFiUrltgfal  y crl u ttredireFiUrl(= $redireFiUrl(n
a}e  Sbaei  u_ad U 'rgetRedireFiUrl(tgfal  y cr  d_r  l u ttredireFiUrl(n
a}e  Sbaei  u_ad U 'rsetRetaeryngId($rataeryngIdtgfal  y crl u ttretaeryngId(= $retaeryngId(n
a}e  Sbaei  u_ad U 'rgetRetaeryngId(tgfal  y cr  d_r  l u ttretaeryngId(n
a}e  Sbaei  u_ad U 'rsetRetaeryngIdDi   sir an
"C(eeeu e_Mett g  (_in  Iriooi Di   sir an
"Ca$rataeryngIdDi   sir an
"Ctgfal  y crl u ttretaeryngIdDi   sir an
"Ca=a$retaeryngIdDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rgetRetaeryngIdDi   sir an
"C(tgfal  y cr  d_r  l u ttretaeryngIdDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rsetRequiredF  _hPluginVSeiite($requiredF  _hPluginVSeiitetgfal  y crl u ttrequiredF  _hPluginVSeiitea=a$requiredF  _hPluginVSeiite(n
a}e  Sbaei  u_ad U 'rgetRequiredF  _hPluginVSeiite(tgfal  y cr  d_r  l u ttrequiredF  _hPluginVSeiite(n
a}e  Sbaei  u_ad U 'rsetRequiredF  _hVSeiite($requiredF  _hVSeiitetgfal  y crl u ttrequiredF  _hVSeiitea=a$requiredF  _hVSeiite(n
a}e  Sbaei  u_ad U 'rgetRequiredF  _hVSeiite(tgfal  y cr  d_r  l u ttrequiredF  _hVSeiite(n
a}e  Sbaei  u_ad U 'rsetSizC(eeeu e_Mett g  (_in  Iriooi SizCa$sizCtgfal  y crl u ttsizCa=a$sizC(n
a}e  Sbaei  u_ad U 'rgetSizC(tgfal  y cr  d_r  l u ttsizC(n
a}e  Sbaei  u_ad U 'rsetSkippable($skippabletgfal  y crl u ttskippablea=a$skippable(n
a}e  Sbaei  u_ad U 'rgetSkippable(tgfal  y cr  d_r  l u ttskippable(n
a}e  Sbaei  u_ad U 'rsetSslComplia h($sslComplia htgfal  y crl u ttsslComplia ha=a$sslComplia h(n
a}e  Sbaei  u_ad U 'rgetSslComplia h(tgfal  y cr  d_r  l u ttsslComplia h(n
a}e  Sbaei  u_ad U 'rsetStudioAdIr
nyoSeId($studioAdIr
nyoSeIdtgfal  y crl u ttstudioAdIr
nyoSeIda=a$studioAdIr
nyoSeId(n
a}e  Sbaei  u_ad U 'rgetStudioAdIr
nyoSeId(tgfal  y cr  d_r  l u ttstudioAdIr
nyoSeId(n
a}e  Sbaei  u_ad U 'rsetStudioCreae vear($studioCreae veartgfal  y crl u ttstudioCreae vear SatstudioCreae vear(n
a}e  Sbaei  u_ad U 'rgetStudioCreae vear(tgfal  y cr  d_r  l u ttstudioCreae vear(n
a}e  Sbaei  u_ad U 'rsetStudioTraffick dCreae vear($studioTraffick dCreae veartgfal  y crl u ttstudioTraffick dCreae vear SatstudioTraffick dCreae vear(n
a}e  Sbaei  u_ad U 'rgetStudioTraffick dCreae vear(tgfal  y cr  d_r  l u ttstudioTraffick dCreae vear(n
a}e  Sbaei  u_ad U 'rsetSubaccou har($ ubaccou hartgfal  y crl u tttubaccou harg= $ ubaccou har(n
a}e  Sbaei  u_ad U 'rgetSubaccou har(tgfal  y cr  d_r  l u tttubaccou har(n
a}e  Sbaei  u_ad U 'rsetThirdPartyBackupIm p Impr siitesUrl( l urdPartyBackupIm p Impr siitesUrltgfal  y crl u ttl urdPartyBackupIm p Impr siitesUrlg= $l urdPartyBackupIm p Impr siitesUrl(n
a}e  Sbaei  u_ad U 'rgetThirdPartyBackupIm p Impr siitesUrl(tgfal  y cr  d_r  l u ttl urdPartyBackupIm p Impr siitesUrl(n
a}e  Sbaei  u_ad U 'rsetThirdPartyRichMediaImpr siitesUrl( l urdPartyRichMediaImpr siitesUrltgfal  y crl u ttl urdPartyRichMediaImpr siitesUrlg= $l urdPartyRichMediaImpr siitesUrl(n
a}e  Sbaei  u_ad U 'rgetThirdPartyRichMediaImpr siitesUrl(tgfal  y cr  d_r  l u ttl urdPartyRichMediaImpr siitesUrl(n
a}e  Sbaei  u_ad U 'rsetThirdPartyUrls( l urdPartyUrlstgfal  y crl u ttl urdPartyUrlsg= $l urdPartyUrls(n
a}e  Sbaei  u_ad U 'rgetThirdPartyUrls(tgfal  y cr  d_r  l u ttl urdPartyUrls(n
a}e  Sbaei  u_ad U 'rsetTimerCustomEv  hs($timerCustomEv  hstgfal  y crl u ttlimerCustomEv  hsg= $limerCustomEv  hs(n
a}e  Sbaei  u_ad U 'rgetTimerCustomEv  hs(tgfal  y cr  d_r  l u ttlimerCustomEv  hs(n
a}e  Sbaei  u_ad U 'rsetTotalFileSizC($totalFileSizCtgfal  y crl u ttlotalFileSizCg= $lotalFileSizC(n
a}e  Sbaei  u_ad U 'rgetTotalFileSizC(tgfal  y cr  d_r  l u ttlotalFileSizC(n
a}e  Sbaei  u_ad U 'rsetTyp ($typ tgfal  y crl u tttyp a=a$typ (n
a}e  Sbaei  u_ad U 'rgetTyp (tgfal  y cr  d_r  l u tttyp (n
a}e  Sbaei  u_ad U 'rsetVSeiite($vSeiitetgfal  y crl u ttvSeiitea=a$vSeiite(n
a}e  Sbaei  u_ad U 'rgetVSeiite(tgfal  y cr  d_r  l u ttvSeiite(n
a}e  Sbaei  u_ad U 'rsetVidCoDescriptite($vidCoDescriptitetgfal  y crl u ttvidCoDescriptitea=a$vidCoDescriptite(n
a}e  Sbaei  u_ad U 'rgetVidCoDescriptite(tgfal  y cr  d_r  l u ttvidCoDescriptite(n
a}e  Sbaei  u_ad U 'rsetVidCoDurasate($vidCoDurasatetgfal  y crl u ttvidCoDurasatea=a$vidCoDurasate(n
a}e  Sbaei  u_ad U 'rgetVidCoDurasate(tgfal  y cr  d_r  l u ttvidCoDurasate(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi Creae veAsseht(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'deteFietFeaeur s'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $ac  _aScript3(n
aSbaei  $ac  vg(n
aSbaei  $alignm  h(n
aSbaei  $attworkTyp (n
aSnyteFieta$assetar  hifiyrTyp d  'eeeu e_Mett g  (_in  Iriooi Creae veAssetar'(n
aSnyteFieta$assetar  hifiyrDataTyp d  ''(n
aSnyteFieta$backupIm p ExitTyp d  'eeeu e_Mett g  (_in  Iriooi Creae veCustomEv  h'(n
aSnyteFieta$backupIm p ExitDataTyp d  ''(n
aSbaei  $bitRatg(n
aSbaei  $childAssetTyp (n
aSnyteFieta$n dlapsedSizCTyp d  'eeeu e_Mett g  (_in  Iriooi SizC';  y
nyteFieta$n dlapsedSizCDataTyp d  ''(n
aSbaei  $nustomStattTimean
"C(n
aSbaei  $deteFietFeaeur s(n
aSbaei  $displayTyp (n
aSbaei  $durasate(n
aSbaei  $durasateTyp (n
aSnyteFieta$expandedDi   sir Typ d  'eeeu e_Mett g  (_in  Iriooi SizC';  y
nyteFieta$expandedDi   sir DataTyp d  ''(n
aSbaei  $fileSizC(n
aSbaei  $f  _hVSeiite(n
aSbaei  $hidCF  _hObjeFis(n
aSbaei  $hidCSelt   _aBox s(n
aSbaei  $horyzontallyLocked(n
aSbaei  $id(n
aSbaei  $mi  Typ (n
aSnyteFieta$offsetTyp d  'eeeu e_Mett g  (_in  Iriooi OffsetPosi  _a';  y
nyteFieta$offsetDataTyp d  ''(n
aSbaei  $orygieseBackup;  y
nyteFieta$posi  _aTyp d  'eeeu e_Mett g  (_in  Iriooi OffsetPosi  _a';  y
nyteFieta$posi  _aDataTyp d  ''(n
aSbaei  $posi  _aLeftUnit(n
aSbaei  $posi  _aTopUnit(n
aSbaei  $progr siiveMett ngUrl(n
aSbaei  $pushdown(n
aSbaei  $pushdownDurasate(n
aSbaei  $rol (n
aSnyteFieta$sizCTyp d  'eeeu e_Mett g  (_in  Iriooi SizC';  y
nyteFieta$sizCDataTyp d  ''(n
aSbaei  $sslComplia h(n
aSbaei  $stattTimeTyp (n
aSbaei  $streamooiMett ngUrl(n
aSbaei  $transpin ncy(n
aSbaei  $Ir
nycallyLocked(n
aSbaei  $vidCoDurasate(n
aSbaei  $windowMode;  ySbaei  $zIndex(n
aSbaei  $zipFileietg(n
aSbaei  $zipFilesizC(n
e  Sbaei  u_ad U 'rsetAc  _aScript3($ac  _aScript3tgfal  y crl u ttac  _aScript3a=a$ac  _aScript3(n
a}e  Sbaei  u_ad U 'rgetAc  _aScript3(tgfal  y cr  d_r  l u ttac  _aScript3(n
a}e  Sbaei  u_ad U 'rsetAd Uvg($ad Uvgtgfal  y crl u ttace vet= $ad Uvg(n
a}e  Sbaei  u_ad U 'rgetAc Uvg(tgfal  y cr  d_r  l u ttac Uvg(n
a}e  Sbaei  u_ad U 'rsetAlignm  h($alignm  htgfal  y crl u ttalignm  ht= $alignm  h(n
a}e  Sbaei  u_ad U 'rgetAlignm  h(tgfal  y cr  d_r  l u ttalignm  h(n
a}e  Sbaei  u_ad U 'rsetAttworkTyp ($attworkTyp tgfal  y crl u ttattworkTyp a=a$attworkTyp (n
a}e  Sbaei  u_ad U 'rgetAttworkTyp (tgfal  y cr  d_r  l u ttattworkTyp (n
a}e  Sbaei  u_ad U 'rsetAssetar  hifiyr(eeeu e_Mett g  (_in  Iriooi Creae veAssetara$assetar  hifiyrtgfal  y crl u ttassetar  hifiyra=a$assetar  hifiyr(n
a}e  Sbaei  u_ad U 'rgetAssetar  hifiyr(tgfal  y cr  d_r  l u ttassetar  hifiyr(n
a}e  Sbaei  u_ad U 'rsetBackupIm p Exit(eeeu e_Mett g  (_in  Iriooi Creae veCustomEv  ha$backupIm p Exittgfal  y crl u ttbackupIm p Exita=a$backupIm p Exit(n
a}e  Sbaei  u_ad U 'rgetBackupIm p Exit(tgfal  y cr  d_r  l u ttbackupIm p Exit(n
a}e  Sbaei  u_ad U 'rsetBitRatg($bitRatgtgfal  y crl u ttbitRatga=a$bitRatg(n
a}e  Sbaei  u_ad U 'rgetBitRatg(tgfal  y cr  d_r  l u ttbitRatg(n
a}e  Sbaei  u_ad U 'rsetChildAssetTyp ($childAssetTyp tgfal  y crl u ttchildAssetTyp a=a$childAssetTyp (n
a}e  Sbaei  u_ad U 'rgetChildAssetTyp (tgfal  y cr  d_r  l u ttchildAssetTyp (n
a}e  Sbaei  u_ad U 'rsetC dlapsedSizC(eeeu e_Mett g  (_in  Iriooi SizCa$n dlapsedSizCtgfal  y crl u ttc dlapsedSizCa=a$c dlapsedSizC(n
a}e  Sbaei  u_ad U 'rgetC dlapsedSizC(tgfal  y cr  d_r  l u ttc dlapsedSizC(n
a}e  Sbaei  u_ad U 'rsetCustomStattTimean
"C($nustomStattTimean
"Ctgfal  y crl u ttcustomStattTimean
"Ca=a$customStattTimean
"C(n
a}e  Sbaei  u_ad U 'rgetCustomStattTimean
"C(tgfal  y cr  d_r  l u ttcustomStattTimean
"C(n
a}e  Sbaei  u_ad U 'rsetDeteFietFeaeur s($deteFietFeaeur stgfal  y crl u ttdeteFietFeaeur sa=a$deteFietFeaeur s(n
a}e  Sbaei  u_ad U 'rgetDeteFietFeaeur s(tgfal  y cr  d_r  l u ttdeteFietFeaeur s(n
a}e  Sbaei  u_ad U 'rsetDisplayTyp ($displayTyp tgfal  y crl u ttdisplayTyp a=a$displayTyp (n
a}e  Sbaei  u_ad U 'rgetDisplayTyp (tgfal  y cr  d_r  l u ttdisplayTyp (n
a}e  Sbaei  u_ad U 'rsetDurasate($durasatetgfal  y crl u ttdurasatea=a$durasate(n
a}e  Sbaei  u_ad U 'rgetDurasate(tgfal  y cr  d_r  l u ttdurasate(n
a}e  Sbaei  u_ad U 'rsetDurasateTyp ($durasateTyp tgfal  y crl u ttdurasateTyp a=a$durasateTyp (n
a}e  Sbaei  u_ad U 'rgetDurasateTyp (tgfal  y cr  d_r  l u ttdurasateTyp (n
a}e  Sbaei  u_ad U 'rsetExpandedDi   sir (eeeu e_Mett g  (_in  Iriooi SizCa$expandedDi   sir tgfal  y crl u ttexpandedDi   sir a=a$expandedDi   sir (n
a}e  Sbaei  u_ad U 'rgetExpandedDi   sir (tgfal  y cr  d_r  l u ttexpandedDi   sir (n
a}e  Sbaei  u_ad U 'rsetFileSizC($fileSizCtgfal  y crl u ttfileSizCa=a$fileSizC(n
a}e  Sbaei  u_ad U 'rgetFileSizC(tgfal  y cr  d_r  l u ttfileSizC(n
a}e  Sbaei  u_ad U 'rsetF  _hVSeiite($f  _hVSeiitetgfal  y crl u ttf  _hVSeiitea=a$f  _hVSeiite(n
a}e  Sbaei  u_ad U 'rgetF  _hVSeiite(tgfal  y cr  d_r  l u ttf  _hVSeiite(n
a}e  Sbaei  u_ad U 'rsetHidCF  _hObjeFis($hidCF  _hObjeFistgfal  y crl u tthidCF  _hObjeFisa=a$hidCF  _hObjeFis(n
a}e  Sbaei  u_ad U 'rgetHidCF  _hObjeFis(tgfal  y cr  d_r  l u tthidCF  _hObjeFis(n
a}e  Sbaei  u_ad U 'rsetHidCSelt   _aBox s($hidCSelt   _aBox stgfal  y crl u tthidCSelt   _aBox sa=a$hidCSelt   _aBox s(n
a}e  Sbaei  u_ad U 'rgetHidCSelt   _aBox s(tgfal  y cr  d_r  l u tthidCSelt   _aBox s(n
a}e  Sbaei  u_ad U 'rsetHoryzontallyLocked($horyzontallyLockedtgfal  y crl u tthoryzontallyLockeda=a$horyzontallyLocked(n
a}e  Sbaei  u_ad U 'rgetHoryzontallyLocked(tgfal  y cr  d_r  l u tthoryzontallyLocked(n
a}e  Sbaei  u_ad U 'rsetId($idtgfal  y crl u ttid Satid(n
a}e  Sbaei  u_ad U 'rgetId(tgfal  y cr  d_r  l u ttid(n
a}e  Sbaei  u_ad U 'rsetMimeTyp ($mi  Typ tgfal  y crl u ttmi  Typ  Satmi  Typ (n
a}e  Sbaei  u_ad U 'rgetMimeTyp (tgfal  y cr  d_r  l u ttmi  Typ (n
a}e  Sbaei  u_ad U 'rsetOffset(eeeu e_Mett g  (_in  Iriooi OffsetPosi  _aa$offsettgfal  y crl u ttoffset Satoffset(n
a}e  Sbaei  u_ad U 'rgetOffset(tgfal  y cr  d_r  l u ttoffset(n
a}e  Sbaei  u_ad U 'rsetOrygieseBackup($orygieseBackuptgfal  y crl u ttorygieseBackup SatorygieseBackup;  y}e  Sbaei  u_ad U 'rgetOrygieseBackup(tgfal  y cr  d_r  l u ttorygieseBackup;  y}e  Sbaei  u_ad U 'rsetPosi  _a(eeeu e_Mett g  (_in  Iriooi OffsetPosi  _aa$posi  _atgfal  y crl u ttposi  _a Satposi  _a;  y}e  Sbaei  u_ad U 'rgetPosi  _a(tgfal  y cr  d_r  l u ttposi  _a;  y}e  Sbaei  u_ad U 'rsetPosi  _aLeftUnit($posi  _aLeftUnittgfal  y crl u ttposi  _aLeftUnit Satposi  _aLeftUnit(n
a}e  Sbaei  u_ad U 'rgetPosi  _aLeftUnit(tgfal  y cr  d_r  l u ttposi  _aLeftUnit(n
a}e  Sbaei  u_ad U 'rsetPosi  _aTopUnit($posi  _aTopUnittgfal  y crl u ttposi  _aTopUnit Satposi  _aTopUnit(n
a}e  Sbaei  u_ad U 'rgetPosi  _aTopUnit(tgfal  y cr  d_r  l u ttposi  _aTopUnit(n
a}e  Sbaei  u_ad U 'rsetProgr siiveMett ngUrl($progr siiveMett ngUrltgfal  y crl u ttprogr siiveMett ngUrl Satprogr siiveMett ngUrl(n
a}e  Sbaei  u_ad U 'rgetProgr siiveMett ngUrl(tgfal  y cr  d_r  l u ttprogr siiveMett ngUrl(n
a}e  Sbaei  u_ad U 'rsetPushdown($pushdowntgfal  y crl u ttpushdown Satpushdown(n
a}e  Sbaei  u_ad U 'rgetPushdown(tgfal  y cr  d_r  l u ttpushdown(n
a}e  Sbaei  u_ad U 'rsetPushdownDurasate($pushdownDurasatetgfal  y crl u ttpushdownDurasate SatpushdownDurasate(n
a}e  Sbaei  u_ad U 'rgetPushdownDurasate(tgfal  y cr  d_r  l u ttpushdownDurasate(n
a}e  Sbaei  u_ad U 'rsetRole($rol tgfal  y crl u ttrol  Satrol (n
a}e  Sbaei  u_ad U 'rgetRole(tgfal  y cr  d_r  l u ttrol (n
a}e  Sbaei  u_ad U 'rsetSizC(eeeu e_Mett g  (_in  Iriooi SizCa$sizCtgfal  y crl u ttsizCa=a$sizC(n
a}e  Sbaei  u_ad U 'rgetSizC(tgfal  y cr  d_r  l u ttsizC(n
a}e  Sbaei  u_ad U 'rsetSslComplia h($sslComplia htgfal  y crl u ttsslComplia ha=a$sslComplia h(n
a}e  Sbaei  u_ad U 'rgetSslComplia h(tgfal  y cr  d_r  l u ttsslComplia h(n
a}e  Sbaei  u_ad U 'rsetStattTimeTyp ($stattTimeTyp tgfal  y crl u ttstattTimeTyp a=a$stattTimeTyp (n
a}e  Sbaei  u_ad U 'rgetStattTimeTyp (tgfal  y cr  d_r  l u ttstattTimeTyp (n
a}e  Sbaei  u_ad U 'rsetStreamooiMett ngUrl($streamooiMett ngUrltgfal  y crl u ttstreamooiMett ngUrla=a$streamooiMett ngUrl(n
a}e  Sbaei  u_ad U 'rgetStreamooiMett ngUrl(tgfal  y cr  d_r  l u ttstreamooiMett ngUrl(n
a}e  Sbaei  u_ad U 'rsetTranspin ncy($transpin ncytgfal  y crl u tttranspin ncya=a$transpin ncy(n
a}e  Sbaei  u_ad U 'rgetTranspin ncy(tgfal  y cr  d_r  l u tttranspin ncy(n
a}e  Sbaei  u_ad U 'rsetVSenycallyLocked($Ir
nycallyLockedtgfal  y crl u ttIr
nycallyLockeda=a$Ir
nycallyLocked(n
a}e  Sbaei  u_ad U 'rgetVSenycallyLocked(tgfal  y cr  d_r  l u ttIr
nycallyLocked(n
a}e  Sbaei  u_ad U 'rsetVidCoDurasate($vidCoDurasatetgfal  y crl u ttvidCoDurasatea=a$vidCoDurasate(n
a}e  Sbaei  u_ad U 'rgetVidCoDurasate(tgfal  y cr  d_r  l u ttvidCoDurasate(n
a}e  Sbaei  u_ad U 'rsetWindowMode($windowModetgfal  y crl u ttwindowModea=a$windowMode;  y}e  Sbaei  u_ad U 'rgetWindowMode(tgfal  y cr  d_r  l u ttwindowMode;  y}e  Sbaei  u_ad U 'rsetZIndex($zIndextgfal  y crl u ttzIndexa=a$zIndex(n
a}e  Sbaei  u_ad U 'rgetZIndex(tgfal  y cr  d_r  l u ttzIndex(n
a}e  Sbaei  u_ad U 'rsetZipFileietg($zipFileietgtgfal  y crl u ttzipFileietga=a$zipFileietg(n
a}e  Sbaei  u_ad U 'rgetZipFileietg(tgfal  y cr  d_r  l u ttzipFileietg(n
a}e  Sbaei  u_ad U 'rsetZipFilesizC($zipFilesizCtgfal  y crl u ttzipFilesizCa=a$zipFilesizC(n
a}e  Sbaei  u_ad U 'rgetZipFilesizC(tgfal  y cr  d_r  l u ttzipFilesizC(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi Creae veAssehIdd(_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $ietg(n
aSbaei  $typ (n
e  Sbaei  u_ad U 'rsetNDI ($ietgtgfal  y crl u ttietg(= $ietg(n
a}e  Sbaei  u_ad U 'rgetNDI (tgfal  y cr  d_r  l u ttietg(n
a}e  Sbaei  u_ad U 'rsetTyp ($typ tgfal  y crl u tttyp a=a$typ (n
a}e  Sbaei  u_ad U 'rgetTyp (tgfal  y cr  d_r  l u tttyp (n
a}e}     _a eeeu e_Mett g  (_in  Iriooi Creae veAssehMetadatat(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'warnedValidasateRul s'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSnyteFieta$assetar  hifiyrTyp d  'eeeu e_Mett g  (_in  Iriooi Creae veAssetar'(n
aSnyteFieta$assetar  hifiyrDataTyp d  ''(n
aSnyteFieta$nei kTagsTyp d  'eeeu e_Mett g  (_in  Iriooi Cei kTag'(n
aSnyteFieta$nei kTagsDataTyp d  'eal I'(n
aSbaei  $deteFietFeaeur s(n
aSbaei  $kind(n
aSbaei  $warnedValidasateRul s(n
e  Sbaei  u_ad U 'rsetAssetar  hifiyr(eeeu e_Mett g  (_in  Iriooi Creae veAssetara$assetar  hifiyrtgfal  y crl u ttassetar  hifiyra=a$assetar  hifiyr(n
a}e  Sbaei  u_ad U 'rgetAssetar  hifiyr(tgfal  y cr  d_r  l u ttassetar  hifiyr(n
a}e  Sbaei  u_ad U 'rsetCli kTags($nli kTagstgfal  y crl u ttnli kTagsa=a$nli kTags(n
a}e  Sbaei  u_ad U 'rgetCli kTags(tgfal  y cr  d_r  l u ttnli kTags(n
a}e  Sbaei  u_ad U 'rsetDeteFietFeaeur s($deteFietFeaeur stgfal  y crl u ttdeteFietFeaeur sa=a$deteFietFeaeur s(n
a}e  Sbaei  u_ad U 'rgetDeteFietFeaeur s(tgfal  y cr  d_r  l u ttdeteFietFeaeur s(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetWarnedValidasateRul s($warnedValidasateRul stgfal  y crl u ttwarnedValidasateRul sa=a$warnedValidasateRul s(n y}e  Sbaei  u_ad U 'rgetWarnedValidasateRul s(tgfal  y cr  d_r  l u ttwarnedValidasateRul s(n y}e}     _a eeeu e_Mett g  (_in  Iriooi Creae veAssignm  ht(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'richMediaExitOverridCs'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $ac  vg(n
aSbaei  $applyEv  hTags(n
aSnyteFieta$nei kThroughUrlTyp d  'eeeu e_Mett g  (_in  Iriooi Cei kThroughUrl'(n
aSnyteFieta$nei kThroughUrlDataTyp d  ''(n
aSnyteFieta$nompani 'Creae veOverridCsTyp d  'eeeu e_Mett g  (_in  Iriooi Compani 'Cei kThroughOverridC'(n
aSnyteFieta$nompani 'Creae veOverridCsDataTyp d  'eal I'(n
aSnyteFieta$nreae veGroupAssignm  hsTyp d  'eeeu e_Mett g  (_in  Iriooi Creae veGroupAssignm  h'(n
aSnyteFieta$nreae veGroupAssignm  hsDataTyp d  'eal I'(n
aSbaei  $creae vear(n
aSnyteFieta$nreae veIdDi   sir an
"CTyp d  'eeeu e_Mett g  (_in  Iriooi Di   sir an
"C';  y
nyteFieta$nreae veIdDi   sir an
"CDataTyp d  ''(n
aSbaei  $ataTime;  y
nyteFieta$richMediaExitOverridCsTyp d  'eeeu e_Mett g  (_in  Iriooi RichMediaExitOverridC';  y
nyteFieta$richMediaExitOverridCsDataTyp d  'eal I'(n
aSbaei  $sequ ncg(n
aSbaei  $sslComplia h(n
aSbaei  $stattTime(n
aSbaei  $weighh(n
e  Sbaei  u_ad U 'rsetAc  vg($ad Uvgtgfal  y crl u ttace vet= $ad Uvg(n
a}e  Sbaei  u_ad U 'rgetAc Uvg(tgfal  y cr  d_r  l u ttac Uvg(n
a}e  Sbaei  u_ad U 'rsetApplyEv  hTags($applyEv  hTagstgfal  y crl u ttapplyEv  hTagst= $applyEv  hTags(n
a}e  Sbaei  u_ad U 'rgetApplyEv  hTags(tgfal  y cr  d_r  l u ttapplyEv  hTags(n
a}e  Sbaei  u_ad U 'rsetCli kThroughUrl(eeeu e_Mett g  (_in  Iriooi Cei kThroughUrla$nei kThroughUrltgfal  y crl u ttnli kThroughUrla=a$nli kThroughUrl(n
a}e  Sbaei  u_ad U 'rgetCli kThroughUrl(tgfal  y cr  d_r  l u ttnli kThroughUrl(n
a}e  Sbaei  u_ad U 'rsetCompani 'Creae veOverridCs($compani 'Creae veOverridCstgfal  y crl u ttnompani 'Creae veOverridCsa=a$nompani 'Creae veOverridCs(n
a}e  Sbaei  u_ad U 'rgetCompani 'Creae veOverridCs(tgfal  y cr  d_r  l u ttnompani 'Creae veOverridCs(n
a}e  Sbaei  u_ad U 'rsetCreae veGroupAssignm  hs($nreae veGroupAssignm  hstgfal  y crl u ttnreae veGroupAssignm  hsa=a$nreae veGroupAssignm  hs(n
a}e  Sbaei  u_ad U 'rgetCreae veGroupAssignm  hs(tgfal  y cr  d_r  l u ttnreae veGroupAssignm  hs(n
a}e  Sbaei  u_ad U 'rsetCreae veId($creae veIdtgfal  y crl u ttnreae veIda=a$nreae vear(n
a}e  Sbaei  u_ad U 'rgetCreae veId(tgfal  y cr  d_r  l u ttnreae vear(n
a}e  Sbaei  u_ad U 'rsetCreae veIdDi   sir an
"C(eeeu e_Mett g  (_in  Iriooi Di   sir an
"Ca$nreae veIdDi   sir an
"Ctgfal  y crl u ttnreae veIdDi   sir an
"Ca=a$nreae veIdDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rgetCreae veIdDi   sir an
"C(tgfal  y cr  d_r  l u ttnreae vearDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rsetEtaTime($ataTimetgfal  y crl u ttataTimea=a$ataTime;  y}e  Sbaei  u_ad U 'rgetEtaTime(tgfal  y cr  d_r  l u ttataTime;  y}e  Sbaei  u_ad U 'rsetRichMediaExitOverridCs($richMediaExitOverridCstgfal  y crl u ttrichMediaExitOverridCsa=a$richMediaExitOverridCs;  y}e  Sbaei  u_ad U 'rgetRichMediaExitOverridCs(tgfal  y cr  d_r  l u ttrichMediaExitOverridCs;  y}e  Sbaei  u_ad U 'rsetSequ ncg($sequ ncgtgfal  y crl u ttsequ ncga=a$sequ ncg(n
a}e  Sbaei  u_ad U 'rgetSequ ncg(tgfal  y cr  d_r  l u ttsequ ncg(n
a}e  Sbaei  u_ad U 'rsetSslComplia h($sslComplia htgfal  y crl u ttsslComplia ha=a$sslComplia h(n
a}e  Sbaei  u_ad U 'rgetSslComplia h(tgfal  y cr  d_r  l u ttsslComplia h(n
a}e  Sbaei  u_ad U 'rsetStattTime($stattTimetgfal  y crl u ttstattTime = $stattTime(n
a}e  Sbaei  u_ad U 'rgetStattTime(tgfal  y cr  d_r  l u ttstattTime(n
a}e  Sbaei  u_ad U 'rsetWeighh($weighhtgfal  y crl u ttweighha=a$weighh(n y}e  Sbaei  u_ad U 'rgetWeighh(tgfal  y cr  d_r  l u ttweighh(n y}e}     _a eeeu e_Mett g  (_in  Iriooi Creae veCustomEv  ha(_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $ad Uvg(n
aSbaei  $advr
nyoSeCustomEv  hNetg(n
aSbaei  $advr
nyoSeCustomEv  hTyp (n
aSbaei  $attworkLabel(n
aSbaei  $attworkTyp (n
aSbaei  $exitUrl(n
aSbaei  $ir(n
aSnyteFieta$popupWindowPropr
nyCsTyp d  'eeeu e_Mett g  (_in  Iriooi PopupWindowPropr
nyCs';  y
nyteFieta$popupWindowPropr
nyCsDataTyp d  ''(n
aSbaei  $targetTyp (n
aSbaei  $vidCoR  Iriooiar(n
e  Sbaei  u_ad U 'rsetAc  vg($ad Uvgtgfal  y crl u ttace vet= $ad Uvg(n
a}e  Sbaei  u_ad U 'rgetAc Uvg(tgfal  y cr  d_r  l u ttac Uvg(n
a}e  Sbaei  u_ad U 'rsetAdvr
nyoSeCustomEv  hNetg($advr
nyoSeCustomEv  hNetgtgfal  y crl u ttadvr
nyoSeCustomEv  hNetgt= $advr
nyoSeCustomEv  hNetg(n
a}e  Sbaei  u_ad U 'rgetAdvr
nyoSeCustomEv  hNetg(tgfal  y cr  d_r  l u ttadvr
nyoSeCustomEv  hNetg(n
a}e  Sbaei  u_ad U 'rsetAdvr
nyoSeCustomEv  hTyp ($advr
nyoSeCustomEv  hTyp tgfal  y crl u ttadvr
nyoSeCustomEv  hTyp a=a$advr
nyoSeCustomEv  hTyp (n
a}e  Sbaei  u_ad U 'rgetAdvr
nyoSeCustomEv  hTyp (tgfal  y cr  d_r  l u ttadvr
nyoSeCustomEv  hTyp (n
a}e  Sbaei  u_ad U 'rsetAttworkLabel($attworkLabeltgfal  y crl u ttattworkLabela=a$attworkLabel(n
a}e  Sbaei  u_ad U 'rgetAttworkLabel(tgfal  y cr  d_r  l u ttattworkLabel(n
a}e  Sbaei  u_ad U 'rsetAttworkTyp ($attworkTyp tgfal  y crl u ttattworkTyp a=a$attworkTyp (n
a}e  Sbaei  u_ad U 'rgetAttworkTyp (tgfal  y cr  d_r  l u ttattworkTyp (n
a}e  Sbaei  u_ad U 'rsetExitUrl($exitUrltgfal  y crl u ttaxitUrla=a$axitUrl(n
a}e  Sbaei  u_ad U 'rgetExitUrl(tgfal  y cr  d_r  l u ttaxitUrl(n
a}e  Sbaei  u_ad U 'rsetId($idtgfal  y crl u ttid Satid(n
a}e  Sbaei  u_ad U 'rgetId(tgfal  y cr  d_r  l u ttid(n
a}e  Sbaei  u_ad U 'rsetPopupWindowPropr
nyCs(eeeu e_Mett g  (_in  Iriooi PopupWindowPropr
nyCsa$popupWindowPropr
nyCstgfal  y crl u ttpopupWindowPropr
nyCs SatpopupWindowPropr
nyCs(n
a}e  Sbaei  u_ad U 'rgetPopupWindowPropr
nyCs(tgfal  y cr  d_r  l u ttpopupWindowPropr
nyCs(n
a}e  Sbaei  u_ad U 'rsetTargetTyp ($targetTyp tgfal  y crl u tttargetTyp  SattargetTyp (n
a}e  Sbaei  u_ad U 'rgetTargetTyp (tgfal  y cr  d_r  l u tttargetTyp (n
a}e  Sbaei  u_ad U 'rsetVidCoR  Iriooiar($vidCoR  Iriooiartgfal  y crl u ttvidCoR  Iriooiar SatvidCoR  Iriooiar(n
a}e  Sbaei  u_ad U 'rgetVidCoR  Iriooiar(tgfal  y cr  d_r  l u ttvidCoR  Iriooiar(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi Creae veFiylda(_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $adcou har(n
aSbaei  $adIr
nyoSeId(n
aSnyteFieta$adIr
nyoSeIdDi   sir an
"CTyp d  'eeeu e_Mett g  (_in  Iriooi Di   sir an
"C';  y
nyteFieta$adIr
nyoSeIdDi   sir an
"CDataTyp d  ''(n
aSbaei  $id(n
aSbaei  $kind(n
aSbaei  $ietg(n
aSbaei  $subaccou har(n
e  Sbaei  u_ad U 'rsetAccou har($accou hartgfal  y crl u ttaccou harg= $accou hId(n
a}e  Sbaei  u_ad U 'rgetAccou hId(tgfal  y cr  d_r  l u ttaccou hId(n
a}e  Sbaei  u_ad U 'rsetAdIr
nyoSeId($adIr
nyoSeIdtgfal  y crl u ttadvr
nyoSearg= $a Ir
nyoSeId(n
a}e  Sbaei  u_ad U 'rgetA Ir
nyoSear(tgfal  y cr  d_r  l u tta Ir
nyoSeId(n
a}e  Sbaei  u_ad U 'rsetAdIr
nyoSeIdDi   sir an
"C(eeeu e_Mett g  (_in  Iriooi Di   sir an
"Ca$adIr
nyoSeIdDi   sir an
"Ctgfal  y crl u ttadvr
nyoSearDi   sir an
"Ca=a$advr
nyoSearDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rgetA Ir
nyoSearDi   sir an
"C(tgfal  y cr  d_r  l u ttadvr
nyoSearDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rsetId($idtgfal  y crl u ttid Satid(n
a}e  Sbaei  u_ad U 'rgetId(tgfal  y cr  d_r  l u ttid(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetNDI ($ietgtgfal  y crl u ttietg(= $ietg(n
a}e  Sbaei  u_ad U 'rgetNDI (tgfal  y cr  d_r  l u ttietg(n
a}e  Sbaei  u_ad U 'rsetSubaccou har($ ubaccou hartgfal  y crl u tttubaccou harg= $ ubaccou har(n
a}e  Sbaei  u_ad U 'rgetSubaccou har(tgfal  y cr  d_r  l u tttubaccou har(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi Creae veFiyldAssignm  ht(_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $creae veFiyldar(n
aSbaei  $creae veFiyldan
"Car(n
e  Sbaei  u_ad U 'rsetCreae veFiyldar($creae veFiyldartgfal  y crl u ttcreae veFiyldara=a$nreae veFiyldar(n
a}e  Sbaei  u_ad U 'rgetCreae veFiyldar(tgfal  y cr  d_r  l u ttnreae veFiyldar(n
a}e  Sbaei  u_ad U 'rsetCreae veFiyldan
"Car($creae veFiyldan
"Cartgfal  y crl u ttcreae veFiyldan
"Cara=a$nreae veFiyldan
"Car(n
a}e  Sbaei  u_ad U 'rgetCreae veFiyldan
"Car(tgfal  y cr  d_r  l u ttnreae veFiyldan
"Car(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi Creae veFiyldan
"Ca(_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $id(n
aSbaei  $kind(n
aSbaei  $vn
"C(n
e  Sbaei  u_ad U 'rsetId($idtgfal  y crl u ttid Satid(n
a}e  Sbaei  u_ad U 'rgetId(tgfal  y cr  d_r  l u ttid(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetan
"C($vn
"Ctgfal  y crl u ttvn
"Ca=a$vn
"C(n
a}e  Sbaei  u_ad U 'rgetan
"C(tgfal  y cr  d_r  l u ttvn
"C(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi Creae veFiyldan
"CsListResponsCa(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'nreae veFiyldan
"Cs'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSnyteFieta$nreae veFiyldan
"CsTyp d  'eeeu e_Mett g  (_in  Iriooi Creae veFiyldan
"C';  y
nyteFieta$nreae veFiyldan
"CsDataTyp d  'eal I'(n
aSbaei  $kind(n
aSbaei  $i(_SP p Tokee(n
e  Sbaei  u_ad U 'rsetCreae veFiyldan
"Cs($creae veFiyldan
"Cstgfal  y crl u ttnreae veFiyldan
"Csa=a$nreae veFiyldan
"Cs(n
a}e  Sbaei  u_ad U 'rgetCreae veFiyldan
"Cs(tgfal  y cr  d_r  l u ttnreae veFiyldan
"Cs(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetN(_SP p Tokee($i(_SP p Tokeetgfal  y crl u tti(_SP p Tokee(= $i(_SP p Tokee(n
a}e  Sbaei  u_ad U 'rgetN(_SP p Tokee(tgfal  y cr  d_r  l u tti(_SP p Tokee(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi Creae veFiyldsListResponsCa(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'nreae veFiylds'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSnyteFieta$nreae veFiyldsTyp d  'eeeu e_Mett g  (_in  Iriooi Creae veFiyld';  y
nyteFieta$nreae veFiyldsDataTyp d  'eal I'(n
aSbaei  $kind(n
aSbaei  $i(_SP p Tokee(n
e  Sbaei  u_ad U 'rsetCreae veFiylds($creae veFiyldstgfal  y crl u ttnreae veFiyldsa=a$nreae veFiylds(n
a}e  Sbaei  u_ad U 'rgetCreae veFiylds(tgfal  y cr  d_r  l u ttnreae veFiylds(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetN(_SP p Tokee($i(_SP p Tokeetgfal  y crl u tti(_SP p Tokee(= $i(_SP p Tokee(n
a}e  Sbaei  u_ad U 'rgetN(_SP p Tokee(tgfal  y cr  d_r  l u tti(_SP p Tokee(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi Creae veGroupa(_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $adcou har(n
aSbaei  $adIr
nyoSeId(n
aSnyteFieta$adIr
nyoSeIdDi   sir an
"CTyp d  'eeeu e_Mett g  (_in  Iriooi Di   sir an
"C';  y
nyteFieta$adIr
nyoSeIdDi   sir an
"CDataTyp d  ''(n
aSbaei  $groupNumbyr(n
aSbaei  $id(n
aSbaei  $kind(n
aSbaei  $ietg(n
aSbaei  $subaccou har(n
e  Sbaei  u_ad U 'rsetAccou har($accou hartgfal  y crl u ttaccou harg= $accou hId(n
a}e  Sbaei  u_ad U 'rgetAccou hId(tgfal  y cr  d_r  l u ttaccou hId(n
a}e  Sbaei  u_ad U 'rsetAdIr
nyoSeId($adIr
nyoSeIdtgfal  y crl u ttadvr
nyoSearg= $a Ir
nyoSeId(n
a}e  Sbaei  u_ad U 'rgetA Ir
nyoSear(tgfal  y cr  d_r  l u tta Ir
nyoSeId(n
a}e  Sbaei  u_ad U 'rsetAdIr
nyoSeIdDi   sir an
"C(eeeu e_Mett g  (_in  Iriooi Di   sir an
"Ca$adIr
nyoSeIdDi   sir an
"Ctgfal  y crl u ttadvr
nyoSearDi   sir an
"Ca=a$advr
nyoSearDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rgetA Ir
nyoSearDi   sir an
"C(tgfal  y cr  d_r  l u ttadvr
nyoSearDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rsetGroupNumbyr($groupNumbyrtgfal  y crl u ttgroupNumbyra=a$groupNumbyr(n
a}e  Sbaei  u_ad U 'rgetGroupNumbyr(tgfal  y cr  d_r  l u ttgroupNumbyr(n
a}e  Sbaei  u_ad U 'rsetId($idtgfal  y crl u ttid Satid(n
a}e  Sbaei  u_ad U 'rgetId(tgfal  y cr  d_r  l u ttid(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetNDI ($ietgtgfal  y crl u ttietg(= $ietg(n
a}e  Sbaei  u_ad U 'rgetNDI (tgfal  y cr  d_r  l u ttietg(n
a}e  Sbaei  u_ad U 'rsetSubaccou har($ ubaccou hartgfal  y crl u tttubaccou harg= $ ubaccou har(n
a}e  Sbaei  u_ad U 'rgetSubaccou har(tgfal  y cr  d_r  l ustttubaccou har(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi Creae veGroupAssignm  ha(_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $creae veGroupar(n
aSbaei  $creae veGroupNumbyr(n
e  Sbaei  u_ad U 'rsetCreae veGroupar($creae veGroupartgfal  y crl u ttnreae veGroupara=a$nreae veGroupar(n
a}e  Sbaei  u_ad U 'rgetCreae veGroupar(tgfal  y cr  d_r  l u ttnreae veGroupar(n
a}e  Sbaei  u_ad U 'rsetCreae veGroupNumbyr($creae veGroupNumbyrtgfal  y crl u ttnreae veGroupNumbyra=a$creae veGroupNumbyr(n
a}e  Sbaei  u_ad U 'rgetCreae veGroupNumbyr(tgfal  y cr  d_r  l u ttcreae veGroupNumbyr(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi Creae veGroupsListResponsCa(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'nreae veGroups'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSnyteFieta$nreae veGroupsTyp d  'eeeu e_Mett g  (_in  Iriooi Creae veGroup'(n
aSnyteFieta$nreae veGroupsDataTyp d  'eal I'(n
aSbaei  $kind(n
aSbaei  $i(_SP p Tokee(n
e  Sbaei  u_ad U 'rsetCreae veGroups($creae veGroupstgfal  y crl u ttnreae veGroupsa=a$nreae veGroups(n
a}e  Sbaei  u_ad U 'rgetCreae veGroups(tgfal  y cr  d_r  l u ttcreae veGroups(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetN(_SP p Tokee($i(_SP p Tokeetgfal  y crl u tti(_SP p Tokee(= $i(_SP p Tokee(n
a}e  Sbaei  u_ad U 'rgetN(_SP p Tokee(tgfal  y cr  d_r  l u tti(_SP p Tokee(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi Creae veOptimiza U 'Configurasatea(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'optimiza U 'Ac Uvitys'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $id(n
aSbaei  $ietg(n
aSnyteFieta$optimiza U 'Ac UvitysTyp d  'eeeu e_Mett g  (_in  Iriooi Optimiza U 'Ac Uvity'(n
aSnyteFieta$optimiza U 'Ac UvitysDataTyp d  'eal I'(n
aSbaei  $optimiza U 'Model(n
e  Sbaei  u_ad U 'rsetId($idtgfal  y crl u ttid Satid(n
a}e  Sbaei  u_ad U 'rgetId(tgfal  y cr  d_r  l u ttid(n
a}e  Sbaei  u_ad U 'rsetNDI ($ietgtgfal  y crl u ttietg(= $ietg(n
a}e  Sbaei  u_ad U 'rgetNDI (tgfal  y cr  d_r  l u ttietg(n
a}e  Sbaei  u_ad U 'rsetOptimiza U 'Ac Uvityi($optimiza U 'Ac Uvityitgfal  y crl u ttoptimiza U 'Ac Uvityi(= $optimiza U 'Ac Uvityi(n
a}e  Sbaei  u_ad U 'rgetOptimiza U 'Ac Uvityi(tgfal  y cr  d_r  l u ttoptimiza U 'Ac Uvityi(n
a}e  Sbaei  u_ad U 'rsetOptimiza U 'Model($optimiza U 'Modeltgfal  y crl u ttoptimiza U 'Model(= $optimiza U 'Model(n
a}e  Sbaei  u_ad U 'rgetOptimiza U 'Model(tgfal  y cr  d_r  l u ttoptimiza U 'Model(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi Creae veRotasatea(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'creae veAssignm  hs'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSnyteFieta$nreae veAssignm  hsTyp d  'eeeu e_Mett g  (_in  Iriooi Creae veAssignm  h'(n
aSnyteFieta$nreae veAssignm  hsDataTyp d  'eal I'(n
aSbaei  $creae veOptimiza U 'Configurasatear(n
aSbaei  $typ (n
aSbaei  $weighhCalculasateStrasegy(n
e  Sbaei  u_ad U 'rsetCreae veAssignm  hs($nreae veAssignm  hstgfal  y crl u ttnreae veAssignm  hsa=a$nreae veAssignm  hs(n
a}e  Sbaei  u_ad U 'rgetCreae veAssignm  hs(tgfal  y cr  d_r  l u ttcreae veAssignm  hs(n
a}e  Sbaei  u_ad U 'rsetCreae veOptimiza U 'Configurasatear($creae veOptimiza U 'Configurasateartgfal  y crl u ttnreae veOptimiza U 'Configurasateara=a$nreae veOptimiza U 'Configurasatear(n
a}e  Sbaei  u_ad U 'rgetCreae veOptimiza U 'Configurasatear(tgfal  y cr  d_r  l u ttcreae veOptimiza U 'Configurasatear(n
a}e  Sbaei  u_ad U 'rsetTyp ($typ tgfal  y crl u tttyp a=a$typ (n
a}e  Sbaei  u_ad U 'rgetTyp (tgfal  y cr  d_r  l u tttyp (n
a}e  Sbaei  u_ad U 'rsetWeighhCalculasateStrasegy($weighhCalculasateStrasegytgfal  y crl u ttweighhCalculasateStrasegya=a$weighhCalculasateStrasegy(n
a}e  Sbaei  u_ad U 'rgetWeighhCalculasateStrasegy(tgfal  y cr  d_r  l u ttweighhCalculasateStrasegy(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi Creae veSettooi  (_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $iFretgFoyter(n
aSbaei  $iFretgHeadyr(n
e  Sbaei  u_ad U 'rsetIFretgFoyter($iFretgFoytertgfal  y crl u ttiFretgFoyter SatiFretgFoyter(n
a}e  Sbaei  u_ad U 'rgetIFretgFoyter(tgfal  y cr  d_r  l u ttiFretgFoyter(n
a}e  Sbaei  u_ad U 'rsetIFretgHeadyr($iFretgHeadyrtgfal  y crl u ttiFretgHeadyr SatiFretgHeadyr(n
a}e  Sbaei  u_ad U 'rgetIFretgHeadyr(tgfal  y cr  d_r  l u ttiFretgHeadyr(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi Creae vesListResponsCa(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'nreae ves'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSnyteFieta$nreae vesTyp d  'eeeu e_Mett g  (_in  Iriooi Creae ve'(n
aSnyteFieta$nreae vesDataTyp d  'eal I'(n
aSbaei  $kind(n
aSbaei  $i(_SP p Tokee(n
e  Sbaei  u_ad U 'rsetCreae ves($nreae vestgfal  y crl u ttnreae vesa=a$nreae ves(n
a}e  Sbaei  u_ad U 'rgetCreae ves(tgfal  y cr  d_r  l u ttcreae ves(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetN(_SP p Tokee($i(_SP p Tokeetgfal  y crl u tti(_SP p Tokee(= $i(_SP p Tokee(n
a}e  Sbaei  u_ad U 'rgetN(_SP p Tokee(tgfal  y cr  d_r  l u tti(_SP p Tokee(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi CrossDi   sir ReachR  IriCompatibleFiyldsa(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'overlapMetrics'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSnyteFieta$breakdownTyp d  'eeeu e_Mett g  (_in  Iriooi Di   sir '(n
aSnyteFieta$breakdownDataTyp d  'eal I'(n
aSnyteFieta$di   sir FilaSesTyp d  'eeeu e_Mett g  (_in  Iriooi Di   sir '(n
aSnyteFieta$di   sir FilaSesDataTyp d  'eal I'(n
aSbaei  $kind(n
aSnyteFieta$metricsTyp d  'eeeu e_Mett g  (_in  Iriooi Metric'(n
aSnyteFieta$metricsDataTyp d  'eal I'(n
aSnyteFieta$overlapMetricsTyp d  'eeeu e_Mett g  (_in  Iriooi Metric'(n
aSnyteFieta$overlapMetricsDataTyp d  'eal I'(n
e  Sbaei  u_ad U 'rsetBreakdown($breakdowntgfal  y crl u ttbreakdown(= $breakdown(n
a}e  Sbaei  u_ad U 'rgetBreakdown(tgfal  y cr  d_r  l u ttbreakdown(n
a}e  Sbaei  u_ad U 'rsetDi   sir FilaSes($di   sir FilaSestgfal  y crl u ttdi   sir FilaSes(= $di   sir FilaSes(n
a}e  Sbaei  u_ad U 'rgetDi   sir FilaSes(tgfal  y cr  d_r  l u ttdi   sir FilaSes(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetMetrics($metricstgfal  y crl u ttmetrics Satmetrics(n
a}e  Sbaei  u_ad U 'rgetMetrics(tgfal  y cr  d_r  l u ttmetrics(n
a}e  Sbaei  u_ad U 'rsetOverlapMetrics($overlapMetricstgfal  y crl u ttoverlapMetrics SatoverlapMetrics(n
a}e  Sbaei  u_ad U 'rgetOverlapMetrics(tgfal  y cr  d_r  l u ttoverlapMetrics(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi CustomRichMediaEv  hsg(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'filaSeedEv  hIds'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSnyteFieta$filaSeedEv  hIdsTyp d  'eeeu e_Mett g  (_in  Iriooi Di   sir an
"C';  y
nyteFieta$filaSeedEv  hIdsDataTyp d  'eal I'(n
aSbaei  $kind(n
e  Sbaei  u_ad U 'rsetFilaSeedEv  hIds($filaSeedEv  hIdstgfal  y crl u ttfilaSeedEv  hIds SatfilaSeedEv  hIds(n
a}e  Sbaei  u_ad U 'rgetFilaSeedEv  hIds(tgfal  y cr  d_r  l u ttfilaSeedEv  hIds(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi DateRangCa(_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $ataDatg(n
aSbaei  $kind(n
aSbaei  $relae veDateRangC(n
aSbaei  $stattDatg(n
e  Sbaei  u_ad U 'rsetEtaDatg($ataDatgtgfal  y crl u ttataDatg SatataDatg(n
a}e  Sbaei  u_ad U 'rgetEtaDatg(tgfal  y cr  d_r  l u ttataDatg(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetRelae veDateRangC($relae veDateRangCtgfal  y crl u ttrelae veDateRangC Satrelae veDateRangC(n
a}e  Sbaei  u_ad U 'rgetRelae veDateRangC(tgfal  y cr  d_r  l u ttrelae veDateRangC(n
a}e  Sbaei  u_ad U 'rsetStattDatg($stattDatgtgfal  y crl u ttstattDatg SatstattDatg(n
a}e  Sbaei  u_ad U 'rgetStattDatg(tgfal  y cr  d_r  l u ttstattDatg(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi DayPattTargetooig(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'hoursOfD I'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $daysOfWeek(n
aSbaei  $hoursOfD I(n
aSbaei  $userLocalTimg(n
e  Sbaei  u_ad U 'rsetDaysOfWeek($daysOfWeektgfal  y crl u ttdaysOfWeek(= $daysOfWeek(n
a}e  Sbaei  u_ad U 'rgetDaysOfWeek(tgfal  y cr  d_r  l u ttdaysOfWeek(n
a}e  Sbaei  u_ad U 'rsetHoursOfD I($hoursOfD Itgfal  y crl u tthoursOfD I(= $hoursOfD I(n
a}e  Sbaei  u_ad U 'rgetHoursOfD I(tgfal  y cr  d_r  l u tthoursOfD I(n
a}e  Sbaei  u_ad U 'rsetUserLocalTimg($userLocalTimgtgfal  y crl u ttuserLocalTimg(= $userLocalTimg(n
a}e  Sbaei  u_ad U 'rgetUserLocalTimg(tgfal  y cr  d_r  l u ttuserLocalTimg(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi DefaultCli kThroughEv  hTagPropr
nyCs (_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $defaultCli kThroughEv  hTagar(n
aSbaei  $overridCInheritedEv  hTag(n
e  Sbaei  u_ad U 'rsetDefaultCli kThroughEv  hTagar($defaultCli kThroughEv  hTagartgfal  y crl u ttdefaultCli kThroughEv  hTagar(= $defaultCli kThroughEv  hTagar(n
a}e  Sbaei  u_ad U 'rgetDefaultCli kThroughEv  hTagar(tgfal  y cr  d_r  l u ttdefaultCli kThroughEv  hTagar(n
a}e  Sbaei  u_ad U 'rsetOverridCInheritedEv  hTag($overridCInheritedEv  hTagtgfal  y crl u ttoverridCInheritedEv  hTag SatoverridCInheritedEv  hTag(n
a}e  Sbaei  u_ad U 'rgetOverridCInheritedEv  hTag(tgfal  y cr  d_r  l u ttoverridCInheritedEv  hTag(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi Del verySchedulCa(_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSnyteFieta$frequ ncyCapTyp d  'eeeu e_Mett g  (_in  Iriooi Frequ ncyCap';  y
nyteFieta$frequ ncyCapDataTyp d  ''(n
aSbaei  $hardCutoff(n
aSbaei  $impr siionRasat(n
aSbaei  $priority(n
e  Sbaei  u_ad U 'rsetFrequ ncyCap(eeeu e_Mett g  (_in  Iriooi Frequ ncyCapa$frequ ncyCaptgfal  y crl u ttfrequ ncyCapa=a$frequ ncyCap(n
a}e  Sbaei  u_ad U 'rgetFrequ ncyCap(tgfal  y cr  d_r  l u ttfrequ ncyCap(n
a}e  Sbaei  u_ad U 'rsetHardCutoff($hardCutofftgfal  y crl u tthardCutoff(= $hardCutoff(n
a}e  Sbaei  u_ad U 'rgetHardCutoff(tgfal  y cr  d_r  l u tthardCutoff(n
a}e  Sbaei  u_ad U 'rsetImpr siionRasat($impr siionRasattgfal  y crl u ttimpr siionRasat(= $impr siionRasat(n
a}e  Sbaei  u_ad U 'rgetImpr siionRasat(tgfal  y cr  d_r  l u ttimpr siionRasat(n
a}e  Sbaei  u_ad U 'rsetPriority($prioritytgfal  y crl u ttpriority(= $priority(n
a}e  Sbaei  u_ad U 'rgetPriority(tgfal  y cr  d_r  l u ttpriority(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi D_in  IriooiFilea(_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSnyteFieta$dateRangCTyp d  'eeeu e_Mett g  (_in  Iriooi DateRangC'(n
aSnyteFieta$dateRangCDataTyp d  ''(n
aSbaei  $etag(n
aSbaei  $fileNetg(n
aSbaei  $format(n
aSbaei  $ir(n
aSbaei  $kind(n
aSbaei  $  _tModifiyaTime;  y
baei  $n  Iriar(n
aSbaei  $status(n
aSnyteFieta$urlsTyp d  'eeeu e_Mett g  (_in  Iriooi D_in  IriooiFileUrls'(n
aSnyteFieta$urlsDataTyp d  ''(n
e  Sbaei  u_ad U 'rsetDateRangC(eeeu e_Mett g  (_in  Iriooi DateRangCa$dateRangCtgfal  y crl u ttdateRangC SatdateRangC(n
a}e  Sbaei  u_ad U 'rgetDateRangC(tgfal  y cr  d_r  l u ttdateRangC(n
a}e  Sbaei  u_ad U 'rsetEtag($etagtgfal  y crl u ttatag Satetag(n
a}e  Sbaei  u_ad U 'rgetEtag(tgfal  y cr  d_r  l u ttetag(n
a}e  Sbaei  u_ad U 'rsetFileNDI ($fileNetgtgfal  y crl u ttfileNetg SatfileNetg(n
a}e  Sbaei  u_ad U 'rgetFileNDI (tgfal  y cr  d_r  l u ttfileNetg(n
a}e  Sbaei  u_ad U 'rsetFormat($formattgfal  y crl u ttformat Satformat(n
a}e  Sbaei  u_ad U 'rgetFormat(tgfal  y cr  d_r  l u ttformat(n
a}e  Sbaei  u_ad U 'rsetId($idtgfal  y crl u ttid Satid(n
a}e  Sbaei  u_ad U 'rgetId(tgfal  y cr  d_r  l u ttid(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetL _tModifiyaTime($  _tModifiyaTimetgfal  y crl u tt  _tModifiyaTime Sat  _tModifiyaTime;  y}e  Sbaei  u_ad U 'rgetL _tModifiyaTime(tgfal  y cr  d_r  l u tt  _tModifiyaTime;  y}e  Sbaei  u_ad U 'rsetRe Iriar($n  Iriartgfal  y crl u ttn  Iriar Satre Iriar(n
a}e  Sbaei  u_ad U 'rgetRe Iriar(tgfal  y cr  d_r  l u ttre Iriar(n
a}e  Sbaei  u_ad U 'rsetStatus($statustgfal  y crl u ttstatus Satstatus(n
a}e  Sbaei  u_ad U 'rgetStatus(tgfal  y cr  d_r  l u ttstatus(n
a}e  Sbaei  u_ad U 'rsetUrls(eeeu e_Mett g  (_in  Iriooi D_in  IriooiFileUrlsa$urlstgfal  y crl u tturlsa=a$urls(n
a}e  Sbaei  u_ad U 'rgetUrls(tgfal  y cr  d_r  l u tturls(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi D_in  IriooiFileUrlsa(_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $apiUrl(n
aSbaei  $browserUrl(n
e  Sbaei  u_ad U 'rsetApiUrl($apiUrltgfal  y crl u ttapiUrla=a$apiUrl(n
a}e  Sbaei  u_ad U 'rgetApiUrl(tgfal  y cr  d_r  l u ttapiUrl(n
a}e  Sbaei  u_ad U 'rsetBrowserUrl($browserUrltgfal  y crl u ttbrowserUrl = $browserUrl(n
a}e  Sbaei  u_ad U 'rgetBrowserUrl(tgfal  y cr  d_r  l u ttbrowserUrl(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi D_pSettooi  (_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  yyyyyyy"dfpNetworkCode" =>y"dfp_network_code",  yyyyyyy"dfpNetworkNetg" =>y"dfp_network_ietg",  y'(n
aSbaei  $dfpNetworkCode(n
aSbaei  $dfpNetworkNetg(n
aSbaei  $programmaticPlacem  hAccepter(n
aSbaei  $SbaPaidPlacem  hAccepter(n
aSbaei  $SbalisherPIrialOnly(n
e  Sbaei  u_ad U 'rsetDfpNetworkCode($dfpNetworkCodetgfal  y crl u ttdfpNetworkCode SatdfpNetworkCode(n
a}e  Sbaei  u_ad U 'rgetDfpNetworkCode(tgfal  y cr  d_r  l u ttdfpNetworkCode(n
a}e  Sbaei  u_ad U 'rsetDfpNetworkNDI ($dfpNetworkNetgtgfal  y crl u ttdfpNetworkNetg SatdfpNetworkNetg(n
a}e  Sbaei  u_ad U 'rgetDfpNetworkNDI (tgfal  y cr  d_r  l u ttdfpNetworkNetg(n
a}e  Sbaei  u_ad U 'rsetProgrammaticPlacem  hAccepter($programmaticPlacem  hAcceptertgfal  y crl u ttprogrammaticPlacem  hAccepter(= $programmaticPlacem  hAccepter(n
a}e  Sbaei  u_ad U 'rgetProgrammaticPlacem  hAccepter(tgfal  y cr  d_r  l u ttprogrammaticPlacem  hAccepter(n
a}e  Sbaei  u_ad U 'rsetPbaPaidPlacem  hAccepter($SbaPaidPlacem  hAcceptertgfal  y crl u ttpbaPaidPlacem  hAccepter(= $pbaPaidPlacem  hAccepter(n
a}e  Sbaei  u_ad U 'rgetPbaPaidPlacem  hAccepter(tgfal  y cr  d_r  l u ttpbaPaidPlacem  hAccepter(n
a}e  Sbaei  u_ad U 'rsetPbalisherPIrialOnly($SbalisherPIrialOnlytgfal  y crl u ttpbalisherPIrialOnly(= $pbalisherPIrialOnly(n
a}e  Sbaei  u_ad U 'rgetPbalisherPIrialOnly(tgfal  y cr  d_r  l u ttpbalisherPIrialOnly(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi Di   sir  (_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $kind(n
aSbaei  $ietg(n
e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetNDI ($ietgtgfal  y crl u ttietg(= $ietg(n
a}e  Sbaei  u_ad U 'rgetNDI (tgfal  y cr  d_r  l u ttietg(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi Di   sir FilaSe (_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $di   sir Netg(n
aSbaei  $kind(n
aSbaei  $vn
"C(n
e  Sbaei  u_ad U 'rsetDi   sir Netg($di   sir Netgtgfal  y crl u ttdi   sir Netg Satdi   sir Netg(n
a}e  Sbaei  u_ad U 'rgetDi   sir Netg(tgfal  y cr  d_r  l u ttdi   sir Netg(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetan
"C($vn
"Ctgfal  y crl u ttvn
"Ca=a$vn
"C(n
a}e  Sbaei  u_ad U 'rgetan
"C(tgfal  y cr  d_r  l u ttvn
"C(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi Di   sir an
"C (_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $di   sir Netg(n
aSbaei  $etag(n
aSbaei  $ir(n
aSbaei  $kind(n
aSbaei  $matchTyp (n
aSbaei  $vn
"C(n
e  Sbaei  u_ad U 'rsetDi   sir Netg($di   sir Netgtgfal  y crl u ttdi   sir Netg Satdi   sir Netg(n
a}e  Sbaei  u_ad U 'rgetDi   sir Netg(tgfal  y cr  d_r  l u ttdi   sir Netg(n
a}e  Sbaei  u_ad U 'rsetEtag($etagtgfal  y crl u ttatag Satetag(n
a}e  Sbaei  u_ad U 'rgetEtag(tgfal  y cr  d_r  l u ttetag(n
a}e  Sbaei  u_ad U 'rsetId($idtgfal  y crl u ttid Satid(n
a}e  Sbaei  u_ad U 'rgetId(tgfal  y cr  d_r  l u ttid(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetMatchTyp ($matchTyp tgfal  y crl u ttmatchTyp  SatmatchTyp (n
a}e  Sbaei  u_ad U 'rgetMatchTyp (tgfal  y cr  d_r  l u ttmatchTyp (n
a}e  Sbaei  u_ad U 'rsetan
"C($vn
"Ctgfal  y crl u ttvn
"Ca=a$vn
"C(n
a}e  Sbaei  u_ad U 'rgetan
"C(tgfal  y cr  d_r  l u ttvn
"C(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi Di   sir an
"CListg(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'items'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $etag(n
aSnyteFieta$itemsTyp d  'eeeu e_Mett g  (_in  Iriooi Di   sir an
"C'(n
aSnyteFieta$itemsDataTyp d  'eal I'(n
aSbaei  $kind(n
aSbaei  $i(_SP p Tokee(n
e  Sbaei  u_ad U 'rsetEtag($etagtgfal  y crl u ttatag Satetag(n
a}e  Sbaei  u_ad U 'rgetEtag(tgfal  y cr  d_r  l u ttetag(n
a}e  Sbaei  u_ad U 'rsetItems($itemstgfal  y crl u ttitems Satitems(n
a}e  Sbaei  u_ad U 'rgetItems(tgfal  y cr  d_r  l u ttitems(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetN(_SP p Tokee($i(_SP p Tokeetgfal  y crl u tti(_SP p Tokee(= $i(_SP p Tokee(n
a}e  Sbaei  u_ad U 'rgetN(_SP p Tokee(tgfal  y cr  d_r  l u tti(_SP p Tokee(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi Di   sir an
"CRequ stg(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'filaSes'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $di   sir Netg(n
aSbaei  $etaDatg(n
aSnyteFieta$filaSesTyp d  'eeeu e_Mett g  (_in  Iriooi Di   sir FilaSe';  y
nyteFieta$filaSesDataTyp d  'eal I'(n
aSbaei  $kind(n
aSbaei  $stattDatg(n
e  Sbaei  u_ad U 'rsetDi   sir Netg($di   sir Netgtgfal  y crl u ttdi   sir Netg Satdi   sir Netg(n
a}e  Sbaei  u_ad U 'rgetDi   sir Netg(tgfal  y cr  d_r  l u ttdi   sir Netg(n
a}e  Sbaei  u_ad U 'rsetEtaDatg($ataDatgtgfal  y crl u ttataDatg SatataDatg(n
a}e  Sbaei  u_ad U 'rgetEtaDatg(tgfal  y cr  d_r  l u ttataDatg(n
a}e  Sbaei  u_ad U 'rsetFilaSes($filaSestgfal  y crl u ttfilaSes(= $filaSes(n
a}e  Sbaei  u_ad U 'rgetFilaSes(tgfal  y cr  d_r  l u ttfilaSes(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetStattDatg($stattDatgtgfal  y crl u ttstattDatg SatstattDatg(n
a}e  Sbaei  u_ad U 'rgetStattDatg(tgfal  y cr  d_r  l u ttstattDatg(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi DireFiorySiteg(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'i
aSestitialTagFormats'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $ad Uvg(n
aSnyteFieta$n ntad Assignm  hsTyp d  'eeeu e_Mett g  (_in  Iriooi DireFiorySiteC ntad Assignm  h'(n
aSnyteFieta$n ntad Assignm  hsDataTyp d  'eal I'(n
aSbaei  $cou hryar(n
aSbaei  $currencyar(n
aSbaei  $descrip  _a(n
aSbaei  $ir(n
aSnyteFieta$idDi   sir an
"CTyp d  'eeeu e_Mett g  (_in  Iriooi Di   sir an
"C';  y
nyteFieta$idDi   sir an
"CDataTyp d  ''(n
aSbaei  $inp p TagFormats(n
aSbaei  $inaSestitialTagFormats(n
aSbaei  $kind(n
aSbaei  $ietg(n
aSbaei  $pin  har(n
aSnyteFieta$settooi Typ d  'eeeu e_Mett g  (_in  Iriooi DireFiorySiteSettooi ';  y
nyteFieta$settooi DataTyp d  ''(n
aSbaei  $url(n
e  Sbaei  u_ad U 'rsetAd Uvg($ad Uvgtgfal  y crl u ttace vet= $ad Uvg(n
a}e  Sbaei  u_ad U 'rgetAc Uvg(tgfal  y cr  d_r  l u ttac Uvg(n
a}e  Sbaei  u_ad U 'rsetC ntad Assignm  hs($contad Assignm  hstgfal  y crl u ttcontad Assignm  hst= $contad Assignm  hs(n
a}e  Sbaei  u_ad U 'rgetC ntad Assignm  hs(tgfal  y cr  d_r  l u ttcontad Assignm  hs(n
a}e  Sbaei  u_ad U 'rsetC u hryar($cou hryartgfal  y crl u ttcou hryart= $cou hryar(n
a}e  Sbaei  u_ad U 'rgetC u hryar(tgfal  y cr  d_r  l u ttcou hryar(n
a}e  Sbaei  u_ad U 'rsetCurrencyar($currencyartgfal  y crl u ttcurrencyart= $currencyar(n
a}e  Sbaei  u_ad U 'rgetCurrencyar(tgfal  y cr  d_r  l u ttcurrencyar(n
a}e  Sbaei  u_ad U 'rsetDescrip  _a($descrip  _atgfal  y crl u ttdescrip  _a Satdescrip  _a(n
a}e  Sbaei  u_ad U 'rgetDescrip  _a(tgfal  y cr  d_r  l u ttdescrip  _a(n
a}e  Sbaei  u_ad U 'rsetId($idtgfal  y crl u ttid Satid(n
a}e  Sbaei  u_ad U 'rgetId(tgfal  y cr  d_r  l u ttid(n
a}e  Sbaei  u_ad U 'rsetIdDi   sir an
"C(eeeu e_Mett g  (_in  Iriooi Di   sir an
"Ca$idDi   sir an
"Ctgfal  y crl u ttidDi   sir an
"Ca=a$idDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rgetIdDi   sir an
"C(tgfal  y cr  d_r  l u ttidDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rsetInp p TagFormats($inp p TagFormatstgfal  y crl u ttinp p TagFormatsa=a$inp p TagFormats(n
a}e  Sbaei  u_ad U 'rgetInp p TagFormats(tgfal  y cr  d_r  l u ttinp p TagFormats(n
a}e  Sbaei  u_ad U 'rsetInaSestitialTagFormats($inaSestitialTagFormatstgfal  y crl u ttinaSestitialTagFormatsa=a$inaSestitialTagFormats(n
a}e  Sbaei  u_ad U 'rgetInaSestitialTagFormats(tgfal  y cr  d_r  l u ttinaSestitialTagFormats(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetNDI ($ietgtgfal  y crl u ttietg(= $ietg(n
a}e  Sbaei  u_ad U 'rgetNDI (tgfal  y cr  d_r  l u ttietg(n
a}e  Sbaei  u_ad U 'rsetPin  har($pin  hartgfal  y crl u ttpin  har(= $pin  har(n
a}e  Sbaei  u_ad U 'rgetPin  har(tgfal  y cr  d_r  l u ttpin  har(n
a}e  Sbaei  u_ad U 'rsetSettooi (eeeu e_Mett g  (_in  Iriooi DireFiorySiteSettooi a$settooi tgfal  y crl u ttsettooi a=a$settooi (n
a}e  Sbaei  u_ad U 'rgetSettooi (tgfal  y cr  d_r  l u ttsettooi (n
a}e  Sbaei  u_ad U 'rsetUrl($urltgfal  y crl u tturl = $url(n
a}e  Sbaei  u_ad U 'rgetUrl(tgfal  y cr  d_r  l u tturl(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi DireFiorySiteC ntad  (_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $addr si(n
aSbaei  $email(n
aSbaei  $fiestNetg(n
aSbaei  $ir(n
aSbaei  $kind(n
aSbaei  $  _tNetg(n
aSbaei  $phong(n
aSbaei  $rolg(n
aSbaei  $titlg(n
aSbaei  $typ (n
e  Sbaei  u_ad U 'rsetAddr si($addr sitgfal  y crl u ttaddr sit= $addr si(n
a}e  Sbaei  u_ad U 'rgetAddr si(tgfal  y cr  d_r  l u ttaddr si(n
a}e  Sbaei  u_ad U 'rsetEmail($emailtgfal  y crl u ttemail Satamail(n
a}e  Sbaei  u_ad U 'rgetEmail(tgfal  y cr  d_r  l u ttamail(n
a}e  Sbaei  u_ad U 'rsetFiestNetg($fiestNetgtgfal  y crl u ttfiestNetg(= $fiestNetg(n
a}e  Sbaei  u_ad U 'rgetFiestNetg(tgfal  y cr  d_r  l u ttfiestNetg(n
a}e  Sbaei  u_ad U 'rsetId($idtgfal  y crl u ttid Satid(n
a}e  Sbaei  u_ad U 'rgetId(tgfal  y cr  d_r  l u ttid(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetLastNetg($  _tNetgtgfal  y crl u tt  _tNetg Sat  _tNetg(n
a}e  Sbaei  u_ad U 'rgetLastNetg(tgfal  y cr  d_r  l u tt  _tNetg(n
a}e  Sbaei  u_ad U 'rsetPhong($phongtgfal  y crl u ttphong(= $phong(n
a}e  Sbaei  u_ad U 'rgetPhong(tgfal  y cr  d_r  l u ttphong(n
a}e  Sbaei  u_ad U 'rsetRolg($rolgtgfal  y crl u ttrolg(= $rolg(n
a}e  Sbaei  u_ad U 'rgetRolg(tgfal  y cr  d_r  l u ttrolg(n
a}e  Sbaei  u_ad U 'rsetTitlg($titlgtgfal  y crl u tttitlg(= $titlg(n
a}e  Sbaei  u_ad U 'rgetTitlg(tgfal  y cr  d_r  l u tttitlg(n
a}e  Sbaei  u_ad U 'rsetTyp ($typ tgfal  y crl u tttyp a=a$typ (n
a}e  Sbaei  u_ad U 'rgetTyp (tgfal  y cr  d_r  l u tttyp (n
a}e}     _a eeeu e_Mett g  (_in  Iriooi DireFiorySiteC ntad Assignm  h (_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $contad ar(n
aSbaei  $visibility(n
e  Sbaei  u_ad U 'rsetContad ar($contad artgfal  y crl u ttcontad art= $contad ar(n
a}e  Sbaei  u_ad U 'rgetC ntad ar(tgfal  y cr  d_r  l u ttcontad ar(n
a}e  Sbaei  u_ad U 'rsetVisibility($visibilitytgfal  y crl u ttvisibilityt= $visibility(n
a}e  Sbaei  u_ad U 'rgetVisibility(tgfal  y cr  d_r  l u ttvisibility(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi DireFiorySiteC ntad sListResponsCa(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'direFiorySiteC ntad s'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSnyteFieta$direFiorySiteC ntad sTyp d  'eeeu e_Mett g  (_in  Iriooi DireFiorySiteC ntad '(n
aSnyteFieta$direFiorySiteC ntad sDataTyp d  'eal I'(n
aSbaei  $kind(n
aSbaei  $i(_SP p Tokee(n
e  Sbaei  u_ad U 'rsetDireFiorySiteC ntad s($direFiorySiteC ntad stgfal  y crl u ttdireFiorySiteC ntad s SatdireFiorySiteC ntad s(n
a}e  Sbaei  u_ad U 'rgetDireFiorySiteC ntad s(tgfal  y cr  d_r  l u ttdireFiorySiteC ntad s(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetN(_SP p Tokee($i(_SP p Tokeetgfal  y crl u tti(_SP p Tokee(= $i(_SP p Tokee(n
a}e  Sbaei  u_ad U 'rgetN(_SP p Tokee(tgfal  y cr  d_r  l u tti(_SP p Tokee(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi DireFiorySiteSettooi a(_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  yyyyyyy"dfpSettooi " =>y"dfp_settooi ",  yyyyyyy"instreamVidCoPlacem  hAccepter" =>y"instream_vidCo_placem  h_accepter",  y'(n
aSbaei  $ac UvgViewOptOut(n
aSnyteFieta$dfpSettooi Typ d  'eeeu e_Mett g  (_in  Iriooi DfpSettooi '(n
aSnyteFieta$dfpSettooi DataTyp d  ''(n
aSbaei  $instreamVidCoPlacem  hAccepter(n
aSbaei  $inaSestitialPlacem  hAccepter(n
aSbaei  $nielsenOcrOptOut(n
aSbaei  $verificasatnTagOptOut(n
aSbaei  $vidCoAc UvgViewOptOut(n
e  Sbaei  u_ad U 'rsetAd UvgViewOptOut($ac UvgViewOptOuttgfal  y crl u ttac UvgViewOptOut = $ac UvgViewOptOut(n
a}e  Sbaei  u_ad U 'rgetAd UvgViewOptOut(tgfal  y cr  d_r  l u ttac UvgViewOptOut(n
a}e  Sbaei  u_ad U 'rsetDfpSettooi (eeeu e_Mett g  (_in  Iriooi D_pSettooi  $dfpSettooi tgfal  y crl u ttd_pSettooi  = $dfpSettooi (n
a}e  Sbaei  u_ad U 'rgetDfpSettooi (tgfal  y cr  d_r  l u ttdfpSettooi (n
a}e  Sbaei  u_ad U 'rsetInstreamVidCoPlacem  hAccepter($instreamVidCoPlacem  hAcceptertgfal  y crl u ttinstreamVidCoPlacem  hAcceptera=a$instreamVidCoPlacem  hAccepter(n
a}e  Sbaei  u_ad U 'rgetInstreamVidCoPlacem  hAccepter(tgfal  y cr  d_r  l u ttinstreamVidCoPlacem  hAccepter(n
a}e  Sbaei  u_ad U 'rsetInaSestitialPlacem  hAccepter($inaSestitialPlacem  hAcceptertgfal  y crl u ttinaSestitialPlacem  hAccepter = $inaSestitialPlacem  hAccepter(n
a}e  Sbaei  u_ad U 'rgetInaSestitialPlacem  hAccepter(tgfal  y cr  d_r  l u ttinaSestitialPlacem  hAccepter(n
a}e  Sbaei  u_ad U 'rsetNielsenOcrOptOut($nielsenOcrOptOuttgfal  y crl u ttiielsenOcrOptOut(= $iielsenOcrOptOut(n
a}e  Sbaei  u_ad U 'rgetNielsenOcrOptOut(tgfal  y cr  d_r  l u ttiielsenOcrOptOut(n
a}e  Sbaei  u_ad U 'rsetVerificasatnTagOptOut($verificasatnTagOptOuttgfal  y crl u ttverificasatnTagOptOutt= $verificasatnTagOptOut(n
a}e  Sbaei  u_ad U 'rgetVerificasatnTagOptOut(tgfal  y cr  d_r  l u ttverificasatnTagOptOut(n
a}e  Sbaei  u_ad U 'rsetVidCoAc UvgViewOptOut($vidCoAc UvgViewOptOuttgfal  y crl u ttvidCoAc UvgViewOptOutt= $vidCoAc UvgViewOptOut(n
a}e  Sbaei  u_ad U 'rgetVidCoAc UvgViewOptOut(tgfal  y cr  d_r  l u ttvidCoAc UvgViewOptOut(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi DireFiorySitesListResponsCa(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'direFiorySites'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSnyteFieta$direFiorySite Typ d  'eeeu e_Mett g  (_in  Iriooi DireFiorySite'(n
aSnyteFieta$direFiorySitesDataTyp d  'eal I'(n
aSbaei  $kind(n
aSbaei  $i(_SP p Tokee(n
e  Sbaei  u_ad U 'rsetDireFiorySites($direFiorySitestgfal  y crl u ttdireFiorySites SatdireFiorySites(n
a}e  Sbaei  u_ad U 'rgetDireFiorySites(tgfal  y cr  d_r  l u ttdireFiorySites(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetN(_SP p Tokee($i(_SP p Tokeetgfal  y crl u tti(_SP p Tokee(= $i(_SP p Tokee(n
a}e  Sbaei  u_ad U 'rgetN(_SP p Tokee(tgfal  y cr  d_r  l u tti(_SP p Tokee(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi Ev  hTag (_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'siteIds'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $accou har(n
aSbaei  $adIr
nyoSeId(n
aSnyteFieta$adIr
nyoSeIdDi   sir an
"CTyp d  'eeeu e_Mett g  (_in  Iriooi Di   sir an
"C';  y
nyteFieta$adIr
nyoSeIdDi   sir an
"CDataTyp d  ''(n
aSbaei  $campaignId(n
aSnyteFieta$campaignIdDi   sir an
"CTyp d  'eeeu e_Mett g  (_in  Iriooi Di   sir an
"C';  y
nyteFieta$campaignIdDi   sir an
"CDataTyp d  ''(n
aSbaei  $enabledByDefault(n
aSbaei  $ir(n
aSbaei  $kind(n
aSbaei  $ietg(n
aSbaei  $siteFilaSeTyp (n
aSbaei  $siteIds(n
aSbaei  $sslCompliant(n
aSbaei  $status(n
aSbaei  $subaccou har(n
aSbaei  $typ (n
aSbaei  $url(n
aSbaei  $urlEscapeLevels(n
e  Sbaei  u_ad U 'rsetAccou har($accou hartgfal  y crl u ttaccou harg= $accou hId(n
a}e  Sbaei  u_ad U 'rgetAccou hId(tgfal  y cr  d_r  l u ttaccou hId(n
a}e  Sbaei  u_ad U 'rsetAdIr
nyoSeId($adIr
nyoSeIdtgfal  y crl u ttadvr
nyoSearg= $a Ir
nyoSeId(n
a}e  Sbaei  u_ad U 'rgetA Ir
nyoSear(tgfal  y cr  d_r  l u tta Ir
nyoSeId(n
a}e  Sbaei  u_ad U 'rsetAdIr
nyoSeIdDi   sir an
"C(eeeu e_Mett g  (_in  Iriooi Di   sir an
"Ca$adIr
nyoSeIdDi   sir an
"Ctgfal  y crl u ttadvr
nyoSearDi   sir an
"Ca=a$advr
nyoSearDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rgetA Ir
nyoSearDi   sir an
"C(tgfal  y cr  d_r  l u ttadvr
nyoSearDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rsetCampaignId($campaignIdtgfal  y crl u ttcampaignIda=a$campaignId(n
a}e  Sbaei  u_ad U 'rgetCampaignId(tgfal  y cr  d_r  l u ttcampaignId(n
a}e  Sbaei  u_ad U 'rsetCampaignIdDi   sir an
"C(eeeu e_Mett g  (_in  Iriooi Di   sir an
"Ca$campaignIdDi   sir an
"Ctgfal  y crl u ttcampaignIdDi   sir an
"Ca=a$campaignIdDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rgetCampaignIdDi   sir an
"C(tgfal  y cr  d_r  l u ttcampaignIdDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rsetEtabledByDefault($enabledByDefaulttgfal  y crl u ttenabledByDefaulta=a$enabledByDefault(n
a}e  Sbaei  u_ad U 'rgetEtabledByDefault(tgfal  y cr  d_r  l u ttenabledByDefault(n
a}e  Sbaei  u_ad U 'rsetId($idtgfal  y crl u ttid Satid(n
a}e  Sbaei  u_ad U 'rgetId(tgfal  y cr  d_r  l u ttid(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetNDI ($ietgtgfal  y crl u ttietg(= $ietg(n
a}e  Sbaei  u_ad U 'rgetNDI (tgfal  y cr  d_r  l u ttietg(n
a}e  Sbaei  u_ad U 'rsetSiteFilaSeTyp ($siteFilaSeTyp tgfal  y crl u ttsiteFilaSeTyp (= $siteFilaSeTyp (n
a}e  Sbaei  u_ad U 'rgetSiteFilaSeTyp (tgfal  y cr  d_r  l u ttsiteFilaSeTyp (n
a}e  Sbaei  u_ad U 'rsetSiteIds($siteIdstgfal  y crl u ttsiteIds SatsiteIds(n
a}e  Sbaei  u_ad U 'rgetSiteIds(tgfal  y cr  d_r  l u ttsiteIds(n
a}e  Sbaei  u_ad U 'rsetSslCompliant($sslComplianttgfal  y crl u ttsslCompliant SatsslCompliant(n
a}e  Sbaei  u_ad U 'rgetSslCompliant(tgfal  y cr  d_r  l u ttsslCompliant(n
a}e  Sbaei  u_ad U 'rsetStatus($statustgfal  y crl u ttstatus Satstatus(n
a}e  Sbaei  u_ad U 'rgetStatus(tgfal  y cr  d_r  l u ttstatus(n
a}e  Sbaei  u_ad U 'rsetSubaccou har($ ubaccou hartgfal  y crl u tttubaccou harg= $ ubaccou har(n
a}e  Sbaei  u_ad U 'rgetSubaccou har(tgfal  y cr  d_r  l ustttubaccou har(n
a}e  Sbaei  u_ad U 'rsetTyp ($typ tgfal  y crl u tttyp a=a$typ (n
a}e  Sbaei  u_ad U 'rgetTyp (tgfal  y cr  d_r  l u tttyp (n
a}e  Sbaei  u_ad U 'rsetUrl($urltgfal  y crl u tturl = $url(n
a}e  Sbaei  u_ad U 'rgetUrl(tgfal  y cr  d_r  l u tturl(n
a}e  Sbaei  u_ad U 'rsetUrlEscapeLevels($urlEscapeLevelstgfal  y crl u tturlEscapeLevels = $urlEscapeLevels(n
a}e  Sbaei  u_ad U 'rgetUrlEscapeLevels(tgfal  y cr  d_r  l u tturlEscapeLevels(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi Ev  hTagOverridCa(_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $atabled(n
aSbaei  $id(n
e  Sbaei  u_ad U 'rsetEtabled($enabledtgfal  y crl u ttenableda=a$enabled(n
a}e  Sbaei  u_ad U 'rgetEtabled(tgfal  y cr  d_r  l u ttenabled(n
a}e  Sbaei  u_ad U 'rsetId($idtgfal  y crl u ttid Satid(n
a}e  Sbaei  u_ad U 'rgetId(tgfal  y cr  d_r  l u ttid(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi Ev  hTagsListResponsCa(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'ev  hTags'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSnyteFieta$ev  hTagsTyp d  'eeeu e_Mett g  (_in  Iriooi Ev  hTag'(n
aSnyteFieta$ev  hTagsDataTyp d  'eal I'(n
aSbaei  $kind(n
e  Sbaei  u_ad U 'rsetEv  hTags($ev  hTagstgfal  y crl u ttev  hTagsa=a$ev  hTags(n
a}e  Sbaei  u_ad U 'rgetEv  hTags(tgfal  y cr  d_r  l u ttev  hTags(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi FileListg(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'items'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $etag(n
aSnyteFieta$itemsTyp d  'eeeu e_Mett g  (_in  Iriooi D_in  IriooiFile'(n
aSnyteFieta$itemsDataTyp d  'eal I'(n
aSbaei  $kind(n
aSbaei  $i(_SP p Tokee(n
e  Sbaei  u_ad U 'rsetEtag($etagtgfal  y crl u ttatag Satetag(n
a}e  Sbaei  u_ad U 'rgetEtag(tgfal  y cr  d_r  l u ttetag(n
a}e  Sbaei  u_ad U 'rsetItems($itemstgfal  y crl u ttitems Satitems(n
a}e  Sbaei  u_ad U 'rgetItems(tgfal  y cr  d_r  l u ttitems(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetN(_SP p Tokee($i(_SP p Tokeetgfal  y crl u tti(_SP p Tokee(= $i(_SP p Tokee(n
a}e  Sbaei  u_ad U 'rgetN(_SP p Tokee(tgfal  y cr  d_r  l u tti(_SP p Tokee(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi Flighha(_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $ataDatg(n
aSbaei  $raseOrCost(n
aSbaei  $stattDatg(n
aSbaei  $units(n
e  Sbaei  u_ad U 'rsetEtaDatg($ataDatgtgfal  y crl u ttataDatg SatataDatg(n
a}e  Sbaei  u_ad U 'rgetEtaDatg(tgfal  y cr  d_r  l u ttataDatg(n
a}e  Sbaei  u_ad U 'rsetRaseOrCost($raseOrCosttgfal  y crl u ttraseOrCost SatraseOrCost(n
a}e  Sbaei  u_ad U 'rgetRaseOrCost(tgfal  y cr  d_r  l u ttraseOrCost(n
a}e  Sbaei  u_ad U 'rsetStattDatg($stattDatgtgfal  y crl u ttstattDatg SatstattDatg(n
a}e  Sbaei  u_ad U 'rgetStattDatg(tgfal  y cr  d_r  l u ttstattDatg(n
a}e  Sbaei  u_ad U 'rsetUnits($unitstgfal  y crl u ttunits = $units(n
a}e  Sbaei  u_ad U 'rgetUnits(tgfal  y cr  d_r  l u ttunits(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi FloodlighhAc UvinyCsGeneraseTagResponsCa(_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $floodlighhAc UvinyTag(n
aSbaei  $kind(n
e  Sbaei  u_ad U 'rsetFloodlighhAc UvinyTag($floodlighhAc UvinyTagtgfal  y crl u ttfloodlighhAc UvinyTag = $floodlighhAc UvinyTag(n
a}e  Sbaei  u_ad U 'rgetFloodlighhAc UvinyTag(tgfal  y cr  d_r  l u ttfloodlighhAc UvinyTag(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi FloodlighhAc UvinyCsListResponsCa(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'floodlighhAc Uvinies'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSnyteFieta$floodlighhAc UviniesTyp d  'eeeu e_Mett g  (_in  Iriooi FloodlighhAc Uviny'(n
aSnyteFieta$floodlighhAc UviniesDataTyp d  'eal I'(n
aSbaei  $kind(n
aSbaei  $i(_SP p Tokee(n
e  Sbaei  u_ad U 'rsetFloodlighhAc UvinyCs($floodlighhAc Uviniestgfal  y crl u ttfloodlighhAc Uvinies = $floodlighhAc Uvinies(n
a}e  Sbaei  u_ad U 'rgetFloodlighhAc UvinyCs(tgfal  y cr  d_r  l u ttfloodlighhAc Uvinies(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetN(_SP p Tokee($i(_SP p Tokeetgfal  y crl u tti(_SP p Tokee(= $i(_SP p Tokee(n
a}e  Sbaei  u_ad U 'rgetN(_SP p Tokee(tgfal  y cr  d_r  l u tti(_SP p Tokee(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi FloodlighhAc Uvinya(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'userDefinedVariableTyp s'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $accou har(n
aSbaei  $adIr
nyoSeId(n
aSnyteFieta$adIr
nyoSeIdDi   sir an
"CTyp d  'eeeu e_Mett g  (_in  Iriooi Di   sir an
"C';  y
nyteFieta$adIr
nyoSeIdDi   sir an
"CDataTyp d  ''(n
aSbaei  $cacheBusiooiTyp (n
aSbaei  $cou hooiMethod(n
aSnyteFieta$defaultTagsTyp d  'eeeu e_Mett g  (_in  Iriooi FloodlighhAc UvinyDynamicTag'(n
aSnyteFieta$defaultTagsDataTyp d  'eal I'(n
aSbaei  $expeFietUrl(n
aSbaei  $floodlighhAc UvinyGroupar(n
aSbaei  $floodlighhAc UvinyGroupNetg(n
aSbaei  $floodlighhAc UvinyGroupTagStrooi(n
aSbaei  $floodlighhAc UvinyGroupTyp (n
aSbaei  $floodlighhConfigurasatnId(n
aSnyteFieta$floodlighhConfigurasatnIdDi   sir an
"CTyp d  'eeeu e_Mett g  (_in  Iriooi Di   sir an
"C';  y
nyteFieta$floodlighhConfigurasatnIdDi   sir an
"CDataTyp d  ''(n
aSbaei  $hiddea(n
aSbaei  $ir(n
aSnyteFieta$idDi   sir an
"CTyp d  'eeeu e_Mett g  (_in  Iriooi Di   sir an
"C';  y
nyteFieta$idDi   sir an
"CDataTyp d  ''(n
aSbaei  $im p TagEtabled(n
aSbaei  $kind(n
aSbaei  $ietg(n
aSbaei  $notes(n
a
nyteFieta$SbaeisherTagsTyp d  'eeeu e_Mett g  (_in  Iriooi FloodlighhAc UvinyPbaeisherDynamicTag'(n
aSnyteFieta$SbaeisherTagsDataTyp d  'eal I'(n
aSbaei  $secur (n
aSbaei  $sslCompliant(n
aSbaei  $sslRequired(n
aSbaei  $subaccou har(n
aSbaei  $tagFormat(n
aSbaei  $tagStrooi(n
aSbaei  $userDefinedVariableTyp s(n
e  Sbaei  u_ad U 'rsetAccou har($accou hartgfal  y crl u ttaccou harg= $accou hId(n
a}e  Sbaei  u_ad U 'rgetAccou hId(tgfal  y cr  d_r  l u ttaccou hId(n
a}e  Sbaei  u_ad U 'rsetAdIr
nyoSeId($adIr
nyoSeIdtgfal  y crl u ttadvr
nyoSearg= $a Ir
nyoSeId(n
a}e  Sbaei  u_ad U 'rgetA Ir
nyoSear(tgfal  y cr  d_r  l u tta Ir
nyoSeId(n
a}e  Sbaei  u_ad U 'rsetAdIr
nyoSeIdDi   sir an
"C(eeeu e_Mett g  (_in  Iriooi Di   sir an
"Ca$adIr
nyoSeIdDi   sir an
"Ctgfal  y crl u ttadvr
nyoSearDi   sir an
"Ca=a$advr
nyoSearDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rgetA Ir
nyoSearDi   sir an
"C(tgfal  y cr  d_r  l u ttadvr
nyoSearDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rsetCacheBusiooiTyp ($cacheBusiooiTyp tgfal  y crl u ttcacheBusiooiTyp a=a$cacheBusiooiTyp (n
a}e  Sbaei  u_ad U 'rgetCacheBusiooiTyp (tgfal  y cr  d_r  l u ttcacheBusiooiTyp (n
a}e  Sbaei  u_ad U 'rsetC u hooiMethod($cou hooiMethodtgfal  y crl u ttcou hooiMethoda=a$cou hooiMethod(n
a}e  Sbaei  u_ad U 'rgetC u hooiMethod(tgfal  y cr  d_r  l u ttcou hooiMethod(n
a}e  Sbaei  u_ad U 'rsetDefaultTags($defaultTagstgfal  y crl u ttdefaultTagsa=a$defaultTags(n
a}e  Sbaei  u_ad U 'rgetDefaultTags(tgfal  y cr  d_r  l u ttdefaultTags(n
a}e  Sbaei  u_ad U 'rsetExpeFietUrl($expeFietUrltgfal  y crl u ttaxpeFietUrl SataxpeFietUrl(n
a}e  Sbaei  u_ad U 'rgetExpeFietUrl(tgfal  y cr  d_r  l u ttaxpeFietUrl(n
a}e  Sbaei  u_ad U 'rsetFloodlighhAc UvinyGroupar($floodlighhAc UvinyGroupartgfal  y crl u ttfloodlighhAc UvinyGroupar = $floodlighhAc UvinyGroupar(n
a}e  Sbaei  u_ad U 'rgetFloodlighhAc UvinyGroupar(tgfal  y cr  d_r  l u ttfloodlighhAc UvinyGroupar(n
a}e  Sbaei  u_ad U 'rsetFloodlighhAc UvinyGroupNetg($floodlighhAc UvinyGroupNetgtgfal  y crl u ttfloodlighhAc UvinyGroupNetg(= $floodlighhAc UvinyGroupNetg(n
a}e  Sbaei  u_ad U 'rgetFloodlighhAc UvinyGroupNetg(tgfal  y cr  d_r  l u ttfloodlighhAc UvinyGroupNetg(n
a}e  Sbaei  u_ad U 'rsetFloodlighhAc UvinyGroupTagStrooi($floodlighhAc UvinyGroupTagStrooitgfal  y crl u ttfloodlighhAc UvinyGroupTagStrooi(= $floodlighhAc UvinyGroupTagStrooi(n
a}e  Sbaei  u_ad U 'rgetFloodlighhAc UvinyGroupTagStrooi(tgfal  y cr  d_r  l u ttfloodlighhAc UvinyGroupTagStrooi(n
a}e  Sbaei  u_ad U 'rsetFloodlighhAc UvinyGroupTyp ($floodlighhAc UvinyGroupTyp tgfal  y crl u ttfloodlighhAc UvinyGroupTyp a=a$floodlighhAc UvinyGroupTyp (n
a}e  Sbaei  u_ad U 'rgetFloodlighhAc UvinyGroupTyp (tgfal  y cr  d_r  l u ttfloodlighhAc UvinyGroupTyp (n
a}e  Sbaei  u_ad U 'rsetFloodlighhConfigurasatnId($floodlighhConfigurasatnIdtgfal  y crl u ttfloodlighhConfigurasatnIda=a$floodlighhConfigurasatnId(n
a}e  Sbaei  u_ad U 'rgetFloodlighhConfigurasatnId(tgfal  y cr  d_r  l u ttfloodlighhConfigurasatnId(n
a}e  Sbaei  u_ad U 'rsetFloodlighhConfigurasatnIdDi   sir an
"C(eeeu e_Mett g  (_in  Iriooi Di   sir an
"Ca$floodlighhConfigurasatnIdDi   sir an
"Ctgfal  y crl u ttfloodlighhConfigurasatnIdDi   sir an
"Ca=a$floodlighhConfigurasatnIdDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rgetFloodlighhConfigurasatnIdDi   sir an
"C(tgfal  y cr  d_r  l u ttfloodlighhConfigurasatnIdDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rsetHiddea($hiddeatgfal  y crl u tthiddeaa=a$hiddea(n
a}e  Sbaei  u_ad U 'rgetHiddea(tgfal  y cr  d_r  l u tthiddea(n
a}e  Sbaei  u_ad U 'rsetId($idtgfal  y crl u ttid Satid(n
a}e  Sbaei  u_ad U 'rgetId(tgfal  y cr  d_r  l u ttid(n
a}e  Sbaei  u_ad U 'rsetIdDi   sir an
"C(eeeu e_Mett g  (_in  Iriooi Di   sir an
"Ca$idDi   sir an
"Ctgfal  y crl u ttidDi   sir an
"Ca=a$idDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rgetIdDi   sir an
"C(tgfal  y cr  d_r  l u ttidDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rsetIm p TagEtabled($im p TagEtabledtgfal  y crl u ttim p TagEtableda=a$im p TagEtabled(n
a}e  Sbaei  u_ad U 'rgetIm p TagEtabled(tgfal  y cr  d_r  l u ttim p TagEtabled(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetNDI ($ietgtgfal  y crl u ttietg(= $ietg(n
a}e  Sbaei  u_ad U 'rgetNDI (tgfal  y cr  d_r  l u ttietg(n
a}e  Sbaei  u_ad U 'rsetNotes($notestgfal  y crl u ttiotes Satnotes(n
a}e  Sbaei  u_ad U 'rgetNotes(tgfal  y cr  d_r  l u ttnotes(n
a}e  Sbaei  u_ad U 'rsetPbalisherTags($pbalisherTagstgfal  y crl u ttpbalisherTags SatpbalisherTags(n
a}e  Sbaei  u_ad U 'rgetPbalisherTags(tgfal  y cr  d_r  l u ttpbalisherTags(n
a}e  Sbaei  u_ad U 'rsetSecur ($secur tgfal  y crl u ttsecur  Satsecur (n
a}e  Sbaei  u_ad U 'rgetSecur (tgfal  y cr  d_r  l u ttsecur (n
a}e  Sbaei  u_ad U 'rsetSslCompliant($sslComplianttgfal  y crl u ttsslCompliant SatsslCompliant(n
a}e  Sbaei  u_ad U 'rgetSslCompliant(tgfal  y cr  d_r  l u ttsslCompliant(n
a}e  Sbaei  u_ad U 'rsetSslRequired($sslRequiredtgfal  y crl u ttsslRequired SatsslRequired(n
a}e  Sbaei  u_ad U 'rgetSslRequired(tgfal  y cr  d_r  l u ttsslRequired(n
a}e  Sbaei  u_ad U 'rsetSubaccou har($ ubaccou hartgfal  y crl u tttubaccou harg= $ ubaccou har(n
a}e  Sbaei  u_ad U 'rgetSubaccou har(tgfal  y cr  d_r  l ustttubaccou har(n
a}e  Sbaei  u_ad U 'rsetTagFormat($tagFormattgfal  y crl u tttagFormatg= $tagFormat(n
a}e  Sbaei  u_ad U 'rgetTagFormat(tgfal  y cr  d_r  l ustttagFormat(n
a}e  Sbaei  u_ad U 'rsetTagStrooi($tagStrooitgfal  y crl u tttagStrooi(= $tagStrooi(n
a}e  Sbaei  u_ad U 'rgetTagStrooi(tgfal  y cr  d_r  l ustttagStrooi(n
a}e  Sbaei  u_ad U 'rsetUserDefinedVariableTyp s($userDefinedVariableTyp stgfal  y crl u ttuserDefinedVariableTyp s(= $userDefinedVariableTyp s(n
a}e  Sbaei  u_ad U 'rgetUserDefinedVariableTyp s(tgfal  y cr  d_r  l usttuserDefinedVariableTyp s(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi FloodlighhAc UvinyDynamicTaga(_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $id(n
aSbaei  $ietg(n
aSbaei  $tag(n
e  Sbaei  u_ad U 'rsetId($idtgfal  y crl u ttid Satid(n
a}e  Sbaei  u_ad U 'rgetId(tgfal  y cr  d_r  l u ttid(n
a}e  Sbaei  u_ad U 'rsetNDI ($ietgtgfal  y crl u ttietg(= $ietg(n
a}e  Sbaei  u_ad U 'rgetNDI (tgfal  y cr  d_r  l u ttietg(n
a}e  Sbaei  u_ad U 'rsetTai($tagtgfal  y crl u tttag(= $tag(n
a}e  Sbaei  u_ad U 'rgetTag(tgfal  y cr  d_r  l ustttag(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi FloodlighhAc UvinyGroupa(_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $accou har(n
aSbaei  $adIr
nyoSeId(n
aSnyteFieta$adIr
nyoSeIdDi   sir an
"CTyp d  'eeeu e_Mett g  (_in  Iriooi Di   sir an
"C';  y
nyteFieta$adIr
nyoSeIdDi   sir an
"CDataTyp d  ''(n
aSbaei  $floodlighhConfigurasatnId(n
a
nyteFieta$floodlighhConfigurasatnIdDi   sir an
"CTyp d  'eeeu e_Mett g  (_in  Iriooi Di   sir an
"C';  y
nyteFieta$floodlighhConfigurasatnIdDi   sir an
"CDataTyp d  ''(n
aSbaei  $id(n
a
nyteFieta$idDi   sir an
"CTyp d  'eeeu e_Mett g  (_in  Iriooi Di   sir an
"C';  y
nyteFieta$idDi   sir an
"CDataTyp d  ''(n
aSbaei  $kind(n
aSbaei  $ietg(n
aSbaei  $subaccou har(n
aSbaei  $tagStrooi(n
aSbaei  $typ (n
e  Sbaei  u_ad U 'rsetAccou har($accou hartgfal  y crl u ttaccou harg= $accou hId(n
a}e  Sbaei  u_ad U 'rgetAccou hId(tgfal  y cr  d_r  l u ttaccou hId(n
a}e  Sbaei  u_ad U 'rsetAdIr
nyoSeId($adIr
nyoSeIdtgfal  y crl u ttadvr
nyoSearg= $a Ir
nyoSeId(n
a}e  Sbaei  u_ad U 'rgetA Ir
nyoSear(tgfal  y cr  d_r  l u tta Ir
nyoSeId(n
a}e  Sbaei  u_ad U 'rsetAdIr
nyoSeIdDi   sir an
"C(eeeu e_Mett g  (_in  Iriooi Di   sir an
"Ca$adIr
nyoSeIdDi   sir an
"Ctgfal  y crl u ttadvr
nyoSearDi   sir an
"Ca=a$advr
nyoSearDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rgetA Ir
nyoSearDi   sir an
"C(tgfal  y cr  d_r  l u ttadvr
nyoSearDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rsetFloodlighhConfigurasatnId($floodlighhConfigurasatnIdtgfal  y crl u ttfloodlighhConfigurasatnIda=a$floodlighhConfigurasatnId(n
a}e  Sbaei  u_ad U 'rgetFloodlighhConfigurasatnId(tgfal  y cr  d_r  l u ttfloodlighhConfigurasatnId(n
a}e  Sbaei  u_ad U 'rsetFloodlighhConfigurasatnIdDi   sir an
"C(eeeu e_Mett g  (_in  Iriooi Di   sir an
"Ca$floodlighhConfigurasatnIdDi   sir an
"Ctgfal  y crl u ttfloodlighhConfigurasatnIdDi   sir an
"Ca=a$floodlighhConfigurasatnIdDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rgetFloodlighhConfigurasatnIdDi   sir an
"C(tgfal  y cr  d_r  l u ttfloodlighhConfigurasatnIdDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rsetId($idtgfal  y crl u ttid Satid(n
a}e  Sbaei  u_ad U 'rgetId(tgfal  y cr  d_r  l u ttid(n
a}e  Sbaei  u_ad U 'rsetIdDi   sir an
"C(eeeu e_Mett g  (_in  Iriooi Di   sir an
"Ca$idDi   sir an
"Ctgfal  y crl u ttidDi   sir an
"Ca=a$idDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rgetIdDi   sir an
"C(tgfal  y cr  d_r  l u ttidDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetNDI ($ietgtgfal  y crl u ttietg(= $ietg(n
a}e  Sbaei  u_ad U 'rgetNDI (tgfal  y cr  d_r  l u ttietg(n
a}e  Sbaei  u_ad U 'rsetSubaccou har($ ubaccou hartgfal  y crl u tttubaccou harg= $ ubaccou har(n
a}e  Sbaei  u_ad U 'rgetSubaccou har(tgfal  y cr  d_r  l ustttubaccou har(n
a}e  Sbaei  u_ad U 'rsetTagStrooi($tagStrooitgfal  y crl u tttagStrooi(= $tagStrooi(n
a}e  Sbaei  u_ad U 'rgetTagStrooi(tgfal  y cr  d_r  l ustttagStrooi(n
a}e  Sbaei  u_ad U 'rsetTyp ($typ tgfal  y crl u tttyp a=a$typ (n
a}e  Sbaei  u_ad U 'rgetTyp (tgfal  y cr  d_r  l u tttyp (n
a}e}     _a eeeu e_Mett g  (_in  Iriooi FloodlighhAc UvinyGroupsListResponsCa(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'floodlighhAc UvinyGroups'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSnyteFieta$floodlighhAc UvinyGroupsTyp d  'eeeu e_Mett g  (_in  Iriooi FloodlighhAc UvinyGroup'(n
aSnyteFieta$floodlighhAc UvinyGroupsDataTyp d  'eal I'(n
aSbaei  $kind(n
aSbaei  $i(_SP p Tokee(n
e  Sbaei  u_ad U 'rsetFloodlighhAc UvinyGroups($floodlighhAc UvinyGroupstgfal  y crl u ttfloodlighhAc UvinyGroupsa=a$floodlighhAc UvinyGroups(n
a}e  Sbaei  u_ad U 'rgetFloodlighhAc UvinyGroups(tgfal  y cr  d_r  l u ttfloodlighhAc UvinyGroups(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetN(_SP p Tokee($i(_SP p Tokeetgfal  y crl u tti(_SP p Tokee(= $i(_SP p Tokee(n
a}e  Sbaei  u_ad U 'rgetN(_SP p Tokee(tgfal  y cr  d_r  l u tti(_SP p Tokee(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi FloodlighhAc UvinyPbaeisherDynamicTaga(_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $cei kThrough(n
aSbaei  $direFiorySiteId(n
a
nyteFieta$dynamicTagTyp d  'eeeu e_Mett g  (_in  Iriooi FloodlighhAc UvinyDynamicTag'(n
aSnyteFieta$dynamicTagDataTyp d  ''(n
aSbaei  $siteId(n
a
nyteFieta$siteIdDi   sir an
"CTyp d  'eeeu e_Mett g  (_in  Iriooi Di   sir an
"C';  y
nyteFieta$siteIdDi   sir an
"CDataTyp d  ''(n
aSbaei  $viewThrough(n
e  Sbaei  u_ad U 'rsetCei kThrough($cei kThroughtgfal  y crl u ttcei kThrough(= $cei kThrough(n
a}e  Sbaei  u_ad U 'rgetCei kThrough(tgfal  y cr  d_r  l u ttcei kThrough(n
a}e  Sbaei  u_ad U 'rsetDireFiorySitear($direFiorySiteIdtgfal  y crl u ttdireFiorySiteId(= $direFiorySiteId(n
a}e  Sbaei  u_ad U 'rgetDireFiorySitear(tgfal  y cr  d_r  l u ttdireFiorySiteId(n
a}e  Sbaei  u_ad U 'rsetDynamicTag(eeeu e_Mett g  (_in  Iriooi FloodlighhAc UvinyDynamicTaga$dynamicTagtgfal  y crl u ttdynamicTaga=a$dynamicTag(n
a}e  Sbaei  u_ad U 'rgetDynamicTag(tgfal  y cr  d_r  l u ttdynamicTag(n
a}e  Sbaei  u_ad U 'rsetSiteId($siteIdtgfal  y crl u tttiteId(= $siteId(n
a}e  Sbaei  u_ad U 'rgetSitear(tgfal  y cr  d_r  l u ttsiteId(n
a}e  Sbaei  u_ad U 'rsetSiteIdDi   sir an
"C(eeeu e_Mett g  (_in  Iriooi Di   sir an
"Ca$siteIdDi   sir an
"Ctgfal  y crl u tttiteIdDi   sir an
"Ca=a$titeIdDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rgetSitearDi   sir an
"C(tgfal  y cr  d_r  l u tttiteIdDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rsetViewThrough($viewThroughtgfal  y crl u ttviewThrougha=a$viewThrough(n
a}e  Sbaei  u_ad U 'rgetViewThrough(tgfal  y cr  d_r  l u ttviewThrough(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi FloodlighhConfigurasatna(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'userDefinedVariableConfigurasatns'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $accou har(n
aSbaei  $adIr
nyoSeId(n
aSnyteFieta$adIr
nyoSeIdDi   sir an
"CTyp d  'eeeu e_Mett g  (_in  Iriooi Di   sir an
"C';  y
nyteFieta$adIr
nyoSeIdDi   sir an
"CDataTyp d  ''(n
aSbaei  $aeseyticsDataSharooiEtabled(n
aSbaei  $exposur ToConIr
sir Etabled(n
aSbaei  $fiestDayOfWeek(n
aSbaei  $id(n
a
nyteFieta$idDi   sir an
"CTyp d  'eeeu e_Mett g  (_in  Iriooi Di   sir an
"C';  y
nyteFieta$idDi   sir an
"CDataTyp d  ''(n
aSbaei  $kind(n
aSnyteFieta$lookbackConfigurasatnTyp d  'eeeu e_Mett g  (_in  Iriooi LookbackConfigurasatn';  y
nyteFieta$lookbackConfigurasatnDataTyp d  ''(n
aSbaei  $na d_alSearchConIr
sir AttrobusatnOp  _a(n
aSnyteFieta$omni d_eSettooi Typ d  'eeeu e_Mett g  (_in  Iriooi Omni d_eSettooi ';  y
nyteFieta$omni d_eSettooi DataTyp d  ''(n
aSbaei  $sslRequired(n
aSbaei  $standardVariableTyp s(n
aSbaei  $subaccou har(n
aSnyteFieta$tagSettooi Typ d  'eeeu e_Mett g  (_in  Iriooi TagSettooi ';  y
nyteFieta$tagSettooi DataTyp d  ''(n
aSnyteFieta$userDefinedVariableConfigurasatnsTyp d  'eeeu e_Mett g  (_in  Iriooi UserDefinedVariableConfigurasatn';  y
nyteFieta$userDefinedVariableConfigurasatnsDataTyp d  'eal I'(n
e  Sbaei  u_ad U 'rsetAccou har($accou hartgfal  y crl u ttaccou harg= $accou hId(n
a}e  Sbaei  u_ad U 'rgetAccou hId(tgfal  y cr  d_r  l u ttaccou hId(n
a}e  Sbaei  u_ad U 'rsetAdIr
nyoSeId($adIr
nyoSeIdtgfal  y crl u ttadvr
nyoSearg= $a Ir
nyoSeId(n
a}e  Sbaei  u_ad U 'rgetA Ir
nyoSear(tgfal  y cr  d_r  l u tta Ir
nyoSeId(n
a}e  Sbaei  u_ad U 'rsetAdIr
nyoSeIdDi   sir an
"C(eeeu e_Mett g  (_in  Iriooi Di   sir an
"Ca$adIr
nyoSeIdDi   sir an
"Ctgfal  y crl u ttadvr
nyoSearDi   sir an
"Ca=a$advr
nyoSearDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rgetA Ir
nyoSearDi   sir an
"C(tgfal  y cr  d_r  l u ttadvr
nyoSearDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rsetAeseyticsDataSharooiEtabled($aeseyticsDataSharooiEtabledtgfal  y crl u ttaeseyticsDataSharooiEtableda=a$aeseyticsDataSharooiEtabled(n
a}e  Sbaei  u_ad U 'rgetAeseyticsDataSharooiEtabled(tgfal  y cr  d_r  l u ttaeseyticsDataSharooiEtabled(n
a}e  Sbaei  u_ad U 'rsetExposur ToConIr
sir Etabled($exposur ToConIr
sir Etabledtgfal  y crl u ttexposur ToConIr
sir Etableda=a$exposur ToConIr
sir Etabled(n
a}e  Sbaei  u_ad U 'rgetExposur ToConIr
sir Etabled(tgfal  y cr  d_r  l u ttexposur ToConIr
sir Etabled(n
a}e  Sbaei  u_ad U 'rsetFiestDayOfWeek($fiestDayOfWeektgfal  y crl u ttfiestDayOfWeeka=a$fiestDayOfWeek(n
a}e  Sbaei  u_ad U 'rgetFiestDayOfWeek(tgfal  y cr  d_r  l u ttfiestDayOfWeek(n
a}e  Sbaei  u_ad U 'rsetId($idtgfal  y crl u ttid Satid(n
a}e  Sbaei  u_ad U 'rgetId(tgfal  y cr  d_r  l u ttid(n
a}e  Sbaei  u_ad U 'rsetIdDi   sir an
"C(eeeu e_Mett g  (_in  Iriooi Di   sir an
"Ca$idDi   sir an
"Ctgfal  y crl u ttidDi   sir an
"Ca=a$idDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rgetIdDi   sir an
"C(tgfal  y cr  d_r  l u ttidDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetLookbackConfigurasatn(eeeu e_Mett g  (_in  Iriooi LookbackConfigurasatna$lookbackConfigurasatntgfal  y crl u ttlookbackConfigurasatn SatlookbackConfigurasatn(n
a}e  Sbaei  u_ad U 'rgetLookbackConfigurasatn(tgfal  y cr  d_r  l u ttlookbackConfigurasatn(n
a}e  Sbaei  u_ad U 'rsetND d_alSearchConIr
sir AttrobusatnOp  _a($na d_alSearchConIr
sir AttrobusatnOp  _atgfal  y crl u ttna d_alSearchConIr
sir AttrobusatnOp  _a = $na d_alSearchConIr
sir AttrobusatnOp  _a(n
a}e  Sbaei  u_ad U 'rgetNa d_alSearchConIr
sir AttrobusatnOp  _a(tgfal  y cr  d_r  l u ttie d_alSearchConIr
sir AttrobusatnOp  _a(n
a}e  Sbaei  u_ad U 'rsetOmni d_eSettooi (eeeu e_Mett g  (_in  Iriooi Omni d_eSettooi a$omni d_eSettooi tgfal  y crl u ttomni d_eSettooi  = $omni d_eSettooi (n
a}e  Sbaei  u_ad U 'rgetOmni d_eSettooi (tgfal  y cr  d_r  l u ttomni d_eSettooi (n
a}e  Sbaei  u_ad U 'rsetSslRequired($sslRequiredtgfal  y crl u ttsslRequired SatsslRequired(n
a}e  Sbaei  u_ad U 'rgetSslRequired(tgfal  y cr  d_r  l u ttsslRequired(n
a}e  Sbaei  u_ad U 'rsetStandardVariableTyp s($standardVariableTyp stgfal  y crl u ttstandardVariableTyp s SatstandardVariableTyp s(n
a}e  Sbaei  u_ad U 'rgetStandardVariableTyp s(tgfal  y cr  d_r  l u ttstandardVariableTyp s(n
a}e  Sbaei  u_ad U 'rsetSubaccou har($ ubaccou hartgfal  y crl u tttubaccou harg= $ ubaccou har(n
a}e  Sbaei  u_ad U 'rgetSubaccou har(tgfal  y cr  d_r  l ustttubaccou har(n
a}e  Sbaei  u_ad U 'rsetTagSettooi (eeeu e_Mett g  (_in  Iriooi TagSettooi  $tagSettooi tgfal  y crl u tttagSettooi  = $tagSettooi (n
a}e  Sbaei  u_ad U 'rgetTagSettooi (tgfal  y cr  d_r  l ustttagSettooi (n
a}e  Sbaei  u_ad U 'rsetUserDefinedVariableConfigurasatns($userDefinedVariableConfigurasatnstgfal  y crl u ttuserDefinedVariableConfigurasatns = $userDefinedVariableConfigurasatns(n
a}e  Sbaei  u_ad U 'rgetUserDefinedVariableConfigurasatns(tgfal  y cr  d_r  l usttuserDefinedVariableConfigurasatns(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi FloodlighhConfigurasatnsListResponsCa(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'floodlighhConfigurasatns'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSnyteFieta$floodlighhConfigurasatnsTyp d  'eeeu e_Mett g  (_in  Iriooi FloodlighhConfigurasatn';  y
nyteFieta$floodlighhConfigurasatnsDataTyp d  'eal I'(n
aSbaei  $kind(n
e  Sbaei  u_ad U 'rsetFloodlighhConfigurasatns($floodlighhConfigurasatnstgfal  y crl u ttfloodlighhConfigurasatns =a$floodlighhConfigurasatns(n
a}e  Sbaei  u_ad U 'rgetFloodlighhConfigurasatns(tgfal  y cr  d_r  l u ttfloodlighhConfigurasatns(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi FloodlighhR  IriCompasableField a(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'metrocs'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSnyteFieta$di   sir FilaSesTyp d  'eeeu e_Mett g  (_in  Iriooi Di   sir '(n
aSnyteFieta$di   sir FilaSesDataTyp d  'eal I'(n
aSnyteFieta$di   sir sTyp d  'eeeu e_Mett g  (_in  Iriooi Di   sir '(n
aSnyteFieta$di   sir sDataTyp d  'eal I'(n
aSbaei  $kind(n
aSnyteFieta$metrocsTyp d  'eeeu e_Mett g  (_in  Iriooi Metroc'(n
aSnyteFieta$metrocsDataTyp d  'eal I'(n
e  Sbaei  u_ad U 'rsetDi   sir FilaSes($di   sir FilaSestgfal  y crl u ttdi   sir FilaSes =a$di   sir FilaSes(n
a}e  Sbaei  u_ad U 'rgetDi   sir FilaSes(tgfal  y cr  d_r  l u ttdi   sir FilaSes(n
a}e  Sbaei  u_ad U 'rsetDi   sir s($di   sir stgfal  y crl u ttdi   sir s =a$di   sir s(n
a}e  Sbaei  u_ad U 'rgetDi   sir s(tgfal  y cr  d_r  l u ttdi   sir s(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetMetrocs($metrocstgfal  y crl u ttmetrocs Satmetrocs(n
a}e  Sbaei  u_ad U 'rgetMetrocs(tgfal  y cr  d_r  l u ttmetrocs(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi FrequencyCapa(_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $durasatn(n
aSbaei  $impressir s(n
e  Sbaei  u_ad U 'rsetDurasatn($durasatntgfal  y crl u ttdurasatn Satdurasatn(n
a}e  Sbaei  u_ad U 'rgetDurasatn(tgfal  y cr  d_r  l u ttdurasatn(n
a}e  Sbaei  u_ad U 'rsetImpressir s($impressir stgfal  y crl u ttimpressir sa=a$impressir s(n
a}e  Sbaei  u_ad U 'rgetImpressir s(tgfal  y cr  d_r  l u ttimpressir s(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi FsCommanda(_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $left(n
aSbaei  $posi U 'Op  _a(n
aSbaei  $top(n
aSbaei  $windowHeighh(n
aSbaei  $windowWidth(n
e  Sbaei  u_ad U 'rsetLeft($lefttgfal  y crl u ttleft Satleft(n
a}e  Sbaei  u_ad U 'rgetLeft(tgfal  y cr  d_r  l u ttleft(n
a}e  Sbaei  u_ad U 'rsetPosi U 'Op  _a($posi U 'Op  _atgfal  y crl u ttposi U 'Op  _a Satposi U 'Op  _a(n
a}e  Sbaei  u_ad U 'rgetPosi U 'Op  _a(tgfal  y cr  d_r  l u ttposi U 'Op  _a(n
a}e  Sbaei  u_ad U 'rsetTop($toptgfal  y crl u tttop = $top(n
a}e  Sbaei  u_ad U 'rgetTop(tgfal  y cr  d_r  l ustttop(n
a}e  Sbaei  u_ad U 'rsetWindowHeighh($windowHeighhtgfal  y crl u ttwindowHeighh = $windowHeighh(n
a}e  Sbaei  u_ad U 'rgetWindowHeighh(tgfal  y cr  d_r  l usttwindowHeighh(n
a}e  Sbaei  u_ad U 'rsetWindowWidth($windowWidthtgfal  y crl u ttwindowWidth = $windowWidth(n
a}e  Sbaei  u_ad U 'rgetWindowWidth(tgfal  y cr  d_r  l usttwindowWidth(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi GeoTargetooia(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'regitns'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSnyteFieta$ciniesTyp d  'eeeu e_Mett g  (_in  Iriooi Ciny'(n
aSnyteFieta$ciniesDataTyp d  'eal I'(n
aSnyteFieta$n untroesTyp d  'eeeu e_Mett g  (_in  Iriooi C untrI'(n
aSnyteFieta$n untroesDataTyp d  'eal I'(n
aSbaei  $excludeC untroes(n
aSnyteFieta$metrosTyp d  'eeeu e_Mett g  (_in  Iriooi Metro'(n
aSnyteFieta$metrosDataTyp d  'eal I'(n
aSnyteFieta$postalCodesTyp d  'eeeu e_Mett g  (_in  Iriooi PostalCode'(n
aSnyteFieta$postalCodesDataTyp d  'eal I'(n
aSnyteFieta$regitnsTyp d  'eeeu e_Mett g  (_in  Iriooi Regitn'(n
aSnyteFieta$regitnsDataTyp d  'eal I'(n
e  Sbaei  u_ad U 'rsetCinyCs($ciniestgfal  y crl u ttcinies = $cinies(n
a}e  Sbaei  u_ad U 'rgetCinyCs(tgfal  y cr  d_r  l u ttcinies(n
a}e  Sbaei  u_ad U 'rsetC u hryCs($c u hryCstgfal  y crl u ttc u hryCs = $c untroes(n
a}e  Sbaei  u_ad U 'rgetC u hryCs(tgfal  y cr  d_r  l u ttc untroes(n
a}e  Sbaei  u_ad U 'rsetExcludeC untroes($excludeC untroestgfal  y crl u ttexcludeC untroes = $excludeC untroes(n
a}e  Sbaei  u_ad U 'rgetExcludeC untroes(tgfal  y cr  d_r  l u ttexcludeC untroes(n
a}e  Sbaei  u_ad U 'rsetMetros($metrostgfal  y crl u ttmetros Satmetros(n
a}e  Sbaei  u_ad U 'rgetMetros(tgfal  y cr  d_r  l u ttmetros(n
a}e  Sbaei  u_ad U 'rsetPostalCodes($postalCodestgfal  y crl u ttpostalCodes SatpostalCodes(n
a}e  Sbaei  u_ad U 'rgetPostalCodes(tgfal  y cr  d_r  l u ttpostalCodes(n
a}e  Sbaei  u_ad U 'rsetRegitns($regitnstgfal  y crl u ttregitns Satregitns(n
a}e  Sbaei  u_ad U 'rgetRegitns(tgfal  y cr  d_r  l u ttregitns(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi Inv  horyItema(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'adSlots'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $accou har(n
aSnyteFieta$adSlotsTyp d  'eeeu e_Mett g  (_in  Iriooi AdSlot'(n
aSnyteFieta$adSlotsDataTyp d  'eal I'(n
aSbaei  $adIr
nyoSeId(n
aSbaei  $co
aSntCategoryId(n
aSbaei  $estimatedCei kThroughRatg(n
aSbaei  $estimatedConIr
sir Ratg(n
aSbaei  $id(n
aSbaei  $inPlaa(n
aSbaei  $kind(n
aSnyteFieta$lastModifiedInfoTyp d  'eeeu e_Mett g  (_in  Iriooi LastModifiedInfo';  y
nyteFieta$lastModifiedInfoDataTyp d  ''(n
aSbaei  $natg(n
aSbaei  $negotiasatnChannelId(n
aSbaei  $ordSeId(n
aSbaei  $placemSntStrategyar(n
aSnyteFieta$procingTyp d  'eeeu e_Mett g  (_in  Iriooi Procing'(n
aSnyteFieta$procingDataTyp d  ''(n
aSbaei  $SnyjeFiId(n
aSbaei  $rfpar(n
aSbaei  $siteId(n
aSbaei  $subaccou har(n
e  Sbaei  u_ad U 'rsetAccou har($accou hartgfal  y crl u ttaccou harg= $accou hId(n
a}e  Sbaei  u_ad U 'rgetAccou hId(tgfal  y cr  d_r  l u ttaccou hId(n
a}e  Sbaei  u_ad U 'rsetAdSlots($adSlotstgfal  y crl u ttadSlotsg= $adSlots(n
a}e  Sbaei  u_ad U 'rgetAdSlots(tgfal  y cr  d_r  l u ttadSlots(n
a}e  Sbaei  u_ad U 'rsetAdIr
nyoSeId($adIr
nyoSeIdtgfal  y crl u ttadvr
nyoSearg= $a Ir
nyoSeId(n
a}e  Sbaei  u_ad U 'rgetA Ir
nyoSear(tgfal  y cr  d_r  l u tta Ir
nyoSeId(n
a}e  Sbaei  u_ad U 'rsetCo
aSntCategoryId($co
aSntCategoryIdtgfal  y crl u ttc 
aSntCategoryId = $c 
aSntCategoryId(n
a}e  Sbaei  u_ad U 'rgetC 
aSntCategoryId(tgfal  y cr  d_r  l u ttc 
aSntCategoryId(n
a}e  Sbaei  u_ad U 'rsetEstimatedCei kThroughRatg($estimatedCei kThroughRatgtgfal  y crl u ttestimatedCei kThroughRatg = $estimatedCei kThroughRatg(n
a}e  Sbaei  u_ad U 'rgetEstimatedCei kThroughRatg(tgfal  y cr  d_r  l u ttestimatedCei kThroughRatg(n
a}e  Sbaei  u_ad U 'rsetEstimatedConIr
sir Ratg($estimatedConIr
sir Ratgtgfal  y crl u ttestimatedConIr
sir Ratg = $estimatedConIr
sir Ratg(n
a}e  Sbaei  u_ad U 'rgetEstimatedConIr
sir Ratg(tgfal  y cr  d_r  l u ttestimatedConIr
sir Ratg(n
a}e  Sbaei  u_ad U 'rsetId($idtgfal  y crl u ttid Satid(n
a}e  Sbaei  u_ad U 'rgetId(tgfal  y cr  d_r  l u ttid(n
a}e  Sbaei  u_ad U 'rsetInPlaa($inPlaatgfal  y crl u ttinPlaa SatinPlaa(n
a}e  Sbaei  u_ad U 'rgetInPlaa(tgfal  y cr  d_r  l u ttinPlaa(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetLastModifiedInfo(eeeu e_Mett g  (_in  Iriooi LastModifiedInfoa$lastModifiedInfotgfal  y crl u ttlastModifiedInfo SatlastModifiedInfo(n
a}e  Sbaei  u_ad U 'rgetLastModifiedInfo(tgfal  y cr  d_r  l u ttlastModifiedInfo(n
a}e  Sbaei  u_ad U 'rsetNDI ($ietgtgfal  y crl u ttietg(= $ietg(n
a}e  Sbaei  u_ad U 'rgetNDI (tgfal  y cr  d_r  l u ttietg(n
a}e  Sbaei  u_ad U 'rsetNegotiasatnChannelId($negotiasatnChannelIdtgfal  y crl u ttiegotiasatnChannelId(= $iegotiasatnChannelId(n
a}e  Sbaei  u_ad U 'rgetNegotiasatnChannelId(tgfal  y cr  d_r  l u ttiegotiasatnChannelId(n
a}e  Sbaei  u_ad U 'rsetOrdSeId($ordSeIdtgfal  y crl u ttordSeId(= $ordSeId(n
a}e  Sbaei  u_ad U 'rgetOrdSeId(tgfal  y cr  d_r  l u ttordSeId(n
a}e  Sbaei  u_ad U 'rsetPlacemSntStrategyar($placemSntStrategyartgfal  y crl u ttplacemSntStrategyar SatplacemSntStrategyar(n
a}e  Sbaei  u_ad U 'rgetPlacemSntStrategyar(tgfal  y cr  d_r  l u ttplacemSntStrategyar(n
a}e  Sbaei  u_ad U 'rsetProcing(eeeu e_Mett g  (_in  Iriooi Procinga$procingtgfal  y crl u ttprocinga=a$procing(n
a}e  Sbaei  u_ad U 'rgetProcing(tgfal  y cr  d_r  l u ttprocing(n
a}e  Sbaei  u_ad U 'rsetPryjeFiId($SnyjeFiIdtgfal  y crl u ttpryjeFiIda=a$pryjeFiId(n
a}e  Sbaei  u_ad U 'rgetPryjeFiId(tgfal  y cr  d_r  l u ttpryjeFiId(n
a}e  Sbaei  u_ad U 'rsetRfpar($rfpartgfal  y crl u ttrfpar Satrfpar(n
a}e  Sbaei  u_ad U 'rgetRfpar(tgfal  y cr  d_r  l u ttrfpar(n
a}e  Sbaei  u_ad U 'rsetSiteId($siteIdtgfal  y crl u tttiteId(= $siteId(n
a}e  Sbaei  u_ad U 'rgetSitear(tgfal  y cr  d_r  l u ttsiteId(n
a}e  Sbaei  u_ad U 'rsetSubaccou har($ ubaccou hartgfal  y crl u tttubaccou harg= $ ubaccou har(n
a}e  Sbaei  u_ad U 'rgetSubaccou har(tgfal  y cr  d_r  l ustttubaccou har(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi Inv  horyItemsListResponsCa(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'inv  horyItems'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSnyteFieta$i
v  horyItemsTyp d  'eeeu e_Mett g  (_in  Iriooi Inv  horyItem'(n
aSnyteFieta$i
v  horyItemsDataTyp d  'eal I'(n
aSbaei  $kind(n
aSbaei  $i(_SP p Tokee(n
e  Sbaei  u_ad U 'rsetInv  horyItems($i
v  horyItemstgfal  y crl u ttinv  horyItems Satinv  horyItems(n
a}e  Sbaei  u_ad U 'rgetInv  horyItems(tgfal  y cr  d_r  l u ttinv  horyItems(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetN(_SP p Tokee($i(_SP p Tokeetgfal  y crl u tti(_SP p Tokee(= $i(_SP p Tokee(n
a}e  Sbaei  u_ad U 'rgetN(_SP p Tokee(tgfal  y cr  d_r  l u tti(_SP p Tokee(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi Keyan
"CTargetooiExpressir a(_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $expressir (n
e  Sbaei  u_ad U 'rsetExpressir ($expressir tgfal  y crl u ttexpressir  = $expressir (n
a}e  Sbaei  u_ad U 'rgetExpressir (tgfal  y cr  d_r  l u ttexpressir (n
a}e}     _a eeeu e_Mett g  (_in  Iriooi LandooiP p a(_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $default(n
aSbaei  $id(n
aSbaei  $kind(n
aSbaei  $iatg(n
aSbaei  $url(n
e  Sbaei  u_ad U 'rsetDefault($defaulttgfal  y crl u ttdefault = $default(n
a}e  Sbaei  u_ad U 'rgetDefault(tgfal  y cr  d_r  l u ttdefault(n
a}e  Sbaei  u_ad U 'rsetId($idtgfal  y crl u ttid Satid(n
a}e  Sbaei  u_ad U 'rgetId(tgfal  y cr  d_r  l u ttid(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetNDI ($ietgtgfal  y crl u ttietg(= $ietg(n
a}e  Sbaei  u_ad U 'rgetNDI (tgfal  y cr  d_r  l u ttietg(n
a}e  Sbaei  u_ad U 'rsetUrl($urltgfal  y crl u tturl Saturl(n
a}e  Sbaei  u_ad U 'rgetUrl(tgfal  y cr  d_r  l u tturl(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi LandooiP p sListResponsCa(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'landooiP p s'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $kind(n
aSnyteFieta$landooiP p sTyp d  'eeeu e_Mett g  (_in  Iriooi LandooiP p ';  y
nyteFieta$landooiP p sDataTyp d  'eal I'(n
e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetLandooiP p s($landooiP p stgfal  y crl u ttlandooiP p s SatlandooiP p s(n
a}e  Sbaei  u_ad U 'rgetLandooiP p s(tgfal  y cr  d_r  l u ttlandooiP p s(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi LastModifiedInfo (_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $tim (n
e  Sbaei  u_ad U 'rsetTiI ($tim tgfal  y crl u tttim  Sattim (n
a}e  Sbaei  u_ad U 'rgetTiI (tgfal  y cr  d_r  l u tttim (n
a}e}     _a eeeu e_Mett g  (_in  Iriooi ListPopulasatnClausCa(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'aSems'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSnyteFieta$aSemsTyp d  'eeeu e_Mett g  (_in  Iriooi ListPopulasatnTSem'(n
aSnyteFieta$aSemsDataTyp d  'eal I'(n
e  Sbaei  u_ad U 'rsetTSems($aSemstgfal  y crl u tttSems SattSems(n
a}e  Sbaei  u_ad U 'rgetTSems(tgfal  y cr  d_r  l u tttSems(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi ListPopulasatnRulCa(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'listPopulasatnClausCs'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $floodlighhAc UvinyId(n
aSbaei  $floodlighhAc UvinyNatg(n
aSnyteFieta$listPopulasatnClausCsTyp d  'eeeu e_Mett g  (_in  Iriooi ListPopulasatnClausC';  y
nyteFieta$listPopulasatnClausCsDataTyp d  'eal I'(n
e  Sbaei  u_ad U 'rsetFloodlighhAc UvinyId($floodlighhAc UvinyIdtgfal  y crl u ttfloodlighhAc UvinyId SatfloodlighhAc UvinyId(n
a}e  Sbaei  u_ad U 'rgetFloodlighhAc UvinyId(tgfal  y cr  d_r  l u ttfloodlighhAc UvinyId(n
a}e  Sbaei  u_ad U 'rsetFloodlighhAc UvinyNDI ($floodlighhAc UvinyNatgtgfal  y crl u ttfloodlighhAc UvinyNatg(= $floodlighhAc UvinyNetg(n
a}e  Sbaei  u_ad U 'rgetFloodlighhAc UvinyNDI (tgfal  y cr  d_r  l u ttfloodlighhAc UvinyNetg(n
a}e  Sbaei  u_ad U 'rsetListPopulasatnClausCs($listPopulasatnClausCstgfal  y crl u ttlistPopulasatnClausCs SatlistPopulasatnClausCs(n
a}e  Sbaei  u_ad U 'rgetListPopulasatnClausCs(tgfal  y cr  d_r  l u ttlistPopulasatnClausCs(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi ListPopulasatnTSem (_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $c 
aains(n
aSbaei  $iegasatn(n
aSbaei  $operahor(n
aSbaei  $remarketooiListId(n
aSbaei  $typ (n
aSbaei  $vn
"C(n
aSbaei  $vnriableFriatalyNatg(n
aSbaei  $vnriableNatg(n
e  Sbaei  u_ad U 'rsetC 
aains($c 
aainstgfal  y crl u ttc 
aains = $c 
aains(n
a}e  Sbaei  u_ad U 'rgetC 
aains(tgfal  y cr  d_r  l u ttc 
aains(n
a}e  Sbaei  u_ad U 'rsetNegasatn($iegasatntgfal  y crl u tti(gasatn Satiegasatn(n
a}e  Sbaei  u_ad U 'rgetN(gasatn(tgfal  y cr  d_r  l u ttiegasatn(n
a}e  Sbaei  u_ad U 'rsetOperahor($operahortgfal  y crl u ttoperahor Satoperahor(n
a}e  Sbaei  u_ad U 'rgetOperahor(tgfal  y cr  d_r  l u ttoperahor(n
a}e  Sbaei  u_ad U 'rsetRemarketooiListId($remarketooiListIdtgfal  y crl u ttremarketooiListId SatremarketooiListId(n
a}e  Sbaei  u_ad U 'rgetRemarketooiListId(tgfal  y cr  d_r  l u ttremarketooiListId(n
a}e  Sbaei  u_ad U 'rsetTyp ($typ tgfal  y crl u tttyp a=a$typ (n
a}e  Sbaei  u_ad U 'rgetTyp (tgfal  y cr  d_r  l u tttyp (n
a}e  Sbaei  u_ad U 'rsetan
"C($vn
"Ctgfal  y crl u ttvn
"Ca=a$vn
"C(n
a}e  Sbaei  u_ad U 'rgetan
"C(tgfal  y cr  d_r  l u ttvn
"C(n
a}e  Sbaei  u_ad U 'rsetanriableFriatalyNatg($vnriableFriatalyNatgtgfal  y crl u ttvnriableFriatalyNatga=a$vnriableFriatalyNatg(n
a}e  Sbaei  u_ad U 'rgetanriableFriatalyNatg(tgfal  y cr  d_r  l u ttvnriableFriatalyNatg(n
a}e  Sbaei  u_ad U 'rsetanriableNatg($vnriableNatgtgfal  y crl u ttvnriableNatga=a$vnriableNatg(n
a}e  Sbaei  u_ad U 'rgetanriableNatg(tgfal  y cr  d_r  l u ttvnriableNatg(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi ListTargetooiExpressir a(_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $expressir (n
e  Sbaei  u_ad U 'rsetExpressir ($expressir tgfal  y crl u ttexpressir  = $expressir (n
a}e  Sbaei  u_ad U 'rgetExpressir (tgfal  y cr  d_r  l u ttexpressir (n
a}e}     _a eeeu e_Mett g  (_in  Iriooi LookbackConfigurasatn (_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $cei kDurasatn(n
aSbaei  $postImpressir Ac UvinoesDurasatn(n
e  Sbaei  u_ad U 'rsetCei kDurasatn($cei kDurasatntgfal  y crl u ttcei kDurasatn = $cei kDurasatn(n
a}e  Sbaei  u_ad U 'rgetCei kDurasatn(tgfal  y cr  d_r  l u ttcei kDurasatn(n
a}e  Sbaei  u_ad U 'rsetPostImpressir Ac UvinoesDurasatn($postImpressir Ac UvinoesDurasatntgfal  y crl u ttpostImpressir Ac UvinoesDurasatn = $postImpressir Ac UvinoesDurasatn(n
a}e  Sbaei  u_ad U 'rgetPostImpressir Ac UvinoesDurasatn(tgfal  y cr  d_r  l u ttpostImpressir Ac UvinoesDurasatn(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi Metroc (_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $kind(n
aSbaei  $iatg(n
e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetNDI ($ietgtgfal  y crl u ttietg(= $ietg(n
a}e  Sbaei  u_ad U 'rgetNDI (tgfal  y cr  d_r  l u ttietg(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi Metro (_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $c untryCode(n
aSbaei  $c untryDartId(n
aSbaei  $dartId(n
aSbaei  $dmaId(n
aSbaei  $kind(n
aSbaei  $metroCode(n
aSbaei  $iatg(n
e  Sbaei  u_ad U 'rsetC untryCode($c untryCodetgfal  y crl u ttc untryCode = $c untryCode(n
a}e  Sbaei  u_ad U 'rgetC untryCode(tgfal  y cr  d_r  l u ttc untryCode(n
a}e  Sbaei  u_ad U 'rsetC untryDartId($c untryDartIdtgfal  y crl u ttc untryDartId = $c untryDartId(n
a}e  Sbaei  u_ad U 'rgetC untryDartId(tgfal  y cr  d_r  l u ttc untryDartId(n
a}e  Sbaei  u_ad U 'rsetDartId($dartIdtgfal  y crl u ttdartId = $dartId(n
a}e  Sbaei  u_ad U 'rgetDartId(tgfal  y cr  d_r  l u ttdartId(n
a}e  Sbaei  u_ad U 'rsetDmaId($dmaIdtgfal  y crl u ttdmaId = $dmaId(n
a}e  Sbaei  u_ad U 'rgetDmaId(tgfal  y cr  d_r  l u ttdmaId(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetMetroCode($metroCodetgfal  y crl u ttmetroCode SatmetroCode(n
a}e  Sbaei  u_ad U 'rgetMetroCode(tgfal  y cr  d_r  l u ttmetroCode(n
a}e  Sbaei  u_ad U 'rsetNDI ($ietgtgfal  y crl u ttietg(= $ietg(n
a}e  Sbaei  u_ad U 'rgetNDI (tgfal  y cr  d_r  l u ttietg(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi MetrosListResponsCa(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'metros'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $kind(n
aSnyteFieta$metrosTyp d  'eeeu e_Mett g  (_in  Iriooi Metro'(n
aSnyteFieta$metrosDataTyp d  'eal I'(n
e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetMetros($metrostgfal  y crl u ttmetros Satmetros(n
a}e  Sbaei  u_ad U 'rgetMetros(tgfal  y cr  d_r  l u ttmetros(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi MobileCealier (_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $c untryCode(n
aSbaei  $c untryDartId(n
aSbaei  $id(n
aSbaei  $kind(n
aSbaei  $iatg(n
e  Sbaei  u_ad U 'rsetC untryCode($c untryCodetgfal  y crl u ttc untryCode = $c untryCode(n
a}e  Sbaei  u_ad U 'rgetC untryCode(tgfal  y cr  d_r  l u ttc untryCode(n
a}e  Sbaei  u_ad U 'rsetC untryDartId($c untryDartIdtgfal  y crl u ttc untryDartId = $c untryDartId(n
a}e  Sbaei  u_ad U 'rgetC untryDartId(tgfal  y cr  d_r  l u ttc untryDartId(n
a}e  Sbaei  u_ad U 'rsetId($idtgfal  y crl u ttid Satid(n
a}e  Sbaei  u_ad U 'rgetId(tgfal  y cr  d_r  l u ttid(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetNDI ($ietgtgfal  y crl u ttietg(= $ietg(n
a}e  Sbaei  u_ad U 'rgetNDI (tgfal  y cr  d_r  l u ttietg(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi MobileCealiersListResponsCa(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'mobileCealiers'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $kind(n
aSnyteFieta$mobileCealiersTyp d  'eeeu e_Mett g  (_in  Iriooi MobileCealier'(n
aSnyteFieta$mobileCealiersDataTyp d  'eal I'(n
e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetMobileCealiers($mobileCealierstgfal  y crl u ttmobileCealiers SatmobileCealiers(n
a}e  Sbaei  u_ad U 'rgetMobileCealiers(tgfal  y cr  d_r  l u ttmobileCealiers(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi ObjeFiFilaSea(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'objeFiIds'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $kind(n
aSbaei  $objeFiIds(n
aSbaei  $status(n
e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetObjeFiIds($objeFiIdstgfal  y crl u ttobjeFiIds SatobjeFiIds(n
a}e  Sbaei  u_ad U 'rgetObjeFiIds(tgfal  y cr  d_r  l u ttobjeFiIds(n
a}e  Sbaei  u_ad U 'rsetStatus($statustgfal  y crl u ttstatus Satstatus(n
a}e  Sbaei  u_ad U 'rgetStatus(tgfal  y cr  d_r  l u ttstatus(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi OffsetPosi U ' (_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $left(n
aSbaei  $top(n
e  Sbaei  u_ad U 'rsetLeft($lefttgfal  y crl u ttleft Satleft(n
a}e  Sbaei  u_ad U 'rgetLeft(tgfal  y cr  d_r  l u ttleft(n
a}e  Sbaei  u_ad U 'rsetTop($toptgfal  y crl u tttop = $top(n
a}e  Sbaei  u_ad U 'rgetTop(tgfal  y cr  d_r  l ustttop(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi Omni d_eSettooi  (_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $omni d_eCostDataEtabled(n
aSbaei  $omni d_eI
aSgrasatnEtabled(n
e  Sbaei  u_ad U 'rsetOmni d_eCostDataEtabled($omni d_eCostDataEtabledtgfal  y crl u ttomni d_eCostDataEtabled Satomni d_eCostDataEtabled(n
a}e  Sbaei  u_ad U 'rgetOmni d_eCostDataEtabled(tgfal  y cr  d_r  l u ttomni d_eCostDataEtabled(n
a}e  Sbaei  u_ad U 'rsetOmni d_eI
aSgrasatnEtabled($omni d_eI
aSgrasatnEtabledtgfal  y crl u ttomni d_eI
aSgrasatnEtabled Satomni d_eI
aSgrasatnEtabled(n
a}e  Sbaei  u_ad U 'rgetOmni d_eI
aSgrasatnEtabled(tgfal  y cr  d_r  l u ttomni d_eI
aSgrasatnEtabled(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi OperahooiSystema(_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $dartId(n
aSbaei  $desktop(n
aSbaei  $kind(n
aSbaei  $mobile(n
aSbaei  $iatg(n
e  Sbaei  u_ad U 'rsetDartId($dartIdtgfal  y crl u ttdartId = $dartId(n
a}e  Sbaei  u_ad U 'rgetDartId(tgfal  y cr  d_r  l u ttdartId(n
a}e  Sbaei  u_ad U 'rsetDesktop($desktoptgfal  y crl u ttdesktop = $desktop(n
a}e  Sbaei  u_ad U 'rgetDesktop(tgfal  y cr  d_r  l u ttdesktop(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetMobile($mobiletgfal  y crl u ttmobile Satmobile(n
a}e  Sbaei  u_ad U 'rgetMobile(tgfal  y cr  d_r  l u ttmobile(n
a}e  Sbaei  u_ad U 'rsetNDI ($ietgtgfal  y crl u ttietg(= $ietg(n
a}e  Sbaei  u_ad U 'rgetNDI (tgfal  y cr  d_r  l u ttietg(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi OperahooiSystemVr
sir a(_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $id(n
aSbaei  $kind(n
aSbaei  $majorVr
sir (n
aSbaei  $minorVr
sir (n
aSbaei  $ietg(n
a
nyteFieta$operahooiSystemTyp d  'eeeu e_Mett g  (_in  Iriooi OperahooiSystem'(n
aSnyteFieta$operahooiSystemDataTyp d  ''(n
e  Sbaei  u_ad U 'rsetId($idtgfal  y crl u ttid Satid(n
a}e  Sbaei  u_ad U 'rgetId(tgfal  y cr  d_r  l u ttid(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetMajorVr
sir ($majorVr
sir tgfal  y crl u ttmajorVr
sir  SatmajorVr
sir (n
a}e  Sbaei  u_ad U 'rgetMajorVr
sir (tgfal  y cr  d_r  l u ttmajorVr
sir (n
a}e  Sbaei  u_ad U 'rsetMinorVr
sir ($minorVr
sir tgfal  y crl u ttminorVr
sir  SatminorVr
sir (n
a}e  Sbaei  u_ad U 'rgetMinorVr
sir (tgfal  y cr  d_r  l u ttminorVr
sir (n
a}e  Sbaei  u_ad U 'rsetNDI ($ietgtgfal  y crl u ttietg(= $ietg(n
a}e  Sbaei  u_ad U 'rgetNDI (tgfal  y cr  d_r  l u ttietg(n
a}e  Sbaei  u_ad U 'rsetOperahooiSystem(eeeu e_Mett g  (_in  Iriooi OperahooiSystema$operahooiSystemtgfal  y crl u ttoperahooiSystema=a$operahooiSystem(n
a}e  Sbaei  u_ad U 'rgetOperahooiSystem(tgfal  y cr  d_r  l u ttoperahooiSystem(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi OperahooiSystemVr
sir sListResponsCa(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'operahooiSystemVr
sir s'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $kind(n
aSnyteFieta$operahooiSystemVr
sir sTyp d  'eeeu e_Mett g  (_in  Iriooi OperahooiSystemVr
sir '(n
aSnyteFieta$operahooiSystemVr
sir sDataTyp d  'eal I'(n
e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetOperahooiSystemVr
sir s($operahooiSystemVr
sir stgfal  y crl u ttoperahooiSystemVr
sir sa=a$operahooiSystemVr
sir s(n
a}e  Sbaei  u_ad U 'rgetOperahooiSystemVr
sir s(tgfal  y cr  d_r  l u ttoperahooiSystemVr
sir s(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi OperahooiSystemsListResponsCa(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'operahooiSystems'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $kind(n
aSnyteFieta$operahooiSystemsTyp d  'eeeu e_Mett g  (_in  Iriooi OperahooiSystem'(n
aSnyteFieta$operahooiSystemsDataTyp d  'eal I'(n
e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetOperahooiSystems($operahooiSystemstgfal  y crl u ttoperahooiSystemsa=a$operahooiSystems(n
a}e  Sbaei  u_ad U 'rgetOperahooiSystems(tgfal  y cr  d_r  l u ttoperahooiSystems(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi Optimiza U 'Ac Uvinya(_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $floodlighhAc UvinyId(n
aSnyteFieta$floodlighhAc UvinyIdDi   sir an
"CTyp d  'eeeu e_Mett g  (_in  Iriooi Di   sir an
"C';  y
nyteFieta$floodlighhAc UvinyIdDi   sir an
"CDataTyp d  ''(n
aSbaei  $weighh(n
e  Sbaei  u_ad U 'rsetFloodlighhAc UvinyId($floodlighhAc UvinyIdtgfal  y crl u ttfloodlighhAc UvinyId SatfloodlighhAc UvinyId(n
a}e  Sbaei  u_ad U 'rgetFloodlighhAc UvinyId(tgfal  y cr  d_r  l u ttfloodlighhAc UvinyId(n
a}e  Sbaei  u_ad U 'rsetFloodlighhAc UvinyIdDi   sir an
"C(eeeu e_Mett g  (_in  Iriooi Di   sir an
"Ca$floodlighhAc UvinyIdDi   sir an
"Ctgfal  y crl u ttfloodlighhAc UvinyIdDi   sir an
"CaSatfloodlighhAc UvinyIdDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rgetFloodlighhAc UvinyIdDi   sir an
"C(tgfal  y cr  d_r  l u ttfloodlighhAc UvinyIdDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rsetWeighh($weighhtgfal  y crl u ttweighh = $weighh(n
a}e  Sbaei  u_ad U 'rgetWeighh(tgfal  y cr  d_r  l usttweighh(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi OrdSea(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'siteNDI s'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $accou har(n
aSbaei  $adIr
nyoSeId(n
aSbaei  $apSnyIr
UserProfileIds(n
aSbaei  $buySeInvo g Id(n
aSbaei  $buySeOrganiza U 'Netg(n
a
baei  $commSnts(n
aSnyteFieta$c 
aactsTyp d  'eeeu e_Mett g  (_in  Iriooi OrdSeC 
aact'(n
aSnyteFieta$c 
aactsDataTyp d  'eal I'(n
aSbaei  $id(n
aSbaei  $kind(n
aSnyteFieta$lastModifiedInfoTyp d  'eeeu e_Mett g  (_in  Iriooi LastModifiedInfo';  y
nyteFieta$lastModifiedInfoDataTyp d  ''(n
aSbaei  $natg(n
aSbaei  $nytes(n
aSbaei  $plannooiTSemId(n
aSbaei  $pnyjeFiId(n
aSbaei  $sedltrOrdSeId(n
aSbaei  $sedltrOrganiza U 'Netg(n
a
baei  $siteId(n
aSbaei  $siteNDI s(n
aSbaei  $subaccou har(n
aSbaei  $tSemsAndCondi U 's(n
e  Sbaei  u_ad U 'rsetAccou har($accou hartgfal  y crl u ttaccou harg= $accou hId(n
a}e  Sbaei  u_ad U 'rgetAccou hId(tgfal  y cr  d_r  l u ttaccou hId(n
a}e  Sbaei  u_ad U 'rsetAdIr
nyoSeId($adIr
nyoSeIdtgfal  y crl u ttadvr
nyoSearg= $a Ir
nyoSeId(n
a}e  Sbaei  u_ad U 'rgetA Ir
nyoSear(tgfal  y cr  d_r  l u tta Ir
nyoSeId(n
a}e  Sbaei  u_ad U 'rsetApSnyIr
UserProfileIds($apSnyIr
UserProfileIdstgfal  y crl u ttapSnyIr
UserProfileIdsg= $apSnyIr
UserProfileIds(n
a}e  Sbaei  u_ad U 'rgetApSnyIr
UserProfileIds(tgfal  y cr  d_r  l u ttapSnyIr
UserProfileIds(n
a}e  Sbaei  u_ad U 'rsetBuySeInvo g Id($buySeInvo g Idtgfal  y crl u ttbuySeInvo g Idg= $buySeInvo g Id(n
a}e  Sbaei  u_ad U 'rgetBuySeInvo g Id(tgfal  y cr  d_r  l u ttbuySeInvo g Id(n
a}e  Sbaei  u_ad U 'rsetBuySeOrganiza U 'Netg($buySeOrganiza U 'Netgtgfal  y crl u ttbuySeOrganiza U 'Netgg= $buySeOrganiza U 'Netg(n
a}e  Sbaei  u_ad U 'rgetBuySeOrganiza U 'Netg(tgfal  y cr  d_r  l u ttbuySeOrganiza U 'Netg(n
a}e  Sbaei  u_ad U 'rsetC mmSnts($commSntstgfal  y crl u ttcommSntsg= $commSnts(n
a}e  Sbaei  u_ad U 'rgetC mmSnts(tgfal  y cr  d_r  l u ttcommSnts(n
a}e  Sbaei  u_ad U 'rsetC 
aacts($c 
aactstgfal  y crl u ttco
aactsg= $co
aacts(n
a}e  Sbaei  u_ad U 'rgetC 
aacts(tgfal  y cr  d_r  l u ttco
aacts(n
a}e  Sbaei  u_ad U 'rsetId($idtgfal  y crl u ttid Satid(n
a}e  Sbaei  u_ad U 'rgetId(tgfal  y cr  d_r  l u ttid(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetLastModifiedInfo(eeeu e_Mett g  (_in  Iriooi LastModifiedInfoa$lastModifiedInfotgfal  y crl u ttlastModifiedInfo SatlastModifiedInfo(n
a}e  Sbaei  u_ad U 'rgetLastModifiedInfo(tgfal  y cr  d_r  l u ttlastModifiedInfo(n
a}e  Sbaei  u_ad U 'rsetNDI ($ietgtgfal  y crl u ttietg(= $ietg(n
a}e  Sbaei  u_ad U 'rgetNDI (tgfal  y cr  d_r  l u ttietg(n
a}e  Sbaei  u_ad U 'rsetNytes($nytestgfal  y crl u ttiytes(= $iytes(n
a}e  Sbaei  u_ad U 'rgetNytes(tgfal  y cr  d_r  l u ttiytes(n
a}e  Sbaei  u_ad U 'rsetPlannooiTSemId($plannooiTSemIdtgfal  y crl u ttplannooiTSemId(= $plannooiTSemId(n
a}e  Sbaei  u_ad U 'rgetPlannooiTSemId(tgfal  y cr  d_r  l u ttplannooiTSemId(n
a}e  Sbaei  u_ad U 'rsetPryjeFiId($SnyjeFiIdtgfal  y crl u ttpryjeFiIda=a$pryjeFiId(n
a}e  Sbaei  u_ad U 'rgetPryjeFiId(tgfal  y cr  d_r  l u ttpryjeFiId(n
a}e  Sbaei  u_ad U 'rsetSedltrOrdSeId($sedltrOrdSeIdtgfal  y crl u ttsedltrOrdSeIda=a$sedltrOrdSeId(n
a}e  Sbaei  u_ad U 'rgetSedltrOrdSeId(tgfal  y cr  d_r  l u ttsedltrOrdSeId(n
a}e  Sbaei  u_ad U 'rsetSedltrOrganiza U 'Netg($sedltrOrganiza U 'Netgtgfal  y crl u ttsedltrOrganiza U 'Netgg= $sedltrOrganiza U 'Netg(n
a}e  Sbaei  u_ad U 'rgetSedltrOrganiza U 'Netg(tgfal  y cr  d_r  l u ttsedltrOrganiza U 'Netg(n
a}e  Sbaei  u_ad U 'rsetSiteId($siteIdtgfal  y crl u tttiteId(= $siteId(n
a}e  Sbaei  u_ad U 'rgetSitear(tgfal  y cr  d_r  l u ttsiteId(n
a}e  Sbaei  u_ad U 'rsetSiteNDI s($siteNDI stgfal  y crl u tttiteNDI s(= $siteNDI s(n
a}e  Sbaei  u_ad U 'rgetSiteNDI s(tgfal  y cr  d_r  l u ttsiteNDI s(n
a}e  Sbaei  u_ad U 'rsetSubaccou har($ ubaccou hartgfal  y crl u tttubaccou harg= $ ubaccou har(n
a}e  Sbaei  u_ad U 'rgetSubaccou har(tgfal  y cr  d_r  l ustttubaccou har(n
a}e  Sbaei  u_ad U 'rsetTSemsAndCondi U 's($tSemsAndCondi U 'stgfal  y crl u tttSemsAndCondi U 'sg= $tSemsAndCondi U 's(n
a}e  Sbaei  u_ad U 'rgetTSemsAndCondi U 's(tgfal  y cr  d_r  l ustttSemsAndCondi U 's(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi OrdSeC 
aacta(_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $co
aactInfo(n
aSbaei  $co
aactNetg(n
a
baei  $co
aactTitlg(n
a
baei  $co
aactTyp (n
aSbaei  $sigie d_eUserProfileId(n
e  Sbaei  u_ad U 'rsetC 
aactInfo($co
aactInfotgfal  y crl u ttco
aactInfo Satco
aactInfo(n
a}e  Sbaei  u_ad U 'rgetC 
aactInfo(tgfal  y cr  d_r  l u ttco
aactInfo(n
a}e  Sbaei  u_ad U 'rsetC 
aactNetg($co
aactNetgtgfal  y crl u ttco
aactNetgg= $co
aactNetg(n
a}e  Sbaei  u_ad U 'rgetC 
aactNetg(tgfal  y cr  d_r  l u ttco
aactNetg(n
a}e  Sbaei  u_ad U 'rsetC 
aactTitlg($co
aactTitlgtgfal  y crl u ttco
aactTitlgg= $co
aactTitlg(n
a}e  Sbaei  u_ad U 'rgetC 
aactTitlg(tgfal  y cr  d_r  l u ttco
aactTitlg(n
a}e  Sbaei  u_ad U 'rsetC 
aactTyp ($co
aactTyp tgfal  y crl u ttco
aactTyp a=a$co
aactTyp (n
a}e  Sbaei  u_ad U 'rgetC 
aactTyp (tgfal  y cr  d_r  l u ttco
aactTyp (n
a}e  Sbaei  u_ad U 'rsetSigie d_eUserProfileId($sigie d_eUserProfileIdtgfal  y crl u tttigie d_eUserProfileId(= $sigie d_eUserProfileId(n
a}e  Sbaei  u_ad U 'rgetSigie d_eUserProfileId(tgfal  y cr  d_r  l u ttsigie d_eUserProfileId(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi OrdSeDocumSnta(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'apSnyIrdByUserProfileIds'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $accou har(n
aSbaei  $adIr
nyoSeId(n
aSbaei  $amSndedOrdSeDocumSntId(n
aSbaei  $apSnyIrdByUserProfileIds(n
a
baei  $cancedltd(n
aSnyteFieta$createdInfoTyp d  'eeeu e_Mett g  (_in  Iriooi LastModifiedInfo';  y
nyteFieta$createdInfoDataTyp d  ''(n
aSbaei  $efft   vCDat (n
aSbaei  $id(n
aSbaei  $kind(n
aSbaei  $ordSeId(n
aSbaei  $pnyjeFiId(n
aSbaei  $sigied(n
aSbaei  $subaccou har(n
aSbaei  $titlg(n
a
baei  $typ (n
e  Sbaei  u_ad U 'rsetAccou har($accou hartgfal  y crl u ttaccou harg= $accou hId(n
a}e  Sbaei  u_ad U 'rgetAccou hId(tgfal  y cr  d_r  l u ttaccou hId(n
a}e  Sbaei  u_ad U 'rsetAdIr
nyoSeId($adIr
nyoSeIdtgfal  y crl u ttadvr
nyoSearg= $a Ir
nyoSeId(n
a}e  Sbaei  u_ad U 'rgetA Ir
nyoSear(tgfal  y cr  d_r  l u tta Ir
nyoSeId(n
a}e  Sbaei  u_ad U 'rsetAmSndedOrdSeDocumSntId($amSndedOrdSeDocumSntIdtgfal  y crl u ttamSndedOrdSeDocumSntIdg= $amSndedOrdSeDocumSntId(n
a}e  Sbaei  u_ad U 'rgetAmSndedOrdSeDocumSntId(tgfal  y cr  d_r  l u ttamSndedOrdSeDocumSntId(n
a}e  Sbaei  u_ad U 'rsetApSnyIrdByUserProfileIds($apSnyIrdByUserProfileIdstgfal  y crl u ttapSnyIrdByUserProfileIdsg= $apSnyIrdByUserProfileIds(n
a}e  Sbaei  u_ad U 'rgetApSnyIrdByUserProfileIds(tgfal  y cr  d_r  l u ttapSnyIrdByUserProfileIds(n
a}e  Sbaei  u_ad U 'rsetCancedltd($cancedltdtgfal  y crl u ttcancedltda=a$cancedltd(n
a}e  Sbaei  u_ad U 'rgetCancedltd(tgfal  y cr  d_r  l u ttcancedltd(n
a}e  Sbaei  u_ad U 'rsetCreatedInfo(eeeu e_Mett g  (_in  Iriooi LastModifiedInfoa$createdInfotgfal  y crl u ttcreatedInfoa=a$createdInfo(n
a}e  Sbaei  u_ad U 'rgetCreatedInfo(tgfal  y cr  d_r  l u ttcreatedInfo(n
a}e  Sbaei  u_ad U 'rsetEfft   vCDat ($efft   vCDat tgfal  y crl u ttefft   vCDat a=a$efft   vCDat (n
a}e  Sbaei  u_ad U 'rgetEfft   vCDat (tgfal  y cr  d_r  l u ttefft   vCDat (n
a}e  Sbaei  u_ad U 'rsetId($idtgfal  y crl u ttid Satid(n
a}e  Sbaei  u_ad U 'rgetId(tgfal  y cr  d_r  l u ttid(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetOrdSeId($ordSeIdtgfal  y crl u ttordSeId(= $ordSeId(n
a}e  Sbaei  u_ad U 'rgetOrdSeId(tgfal  y cr  d_r  l u ttordSeId(n
a}e  Sbaei  u_ad U 'rsetPryjeFiId($SnyjeFiIdtgfal  y crl u ttpryjeFiIda=a$pryjeFiId(n
a}e  Sbaei  u_ad U 'rgetPryjeFiId(tgfal  y cr  d_r  l u ttpryjeFiId(n
a}e  Sbaei  u_ad U 'rsetSigied($sigiedtgfal  y crl u tttigied(= $sigitd(n
a}e  Sbaei  u_ad U 'rgetSigied(tgfal  y cr  d_r  l u ttsigitd(n
a}e  Sbaei  u_ad U 'rsetSubaccou har($ ubaccou hartgfal  y crl u tttubaccou harg= $ ubaccou har(n
a}e  Sbaei  u_ad U 'rgetSubaccou har(tgfal  y cr  d_r  l ustttubaccou har(n
a}e  Sbaei  u_ad U 'rsetTitlg($titlgtgfal  y crl u tttitlgg= $titlg(n
a}e  Sbaei  u_ad U 'rgetTitlg(tgfal  y cr  d_r  l u tttitlg(n
a}e  Sbaei  u_ad U 'rsetTyp ($typ tgfal  y crl u tttyp a=a$typ (n
a}e  Sbaei  u_ad U 'rgetTyp (tgfal  y cr  d_r  l u tttyp (n
a}e}     _a eeeu e_Mett g  (_in  Iriooi OrdSeDocumSntsListResponsCa(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'ordSeDocumSnts'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $kind(n
aSbaei  $i(_SP p Tokee(n
aSnyteFieta$ordSeDocumSntsTyp d  'eeeu e_Mett g  (_in  Iriooi OrdSeDocumSnt'(n
aSnyteFieta$ordSeDocumSntsDataTyp d  'eal I'(n
e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetN(_SP p Tokee($i(_SP p Tokeetgfal  y crl u tti(_SP p Tokee(= $i(_SP p Tokee(n
a}e  Sbaei  u_ad U 'rgetN(_SP p Tokee(tgfal  y cr  d_r  l u tti(_SP p Tokee(n
a}e  Sbaei  u_ad U 'rsetOrdSeDocumSnts($ordSeDocumSntstgfal  y crl u ttordSeDocumSnts(= $ordSeDocumSnts(n
a}e  Sbaei  u_ad U 'rgetOrdSeDocumSnts(tgfal  y cr  d_r  l u ttordSeDocumSnts(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi OrdSesListResponsCa(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'ordSes'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $kind(n
aSbaei  $i(_SP p Tokee(n
aSnyteFieta$ordSesTyp d  'eeeu e_Mett g  (_in  Iriooi OrdSe'(n
aSnyteFieta$ordSesDataTyp d  'eal I'(n
e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetN(_SP p Tokee($i(_SP p Tokeetgfal  y crl u tti(_SP p Tokee(= $i(_SP p Tokee(n
a}e  Sbaei  u_ad U 'rgetN(_SP p Tokee(tgfal  y cr  d_r  l u tti(_SP p Tokee(n
a}e  Sbaei  u_ad U 'rsetOrdSes($ordSestgfal  y crl u ttordSes(= $ordSes(n
a}e  Sbaei  u_ad U 'rgetOrdSes(tgfal  y cr  d_r  l u ttordSes(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi PathToConIr
sir R  IriCompatibleField  (_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'pSeInaSea   _aDi   sir s'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSnyteFieta$c 
Ir
sir Di   sir sTyp d  'eeeu e_Mett g  (_in  Iriooi Di   sir '(n
aSnyteFieta$c 
Ir
sir Di   sir sDataTyp d  'eal I'(n
aSnyteFieta$customFloodlighhVnriablesTyp d  'eeeu e_Mett g  (_in  Iriooi Di   sir '(n
aSnyteFieta$customFloodlighhVnriablesDataTyp d  'eal I'(n
aSbaei  $kind(n
aSnyteFieta$metrocsTyp d  'eeeu e_Mett g  (_in  Iriooi Metroc'(n
aSnyteFieta$metrocsDataTyp d  'eal I'(n
aSnyteFieta$pSeInaSea   _aDi   sir sTyp d  'eeeu e_Mett g  (_in  Iriooi Di   sir '(n
aSnyteFieta$pSeInaSea   _aDi   sir sDataTyp d  'eal I'(n
e  Sbaei  u_ad U 'rsetC 
Ir
sir Di   sir s($c 
Ir
sir Di   sir stgfal  y crl u ttc 
Ir
sir Di   sir s =a$c 
Ir
sir Di   sir s(n
a}e  Sbaei  u_ad U 'rgetC 
Ir
sir Di   sir s(tgfal  y cr  d_r  l u ttc 
Ir
sir Di   sir s(n
a}e  Sbaei  u_ad U 'rsetCustomFloodlighhVnriables($customFloodlighhVnriablestgfal  y crl u ttcustomFloodlighhVnriables =a$customFloodlighhVnriables(n
a}e  Sbaei  u_ad U 'rgetCustomFloodlighhVnriables(tgfal  y cr  d_r  l u ttcustomFloodlighhVnriables(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetMetrocs($metrocstgfal  y crl u ttmetrocs Satmetrocs(n
a}e  Sbaei  u_ad U 'rgetMetrocs(tgfal  y cr  d_r  l u ttmetrocs(n
a}e  Sbaei  u_ad U 'rsetPSeInaSea   _aDi   sir s($pSeInaSea   _aDi   sir stgfal  y crl u ttpSeInaSea   _aDi   sir s SatpSeInaSea   _aDi   sir s(n
a}e  Sbaei  u_ad U 'rgetPSeInaSea   _aDi   sir s(tgfal  y cr  d_r  l u ttpSeInaSea   _aDi   sir s(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi PlacemSnt (_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'tagFormats'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $accou har(n
aSbaei  $adIr
nyoSeId(n
aSnyteFieta$adIr
nyoSeIdDi   sir an
"CTyp d  'eeeu e_Mett g  (_in  Iriooi Di   sir an
"C';  y
nyteFieta$adIr
nyoSeIdDi   sir an
"CDataTyp d  ''(n
aSbaei  $archived(n
aSbaei  $campaignId(n
aSnyteFieta$campaignIdDi   sir an
"CTyp d  'eeeu e_Mett g  (_in  Iriooi Di   sir an
"C';  y
nyteFieta$campaignIdDi   sir an
"CDataTyp d  ''(n
aSbaei  $commSnt(n
aSbaei  $compatibility(n
aSbaei  $conaSntCategoryId(n
a
nyteFieta$createInfoTyp d  'eeeu e_Mett g  (_in  Iriooi LastModifiedInfo';  y
nyteFieta$createInfoDataTyp d  ''(n
aSbaei  $direFiorySiteId(n
aSnyteFieta$direFiorySiteIdDi   sir an
"CTyp d  'eeeu e_Mett g  (_in  Iriooi Di   sir an
"C';  y
nyteFieta$direFiorySiteIdDi   sir an
"CDataTyp d  ''(n
aSbaei  $exaSeesear(n
aSbaei  $id(n
aSnyteFieta$idDi   sir an
"CTyp d  'eeeu e_Mett g  (_in  Iriooi Di   sir an
"C';  y
nyteFieta$idDi   sir an
"CDataTyp d  ''(n
aSbaei  $keyNetg(n
a
baei  $kind(n
aSnyteFieta$lastModifiedInfoTyp d  'eeeu e_Mett g  (_in  Iriooi LastModifiedInfo';  y
nyteFieta$lastModifiedInfoDataTyp d  ''(n
aSnyteFieta$lookbackConfigurasatnTyp d  'eeeu e_Mett g  (_in  Iriooi LookbackConfigurasatn'(n
aSnyteFieta$lookbackConfigurasatnDataTyp d  ''(n
aSbaei  $natg(n
aSbaei  $paymSntApSnyIrd(n
aSbaei  $paymSntSourcg(n
aSbaei  $placemSntGroupId(n
aSnyteFieta$placemSntGroupIdDi   sir an
"CTyp d  'eeeu e_Mett g  (_in  Iriooi Di   sir an
"C';  y
nyteFieta$placemSntGroupIdDi   sir an
"CDataTyp d  ''(n
aSbaei  $placemSntStrategyar(n
a
nyteFieta$procingSchedulCTyp d  'eeeu e_Mett g  (_in  Iriooi ProcingSchedulC';  y
nyteFieta$procingSchedulCDataTyp d  ''(n
aSbaei  $primary;  y
nyteFieta$pbaeisherUpdateInfoTyp d  'eeeu e_Mett g  (_in  Iriooi LastModifiedInfo';  y
nyteFieta$pbaeisherUpdateInfoDataTyp d  ''(n
aSbaei  $siteId(n
aSnyteFieta$siteIdDi   sir an
"CTyp d  'eeeu e_Mett g  (_in  Iriooi Di   sir an
"C';  y
nyteFieta$siteIdDi   sir an
"CDataTyp d  ''(n
aSnyteFieta$sizCTyp d  'eeeu e_Mett g  (_in  Iriooi SizC'(n
aSnyteFieta$sizCDataTyp d  ''(n
aSbaei  $sslRequired(n
aSbaei  $status(n
aSbaei  $subaccou har(n
aSbaei  $tagFormats(n
aSnyteFieta$tagSettooiTyp d  'eeeu e_Mett g  (_in  Iriooi TagSettooi'(n
aSnyteFieta$tagSettooiDataTyp d  ''(n
e  Sbaei  u_ad U 'rsetAccou har($accou hartgfal  y crl u ttaccou harg= $accou hId(n
a}e  Sbaei  u_ad U 'rgetAccou hId(tgfal  y cr  d_r  l u ttaccou hId(n
a}e  Sbaei  u_ad U 'rsetAdIr
nyoSeId($adIr
nyoSeIdtgfal  y crl u ttadvr
nyoSearg= $a Ir
nyoSeId(n
a}e  Sbaei  u_ad U 'rgetA Ir
nyoSear(tgfal  y cr  d_r  l u tta Ir
nyoSeId(n
a}e  Sbaei  u_ad U 'rsetAdIr
nyoSeIdDi   sir an
"C(eeeu e_Mett g  (_in  Iriooi Di   sir an
"Ca$adIr
nyoSeIdDi   sir an
"Ctgfal  y crl u ttadvr
nyoSearDi   sir an
"Ca=a$adIr
nyoSeIdDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rgetA Ir
nyoSearDi   sir an
"C(tgfal  y cr  d_r  l u tta Ir
nyoSeIdDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rsetArchived($archivedtgfal  y crl u ttarchiveda=a$archived(n
a}e  Sbaei  u_ad U 'rgetArchived(tgfal  y cr  d_r  l u ttarchived(n
a}e  Sbaei  u_ad U 'rsetCampaignId($campaignIdtgfal  y crl u ttcampaignId = $campaignId(n
a}e  Sbaei  u_ad U 'rgetCampaignId(tgfal  y cr  d_r  l u ttcampaignId(n
a}e  Sbaei  u_ad U 'rsetCampaignIdDi   sir an
"C(eeeu e_Mett g  (_in  Iriooi Di   sir an
"Ca$campaignIdDi   sir an
"Ctgfal  y crl u ttcampaignIdDi   sir an
"Ca=a$campaignIdDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rgetCampaignIdDi   sir an
"C(tgfal  y cr  d_r  l u ttcampaignIdDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rsetC mmSnt($commSnttgfal  y crl u ttc mmSnta=a$commSnt(n
a}e  Sbaei  u_ad U 'rgetC mmSnt(tgfal  y cr  d_r  l u ttc mmSnt(n
a}e  Sbaei  u_ad U 'rsetC mpatibility($compatibilitytgfal  y crl u ttc mpatibilitya=a$compatibility(n
a}e  Sbaei  u_ad U 'rgetC mpatibility(tgfal  y cr  d_r  l u ttc mpatibility(n
a}e  Sbaei  u_ad U 'rsetC 
aSntCategoryId($conaSntCategoryIdtgfal  y crl u ttc 
aSntCategoryIda=a$conaSntCategoryId(n
a}e  Sbaei  u_ad U 'rgetC 
aSntCategoryId(tgfal  y cr  d_r  l u ttc 
aSntCategoryId(n
a}e  Sbaei  u_ad U 'rsetCreateInfo(eeeu e_Mett g  (_in  Iriooi LastModifiedInfoa$createInfotgfal  y crl u ttcreateInfoa=a$createInfo(n
a}e  Sbaei  u_ad U 'rgetCreateInfo(tgfal  y cr  d_r  l u ttcreateInfo(n
a}e  Sbaei  u_ad U 'rsetDireFiorySiteId($direFiorySiteIdtgfal  y crl u ttdireFiorySiteIda=a$direFiorySiteId(n
a}e  Sbaei  u_ad U 'rgetDireFiorySiteId(tgfal  y cr  d_r  l u ttdireFiorySiteId(n
a}e  Sbaei  u_ad U 'rsetDireFiorySiteIdDi   sir an
"C(eeeu e_Mett g  (_in  Iriooi Di   sir an
"Ca$direFiorySiteIdDi   sir an
"Ctgfal  y crl u ttdireFiorySiteIdDi   sir an
"Ca=a$direFiorySiteIdDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rgetDireFiorySiteIdDi   sir an
"C(tgfal  y cr  d_r  l u ttdireFiorySiteIdDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rsetExaSeesear($exaSeeseartgfal  y crl u ttexaSeeseara=a$exaSeesear(n
a}e  Sbaei  u_ad U 'rgetExaSeesear(tgfal  y cr  d_r  l u ttexaSeesear(n
a}e  Sbaei  u_ad U 'rsetId($idtgfal  y crl u ttid Satid(n
a}e  Sbaei  u_ad U 'rgetId(tgfal  y cr  d_r  l u ttid(n
a}e  Sbaei  u_ad U 'rsetIdDi   sir an
"C(eeeu e_Mett g  (_in  Iriooi Di   sir an
"Ca$idDi   sir an
"Ctgfal  y crl u ttidDi   sir an
"Ca=a$idDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rgetIdDi   sir an
"C(tgfal  y cr  d_r  l u ttidDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rsetKeyNatg($keyNetgtgfal  y crl u ttkeyNetga=a$keyNetg(n
a}e  Sbaei  u_ad U 'rgetKeyNatg(tgfal  y cr  d_r  l u ttkeyNetg(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetLastModifiedInfo(eeeu e_Mett g  (_in  Iriooi LastModifiedInfoa$lastModifiedInfotgfal  y crl u ttlastModifiedInfo SatlastModifiedInfo(n
a}e  Sbaei  u_ad U 'rgetLastModifiedInfo(tgfal  y cr  d_r  l u ttlastModifiedInfo(n
a}e  Sbaei  u_ad U 'rsetLookbackConfigurasatn(eeeu e_Mett g  (_in  Iriooi LookbackConfigurasatn $lookbackConfigurasatntgfal  y crl u ttlookbackConfigurasatn = $lookbackConfigurasatn(n
a}e  Sbaei  u_ad U 'rgetLookbackConfigurasatn(tgfal  y cr  d_r  l u ttlookbackConfigurasatn(n
a}e  Sbaei  u_ad U 'rsetNDI ($ietgtgfal  y crl u ttietg(= $ietg(n
a}e  Sbaei  u_ad U 'rgetNDI (tgfal  y cr  d_r  l u ttietg(n
a}e  Sbaei  u_ad U 'rsetPaymSntApSnyIrd($paymSntApSnyIrdtgfal  y crl u ttpaymSntApSnyIrd(= $paymSntApSnyIrd(n
a}e  Sbaei  u_ad U 'rgetPaymSntApSnyIrd(tgfal  y cr  d_r  l u ttpaymSntApSnyIrd(n
a}e  Sbaei  u_ad U 'rsetPaymSntSourcg($paymSntSourcgtgfal  y crl u ttpaymSntSourcg(= $paymSntSourcg(n
a}e  Sbaei  u_ad U 'rgetPaymSntSourcg(tgfal  y cr  d_r  l u ttpaymSntSourcg(n
a}e  Sbaei  u_ad U 'rsetPlacemSntGroupId($placemSntGroupIdtgfal  y crl u ttplacemSntGroupId(= $placemSntGroupId(n
a}e  Sbaei  u_ad U 'rgetPlacemSntGroupId(tgfal  y cr  d_r  l u ttplacemSntGroupId(n
a}e  Sbaei  u_ad U 'rsetPlacemSntGroupIdDi   sir an
"C(eeeu e_Mett g  (_in  Iriooi Di   sir an
"Ca$placemSntGroupIdDi   sir an
"Ctgfal  y crl u ttplacemSntGroupIdDi   sir an
"Ca=a$placemSntGroupIdDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rgetPlacemSntGroupIdDi   sir an
"C(tgfal  y cr  d_r  l u ttplacemSntGroupIdDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rsetPlacemSntStrategyar($placemSntStrategyartgfal  y crl u ttplacemSntStrategyara=a$placemSntStrategyar(n
a}e  Sbaei  u_ad U 'rgetPlacemSntStrategyar(tgfal  y cr  d_r  l u ttplacemSntStrategyar(n
a}e  Sbaei  u_ad U 'rsetProcingSchedulC(eeeu e_Mett g  (_in  Iriooi ProcingSchedulCa$procingSchedulCtgfal  y crl u ttprocingSchedulCa=a$procingSchedulC(n
a}e  Sbaei  u_ad U 'rgetProcingSchedulC(tgfal  y cr  d_r  l u ttprocingSchedulC(n
a}e  Sbaei  u_ad U 'rsetPromary($primarytgfal  y crl u ttpromarya=a$promary;  y}e  Sbaei  u_ad U 'rgetPromary(tgfal  y cr  d_r  l u ttpromary;  y}e  Sbaei  u_ad U 'rsetPbaeisherUpdateInfo(eeeu e_Mett g  (_in  Iriooi LastModifiedInfoa$pbaeisherUpdateInfotgfal  y crl u ttpbaeisherUpdateInfoa=a$pbaeisherUpdateInfo;  y}e  Sbaei  u_ad U 'rgetPbaeisherUpdateInfo(tgfal  y cr  d_r  l u ttpbaeisherUpdateInfo;  y}e  Sbaei  u_ad U 'rsetSiteId($siteIdtgfal  y crl u tttiteId(= $siteId(n
a}e  Sbaei  u_ad U 'rgetSitear(tgfal  y cr  d_r  l u ttsiteId(n
a}e  Sbaei  u_ad U 'rsetSiteIdDi   sir an
"C(eeeu e_Mett g  (_in  Iriooi Di   sir an
"Ca$siteIdDi   sir an
"Ctgfal  y crl u tttiteIdDi   sir an
"Ca=a$titeIdDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rgetSitearDi   sir an
"C(tgfal  y cr  d_r  l u tttiteIdDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rsetSizC(eeeu e_Mett g  (_in  Iriooi SizCa$sizCtgfal  y crl u tttizCa=a$tizC(n
a}e  Sbaei  u_ad U 'rgetSizC(tgfal  y cr  d_r  l u tttizC(n
a}e  Sbaei  u_ad U 'rsetSslRequired($sslRequiredtgfal  y crl u tttslRequireda=a$tslRequired(n
a}e  Sbaei  u_ad U 'rgetSslRequired(tgfal  y cr  d_r  l u tttslRequired(n
a}e  Sbaei  u_ad U 'rsetStatus($statustgfal  y crl u ttstatus Satstatus(n
a}e  Sbaei  u_ad U 'rgetStatus(tgfal  y cr  d_r  l u ttstatus(n
a}e  Sbaei  u_ad U 'rsetSubaccou har($ ubaccou hartgfal  y crl u tttubaccou harg= $ ubaccou har(n
a}e  Sbaei  u_ad U 'rgetSubaccou har(tgfal  y cr  d_r  l ustttubaccou har(n
a}e  Sbaei  u_ad U 'rsetTagFormats($tagFormatstgfal  y crl u tttagFormatsg= $tagFormats(n
a}e  Sbaei  u_ad U 'rgetTagFormats(tgfal  y cr  d_r  l ustttagFormats(n
a}e  Sbaei  u_ad U 'rsetTagSettooi(eeeu e_Mett g  (_in  Iriooi TagSettooi $tagSettooitgfal  y crl u tttagSettooi = $tagSettooi(n
a}e  Sbaei  u_ad U 'rgetTagSettooi(tgfal  y cr  d_r  l ustttagSettooi(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi PlacemSntAssigimSnta(_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $a   vg(n
aSbaei  $placemSntId(n
aSnyteFieta$placemSntIdDi   sir an
"CTyp d  'eeeu e_Mett g  (_in  Iriooi Di   sir an
"C';  y
nyteFieta$placemSntIdDi   sir an
"CDataTyp d  ''(n
aSbaei  $sslRequired(n
e  Sbaei  u_ad U 'rsetAc  vg($a   vgtgfal  y crl u tta   vg = $a   vg(n
a}e  Sbaei  u_ad U 'rgetAc  vg(tgfal  y cr  d_r  l ustta   vg(n
a}e  Sbaei  u_ad U 'rsetPlacemSntar($placemSntartgfal  y crl u ttplacemSntara=a$placemSntar(n
a}e  Sbaei  u_ad U 'rgetPlacemSntar(tgfal  y cr  d_r  l u ttplacemSntId(n
a}e  Sbaei  u_ad U 'rsetPlacemSntIdDi   sir an
"C(eeeu e_Mett g  (_in  Iriooi Di   sir an
"Ca$placemSntIdDi   sir an
"Ctgfal  y crl u ttplacemSntarDi   sir an
"Ca=a$placemSntIdDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rgetPlacemSntIdDi   sir an
"C(tgfal  y cr  d_r  l u ttplacemSntIdDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rsetSslRequired($sslRequiredtgfal  y crl u tttslRequireda=a$tslRequired(n
a}e  Sbaei  u_ad U 'rgetSslRequired(tgfal  y cr  d_r  l u tttslRequired(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi PlacemSntGroup (_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'childPlacemSntIds'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $accou har(n
aSbaei  $adIr
nyoSeId(n
aSnyteFieta$adIr
nyoSeIdDi   sir an
"CTyp d  'eeeu e_Mett g  (_in  Iriooi Di   sir an
"C';  y
nyteFieta$adIr
nyoSeIdDi   sir an
"CDataTyp d  ''(n
aSbaei  $archived(n
aSbaei  $campaignId(n
aSnyteFieta$campaignIdDi   sir an
"CTyp d  'eeeu e_Mett g  (_in  Iriooi Di   sir an
"C';  y
nyteFieta$campaignIdDi   sir an
"CDataTyp d  ''(n
aSbaei  $childPlacemSntIds(n
aSbaei  $commSnt(n
aSbaei  $conaSntCategoryId(n
a
nyteFieta$createInfoTyp d  'eeeu e_Mett g  (_in  Iriooi LastModifiedInfo';  y
nyteFieta$createInfoDataTyp d  ''(n
aSbaei  $direFiorySiteId(n
aSnyteFieta$direFiorySiteIdDi   sir an
"CTyp d  'eeeu e_Mett g  (_in  Iriooi Di   sir an
"C';  y
nyteFieta$direFiorySiteIdDi   sir an
"CDataTyp d  ''(n
aSbaei  $exaSeesear(n
aSbaei  $id(n
aSnyteFieta$idDi   sir an
"CTyp d  'eeeu e_Mett g  (_in  Iriooi Di   sir an
"C';  y
nyteFieta$idDi   sir an
"CDataTyp d  ''(n
aSbaei  $kind(n
aSnyteFieta$lastModifiedInfoTyp d  'eeeu e_Mett g  (_in  Iriooi LastModifiedInfo';  y
nyteFieta$lastModifiedInfoDataTyp d  ''(n
aSbaei  $natg(n
aSbaei  $placemSntGroupTyp (n
aSbaei  $placemSntStrategyar(n
a
nyteFieta$procingSchedulCTyp d  'eeeu e_Mett g  (_in  Iriooi ProcingSchedulC';  y
nyteFieta$procingSchedulCDataTyp d  ''(n
aSbaei  $primaryPlacemSntId;  y
nyteFieta$promaryPlacemSntIdDi   sir an
"CTyp d  'eeeu e_Mett g  (_in  Iriooi Di   sir an
"C';  y
nyteFieta$promaryPlacemSntIdDi   sir an
"CDataTyp d  ''(n
aSnyteFieta$SnygrammaticSettooiTyp d  'eeeu e_Mett g  (_in  Iriooi PnygrammaticSettooi'(n
aSnyteFieta$SnygrammaticSettooiDataTyp d  ''(n
aSbaei  $siteId(n
aSnyteFieta$siteIdDi   sir an
"CTyp d  'eeeu e_Mett g  (_in  Iriooi Di   sir an
"C';  y
nyteFieta$siteIdDi   sir an
"CDataTyp d  ''(n
aSbaei  $subaccou har(n
e  Sbaei  u_ad U 'rsetAccou har($accou hartgfal  y crl u ttaccou harg= $accou hId(n
a}e  Sbaei  u_ad U 'rgetAccou hId(tgfal  y cr  d_r  l u ttaccou hId(n
a}e  Sbaei  u_ad U 'rsetAdIr
nyoSeId($adIr
nyoSeIdtgfal  y crl u ttadvr
nyoSearg= $a Ir
nyoSeId(n
a}e  Sbaei  u_ad U 'rgetA Ir
nyoSear(tgfal  y cr  d_r  l u tta Ir
nyoSeId(n
a}e  Sbaei  u_ad U 'rsetAdIr
nyoSeIdDi   sir an
"C(eeeu e_Mett g  (_in  Iriooi Di   sir an
"Ca$adIr
nyoSeIdDi   sir an
"Ctgfal  y crl u ttadvr
nyoSearDi   sir an
"Ca=a$adIr
nyoSeIdDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rgetA Ir
nyoSearDi   sir an
"C(tgfal  y cr  d_r  l u ttadIr
nyoSeIdDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rsetArchived($archivedtgfal  y crl u ttarchiveda=a$archived(n
a}e  Sbaei  u_ad U 'rgetArchived(tgfal  y cr  d_r  l u ttarchived(n
a}e  Sbaei  u_ad U 'rsetCampaignId($campaignIdtgfal  y crl u ttcampaignId = $campaignId(n
a}e  Sbaei  u_ad U 'rgetCampaignId(tgfal  y cr  d_r  l u ttcampaignId(n
a}e  Sbaei  u_ad U 'rsetCampaignIdDi   sir an
"C(eeeu e_Mett g  (_in  Iriooi Di   sir an
"Ca$campaignIdDi   sir an
"Ctgfal  y crl u ttcampaignIdDi   sir an
"Ca=a$campaignIdDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rgetCampaignIdDi   sir an
"C(tgfal  y cr  d_r  l u ttcampaignIdDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rsetChildPlacemSntIds($childPlacemSntIdstgfal  y crl u ttchildPlacemSntIdsa=a$childPlacemSntIds(n
a}e  Sbaei  u_ad U 'rgetChildPlacemSntIds(tgfal  y cr  d_r  l u ttchildPlacemSntIds(n
a}e  Sbaei  u_ad U 'rsetC mmSnt($commSnttgfal  y crl u ttc mmSnta=a$commSnt(n
a}e  Sbaei  u_ad U 'rgetC mmSnt(tgfal  y cr  d_r  l u ttc mmSnt(n
a}e  Sbaei  u_ad U 'rsetC 
aSntCategoryId($conaSntCategoryIdtgfal  y crl u ttc 
aSntCategoryIda=a$conaSntCategoryId(n
a}e  Sbaei  u_ad U 'rgetC 
aSntCategoryId(tgfal  y cr  d_r  l u ttc 
aSntCategoryId(n
a}e  Sbaei  u_ad U 'rsetCreateInfo(eeeu e_Mett g  (_in  Iriooi LastModifiedInfoa$createInfotgfal  y crl u ttcreateInfoa=a$createInfo(n
a}e  Sbaei  u_ad U 'rgetCreateInfo(tgfal  y cr  d_r  l u ttcreateInfo(n
a}e  Sbaei  u_ad U 'rsetDireFiorySiteId($direFiorySiteIdtgfal  y crl u ttdireFiorySiteIda=a$direFiorySiteId(n
a}e  Sbaei  u_ad U 'rgetDireFiorySiteId(tgfal  y cr  d_r  l u ttdireFiorySiteId(n
a}e  Sbaei  u_ad U 'rsetDireFiorySiteIdDi   sir an
"C(eeeu e_Mett g  (_in  Iriooi Di   sir an
"Ca$direFiorySiteIdDi   sir an
"Ctgfal  y crl u ttdireFiorySiteIdDi   sir an
"Ca=a$direFiorySiteIdDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rgetDireFiorySiteIdDi   sir an
"C(tgfal  y cr  d_r  l u ttdireFiorySiteIdDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rsetExaSeesear($exaSeeseartgfal  y crl u ttexaSeeseara=a$exaSeesear(n
a}e  Sbaei  u_ad U 'rgetExaSeesear(tgfal  y cr  d_r  l u ttexaSeesear(n
a}e  Sbaei  u_ad U 'rsetId($idtgfal  y crl u ttid Satid(n
a}e  Sbaei  u_ad U 'rgetId(tgfal  y cr  d_r  l u ttid(n
a}e  Sbaei  u_ad U 'rsetIdDi   sir an
"C(eeeu e_Mett g  (_in  Iriooi Di   sir an
"Ca$idDi   sir an
"Ctgfal  y crl u ttidDi   sir an
"Ca=a$idDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rgetIdDi   sir an
"C(tgfal  y cr  d_r  l u ttidDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetLastModifiedInfo(eeeu e_Mett g  (_in  Iriooi LastModifiedInfoa$lastModifiedInfotgfal  y crl u ttlastModifiedInfo SatlastModifiedInfo(n
a}e  Sbaei  u_ad U 'rgetLastModifiedInfo(tgfal  y cr  d_r  l u ttlastModifiedInfo(n
a}e  Sbaei  u_ad U 'rsetNDI ($ietgtgfal  y crl u ttietg(= $ietg(n
a}e  Sbaei  u_ad U 'rgetNDI (tgfal  y cr  d_r  l u ttietg(n
a}e  Sbaei  u_ad U 'rsetPlacemSntGroupTyp ($placemSntGroupTyp tgfal  y crl u ttplacemSntGroupTyp  =a$placemSntGroupTyp (n
a}e  Sbaei  u_ad U 'rgetPlacemSntGroupTyp (tgfal  y cr  d_r  l u ttplacemSntGroupTyp (n
a}e  Sbaei  u_ad U 'rsetPlacemSntStrategyar($placemSntStrategyartgfal  y crl u ttplacemSntStrategyara=a$placemSntStrategyar(n
a}e  Sbaei  u_ad U 'rgetPlacemSntStrategyar(tgfal  y cr  d_r  l u ttplacemSntStrategyar(n
a}e  Sbaei  u_ad U 'rsetProcingSchedulC(eeeu e_Mett g  (_in  Iriooi ProcingSchedulCa$procingSchedulCtgfal  y crl u ttprocingSchedulCa=a$procingSchedulC(n
a}e  Sbaei  u_ad U 'rgetProcingSchedulC(tgfal  y cr  d_r  l u ttprocingSchedulC(n
a}e  Sbaei  u_ad U 'rsetPromaryPlacemSntId($promaryPlacemSntIdtgfal  y crl u ttpromaryPlacemSntIda=a$promaryPlacemSntId;  y}e  Sbaei  u_ad U 'rgetPromaryPlacemSntId(tgfal  y cr  d_r  l u ttpromaryPlacemSntId;  y}e  Sbaei  u_ad U 'rsetPromaryPlacemSntIdDi   sir an
"C(eeeu e_Mett g  (_in  Iriooi Di   sir an
"Ca$promaryPlacemSntIdDi   sir an
"Ctgfal  y crl u ttpromaryPlacemSntIdDi   sir an
"Ca=a$promaryPlacemSntIdDi   sir an
"C;  y}e  Sbaei  u_ad U 'rgetPromaryPlacemSntIdDi   sir an
"C(tgfal  y cr  d_r  l u ttpromaryPlacemSntIdDi   sir an
"C;  y}e  Sbaei  u_ad U 'rsetPrygrammaticSettooi(eeeu e_Mett g  (_in  Iriooi PrygrammaticSettooia$SnygrammaticSettooitgfal  y crl u ttprygrammaticSettooia=a$SnygrammaticSettooi;  y}e  Sbaei  u_ad U 'rgetPrygrammaticSettooi(tgfal  y cr  d_r  l u ttprygrammaticSettooi;  y}e  Sbaei  u_ad U 'rsetSiteId($siteIdtgfal  y crl u tttiteId(= $siteId(n
a}e  Sbaei  u_ad U 'rgetSitear(tgfal  y cr  d_r  l u ttsiteId(n
a}e  Sbaei  u_ad U 'rsetSiteIdDi   sir an
"C(eeeu e_Mett g  (_in  Iriooi Di   sir an
"Ca$siteIdDi   sir an
"Ctgfal  y crl u tttiteIdDi   sir an
"Ca=a$titeIdDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rgetSiteIdDi   sir an
"C(tgfal  y cr  d_r  l u ttsiteIdDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rsetSubaccou har($ ubaccou hartgfal  y crl u tttubaccou harg= $ ubaccou har(n
a}e  Sbaei  u_ad U 'rgetSubaccou har(tgfal  y cr  d_r  l ustttubaccou har(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi PlacemSntGroupsListResponsCa(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'placemSntGroups'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $kind(n
aSbaei  $i(_SP p Tokee(n
aSnyteFieta$placemSntGroupsTyp d  'eeeu e_Mett g  (_in  Iriooi PlacemSntGroup';  y
nyteFieta$placemSntGroupsDataTyp d  'eal I'(n
e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetN(_SP p Tokee($i(_SP p Tokeetgfal  y crl u tti(_SP p Tokee(= $i(_SP p Tokee(n
a}e  Sbaei  u_ad U 'rgetN(_SP p Tokee(tgfal  y cr  d_r  l u tti(_SP p Tokee(n
a}e  Sbaei  u_ad U 'rsetPlacemSntGroups($placemSntGroupstgfal  y crl u ttplacemSntGroups =a$placemSntGroups(n
a}e  Sbaei  u_ad U 'rgetPlacemSntGroups(tgfal  y cr  d_r  l u ttplacemSntGroups(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi PlacemSntStrategiesListResponsCa(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'placemSntStrategies'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $kind(n
aSbaei  $i(_SP p Tokee(n
aSnyteFieta$placemSntStrategiesTyp d  'eeeu e_Mett g  (_in  Iriooi PlacemSntStrategy';  y
nyteFieta$placemSntStrategiesDataTyp d  'eal I'(n
e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetN(_SP p Tokee($i(_SP p Tokeetgfal  y crl u tti(_SP p Tokee(= $i(_SP p Tokee(n
a}e  Sbaei  u_ad U 'rgetN(_SP p Tokee(tgfal  y cr  d_r  l u tti(_SP p Tokee(n
a}e  Sbaei  u_ad U 'rsetPlacemSntStrategies($placemSntStrategiestgfal  y crl u ttplacemSntStrategiesa=a$placemSntStrategies(n
a}e  Sbaei  u_ad U 'rgetPlacemSntStrategies(tgfal  y cr  d_r  l u ttplacemSntStrategies(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi PlacemSntStrategya(_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $a cou har(n
aSbaei  $ir(n
aSbaei  $kind(n
aSbaei  $ietg(n
e  Sbaei  u_ad U 'rsetAccou har($accou hartgfal  y crl u ttaccou harg= $accou hId(n
a}e  Sbaei  u_ad U 'rgetAccou hId(tgfal  y cr  d_r  l u ttaccou hId(n
a}e  Sbaei  u_ad U 'rsetId($idtgfal  y crl u ttid Satid(n
a}e  Sbaei  u_ad U 'rgetId(tgfal  y cr  d_r  l u ttid(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetNDI ($ietgtgfal  y crl u ttietg(= $ietg(n
a}e  Sbaei  u_ad U 'rgetNDI (tgfal  y cr  d_r  l u ttietg(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi PlacemSntTaga(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'taiDatas'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $placemSntId(n
aSnyteFieta$taiDatasTyp d  'eeeu e_Mett g  (_in  Iriooi TaiData'(n
aSnyteFieta$taiDatasDataTyp d  'eal I'(n
e  Sbaei  u_ad U 'rsetPlacemSntId($placemSntartgfal  y crl u ttplacemSntara=a$placemSntar(n
a}e  Sbaei  u_ad U 'rgetPlacemSntar(tgfal  y cr  d_r  l u ttplacemSntId(n
a}e  Sbaei  u_ad U 'rsetTaiDatas($tagDatastgfal  y crl u tttagDatasa=a$tagDatas(n
a}e  Sbaei  u_ad U 'rgetTaiDatas(tgfal  y cr  d_r  l u tttagDatas(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi PlacemSntsGenerateTaisResponsCa(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'placemSntTais'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $kind(n
aSnyteFieta$placemSntTaisTyp d  'eeeu e_Mett g  (_in  Iriooi PlacemSntTag';  y
nyteFieta$placemSntTaisDataTyp d  'eal I'(n
e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetPlacemSntTags($placemSntTagstgfal  y crl u ttplacemSntTagsa=a$placemSntTags(n
a}e  Sbaei  u_ad U 'rgetPlacemSntTags(tgfal  y cr  d_r  l u ttplacemSntTags(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi PlacemSntsListResponsCa(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'placemSnts'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $kind(n
aSbaei  $i(_SP p Tokee(n
aSnyteFieta$placemSntsTyp d  'eeeu e_Mett g  (_in  Iriooi PlacemSnt';  y
nyteFieta$placemSntsDataTyp d  'eal I'(n
e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetN(_SP p Tokee($i(_SP p Tokeetgfal  y crl u tti(_SP p Tokee(= $i(_SP p Tokee(n
a}e  Sbaei  u_ad U 'rgetN(_SP p Tokee(tgfal  y cr  d_r  l u tti(_SP p Tokee(n
a}e  Sbaei  u_ad U 'rsetPlacemSnts($placemSntstgfal  y crl u ttplacemSntsa=a$placemSnts(n
a}e  Sbaei  u_ad U 'rgetPlacemSnts(tgfal  y cr  d_r  l u ttplacemSnts(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi PlatformTyp d(_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $ir(n
aSbaei  $kind(n
aSbaei  $ietg(n
e  Sbaei  u_ad U 'rsetId($idtgfal  y crl u ttid Satid(n
a}e  Sbaei  u_ad U 'rgetId(tgfal  y cr  d_r  l u ttid(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetNDI ($ietgtgfal  y crl u ttietg(= $ietg(n
a}e  Sbaei  u_ad U 'rgetNDI (tgfal  y cr  d_r  l u ttietg(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi PlatformTyp sListResponsCa(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'platformTyp s'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $kind(n
aSnyteFieta$platformTyp sTyp d  'eeeu e_Mett g  (_in  Iriooi PlatformTyp ';  y
nyteFieta$platformTyp sDataTyp d  'eal I'(n
e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetPlatformTyp s($platformTyp stgfal  y crl u ttplatformTyp sa=a$platformTyp s(n
a}e  Sbaei  u_ad U 'rgetPlatformTyp s(tgfal  y cr  d_r  l u ttplatformTyp s(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi PopupWindowPropr
nye  (_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSnyteFieta$di   sir Typ d  'eeeu e_Mett g  (_in  Iriooi SizC'(n
aSnyteFieta$di   sir DataTyp d  ''(n
aSnyteFieta$offsetTyp d  'eeeu e_Mett g  (_in  Iriooi OffsetPosi U ''(n
aSnyteFieta$offsetDataTyp d  ''(n
aSbaei  $posi U 'Typ (n
aSbaei  $showAddressBar(n
aSbaei  $showMenuBar(n
aSbaei  $showScr dlBar(n
aSbaei  $showStatusBar(n
aSbaei  $showToolBar(n
aSbaei  $titlg(n
e  Sbaei  u_ad U 'rsetDi   sir (eeeu e_Mett g  (_in  Iriooi SizCa$di   sir tgfal  y crl u ttdi   sir a=a$di   sir (n
a}e  Sbaei  u_ad U 'rgetDi   sir (tgfal  y cr  d_r  l u ttdi   sir (n
a}e  Sbaei  u_ad U 'rsetOffset(eeeu e_Mett g  (_in  Iriooi OffsetPosi U 'a$offsettgfal  y crl u ttoffseta=a$offset(n
a}e  Sbaei  u_ad U 'rgetOffset(tgfal  y cr  d_r  l u ttoffset(n
a}e  Sbaei  u_ad U 'rsetPosi U 'Typ ($posi U 'Typ tgfal  y crl u ttposi U 'Typ a=a$posi U 'Typ (n
a}e  Sbaei  u_ad U 'rgetPosi U 'Typ (tgfal  y cr  d_r  l u ttposi U 'Typ (n
a}e  Sbaei  u_ad U 'rsetShowAddressBar($showAddressBartgfal  y crl u ttshowAddressBara=a$showAddressBar(n
a}e  Sbaei  u_ad U 'rgetShowAddressBar(tgfal  y cr  d_r  l u ttshowAddressBar(n
a}e  Sbaei  u_ad U 'rsetShowMenuBar($showMenuBartgfal  y crl u ttshowMenuBara=a$showMenuBar(n
a}e  Sbaei  u_ad U 'rgetShowMenuBar(tgfal  y cr  d_r  l u ttshowMenuBar(n
a}e  Sbaei  u_ad U 'rsetShowScr dlBar($showScr dlBartgfal  y crl u ttshowScr dlBara=a$showScr dlBar(n
a}e  Sbaei  u_ad U 'rgetShowScr dlBar(tgfal  y cr  d_r  l u ttshowScr dlBar(n
a}e  Sbaei  u_ad U 'rsetShowStatusBar($showStatusBartgfal  y crl u ttshowStatusBara=a$showStatusBar(n
a}e  Sbaei  u_ad U 'rgetShowStatusBar(tgfal  y cr  d_r  l u ttshowStatusBar(n
a}e  Sbaei  u_ad U 'rsetShowToolBar($showToolBartgfal  y crl u ttshowToolBara=a$showToolBar(n
a}e  Sbaei  u_ad U 'rgetShowToolBar(tgfal  y cr  d_r  l u ttshowToolBar(n
a}e  Sbaei  u_ad U 'rsetTitlg($titlgtgfal  y crl u tttitlgg= $titlg(n
a}e  Sbaei  u_ad U 'rgetTitlg(tgfal  y cr  d_r  l u tttitlg(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi PostalCode (_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $code(n
aSbaei  $countryCode(n
aSbaei  $countryDarhar(n
aSbaei  $ir(n
aSbaei  $kind(n
e  Sbaei  u_ad U 'rsetC de($codetgfal  y crl u ttcodeg= $code(n
a}e  Sbaei  u_ad U 'rgetC de(tgfal  y cr  d_r  l u ttcode(n
a}e  Sbaei  u_ad U 'rsetC untryCode($countryCodetgfal  y crl u ttcountryCodeg= $countryCode(n
a}e  Sbaei  u_ad U 'rgetC untryCode(tgfal  y cr  d_r  l u ttcountryCode(n
a}e  Sbaei  u_ad U 'rsetC untryDarhar($countryDarhartgfal  y crl u ttcountryDarharg= $countryDarhar(n
a}e  Sbaei  u_ad U 'rgetC untryDarhar(tgfal  y cr  d_r  l u ttcountryDarhar(n
a}e  Sbaei  u_ad U 'rsetId($idtgfal  y crl u ttid Satid(n
a}e  Sbaei  u_ad U 'rgetId(tgfal  y cr  d_r  l u ttid(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi PostalCodesListResponsCa(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'postalCodes'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $kind(n
aSnyteFieta$postalCodesTyp d  'eeeu e_Mett g  (_in  Iriooi PostalCode';  y
nyteFieta$postalCodesDataTyp d  'eal I'(n
e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetPostalCodes($postalCodestgfal  y crl u ttpostalCodesa=a$postalCodes(n
a}e  Sbaei  u_ad U 'rgetPostalCodes(tgfal  y cr  d_r  l u ttpostalCodes(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi Procinga(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'flighhs'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $capCostTyp (n
aSbaei  $ataDate(n
aSnyteFieta$flighhsTyp d  'eeeu e_Mett g  (_in  Iriooi Flighh'(n
aSnyteFieta$flighhsDataTyp d  'eal I'(n
aSbaei  $groupTyp (n
aSbaei  $procingTyp (n
aSbaei  $starhDate(n
e  Sbaei  u_ad U 'rsetCapCostTyp ($capCostTyp tgfal  y crl u ttcapCostTyp g= $capCostTyp (n
a}e  Sbaei  u_ad U 'rgetCapCostTyp (tgfal  y cr  d_r  l u ttcapCostTyp (n
a}e  Sbaei  u_ad U 'rsetEtaDate($ataDatetgfal  y crl u ttataDateg= $ataDate(n
a}e  Sbaei  u_ad U 'rgetEtaDate(tgfal  y cr  d_r  l u ttataDate(n
a}e  Sbaei  u_ad U 'rsetFlighhs($flighhstgfal  y crl u ttflighhsg= $flighhs(n
a}e  Sbaei  u_ad U 'rgetFlighhs(tgfal  y cr  d_r  l u ttflighhs(n
a}e  Sbaei  u_ad U 'rsetGroupTyp ($groupTyp tgfal  y crl u ttgroupTyp g= $groupTyp (n
a}e  Sbaei  u_ad U 'rgetGroupTyp (tgfal  y cr  d_r  l u ttgroupTyp (n
a}e  Sbaei  u_ad U 'rsetProcingTyp ($procingTyp tgfal  y crl u ttprocingTyp a=a$procingTyp (n
a}e  Sbaei  u_ad U 'rgetProcingTyp (tgfal  y cr  d_r  l u ttprocingTyp (n
a}e  Sbaei  u_ad U 'rsetStarhDate($starhDatetgfal  y crl u ttstarhDatea=a$starhDate(n
a}e  Sbaei  u_ad U 'rgetStarhDate(tgfal  y cr  d_r  l u ttstarhDate(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi ProcingSchedulCa(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'procingPeriods'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $capCostOp  _a(n
aSbaei  $disregardOverdelivery(n
aSbaei  $ataDate(n
aSbaei  $flighhed(n
aSbaei  $floodlighhAc  vityar(n
a
nyteFieta$procingPeriodsTyp d  'eeeu e_Mett g  (_in  Iriooi ProcingSchedulCProcingPeriod';  y
nyteFieta$procingPeriodsDataTyp d  'eal I'(n
aSbaei  $procingTyp (n
aSbaei  $starhDate(n
aSbaei  $tesiooiStarhDate(n
e  Sbaei  u_ad U 'rsetCapCostOp  _a($capCostOp  _atgfal  y crl u ttcapCostOp  _ag= $capCostOp  _a(n
a}e  Sbaei  u_ad U 'rgetCapCostOp  _a(tgfal  y cr  d_r  l u ttcapCostOp  _a(n
a}e  Sbaei  u_ad U 'rsetDisregardOverdelivery($disregardOverdeliverytgfal  y crl u ttdisregardOverdelivery = $disregardOverdelivery(n
a}e  Sbaei  u_ad U 'rgetDisregardOverdelivery(tgfal  y cr  d_r  l u ttdisregardOverdelivery(n
a}e  Sbaei  u_ad U 'rsetEtaDate($ataDatetgfal  y crl u ttataDateg= $ataDate(n
a}e  Sbaei  u_ad U 'rgetEtaDate(tgfal  y cr  d_r  l u ttataDate(n
a}e  Sbaei  u_ad U 'rsetFlighhed($flighhedtgfal  y crl u ttflighhedg= $flighhed(n
a}e  Sbaei  u_ad U 'rgetFlighhed(tgfal  y cr  d_r  l u ttflighhed(n
a}e  Sbaei  u_ad U 'rsetFloodlighhAc  vityar($floodlighhAc  vityartgfal  y crl u ttfloodlighhAc  vityarg= $floodlighhAc  vityar(n
a}e  Sbaei  u_ad U 'rgetFloodlighhAc  vityar(tgfal  y cr  d_r  l u ttfloodlighhAc  vityar(n
a}e  Sbaei  u_ad U 'rsetProcingPeriods($procingPeriodstgfal  y crl u ttprocingPeriodsa=a$procingPeriods(n
a}e  Sbaei  u_ad U 'rgetProcingPeriods(tgfal  y cr  d_r  l u ttprocingPeriods(n
a}e  Sbaei  u_ad U 'rsetProcingTyp ($procingTyp tgfal  y crl u ttprocingTyp a=a$procingTyp (n
a}e  Sbaei  u_ad U 'rgetProcingTyp (tgfal  y cr  d_r  l u ttprocingTyp (n
a}e  Sbaei  u_ad U 'rsetStarhDate($starhDatetgfal  y crl u ttstarhDatea=a$starhDate(n
a}e  Sbaei  u_ad U 'rgetStarhDate(tgfal  y cr  d_r  l u ttstarhDate(n
a}e  Sbaei  u_ad U 'rsetTesiooiStarhDate($tesiooiStarhDatetgfal  y crl u tttesiooiStarhDatea=a$tesiooiStarhDate(n
a}e  Sbaei  u_ad U 'rgetTesiooiStarhDate(tgfal  y cr  d_r  l u tttesiooiStarhDate(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi ProcingSchedulCProcingPeriod (_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $ataDate(n
aSbaei  $procingCommSnt(n
aSbaei  $rateOrCostNanos(n
aSbaei  $starhDate(n
aSbaei  $unihs(n
e  Sbaei  u_ad U 'rsetEtaDate($ataDatetgfal  y crl u ttataDateg= $ataDate(n
a}e  Sbaei  u_ad U 'rgetEtaDate(tgfal  y cr  d_r  l u ttataDate(n
a}e  Sbaei  u_ad U 'rsetProcingCommSnt($procingCommSnttgfal  y crl u ttprocingC mmSnta=a$procingCommSnt(n
a}e  Sbaei  u_ad U 'rgetProcingC mmSnt(tgfal  y cr  d_r  l u ttprocingCommSnt(n
a}e  Sbaei  u_ad U 'rsetRateOrCostNanos($rateOrCostNanostgfal  y crl u ttrateOrCostNanosa=a$rateOrCostNanos(n
a}e  Sbaei  u_ad U 'rgetRateOrCostNanos(tgfal  y cr  d_r  l u ttrateOrCostNanos(n
a}e  Sbaei  u_ad U 'rsetStarhDate($starhDatetgfal  y crl u ttstarhDatea=a$starhDate(n
a}e  Sbaei  u_ad U 'rgetStarhDate(tgfal  y cr  d_r  l u ttstarhDate(n
a}e  Sbaei  u_ad U 'rsetUnihs($unihstgfal  y crl u ttunihsa=a$unihs(n
a}e  Sbaei  u_ad U 'rgetUnihs(tgfal  y cr  d_r  l u ttunihs(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi PrygrammaticSettooia(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'traffickerEmails'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $adxDesears(n
aSbaei  $insr
nyonOrdeeId(n
aSbaei  $insr
nyonOrdeeIdStatus(n
aSbaei  $mediaCostNanos(n
aSbaei  $prygrammatic(n
aSbaei  $traffickerEmails(n
e  Sbaei  u_ad U 'rsetAdxDesears($adxDesearstgfal  y crl u ttadxDesearsa=a$adxDesears(n
a}e  Sbaei  u_ad U 'rgetAdxDesears(tgfal  y cr  d_r  l u ttadxDesears(n
a}e  Sbaei  u_ad U 'rsetInsr
nyonOrdeeId($insr
nyonOrdeeIdtgfal  y crl u ttinsr
nyonOrdeeIda=a$insr
nyonOrdeeId(n
a}e  Sbaei  u_ad U 'rgetInsr
nyonOrdeeId(tgfal  y cr  d_r  l u ttinsr
nyonOrdeeId(n
a}e  Sbaei  u_ad U 'rsetInsr
nyonOrdeeIdStatus($insr
nyonOrdeeIdStatustgfal  y crl u ttinsr
nyonOrdeeIdStatusa=a$insr
nyonOrdeeIdStatus(n
a}e  Sbaei  u_ad U 'rgetInsr
nyonOrdeeIdStatus(tgfal  y cr  d_r  l u ttinsr
nyonOrdeeIdStatus(n
a}e  Sbaei  u_ad U 'rsetMediaCostNanos($mediaCostNanostgfal  y crl u ttmediaCostNanosa=a$mediaCostNanos(n
a}e  Sbaei  u_ad U 'rgetMediaCostNanos(tgfal  y cr  d_r  l u ttmediaCostNanos(n
a}e  Sbaei  u_ad U 'rsetPrygrammatic($prygrammatictgfal  y crl u ttprygrammatica=a$prygrammatic(n
a}e  Sbaei  u_ad U 'rgetPrygrammatic(tgfal  y cr  d_r  l u ttprygrammatic(n
a}e  Sbaei  u_ad U 'rsetTraffickerEmails($traffickerEmailstgfal  y crl u tttraffickerEmailsa=a$traffickerEmails(n
a}e  Sbaei  u_ad U 'rgetTraffickerEmails(tgfal  y cr  d_r  l u tttraffickerEmails(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi PryjeFi (_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $accou har(n
aSbaei  $adIr
nyoSeId(n
aSbaei  $audienceAgeGroup(n
aSbaei  $audienceGataer(n
aSbaei  $budget(n
aSbaei  $clientBillingCode(n
aSbaei  $clientNetg(n
aSbaei  $ataDate(n
aSbaei  $ir(n
aSbaei  $kind(n
aSnyteFieta$lastModifiedInfoTyp d  'eeeu e_Mett g  (_in  Iriooi LastModifiedInfo';  y
nyteFieta$lastModifiedInfoDataTyp d  ''(n
aSbaei  $natg(n
aSbaei  $ovett ew(n
aSbaei  $starhDate(n
aSbaei  $subaccou har(n
aSbaei  $targetCei ks(n
aSbaei  $targetConvetsir s(n
aSbaei  $targetCpaNanos(n
aSbaei  $targetCpcNanos(n
aSbaei  $targetCpmNanos(n
aSbaei  $targetImpressir s(n
e  Sbaei  u_ad U 'rsetAccou har($accou hartgfal  y crl u ttaccou harg= $accou hId(n
a}e  Sbaei  u_ad U 'rgetAccou hId(tgfal  y cr  d_r  l u ttaccou hId(n
a}e  Sbaei  u_ad U 'rsetAdIr
nyoSeId($adIr
nyoSeIdtgfal  y crl u ttadvr
nyoSearg= $a Ir
nyoSeId(n
a}e  Sbaei  u_ad U 'rgetA Ir
nyoSear(tgfal  y cr  d_r  l u tta Ir
nyoSeId(n
a}e  Sbaei  u_ad U 'rsetAudienceAgeGroup($audienceAgeGrouptgfal  y crl u ttaudienceAgeGroupg= $audienceAgeGroup(n
a}e  Sbaei  u_ad U 'rgetAudienceAgeGroup(tgfal  y cr  d_r  l u ttaudienceAgeGroup(n
a}e  Sbaei  u_ad U 'rsetAudienceGataer($audienceGataertgfal  y crl u ttaudienceGataerg= $audienceGataer(n
a}e  Sbaei  u_ad U 'rgetAudienceGataer(tgfal  y cr  d_r  l u ttaudienceGataer(n
a}e  Sbaei  u_ad U 'rsetBudget($budgettgfal  y crl u ttbudgetg= $budget(n
a}e  Sbaei  u_ad U 'rgetBudget(tgfal  y cr  d_r  l u ttbudget(n
a}e  Sbaei  u_ad U 'rsetCeientBillingCode($clientBillingCodetgfal  y crl u ttclientBillingCodeg= $clientBillingCode(n
a}e  Sbaei  u_ad U 'rgetCeientBillingCode(tgfal  y cr  d_r  l u ttclientBillingCode(n
a}e  Sbaei  u_ad U 'rsetCeientNDI ($clientNetgtgfal  y crl u ttclientNetg(= $clientNetg(n
a}e  Sbaei  u_ad U 'rgetCeientNDI (tgfal  y cr  d_r  l u ttclientNetg(n
a}e  Sbaei  u_ad U 'rsetEtaDate($ataDatetgfal  y crl u ttataDateg= $ataDate(n
a}e  Sbaei  u_ad U 'rgetEtaDate(tgfal  y cr  d_r  l u ttataDate(n
a}e  Sbaei  u_ad U 'rsetId($idtgfal  y crl u ttid Satid(n
a}e  Sbaei  u_ad U 'rgetId(tgfal  y cr  d_r  l u ttid(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetLastModifiedInfo(eeeu e_Mett g  (_in  Iriooi LastModifiedInfoa$lastModifiedInfotgfal  y crl u ttlastModifiedInfo SatlastModifiedInfo(n
a}e  Sbaei  u_ad U 'rgetLastModifiedInfo(tgfal  y cr  d_r  l u ttlastModifiedInfo(n
a}e  Sbaei  u_ad U 'rsetNDI ($ietgtgfal  y crl u ttietg(= $ietg(n
a}e  Sbaei  u_ad U 'rgetNDI (tgfal  y cr  d_r  l u ttietg(n
a}e  Sbaei  u_ad U 'rsetOvett ew($ovett ewtgfal  y crl u ttovett ew(= $ovett ew(n
a}e  Sbaei  u_ad U 'rgetOvett ew(tgfal  y cr  d_r  l u ttovett ew(n
a}e  Sbaei  u_ad U 'rsetStarhDate($starhDatetgfal  y crl u ttstarhDatea=a$starhDate(n
a}e  Sbaei  u_ad U 'rgetStarhDate(tgfal  y cr  d_r  l u ttstarhDate(n
a}e  Sbaei  u_ad U 'rsetSubaccou har($ ubaccou hartgfal  y crl u tttubaccou harg= $ ubaccou har(n
a}e  Sbaei  u_ad U 'rgetSubaccou har(tgfal  y cr  d_r  l ustttubaccou har(n
a}e  Sbaei  u_ad U 'rsetTargetCei ks($targetCei kstgfal  y crl u tttargetCei ksa=a$targetCei ks(n
a}e  Sbaei  u_ad U 'rgetTargetCei ks(tgfal  y cr  d_r  l u tttargetCei ks(n
a}e  Sbaei  u_ad U 'rsetTargetConvetsir s($targetConvetsir stgfal  y crl u tttargetConvetsir sa=a$targetConvetsir s(n
a}e  Sbaei  u_ad U 'rgetTargetConvetsir s(tgfal  y cr  d_r  l u tttargetConvetsir s(n
a}e  Sbaei  u_ad U 'rsetTargetCpaNanos($targetCpaNanostgfal  y crl u tttargetCpaNanosa=a$targetCpaNanos(n
a}e  Sbaei  u_ad U 'rgetTargetCpaNanos(tgfal  y cr  d_r  l u tttargetCpaNanos(n
a}e  Sbaei  u_ad U 'rsetTargetCpcNanos($targetCpcNanostgfal  y crl u tttargetCpcNanosa=a$targetCpcNanos(n
a}e  Sbaei  u_ad U 'rgetTargetCpcNanos(tgfal  y cr  d_r  l u tttargetCpcNanos(n
a}e  Sbaei  u_ad U 'rsetTargetCpmNanos($targetCpmNanostgfal  y crl u tttargetCpmNanosa=a$targetCpmNanos(n
a}e  Sbaei  u_ad U 'rgetTargetCpmNanos(tgfal  y cr  d_r  l u tttargetCpmNanos(n
a}e  Sbaei  u_ad U 'rsetTargetImpressir s($targetImpressir stgfal  y crl u tttargetImpressir sa=a$targetImpressir s(n
a}e  Sbaei  u_ad U 'rgetTargetImpressir s(tgfal  y cr  d_r  l u tttargetImpressir s(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi PryjeFisListResponsCa(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'pryjeFis'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $kind(n
aSbaei  $i(_SP p Tokee(n
aSnyteFieta$pryjeFisTyp d  'eeeu e_Mett g  (_in  Iriooi PryjeFi';  y
nyteFieta$pryjeFisDataTyp d  'eal I'(n
e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetN(_SP p Tokee($i(_SP p Tokeetgfal  y crl u tti(_SP p Tokee(= $i(_SP p Tokee(n
a}e  Sbaei  u_ad U 'rgetN(_SP p Tokee(tgfal  y cr  d_r  l u tti(_SP p Tokee(n
a}e  Sbaei  u_ad U 'rsetPryjeFis($pryjeFistgfal  y crl u ttpryjeFisa=a$pryjeFis(n
a}e  Sbaei  u_ad U 'rgetPryjeFis(tgfal  y cr  d_r  l u ttpryjeFis(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi ReachR  IriCompatibleField  (_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'reachByFrequencyMetrics'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSnyteFieta$di   sir FilaSesTyp d  'eeeu e_Mett g  (_in  Iriooi Di   sir '(n
aSnyteFieta$di   sir FilaSesDataTyp d  'eal I'(n
aSnyteFieta$di   sir sTyp d  'eeeu e_Mett g  (_in  Iriooi Di   sir '(n
aSnyteFieta$di   sir sDataTyp d  'eal I'(n
aSbaei  $kind(n
aSnyteFieta$metricsTyp d  'eeeu e_Mett g  (_in  Iriooi Metric'(n
aSnyteFieta$metricsDataTyp d  'eal I'(n
aSnyteFieta$pivytedAc  vityMetricsTyp d  'eeeu e_Mett g  (_in  Iriooi Metric'(n
aSnyteFieta$pivytedAc  vityMetricsDataTyp d  'eal I'(n
aSnyteFieta$reachByFrequencyMetricsTyp d  'eeeu e_Mett g  (_in  Iriooi Metric'(n
aSnyteFieta$reachByFrequencyMetricsDataTyp d  'eal I'(n
e  Sbaei  u_ad U 'rsetDi   sir FilaSes($di   sir FilaSestgfal  y crl u ttdi   sir FilaSesa=a$di   sir FilaSes(n
a}e  Sbaei  u_ad U 'rgetDi   sir FilaSes(tgfal  y cr  d_r  l u ttdi   sir FilaSes(n
a}e  Sbaei  u_ad U 'rsetDi   sir s($di   sir stgfal  y crl u ttdi   sir sa=a$di   sir s(n
a}e  Sbaei  u_ad U 'rgetDi   sir s(tgfal  y cr  d_r  l u ttdi   sir s(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetMetrics($metricstgfal  y crl u ttmetrics =a$metrics(n
a}e  Sbaei  u_ad U 'rgetMetrics(tgfal  y cr  d_r  l u ttmetrics(n
a}e  Sbaei  u_ad U 'rsetPivytedAc  vityMetrics($pivytedAc  vityMetricstgfal  y crl u ttpivytedAc  vityMetricsa=a$pivytedAc  vityMetrics(n
a}e  Sbaei  u_ad U 'rgetPivytedAc  vityMetrics(tgfal  y cr  d_r  l u ttpivytedAc  vityMetrics(n
a}e  Sbaei  u_ad U 'rsetReachByFrequencyMetrics($reachByFrequencyMetricstgfal  y crl u ttreachByFrequencyMetricsa=a$reachByFrequencyMetrics(n
a}e  Sbaei  u_ad U 'rgetReachByFrequencyMetrics(tgfal  y cr  d_r  l u ttreachByFrequencyMetrics(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi Recipient (_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $deliveryTyp (n
aSbaei  $email(n
aSbaei  $kind(n
e  Sbaei  u_ad U 'rsetDeliveryTyp ($deliveryTyp tgfal  y crl u ttdeliveryTyp a=a$deliveryTyp (n
a}e  Sbaei  u_ad U 'rgetDeliveryTyp (tgfal  y cr  d_r  l u ttdeliveryTyp (n
a}e  Sbaei  u_ad U 'rsetEmail($emailtgfal  y crl u ttemaila=a$email(n
a}e  Sbaei  u_ad U 'rgetEmail(tgfal  y cr  d_r  l u ttemail(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi RegU 'r(_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $countryCode(n
aSbaei  $countryDarhar(n
aSbaei  $darhar(n
aSbaei  $kind(n
aSbaei  $iatg(n
aSbaei  $regU 'Code(n
e  Sbaei  u_ad U 'rsetC untryCode($countryCodetgfal  y crl u ttcountryCodeg= $countryCode(n
a}e  Sbaei  u_ad U 'rgetC untryCode(tgfal  y cr  d_r  l u ttcountryCode(n
a}e  Sbaei  u_ad U 'rsetC untryDarhar($countryDarhartgfal  y crl u ttcountryDarharg= $countryDarhar(n
a}e  Sbaei  u_ad U 'rgetC untryDarhar(tgfal  y cr  d_r  l u ttcountryDarhar(n
a}e  Sbaei  u_ad U 'rsetDarhar($darhartgfal  y crl u ttdarharg= $darhar(n
a}e  Sbaei  u_ad U 'rgetDarhar(tgfal  y cr  d_r  l u ttdarhar(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetNDI ($ietgtgfal  y crl u ttietg(= $ietg(n
a}e  Sbaei  u_ad U 'rgetNDI (tgfal  y cr  d_r  l u ttietg(n
a}e  Sbaei  u_ad U 'rsetRegU 'Code($regU 'Codetgfal  y crl u ttregU 'Codea=a$regU 'Code(n
a}e  Sbaei  u_ad U 'rgetRegU 'Code(tgfal  y cr  d_r  l u ttregU 'Code(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi RegU 'sListResponsCa(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'regU 's'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $kind(n
aSnyteFieta$regU 'sTyp d  'eeeu e_Mett g  (_in  Iriooi RegU ''(n
aSnyteFieta$regU 'sDataTyp d  'eal I'(n
e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetRegU 's($regU 'stgfal  y crl u ttregU 'sa=a$regU 's(n
a}e  Sbaei  u_ad U 'rgetRegU 's(tgfal  y cr  d_r  l u ttregU 's(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi RemarkeiooiListr(_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $accou har(n
aSbaei  $ac  vg(n
aSbaei  $adIr
nyoSeId(n
aSnyteFieta$adIr
nyoSeIdDi   sir an
"CTyp d  'eeeu e_Mett g  (_in  Iriooi Di   sir an
"C';  y
nyteFieta$adIr
nyoSeIdDi   sir an
"CDataTyp d  ''(n
aSbaei  $descrip  _a(n
aSbaei  $ir(n
aSbaei  $kind(n
aSbaei  $lifeSpae(n
aSnyteFieta$listPopula  _aRulCTyp d  'eeeu e_Mett g  (_in  Iriooi ListPopula  _aRulC';  y
nyteFieta$listPopula  _aRulCDataTyp d  ''(n
aSbaei  $listSizC(n
aSbaei  $listSourcC(n
aSbaei  $iatg(n
aSbaei  $subaccou har(n
e  Sbaei  u_ad U 'rsetAccou har($accou hartgfal  y crl u ttaccou harg= $accou hId(n
a}e  Sbaei  u_ad U 'rgetAccou hId(tgfal  y cr  d_r  l u ttaccou hId(n
a}e  Sbaei  u_ad U 'rsetAc  vg($ac  vgtgfal  y crl u ttac  vgg= $ac  vg(n
a}e  Sbaei  u_ad U 'rgetAc  vg(tgfal  y cr  d_r  l u ttac  vg(n
a}e  Sbaei  u_ad U 'rsetAdIr
nyoSeId($adIr
nyoSeIdtgfal  y crl u ttadvr
nyoSearg= $a Ir
nyoSeId(n
a}e  Sbaei  u_ad U 'rgetA Ir
nyoSear(tgfal  y cr  d_r  l u tta Ir
nyoSeId(n
a}e  Sbaei  u_ad U 'rsetAdIr
nyoSeIdDi   sir an
"C(eeeu e_Mett g  (_in  Iriooi Di   sir an
"Ca$adIr
nyoSeIdDi   sir an
"Ctgfal  y crl u ttadvr
nyoSearDi   sir an
"Ca=a$adIr
nyoSeIdDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rgetA Ir
nyoSearDi   sir an
"C(tgfal  y cr  d_r  l u ttadIr
nyoSeIdDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rsetDescrip  _a($descrip  _atgfal  y crl u ttdescrip  _aa=a$descrip  _a(n
a}e  Sbaei  u_ad U 'rgetDescrip  _a(tgfal  y cr  d_r  l u ttdescrip  _a(n
a}e  Sbaei  u_ad U 'rsetId($idtgfal  y crl u ttid Satid(n
a}e  Sbaei  u_ad U 'rgetId(tgfal  y cr  d_r  l u ttid(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetLifeSpae($lifeSpaetgfal  y crl u ttlifeSpae SatlifeSpae(n
a}e  Sbaei  u_ad U 'rgetLifeSpae(tgfal  y cr  d_r  l u ttlifeSpae(n
a}e  Sbaei  u_ad U 'rsetListPopula  _aRulC(eeeu e_Mett g  (_in  Iriooi ListPopula  _aRulCa$listPopula  _aRulCtgfal  y crl u ttlistPopula  _aRulCa=a$listPopula  _aRulC(n
a}e  Sbaei  u_ad U 'rgetListPopula  _aRulC(tgfal  y cr  d_r  l u ttlistPopula  _aRulC(n
a}e  Sbaei  u_ad U 'rsetListSizC($listSizCtgfal  y crl u ttlistSizCa= $listSizC(n
a}e  Sbaei  u_ad U 'rgetListSizC(tgfal  y cr  d_r  l u ttlistSizC(n
a}e  Sbaei  u_ad U 'rsetListSourcC($listSourcCtgfal  y crl u ttlistSourcCa= $listSourcC(n
a}e  Sbaei  u_ad U 'rgetListSourcC(tgfal  y cr  d_r  l u ttlistSourcC(n
a}e  Sbaei  u_ad U 'rsetNDI ($ietgtgfal  y crl u ttietg(= $ietg(n
a}e  Sbaei  u_ad U 'rgetNDI (tgfal  y cr  d_r  l u ttietg(n
a}e  Sbaei  u_ad U 'rsetSubaccou har($ ubaccou hartgfal  y crl u tttubaccou harg= $ ubaccou har(n
a}e  Sbaei  u_ad U 'rgetSubaccou har(tgfal  y cr  d_r  l ustttubaccou har(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi RemarkeiooiListShin a(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'shin dA Ir
nyoSears'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $kind(n
aSbaei  $remarkeiooiListar(n
aSbaei  $shin dAccou hars(n
aSbaei  $shin dA Ir
nyoSears(n
e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetRemarkeiooiListar($remarkeiooiListartgfal  y crl u ttremarkeiooiListara=a$remarkeiooiListar(n
a}e  Sbaei  u_ad U 'rgetRemarkeiooiListar(tgfal  y cr  d_r  l u ttremarkeiooiListar(n
a}e  Sbaei  u_ad U 'rsetShin dAccou hars($shin dAccou harstgfal  y crl u ttthin dAccou harsg= $ hin dAccou hars(n
a}e  Sbaei  u_ad U 'rgetShin dAccou hars(tgfal  y cr  d_r  l usttthin dAccou hars(n
a}e  Sbaei  u_ad U 'rsetShin dA Ir
nyoSears($shin dA Ir
nyoSearstgfal  y crl u ttthin dA Ir
nyoSearsg= $ hin dA Ir
nyoSears(n
a}e  Sbaei  u_ad U 'rgetShin dA Ir
nyoSears(tgfal  y cr  d_r  l usttthin dA Ir
nyoSears(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi RemarkeiooiListsListResponsCa(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'remarkeiooiLists'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $kind(n
aSbaei  $i(_SP p Tokee(n
aSnyteFieta$remarkeiooiListsTyp d  'eeeu e_Mett g  (_in  Iriooi RemarkeiooiList'(n
aSnyteFieta$remarkeiooiListsDataTyp d  'eal I'(n
e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetN(_SP p Tokee($i(_SP p Tokeetgfal  y crl u tti(_SP p Tokee(= $i(_SP p Tokee(n
a}e  Sbaei  u_ad U 'rgetN(_SP p Tokee(tgfal  y cr  d_r  l u tti(_SP p Tokee(n
a}e  Sbaei  u_ad U 'rsetRemarkeiooiLists($remarkeiooiListstgfal  y crl u ttremarkeiooiListsa=a$remarkeiooiLists(n
a}e  Sbaei  u_ad U 'rgetRemarkeiooiLists(tgfal  y cr  d_r  l u ttremarkeiooiLists(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi Re Irir(_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $accou har(n
aSnyteFieta$nriaSeiaTyp d  'eeeu e_Mett g  (_in  Iriooi Re IriCriaSeia'(n
aSnyteFieta$nriaSeiaDataTyp d  ''(n
aSnyteFieta$nrossDi   sir ReachCriaSeiaTyp d  'eeeu e_Mett g  (_in  Iriooi Re IriCrossDi   sir ReachCriaSeia'(n
aSnyteFieta$nrossDi   sir ReachCriaSeiaDataTyp d  ''(n
aSnyteFieta$deliveryTyp a=a'eeeu e_Mett g  (_in  Iriooi Re IriDelivery'(n
aSnyteFieta$deliveryDataTyp d  ''(n
aSbaei  $etag(n
aSbaei  $fileNetg(n
aSnyteFieta$floodlighhCriaSeiaTyp d  'eeeu e_Mett g  (_in  Iriooi Re IriFloodlighhCriaSeia'(n
aSnyteFieta$floodlighhCriaSeiaDataTyp d  ''(n
aSbaei  $format(n
aSbaei  $ir(n
aSbaei  $kind(n
aSbaei  $lastModifiedTitg(n
aSbaei  $natg(n
aSbaei  $ownerProfilear(n
aSnyteFieta$pathToConvetsir CriaSeiaTyp d  'eeeu e_Mett g  (_in  Iriooi Re IriPathToConvetsir CriaSeia'(n
aSnyteFieta$pathToConvetsir CriaSeiaDataTyp d  ''(n
aSnyteFieta$reachCriaSeiaTyp d  'eeeu e_Mett g  (_in  Iriooi Re IriReachCriaSeia'(n
aSnyteFieta$reachCriaSeiaDataTyp d  ''(n
aSnyteFieta$schedulCTyp d  'eeeu e_Mett g  (_in  Iriooi Re IriSchedulC'(n
aSnyteFieta$schedulCDataTyp d  ''(n
aSbaei  $tubAccou har(n
aSbaei  $typ (n
e  Sbaei  u_ad U 'rsetAccou har($accou hartgfal  y crl u ttaccou harg= $accou hId(n
a}e  Sbaei  u_ad U 'rgetAccou hId(tgfal  y cr  d_r  l u ttaccou hId(n
a}e  Sbaei  u_ad U 'rsetCriaSeia(eeeu e_Mett g  (_in  Iriooi Re IriCriaSeiaa$nriaSeiatgfal  y crl u ttnriaSeiag= $nriaSeia(n
a}e  Sbaei  u_ad U 'rgetCriaSeia(tgfal  y cr  d_r  l u ttnriaSeia(n
a}e  Sbaei  u_ad U 'rsetCrossDi   sir ReachCriaSeia(eeeu e_Mett g  (_in  Iriooi Re IriCrossDi   sir ReachCriaSeiaa$nrossDi   sir ReachCriaSeiatgfal  y crl u ttnrossDi   sir ReachCriaSeiaa=a$nrossDi   sir ReachCriaSeia(n
a}e  Sbaei  u_ad U 'rgetCrossDi   sir ReachCriaSeia(tgfal  y cr  d_r  l u ttnrossDi   sir ReachCriaSeia(n
a}e  Sbaei  u_ad U 'rsetDelivery(eeeu e_Mett g  (_in  Iriooi Re IriDeliverya$deliverytgfal  y crl u ttdelivery = $delivery(n
a}e  Sbaei  u_ad U 'rgetDelivery(tgfal  y cr  d_r  l u ttdelivery(n
a}e  Sbaei  u_ad U 'rsetEtag($etagtgfal  y crl u ttetag = $etag(n
a}e  Sbaei  u_ad U 'rgetEtag(tgfal  y cr  d_r  l u ttetag(n
a}e  Sbaei  u_ad U 'rsetFileNetg($fileNetgtgfal  y crl u ttfileNetg = $fileNetg(n
a}e  Sbaei  u_ad U 'rgetFileNetg(tgfal  y cr  d_r  l u ttfileNetg(n
a}e  Sbaei  u_ad U 'rseiFloodlighhCriaSeia(eeeu e_Mett g  (_in  Iriooi Re IriFloodlighhCriaSeiaa$floodlighhCriaSeiatgfal  y crl u ttfloodlighhCriaSeiaa=a$floodlighhCriaSeia(n
a}e  Sbaei  u_ad U 'rgetFloodlighhCriaSeia(tgfal  y cr  d_r  l u ttfloodlighhCriaSeia(n
a}e  Sbaei  u_ad U 'rseiFormat($formattgfal  y crl u ttformata=a$format(n
a}e  Sbaei  u_ad U 'rgetFormat(tgfal  y cr  d_r  l u ttformat(n
a}e  Sbaei  u_ad U 'rsetId($idtgfal  y crl u ttid Satid(n
a}e  Sbaei  u_ad U 'rgetId(tgfal  y cr  d_r  l u ttid(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetLastModifiedTitg($lastModifiedTitgtgfal  y crl u ttlastModifiedTitg SatlastModifiedTitg(n
a}e  Sbaei  u_ad U 'rgetLastModifiedTitg(tgfal  y cr  d_r  l u ttlastModifiedTitg(n
a}e  Sbaei  u_ad U 'rsetNDI ($ietgtgfal  y crl u ttietg(= $ietg(n
a}e  Sbaei  u_ad U 'rgetNDI (tgfal  y cr  d_r  l u ttietg(n
a}e  Sbaei  u_ad U 'rsetOwnerProfilear($ownerProfileartgfal  y crl u ttownerProfilear(= $ownerProfilear(n
a}e  Sbaei  u_ad U 'rgetOwnerProfilear(tgfal  y cr  d_r  l u ttownerProfilear(n
a}e  Sbaei  u_ad U 'rsetPathToConvetsir CriaSeia(eeeu e_Mett g  (_in  Iriooi Re IriPathToConvetsir CriaSeiaa$pathToConvetsir CriaSeiatgfal  y crl u ttpathToConvetsir CriaSeia(= $pathToConvetsir CriaSeia(n
a}e  Sbaei  u_ad U 'rgetPathToConvetsir CriaSeia(tgfal  y cr  d_r  l u ttpathToConvetsir CriaSeia(n
a}e  Sbaei  u_ad U 'rsetReachCriaSeia(eeeu e_Mett g  (_in  Iriooi Re IriReachCriaSeiaa$reachCriaSeiatgfal  y crl u ttreachCriaSeiaa=a$reachCriaSeia(n
a}e  Sbaei  u_ad U 'rgetReachCriaSeia(tgfal  y cr  d_r  l u ttreachCriaSeia(n
a}e  Sbaei  u_ad U 'rsetSchedulC(eeeu e_Mett g  (_in  Iriooi Re IriSchedulCa$schedulCtgfal  y crl u ttschedulCa=a$schedulC(n
a}e  Sbaei  u_ad U 'rgetSchedulC(tgfal  y cr  d_r  l u ttschedulC(n
a}e  Sbaei  u_ad U 'rsetSubAccou har($tubAccou hartgfal  y crl u ttsubAccou har = $tubAccou har(n
a}e  Sbaei  u_ad U 'rgetSubAccou har(tgfal  y cr  d_r  l u ttsubAccou har(n
a}e  Sbaei  u_ad U 'rsetTyp ($typ tgfal  y crl u tttyp a=a$typ (n
a}e  Sbaei  u_ad U 'rgetTyp (tgfal  y cr  d_r  l u tttyp (n
a}e}     _a eeeu e_Mett g  (_in  Iriooi Re IriCompatibleField  (_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'pivytedAc  vityMetrics'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSnyteFieta$di   sir FilaSesTyp d  'eeeu e_Mett g  (_in  Iriooi Di   sir '(n
aSnyteFieta$di   sir FilaSesDataTyp d  'eal I'(n
aSnyteFieta$di   sir sTyp d  'eeeu e_Mett g  (_in  Iriooi Di   sir '(n
aSnyteFieta$di   sir sDataTyp d  'eal I'(n
aSbaei  $kind(n
aSnyteFieta$metricsTyp d  'eeeu e_Mett g  (_in  Iriooi Metric'(n
aSnyteFieta$metricsDataTyp d  'eal I'(n
aSnyteFieta$pivytedAc  vityMetricsTyp d  'eeeu e_Mett g  (_in  Iriooi Metric'(n
aSnyteFieta$pivytedAc  vityMetricsDataTyp d  'eal I'(n
e  Sbaei  u_ad U 'rsetDi   sir FilaSes($di   sir FilaSestgfal  y crl u ttdi   sir FilaSesa=a$di   sir FilaSes(n
a}e  Sbaei  u_ad U 'rgetDi   sir FilaSes(tgfal  y cr  d_r  l u ttdi   sir FilaSes(n
a}e  Sbaei  u_ad U 'rsetDi   sir s($di   sir stgfal  y crl u ttdi   sir sa=a$di   sir s(n
a}e  Sbaei  u_ad U 'rgetDi   sir s(tgfal  y cr  d_r  l u ttdi   sir s(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetMetrics($metricstgfal  y crl u ttmetrics =a$metrics(n
a}e  Sbaei  u_ad U 'rgetMetrics(tgfal  y cr  d_r  l u ttmetrics(n
a}e  Sbaei  u_ad U 'rsetPivytedAc  vityMetrics($pivytedAc  vityMetricstgfal  y crl u ttpivytedAc  vityMetricsa=a$pivytedAc  vityMetrics(n
a}e  Sbaei  u_ad U 'rgetPivytedAc  vityMetrics(tgfal  y cr  d_r  l u ttpivytedAc  vityMetrics(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi Re IriCriaSeiaa(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'metricNDI s'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSnyteFieta$ac  vitiesTyp d  'eeeu e_Mett g  (_in  Iriooi Ac  vities'(n
aSnyteFieta$ac  vitiesDataTyp d  ''(n
aSnyteFieta$nustomRichMediaEventsTyp d  'eeeu e_Mett g  (_in  Iriooi CustomRichMediaEvents'(n
aSnyteFieta$nustomRichMediaEventsDataTyp d  ''(n
aSnyteFieta$dateRangCTyp d  'eeeu e_Mett g  (_in  Iriooi DateRangC'(n
aSnyteFieta$dateRangCDataTyp d  ''(n
aSnyteFieta$di   sir FilaSesTyp d  'eeeu e_Mett g  (_in  Iriooi Di   sir an
"C';  y
nyteFieta$di   sir FilaSesDataTyp d  'eal I'(n
aSnyteFieta$di   sir sTyp d  'eeeu e_Mett g  (_in  Iriooi SIriedDi   sir '(n
aSnyteFieta$di   sir sDataTyp d  'eal I'(n
aSbaei  $metricNDI s(n
e  Sbaei  u_ad U 'rsetAc  vities(eeeu e_Mett g  (_in  Iriooi Ac  vitiesa$ac  vitiestgfal  y crl u ttac  vities =a$ac  vities(n
a}e  Sbaei  u_ad U 'rgetAc  vities(tgfal  y cr  d_r  l u ttac  vities(n
a}e  Sbaei  u_ad U 'rsetCustomRichMediaEvents(eeeu e_Mett g  (_in  Iriooi CustomRichMediaEventsa$nustomRichMediaEventstgfal  y crl u ttnustomRichMediaEvents =a$nustomRichMediaEvents(n
a}e  Sbaei  u_ad U 'rgetCustomRichMediaEvents(tgfal  y cr  d_r  l u ttnustomRichMediaEvents(n
a}e  Sbaei  u_ad U 'rsetDateRangC(eeeu e_Mett g  (_in  Iriooi DateRangCa$dateRangCtgfal  y crl u ttdateRangCa=a$dateRangC(n
a}e  Sbaei  u_ad U 'rgetDateRangC(tgfal  y cr  d_r  l u ttdateRangC(n
a}e  Sbaei  u_ad U 'rsetDi   sir FilaSes($di   sir FilaSestgfal  y crl u ttdi   sir FilaSesa=a$di   sir FilaSes(n
a}e  Sbaei  u_ad U 'rgetDi   sir FilaSes(tgfal  y cr  d_r  l u ttdi   sir FilaSes(n
a}e  Sbaei  u_ad U 'rsetDi   sir s($di   sir stgfal  y crl u ttdi   sir sa=a$di   sir s(n
a}e  Sbaei  u_ad U 'rgetDi   sir s(tgfal  y cr  d_r  l u ttdi   sir s(n
a}e  Sbaei  u_ad U 'rsetMetricNDI s($metricNDI stgfal  y crl u ttmetricNDI s =a$metricNDI s(n
a}e  Sbaei  u_ad U 'rgetMetricNDI s(tgfal  y cr  d_r  l u ttmetricNDI s(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi Re IriCrossDi   sir ReachCriaSeiaa(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'ovetlapMetricNDI s'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSnyteFieta$breakdow Typ d  'eeeu e_Mett g  (_in  Iriooi SIriedDi   sir '(n
aSnyteFieta$breakdow DataTyp d  'eal I'(n
aSnyteFieta$dateRangCTyp d  'eeeu e_Mett g  (_in  Iriooi DateRangC'(n
aSnyteFieta$dateRangCDataTyp d  ''(n
aSbaei  $di   sir (n
aSnyteFieta$di   sir FilaSesTyp d  'eeeu e_Mett g  (_in  Iriooi Di   sir an
"C';  y
nyteFieta$di   sir FilaSesDataTyp d  'eal I'(n
aSbaei  $metricNDI s(n
aSbaei  $ovetlapMetricNDI s(n
aSbaei  $pivyted(n
e  Sbaei  u_ad U 'rsetBreakdow ($breakdow tgfal  y crl u ttbreakdow  =a$breakdow (n
a}e  Sbaei  u_ad U 'rgetBreakdow (tgfal  y cr  d_r  l u ttbreakdow (n
a}e  Sbaei  u_ad U 'rsetDateRangC(eeeu e_Mett g  (_in  Iriooi DateRangCa$dateRangCtgfal  y crl u ttdateRangCa=a$dateRangC(n
a}e  Sbaei  u_ad U 'rgetDateRangC(tgfal  y cr  d_r  l u ttdateRangC(n
a}e  Sbaei  u_ad U 'rsetDi   sir ($di   sir tgfal  y crl u ttdi   sir a=a$di   sir (n
a}e  Sbaei  u_ad U 'rgetDi   sir (tgfal  y cr  d_r  l u ttdi   sir (n
a}e  Sbaei  u_ad U 'rsetDi   sir FilaSes($di   sir FilaSestgfal  y crl u ttdi   sir FilaSesa=a$di   sir FilaSes(n
a}e  Sbaei  u_ad U 'rgetDi   sir FilaSes(tgfal  y cr  d_r  l u ttdi   sir FilaSes(n
a}e  Sbaei  u_ad U 'rsetMetricNDI s($metricNDI stgfal  y crl u ttmetricNDI s =a$metricNDI s(n
a}e  Sbaei  u_ad U 'rgetMetricNDI s(tgfal  y cr  d_r  l u ttmetricNDI s(n
a}e  Sbaei  u_ad U 'rsetOvetlapMetricNDI s($ovetlapMetricNDI stgfal  y crl u ttovetlapMetricNDI s =a$ovetlapMetricNDI s(n
a}e  Sbaei  u_ad U 'rgetOvetlapMetricNDI s(tgfal  y cr  d_r  l u ttovetlapMetricNDI s(n
a}e  Sbaei  u_ad U 'rsetPivyted($pivytedtgfal  y crl u ttpivyted = $pivyted(n
a}e  Sbaei  u_ad U 'rgetPivyted(tgfal  y cr  d_r  l u ttpivyted(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi Re IriDeliverya(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'recipients'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $emailOwner(n
aSbaei  $emailOwnerDeliveryTyp (n
aSbaei  $I ssagg(n
aSnyteFieta$recipientsTyp d  'eeeu e_Mett g  (_in  Iriooi Recipient'(n
aSnyteFieta$recipientsDataTyp d  'eal I'(n
e  Sbaei  u_ad U 'rsetEmailOwner($emailOwnertgfal  y crl u ttemailOwner = $emailOwner(n
a}e  Sbaei  u_ad U 'rgetEmailOwner(tgfal  y cr  d_r  l u ttemailOwner(n
a}e  Sbaei  u_ad U 'rsetEmailOwnerDeliveryTyp ($emailOwnerDeliveryTyp tgfal  y crl u ttemailOwnerDeliveryTyp  = $emailOwnerDeliveryTyp (n
a}e  Sbaei  u_ad U 'rgetEmailOwnerDeliveryTyp (tgfal  y cr  d_r  l u ttemailOwnerDeliveryTyp (n
a}e  Sbaei  u_ad U 'rsetMessagg($I ssaggtgfal  y crl u ttmessagg =a$messagg(n
a}e  Sbaei  u_ad U 'rgetMessagg(tgfal  y cr  d_r  l u ttmessagg(n
a}e  Sbaei  u_ad U 'rsetRecipients($recipientstgfal  y crl u ttrecipients =a$recipients(n
a}e  Sbaei  u_ad U 'rgetRecipients(tgfal  y cr  d_r  l u ttrecipients(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi Re IriFloodlighhCriaSeiaa(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'metricNDI s'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSnyteFieta$nustomRichMediaEventsTyp d  'eeeu e_Mett g  (_in  Iriooi Di   sir an
"C';  y
nyteFieta$nustomRichMediaEventsDataTyp d  'eal I'(n
aSnyteFieta$dateRangCTyp d  'eeeu e_Mett g  (_in  Iriooi DateRangC'(n
aSnyteFieta$dateRangCDataTyp d  ''(n
aSnyteFieta$di   sir FilaSesTyp d  'eeeu e_Mett g  (_in  Iriooi Di   sir an
"C';  y
nyteFieta$di   sir FilaSesDataTyp d  'eal I'(n
aSnyteFieta$di   sir sTyp d  'eeeu e_Mett g  (_in  Iriooi SIriedDi   sir '(n
aSnyteFieta$di   sir sDataTyp d  'eal I'(n
aSnyteFieta$floodlighhConfigIdTyp d  'eeeu e_Mett g  (_in  Iriooi Di   sir an
"C';  y
nyteFieta$floodlighhConfigIdDataTyp d  ''(n
aSbaei  $metricNDI s(n
aSnyteFieta$re IriPropr
nyesTyp d  'eeeu e_Mett g  (_in  Iriooi Re IriFloodlighhCriaSeiaRe IriPropr
nyes'(n
aSnyteFieta$re IriPropr
nyesDataTyp d  ''(n
e  Sbaei  u_ad U 'rsetCustomRichMediaEvents($nustomRichMediaEventstgfal  y crl u ttnustomRichMediaEvents =a$nustomRichMediaEvents(n
a}e  Sbaei  u_ad U 'rgetCustomRichMediaEvents(tgfal  y cr  d_r  l u ttnustomRichMediaEvents(n
a}e  Sbaei  u_ad U 'rsetDateRangC(eeeu e_Mett g  (_in  Iriooi DateRangCa$dateRangCtgfal  y crl u ttdateRangCa=a$dateRangC(n
a}e  Sbaei  u_ad U 'rgetDateRangC(tgfal  y cr  d_r  l u ttdateRangC(n
a}e  Sbaei  u_ad U 'rsetDi   sir FilaSes($di   sir FilaSestgfal  y crl u ttdi   sir FilaSesa=a$di   sir FilaSes(n
a}e  Sbaei  u_ad U 'rgetDi   sir FilaSes(tgfal  y cr  d_r  l u ttdi   sir FilaSes(n
a}e  Sbaei  u_ad U 'rsetDi   sir s($di   sir stgfal  y crl u ttdi   sir sa=a$di   sir s(n
a}e  Sbaei  u_ad U 'rgetDi   sir s(tgfal  y cr  d_r  l u ttdi   sir s(n
a}e  Sbaei  u_ad U 'rsetFloodlighhConfigId(eeeu e_Mett g  (_in  Iriooi Di   sir an
"Ca$floodlighhConfigIdtgfal  y crl u ttfloodlighhConfigIda=a$floodlighhConfigId(n
a}e  Sbaei  u_ad U 'rgetFloodlighhConfigId(tgfal  y cr  d_r  l u ttfloodlighhConfigId(n
a}e  Sbaei  u_ad U 'rsetMetricNDI s($metricNDI stgfal  y crl u ttmetricNDI s =a$metricNDI s(n
a}e  Sbaei  u_ad U 'rgetMetricNDI s(tgfal  y cr  d_r  l u ttmetricNDI s(n
a}e  Sbaei  u_ad U 'rsetRe IriPropr
nyes(eeeu e_Mett g  (_in  Iriooi Re IriFloodlighhCriaSeiaRe IriPropr
nyesa$re IriPropr
nyestgfal  y crl u ttre IriPropr
nyesa=a$re IriPropr
nyes(n
a}e  Sbaei  u_ad U 'rgetRe IriPropr
nyes(tgfal  y cr  d_r  l u ttre IriPropr
nyes(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi Re IriFloodlighhCriaSeiaRe IriPropr
nyesa(_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $includeAttribuietIPConvetsir s(n
aSbaei  $includeUnattribuietCookieConvetsir s(n
aSbaei  $includeUnattribuietIPConvetsir s(n
e  Sbaei  u_ad U 'rsetIncludeAttribuietIPConvetsir s($includeAttribuietIPConvetsir stgfal  y crl u ttincludeAttribuietIPConvetsir sa=a$includeAttribuietIPConvetsir s(n
a}e  Sbaei  u_ad U 'rgetIncludeAttribuietIPConvetsir s(tgfal  y cr  d_r  l u ttincludeAttribuietIPConvetsir s(n
a}e  Sbaei  u_ad U 'rsetIncludeUnattribuietCookieConvetsir s($includeUnattribuietCookieConvetsir stgfal  y crl u ttincludeUnattribuietCookieConvetsir sa=a$includeUnattribuietCookieConvetsir s(n
a}e  Sbaei  u_ad U 'rgetIncludeUnattribuietCookieConvetsir s(tgfal  y cr  d_r  l u ttincludeUnattribuietCookieConvetsir s(n
a}e  Sbaei  u_ad U 'rsetIncludeUnattribuietIPConvetsir s($includeUnattribuietIPConvetsir stgfal  y crl u ttincludeUnattribuietIPConvetsir sa=a$includeUnattribuietIPConvetsir s(n
a}e  Sbaei  u_ad U 'rgetIncludeUnattribuietIPConvetsir s(tgfal  y cr  d_r  l u ttincludeUnattribuietIPConvetsir s(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi Re IriLista(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'iaSms'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $etag(n
aSnyteFieta$iaSmsTyp d  'eeeu e_Mett g  (_in  Iriooi Re Iri'(n
aSnyteFieta$iaSmsDataTyp d  'eal I'(n
aSbaei  $kind(n
aSbaei  $i(_SP p Tokee(n
e  Sbaei  u_ad U 'rsetEtag($etagtgfal  y crl u ttetag = $etag(n
a}e  Sbaei  u_ad U 'rgetEtag(tgfal  y cr  d_r  l u ttetag(n
a}e  Sbaei  u_ad U 'rsetIaSms($iaSmstgfal  y crl u ttiaSmsa=a$iaSms(n
a}e  Sbaei  u_ad U 'rgetIaSms(tgfal  y cr  d_r  l u ttiaSms(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetN(_SP p Tokee($i(_SP p Tokeetgfal  y crl u tti(_SP p Tokee(= $i(_SP p Tokee(n
a}e  Sbaei  u_ad U 'rgetN(_SP p Tokee(tgfal  y cr  d_r  l u tti(_SP p Tokee(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi Re IriPathToConvetsir CriaSeiaa(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'pr
I
aSea   _aDi   sir s'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSnyteFieta$ac  vityFilaSesTyp d  'eeeu e_Mett g  (_in  Iriooi Di   sir an
"C';  y
nyteFieta$ac  vityFilaSesDataTyp d  'eal I'(n
aSnyteFieta$convetsir Di   sir sTyp d  'eeeu e_Mett g  (_in  Iriooi SIriedDi   sir '(n
aSnyteFieta$convetsir Di   sir sDataTyp d  'eal I'(n
aSnyteFieta$customFloodlighhVaeiablesTyp d  'eeeu e_Mett g  (_in  Iriooi SIriedDi   sir '(n
aSnyteFieta$customFloodlighhVaeiablesDataTyp d  'eal I'(n
aSnyteFieta$customRichMediaEventsTyp d  'eeeu e_Mett g  (_in  Iriooi Di   sir an
"C';  y
nyteFieta$nustomRichMediaEventsDataTyp d  'eal I'(n
aSnyteFieta$dateRangCTyp d  'eeeu e_Mett g  (_in  Iriooi DateRangC'(n
aSnyteFieta$dateRangCDataTyp d  ''(n
aSnyteFieta$floodlighhConfigIdTyp d  'eeeu e_Mett g  (_in  Iriooi Di   sir an
"C';  y
nyteFieta$floodlighhConfigIdDataTyp d  ''(n
aSbaei  $metricNDI s(n
aSnyteFieta$pr
I
aSea   _aDi   sir sTyp d  'eeeu e_Mett g  (_in  Iriooi SIriedDi   sir '(n
aSnyteFieta$pr
I
aSea   _aDi   sir sDataTyp d  'eal I'(n
aSnyteFieta$re IriPropr
nyesTyp d  'eeeu e_Mett g  (_in  Iriooi Re IriPathToConvetsir CriaSeiaRe IriPropr
nyes'(n
aSnyteFieta$re IriPropr
nyesDataTyp d  ''(n
e  Sbaei  u_ad U 'rsetAc  vityFilaSes($ac  vityFilaSestgfal  y crl u ttac  vityFilaSes =a$ac  vityFilaSes(n
a}e  Sbaei  u_ad U 'rgetAc  vityFilaSes(tgfal  y cr  d_r  l u ttac  vityFilaSes(n
a}e  Sbaei  u_ad U 'rsetConvetsir Di   sir s($convetsir Di   sir stgfal  y crl u ttnonvetsir Di   sir s =a$nonvetsir Di   sir s(n
a}e  Sbaei  u_ad U 'rgetConvetsir Di   sir s(tgfal  y cr  d_r  l u ttnonvetsir Di   sir s(n
a}e  Sbaei  u_ad U 'rsetCustomFloodlighhVaeiables($customFloodlighhVaeiablestgfal  y crl u ttnustomFloodlighhVaeiables =a$customFloodlighhVaeiables(n
a}e  Sbaei  u_ad U 'rgetCustomFloodlighhVaeiables(tgfal  y cr  d_r  l u ttnustomFloodlighhVaeiables(n
a}e  Sbaei  u_ad U 'rsetCustomRichMediaEvents($nustomRichMediaEventstgfal  y crl u ttnustomRichMediaEvents =a$nustomRichMediaEvents(n
a}e  Sbaei  u_ad U 'rgetCustomRichMediaEvents(tgfal  y cr  d_r  l u ttnustomRichMediaEvents(n
a}e  Sbaei  u_ad U 'rsetDateRangC(eeeu e_Mett g  (_in  Iriooi DateRangCa$dateRangCtgfal  y crl u ttdateRangCa=a$dateRangC(n
a}e  Sbaei  u_ad U 'rgetDateRangC(tgfal  y cr  d_r  l u ttdateRangC(n
a}e  Sbaei  u_ad U 'rsetFloodlighhConfigId(eeeu e_Mett g  (_in  Iriooi Di   sir an
"Ca$floodlighhConfigIdtgfal  y crl u ttfloodlighhConfigIda=a$floodlighhConfigId(n
a}e  Sbaei  u_ad U 'rgetFloodlighhConfigId(tgfal  y cr  d_r  l u ttfloodlighhConfigId(n
a}e  Sbaei  u_ad U 'rsetMetricNDI s($metricNDI stgfal  y crl u ttmetricNDI s =a$metricNDI s(n
a}e  Sbaei  u_ad U 'rgetMetricNDI s(tgfal  y cr  d_r  l u ttmetricNDI s(n
a}e  Sbaei  u_ad U 'rsetPr
I
aSea   _aDi   sir s($pr
I
aSea   _aDi   sir stgfal  y crl u ttpr
I
aSea   _aDi   sir s =a$pr
I
aSea   _aDi   sir s(n
a}e  Sbaei  u_ad U 'rgetPr
I
aSea   _aDi   sir s(tgfal  y cr  d_r  l u ttpr
I
aSea   _aDi   sir s(n
a}e  Sbaei  u_ad U 'rsetRe IriPropr
nyes(eeeu e_Mett g  (_in  Iriooi Re IriPathToConvetsir CriaSeiaRe IriPropr
nyesa$re IriPropr
nyestgfal  y crl u ttre IriPropr
nyesa=a$re IriPropr
nyes(n
a}e  Sbaei  u_ad U 'rgetRe IriPropr
nyes(tgfal  y cr  d_r  l u ttre IriPropr
nyes(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi Re IriPathToConvetsir CriaSeiaRe IriPropr
nyesa(_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $cli ksLookbackWindow(n
aSbaei  $impressir sLookbackWindow(n
aSbaei  $includeAttribuietIPConvetsir s(n
aSbaei  $includeUnattribuietCookieConvetsir s(n
aSbaei  $includeUnattribuietIPConvetsir s(n
aSbaei  $maximumCei kI
aSea   _as(n
aSbaei  $maximumImpressir I
aSea   _as(n
aSbaei  $maximumI
aSea   _aGap(n
aSbaei  $pivytO I
aSea   _aPath(n
e  Sbaei  u_ad U 'rsetCli ksLookbackWindow($cli ksLookbackWindowtgfal  y crl u ttnli ksLookbackWindow =a$nli ksLookbackWindow(n
a}e  Sbaei  u_ad U 'rgetCli ksLookbackWindow(tgfal  y cr  d_r  l u ttnli ksLookbackWindow(n
a}e  Sbaei  u_ad U 'rsetImpressir sLookbackWindow($impressir sLookbackWindowtgfal  y crl u ttimpressir sLookbackWindowa=a$impressir sLookbackWindow(n
a}e  Sbaei  u_ad U 'rgetImpressir sLookbackWindow(tgfal  y cr  d_r  l u ttimpressir sLookbackWindow(n
a}e  Sbaei  u_ad U 'rsetIncludeAttribuietIPConvetsir s($includeAttribuietIPConvetsir stgfal  y crl u ttincludeAttribuietIPConvetsir sa=a$includeAttribuietIPConvetsir s(n
a}e  Sbaei  u_ad U 'rgetIncludeAttribuietIPConvetsir s(tgfal  y cr  d_r  l u ttincludeAttribuietIPConvetsir s(n
a}e  Sbaei  u_ad U 'rsetIncludeUnattribuietCookieConvetsir s($includeUnattribuietCookieConvetsir stgfal  y crl u ttincludeUnattribuietCookieConvetsir sa=a$includeUnattribuietCookieConvetsir s(n
a}e  Sbaei  u_ad U 'rgetIncludeUnattribuietCookieConvetsir s(tgfal  y cr  d_r  l u ttincludeUnattribuietCookieConvetsir s(n
a}e  Sbaei  u_ad U 'rsetIncludeUnattribuietIPConvetsir s($includeUnattribuietIPConvetsir stgfal  y crl u ttincludeUnattribuietIPConvetsir sa=a$includeUnattribuietIPConvetsir s(n
a}e  Sbaei  u_ad U 'rgetIncludeUnattribuietIPConvetsir s(tgfal  y cr  d_r  l u ttincludeUnattribuietIPConvetsir s(n
a}e  Sbaei  u_ad U 'rsetMaximumCei kI
aSea   _as($maximumCei kI
aSea   _astgfal  y crl u ttmaximumCei kI
aSea   _as =a$maximumCei kI
aSea   _as(n
a}e  Sbaei  u_ad U 'rgetMaximumCei kI
aSea   _as(tgfal  y cr  d_r  l u ttmaximumCei kI
aSea   _as(n
a}e  Sbaei  u_ad U 'rsetMaximumImpressir I
aSea   _as($maximumImpressir I
aSea   _astgfal  y crl u ttmaximumImpressir I
aSea   _as =a$maximumImpressir I
aSea   _as(n
a}e  Sbaei  u_ad U 'rgetMaximumImpressir I
aSea   _as(tgfal  y cr  d_r  l u ttmaximumImpressir I
aSea   _as(n
a}e  Sbaei  u_ad U 'rsetMaximumI
aSea   _aGap($maximumI
aSea   _aGaptgfal  y crl u ttmaximumI
aSea   _aGap =a$maximumI
aSea   _aGap(n
a}e  Sbaei  u_ad U 'rgetMaximumI
aSea   _aGap(tgfal  y cr  d_r  l u ttmaximumI
aSea   _aGap(n
a}e  Sbaei  u_ad U 'rsetPivytO I
aSea   _aPath($pivytO I
aSea   _aPathtgfal  y crl u ttpivytO I
aSea   _aPath =a$pivytO I
aSea   _aPath(n
a}e  Sbaei  u_ad U 'rgetPivytO I
aSea   _aPath(tgfal  y cr  d_r  l u ttpivytO I
aSea   _aPath(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi Re IriReachCriaSeiaa(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'reachByFrequencyMetricNDI s'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSnyteFieta$a   vitiesTyp d  'eeeu e_Mett g  (_in  Iriooi Ac  vities'(n
aSnyteFieta$ac  vitiesDataTyp d  ''(n
aSnyteFieta$nustomRichMediaEventsTyp d  'eeeu e_Mett g  (_in  Iriooi CustomRichMediaEvents'(n
aSnyteFieta$nustomRichMediaEventsDataTyp d  ''(n
aSnyteFieta$dateRangCTyp d  'eeeu e_Mett g  (_in  Iriooi DateRangC'(n
aSnyteFieta$dateRangCDataTyp d  ''(n
aSnyteFieta$di   sir FilaSesTyp d  'eeeu e_Mett g  (_in  Iriooi Di   sir an
"C';  y
nyteFieta$di   sir FilaSesDataTyp d  'eal I'(n
aSnyteFieta$di   sir sTyp d  'eeeu e_Mett g  (_in  Iriooi SIriedDi   sir '(n
aSnyteFieta$di   sir sDataTyp d  'eal I'(n
aSbaei  $enableAllDi   sir Combina  _as(n
aSbaei  $metricNDI s(n
aSbaei  $reachByFrequencyMetricNDI s(n
e  Sbaei  u_ad U 'rsetAc  vityes(eeeu e_Mett g  (_in  Iriooi Ac  vityesa$ac  vitiestgfal  y crl u ttac  vities =a$ac  vities(n
a}e  Sbaei  u_ad U 'rgetAc  vities(tgfal  y cr  d_r  l u ttac  vities(n
a}e  Sbaei  u_ad U 'rsetCustomRichMediaEvents(eeeu e_Mett g  (_in  Iriooi CustomRichMediaEventsa$nustomRichMediaEventstgfal  y crl u ttnustomRichMediaEvents =a$nustomRichMediaEvents(n
a}e  Sbaei  u_ad U 'rgetCustomRichMediaEvents(tgfal  y cr  d_r  l u ttnustomRichMediaEvents(n
a}e  Sbaei  u_ad U 'rsetDateRangC(eeeu e_Mett g  (_in  Iriooi DateRangCa$dateRangCtgfal  y crl u ttdateRangCa=a$dateRangC(n
a}e  Sbaei  u_ad U 'rgetDateRangC(tgfal  y cr  d_r  l u ttdateRangC(n
a}e  Sbaei  u_ad U 'rsetDi   sir FilaSes($di   sir FilaSestgfal  y crl u ttdi   sir FilaSesa=a$di   sir FilaSes(n
a}e  Sbaei  u_ad U 'rgetDi   sir FilaSes(tgfal  y cr  d_r  l u ttdi   sir FilaSes(n
a}e  Sbaei  u_ad U 'rsetDi   sir s($di   sir stgfal  y crl u ttdi   sir sa=a$di   sir s(n
a}e  Sbaei  u_ad U 'rgetDi   sir s(tgfal  y cr  d_r  l u ttdi   sir s(n
a}e  Sbaei  u_ad U 'rsetEnableAllDi   sir Combina  _as($enableAllDi   sir Combina  _astgfal  y crl u ttenableAllDi   sir Combina  _asa=a$enableAllDi   sir Combina  _as(n
a}e  Sbaei  u_ad U 'rgetEnableAllDi   sir Combina  _as(tgfal  y cr  d_r  l u ttenableAllDi   sir Combina  _as(n
a}e  Sbaei  u_ad U 'rsetMetricNDI s($metricNDI stgfal  y crl u ttmetricNDI s =a$metricNDI s(n
a}e  Sbaei  u_ad U 'rgetMetricNDI s(tgfal  y cr  d_r  l u ttmetricNDI s(n
a}e  Sbaei  u_ad U 'rsetReachByFrequencyMetricNDI s($reachByFrequencyMetricNDI stgfal  y crl u ttreachByFrequencyMetricNDI sa=a$reachByFrequencyMetricNDI s(n
a}e  Sbaei  u_ad U 'rgetReachByFrequencyMetricNDI s(tgfal  y cr  d_r  l u ttreachByFrequencyMetricNDI s(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi Re IriSchedulCa(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'repeatsOnWeekDays'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $ac  v (n
aSbaei  $every(n
aSbaei  $expira  _aDate(n
aSbaei  $repeats(n
aSbaei  $repeatsOnWeekDays(n
aSbaei  $runsOnDayOfMonth(n
aSbaei  $startDate(n
e  Sbaei  u_ad U 'rsetAc  vg($ac  vgtgfal  y crl u ttac  vgg= $ac  vg(n
a}e  Sbaei  u_ad U 'rgetAc  vg(tgfal  y cr  d_r  l u ttac  vg(n
a}e  Sbaei  u_ad U 'rsetEvery($everytgfal  y crl u ttevery = $every(n
a}e  Sbaei  u_ad U 'rgetEvery(tgfal  y cr  d_r  l u ttevery(n
a}e  Sbaei  u_ad U 'rsetExpira  _aDate($expira  _aDatetgfal  y crl u ttexpira  _aDate = $expira  _aDate(n
a}e  Sbaei  u_ad U 'rgetExpira  _aDate(tgfal  y cr  d_r  l u ttexpira  _aDate(n
a}e  Sbaei  u_ad U 'rsetRe eats($repeatstgfal  y crl u ttrepeatsa=a$repeats(n
a}e  Sbaei  u_ad U 'rgetRe eats(tgfal  y cr  d_r  l u ttrepeats(n
a}e  Sbaei  u_ad U 'rsetRe eatsOnWeekDays($repeatsOnWeekDaystgfal  y crl u ttrepeatsOnWeekDaysa=a$repeatsOnWeekDays(n
a}e  Sbaei  u_ad U 'rgetRe eatsOnWeekDays(tgfal  y cr  d_r  l u ttrepeatsOnWeekDays(n
a}e  Sbaei  u_ad U 'rsetRunsOnDayOfMonth($runsOnDayOfMonthtgfal  y crl u ttrunsOnDayOfMontha=a$runsOnDayOfMonth(n
a}e  Sbaei  u_ad U 'rgetRunsOnDayOfMonth(tgfal  y cr  d_r  l u ttrunsOnDayOfMonth(n
a}e  Sbaei  u_ad U 'rsetStartDate($startDatetgfal  y crl u ttstartDatea=a$startDate(n
a}e  Sbaei  u_ad U 'rgetStartDate(tgfal  y cr  d_r  l u ttstartDate(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi Re IrisConfigura  _aa(_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $exposureToConvetsir Enabled(n
aSnyteFieta$lookbackConfigura  _aTyp d  'eeeu e_Mett g  (_in  Iriooi LookbackConfigura  _a'(n
aSnyteFieta$lookbackConfigura  _aDataTyp d  ''(n
aSbaei  $repIriGenera  _aTi  Zonear(n
e  Sbaei  u_ad U 'rsetExposureToConvetsir Enabled($exposureToConvetsir Enabledtgfal  y crl u ttexposureToConvetsir Enabled = $exposureToConvetsir Enabled(n
a}e  Sbaei  u_ad U 'rgetExposureToConvetsir Enabled(tgfal  y cr  d_r  l u ttexposureToConvetsir Enabled(n
a}e  Sbaei  u_ad U 'rsetLookbackConfigura  _a(eeeu e_Mett g  (_in  Iriooi LookbackConfigura  _aa$lookbackConfigura  _atgfal  y crl u ttlookbackConfigura  _a = $lookbackConfigura  _a(n
a}e  Sbaei  u_ad U 'rgetLookbackConfigura  _a(tgfal  y cr  d_r  l u ttlookbackConfigura  _a(n
a}e  Sbaei  u_ad U 'rsetRe IriGenera  _aTi  Zonear($repIriGenera  _aTi  Zoneartgfal  y crl u ttrepIriGenera  _aTi  Zonear = $repIriGenera  _aTi  Zonear(n
a}e  Sbaei  u_ad U 'rgetRe IriGenera  _aTi  Zonear(tgfal  y cr  d_r  l u ttrepIriGenera  _aTi  Zonear(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi RichMediaExitOvetridCa(_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $nustomExitUrl(n
aSbaei  $exihar(n
aSbaei  $useCustomExitUrl(n
e  Sbaei  u_ad U 'rsetCustomExitUrl($nustomExitUrltgfal  y crl u ttnustomExitUrl =a$nustomExitUrl(n
a}e  Sbaei  u_ad U 'rgetCustomExitUrl(tgfal  y cr  d_r  l u ttnustomExitUrl(n
a}e  Sbaei  u_ad U 'rsetExihar($exihartgfal  y crl u ttexihar = $exihar(n
a}e  Sbaei  u_ad U 'rgetExihar(tgfal  y cr  d_r  l u ttexihar(n
a}e  Sbaei  u_ad U 'rsetUseCustomExitUrl($useCustomExitUrltgfal  y crl u ttuseCustomExitUrl = $useCustomExitUrl(n
a}e  Sbaei  u_ad U 'rgetUseCustomExitUrl(tgfal  y cr  d_r  l u ttuseCustomExitUrl(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi SitCa(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'sitCContac s'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $accou har(n
aSbaei  $approver(n
aSbaei  $direFiorySitCar(n
aSnyteFieta$direFiorySitCarDi   sir an
"CTyp d  'eeeu e_Mett g  (_in  Iriooi Di   sir an
"C';  y
nyteFieta$direFiorySitCarDi   sir an
"CDataTyp d  ''(n
aSbaei  $ir(n
aSnyteFieta$irDi   sir an
"CTyp d  'eeeu e_Mett g  (_in  Iriooi Di   sir an
"C';  y
nyteFieta$irDi   sir an
"CDataTyp d  ''(n
aSbaei  $keyNDI (n
aSbaei  $kind(n
aSbaei  $iDI (n
aSnyteFieta$sitCContac sTyp d  'eeeu e_Mett g  (_in  Iriooi SitCContac ';  y
nyteFieta$sitCContac sDataTyp d  'eal I'(n
aSnyteFieta$sitCSetiooisTyp d  'eeeu e_Mett g  (_in  Iriooi SitCSetioois'(n
aSnyteFieta$sitCSetiooisDataTyp d  ''(n
aSbaei  $tubaccou har(n
e  Sbaei  u_ad U 'rsetAccou har($accou hartgfal  y crl u ttaccou harg= $accou hId(n
a}e  Sbaei  u_ad U 'rgetAccou hId(tgfal  y cr  d_r  l u ttaccou hId(n
a}e  Sbaei  u_ad U 'rsetApprover($approvertgfal  y crl u ttapproverg= $approver(n
a}e  Sbaei  u_ad U 'rgetApprover(tgfal  y cr  d_r  l u ttapprover(n
a}e  Sbaei  u_ad U 'rsetDireFiorySitCar($direFiorySitCartgfal  y crl u ttdireFiorySitCar = $direFiorySitCar(n
a}e  Sbaei  u_ad U 'rgetDireFiorySitCar(tgfal  y cr  d_r  l u ttdireFiorySitCar(n
a}e  Sbaei  u_ad U 'rsetDireFiorySitCarDi   sir an
"C(eeeu e_Mett g  (_in  Iriooi Di   sir an
"Ca$direFiorySitCarDi   sir an
"Ctgfal  y crl u ttdireFiorySitCarDi   sir an
"Ca= $direFiorySitCarDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rgetDireFiorySitCarDi   sir an
"C(tgfal  y cr  d_r  l u ttdireFiorySitCarDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rsetId($idtgfal  y crl u ttid Satid(n
a}e  Sbaei  u_ad U 'rgetId(tgfal  y cr  d_r  l u ttid(n
a}e  Sbaei  u_ad U 'rsetarDi   sir an
"C(eeeu e_Mett g  (_in  Iriooi Di   sir an
"Ca$irDi   sir an
"Ctgfal  y crl u ttidDi   sir an
"Ca= $idDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rgetIdDi   sir an
"C(tgfal  y cr  d_r  l u ttidDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rsetKeyNDI ($keyNDI tgfal  y crl u ttkeyNDI a= $keyNDI (n
a}e  Sbaei  u_ad U 'rgetKeyNDI (tgfal  y cr  d_r  l u ttkeyNDI (n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetNaI ($ietgtgfal  y crl u ttietg(= $ietg(n
a}e  Sbaei  u_ad U 'rgetNDI (tgfal  y cr  d_r  l u ttietg(n
a}e  Sbaei  u_ad U 'rsetSitCContac s($sitCContac stgfal  y crl u ttsitCContac sa=a$sitCContac s(n
a}e  Sbaei  u_ad U 'rgetSitCContac s(tgfal  y cr  d_r  l u ttsitCContac s(n
a}e  Sbaei  u_ad U 'rsetSitCSetioois(eeeu e_Mett g  (_in  Iriooi SitCSetiooisa$sitCSetiooistgfal  y crl u ttsitCSetiooisa=a$sitCSetioois(n
a}e  Sbaei  u_ad U 'rgetSitCSetioois(tgfal  y cr  d_r  l u ttsitCSetioois(n
a}e  Sbaei  u_ad U 'rsetSubaccou har($tubaccou hartgfal  y crl u ttsubaccou hara=a$subaccou har(n
a}e  Sbaei  u_ad U 'rgetSubaccou har(tgfal  y cr  d_r  l u ttsubaccou har(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi SitCContac a(_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $address(n
aSbaei  $contac Typ (n
aSbaei  $email(n
aSbaei  $firstNDI (n
aSbaei  $id(n
aSbaei  $lastNDI (n
aSbaei  $phone(n
aSbaei  $title(n
e  Sbaei  u_ad U 'rsetAddress($addresstgfal  y crl u ttaddressg= $address(n
a}e  Sbaei  u_ad U 'rgetAddress(tgfal  y cr  d_r  l u ttaddress(n
a}e  Sbaei  u_ad U 'rsetContac Typ ($contac Typ tgfal  y crl u ttnontac Typ  =a$nontac Typ (n
a}e  Sbaei  u_ad U 'rgetContac Typ (tgfal  y cr  d_r  l u ttnontac Typ (n
a}e  Sbaei  u_ad U 'rsetEmail($emailtgfal  y crl u ttemail = $email(n
a}e  Sbaei  u_ad U 'rgetEmail(tgfal  y cr  d_r  l u ttemail(n
a}e  Sbaei  u_ad U 'rsetFirstNDI ($firstNDI tgfal  y crl u ttfirstNDI  = $firstNDI (n
a}e  Sbaei  u_ad U 'rgetFirstNDI (tgfal  y cr  d_r  l u ttfirstNDI (n
a}e  Sbaei  u_ad U 'rsetId($idtgfal  y crl u ttid Satid(n
a}e  Sbaei  u_ad U 'rgetId(tgfal  y cr  d_r  l u ttid(n
a}e  Sbaei  u_ad U 'rsetLastNDI ($lastNDI tgfal  y crl u ttlastNDI  SatlastNDI (n
a}e  Sbaei  u_ad U 'rgetLastNDI (tgfal  y cr  d_r  l u ttlastNDI (n
a}e  Sbaei  u_ad U 'rsetPhone($phonetgfal  y crl u ttphone Satphone(n
a}e  Sbaei  u_ad U 'rgetPhone(tgfal  y cr  d_r  l u ttphone(n
a}e  Sbaei  u_ad U 'rsetTitle($titletgfal  y crl u tttitle Sattitle(n
a}e  Sbaei  u_ad U 'rgetTitle(tgfal  y cr  d_r  l u tttitle(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi SitCSetiooisa(_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $ac  vgViewOptOut;  y
nyteFieta$crea  vgSetiooisTyp d  'eeeu e_Mett g  (_in  Iriooi Crea  vgSetioois'(n
aSnyteFieta$nrea  vgSetiooisDataTyp d  ''(n
aSbaei  $disableBrandSafeAds(n
aSbaei  $disableNewCookie(n
aSnyteFieta$lookbackConfigura  _aTyp d  'eeeu e_Mett g  (_in  Iriooi LookbackConfigura  _a'(n
aSnyteFieta$lookbackConfigura  _aDataTyp d  ''(n
aSnyteFieta$tagSetiooiTyp d  'eeeu e_Mett g  (_in  Iriooi TagSetiooi'(n
aSnyteFieta$tagSetiooiDataTyp d  ''(n
e  Sbaei  u_ad U 'rsetAc  vgViewOptOut($ac  vgViewOptOuttgfal  y crl u ttac  vgViewOptOutg= $ac  vgViewOptOut;  y}e  Sbaei  u_ad U 'rgetAc  vgViewOptOut(tgfal  y cr  d_r  l u ttac  vgViewOptOut;  y}e  Sbaei  u_ad U 'rsetCrea  vgSetioois(eeeu e_Mett g  (_in  Iriooi Crea  vgSetiooisa$nrea  vgSetiooistgfal  y crl u ttnrea  vgSetiooisa=a$nrea  vgSetioois;  y}e  Sbaei  u_ad U 'rgetCrea  vgSetioois(tgfal  y cr  d_r  l u ttnrea  vgSetioois;  y}e  Sbaei  u_ad U 'rsetDisableBrandSafeAds($disableBrandSafeAdstgfal  y crl u ttdisableBrandSafeAdsa= $disableBrandSafeAds(n
a}e  Sbaei  u_ad U 'rgetDisableBrandSafeAds(tgfal  y cr  d_r  l u ttdisableBrandSafeAds(n
a}e  Sbaei  u_ad U 'rsetDisableNewCookie($disableNewCookietgfal  y crl u ttdisableNewCookiea= $disableNewCookie(n
a}e  Sbaei  u_ad U 'rgetDisableNewCookie(tgfal  y cr  d_r  l u ttdisableNewCookie(n
a}e  Sbaei  u_ad U 'rsetLookbackConfigura  _a(eeeu e_Mett g  (_in  Iriooi LookbackConfigura  _aa$lookbackConfigura  _atgfal  y crl u ttlookbackConfigura  _a = $lookbackConfigura  _a(n
a}e  Sbaei  u_ad U 'rgetLookbackConfigura  _a(tgfal  y cr  d_r  l u ttlookbackConfigura  _a(n
a}e  Sbaei  u_ad U 'rsetTagSetiooi(eeeu e_Mett g  (_in  Iriooi TagSetiooia$tagSetiooitgfal  y crl u tttagSetiooia=a$tagSetiooi(n
a}e  Sbaei  u_ad U 'rgetTagSetiooi(tgfal  y cr  d_r  l u tttagSetiooi(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi SitCsListResponsCa(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'sitCs'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $kind(n
aSbaei  $i(_SP p Tokee(n
aSnyteFieta$sitCsTyp d  'eeeu e_Mett g  (_in  Iriooi SitC'(n
aSnyteFieta$sitCsDataTyp d  'eal I'(n
e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetN(_SP p Tokee($i(_SP p Tokeetgfal  y crl u tti(_SP p Tokee(= $i(_SP p Tokee(n
a}e  Sbaei  u_ad U 'rgetN(_SP p Tokee(tgfal  y cr  d_r  l u tti(_SP p Tokee(n
a}e  Sbaei  u_ad U 'rsetSitCs($sitCstgfal  y crl u ttsitCsa=a$sitCs(n
a}e  Sbaei  u_ad U 'rgetSitCs(tgfal  y cr  d_r  l u ttsitCs(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi SizCa(_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $heighh(n
aSbaei  $iab(n
aSbaei  $id(n
aSbaei  $kind(n
aSbaei  $width(n
e  Sbaei  u_ad U 'rsetHeighh($heighhtgfal  y crl u ttheighha=a$heighh(n
a}e  Sbaei  u_ad U 'rgetHeighh(tgfal  y cr  d_r  l u ttheighh(n
a}e  Sbaei  u_ad U 'rsetIab($iabtgfal  y crl u ttiab Satiab(n
a}e  Sbaei  u_ad U 'rgetIab(tgfal  y cr  d_r  l u ttiab(n
a}e  Sbaei  u_ad U 'rsetId($idtgfal  y crl u ttid Satid(n
a}e  Sbaei  u_ad U 'rgetId(tgfal  y cr  d_r  l u ttid(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetWidth($widthtgfal  y crl u ttwidth Satwidth(n
a}e  Sbaei  u_ad U 'rgetWidth(tgfal  y cr  d_r  l u ttwidth(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi SizCsListResponsCa(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'sizCs'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $kind(n
aSnyteFieta$sizCsTyp d  'eeeu e_Mett g  (_in  Iriooi SizC'(n
aSnyteFieta$sizCsDataTyp d  'eal I'(n
e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetSizCs($sizCstgfal  y crl u ttsizCsa=a$sizCs(n
a}e  Sbaei  u_ad U 'rgetSizCs(tgfal  y cr  d_r  l u ttsizCs(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi SoriedDi   sir a(_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $kind(n
aSbaei  $iDI (n
aSbaei  $soriOrder(n
e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetNaI ($ietgtgfal  y crl u ttietg(= $ietg(n
a}e  Sbaei  u_ad U 'rgetNDI (tgfal  y cr  d_r  l u ttietg(n
a}e  Sbaei  u_ad U 'rsetSoriOrder($soriOrdertgfal  y crl u ttsoriOrdera=a$soriOrder(n
a}e  Sbaei  u_ad U 'rgetSoriOrder(tgfal  y cr  d_r  l u ttsoriOrder(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi Subaccou ha(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'availablePermissir Ids'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $accou har(n
aSbaei  $availablePermissir Ids(n
aSbaei  $id(n
aSbaei  $kind(n
aSbaei  $ietg(n
e  Sbaei  u_ad U 'rsetAccou har($accou hartgfal  y crl u ttaccou harg= $accou hId(n
a}e  Sbaei  u_ad U 'rgetAccou hId(tgfal  y cr  d_r  l u ttaccou hId(n
a}e  Sbaei  u_ad U 'rsetAvailablePermissir Ids($availablePermissir Idstgfal  y crl u ttavailablePermissir Idsg= $availablePermissir Ids(n
a}e  Sbaei  u_ad U 'rgetAvailablePermissir Ids(tgfal  y cr  d_r  l u ttavailablePermissir Ids(n
a}e  Sbaei  u_ad U 'rsetId($idtgfal  y crl u ttid Satid(n
a}e  Sbaei  u_ad U 'rgetId(tgfal  y cr  d_r  l u ttid(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetNaI ($ietgtgfal  y crl u ttietg(= $ietg(n
a}e  Sbaei  u_ad U 'rgetNDI (tgfal  y cr  d_r  l u ttietg(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi Subaccou hsListResponsCa(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'subaccou hs'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $kind(n
aSbaei  $i(_SP p Tokee(n
aSnyteFieta$subaccou hsTyp d  'eeeu e_Mett g  (_in  Iriooi Subaccou h'(n
aSnyteFieta$subaccou hsDataTyp d  'eal I'(n
e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetN(_SP p Tokee($i(_SP p Tokeetgfal  y crl u tti(_SP p Tokee(= $i(_SP p Tokee(n
a}e  Sbaei  u_ad U 'rgetN(_SP p Tokee(tgfal  y cr  d_r  l u tti(_SP p Tokee(n
a}e  Sbaei  u_ad U 'rsetSubaccou hs($tubaccou hstgfal  y crl u ttsubaccou hsa=a$subaccou hs(n
a}e  Sbaei  u_ad U 'rgetSubaccou hs(tgfal  y cr  d_r  l u ttsubaccou hs(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi TaiDataa(_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $adar(n
aSbaei  $nli kTag(n
aSbaei  $nrea  vgar(n
aSbaei  $formah(n
aSbaei  $impressir Tag(n
e  Sbaei  u_ad U 'rsetAdar($adartgfal  y crl u ttadarg= $adId(n
a}e  Sbaei  u_ad U 'rgetAdId(tgfal  y cr  d_r  l u ttadId(n
a}e  Sbaei  u_ad U 'rsetCli kTag($nli kTagtgfal  y crl u ttnli kTagg= $nli kTag(n
a}e  Sbaei  u_ad U 'rgetCli kTag(tgfal  y cr  d_r  l u ttnli kTag(n
a}e  Sbaei  u_ad U 'rsetCrea  vgar($nrea  vgartgfal  y crl u ttnrea  vgar = $nrea  vgar(n
a}e  Sbaei  u_ad U 'rgetCrea  vgar(tgfal  y cr  d_r  l u ttnrea  vgar(n
a}e  Sbaei  u_ad U 'rsetFormah($formahtgfal  y crl u ttformah = $formah(n
a}e  Sbaei  u_ad U 'rgetFormah(tgfal  y cr  d_r  l u ttformah(n
a}e  Sbaei  u_ad U 'rsetImpressir Tag($impressir Tagtgfal  y crl u ttimpressir Tag Satimpressir Tag(n
a}e  Sbaei  u_ad U 'rgetImpressir Tag(tgfal  y cr  d_r  l u ttimpressir Tag(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi TaiSetiooia(_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $addi U 'alKeyan
"Cs(n
aSbaei  $includeCli kThroughUrls(n
aSbaei  $includeCli kTrackooi(n
aSbaei  $keywordOp U '(n
e  Sbaei  u_ad U 'rsetAddi U 'alKeyan
"Cs($addi U 'alKeyan
"Cstgfal  y crl u ttaddi U 'alKeyan
"Csg= $addi U 'alKeyan
"Cs(n
a}e  Sbaei  u_ad U 'rgetAddi U 'alKeyan
"Cs(tgfal  y cr  d_r  l u ttaddi U 'alKeyan
"Cs(n
a}e  Sbaei  u_ad U 'rsetIncludeCli kThroughUrls($includeCli kThroughUrlstgfal  y crl u ttincludeCli kThroughUrls SatincludeCli kThroughUrls(n
a}e  Sbaei  u_ad U 'rgetIncludeCli kThroughUrls(tgfal  y cr  d_r  l u ttincludeCli kThroughUrls(n
a}e  Sbaei  u_ad U 'rsetIncludeCli kTrackooi($includeCli kTrackooitgfal  y crl u ttincludeCli kTrackooi SatincludeCli kTrackooi(n
a}e  Sbaei  u_ad U 'rgetIncludeCli kTrackooi(tgfal  y cr  d_r  l u ttincludeCli kTrackooi(n
a}e  Sbaei  u_ad U 'rsetKeywordOp U '($keywordOp U 'tgfal  y crl u ttkeywordOp U ' SatkeywordOp U '(n
a}e  Sbaei  u_ad U 'rgetKeywordOp U '(tgfal  y cr  d_r  l u ttkeywordOp U '(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi TaiSetiooisa(_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $dyieticTaiEnabled(n
aSbaei  $im p TaiEnabled(n
e  Sbaei  u_ad U 'rsetDyieticTaiEnabled($dyieticTaiEnabledtgfal  y crl u ttdyieticTaiEnabled SatdyieticTaiEnabled(n
a}e  Sbaei  u_ad U 'rgetDyieticTaiEnabled(tgfal  y cr  d_r  l u ttdyieticTaiEnabled(n
a}e  Sbaei  u_ad U 'rsetIm p TaiEnabled($im p TaiEnabledtgfal  y crl u ttim p TaiEnabled Satim p TaiEnabled(n
a}e  Sbaei  u_ad U 'rgetIm p TaiEnabled(tgfal  y cr  d_r  l u ttim p TaiEnabled(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi TargetWindowa(_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $nustomHtml(n
aSbaei  $targetWindowOp U '(n
e  Sbaei  u_ad U 'rsetCustomHtml($nustomHtmltgfal  y crl u ttnustomHtml = $nustomHtml(n
a}e  Sbaei  u_ad U 'rgetCustomHtml(tgfal  y cr  d_r  l u ttnustomHtml(n
a}e  Sbaei  u_ad U 'rsetTargetWindowOp U '($targetWindowOp U 'tgfal  y crl u tttargetWindowOp U ' = $targetWindowOp U '(n
a}e  Sbaei  u_ad U 'rgetTargetWindowOp U '(tgfal  y cr  d_r  l u tttargetWindowOp U '(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi TargetableRemarkeiooiLista(_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $accou har(n
aSbaei  $ac  v (n
aSbaei  $advr
nyserar(n
aSnyteFieta$advr
nyserarDi   sir an
"CTyp d  'eeeu e_Mett g  (_in  Iriooi Di   sir an
"C';  y
nyteFieta$advr
nyserarDi   sir an
"CDataTyp d  ''(n
aSbaei  $descrip U '(n
aSbaei  $id(n
aSbaei  $kind(n
aSbaei  $lifeSpan(n
aSbaei  $listSizC(n
aSbaei  $listSourcC(n
aSbaei  $iDI (n
aSbaei  $subaccou har(n
e  Sbaei  u_ad U 'rsetAccou har($accou hartgfal  y crl u ttaccou harg= $accou hId(n
a}e  Sbaei  u_ad U 'rgetAccou hId(tgfal  y cr  d_r  l u ttaccou hId(n
a}e  Sbaei  u_ad U 'rsetAc  vg($ac  vgtgfal  y crl u ttac  vgg= $ac  vg(n
a}e  Sbaei  u_ad U 'rgetAc  vg(tgfal  y cr  d_r  l u ttac  vg(n
a}e  Sbaei  u_ad U 'rsetAdvr
nyserar($advr
nyserartgfal  y crl u ttadvr
nyserarg= $advr
nyserar(n
a}e  Sbaei  u_ad U 'rgetAdvr
nyserar(tgfal  y cr  d_r  l u ttadvr
nyserar(n
a}e  Sbaei  u_ad U 'rsetAdvr
nyserarDi   sir an
"C(eeeu e_Mett g  (_in  Iriooi Di   sir an
"Ca$advr
nyserarDi   sir an
"Ctgfal  y crl u ttadvr
nyserarDi   sir an
"Ca= $advr
nyserarDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rgetAdvr
nyserarDi   sir an
"C(tgfal  y cr  d_r  l u ttadvr
nyserarDi   sir an
"C(n
a}e  Sbaei  u_ad U 'rsetDescrip U '($descrip U 'tgfal  y crl u ttdescrip U ' Satdescrip U '(n
a}e  Sbaei  u_ad U 'rgetDescrip U '(tgfal  y cr  d_r  l u ttdescrip U '(n
a}e  Sbaei  u_ad U 'rsetId($idtgfal  y crl u ttid Satid(n
a}e  Sbaei  u_ad U 'rgetId(tgfal  y cr  d_r  l u ttid(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetLifeSpan($lifeSpantgfal  y crl u ttlifeSpan SatlifeSpan(n
a}e  Sbaei  u_ad U 'rgetLifeSpan(tgfal  y cr  d_r  l u ttlifeSpan(n
a}e  Sbaei  u_ad U 'rsetListSizC($listSizCtgfal  y crl u ttlistSizC SatlistSizC(n
a}e  Sbaei  u_ad U 'rgetListSizC(tgfal  y cr  d_r  l u ttlistSizC(n
a}e  Sbaei  u_ad U 'rsetListSourcC($listSourcCtgfal  y crl u ttlistSourcC SatlistSourcC(n
a}e  Sbaei  u_ad U 'rgetListSourcC(tgfal  y cr  d_r  l u ttlistSourcC(n
a}e  Sbaei  u_ad U 'rsetNaI ($ietgtgfal  y crl u ttietg(= $ietg(n
a}e  Sbaei  u_ad U 'rgetNDI (tgfal  y cr  d_r  l u ttietg(n
a}e  Sbaei  u_ad U 'rsetSubaccou har($tubaccou hartgfal  y crl u ttsubaccou hara=a$subaccou har(n
a}e  Sbaei  u_ad U 'rgetSubaccou har(tgfal  y cr  d_r  l u ttsubaccou har(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi TargetableRemarkeiooiListsListResponsCa(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'targetableRemarkeiooiLists'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $kind(n
aSbaei  $i(_SP p Tokee(n
aSnyteFieta$targetableRemarkeiooiListsTyp d  'eeeu e_Mett g  (_in  Iriooi TargetableRemarkeiooiList'(n
aSnyteFieta$targetableRemarkeiooiListsDataTyp d  'eal I'(n
e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetN(_SP p Tokee($i(_SP p Tokeetgfal  y crl u tti(_SP p Tokee(= $i(_SP p Tokee(n
a}e  Sbaei  u_ad U 'rgetN(_SP p Tokee(tgfal  y cr  d_r  l u tti(_SP p Tokee(n
a}e  Sbaei  u_ad U 'rsetTargetableRemarkeiooiLists($targetableRemarkeiooiListstgfal  y crl u tttargetableRemarkeiooiLists = $targetableRemarkeiooiLists(n
a}e  Sbaei  u_ad U 'rgetTargetableRemarkeiooiLists(tgfal  y cr  d_r  l u tttargetableRemarkeiooiLists(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi TechnologyTargetioia(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'platformTyp s'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSnyteFieta$browsSesTyp d  'eeeu e_Mett g  (_in  Iriooi BrowsSe'(n
aSnyteFieta$browsSesDataTyp d  'eal I'(n
aSnyteFieta$connt   _aTyp sTyp d  'eeeu e_Mett g  (_in  Iriooi Connt   _aTyp '(n
aSnyteFieta$connt   _aTyp sDataTyp d  'eal I'(n
aSnyteFieta$mobileCealiSesTyp d  'eeeu e_Mett g  (_in  Iriooi MobileCealiSe'(n
aSnyteFieta$mobileCealiSesDataTyp d  'eal I'(n
aSnyteFieta$opr
aiooiSystemVetsir sTyp d  'eeeu e_Mett g  (_in  Iriooi Opr
aiooiSystemVetsir '(n
aSnyteFieta$opr
aiooiSystemVetsir sDataTyp d  'eal I'(n
aSnyteFieta$opr
aiooiSystemsTyp d  'eeeu e_Mett g  (_in  Iriooi Opr
aiooiSystem'(n
aSnyteFieta$opr
aiooiSystemsDataTyp d  'eal I'(n
aSnyteFieta$platformTyp sTyp d  'eeeu e_Mett g  (_in  Iriooi PlatformTyp '(n
aSnyteFieta$platformTyp sDataTyp d  'eal I'(n
e  Sbaei  u_ad U 'rsetBrowsSes($browsSestgfal  y crl u ttbrowsSes = $browsSes(n
a}e  Sbaei  u_ad U 'rgetBrowsSes(tgfal  y cr  d_r  l u ttbrowsSes(n
a}e  Sbaei  u_ad U 'rsetConnt   _aTyp s($connt   _aTyp stgfal  y crl u ttconnt   _aTyp s = $connt   _aTyp s(n
a}e  Sbaei  u_ad U 'rgetConnt   _aTyp s(tgfal  y cr  d_r  l u ttconnt   _aTyp s(n
a}e  Sbaei  u_ad U 'rsetMobileCealiSes($mobileCealiSestgfal  y crl u ttmobileCealiSes = $mobileCealiSes(n
a}e  Sbaei  u_ad U 'rgetMobileCealiSes(tgfal  y cr  d_r  l u ttmobileCealiSes(n
a}e  Sbaei  u_ad U 'rsetOpr
aiooiSystemVetsir s($opr
aiooiSystemVetsir stgfal  y crl u ttopr
aiooiSystemVetsir s = $opr
aiooiSystemVetsir s(n
a}e  Sbaei  u_ad U 'rgetOpr
aiooiSystemVetsir s(tgfal  y cr  d_r  l u ttopr
aiooiSystemVetsir s(n
a}e  Sbaei  u_ad U 'rsetOpr
aiooiSystems($opr
aiooiSystemstgfal  y crl u ttopr
aiooiSystems = $opr
aiooiSystems(n
a}e  Sbaei  u_ad U 'rgetOpr
aiooiSystems(tgfal  y cr  d_r  l u ttopr
aiooiSystems(n
a}e  Sbaei  u_ad U 'rsetPlatformTyp s($platformTyp stgfal  y crl u ttplatformTyp s = $platformTyp s(n
a}e  Sbaei  u_ad U 'rgetPlatformTyp s(tgfal  y cr  d_r  l u ttplatformTyp s(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi ThirdPartyTrackooiUrl (_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $thirdPartyUrlTyp (n
aSbaei  $url(n
e  Sbaei  u_ad U 'rsetThirdPartyUrlTyp ($thirdPartyUrlTyp tgfal  y crl u ttthirdPartyUrlTyp  = $thirdPartyUrlTyp (n
a}e  Sbaei  u_ad U 'rgetThirdPartyUrlTyp (tgfal  y cr  d_r  l u ttthirdPartyUrlTyp (n
a}e  Sbaei  u_ad U 'rsetUrl($urltgfal  y crl u tturl = $url(n
a}e  Sbaei  u_ad U 'rgetUrl(tgfal  y cr  d_r  l u tturl(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi UsSeDefinedVaeiableConfigura  _a (_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $dataTyp (n
aSbaei  $n  IriNDI (n
aSbaei  $vaeiableTyp (n
e  Sbaei  u_ad U 'rsetDataTyp ($dataTyp tgfal  y crl u ttdataTyp d  $dataTyp (n
a}e  Sbaei  u_ad U 'rgetDataTyp (tgfal  y cr  d_r  l u ttdataTyp (n
a}e  Sbaei  u_ad U 'rsetRe IriNaI ($n  IriNDI tgfal  y crl u ttn  IriNDI d  $n  IriNDI (n
a}e  Sbaei  u_ad U 'rgetRe IriNaI (tgfal  y cr  d_r  l u ttn  IriNDI (n
a}e  Sbaei  u_ad U 'rsetVaeiableTyp ($vaeiableTyp tgfal  y crl u ttvaeiableTyp d  $vaeiableTyp (n
a}e  Sbaei  u_ad U 'rgetVaeiableTyp (tgfal  y cr  d_r  l u ttvaeiableTyp (n
a}e}     _a eeeu e_Mett g  (_in  Iriooi UsSeProfilCa(_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $accou har(n
aSbaei  $accou hNDI (n
aSbaei  $etai(n
aSbaei  $kind(n
aSbaei  $profilCar(n
aSbaei  $subAccou har(n
aSbaei  $subAccou hNDI (n
aSbaei  $usSeNetg(n
e  Sbaei  u_ad U 'rsetAccou har($accou hartgfal  y crl u ttaccou harg= $accou hId(n
a}e  Sbaei  u_ad U 'rgetAccou hId(tgfal  y cr  d_r  l u ttaccou hId(n
a}e  Sbaei  u_ad U 'rsetAccou hNDI ($accou hNDI tgfal  y crl u ttaccou hNDI d  $accou hNDI (n
a}e  Sbaei  u_ad U 'rgetAccou hNaI (tgfal  y cr  d_r  l u ttaccou hNDI (n
a}e  Sbaei  u_ad U 'rsetEtag($etaitgfal  y crl u ttetaid  $etai(n
a}e  Sbaei  u_ad U 'rgetEtag(tgfal  y cr  d_r  l u ttetai(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetProfilCar($profilCartgfal  y crl u ttprofilCar = $profilCar(n
a}e  Sbaei  u_ad U 'rgetProfilCar(tgfal  y cr  d_r  l u ttprofilCar(n
a}e  Sbaei  u_ad U 'rsetSubAccou har($subAccou hartgfal  y crl u ttsubAccou har = $subAccou har(n
a}e  Sbaei  u_ad U 'rgetSubAccou har(tgfal  y cr  d_r  l u ttsubAccou har(n
a}e  Sbaei  u_ad U 'rsetSubAccou hNDI ($subAccou hNDI tgfal  y crl u ttsubAccou hNDI d  $subAccou hNDI (n
a}e  Sbaei  u_ad U 'rgetSubAccou hNaI (tgfal  y cr  d_r  l u ttsubAccou hNDI (n
a}e  Sbaei  u_ad U 'rsetUserNDI ($usSeNetgtgfal  y crl u ttusSeNetg = $usSeNetg(n
a}e  Sbaei  u_ad U 'rgetUserNDI (tgfal  y cr  d_r  l u ttusSeNetg(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi UsSeProfilCLista(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'items'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $etai(n
aSnyteFieta$itemsTyp d  'eeeu e_Mett g  (_in  Iriooi UsSeProfilC'(n
aSnyteFieta$itemsDataTyp d  'eal I'(n
aSbaei  $kind(n
e  Sbaei  u_ad U 'rsetEtag($etaitgfal  y crl u ttetaid  $etai(n
a}e  Sbaei  u_ad U 'rgetEtag(tgfal  y cr  d_r  l u ttetai(n
a}e  Sbaei  u_ad U 'rsetItems($itemstgfal  y crl u ttitems = $items(n
a}e  Sbaei  u_ad U 'rgetItems(tgfal  y cr  d_r  l u ttitems(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi UsSeRolCa(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'permissir s'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $accou har(n
aSbaei  $defaultUsSeRolC(n
aSbaei  $id(n
aSbaei  $kind(n
aSbaei  $ietg(n
aSbaei  $pin ntUsSeRolCar(n
aSnyteFieta$permissir sTyp d  'eeeu e_Mett g  (_in  Iriooi UsSeRolCPermissir '(n
aSnyteFieta$permissir sDataTyp d  'eal I'(n
aSbaei  $subaccou har(n
e  Sbaei  u_ad U 'rsetAccou har($accou hartgfal  y crl u ttaccou harg= $accou hId(n
a}e  Sbaei  u_ad U 'rgetAccou hId(tgfal  y cr  d_r  l u ttaccou hId(n
a}e  Sbaei  u_ad U 'rsetDefaultUsSeRolC($defaultUsSeRolCtgfal  y crl u ttdefaultUsSeRolCd  $defaultUsSeRolC(n
a}e  Sbaei  u_ad U 'rgetDefaultUsSeRolC(tgfal  y cr  d_r  l u ttdefaultUsSeRolC(n
a}e  Sbaei  u_ad U 'rsetId($idtgfal  y crl u ttid Satid(n
a}e  Sbaei  u_ad U 'rgetId(tgfal  y cr  d_r  l u ttid(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetNDI ($netgtgfal  y crl u ttnatg(= $ietg(n
a}e  Sbaei  u_ad U 'rgetNDI (tgfal  y cr  d_r  l u ttietg(n
a}e  Sbaei  u_ad U 'rsetPin ntUsSeRolCar($pin ntUsSeRolCartgfal  y crl u ttpin ntUsSeRolCar = $pin ntUsSeRolCar(n
a}e  Sbaei  u_ad U 'rgetPin ntUsSeRolCar(tgfal  y cr  d_r  l u ttpin ntUsSeRolCar(n
a}e  Sbaei  u_ad U 'rsetPermissir s($permissir stgfal  y crl u ttpermissir s = $permissir s(n
a}e  Sbaei  u_ad U 'rgetPermissir s(tgfal  y cr  d_r  l u ttpermissir s(n
a}e  Sbaei  u_ad U 'rsetSubaccou har($tubaccou hartgfal  y crl u ttsubaccou hara=a$subaccou har(n
a}e  Sbaei  u_ad U 'rgetSubaccou har(tgfal  y cr  d_r  l u ttsubaccou har(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi UsSeRolCPermissir a(_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $availability(n
aSbaei  $id(n
aSbaei  $kind(n
aSbaei  $ietg(n
aSbaei  $permissir Groupar(n
e  Sbaei  u_ad U 'rsetAvailability($availabilitytgfal  y crl u ttavailabilityg= $availability(n
a}e  Sbaei  u_ad U 'rgetAvailability(tgfal  y cr  d_r  l u ttavailability(n
a}e  Sbaei  u_ad U 'rsetId($idtgfal  y crl u ttid Satid(n
a}e  Sbaei  u_ad U 'rgetId(tgfal  y cr  d_r  l u ttid(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetNDI ($netgtgfal  y crl u ttnatg(= $ietg(n
a}e  Sbaei  u_ad U 'rgetNDI (tgfal  y cr  d_r  l u ttietg(n
a}e  Sbaei  u_ad U 'rsetPermissir Groupar($permissir Groupartgfal  y crl u ttpermissir Groupar = $permissir Groupar(n
a}e  Sbaei  u_ad U 'rgetPermissir Groupar(tgfal  y cr  d_r  l u ttpermissir Groupar(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi UsSeRolCPermissir Groupa(_Satalt   SataModel
l  y
nyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $id(n
aSbaei  $kind(n
aSbaei  $ietg(n
e  Sbaei  u_ad U 'rsetId($idtgfal  y crl u ttid Satid(n
a}e  Sbaei  u_ad U 'rgetId(tgfal  y cr  d_r  l u ttid(n
a}e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetNDI ($netgtgfal  y crl u ttnatg(= $ietg(n
a}e  Sbaei  u_ad U 'rgetNDI (tgfal  y cr  d_r  l u ttietg(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi UsSeRolCPermissir GroupsListResponsCa(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'usSeRolCPermissir Groups'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $kind(n
aSnyteFieta$usSeRolCPermissir GroupsTyp d  'eeeu e_Mett g  (_in  Iriooi UsSeRolCPermissir Group'(n
aSnyteFieta$usSeRolCPermissir GroupsDataTyp d  'eal I'(n
e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetUsSeRolCPermissir Groups($usSeRolCPermissir Groupstgfal  y crl u ttusSeRolCPermissir Groups =a$usSeRolCPermissir Groups(n
a}e  Sbaei  u_ad U 'rgetUsSeRolCPermissir Groups(tgfal  y cr  d_r  l u ttusSeRolCPermissir Groups(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi UsSeRolCPermissir sListResponsCa(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'usSeRolCPermissir s'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $kind(n
aSnyteFieta$usSeRolCPermissir sTyp d  'eeeu e_Mett g  (_in  Iriooi UsSeRolCPermissir '(n
aSnyteFieta$usSeRolCPermissir sDataTyp d  'eal I'(n
e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetUsSeRolCPermissir s($usSeRolCPermissir stgfal  y crl u ttusSeRolCPermissir s =a$usSeRolCPermissir s(n
a}e  Sbaei  u_ad U 'rgetUsSeRolCPermissir s(tgfal  y cr  d_r  l u ttusSeRolCPermissir s(n
a}e}     _a eeeu e_Mett g  (_in  Iriooi UsSeRolCsListResponsCa(_Satalt   SataC dlt   _a
l  y
nyteFieta$n dlt   _a_keyePr'usSeRolCs'(n
aSnyteFieta$i
aSeese_gapi_mappooi  y eal Ir  y'(n
aSbaei  $kind(n
aSbaei  $i(_SP p Tokee(n
aSnyteFieta$usSeRolCsTyp d  'eeeu e_Mett g  (_in  Iriooi UsSeRolC'(n
aSnyteFieta$usSeRolCsDataTyp d  'eal I'(n
e  Sbaei  u_ad U 'rsetKind($kindtgfal  y crl u ttkind Satkind(n
a}e  Sbaei  u_ad U 'rgetKind(tgfal  y cr  d_r  l u ttkind(n
a}e  Sbaei  u_ad U 'rsetN(_SP p Tokee($i(_SP p Tokeetgfal  y crl u tti(_SP p Tokee(= $i(_SP p Tokee(n
a}e  Sbaei  u_ad U 'rgetN(_SP p Tokee(tgfal  y cr  d_r  l u tti(_SP p Tokee(n
a}e  Sbaei  u_ad U 'rsetUsSeRolCs($usSeRolCstgfal  y crl u ttusSeRolCs =a$usSeRolCs(n
a}e  Sbaei  u_ad U 'rgetUsSeRolCs(tgfal  y cr  d_r  l u ttusSeRolCs(n
a}e} 