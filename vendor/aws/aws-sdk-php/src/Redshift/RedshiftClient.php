<?php
namespace Aws\Redshift;

use Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Redshift** service.
 *
 * @method \Aws\Result acceptReservedNodeExchange(array $args = [])
 * @method \GuzzleHttp\Promise\Promise acceptReservedNodeExchangeAsync(array $args = [])
 * @method \Aws\Result addPartner(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addPartnerAsync(array $args = [])
 * @method \Aws\Result associateDataShareConsumer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateDataShareConsumerAsync(array $args = [])
 * @method \Aws\Result authorizeClusterSecurityGroupIngress(array $args = [])
 * @method \GuzzleHttp\Promise\Promise authorizeClusterSecurityGroupIngressAsync(array $args = [])
 * @method \Aws\Result authorizeDataShare(array $args = [])
 * @method \GuzzleHttp\Promise\Promise authorizeDataShareAsync(array $args = [])
 * @method \Aws\Result authorizeEndpointAccess(array $args = [])
 * @method \GuzzleHttp\Promise\Promise authorizeEndpointAccessAsync(array $args = [])
 * @method \Aws\Result authorizeSnapshotAccess(array $args = [])
 * @method \GuzzleHttp\Promise\Promise authorizeSnapshotAccessAsync(array $args = [])
 * @method \Aws\Result batchDeleteClusterSnapshots(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchDeleteClusterSnapshotsAsync(array $args = [])
 * @method \Aws\Result batchModifyClusterSnapshots(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchModifyClusterSnapshotsAsync(array $args = [])
 * @method \Aws\Result cancelResize(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelResizeAsync(array $args = [])
 * @method \Aws\Result copyClusterSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise copyClusterSnapshotAsync(array $args = [])
 * @method \Aws\Result createAuthenticationProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAuthenticationProfileAsync(array $args = [])
 * @method \Aws\Result createCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createClusterAsync(array $args = [])
 * @method \Aws\Result createClusterParameterGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createClusterParameterGroupAsync(array $args = [])
 * @method \Aws\Result createClusterSecurityGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createClusterSecurityGroupAsync(array $args = [])
 * @method \Aws\Result createClusterSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createClusterSnapshotAsync(array $args = [])
 * @method \Aws\Result createClusterSubnetGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createClusterSubnetGroupAsync(array $args = [])
 * @method \Aws\Result createCustomDomainAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCustomDomainAssociationAsync(array $args = [])
 * @method \Aws\Result createEndpointAccess(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createEndpointAccessAsync(array $args = [])
 * @method \Aws\Result createEventSubscription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createEventSubscriptionAsync(array $args = [])
 * @method \Aws\Result createHsmClientCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createHsmClientCertificateAsync(array $args = [])
 * @method \Aws\Result createHsmConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createHsmConfigurationAsync(array $args = [])
 * @method \Aws\Result createScheduledAction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createScheduledActionAsync(array $args = [])
 * @method \Aws\Result createSnapshotCopyGrant(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSnapshotCopyGrantAsync(array $args = [])
 * @method \Aws\Result createSnapshotSchedule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSnapshotScheduleAsync(array $args = [])
 * @method \Aws\Result createTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTagsAsync(array $args = [])
 * @method \Aws\Result createUsageLimit(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createUsageLimitAsync(array $args = [])
 * @method \Aws\Result deauthorizeDataShare(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deauthorizeDataShareAsync(array $args = [])
 * @method \Aws\Result deleteAuthenticationProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAuthenticationProfileAsync(array $args = [])
 * @method \Aws\Result deleteCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteClusterAsync(array $args = [])
 * @method \Aws\Result deleteClusterParameterGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteClusterParameterGroupAsync(array $args = [])
 * @method \Aws\Result deleteClusterSecurityGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteClusterSecurityGroupAsync(array $args = [])
 * @method \Aws\Result deleteClusterSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteClusterSnapshotAsync(array $args = [])
 * @method \Aws\Result deleteClusterSubnetGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteClusterSubnetGroupAsync(array $args = [])
 * @method \Aws\Result deleteCustomDomainAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCustomDomainAssociationAsync(array $args = [])
 * @method \Aws\Result deleteEndpointAccess(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteEndpointAccessAsync(array $args = [])
 * @method \Aws\Result deleteEventSubscription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteEventSubscriptionAsync(array $args = [])
 * @method \Aws\Result deleteHsmClientCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteHsmClientCertificateAsync(array $args = [])
 * @method \Aws\Result deleteHsmConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteHsmConfigurationAsync(array $args = [])
 * @method \Aws\Result deletePartner(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePartnerAsync(array $args = [])
 * @method \Aws\Result deleteResourcePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteResourcePolicyAsync(array $args = [])
 * @method \Aws\Result deleteScheduledAction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteScheduledActionAsync(array $args = [])
 * @method \Aws\Result deleteSnapshotCopyGrant(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSnapshotCopyGrantAsync(array $args = [])
 * @method \Aws\Result deleteSnapshotSchedule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSnapshotScheduleAsync(array $args = [])
 * @method \Aws\Result deleteTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTagsAsync(array $args = [])
 * @method \Aws\Result deleteUsageLimit(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteUsageLimitAsync(array $args = [])
 * @method \Aws\Result describeAccountAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAccountAttributesAsync(array $args = [])
 * @method \Aws\Result describeAuthenticationProfiles(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAuthenticationProfilesAsync(array $args = [])
 * @method \Aws\Result describeClusterDbRevisions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeClusterDbRevisionsAsync(array $args = [])
 * @method \Aws\Result describeClusterParameterGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeClusterParameterGroupsAsync(array $args = [])
 * @method \Aws\Result describeClusterParameters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeClusterParametersAsync(array $args = [])
 * @method \Aws\Result describeClusterSecurityGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeClusterSecurityGroupsAsync(array $args = [])
 * @method \Aws\Result describeClusterSnapshots(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeClusterSnapshotsAsync(array $args = [])
 * @method \Aws\Result describeClusterSubnetGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeClusterSubnetGroupsAsync(array $args = [])
 * @method \Aws\Result describeClusterTracks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeClusterTracksAsync(array $args = [])
 * @method \Aws\Result describeClusterVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeClusterVersionsAsync(array $args = [])
 * @method \Aws\Result describeClusters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeClustersAsync(array $args = [])
 * @method \Aws\Result describeCustomDomainAssociations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCustomDomainAssociationsAsync(array $args = [])
 * @method \Aws\Result describeDataShares(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDataSharesAsync(array $args = [])
 * @method \Aws\Result describeDataSharesForConsumer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDataSharesForConsumerAsync(array $args = [])
 * @method \Aws\Result describeDataSharesForProducer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDataSharesForProducerAsync(array $args = [])
 * @method \Aws\Result describeDefaultClusterParameters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDefaultClusterParametersAsync(array $args = [])
 * @method \Aws\Result describeEndpointAccess(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEndpointAccessAsync(array $args = [])
 * @method \Aws\Result describeEndpointAuthorization(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEndpointAuthorizationAsync(array $args = [])
 * @method \Aws\Result describeEventCategories(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEventCategoriesAsync(array $args = [])
 * @method \Aws\Result describeEventSubscriptions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEventSubscriptionsAsync(array $args = [])
 * @method \Aws\Result describeEvents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEventsAsync(array $args = [])
 * @method \Aws\Result describeHsmClientCertificates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeHsmClientCertificatesAsync(array $args = [])
 * @method \Aws\Result describeHsmConfigurations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeHsmConfigurationsAsync(array $args = [])
 * @method \Aws\Result describeInboundIntegrations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInboundIntegrationsAsync(array $args = [])
 * @method \Aws\Result describeLoggingStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLoggingStatusAsync(array $args = [])
 * @method \Aws\Result describeNodeConfigurationOptions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeNodeConfigurationOptionsAsync(array $args = [])
 * @method \Aws\Result describeOrderableClusterOptions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeOrderableClusterOptionsAsync(array $args = [])
 * @method \Aws\Result describePartners(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePartnersAsync(array $args = [])
 * @method \Aws\Result describeReservedNodeExchangeStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeReservedNodeExchangeStatusAsync(array $args = [])
 * @method \Aws\Result describeReservedNodeOfferings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeReservedNodeOfferingsAsync(array $args = [])
 * @method \Aws\Result describeReservedNodes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeReservedNodesAsync(array $args = [])
 * @method \Aws\Result describeResize(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeResizeAsync(array $args = [])
 * @method \Aws\Result describeScheduledActions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeScheduledActionsAsync(array $args = [])
 * @method \Aws\Result describeSnapshotCopyGrants(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSnapshotCopyGrantsAsync(array $args = [])
 * @method \Aws\Result describeSnapshotSchedules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSnapshotSchedulesAsync(array $args = [])
 * @method \Aws\Result describeStorage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeStorageAsync(array $args = [])
 * @method \Aws\Result describeTableRestoreStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTableRestoreStatusAsync(array $args = [])
 * @method \Aws\Result describeTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTagsAsync(array $args = [])
 * @method \Aws\Result describeUsageLimits(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeUsageLimitsAsync(array $args = [])
 * @method \Aws\Result disableLogging(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableLoggingAsync(array $args = [])
 * @method \Aws\Result disableSnapshotCopy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableSnapshotCopyAsync(array $args = [])
 * @method \Aws\Result disassociateDataShareConsumer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateDataShareConsumerAsync(array $args = [])
 * @method \Aws\Result enableLogging(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableLoggingAsync(array $args = [])
 * @method \Aws\Result enableSnapshotCopy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableSnapshotCopyAsync(array $args = [])
 * @method \Aws\Result getClusterCredentials(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getClusterCredentialsAsync(array $args = [])
 * @method \Aws\Result getClusterCredentialsWithIAM(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getClusterCredentialsWithIAMAsync(array $args = [])
 * @method \Aws\Result getReservedNodeExchangeConfigurationOptions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getReservedNodeExchangeConfigurationOptionsAsync(array $args = [])
 * @method \Aws\Result getReservedNodeExchangeOfferings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getReservedNodeExchangeOfferingsAsync(array $args = [])
 * @method \Aws\Result getResourcePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getResourcePolicyAsync(array $args = [])
 * @method \Aws\Result modifyAquaConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyAquaConfigurationAsync(array $args = [])
 * @method \Aws\Result modifyAuthenticationProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyAuthenticationProfileAsync(array $args = [])
 * @method \Aws\Result modifyCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyClusterAsync(array $args = [])
 * @method \Aws\Result modifyClusterDbRevision(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyClusterDbRevisionAsync(array $args = [])
 * @method \Aws\Result modifyClusterIamRoles(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyClusterIamRolesAsync(array $args = [])
 * @method \Aws\Result modifyClusterMaintenance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyClusterMaintenanceAsync(array $args = [])
 * @method \Aws\Result modifyClusterParameterGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyClusterParameterGroupAsync(array $args = [])
 * @method \Aws\Result modifyClusterSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyClusterSnapshotAsync(array $args = [])
 * @method \Aws\Result modifyClusterSnapshotSchedule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyClusterSnapshotScheduleAsync(array $args = [])
 * @method \Aws\Result modifyClusterSubnetGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyClusterSubnetGroupAsync(array $args = [])
 * @method \Aws\Result modifyCustomDomainAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyCustomDomainAssociationAsync(array $args = [])
 * @method \Aws\Result modifyEndpointAccess(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyEndpointAccessAsync(array $args = [])
 * @method \Aws\Result modifyEventSubscription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyEventSubscriptionAsync(array $args = [])
 * @method \Aws\Result modifyScheduledAction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyScheduledActionAsync(array $args = [])
 * @method \Aws\Result modifySnapshotCopyRetentionPeriod(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifySnapshotCopyRetentionPeriodAsync(array $args = [])
 * @method \Aws\Result modifySnapshotSchedule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifySnapshotScheduleAsync(array $args = [])
 * @method \Aws\Result modifyUsageLimit(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyUsageLimitAsync(array $args = [])
 * @method \Aws\Result pauseCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise pauseClusterAsync(array $args = [])
 * @method \Aws\Result purchaseReservedNodeOffering(array $args = [])
 * @method \GuzzleHttp\Promise\Promise purchaseReservedNodeOfferingAsync(array $args = [])
 * @method \Aws\Result putResourcePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putResourcePolicyAsync(array $args = [])
 * @method \Aws\Result rebootCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise rebootClusterAsync(array $args = [])
 * @method \Aws\Result rejectDataShare(array $args = [])
 * @method \GuzzleHttp\Promise\Promise rejectDataShareAsync(array $args = [])
 * @method \Aws\Result resetClusterParameterGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resetClusterParameterGroupAsync(array $args = [])
 * @method \Aws\Result resizeCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resizeClusterAsync(array $args = [])
 * @method \Aws\Result restoreFromClusterSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise restoreFromClusterSnapshotAsync(array $args = [])
 * @method \Aws\Result restoreTableFromClusterSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise restoreTableFromClusterSnapshotAsync(array $args = [])
 * @method \Aws\Result resumeCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resumeClusterAsync(array $args = [])
 * @method \Aws\Result revokeClusterSecurityGroupIngress(array $args = [])
 * @method \GuzzleHttp\Promise\Promise revokeClusterSecurityGroupIngressAsync(array $args = [])
 * @method \Aws\Result revokeEndpointAccess(array $args = [])
 * @method \GuzzleHttp\Promise\Promise revokeEndpointAccessAsync(array $args = [])
 * @method \Aws\Result revokeSnapshotAccess(array $args = [])
 * @method \GuzzleHttp\Promise\Promise revokeSnapshotAccessAsync(array $args = [])
 * @method \Aws\Result rotateEncryptionKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise rotateEncryptionKeyAsync(array $args = [])
 * @method \Aws\Result updatePartnerStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updatePartnerStatusAsync(array $args = [])
 */
class RedshiftClient extends AwsClient {}
