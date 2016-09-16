<?php
/*
 * Copyright 2016 Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * For instructions on how to run the full sample:
 *
 * @see https://github.com/GoogleCloudPlatform/php-docs-samples/tree/master/language/README.md
 */

namespace Google\Cloud\Samples\Language;

# [START analyze_sentiment]
use Google\Cloud\ServiceBuilder;
use Google\Cloud\NaturalLanguage\NaturalLanguageClient;
use Google\Cloud\NaturalLanguage\Annotation;

/**
 * Find the sentiment in text.
 * ```
 * analyze_sentiment($projectId, 'Do you know the way to San Jose?');
 * ```.
 *
 * @param string $projectId The Google project ID.
 * @param string $text The text to analyze.
 *
 * @return Annotation
 */
function analyze_sentiment($text, $options = [])
{
    $builder = new ServiceBuilder();
    /** @var NaturalLanguageClient $language */
    $language = $builder->naturalLanguage();
    $annotation = $language->analyzeSentiment($text);
    return $annotation;
}
# [END analyze_sentiment]
