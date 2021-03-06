<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/enums/attribution_model.proto

namespace Google\Ads\GoogleAds\V1\Enums\AttributionModelEnum;

/**
 * The attribution model that describes how to distribute credit for a
 * particular conversion across potentially many prior interactions.
 *
 * Protobuf type <code>google.ads.googleads.v1.enums.AttributionModelEnum.AttributionModel</code>
 */
class AttributionModel
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Used for return value only. Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Uses external attribution.
     *
     * Generated from protobuf enum <code>EXTERNAL = 100;</code>
     */
    const EXTERNAL = 100;
    /**
     * Attributes all credit for a conversion to its last click.
     *
     * Generated from protobuf enum <code>GOOGLE_ADS_LAST_CLICK = 101;</code>
     */
    const GOOGLE_ADS_LAST_CLICK = 101;
    /**
     * Attributes all credit for a conversion to its first click using Google
     * Search attribution.
     *
     * Generated from protobuf enum <code>GOOGLE_SEARCH_ATTRIBUTION_FIRST_CLICK = 102;</code>
     */
    const GOOGLE_SEARCH_ATTRIBUTION_FIRST_CLICK = 102;
    /**
     * Attributes credit for a conversion equally across all of its clicks using
     * Google Search attribution.
     *
     * Generated from protobuf enum <code>GOOGLE_SEARCH_ATTRIBUTION_LINEAR = 103;</code>
     */
    const GOOGLE_SEARCH_ATTRIBUTION_LINEAR = 103;
    /**
     * Attributes exponentially more credit for a conversion to its more recent
     * clicks using Google Search attribution (half-life is 1 week).
     *
     * Generated from protobuf enum <code>GOOGLE_SEARCH_ATTRIBUTION_TIME_DECAY = 104;</code>
     */
    const GOOGLE_SEARCH_ATTRIBUTION_TIME_DECAY = 104;
    /**
     * Attributes 40% of the credit for a conversion to its first and last
     * clicks. Remaining 20% is evenly distributed across all other clicks. This
     * uses Google Search attribution.
     *
     * Generated from protobuf enum <code>GOOGLE_SEARCH_ATTRIBUTION_POSITION_BASED = 105;</code>
     */
    const GOOGLE_SEARCH_ATTRIBUTION_POSITION_BASED = 105;
    /**
     * Flexible model that uses machine learning to determine the appropriate
     * distribution of credit among clicks using Google Search attribution.
     *
     * Generated from protobuf enum <code>GOOGLE_SEARCH_ATTRIBUTION_DATA_DRIVEN = 106;</code>
     */
    const GOOGLE_SEARCH_ATTRIBUTION_DATA_DRIVEN = 106;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AttributionModel::class, \Google\Ads\GoogleAds\V1\Enums\AttributionModelEnum_AttributionModel::class);

