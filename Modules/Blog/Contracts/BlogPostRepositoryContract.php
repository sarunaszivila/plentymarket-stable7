<?php
namespace Plenty\Modules\Blog\Contracts;

use Plenty\Exceptions\ValidationException;
use Plenty\Modules\Blog\Models\BlogPost;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;

/**
 * This interface provides methods to create, read, list, update and delete blog posts
 */
interface BlogPostRepositoryContract 
{

	/**
	 * Creates a new blog post.
	 */
	public function createPost(
		array $data
	):BlogPost;

	/**
	 * Get a single blog post by its ID
	 */
	public function getPost(
		string $blogPostId
	):BlogPost;

	/**
	 * Lists all blog posts for current plenty ID.
	 */
	public function listPosts(
		int $page = 1, 
		int $itemsPerPage = 50, 
		array $filters = []
	):array;

	/**
	 * Update data for a post
	 */
	public function updatePost(
		array $data, 
		string $blogPostId
	):BlogPost;

	/**
	 * Delete a single blog post by its ID
	 */
	public function deletePost(
		string $blogPostId
	);

	/**
	 * Migrate old posts to new
	 */
	public function migratePosts(
		array $data = []
	);

	/**
	 * Get old blog post by its ID
	 */
	public function getOldPostById(
		int $id
	);

	/**
	 * Resets all Criteria filters by creating a new instance of the builder object.
	 */
	public function clearCriteria(
	);

	/**
	 * Applies criteria classes to the current repository.
	 */
	public function applyCriteriaFromFilters(
	);

	/**
	 * Sets the filter array.
	 */
	public function setFilters(
		array $filters = []
	);

	/**
	 * Returns the filter array.
	 */
	public function getFilters(
	);

	/**
	 * Returns a collection of parsed filters as Condition object
	 */
	public function getConditions(
	);

	/**
	 * Clears the filter array.
	 */
	public function clearFilters(
	);

}