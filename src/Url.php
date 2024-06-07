<?php

namespace shenzhe\OpenAi;

class Url
{

    /**
     * @deprecated
     * @param string $engine
     * @return string
     */
    public static function completionURL(string $engine): string
    {
        return "/engines/$engine/completions";
    }

    /**
     * @return string
     */
    public static function completionsURL(): string
    {
        return "/completions";
    }

    /**
     *
     * @return string
     */
    public static function editsUrl(): string
    {
        return "/edits";
    }

    /**
     * @param string $engine
     * @return string
     */
    public static function searchURL(string $engine): string
    {
        return "/engines/$engine/search";
    }

    /**
     * @param
     * @return string
     */
    public static function enginesUrl(): string
    {
        return "/engines";
    }

    /**
     * @param string $engine
     * @return string
     */
    public static function engineUrl(string $engine): string
    {
        return "/engines/$engine";
    }

    /**
     * @param
     * @return string
     */
    public static function classificationsUrl(): string
    {
        return "/classifications";
    }

    /**
     * @param
     * @return string
     */
    public static function moderationUrl(): string
    {
        return "/moderations";
    }

    /**
     * @param
     * @return string
     */
    public static function transcriptionsUrl(): string
    {
        return "/audio/transcriptions";
    }

    /**
     * @param
     * @return string
     */
    public static function translationsUrl(): string
    {
        return "/audio/translations";
    }

    /**
     * @param
     * @return string
     */
    public static function filesUrl(): string
    {
        return "/files";
    }

    /**
     * @param
     * @return string
     */
    public static function fineTuneUrl(): string
    {
        return "/fine_tuning/jobs";
    }

    /**
     * @param
     * @return string
     */
    public static function fineTuneModel(): string
    {
        return "/models";
    }

    /**
     * @param
     * @return string
     */
    public static function answersUrl(): string
    {
        return "/answers";
    }

    /**
     * @param
     * @return string
     */
    public static function imageUrl(): string
    {
        return "/images";
    }

    /**
     * @param
     * @return string
     */
    public static function embeddings(): string
    {
        return "/embeddings";
    }

    /**
     * @param
     * @return string
     */
    public static function chatUrl(): string
    {
        return "/chat/completions";
    }

    /**
     * @param
     * @return string
     */
    public static function assistantsUrl(): string
    {
        return "/assistants";
    }

    /**
     * @param
     * @return string
     */
    public static function threadsUrl(): string
    {
        return "/threads";
    }

    /**
     * @param
     * @return string
     */
    public static function ttsUrl(): string
    {
        return "/audio/speech";
    }
}
