<?php

namespace ContaoCommunityAlliance\GithubPayload\Event;

use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\Discriminator(
 *   field = "type",
 *   map = {
 *     "commit_comment":              "ContaoCommunityAlliance\GithubPayload\Event\CommitCommentEvent",
 *     "create":                      "ContaoCommunityAlliance\GithubPayload\Event\CreateEvent",
 *     "delete":                      "ContaoCommunityAlliance\GithubPayload\Event\DeleteEvent",
 *     "deployment":                  "ContaoCommunityAlliance\GithubPayload\Event\DeploymentEvent",
 *     "deployment_status":           "ContaoCommunityAlliance\GithubPayload\Event\DeploymentStatusEvent",
 *     "fork":                        "ContaoCommunityAlliance\GithubPayload\Event\ForkEvent",
 *     "gollum":                      "ContaoCommunityAlliance\GithubPayload\Event\GollumEvent",
 *     "issue_comment":               "ContaoCommunityAlliance\GithubPayload\Event\IssueCommentEvent",
 *     "issues":                      "ContaoCommunityAlliance\GithubPayload\Event\IssuesEvent",
 *     "member":                      "ContaoCommunityAlliance\GithubPayload\Event\MemberEvent",
 *     "page_build":                  "ContaoCommunityAlliance\GithubPayload\Event\PageBuildEvent",
 *     "ping":                        "ContaoCommunityAlliance\GithubPayload\Event\PingEvent",
 *     "public":                      "ContaoCommunityAlliance\GithubPayload\Event\PublicEvent",
 *     "pull_request":                "ContaoCommunityAlliance\GithubPayload\Event\PullRequestEvent",
 *     "pull_request_review_comment": "ContaoCommunityAlliance\GithubPayload\Event\PullRequestReviewCommentEvent",
 *     "push":                        "ContaoCommunityAlliance\GithubPayload\Event\PushEvent",
 *     "release":                     "ContaoCommunityAlliance\GithubPayload\Event\ReleaseEvent",
 *     "status":                      "ContaoCommunityAlliance\GithubPayload\Event\StatusEvent",
 *     "team_add":                    "ContaoCommunityAlliance\GithubPayload\Event\TeamAddEvent",
 *     "watch":                       "ContaoCommunityAlliance\GithubPayload\Event\WatchEvent",
 *   }
 * )
 */
abstract class AbstractEvent implements GithubEventInterface
{
}
