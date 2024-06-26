<?php

/*
 * Copyright 2014 Google Inc.
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
namespace Google\Site_Kit_Dependencies\Google\Service\TagManager\Resource;

use Google\Site_Kit_Dependencies\Google\Service\TagManager\Container;
use Google\Site_Kit_Dependencies\Google\Service\TagManager\GetContainerSnippetResponse;
use Google\Site_Kit_Dependencies\Google\Service\TagManager\ListContainersResponse;
/**
 * The "containers" collection of methods.
 * Typical usage is:
 *  <code>
 *   $tagmanagerService = new Google\Service\TagManager(...);
 *   $containers = $tagmanagerService->accounts_containers;
 *  </code>
 */
class AccountsContainers extends \Google\Site_Kit_Dependencies\Google\Service\Resource
{
    /**
     * Combines Containers. (containers.combine)
     *
     * @param string $path GTM Container's API relative path. Example:
     * accounts/{account_id}/containers/{container_id}
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool allowUserPermissionFeatureUpdate Must be set to true to allow
     * features.user_permissions to change from false to true. If this operation
     * causes an update but this bit is false, the operation will fail.
     * @opt_param string containerId ID of container that will be merged into the
     * current container.
     * @opt_param string settingSource Specify the source of config setting after
     * combine
     * @return Container
     * @throws \Google\Service\Exception
     */
    public function combine($path, $optParams = [])
    {
        $params = ['path' => $path];
        $params = \array_merge($params, $optParams);
        return $this->call('combine', [$params], \Google\Site_Kit_Dependencies\Google\Service\TagManager\Container::class);
    }
    /**
     * Creates a Container. (containers.create)
     *
     * @param string $parent GTM Account's API relative path. Example:
     * accounts/{account_id}.
     * @param Container $postBody
     * @param array $optParams Optional parameters.
     * @return Container
     * @throws \Google\Service\Exception
     */
    public function create($parent, \Google\Site_Kit_Dependencies\Google\Service\TagManager\Container $postBody, $optParams = [])
    {
        $params = ['parent' => $parent, 'postBody' => $postBody];
        $params = \array_merge($params, $optParams);
        return $this->call('create', [$params], \Google\Site_Kit_Dependencies\Google\Service\TagManager\Container::class);
    }
    /**
     * Deletes a Container. (containers.delete)
     *
     * @param string $path GTM Container's API relative path. Example:
     * accounts/{account_id}/containers/{container_id}
     * @param array $optParams Optional parameters.
     * @throws \Google\Service\Exception
     */
    public function delete($path, $optParams = [])
    {
        $params = ['path' => $path];
        $params = \array_merge($params, $optParams);
        return $this->call('delete', [$params]);
    }
    /**
     * Gets a Container. (containers.get)
     *
     * @param string $path GTM Container's API relative path. Example:
     * accounts/{account_id}/containers/{container_id}
     * @param array $optParams Optional parameters.
     * @return Container
     * @throws \Google\Service\Exception
     */
    public function get($path, $optParams = [])
    {
        $params = ['path' => $path];
        $params = \array_merge($params, $optParams);
        return $this->call('get', [$params], \Google\Site_Kit_Dependencies\Google\Service\TagManager\Container::class);
    }
    /**
     * Lists all Containers that belongs to a GTM Account.
     * (containers.listAccountsContainers)
     *
     * @param string $parent GTM Account's API relative path. Example:
     * accounts/{account_id}.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string pageToken Continuation token for fetching the next page of
     * results.
     * @return ListContainersResponse
     * @throws \Google\Service\Exception
     */
    public function listAccountsContainers($parent, $optParams = [])
    {
        $params = ['parent' => $parent];
        $params = \array_merge($params, $optParams);
        return $this->call('list', [$params], \Google\Site_Kit_Dependencies\Google\Service\TagManager\ListContainersResponse::class);
    }
    /**
     * Looks up a Container by destination ID. (containers.lookup)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param string destinationId Destination ID linked to a GTM Container,
     * e.g. AW-123456789. Example:
     * accounts/containers:lookup?destination_id={destination_id}.
     * @return Container
     * @throws \Google\Service\Exception
     */
    public function lookup($optParams = [])
    {
        $params = [];
        $params = \array_merge($params, $optParams);
        return $this->call('lookup', [$params], \Google\Site_Kit_Dependencies\Google\Service\TagManager\Container::class);
    }
    /**
     * Move Tag ID out of a Container. (containers.move_tag_id)
     *
     * @param string $path GTM Container's API relative path. Example:
     * accounts/{account_id}/containers/{container_id}
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool allowUserPermissionFeatureUpdate Must be set to true to allow
     * features.user_permissions to change from false to true. If this operation
     * causes an update but this bit is false, the operation will fail.
     * @opt_param bool copySettings Whether or not to copy tag settings from this
     * tag to the new tag.
     * @opt_param bool copyTermsOfService Must be set to true to accept all terms of
     * service agreements copied from the current tag to the newly created tag. If
     * this bit is false, the operation will fail.
     * @opt_param bool copyUsers Whether or not to copy users from this tag to the
     * new tag.
     * @opt_param string tagId Tag ID to be removed from the current Container.
     * @opt_param string tagName The name for the newly created tag.
     * @return Container
     * @throws \Google\Service\Exception
     */
    public function move_tag_id($path, $optParams = [])
    {
        $params = ['path' => $path];
        $params = \array_merge($params, $optParams);
        return $this->call('move_tag_id', [$params], \Google\Site_Kit_Dependencies\Google\Service\TagManager\Container::class);
    }
    /**
     * Gets the tagging snippet for a Container. (containers.snippet)
     *
     * @param string $path Container snippet's API relative path. Example:
     * accounts/{account_id}/containers/{container_id}:snippet
     * @param array $optParams Optional parameters.
     * @return GetContainerSnippetResponse
     * @throws \Google\Service\Exception
     */
    public function snippet($path, $optParams = [])
    {
        $params = ['path' => $path];
        $params = \array_merge($params, $optParams);
        return $this->call('snippet', [$params], \Google\Site_Kit_Dependencies\Google\Service\TagManager\GetContainerSnippetResponse::class);
    }
    /**
     * Updates a Container. (containers.update)
     *
     * @param string $path GTM Container's API relative path. Example:
     * accounts/{account_id}/containers/{container_id}
     * @param Container $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param string fingerprint When provided, this fingerprint must match the
     * fingerprint of the container in storage.
     * @return Container
     * @throws \Google\Service\Exception
     */
    public function update($path, \Google\Site_Kit_Dependencies\Google\Service\TagManager\Container $postBody, $optParams = [])
    {
        $params = ['path' => $path, 'postBody' => $postBody];
        $params = \array_merge($params, $optParams);
        return $this->call('update', [$params], \Google\Site_Kit_Dependencies\Google\Service\TagManager\Container::class);
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(\Google\Site_Kit_Dependencies\Google\Service\TagManager\Resource\AccountsContainers::class, 'Google\\Site_Kit_Dependencies\\Google_Service_TagManager_Resource_AccountsContainers');
